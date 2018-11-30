<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "imagencia".
 *
 * @property int $id
 * @property string $imagen
 * @property int $catciaid
 * @property string $fecha
 */
class Imagencia extends \yii\db\ActiveRecord
{
  public $imageFile;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'imagencia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['catciaid'], 'integer'],
            [['fecha','imageFile'], 'safe'],
            [['imagen'], 'string', 'max' => 255],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'imagen' => 'Imagen',
            'catciaid' => 'Catciaid',
            'fecha' => 'Fecha',
        ];
    }
}
