<?php

$cv_url='../jsinfo/'.Yii::app()->user->id;
echo "<h2><a href='create'>Add Experience</a> || <a href='admin'>Manage Experience</a> || <a href='$cv_url'>Update Resume</a></h2>";

?>