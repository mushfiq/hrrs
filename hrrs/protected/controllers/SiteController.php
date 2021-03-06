<?php

class SiteController extends Controller
{
	/**
	 * Declares class-based actions.
	 */
	public function actions()
	{
		return array(
			// captcha action renders the CAPTCHA image displayed on the contact page
			'captcha'=>array(
				'class'=>'CCaptchaAction',
				'backColor'=>0xFFFFFF,
			),
			// page action renders "static" pages stored under 'protected/views/site/pages'
			// They can be accessed via: index.php?r=site/page&view=FileName
			'page'=>array(
				'class'=>'CViewAction',
			),
		);
	}

   public function actionVerifyRegistration()
   {
   
   
   echo "ok";
   
   }
   
   
	/**
	 * This is the default 'index' action that is invoked
	 * when an action is not explicitly requested by users.
	 */
	public function actionIndex()
	{
	/*	if (Yii::app()->user->isGuest)
			$this->render('index');
		if (Yii::app()->user->name=='admin')
			$this->redirect('admin');
		elseif (Yii::app()->user->getState('role')=='admin')
			$this->render('index');
		elseif (Yii::app()->user->getState('role')=='company')
			$this->redirect('../company/home');
		elseif (Yii::app()->user->getState('role')=='js')
			$this->redirect('../jsinfo/home');*/

		if (Yii::app()->user->isGuest)
			$this->render('index');
      else{        
         $usertype = UserType::getUserType(Yii::app()->user->id);
         if($usertype=='company')
            $this->redirect($this->createUrl('/company/home'));
         elseif($usertype=='applicant')
            $this->redirect($this->createUrl('/company/home'));
         else
            $this->render('index');
      }
         
         
	}

	/**
	 * This is the action to handle external exceptions.
	 */
	public function actionError()
	{
	    if($error=Yii::app()->errorHandler->error)
	    {
	    	if(Yii::app()->request->isAjaxRequest)
	    		echo $error['message'];
	    	else
	        	$this->render('error', $error);
	    }
	}

	/**
	 * Displays the contact page
	 */
	public function actionContact()
	{
		$model=new ContactForm;
		if(isset($_POST['ContactForm']))
		{
			$model->attributes=$_POST['ContactForm'];
			if($model->validate())
			{
				$headers="From: {$model->email}\r\nReply-To: {$model->email}";
				mail(Yii::app()->params['adminEmail'],$model->subject,$model->body,$headers);
				Yii::app()->user->setFlash('contact','Thank you for contacting us. We will respond to you as soon as possible.');
				$this->refresh();
			}
		}
		$this->render('contact',array('model'=>$model));
	}

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		$model=new LoginForm;

		// if it is ajax validation request
		if(isset($_POST['ajax']) && $_POST['ajax']==='login-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}

		// collect user input data
		if(isset($_POST['LoginForm']))
		{
			$model->attributes=$_POST['LoginForm'];
			// validate user input and redirect to the previous page if valid
			if($model->validate() && $model->login())
			{
				if(Yii::app()->user->getState('role')=='company')
					$this->redirect('../company/home');
				elseif(Yii::app()->user->getState('role')=='js')
					$this->redirect('../jsinfo/home');
				else	
					$this->redirect(Yii::app()->user->returnUrl);
				
			}	
		}
		// display the login form
		$this->render('login',array('model'=>$model));
	}

	/**
	 * Logs out the current user and redirect to homepage.
	 */
	public function actionLogout()
	{
		Yii::app()->user->logout();
		$this->redirect(Yii::app()->homeUrl);
	}
	
	public function actionSignup()
	{
		$this->render('signup');
	}

	public function actionAdmin()
	{
		$this->render('admin');
	}
         public function actionUpload()
   {
	    $model=new UploadForm;
        if(isset($_POST['UploadForm']))
        {
            $model->attributes=$_POST['UploadForm'];
            $model->uploadFile=CUploadedFile::getInstance($model,'UploadForm');
            if($model->save())
            {
                $model->uploadFile->saveAs('path/to/localFile');
                // redirect to success page
            }
        }
        $this->render('upload', array('model'=>$model));
	  
   }

}