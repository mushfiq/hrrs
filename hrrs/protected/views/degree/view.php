<?php
include"menu.php";
?>

<h1>View Degree </h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'degree_name',
		'institute',
		'year',
		'result',
	),
)); ?>
<?php
include"menu.php";
?>
<br />
<br />
<br />