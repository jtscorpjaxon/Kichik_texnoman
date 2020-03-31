<?php
/**
 * Created by PhpStorm.
 * User: Php
 * Date: 31.03.2020
 * Time: 10:53
 */

namespace frontend\controllers\admin;

use frontend\controllers\AppController;
class FoydalanuvchilarController extends AppController
{
public function actionIndex($id=null){
if(!$id) $id='nomalum';
   // return 'Salom Admin!!!';
    $hi='Salom Jaxongir';
    $ismlar=['Maxamadjonov', 'Abdikarimov','Nurmatov'];
   // return $this->render('index',['hello'=>$hi,'royxat'=>$ismlar]);
   return $this->render('index',compact('hi','ismlar','id'));
}
}