<?php

/**
 * This is the model class for table "time_institution".
 *
 * The followings are the available columns in table 'time_institution':
 * @property integer $id
 * @property string $iname
 * @property string $acronym
 * @property string $pic
 * @property string $description
 *
 * The followings are the available model relations:
 * @property InstitutionAlias[] $institutionAliases
 * @property BankAccount[] $bankAccounts
 * @property WorkRelation[] $workRelations
 * @property ActivityNonEu[] $activityNonEus
 * @property Clock[] $clocks
 * @property TimeRecord[] $timeRecords
 */
class Institution extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Institution the static model class
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
		return 'time_institution';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('iname, pic', 'required'),
			array('iname', 'length', 'max'=>100),
			array('acronym', 'length', 'max'=>10),
			array('pic', 'length', 'max'=>9),
			array('description', 'length', 'max'=>600),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, iname, acronym, pic, description', 'safe', 'on'=>'search'),
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
			'institutionAliases' => array(self::HAS_MANY, 'InstitutionAlias', 'institutionid'),
			'bankAccounts' => array(self::HAS_MANY, 'BankAccount', 'institutionid'),
			'workRelations' => array(self::HAS_MANY, 'WorkRelation', 'institutionid'),
			'activityNonEus' => array(self::HAS_MANY, 'ActivityNonEu', 'institutionid'),
			'clocks' => array(self::HAS_MANY, 'Clock', 'institutionid'),
			'timeRecords' => array(self::HAS_MANY, 'TimeRecord', 'institutionid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'iname' => 'Iname',
			'acronym' => 'Acronym',
			'pic' => 'Pic',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('iname',$this->iname,true);
		$criteria->compare('acronym',$this->acronym,true);
		$criteria->compare('pic',$this->pic,true);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}