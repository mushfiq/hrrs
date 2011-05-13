<?php
include"menu.php";
?>

<h1>View Refernce</h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'name',
		'designation',
		'dept',
		'company_name',
		'contact_no',
		'email',
		'relation',
	),
)); ?>

<br />
<br />
<br />