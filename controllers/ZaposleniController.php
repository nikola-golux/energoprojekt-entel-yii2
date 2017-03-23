<?php

namespace app\controllers;

use Yii;
use yii\web\Controller;

class ZaposleniController extends Controller
{
    public function actionIndex()
    {
        // echo "Index strana ZaposleniController-a!";
        // ovde cemo da renderujemo view fajl
        // views/zaposleni/index.php
        $data['name'] = "Nikola";
        return $this->render('index', $data);
    }
    
    public function actionShow()
    {
        echo "Show strana ZaposleniController-a!";
    }
}



