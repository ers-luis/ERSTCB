<?php

/**
 * This is the model class for table "time_activity_non_eu".
 *
 * The followings are the available columns in table 'time_activity_non_eu':
 * @property string $activityid
 * @property integer $personid
 * @property integer $institutionid
 * @property string $anetype
 * @property string $anename
 *
 * The followings are the available model relations:
 * @property Activity $activity
 * @property Users $person
 * @property Institution $institution
 */
class ActivityNonEU extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ActivityNonEU the static model class
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
		return 'time_activity_non_eu';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('activityid, personid, institutionid, anetype, anename', 'required'),
			array('personid, institutionid', 'numerical', 'integerOnly'=>true),
			array('anetype', 'length', 'max'=>25),
			array('anename', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('activityid, personid, institutionid, anetype, anename', 'safe', 'on'=>'search'),
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
			'activity' => array(self::BELONGS_TO, 'Activity', 'activityid'),
			'person' => array(self::BELONGS_TO, 'Users', 'personid'),
			'institution' => array(self::BELONGS_TO, 'Institution', 'institutionid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'activityid' => 'Activityid',
			'personid' => 'Personid',
			'institutionid' => 'Institutionid',
			'anetype' => 'Anetype',
			'anename' => 'Anename',
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

		$criteria->compare('activityid',$this->activityid,true);
		$criteria->compare('personid',$this->personid);
		$criteria->compare('institutionid',$this->institutionid);
		$criteria->compare('anetype',$this->anetype,true);
		$criteria->compare('anename',$this->anename,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}