<?php

class UserController extends Controller
{
	public $layout='//layouts/column2';

	 
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
	 
	 
	private $_model;

	public function filters()
	{
		return array(
			'accessControl', // perform access control for CRUD operations
		);
	}

	public function accessRules()
	{
		return array(
			array('allow',  // allow all users to perform 'index' and 'view' actions
				'actions'=>array('index','view','create','test','update','admin','delete','AddCompany','AddJs','LoginInfo','Test','captcha'),
				'users'=>array('*'),
			),
			/*
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),*/
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

	
	
	
	
	
	/**
	 * Displays a particular model.
	 */
	public function actionView()
	{
		$this->render('view',array(
			'model'=>$this->loadModel(),
		));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate()
	{
		$model=new User;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			if($model->save())
				$this->redirect(array('view','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

	

	public function actionAddCompany()
	{
		$model=new User;		

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			$identity=new UserIdentity($model->username,$model->password);	//call username and password before save

			if($model->save())
				{							
					if($identity->authenticate())
					    Yii::app()->user->login($identity);		 //Login a user	    
														
					$comm=Company::model()->findByAttributes(array('com_user_id'=>$model->id));	//find com_id
					$com_id=$comm->com_id;
					$this->redirect(array('company/update','id'=>$com_id));
				}
		}

		$this->render('AddCompany',array(
			'model'=>$model,
		));
	}
		
	
	public function actionAddJs()
	{
		$model=new User;		

		if(isset($_POST['User']))
		{
			$model->attributes=$_POST['User'];
			$identity=new UserIdentity($model->username,$model->password);	//call username and password before save			
			
			if($model->save())
				{			
					if($identity->authenticate())
					    Yii::app()->user->login($identity);		 //Login a user	    										
					$this->redirect(array('jsinfo/update','id'=>$model->id));
				}
		}
		
		$this->render('AddJs',array(
			'model'=>$model,
		));
	}
		
	

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionUpdate()	//for update UserUpdate model
	{
		$model=UserUpdate::model()->findByAttributes(array('id'=>$_GET['id']));//

		if(isset($_POST['UserUpdate']))
		{
			$model->attributes=$_POST['UserUpdate'];
			if($model->save())
			{
				if (Yii::app()->user->getState('role')=='js')
					$this->redirect(array('jsinfo/view','id'=>$model->id));
				if (Yii::app()->user->getState('role')=='company')
					$this->redirect(array('company/show_details','id'=>$model->id));
					
			}	
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'index' page.
	 */
	public function actionDelete()
	{
		if(Yii::app()->request->isPostRequest)
		{
			// we only allow deletion via POST request
			$this->loadModel()->delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if(!isset($_GET['ajax']))
				$this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		}
		else
			throw new CHttpException(400,'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('User');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin()
	{
		$model=new User('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['User']))
			$model->attributes=$_GET['User'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 */
	public function loadModel()
	{
		if($this->_model===null)
		{
			if(isset($_GET['id']))
				$this->_model=User::model()->findbyPk($_GET['id']);
			if($this->_model===null)
				throw new CHttpException(404,'The requested page does not exist.');
		}
		return $this->_model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model)
	{
		if(isset($_POST['ajax']) && $_POST['ajax']==='user-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
