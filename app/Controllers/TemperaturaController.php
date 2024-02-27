<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class TemperaturaController extends BaseController
{
    public function index()
    {
        //
    }
    public function getTemperaturas(){
        $model = model('TemperaturaModel');
        $data['temperaturas'] = $model->findAll();
        return view('temperaturas',$data);
    }


    public function postTemperatura(){
        $model = model('TemperaturaModel');
        $request = request();
        $hora= $_POST['hora'];
        $fecha = $_POST['fecha'];
        $tempera= $_POST['tempera'];
        $unidad = $_POST['unidad'];
        $blanquillo = $_POST['blanquillo'];
        $data = [
            'hora'=>$hora,
            'fecha' => $fecha,
            'tempera' => $tempera,
            'unidad' => $unidad,
            'blanquillo' => $blanquillo
        ];
        $model->insert($data, false);
        
    }

    public function respuesta(){
        $request = request();
        echo '<pre>';
        print_r($request);
    }
}

