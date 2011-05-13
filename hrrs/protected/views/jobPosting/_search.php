<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'title'); ?>
		<?php echo $form->textField($model,'title',array('size'=>60,'maxlength'=>100)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'com_user_id'); ?>
		<?php echo $form->dropDownList($model,'com_user_id',User::company_list()); ?>
	</div>
	
	<div class="row">
		<?php echo $form->label($model,'category'); ?>
		<?php echo $form->dropDownList($model,'category',Category::category_list()); ?>
	</div>	

	<div class="row">
		<?php echo $form->label($model,'experience'); ?>
		<?php echo $form->textField($model,'experience'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'recruit_number'); ?>
		<?php echo $form->textField($model,'recruit_number'); ?>
	</div>

	<div class="row">
        <?php echo $form->labelEx($model,'create_time'); ?>
		<?php echo $form->textField($model,'deadline',array('id'=>'create_time')); ?> 
		<?php $this->widget('application.extensions.calendar.SCalendar',
		array(
			'inputField'=>'create_time',
			'skin'=>$skin,
			'stylesheet'=>$style,
			'ifFormat'=>'%d-%m-%Y',
		)); ?>	
		<?php echo $form->error($model,'deadline'); ?>	
	</div>	

	<div class="row">
        <?php echo $form->labelEx($model,'deadline'); ?>
		<?php echo $form->textField($model,'deadline',array('id'=>'deadline')); ?> 
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
		<?php echo $form->label($model,'skills_req'); ?>
		<?php echo $form->textArea($model,'skills_req',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'salary_min'); ?>
		<?php echo $form->textField($model,'salary_min'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'salary_max'); ?>
		<?php echo $form->textField($model,'salary_max'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->