<?php

/**
 * This is the model class for table "js_experience".
 *
 * The followings are the available columns in table 'js_experience':
 * @property integer $id
 * @property integer $js_id
 * @property string $position
 * @property string $organization
 * @property string $start_date
 * @property string $end_date
 * @property string $responsibility
 */
class Experience extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @return Experience the static model class
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
		return '{{js_experience}}';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('position, organization', 'required'),
			array('js_id', 'numerical', 'integerOnly'=>true),
			array('position, organization', 'length', 'max'=>100),
			array('start_date, end_date, responsibility', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, js_id, position, organization, start_date, end_date, responsibility', 'safe', 'on'=>'search'),
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

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'js_id' => 'Js',
			'position' => 'Position',
			'organization' => 'Organization',
			'start_date' => 'Start Date',
			'end_date' => 'End Date',
			'responsibility' => 'Responsibility',
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

		$criteria->compare('js_id',$this->js_id);

		$criteria->compare('position',$this->position,true);

		$criteria->compare('organization',$this->organization,true);

		$criteria->compare('start_date',$this->start_date,true);

		$criteria->compare('end_date',$this->end_date,true);

		$criteria->compare('responsibility',$this->responsibility,true);

		return new CActiveDataProvider(get_class($this), array(
			'criteria'=>$criteria,
		));
	}
}