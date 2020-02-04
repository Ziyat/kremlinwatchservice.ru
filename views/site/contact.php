<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */

/* @var $model app\models\ContactForm */

use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Html;

$this->title = 'Контакты';
$this->params['active'] = 'contact';
?>
<div id="contact-section">
    <div class="container">
        <div class="section-title center">
            <h2>Контакты</h2>
            <hr>
            <div class="space"></div>
            <h4>Москва, Никольская улица дом 10, <br> БЦ Никольская Плаза, Этаж второй.</h4>
            <hr>
            <h4><i class="fa fa-clock-o"></i>Время работы: 10:00 - 21:00</h4>
            <h4><i class="fa fa-automobile"></i>Бесплатная Парковка</h4>
            <div class="row">
                <div class="col-md-12">
                    <div class="space"></div>
                    <h4>Оставить заявку</h4>
                    <hr>
                    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

                        <div class="alert alert-success">
                            Благодарим Вас за обращение к нам. Мы ответим вам как можно скорее.
                        </div>

                    <?php else: ?>

                        <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
                        <div class="row">
                            <div class="col-md-4">
                                <?= $form->field($model, 'name')->label(false)->textInput(['placeholder' => 'Имя']) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $form->field($model, 'phone')->label(false)->textInput(['placeholder' => 'Телефон:']) ?>
                            </div>
                            <div class="col-md-12">
                                <?= $form->field($model, 'text')->label(false)->textarea(['rows' => 6, 'placeholder' => 'Опишите проблему']) ?>
                            </div>
                            <div class="col-md-4">
                                <?= $form->field($model, 'verifyCode')->label(false)->widget(Captcha::className(), [
                                    'template' => '{image}{input}',
                                    'options' => ['placeholder' => 'Введите проверочный код с картинки','class' => 'form-control'],
                                    'imageOptions' => ['class' => 'img-responsive', 'style' => 'width:100px; margin-bottom: 15px;']
                                ]) ?>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?= Html::submitButton('Отправить заявку', ['id' => 'submit', 'class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                                </div>
                            </div>
                        </div>
                        <?php ActiveForm::end(); ?>
                    <?php endif; ?>
                </div>
                <div class="col-md-12">
                    <h3>Все интересующие Вас вопросы по ремонту часов Вы можете задать по телефонам:</h3>
                </div>
                <div class="col-md-3">
                    <p><i class="fa fa-phone"></i>
                        <a target="_blank" href="tel:88007007959" class="phones">8 800 700 79 59</a>
                    </p>
                    <p><i class="fa fa-whatsapp"></i>
                        <a target="_blank" href="https://wa.me/79037990707" class="phones">+7 903 799 07 07</a>
                    </p>
                    <p><i class="fa fa-envelope-o"></i> <a href="mailto:didiamonds@mail.ru">didiamonds@mail.ru</a></p>
                    <div class="space"></div>
                    <p><i class="fa fa-map-marker"></i>м. Лубянка</p>
                    <p><i class="fa fa-map-marker"></i>м. Площадь Революции</p>
                    <p><i class="fa fa-map-marker"></i>м. Театральная</p>
                    <p><i class="fa fa-map-marker"></i>м. Охотный Ряд</p>
                </div>
                <div class="col-md-8">
                    <iframe src="https://yandex.ru/map-widget/v1/-/CGxOUKJn" width="100%" height="400" frameborder="1" allowfullscreen="true"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

$script = <<<JS
$('#submit').on('click', function(){
   ym(50956268, 'reachGoal', 'form');
   gtag('event', 'form');
});
JS;
$this->registerJs($script);
