<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('gender')); ?>:</b>
	<?php echo CHtml::encode($data->gender); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('accademic_req')); ?>:</b>
	<?php echo CHtml::encode($data->accademic_req); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('age_from')); ?>:</b>
	<?php echo CHtml::encode($data->age_from); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('age_to')); ?>:</b>
	<?php echo CHtml::encode($data->age_to); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('additional_req')); ?>:</b>
	<?php echo CHtml::encode($data->additional_req); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('job_type')); ?>:</b>
	<?php echo CHtml::encode($data->job_type); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('job_level')); ?>:</b>
	<?php echo CHtml::encode($data->job_level); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('interview_location')); ?>:</b>
	<?php echo CHtml::encode($data->interview_location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('job_location')); ?>:</b>
	<?php echo CHtml::encode($data->job_location); ?>
	<br />

	*/ ?>

</div>