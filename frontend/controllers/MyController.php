<?php
/**
 * Created by PhpStorm.
 * User: Php
 * Date: 31.03.2020
 * Time: 10:53
 */

namespace frontend\controllers;

class MyController extends AppController
{
public function actionIndex($id=null){
if(!$id) $id='nomalum';
   // return 'Salom !!!';
    $hi='Salom Jaxongir';
    $ismlar=['Maxamadjonov', 'Abdikarimov','Nurmatov'];
   // return $this->render('index',['hello'=>$hi,'royxat'=>$ismlar]);
   // $this->debug($ismlar);
    return $this->render('index',compact('hi','ismlar','id'));
}
public function actionBlogPost(){
    return 'gg';
}
}