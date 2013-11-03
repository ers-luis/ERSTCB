<?php

/**
 * This is the model class for table "time_clock".
 *
 * The followings are the available columns in table 'time_clock':
 * @property string $id
 * @property integer $personid
 * @property integer $institutionid
 * @property string $activityid
 * @property string $starttime
 * @property string $endtime
 * @property string $description
 *
 * The followings are the available model relations:
 * @property Users $person
 * @property Institution $institution
 * @property Activity $activity
 */
class Clock extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Clock the static model class
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
		return 'time_clock';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('personid, institutionid, activityid, starttime', 'required'),
			array('personid, institutionid', 'numerical', 'integerOnly'=>true),
			array('description', 'length', 'max'=>600),
			array('endtime', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, personid, institutionid, activityid, starttime, endtime, description', 'safe', 'on'=>'search'),
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
			'person' => array(self::BELONGS_TO, 'Users', 'personid'),
			'institution' => array(self::BELONGS_TO, 'Institution', 'institutionid'),
			'activity' => array(self::BELONGS_TO, 'Activity', 'activityid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'personid' => 'Personid',
			'institutionid' => 'Institutionid',
			'activityid' => 'Activityid',
			'starttime' => 'Starttime',
			'endtime' => 'Endtime',
			'description' => 'Description',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('personid',$this->personid);
		$criteria->compare('institutionid',$this->institutionid);
		$criteria->compare('activityid',$this->activityid,true);
		$criteria->compare('starttime',$this->starttime,true);
		$criteria->compare('endtime',$this->endtime,true);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}