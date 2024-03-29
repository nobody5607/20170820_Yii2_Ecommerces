<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model backend\modules\guides\models\Guidelang */

$this->title = 'Guidelang#'.$model->name;
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Guidelangs'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="guidelang-view">

    <div class="modal-header">
	<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
	<h4 class="modal-title" id="itemModalLabel"><?= Html::encode($this->title) ?></h4>
    </div>
    <div class="modal-body">
        <?= DetailView::widget([
	    'model' => $model,
	    'attributes' => [
		'id',
		'name',
	    ],
	]) ?>
    </div>
</div>
