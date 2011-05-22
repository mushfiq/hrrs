<?php

class LoginController extends Controller
{
	public $defaultAction = 'login';

	/**
	 * Displays the login page
	 */
	public function actionLogin()
	{
		if (Yii::app()->user->isGuest) {
			$model=new UserLogin;
			// collect user input data
			if(isset($_POST['UserLogin']))
			{
				$model->attributes=$_POST['UserLogin'];
				// validate user input and redirect to previous page if valid
				if($model->validate()) {
					$this->lastViset();
					/*if (strpos(Yii::app()->user->returnUrl,'/index.php')!==false)
						$this->redirect(Yii::app()->controller->module->returnUrl);
					else
						$this->redirect(Yii::app()->user->returnUrl);*/
               $this->redirect($this->checkUserType());   
				}
			}
			// display the login form
			$this->render('/user/login',array('model'=>$model));
		} else{
         //$this->checkUserType();
         $this->redirect($this->checkUserType());
			//$this->redirect(Yii::app()->controller->module->returnUrl);
      }   
	}
	
	private function lastViset() {
		$lastVisit = User::model()->notsafe()->findByPk(Yii::app()->user->id);
		$lastVisit->lastvisit = time();
		$lastVisit->save();
	}
   
   private function checkUserType() {
        $usertype = UserType::getUserType(Yii::app()->user->id);        
       	if($usertype == 'company')
            return $this->createUrl('/company/home');
        elseif($usertype == 'applicant')
            return $this->createUrl('/jsInfo/home');
        else
            return Yii::app()->controller->module->returnUrl;
   }

}