<?php
$this->breadcrumbs=array(
	'Job Posting2s',
);

$this->menu=array(
	array('label'=>'Create JobPosting2', 'url'=>array('create')),
	array('label'=>'Manage JobPosting2', 'url'=>array('admin')),
);
?>

<h1>Job Posting2s</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
