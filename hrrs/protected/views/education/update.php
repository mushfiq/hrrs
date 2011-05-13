<?php
$this->breadcrumbs=array(
	'Educations'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Education', 'url'=>array('index')),
	array('label'=>'Create Education', 'url'=>array('create')),
	array('label'=>'View Education', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Education', 'url'=>array('admin')),
);
?>

<h1>Update Education <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>