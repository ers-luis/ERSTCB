<?php

/**
 * This is the model class for table "time_project_account".
 *
 * The followings are the available columns in table 'time_project_account':
 * @property integer $id
 * @property integer $projectid
 * @property integer $accountid
 *
 * The followings are the available model relations:
 * @property Project $project
 * @property BankAccount $account
 */
class ProjectAccount extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return ProjectAccount the static model class
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
		return 'time_project_account';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('projectid, accountid', 'required'),
			array('projectid, accountid', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, projectid, accountid', 'safe', 'on'=>'search'),
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
			'project' => array(self::BELONGS_TO, 'Project', 'projectid'),
			'account' => array(self::BELONGS_TO, 'BankAccount', 'accountid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'projectid' => 'Projectid',
			'accountid' => 'Accountid',
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
		$criteria->compare('projectid',$this->projectid);
		$criteria->compare('accountid',$this->accountid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}