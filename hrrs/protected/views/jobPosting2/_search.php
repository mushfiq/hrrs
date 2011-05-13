<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'gender'); ?>
		<?php echo $form->textField($model,'gender'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'accademic_req'); ?>
		<?php echo $form->textArea($model,'accademic_req',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'age_from'); ?>
		<?php echo $form->textField($model,'age_from'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'age_to'); ?>
		<?php echo $form->textField($model,'age_to'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'additional_req'); ?>
		<?php echo $form->textArea($model,'additional_req',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'job_type'); ?>
		<?php echo $form->textField($model,'job_type'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'job_level'); ?>
		<?php echo $form->textField($model,'job_level'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'interview_location'); ?>
		<?php echo $form->textField($model,'interview_location',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'job_location'); ?>
		<?php echo $form->textField($model,'job_location',array('size'=>60,'maxlength'=>255)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->