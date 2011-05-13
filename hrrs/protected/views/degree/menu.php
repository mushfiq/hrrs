<?php

$cv_url='../jsinfo/'.Yii::app()->user->id;
echo "<h2><a href='create'>Add Degree</a> || <a href='admin'>Manage Degree</a> || <a href='$cv_url'>Update Resume</a></h2>";

?>