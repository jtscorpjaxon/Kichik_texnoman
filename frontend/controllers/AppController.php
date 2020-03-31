<?php
/**
 * Created by PhpStorm.
 * User: Php
 * Date: 31.03.2020
 * Time: 11:22
 */
namespace frontend\controllers;

use yii\web\Controller;
class AppController extends Controller
{
    public function debug($arr){
        echo '<pre>'.print_r($arr,true).'</pre>';
    }

}
 function xato($arr){
    echo '<pre>'.print_r($arr,true).'</pre>';
}
