<?php
$this->breadcrumbs=array(
	'Educations'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List Education', 'url'=>array('index')),
	array('label'=>'Create Education', 'url'=>array('create')),
);


echo"<h1>Educational Information</h1>";

$con='js_id='.Yii::app()->user->id;
$dataProvider=new CActiveDataProvider('Education', array(
    'criteria'=>array(
        'condition'=>$con,
        'order'=>'end_date desc',
    ),
));

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'degree-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'degree',
		'institute',
		'start_date',
		'end_date',
		'subject',
		'duration',
		'result',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

