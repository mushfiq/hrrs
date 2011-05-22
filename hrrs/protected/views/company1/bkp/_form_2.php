<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'company-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'com_type'); ?>
		<?php echo $form->textField($model,'com_type',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'com_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'com_info'); ?>
		<?php echo $form->textArea($model,'com_info',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'com_info'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'com_address'); ?>
		<?php echo $form->textArea($model,'com_address',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'com_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'com_contact_no'); ?>
		<?php echo $form->textField($model,'com_contact_no',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'com_contact_no'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'com_mail'); ?>
		<?php echo $form->textField($model,'com_mail',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'com_mail'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'com_web'); ?>
		<?php echo $form->textField($model,'com_web',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'com_web'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'com_logo'); ?>
		<?php echo $form->textField($model,'com_logo',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'com_logo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'create_time'); ?>
		<?php echo $form->error($model,'create_time'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->