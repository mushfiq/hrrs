<?php

class JobPostingController extends Controller
{
	public $layout='//layouts/column2';

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
				'actions'=>array('index','view','create','update','admin','show','delete','JobList'),
				'users'=>array('*'),
			),
			array('allow', // allow authenticated user to perform 'create' and 'update' actions
				'actions'=>array('create','update'),
				'users'=>array('@'),
			),
			array('allow', // allow admin user to perform 'admin' and 'delete' actions
				'actions'=>array('admin','delete'),
				'users'=>array('admin'),
			),
			array('deny',  // deny all users
				'users'=>array('*'),
			),
		);
	}

/********Customized**********/
	
	public function actionShow()
	{
		$posting2= JobPosting2::model()->findByAttributes(array('id'=>$_GET['id']));	
	
		$this->render('show',array(
			'model'=>$this->loadModel(),'posting2'=>$posting2,
		));
	}
	
	public function actionIndex()
	{
		$dataProvider=new CActiveDataProvider('JobPosting');
		$this->render('index',array(
			'dataProvider'=>$dataProvider,
		));
	}
	
	public function actionView()
	{
		$this->render('view',array(
			'model'=>$this->loadModel(),
		));
	}

	public function actionCreate()
	{
		$model=new JobPosting;

		// $this->performAjaxValidation($model);

		if(isset($_POST['JobPosting']))
		{
			$model->attributes=$_POST['JobPosting'];
			if($model->save())
				$this->redirect(array('show','id'=>$model->id));
		}

		$this->render('create',array(
			'model'=>$model,
		));
	}

/******************/
	public function actionUpdate()
	{
		$model=$this->loadModel();

		// $this->performAjaxValidation($model);

		if(isset($_POST['JobPosting']))
		{
			$model->attributes=$_POST['JobPosting'];
			if($model->save())
				$this->redirect(array('show','id'=>$model->id));
		}

		$this->render('update',array(
			'model'=>$model,
		));
	}

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


	public function actionAdmin()
	{
		$model=new JobPosting('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['JobPosting']))
			$model->attributes=$_GET['JobPosting'];

		$this->render('admin',array(
			'model'=>$model,
		));
	}

	public function actionJobList()
	{
		$model=new JobPosting('search');
		$model->unsetAttributes();  // clear any default values
		if(isset($_GET['JobPosting']))
			$model->attributes=$_GET['JobPosting'];

		$this->render('job_list',array(
			'model'=>$model,
		));
	}
	
	
	public function loadModel()
	{
		if($this->_model===null)
		{
			if(isset($_GET['id']))
				$this->_model=JobPosting::model()->findbyPk($_GET['id']);
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
		if(isset($_POST['ajax']) && $_POST['ajax']==='job-posting1-form')
		{
			echo CActiveForm::validate($model);
			Yii::app()->end();
		}
	}
}
