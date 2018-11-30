<?php
namespace app\models;

use yii\base\Model;
use yii\web\UploadedFile;
use app\models\Imagencia;

class UploadForm extends Model
{
    /**
     * @var UploadedFile
     */
    public $imageFile;
    public $catciaid;

    public function rules()
    {
        return [
            [['imageFile'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
        ];
    }

    public function upload()
    {
        if ($this->validate()) {
            $nombre = 'imagencias/' . $this->imageFile->baseName . uniqid() . '.' . $this->imageFile->extension;
            $this->imageFile->saveAs($nombre);

            return $nombre;
        } else {
            return false;
        }
    }
}
