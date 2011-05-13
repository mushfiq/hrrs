<?php

class JobPosting extends CActiveRecord
{
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function tableName()
	{
		return '{{job_posting1}}';
	}

	public function rules()
	{
		return array(
			array('title,category,deadline','required'),
			array('category, experience, recruit_number, salary_min, salary_max', 'numerical', 'integerOnly'=>true),
            array('deadline', 'type', 'type' => 'date', 'message' => '{attribute}: is not a date!', 'dateFormat' => 'dd-MM-yyyy'),			
			array('title', 'length', 'max'=>100),
			array('responsibility, description, skills_req', 'safe'),
			array('title, category', 'safe', 'on'=>'search'),			
		);
	}

	public function relations()
	{
		return array(
		);
	}
	
	
	protected function beforeSave()
	{
		if(parent::beforeSave())
		{
			if($this->isNewRecord)
			{
				$this->com_user_id=Yii::app()->user->id;
				$this->create_time=time();
			}
			return true;
		}
		else
			return false;
	}
	
	protected function afterSave()
	{
		//if(parent::afterSave())
		//{
			if($this->isNewRecord)
			{
				$sql="insert into job_posting2 (id) values('$this->id')";
				$connection=Yii::app()->db; 
				$command=$connection->createCommand($sql);
				$command->execute(); 				
			}
			return true;
		//}
		//else
			//return false;
	}
	

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'title' => 'Title',
			'category' => 'Category',
			'responsibility' => 'Responsibility',
			'description' => 'Description',
			'experience' => 'Experience',
			'recruit_number' => 'Recruit Number',
			'deadline' => 'Deadline',
			'skills_req' => 'Skills Req',
			'salary_min' => 'Salary Min',
			'salary_max' => 'Salary Max',
			'status' => 'Status',
			'published' => 'Published',
			'com_user_id' => 'Company Name',
			'create_time' => 'Post Date',
		);
	}

	public function search()
	{

		$criteria=new CDbCriteria;

		$criteria->compare('title',$this->title);
		$criteria->compare('category',$this->category);


		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}