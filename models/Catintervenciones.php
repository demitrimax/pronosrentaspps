<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "catintervenciones".
 *
 * @property int $id
 * @property string $nombre
 * @property string $clave
 * @property string $colorrgb
 *
 * @property Movequipos[] $movequipos
 */
class Catintervenciones extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catintervenciones';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'string', 'max' => 20],
            [['nombre'], 'unique'],
            [['clave'], 'string', 'max' => 5],
            [['clave'], 'unique'],
            [['colorrgb'], 'string', 'max' => 7],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'       => 'ID',
            'nombre'   => 'Nombre',
            'clave'    => 'Clave',
            'colorrgb' => 'Color RGB',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMovequipos()
    {
        return $this->hasMany(Movequipos::className(), ['intervencion_id' => 'id']);
    }
}
