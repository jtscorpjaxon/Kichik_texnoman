<?php

/* @var $this yii\web\View */

$this->title = 'Mening Blogim';
?>
<?php
echo \yii\widgets\ListView::widget(
        [
                'dataProvider'=>$dataProvider,
                'itemView'=>'yangilikView'
        ]
);