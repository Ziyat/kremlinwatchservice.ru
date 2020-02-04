<?php


namespace app\logic;


use yii\db\ActiveQuery;
use yii\db\ActiveRecord;

/**
 * Class Service
 * @package logic
 * @property int $id [int(11)]
 * @property BrandService[] $brandService
 * @property Brand[] $brands
 * @property string $name [varchar(255)]
 */
class Service extends ActiveRecord
{
    public function rules()
    {
        return [
            ['name', 'required'],
        ];
    }

    /**
     * @return BrandService|ActiveQuery
     */
    public function getBrandService()
    {
        return $this->hasMany(BrandService::className(), ['service_id' => 'id']);
    }

    /**
     * @return Brand|ActiveQuery
     */
    public function getBrands()
    {
        return $this->hasMany(Brand::className(), ['id' => 'brand_id'])->via('brandService');
    }

    public static function tableName()
    {
        return '{{%service}}';
    }
}
