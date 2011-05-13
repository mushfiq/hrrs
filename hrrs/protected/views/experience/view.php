<h1>View Experiences</h1>

<?php
include"menu.php";
?>


<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'position',
		'organization',
		'start_date',
		'end_date',
		'responsibility',
	),
)); ?>

