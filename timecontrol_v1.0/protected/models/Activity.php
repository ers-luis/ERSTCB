<?php

/**
 * This is the model class for table "time_activity".
 *
 * The followings are the available columns in table 'time_activity':
 * @property string $id
 * @property string $aname
 * @property string $atype
 * @property string $description
 *
 * The followings are the available model relations:
 * @property ActivityEu $activityEu
 * @property ActivityNonEu $activityNonEu
 * @property Clock[] $clocks
 * @property TimeRecord[] $timeRecords
 */
class Activity extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Activity the static model class
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
		return 'time_activity';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('aname, atype', 'required'),
			array('aname', 'length', 'max'=>100),
			array('atype', 'length', 'max'=>5),
			array('description', 'length', 'max'=>600),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, aname, atype, description', 'safe', 'on'=>'search'),
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
			'activityEu' => array(self::HAS_ONE, 'ActivityEu', 'activityid'),
			'activityNonEu' => array(self::HAS_ONE, 'ActivityNonEu', 'activityid'),
			'clocks' => array(self::HAS_MANY, 'Clock', 'activityid'),
			'timeRecords' => array(self::HAS_MANY, 'TimeRecord', 'activityid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'aname' => 'Aname',
			'atype' => 'Atype',
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
		$criteria->compare('aname',$this->aname,true);
		$criteria->compare('atype',$this->atype,true);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}