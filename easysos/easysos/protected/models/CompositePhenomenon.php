<?php

/**
 * This is the model class for table "composite_phenomenon".
 *
 * The followings are the available columns in table 'composite_phenomenon':
 * @property string $composite_phenomenon_id
 * @property string $composite_phenomenon_description
 *
 * The followings are the available model relations:
 * @property Offering[] $offerings
 * @property Phenomenon[] $phenomenons
 * @property RequestCompositePhenomenon[] $requestCompositePhenomenons
 */
class CompositePhenomenon extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return CompositePhenomenon the static model class
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
		return 'composite_phenomenon';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('composite_phenomenon_id', 'required'),
			array('composite_phenomenon_id, composite_phenomenon_description', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('composite_phenomenon_id, composite_phenomenon_description', 'safe', 'on'=>'search'),
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
			'offerings' => array(self::MANY_MANY, 'Offering', 'com_phen_off(composite_phenomenon_id, offering_id)'),
			'phenomenons' => array(self::HAS_MANY, 'Phenomenon', 'composite_phenomenon_id'),
			'requestCompositePhenomenons' => array(self::HAS_MANY, 'RequestCompositePhenomenon', 'composite_phenomenon_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'composite_phenomenon_id' => 'Composite Phenomenon',
			'composite_phenomenon_description' => 'Composite Phenomenon Description',
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

		$criteria->compare('composite_phenomenon_id',$this->composite_phenomenon_id,true);
		$criteria->compare('composite_phenomenon_description',$this->composite_phenomenon_description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}