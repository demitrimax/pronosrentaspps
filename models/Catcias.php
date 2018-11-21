<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "catcias".
 *
 * @property int $id
 * @property string $nombre
 * @property string $iniciales
 * @property string $direccion
 * @property string $replegal
 * @property string $telefono
 * @property string $nacionalidad
 *
 * @property Catequipos[] $catequipos
 */
class Catcias extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catcias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'string', 'max' => 100],
            [['iniciales', 'telefono'], 'string', 'max' => 10],
            [['direccion'], 'string', 'max' => 120],
            [['replegal'], 'string', 'max' => 60],
            [['nacionalidad'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'            => 'ID',
            'nombre'        => 'Nombre',
            'iniciales'     => 'Iniciales',
            'direccion'     => 'Direccion',
            'replegal'      => 'Representante Legal',
            'telefono'      => 'Telefono',
            'nacionalidad'  => 'Nacionalidad',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCatequipos()
    {
        return $this->hasMany(Catequipos::className(), ['compania' => 'id']);
    }
}
