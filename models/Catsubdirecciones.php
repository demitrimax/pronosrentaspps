<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "catsubdirecciones".
 *
 * @property int $id
 * @property string $nombre
 * @property string $nomcorto
 *
 * @property Catactivos[] $catactivos
 */
class Catsubdirecciones extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catsubdirecciones';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre'], 'string', 'max' => 100],
            [['nomcorto'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id'        => 'ID',
            'nombre'    => 'Subdirección',
            'nomcorto'  => 'Abreviatura',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCatactivos()
    {
        return $this->hasMany(Catactivos::className(), ['id_subdir' => 'id']);
    }
}
