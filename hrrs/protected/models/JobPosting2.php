<?php

/**
 * This is the model class for table "job_posting2".
 *
 * The followings are the available columns in table 'job_posting2':
 * @property integer $id
 * @property integer $gender
 * @property string $accademic_req
 * @property integer $age_from
 * @property integer $age_to
 * @property string $additional_req
 * @property integer $job_type
 * @property integer $job_level
 * @property string $interview_location
 * @property string $job_location
 */
class JobPosting2 extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return JobPosting2 the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return '{{job_posting2}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id, gender, age_from, age_to, job_type, job_level', 'numerical', 'integerOnly'=>true),
			array('interview_location, job_location', 'length', 'max'=>255),
			array('accademic_req, additional_req', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, gender, accademic_req, age_from, age_to, additional_req, job_type, job_level, interview_location, job_location', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
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
			}
			return true;
		}
		else
			return false;
	}
	
	
	
	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'gender' => 'Gender',
			'accademic_req' => 'Accademic Req',
			'age_from' => 'Age From',
			'age_to' => 'Age To',
			'additional_req' => 'Additional Req',
			'job_type' => 'Job Type',
			'job_level' => 'Job Level',
			'interview_location' => 'Interview Location',
			'job_location' => 'Job Location',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);

		$criteria->compare('gender',$this->gender);

		$criteria->compare('accademic_req',$this->accademic_req,true);

		$criteria->compare('age_from',$this->age_from);

		$criteria->compare('age_to',$this->age_to);

		$criteria->compare('additional_req',$this->additional_req,true);

		$criteria->compare('job_type',$this->job_type);

		$criteria->compare('job_level',$this->job_level);

		$criteria->compare('interview_location',$this->interview_location,true);

		$criteria->compare('job_location',$this->job_location,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}