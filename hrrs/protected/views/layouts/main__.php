<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <meta name="language" content="en" />
<!-- blueprint CSS framework -->
        <!-- tagging off additional css
	
	<link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/css/screen.css" media="screen, projection" />
	<link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/css/print.css" media="print" />
	<!--[if lt IE 8]>
	<link rel="stylesheet" type="text/css" href="<?php // echo Yii::app()->request->baseUrl; ?>/css/ie.css" media="screen, projection" />
	<![endif]-->
	<!--<link rel="stylesheet" type="text/css" href="<?php //echo Yii::app()->request->baseUrl; ?>/css/main.css" /> -->
        <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/themes/new/temp/job/style.css" />

	<link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/form.css" />

	<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
 <body>



<!-- Custom theme start-->

     <div id="wrap">

<nav id="mainnav">

<h1 id="textlogo">
HRRS<span></span>
</h1>
<li class="active">
    <?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
	            array('label'=>'Find Jobs', 'url'=>array('/jobposting/joblist')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/user/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/user/logout'), 'visible'=>!Yii::app()->user->isGuest),
				array('label'=>'Sign Up', 'url'=>array('/user/registration'), 'visible'=>Yii::app()->user->isGuest),
				                         ),
		)); ?>

	


</li>
</nav>

<section id="content">
<header id="homeheader">
<h2>

<span>Efficient,effective & versatile</span>
We are bringing new era in human resource recruitement system.Providing thousands of jobs for the potential job seekers.Automatic CV sorting,profile managment is our power.
</h2> <!-- width="255" height="218" -->
<img src="<?php echo Yii::app()->request->baseUrl; ?>/themes/new/temp/job/images/f.jpg" width="320" height="240"  alt="header image" class="headerimg"> </header>
<section id="page">
<header class="mainheading">
<h2 class="introhead">HRRS ultimate Solution for Online based Recruitment.</h2>
</header>

<section id="fourcols">

<div class="clear"></div>

</section>
</section>
</section>
</div>


<!-- custom theme end -->


<div class="container" id="page">

	<div id="header">
		<div id="logo"><?php echo CHtml::encode(Yii::app()->name); ?></div>
	</div><!-- header -->

	
	<?php $this->widget('zii.widgets.CBreadcrumbs', array(
		'links'=>$this->breadcrumbs,
	)); ?><!-- breadcrumbs -->

	<?php echo $content; ?>
<footer>
	
        <div id="bottom">
<a href="#">Home</a> | <a href="#">Find Jobs</a> | <a href="#">Company Registration</a> |<a href="#">Contact Us</a> | <a href="#">Our Services</a> | <a href="#">Login</a>
<div class="clear"></div>
</div> 
</div>
<div id="credits">
2010 &copy; All Rights Reserved.  <a href="http://hrrs.com" title="HRRS">Web Application </a> by HRRS </div>
</footer>
</footer>
</div><!-- page -->

</body>
</html>