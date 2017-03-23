<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "employees_firms".
 *
 * @property integer $employee_id
 * @property integer $firm_id
 */
class EmployeeFirmMapping extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'employees_firms';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['employee_id', 'firm_id'], 'required'],
            [['employee_id', 'firm_id'], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'employee_id' => 'Employee ID',
            'firm_id' => 'Firm ID',
        ];
    }
}
