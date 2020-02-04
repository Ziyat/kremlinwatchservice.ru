<?php

use app\logic\Brand;
use yii\bootstrap\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\logic\Service */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Services', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="container">
    <h1><?= Html::encode($this->title) ?></h1>
    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <div class="row">
        <div class="col-md-6">
            <?= DetailView::widget([
                'model' => $model,
                'attributes' => [
                    'id',
                    'name',
                ],
            ]) ?>
        </div>
        <div class="col-md-6">
            <?= Html::beginForm(['assign-brands','id' => $model->id], 'post') ?>
            <div class="panel panel-default">
                <div class="panel-heading">Брэнды</div>
                <div class="panel-body">
                    <p>Цена:</p>
                    <?= Html::input('number', 'price',$model->brandService ? $model->brandService[0]->price : 0, ['class' => 'form-control', 'id' => 'price']) ?>
                    <div class="pre-scrollable">
                        <?= Html::checkboxList('ids[]', $model->brandService ? ArrayHelper::getColumn($model->brandService,'brand_id'):null,
                            ArrayHelper::map(Brand::find()->all(), 'id', 'name'),
                            ['class' => 'checkbox', 'separator' => '<br>']
                        ) ?>
                    </div>
                </div>
                <div class="panel-footer">
                    <?= Html::submitButton('Присвоить', ['class' => 'btn btn-info btn-sm']) ?>
                </div>
            </div>
            <?= Html::endForm() ?>
        </div>
    </div>
</div>
