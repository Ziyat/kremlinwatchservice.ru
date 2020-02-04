<?php
namespace app\logic;

use yii\db\ActiveRecord;

class ServiceType extends ActiveRecord
{
    public function rules()
    {
        return [
            ['name','required'],
            ['service_id','integer'],
        ];
    }

    public static function tableName()
    {
        return '{{%service_type}}';
    }
}
