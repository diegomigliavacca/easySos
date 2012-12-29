<?php

/**
 * This is the model class for table "spatial_ref_sys".
 *
 * The followings are the available columns in table 'spatial_ref_sys':
 * @property integer $srid
 * @property string $auth_name
 * @property integer $auth_srid
 * @property string $srtext
 * @property string $proj4text
 */
class SpatialRefSys extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return SpatialRefSys the static model class
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
		return 'spatial_ref_sys';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('srid', 'required'),
			array('srid, auth_srid', 'numerical', 'integerOnly'=>true),
			array('auth_name', 'length', 'max'=>256),
			array('srtext, proj4text', 'length', 'max'=>2048),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('srid, auth_name, auth_srid, srtext, proj4text', 'safe', 'on'=>'search'),
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
			'srid' => 'Srid',
			'auth_name' => 'Auth Name',
			'auth_srid' => 'Auth Srid',
			'srtext' => 'Srtext',
			'proj4text' => 'Proj4text',
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

		$criteria->compare('srid',$this->srid);
		$criteria->compare('auth_name',$this->auth_name,true);
		$criteria->compare('auth_srid',$this->auth_srid);
		$criteria->compare('srtext',$this->srtext,true);
		$criteria->compare('proj4text',$this->proj4text,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}