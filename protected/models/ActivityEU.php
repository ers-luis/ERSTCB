<?php

/**
 * This is the model class for table "time_activity_eu".
 *
 * The followings are the available columns in table 'time_activity_eu':
 * @property string $activityid
 * @property integer $wpid
 * @property string $aetype
 * @property string $aename
 *
 * The followings are the available model relations:
 * @property Activity $activity
 * @property WorkPackage $wp
 */
class ActivityEU extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ActivityEU the static model class
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
		return 'time_activity_eu';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('activityid, wpid, aetype, aename', 'required'),
			array('wpid', 'numerical', 'integerOnly'=>true),
			array('aetype', 'length', 'max'=>5),
			array('aename', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('activityid, wpid, aetype, aename', 'safe', 'on'=>'search'),
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
			'wp' => array(self::BELONGS_TO, 'WorkPackage', 'wpid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'activityid' => 'Activityid',
			'wpid' => 'Wpid',
			'aetype' => 'Aetype',
			'aename' => 'Aename',
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
		$criteria->compare('wpid',$this->wpid);
		$criteria->compare('aetype',$this->aetype,true);
		$criteria->compare('aename',$this->aename,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}