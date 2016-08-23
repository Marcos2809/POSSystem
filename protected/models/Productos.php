<?php

/**
 * This is the model class for table "productos".
 *
 * The followings are the available columns in table 'productos':
 * @property integer $Id_Producto
 * @property string $Articulo
 * @property string $PrecioVenta
 * @property integer $Codigo
 * @property integer $Id_categoria
 * @property integer $Id_Seccion
 */
class Productos extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'productos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Articulo, PrecioVenta, Codigo, Id_categoria, Id_Seccion', 'required'),
			array('Codigo, Id_categoria, Id_Seccion', 'numerical', 'integerOnly'=>true),
			array('Articulo', 'length', 'max'=>30),
			array('PrecioVenta', 'length', 'max'=>8),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Id_Producto, Articulo, PrecioVenta, Codigo, Id_categoria, Id_Seccion', 'safe', 'on'=>'search'),
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
			'Id_Producto' => 'Id Producto',
			'Articulo' => 'Articulo',
			'PrecioVenta' => 'Precio Venta',
			'Codigo' => 'Codigo',
			'Id_categoria' => 'Id Categoria',
			'Id_Seccion' => 'Id Seccion',
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

		$criteria->compare('Id_Producto',$this->Id_Producto);
		$criteria->compare('Articulo',$this->Articulo,true);
		$criteria->compare('PrecioVenta',$this->PrecioVenta,true);
		$criteria->compare('Codigo',$this->Codigo);
		$criteria->compare('Id_categoria',$this->Id_categoria);
		$criteria->compare('Id_Seccion',$this->Id_Seccion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Productos the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
