<?php

include"menu.php";

?>



<h2>Login Information (<a href="../../user/update/<?php print $user->id ?>">edit</a>)</h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$user,
	'attributes'=>array(
		array('name'=>'Company Name','value'=>$user->full_name),
		'email',
		'username',		
	),
)); ?>

<br /><br />
<h2>Company Details (<a href="../../company/update/<?php print $model->com_id ?>">edit</a>)</h2>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'com_type',
		'com_info',
		'com_address',
		'com_contact_no',
		'com_web',
		'com_logo',
		'create_time',
	),
)); ?>