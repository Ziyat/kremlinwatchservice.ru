<?php


namespace app\logic;


use yii\db\ActiveRecord;

/**
 * Class BrandService
 * @package app\logic
 * @property int $brand_id [int(11)]
 * @property int $service_id [int(11)]
 * @property float $price [float]
 */
class BrandService extends ActiveRecord
{
    public function rules()
    {
        return [
            [['brand_id', 'service_id', 'price'], 'required'],
            [['brand_id', 'service_id'], 'integer'],
            ['price', 'number'],
        ];
    }

    public static function tableName()
    {
        return 'brand_service';
    }
}
