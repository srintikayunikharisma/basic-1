<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "organisasi".
 *
 * @property int $id
 * @property string $nama
 * @property string $tgl_lahir
 * @property string $jenis_kelamin
 * @property string $alamat
 * @property string $jabatan
 */
class Organisasi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'organisasi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'tgl_lahir', 'jenis_kelamin', 'alamat', 'jabatan'], 'required'],
            [['tgl_lahir'], 'safe'],
            [['nama', 'alamat', 'jabatan'], 'string', 'max' => 30],
            [['jenis_kelamin'], 'string', 'max' => 1],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'tgl_lahir' => 'Tgl Lahir',
            'jenis_kelamin' => 'Jenis Kelamin',
            'alamat' => 'Alamat',
            'jabatan' => 'Jabatan',
        ];
    }
}
