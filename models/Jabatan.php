<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "jabatan".
 *
 * @property int $id_jabatan
 * @property string $jabatan
 */
class Jabatan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'jabatan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['jabatan'], 'required'],
            [['jabatan'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_jabatan' => 'Id Jabatan',
            'jabatan' => 'Jabatan',
        ];
    }
}
