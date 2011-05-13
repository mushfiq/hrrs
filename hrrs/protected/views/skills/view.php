
<h1>View Skills</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'name',
		'description',
	),
)); ?>
<?php
include"menu.php";
?>
<br />
<br />
<br />