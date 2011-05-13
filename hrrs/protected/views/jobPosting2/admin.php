<?php
$this->breadcrumbs=array(
	'Job Posting2s'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List JobPosting2', 'url'=>array('index')),
	array('label'=>'Create JobPosting2', 'url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('job-posting2-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>

<h1>Manage Job Posting2s</h1>

<p>
You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>&lt;&gt;</b>
or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button')); ?>
<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'job-posting2-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'gender',
		'accademic_req',
		'age_from',
		'age_to',
		'additional_req',
		/*
		'job_type',
		'job_level',
		'interview_location',
		'job_location',
		*/
		array(
			'class'=>'CButtonColumn',
		),
	),
)); ?>
