<?php

/**
 * This is the model class for table "time_bank_account".
 *
 * The followings are the available columns in table 'time_bank_account':
 * @property integer $id
 * @property integer $institutionid
 * @property string $accountnumber
 * @property string $description
 *
 * The followings are the available model relations:
 * @property Institution $institution
 * @property ProjectAccount[] $projectAccounts
 */
class BankAccount extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return BankAccount the static model class
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
		return 'time_bank_account';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('institutionid, accountnumber', 'required'),
			array('institutionid', 'numerical', 'integerOnly'=>true),
			array('accountnumber', 'length', 'max'=>100),
			array('description', 'length', 'max'=>600),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, institutionid, accountnumber, description', 'safe', 'on'=>'search'),
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
			'institution' => array(self::BELONGS_TO, 'Institution', 'institutionid'),
			'projectAccounts' => array(self::HAS_MANY, 'ProjectAccount', 'accountid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'institutionid' => 'Institutionid',
			'accountnumber' => 'Accountnumber',
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
		$criteria->compare('institutionid',$this->institutionid);
		$criteria->compare('accountnumber',$this->accountnumber,true);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}