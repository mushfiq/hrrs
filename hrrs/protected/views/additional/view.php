<?php
include"menu.php";
?>

<h1>View Additional Info</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'name',
		'description',
	),
)); ?>

<br />
<br />
<br />