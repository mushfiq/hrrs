

<h1>Manage Degrees</h1>



<?php 

$con='user_id='.Yii::app()->user->id;
$dataProvider=new CActiveDataProvider('Degree', array(
    'criteria'=>array(
        'condition'=>$con,
        'order'=>'degree_name',
    ),
));



$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'degree-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'degree_name',
		'institute',
		'year',
		'result',
		array(
			'class'=>'CButtonColumn','deleteButtonLabel'=>'d',
		),
	),
)); ?>
<?php
include"menu.php";
?>
<br />
<br />
<br />