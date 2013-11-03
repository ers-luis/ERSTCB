<?php

/**
 * This is the model class for table "time_work_relation".
 *
 * The followings are the available columns in table 'time_work_relation':
 * @property integer $id
 * @property integer $personid
 * @property integer $institutionid
 * @property integer $projectid
 * @property string $startdate
 * @property string $enddate
 *
 * The followings are the available model relations:
 * @property Users $person
 * @property Institution $institution
 * @property Project $project
 */
class WorkRelation extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return WorkRelation the static model class
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
		return 'time_work_relation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('personid, institutionid, projectid, startdate', 'required'),
			array('personid, institutionid, projectid', 'numerical', 'integerOnly'=>true),
			array('enddate', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, personid, institutionid, projectid, startdate, enddate', 'safe', 'on'=>'search'),
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
			'project' => array(self::BELONGS_TO, 'Project', 'projectid'),
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
			'projectid' => 'Projectid',
			'startdate' => 'Startdate',
			'enddate' => 'Enddate',
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
		$criteria->compare('personid',$this->personid);
		$criteria->compare('institutionid',$this->institutionid);
		$criteria->compare('projectid',$this->projectid);
		$criteria->compare('startdate',$this->startdate,true);
		$criteria->compare('enddate',$this->enddate,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}