<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */

$this->title = 'YIIzza';
?>
<div class="site-index">

    <h1>Zobacz Yiizze</h1>

    <div class="body-content">
        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo $post->NazwaPizzy; ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo $post->Składniki; ?>
            </li>
            <li class="list-group-item d-flex justify-content-between align-items-center">
                <?php echo $post->Kategoria; ?>
            </li>
        </ul>

        <div class="row">
            <a href=<?php echo yii::$app->homeUrl; ?> class=" btn btn-primary">Powrót</a>

        </div>
    </div>
</div>