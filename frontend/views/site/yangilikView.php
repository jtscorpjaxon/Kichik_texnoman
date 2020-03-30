<?php
/**
 * Created by PhpStorm.
 * User: Php
 * Date: 23.03.2020
 * Time: 21:23
 */
?>


<div class="card mb-4">
            <div class="card-body">
                <h2 class="card-title">
                    <a href="<?=\yii\helpers\Url::to(['yangilik/view','id'=>$model->nomer])  ?>">
                    <?php echo $model->sarlavha; ?> </a></h2>

                <p class="card-text">
                    <?php
                    echo substr($model->mahsulot,0,200); ?>
                </p>

                <p><a class="btn btn-primary" href="<?=\yii\helpers\Url::to(['yangilik/view','id'=>$model->nomer])  ?>">
                      O'tish
                    </a></p></div>
                <div class="card-footer text-muted">
                    <?php echo $model->hosil_sana; ?></a>
                    <a  href="#"> <?php echo $model->bolim->sarlavha; ?></a> </div>
</div>