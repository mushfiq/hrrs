<div class="form">
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'job-posting1-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>
	
	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'title'); ?>
	</div>
		
	<div class="row">
		<?php echo $form->labelEx($model,'category'); ?>
		<?php echo $form->dropDownList($model,'category', Category::category_list()); ?>
		<?php echo $form->error($model,'category'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'responsibility'); ?>
		<?php echo $form->textArea($model,'responsibility',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'responsibility'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'experience'); ?>
		<?php echo $form->textField($model,'experience'); ?>
		<?php echo $form->error($model,'experience'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'recruit_number'); ?>
		<?php echo $form->textField($model,'recruit_number'); ?>
		<?php echo $form->error($model,'recruit_number'); ?>
	</div>

	<div class="row">
        <?php echo $form->labelEx($model,'deadline'); ?>
		<?php echo $form->textField($model,'deadline',array('id'=>'deadline')); ?> (calendar appears when textbox gets focus)
		<?php $this->widget('application.extensions.calendar.SCalendar',
		array(
			'inputField'=>'deadline',
			'skin'=>$skin,
			'stylesheet'=>$style,
			'ifFormat'=>'%d-%m-%Y',
		)); ?>	
		<?php echo $form->error($model,'deadline'); ?>	
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'skills_req'); ?>
		<?php echo $form->textArea($model,'skills_req',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'skills_req'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salary_min'); ?>
		<?php echo $form->textField($model,'salary_min'); ?>
		<?php echo $form->error($model,'salary_min'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'salary_max'); ?>
		<?php echo $form->textField($model,'salary_max'); ?>
		<?php echo $form->error($model,'salary_max'); ?>
	</div>
	
	<div class="row">
		<?php echo $form->labelEx($model,'published'); ?>
		<?php echo $form->dropDownList($model,'published', Lookup::items('published')); ?>
		<?php echo $form->error($model,'published'); ?>
	</div>
	
	

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Save' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->