<div class="cus_menu">
<?php

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
	$('.search-form').toggle();
	return false;
});
$('.search-form form').submit(function(){
	$.fn.yiiGridView.update('job-posting1-grid', {
		data: $(this).serialize()
	});
	return false;
});
");
?>
</div>
<h1>List of available jobs</h1>

<?php $link= CHtml::link('Advanced Search','#',array('class'=>'search-button')); 
echo "<h2>$link</h2>";

?>


<div class="search-form" style="display:none">
<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<div class="search-form">
<?php $this->renderPartial('simple_search',array(
	'model'=>$model,
)); ?>
</div>


<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$model->search(),
	'itemView'=>'_view',
)); ?>


