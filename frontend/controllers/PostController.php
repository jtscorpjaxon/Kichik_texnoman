<?php
/**
 * Created by PhpStorm.
 * User: Php
 * Date: 31.03.2020
 * Time: 11:25
 */

namespace frontend\controllers;
use Yii;

class PostController extends AppController
{
   // public $layout='basic';
    public function actionBug()
    {
       // var_dump(Yii::$app);
        $this->debug(Yii::$app);
        return $this->render('index');
    }
    public function actionIndex(){
        return $this->render('index');
    }
    public function actionShow(){
        $this->layout='basic';
        return $this->render('show');
    }
}