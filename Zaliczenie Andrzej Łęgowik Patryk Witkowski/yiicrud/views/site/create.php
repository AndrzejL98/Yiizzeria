<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */

$this->title = 'YIIzza';
?>
<div class="site-index">

    <h1>Stwórz Yiizze</h1>

    <div class="row">


    </div>
    <div class="body-content">
        <?php
        $form = ActiveForm::begin() ?>

        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($post, 'NazwaPizzy'); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?= $form->field($post, 'Składniki')->textarea(['rows' => '6']); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <?php $items = ['Mięsna' => 'Mięsna', 'Bezmięsna' => 'Bezmięsna', 'Ostra' => 'Ostra']; ?>
                    <?= $form->field($post, 'Kategoria')->dropDownList($items, ['prompt' => 'Select']); ?>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="form-group">
                <div class="col-lg-6">
                    <div class="col-lg-3">
                        <?= Html::submitButton('Stwórz Pizze', ['class' => 'btn btn-primary']); ?>
                    </div>
                    <div class="col-lg-2">
                        <a href=<?php echo yii::$app->homeUrl; ?> class=" btn btn-primary">Powrót</a>
                    </div>
                </div>
            </div>
        </div>



        <?php ActiveForm::end() ?>
    </div>
</div>