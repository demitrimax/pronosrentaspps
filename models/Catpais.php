<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "catpais".
 *
 * @property int $id
 * @property string $nombre
 * @property int $contador
 */
class Catpais extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catpais';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['contador'], 'integer'],
            [['nombre'], 'string', 'max' => 50],
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
            'contador' => 'Contador',
        ];
    }
}
