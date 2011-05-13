<?php

echo"<h1>Manage Experience</h1>";
include"menu.php";

$con='js_id='.Yii::app()->user->id;
$dataProvider=new CActiveDataProvider('Experience', array(
    'criteria'=>array(
        'condition'=>$con,
        'order'=>'position',
    ),
));

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'experience-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'position',
		'organization',
		'start_date',
		'end_date',
		'responsibility',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

<br /><br /><br /><br />