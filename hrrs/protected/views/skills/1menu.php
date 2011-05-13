<?php

$cv_url='./jsinfo/'.Yii::app()->user->id;

$this->menu=array(
	array('label'=>'Add Skills', 'url'=>array('create')),
	array('label'=>'Manage Skills', 'url'=>array('admin')),
	array('label'=>'Update Resume', 'url'=>array($cv_url)),
	
);

?>