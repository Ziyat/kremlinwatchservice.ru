<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $phone;
    public $text;
    public $verifyCode;


    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            [['name', 'text', 'phone'], 'required'],
            ['verifyCode', 'captcha'],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'verifyCode' => 'Verification Code',
        ];
    }

    /**
     * @param $email
     * @return bool
     * @throws \yii\base\InvalidParamException
     */
    public function contact($email)
    {
        if ($this->validate()) {
            Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom(['info@kremlinwatchservice.ru' => 'Обратная связь - kremlinwatchservice.ru'])
                ->setSubject('Новая заявка на ремонт')
                ->setTextBody('Имя: ' . $this->name . "\nТелефон: " . $this->phone . "\nСообщение: " . $this->text)
                ->send();
            return true;
        }
        return false;
    }
}
