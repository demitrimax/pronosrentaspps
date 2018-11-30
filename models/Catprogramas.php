<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "catprogramas".
 *
 * @property int $id
 * @property string $nombre
 * @property string $anio
 * @property string $version
 * @property int $usuario_id
 *
 * @property Movequipos[] $movequipos
 */
class Catprogramas extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'catprogramas';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['usuario_id'], 'integer'],
            [['nombre'], 'string', 'max' => 50],
            [['anio'], 'string', 'max' => 4],
            [['version'], 'string', 'max' => 10],
            [['nombre'], 'unique'],
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
            'anio' => 'Anio',
            'version' => 'Version',
            'usuario_id' => 'Usuario ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMovequipos()
    {
        return $this->hasMany(Movequipos::className(), ['programa_id' => 'id']);
    }
}
