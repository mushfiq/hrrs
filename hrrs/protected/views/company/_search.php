<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'com_id'); ?>
		<?php echo $form->textField($model,'com_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'com_type'); ?>
		<?php echo $form->textField($model,'com_type',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'com_info'); ?>
		<?php echo $form->textArea($model,'com_info',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'com_address'); ?>
		<?php echo $form->textArea($model,'com_address',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'com_contact_no'); ?>
		<?php echo $form->textField($model,'com_contact_no',array('size'=>30,'maxlength'=>30)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'com_web'); ?>
		<?php echo $form->textField($model,'com_web',array('size'=>50,'maxlength'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'com_logo'); ?>
		<?php echo $form->textField($model,'com_logo'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'com_user_id'); ?>
		<?php echo $form->textField($model,'com_user_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->