<div class="view">
<div class="row">
	<b><?php echo CHtml::encode($data->getAttributeLabel('title')); ?>:</b>

	<?php echo CHtml::link(CHtml::encode($data->title), array('show', 'id'=>$data->id)); ?>
        <br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('com_user_id')); ?>:</b>
	<?php echo CHtml::encode(User::full_name($data->com_user_id)); ?>	
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('deadline')); ?>:</b>
	<?php echo CHtml::encode($data->deadline); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('recruit_number')); ?>:</b>
	<?php echo CHtml::encode($data->recruit_number); ?>
	<br />
........................................................................................
</div>
</div>