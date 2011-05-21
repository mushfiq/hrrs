<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('com_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->com_id), array('view', 'id'=>$data->com_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('com_type')); ?>:</b>
	<?php echo CHtml::encode($data->com_type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('com_info')); ?>:</b>
	<?php echo CHtml::encode($data->com_info); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('com_address')); ?>:</b>
	<?php echo CHtml::encode($data->com_address); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('com_contact_no')); ?>:</b>
	<?php echo CHtml::encode($data->com_contact_no); ?>
	<br />


	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('com_web')); ?>:</b>
	<?php echo CHtml::encode($data->com_web); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('com_logo')); ?>:</b>
	<?php echo CHtml::encode($data->com_logo); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	*/ ?>

</div>