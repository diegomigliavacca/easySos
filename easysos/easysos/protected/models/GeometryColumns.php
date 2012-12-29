<?php

/**
 * This is the model class for table "geometry_columns".
 *
 * The followings are the available columns in table 'geometry_columns':
 * @property string $f_table_catalog
 * @property string $f_table_schema
 * @property string $f_table_name
 * @property string $f_geometry_column
 * @property integer $coord_dimension
 * @property integer $srid
 * @property string $type
 */
class GeometryColumns extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return GeometryColumns the static model class
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
		return 'geometry_columns';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('f_table_catalog, f_table_schema, f_table_name, f_geometry_column, coord_dimension, srid, type', 'required'),
			array('coord_dimension, srid', 'numerical', 'integerOnly'=>true),
			array('f_table_catalog, f_table_schema, f_table_name, f_geometry_column', 'length', 'max'=>256),
			array('type', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('f_table_catalog, f_table_schema, f_table_name, f_geometry_column, coord_dimension, srid, type', 'safe', 'on'=>'search'),
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
			'f_table_catalog' => 'F Table Catalog',
			'f_table_schema' => 'F Table Schema',
			'f_table_name' => 'F Table Name',
			'f_geometry_column' => 'F Geometry Column',
			'coord_dimension' => 'Coord Dimension',
			'srid' => 'Srid',
			'type' => 'Type',
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

		$criteria->compare('f_table_catalog',$this->f_table_catalog,true);
		$criteria->compare('f_table_schema',$this->f_table_schema,true);
		$criteria->compare('f_table_name',$this->f_table_name,true);
		$criteria->compare('f_geometry_column',$this->f_geometry_column,true);
		$criteria->compare('coord_dimension',$this->coord_dimension);
		$criteria->compare('srid',$this->srid);
		$criteria->compare('type',$this->type,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}