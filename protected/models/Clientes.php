<?php

/**
 * This is the model class for table "clientes".
 *
 * The followings are the available columns in table 'clientes':
 * @property string $ApellidoM
 * @property string $ApellidoP
 * @property string $Nombre
 * @property string $Direccion
 * @property integer $Telefono
 * @property integer $Id_Cliente
 */
class Clientes extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'clientes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ApellidoM, ApellidoP, Nombre, Direccion, Telefono', 'required'),
			array('Telefono', 'numerical', 'integerOnly'=>true),
			array('ApellidoM, ApellidoP', 'length', 'max'=>30),
			array('Nombre', 'length', 'max'=>50),
			array('Direccion', 'length', 'max'=>100),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('ApellidoM, ApellidoP, Nombre, Direccion, Telefono, Id_Cliente', 'safe', 'on'=>'search'),
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
			'ApellidoM' => 'Apellido M',
			'ApellidoP' => 'Apellido P',
			'Nombre' => 'Nombre',
			'Direccion' => 'Direccion',
			'Telefono' => 'Telefono',
			'Id_Cliente' => 'Id Cliente',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('ApellidoM',$this->ApellidoM,true);
		$criteria->compare('ApellidoP',$this->ApellidoP,true);
		$criteria->compare('Nombre',$this->Nombre,true);
		$criteria->compare('Direccion',$this->Direccion,true);
		$criteria->compare('Telefono',$this->Telefono);
		$criteria->compare('Id_Cliente',$this->Id_Cliente);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Clientes the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
