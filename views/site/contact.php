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
                        8 (499) 344 04 00
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

                        <?= $form->field($model, 'name')->label(false)->textInput(['placeholder' => 'Имя']) ?>
                        <?= $form->field($model, 'phone')->label(false)->textInput(['placeholder' => 'Телефон:']) ?>
                        <?= $form->field($model, 'email')->label(false)->textInput(['placeholder' => 'Эл. почта:']) ?>
                        <?= $form->field($model, 'text')->label(false)->textarea(['rows' => 6, 'placeholder' => 'Опишите проблему']) ?>

                        <?= $form->field($model, 'verifyCode')->label(false)->widget(Captcha::className(), [
                            'template' => '{image}{input}',
                            'options' => ['placeholder' => 'Введите проверочный код с картинки','class' => 'form-control'],
                            'imageOptions' => ['class' => 'img-responsive', 'style' => 'width:30%; margin-bottom: 15px;']
                        ]) ?>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <?= Html::submitButton('Отправить заявку', ['id' => 'submit', 'class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
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

<?php

$script = <<<JS
$('#submit').on('click', function(){
   ym(50956268, 'reachGoal', 'form');
   gtag('event', 'form');
});
JS;
$this->registerJs($script);