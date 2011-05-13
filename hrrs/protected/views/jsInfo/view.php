<?php

//$url='view/'.Yii::app()->user->id;
echo "<center><h2><a href='home'>Home</a> || <a href='#'>View Resume</a></h2></center>";

$user_id=Yii::app()->user->id;

?>


<h1>Name : <?php echo $model->first_name." ".$model->middle_name." ".$model->last_name; ?></h1>
<br />

<h2>Personal Information (<?php echo CHtml::link('edit', array('update', 'id'=>$model->id)); ?>)</h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'objectives',
		'contact_no',
		'website',
		'salary',
		'photo',
		'address',
		'city',
		array('name'=>'country','value'=>Country::show($model->country)),		
		'postal_code',
		'state',
		'experince_year',		
	),
)); ?>

<br /><br /><h2>Login Information (<?php echo CHtml::link('edit', array('user/update', 'id'=>$model->id)); ?>)</h2>

<?php
if (Yii::app()->user->getState('role')=='js')
{
	$user=User::model()->findbyPk($user_id);
	$this->widget('zii.widgets.CDetailView', array(
		'data'=>$user,
		'attributes'=>array(
			'email',
			'username',		
		),
	));
}


echo "<br /><br /><h3>Experience (".Chtml::link('update','../experience/admin').")</h3>";
$con='js_id='.$user_id;
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
	),
)); 


echo "<br /><br /><h3>Education (".Chtml::link('update','../degree/admin').")</h3>";
$con='user_id='.$user_id;
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
	),
)); 

echo "<br /><br /><h3>Skills (".Chtml::link('update','../skills/admin').")</h3>";
$con='js_id='.$user_id;
$dataProvider=new CActiveDataProvider('Skills', array(
    'criteria'=>array(
        'condition'=>$con,
        'order'=>'name',
    ),
));
 $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'skills-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'name',
		'description',
	),
)); 

echo "<br /><br /><h3>Additional Skills (".Chtml::link('update','../additional/admin').")</h3>";
$con='js_id='.$user_id;
$dataProvider=new CActiveDataProvider('Additional', array(
    'criteria'=>array(
        'condition'=>$con,
        'order'=>'name',
    ),
));
 $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'additional-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'name',
		'description',
	),
)); 



echo "<br /><br /><h3>Refernce (".Chtml::link('update','../refernce/admin').")</h3>";
$con='js_id='.$user_id;
$dataProvider=new CActiveDataProvider('Refernce', array(
    'criteria'=>array(
        'condition'=>$con,
        'order'=>'name',
    ),
));
 $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'refernce-grid',
	'dataProvider'=>$dataProvider,
	'columns'=>array(
		'name',
		'designation',
		'dept',
		'company_name',
		'contact_no',
		'email',
		'relation',
	),
)); 


?>

<br /><br /><br /><br />