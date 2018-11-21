<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "catactivos".
 *
 * @property int $id
 * @property string $nombre
 * @property string $nomcorto
 * @property int $id_subdir
 */
class Catactivos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catactivos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_subdir'], 'integer'],
            [['nombre'], 'string', 'max' => 50],
            [['nomcorto'], 'string', 'max' => 10],
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
            'nomcorto' => 'Nomcorto',
            'id_subdir' => 'Id Subdir',
        ];
    }
}
