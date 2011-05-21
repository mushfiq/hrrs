<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
   <meta name="language" content="en" />

   <!-- blueprint CSS framework -->
   <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/date_input.css"/>
   <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/facebox.css"/>
   
   <!--[if lt IE 8]>
   <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/ie.css" media="screen, projection" />
   <![endif]-->

   <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/jquery.wysiwyg.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/style.css" />
   <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->theme->baseUrl; ?>/css/visualize.css" />

   <title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>

<body>
<div id="hld">
   
      <div class="wrapper">      <!-- wrapper begins -->
         <div id="header">
            <div class="hdrl"></div>
            <div class="hdrr"></div>
            
            <h1><a href="#"><?php echo CHtml::encode(Yii::app()->name); ?></a></h1>

            <div id="mainmenu">
               <?php $this->widget('zii.widgets.CMenu',array(
                  'id' => 'nav',
                  'items'=>array(
                     array('label'=>'Home', 'url'=>array('/site/index')),
                     array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
                     array('label'=>'Contact', 'url'=>array('/site/contact')),
                     array('label'=>'Demonstrations', 'items'=>array(
                                                                        array('label' => 'Upload File', 'url' => array('/site/upload')),
                                                                        array('label' => 'Image gallery', 'url' => array('/site/gallery')),
                                                                        array('label' => 'Site statistics', 'url' => array('/site/stat')),
                                                                        array('label' => 'TinyMCE', 'url' => array('/site/tinymce')),
                                                                     ),'visible'=>!Yii::app()->user->isGuest ),
                     array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
                     array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest),
                     array('label'=>'Register', 'url'=>array('/site/signup'), 'visible'=>Yii::app()->user->isGuest),
                  ),
               )); ?>
            </div><!-- mainmenu -->
          </div>
   
   <?php if(isset($this->breadcrumbs)):?>
      <?php $this->widget('zii.widgets.CBreadcrumbs', array(
         'links'=>$this->breadcrumbs,
         'tagName'=>'p',
      )); ?><!-- breadcrumbs -->
   <?php endif?>

   <?php echo $content; ?>

   <div id="footer">
      Copyright &copy; <?php echo date('Y'); ?> HRRS Ltd.<br/>
   </div><!-- footer -->

   </div>                  <!-- wrapper ends -->
   
</div>      <!-- #hld ends -->

<<<<<<< HEAD
	<div id="mainmenu">
		<?php $this->widget('zii.widgets.CMenu',array(
			'items'=>array(
				array('label'=>'Home', 'url'=>array('/site/index')),
				array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
				array('label'=>'Contact', 'url'=>array('/site/contact')),
				array('label'=>'Login', 'url'=>array('/user/login'), 'visible'=>Yii::app()->user->isGuest),
				array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/user/logout'), 'visible'=>!Yii::app()->user->isGuest)
			),
		)); ?>
	</div><!-- mainmenu -->





</body>
</html>