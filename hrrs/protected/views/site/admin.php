<?php
$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Manage',
);

$this->menu=array(
	array('label'=>'List User', 'url'=>array('index')),
	array('label'=>'Create User', 'url'=>array('create')),
);

echo"<h2>Admin Panel</h2>";

echo CHtml::link('User','../user');
echo"<br />";
echo CHtml::link('Company','../company');
echo"<br />";
echo CHtml::link('Job Seeker','../jsinfo');
echo"<br />";
echo CHtml::link('Job Posting','../jobposting');
echo"<br />";
echo CHtml::link('Category','../category');
echo"<br />";
echo CHtml::link('Country','../country');
echo"<br />";
echo CHtml::link('Degree','../degree');

?>



