<?php
//include"menu.php";

echo"<h1>Manage Refernces</h1>";

$con='js_id='.Yii::app()->user->id;
$dataProvider=new CActiveDataProvider('Refernce', array(
    'criteria'=>array(
        'condition'=>$con,
        'order'=>'name',
    ),
));

$this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'Refernce-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'name',
		'designation',
		'dept',
		'company_name',
		'contact_no',
		'email',
		'relation',
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>

<?php
include"menu.php";?>
<br />
<br />
<br />