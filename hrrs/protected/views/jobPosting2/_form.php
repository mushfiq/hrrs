<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'job-posting2-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'gender'); ?>
		<?php echo $form->dropDownList($model,'gender', Lookup::items('gender')); ?>
		<?php echo $form->error($model,'gender'); ?>
	</div>
		
	<div class="row">
		<?php echo $form->labelEx($model,'accademic_req'); ?>
		<?php echo $form->textArea($model,'accademic_req',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'accademic_req'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'age_from'); ?>
		<?php echo $form->textField($model,'age_from'); ?>
		<?php echo $form->error($model,'age_from'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'age_to'); ?>
		<?php echo $form->textField($model,'age_to'); ?>
		<?php echo $form->error($model,'age_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'additional_req'); ?>
		<?php echo $form->textArea($model,'additional_req',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'additional_req'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'job_type'); ?>
		<?php echo $form->dropDownList($model,'job_type', Lookup::items('job_type')); ?>
		<?php echo $form->error($model,'job_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'job_level'); ?>
		<?php echo $form->dropDownList($model,'job_level', Lookup::items('job_level')); ?>
		<?php echo $form->error($model,'job_level'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'interview_location'); ?>
		<?php echo $form->textField($model,'interview_location',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'interview_location'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'job_location'); ?>
		<?php echo $form->textField($model,'job_location',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'job_location'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->