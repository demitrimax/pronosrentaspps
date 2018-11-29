<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "catesquemactto".
 *
 * @property int $id
 * @property string $nombre
 * @property string $corto
 * @property string $descripcion
 *
 * @property Catequipos[] $catequipos
 */
class Catesquemactto extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catesquemactto';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'string', 'max' => 50],
            [['corto'], 'string', 'max' => 10],
            [['descripcion'], 'string', 'max' => 100],
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
            'corto' => 'Corto',
            'descripcion' => 'Descripcion',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCatequipos()
    {
        return $this->hasMany(Catequipos::className(), ['esquema' => 'id']);
    }
}
