<?php

use yii\helpers\Html;
/* @var $this yii\web\View */

$this->title = 'Yiizzeria WST';
?>
<div class="site-index">
    <?php if (yii::$app->session->hasFlash('message')) : ?>
        <div class="alert alert-dismissible alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?php echo yii::$app->session->getFlash('message'); ?>
        </div>

    <?php endif; ?>
    <div class="jumbotron">
        <h1 style="color:#337ab7;">YIIzzeria WST!</h1>


    </div>
    <div class="row">
        <span style="margin-bottom:20px;"><?= Html::a('Create', ['/site/create'], ['class' => 'btn btn-primary']) ?></span>

    </div>
    <div class="body-content">

        <div class="row">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nazwa Pizzy</th>
                        <th scope="col">Składniki</th>
                        <th scope="col">Kategoria</th>
                        <th scope="col">Akcje</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (count($posts) > 0) : ?>
                        <?php foreach ($posts as $post) : ?>
                            <tr class="table-active">
                                <th scope="row"><?php echo $post->id; ?></th>
                                <td><?php echo $post->NazwaPizzy; ?></td>
                                <td><?php echo $post->Składniki; ?></td>
                                <td><?php echo $post->Kategoria; ?></td>
                                <td>
                                    <span><?= Html::a('View', ['view', 'id' => $post->id], ['class' => 'label label-primary']) ?></span>
                                    <span><?= Html::a('Update', ['update', 'id' => $post->id], ['class' => 'label label-success']) ?></span>
                                    <span><?= Html::a('Delete', ['delete', 'id' => $post->id], ['class' => 'label label-danger']) ?></span>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    <?php else : ?>
                        <tr>
                            <td> No Records Found!</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>

    </div>
</div>