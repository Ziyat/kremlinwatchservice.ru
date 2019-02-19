<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Контакты';
$this->params['active'] = 'contact';
?>
<div id="contact-section">
    <div class="container">
        <div class="section-title center">
            <h2>Контакты</h2>
            <hr>
            <div class="space"></div>
            <h4>Москва, ТЦ "Славянский" Никольская улица.
                Дом 17 строение 2 , офис 7
            </h4>
            <div class="row">
                <div class="col-md-12">
                    <h3>Все интересующие Вас вопросы по ремонту часов Вы можете задать по телефонам:</h3>
                    <div class="space"></div>
                    <p><i class="fa fa-phone"></i>
                        8 (495) 799 07 07
                    </p>
                    <p><i class="fa fa-phone"></i>
                        8 (903) 799 07 07
                    </p>
                    <div class="space"></div>
                    <p><i class="fa fa-envelope-o"></i>didiamonds@mail.ru</p>
                </div>
                <div class="col-md-4">
                    <div class="space"></div>
                    <h4>Оставить заявку</h4>
                    <hr>
                    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

                        <div class="alert alert-success">
                            Благодарим Вас за обращение к нам. Мы ответим вам как можно скорее.
                        </div>

                    <?php else: ?>

                        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                        <?= $form->field($model, 'name')->label('Ф.И.О')->textInput() ?>

                        <?= $form->field($model, 'brand')->label('Марка часов') ?>

                        <?= $form->field($model, 'email')->label('Эл. Почта') ?>
                        <?= $form->field($model, 'phone')->label('Тел:') ?>

                        <?= $form->field($model, 'text')->label('Опишите проблему')->textarea(['rows' => 6]) ?>

                        <?= $form->field($model, 'verifyCode')->label('введите код с картинки')->widget(Captcha::className(), [
                            'template' => '<div class="row"><div class="col-md-3">{image}</div><div class="col-md-6">{input}</div></div>',
                        ]) ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?= Html::submitButton('Отправить заявку', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                                </div>
                            </div>

                        </div>
                        <?php ActiveForm::end(); ?>
                    <?php endif; ?>
                </div>
                <div class="space"></div>
                <div class="col-md-3">
                    <div class="space"></div>
                    <p><i class="fa fa-map-marker"></i>м. Лубянка</p>
                    <div class="space"></div>
                    <p><i class="fa fa-map-marker"></i>м. Площадь Революции</p>
                    <div class="space"></div>
                    <p><i class="fa fa-map-marker"></i>м. Театральная</p>
                    <div class="space"></div>
                    <p><i class="fa fa-map-marker"></i>м. Охотный Ряд</p>
                    <div class="space"></div>
                </div>
                <div class="col-md-5">
                    <iframe src="https://yandex.ru/map-widget/v1/-/CBB1ZXH8sD" width="100%" height="300"
                            frameborder="0"></iframe>
                </div>

            </div>
        </div>
    </div>
</div>
