<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'degree-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'degree_name'); ?>
		<?php echo $form->textField($model,'degree_name'); ?>
		<?php echo $form->error($model,'degree_name'); ?>
	</div>

		<?php echo $form->hiddenField($model,'user_id', array('value'=>Yii::app()->user->id)); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'institute'); ?>
		<?php echo $form->textField($model,'institute',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'institute'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'year'); ?>
		<?php echo $form->textField($model,'year'); ?>
		<?php echo $form->error($model,'year'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'result'); ?>
		<?php echo $form->textField($model,'result',array('size'=>30,'maxlength'=>30)); ?>
		<?php echo $form->error($model,'result'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->