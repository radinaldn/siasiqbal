<?php
/**
 * Created by PhpStorm.
 * User: radinaldn
 * Date: 01/06/18
 * Time: 10:57
 */

namespace app\controllers;


use yii\web\Controller;

class HomeController extends Controller
{
    public function actionIndex(){
        return $this->render('index');
    }
}