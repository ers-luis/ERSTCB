<?php

/**
 * This is the model class for table "time_users".
 *
 * The followings are the available columns in table 'time_users':
 * @property integer $personid
 * @property string $login
 * @property string $password
 * @property integer $roleid
 *
 * The followings are the available model relations:
 * @property Person $person
 * @property Role $role
 * @property WorkRelation[] $workRelations
 * @property ActivityNonEu[] $activityNonEus
 * @property Clock[] $clocks
 * @property TimeRecord[] $timeRecords
 */
class User extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return User the static model class
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
		return 'time_users';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('login, password', 'required', 'on'=>'login, register'),
			array('roleid', 'required', 'on'=>'register'),
			array('roleid', 'numerical', 'integerOnly'=>true),
			array('login', 'length', 'max'=>25),
			array('password', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('login, roleid', 'safe', 'on'=>'search'),
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
			'person' => array(self::BELONGS_TO, 'Person', 'personid'),
			'role' => array(self::BELONGS_TO, 'Role', 'roleid'),
			'workRelations' => array(self::HAS_MANY, 'WorkRelation', 'personid'),
			'activityNonEus' => array(self::HAS_MANY, 'ActivityNonEu', 'personid'),
			'clocks' => array(self::HAS_MANY, 'Clock', 'personid'),
			'timeRecords' => array(self::HAS_MANY, 'TimeRecord', 'personid'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'personid' => 'Person Id',
			'login' => 'Login',
			'password' => 'Password',
			'roleid' => 'Role Id',
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

		$criteria->compare('personid',$this->personid);
		$criteria->compare('login',$this->login,true);
		$criteria->compare('password',$this->password,true);
		$criteria->compare('roleid',$this->roleid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
	
    public function validatePassword($password)
    {
        return $password===$this->password;
    }
	
	
	
}