<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "eqclase".
 *
 * @property int $id
 * @property string $nombre
 * @property string $abreviatura
 *
 * @property Catequipos[] $catequipos
 */
class Eqclase extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'eqclase';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'string', 'max' => 15],
            [['abreviatura'], 'string', 'max' => 5],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'abreviatura' => 'Abreviatura',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCatequipos()
    {
        return $this->hasMany(Catequipos::className(), ['clase' => 'id']);
    }
}
