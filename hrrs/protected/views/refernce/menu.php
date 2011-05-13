<?php

$cv_url='../jsinfo/'.Yii::app()->user->id;

//$this->menu=array(
//	array('label'=>'Add Refernces', 'url'=>array('create')),
//	array('label'=>'Manage Refernces', 'url'=>array('admin')),
//	array('label'=>'Update Resume', 'url'=>array($cv_url)),
//
//);

echo "<h2><a href='create'>Add Refernce</a> || <a href='admin'>Manage Referncees</a> || <a href='$cv_url'>Update Resume</a></h2>";


?>