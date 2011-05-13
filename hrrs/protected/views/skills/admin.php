<?php

include"menu.php";
echo"<h1>Manage Skills</h1>";

$con='js_id='.Yii::app()->user->id;
$dataProvider=new CActiveDataProvider('Skills', array(
    'criteria'=>array(
        'condition'=>$con,
        'order'=>'name',
    ),
));

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'degree-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'name',
		'description',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

<br />
<br />
<br />