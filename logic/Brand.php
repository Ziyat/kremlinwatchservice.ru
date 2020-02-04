<?php


namespace app\logic;


use yii\db\ActiveRecord;

class Brand extends ActiveRecord
{

    public function rules()
    {
        return [
            ['name', 'required'],
        ];
    }

    public static function tableName()
    {
        return '{{%brand}}';
    }
}
