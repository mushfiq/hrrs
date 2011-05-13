<?php
$this->breadcrumbs=array(
	'Educations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Education', 'url'=>array('index')),
	array('label'=>'Manage Education', 'url'=>array('admin')),
);
?>

<h1>Create Education</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>