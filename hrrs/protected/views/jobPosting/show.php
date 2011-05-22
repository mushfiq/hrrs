<?php

//include"menu.php";

echo "<center><h2>Post Name: $model->title</h2></center>";

//if (Yii::app()->user->getState('role')=='company'){
    echo CHtml::link('Edit',array('/jobposting/update', 'id'=>$model->id)); 
//}

$this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		array('name'=>'category','value'=>Category::item($model->category)),		
		'responsibility:html',
		'description:text',
		'experience',
		'recruit_number',
		'deadline',
		'skills_req',
		'salary_min',
		'salary_max',
	),
)); ?>

<br /><br />

<?php
if (Yii::app()->user->getState('role')=='company'){?>
<h2>Aditional Information (<a href="../../jobposting2/update/<?php print $model->id ?>">edit</a>)</h2>
<?php }
echo CHtml::link('Edit',array('/jobposting2/update', 'id'=>$model->id));


 $this->widget('zii.widgets.CDetailView', array(
	'data'=>$posting2,
	'attributes'=>array(
		array('name'=>'gender','value'=>Lookup::item('gender',$posting2->gender)),
		'accademic_req',
		'age_from',
		'age_to',
		'additional_req',
		array('name'=>'job_type','value'=>Lookup::item('job_type',$posting2->job_type)),
		array('name'=>'job_level','value'=>Lookup::item('job_level',$posting2->job_level)),
		'interview_location',
		'job_location',
	),
)); 


if (Yii::app()->user->getState('role')=='js'){?>
<center><h2><a href="../update/<?php print $model->id ?>">Apply for this job</a></h2></center>
<?php }

?>

<br /><br /><br /><br />