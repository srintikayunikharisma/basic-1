<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cyber".
 *
 * @property int $id
 * @property string $nama
 * @property string $tgl_lahir
 * @property string $jekel
 * @property int $angkatan
 * @property int $id_divisi
 *
 * @property Divisi $divisi
 */
class Cyber extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cyber';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'tgl_lahir', 'jekel', 'angkatan', 'id_divisi'], 'required'],
            [['tgl_lahir'], 'safe'],
            [['angkatan', 'id_divisi'], 'integer'],
            [['nama'], 'string', 'max' => 50],
            [['jekel'], 'string', 'max' => 5],
            [['id_divisi'], 'exist', 'skipOnError' => true, 'targetClass' => Divisi::className(), 'targetAttribute' => ['id_divisi' => 'id']],
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
            'jekel' => 'Jekel',
            'angkatan' => 'Angkatan',
            'id_divisi' => 'Id Divisi',
        ];
    }

    /**
     * Gets query for [[Divisi]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getDivisi()
    {
        return $this->hasOne(Divisi::className(), ['id' => 'id_divisi']);
    }
}
