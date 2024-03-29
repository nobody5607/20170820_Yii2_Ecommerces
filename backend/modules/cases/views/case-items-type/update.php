<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\modules\cases\models\CaseItemsType */

$this->title = Yii::t('app', 'Update {modelClass}: ', [
    'modelClass' => 'Case Items Type',
]) . ' ' . $model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Case Items Types'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->name, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="case-items-type-update">

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
