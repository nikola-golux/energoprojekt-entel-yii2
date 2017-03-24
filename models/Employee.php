<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employees".
 *
 * @property integer $id
 * @property string $Ime
 * @property string $Prezime
 * @property string $Zanimanje
 * @property string $created_at
 * @property string $updated_at
 * @property integer $firm_id
 *
 * @property Firms $firm
 * @property EmployeesFirms[] $employeesFirms
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
            [['firm_id'], 'required'],
            [['created_at', 'updated_at'], 'safe'],
            [['firm_id'], 'integer'],
            [['Ime', 'Prezime', 'Zanimanje'], 'string', 'max' => 255],
            [['firm_id'], 'exist', 'skipOnError' => true, 'targetClass' => Firms::className(), 'targetAttribute' => ['firm_id' => 'id']],
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
            'firm_id' => 'Firm ID',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getFirm()
    {
        return $this->hasOne(Firms::className(), ['id' => 'firm_id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmployeesFirms()
    {
        return $this->hasMany(EmployeesFirms::className(), ['employee_id' => 'id']);
    }
}
