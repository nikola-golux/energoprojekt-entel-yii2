<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * This is the model class for table "employees".
 *
 * @property integer $id
 * @property string $Ime
 * @property string $Prezime
 * @property string $Zanimanje
 * @property string $created_at
 * @property string $updated_at
 */
class Employee extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employees';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['created_at', 'updated_at'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['Ime', 'Prezime', 'Zanimanje'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'Ime' => 'Ime',
            'Prezime' => 'Prezime',
            'Zanimanje' => 'Zanimanje',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }
    
    public function getRules() {
        return $this->hasMany(Firm::className(), ['id' => 'id_firm'])
            ->viaTable(EmployeeFirmMapping::tableName(), ['id_employee' => 'id']);
    }
}
