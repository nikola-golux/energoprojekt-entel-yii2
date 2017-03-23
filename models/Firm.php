<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * This is the model class for table "firms".
 *
 * @property integer $id
 * @property string $ime_firme
 * @property string $created_at
 * @property string $updated_at
 */
class Firm extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'firms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['ime_firme'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ime_firme' => 'Ime Firme',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
}
