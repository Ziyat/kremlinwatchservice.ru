<?php
/* @var $this yii\web\View */

function cmp($a, $b)
{
    $a = preg_replace('@^(a|an|the) @', '', $a);
    $b = preg_replace('@^(a|an|the) @', '', $b);
    return strcasecmp($a, $b);
}

$this->title = 'Стоимость Ремонта';
$this->registerMetaTag([
    'name' => 'keywords',
    'content' => 'ремонт часов в москве, диагностика часов в москве, замена элементов питания часов в москве'
]);
$this->registerMetaTag([
    'property' => 'og:title',
    'content' => $this->title
]);
$this->registerMetaTag([
    'property' => 'og:image',
    'content' => '/img/kremlinwatchservice.jpg'
]);
$this->params['active'] = 'price';

$brands = [
    'ARMAND' => 'price4',
    'NICOLET' => 'price4',
    'BAUME' => 'price4',
    'MERCIER' => 'price4',
    'TAG' => 'price4',
    'HEUER' => 'price4',
    'CONCORD' => 'price4',
    'TUDOR' => 'price4',
    'RADO' => 'price4',
    'PEQUIGNET' => 'price4',
    'OMEGA' => 'price4',
    'EBERHARD' => 'price4',
    'JAGUAR' => 'price4',
    'MONTBLANK' => 'price4',
    'MAURICE' => 'price4',
    'LACROIX' => 'price4',
    'RAYMOND' => 'price4',
    'WEIL' => 'price4',
    'APELLA' => 'price4',
    'GOLD' => 'price4',
    'MOVADO' => 'price4',
    'CHANEL' => 'price4',
    'A.DUNHILL' => 'price4',
    'ITD' => 'price4',
    'CHAUMET' => 'price4',
    'MILUS' => 'price4',
    'KELEK' => 'price4',
    'TECHNOMARINE' => 'price4',
    'VAN DER BAUWEDE' => 'price4',
    'AQUANAUTIC' => 'price4',


    'BREITILING' => 'price5',
    'BVLGARI' => 'price5',
    'CARTIER' => 'price5',
    'CORUM' => 'price5',
    'EBEL' => 'price5',
    'IWC' => 'price5',
    'JEAN RICHARD' => 'price5',
    'JORG HYSEK' => 'price5',
    'PANERAI' => 'price5',
    'PAUL PICOT' => 'price5',
    'ROLEX' => 'price5',
    'ULYSSE NARDIN' => 'price5',
    'CFB' => 'price5',
    'ZENITH' => 'price5',
    'FORTIS' => 'price5',
    'TUDOR' => 'price5',
    'CARL F. BUCHERER' => 'price5',
    'CHRONOSWISS' => 'price5',
    'PERRELET' => 'price5',
    'PORCHE DESIGN' => 'price5',
    'CONCORD' => 'price5',
    'DUBEY SHALDENBRAND' => 'price5',
    'OMEGA' => 'price5',
    'CHAUMET' => 'price5',
    'VAN DER BAUWEDE' => 'price5',


    'August Raymond' => 'price1',
    'Mido' => 'price1',
    'Longines' => 'price1',
    'Edox' => 'price1',
    'Eterna' => 'price1',
    'Marvin' => 'price1',
    'Nina Ricci' => 'price1',
    'Oris' => 'price1',
    'Revue Thommen' => 'price1',
    'Frederique' => 'price1',
    'Constant' => 'price1',
    'Bulova' => 'price1',
    'Jacques Lemans' => 'price1',
    'Eterna' => 'price1',
    'Maurice Lacroix' => 'price1',
    'Jean Marcel' => 'price1',
    'Busherer' => 'price1',
    'K. Mozer' => 'price1',
    'Сhristian Dior' => 'price1',
    'Gustav' => 'price1',
    'Becker' => 'price1',
    'louis Erard' => 'price1',
    'Paul Nickel' => 'price1',
    'Michel Herbelin' => 'price1',

    'Tissot' => 'price2',
    'Charmex' => 'price2',
    'Enicar Certina' => 'price2',
    'Hugo Boss' => 'price2',
    'Sector' => 'price2',
    'Swiss Military' => 'price2',
    'Festina' => 'price2',
    'Apella' => 'price2',
    'Continental' => 'price2',
    'Cover' => 'price2',
    'Swatch' => 'price2',
    'Balmain' => 'price2',
    'CK' => 'price2',
    'Wenger' => 'price2',
    'Olma' => 'price2',
    'Doxa' => 'price2',
    'Kolber' => 'price2',
    'Philipp Laurence' => 'price2',
    'Roamer' => 'price2',
    'Titoni' => 'price2',
    'Crovana' => 'price2',
    'Fendi' => 'price2',
    'Claude Bernard' => 'price2',
    'Candino' => 'price2',
    'Alfex' => 'price2',
    'Atlantic' => 'price2',
    'Cerutti' => 'price2',
    'Emporio Armani' => 'price2',
    'Roberto cavalli' => 'price2',

    'AUDEMARS PIGUET' => 'price3',
    'CARTIER' => 'price3',
    'BLANCPAIN' => 'price3',
    'BREGUET' => 'price3',
    'CHOPARD' => 'price3',
    'FRANK' => 'price3',
    'MULLER' => 'price3',
    'PATEK PHILIPPE' => 'price3',
    'VACHERON' => 'price3',
    'KONSTANTIN' => 'price3',
    'PARMIGIANI' => 'price3',
    'GIRARD PERREGAUX' => 'price3',
    'JAEGER LE COOLTRE' => 'price3',
    'ZENITH' => 'price3',
    'GRAHAM' => 'price3',
    'QUINTING' => 'price3',
    'RICHARD MILLE' => 'price3',
    'GERALD GENTA' => 'price3',
    'ROGER DUBUIS' => 'price3',
    'LOUIS MOINET' => 'price3',
    'A. LANGE & SÖHNE' => 'price3',
    'GLASHUTTE ORIGINAL' => 'price3',
    'ARNOLD & SON' => 'price3',
    'ROLEX' => 'price3',
    'HUBLOT' => 'price3',

];
uksort($brands, 'cmp');
$letters = \yii\helpers\ArrayHelper::getColumn(array_keys($brands), function ($item) {
    $first = mb_strtolower(substr($item, 0, 1));
    return preg_match('/\w+/', $first) ? mb_strtoupper($first) : false;
});

$letters = array_unique($letters);
$letters = array_filter($letters);
$letters = array_values($letters);
sort($letters);
?>

<div id="second-section">
    <div class="container">
        <div class="space"></div>
        <div class="section-title">
            <h2><?= $this->title ?></h2>
            <hr>
        </div>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-striped table-bordered">
                    <tbody>
                    <?php foreach ($letters as $k => $letter): ?>
                        <tr>
                            <th style="vertical-align: middle;"><h5><?= $letter ?></h5></th>
                            <td>
                                <?php foreach ($brands as $brand => $price): ?>
                                    <?php if (substr(mb_strtoupper($brand), 0, 1) == $letter): ?>
                                        <button
                                                style="margin: 5px; border: none;"
                                                type="button"
                                                class="btn btn-default"
                                                data-toggle="modal"
                                                data-target="#<?= $price ?>">
                                            <?= $brand; ?>
                                        </button>
                                    <?php else: continue; endif; ?>

                                <?php endforeach; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- MODALS -->


<div id="price1" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Прайс</h4>
            </div>
            <div class="modal-body">
                <p class="alert alert-success">Общий ремонт механизма. <b>Гарантия</b> на выполненные работы составляет
                    <b>12 месяцев.</b></p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Услуга</th>
                            <th>Цена</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>Механические часы с ручным заводом</th>
                            <td>7300</td>

                        </tr>
                        <tr>
                            <th>Механические часы с автоподзаводом</th>
                            <td>9500</td>

                        </tr>
                        <tr>
                            <th>Механический хронограф</th>
                            <td>16550</td>

                        </tr>
                        <tr>
                            <th>Механизм с накладным модулем</th>
                            <td>21600</td>

                        </tr>
                        <tr>
                            <th>Кварцевые часы</th>
                            <td>6600</td>

                        </tr>
                        <tr>
                            <th>Кварцевый хронограф</th>
                            <td>11400</td>

                        </tr>
                        <tr>
                            <th>Сложный кварцевый хронограф</th>
                            <td>14500</td>

                        </tr>
                        <tr>
                            <th>Кварцевые часы типа «Автокварц»</th>
                            <td>11150</td>
                        </tr>
                        <tr>
                            <th class="text-danger text-center" colspan="2"><h3>Наценка на выполняемые виды работ (Плюс
                                    к базовой стоимости )</h3></th>
                        </tr>
                        <tr>
                            <th>Одна дополнительная функция</th>
                            <td>20%</td>
                        </tr>
                        <tr>
                            <th>Две и более дополнительных функций</th>
                            <td>50%</td>
                        </tr>
                        <tr>
                            <th>Часы в корпусе из драгметалла и или с драгоценными камнями</th>
                            <td>20%</td>
                        </tr>
                        <tr>
                            <th>Часы со следами коррозии</th>
                            <td>50%</td>
                        </tr>
                        <tr>
                            <th>Хронометрированный механизм</th>
                            <td>20%</td>
                        </tr>
                        <tr>
                            <th>Часы с механизмом еtа 2000-1</th>
                            <td>20%</td>
                        </tr>
                        <tr>
                            <th>Срочный ремонт в течении 3 суток</th>
                            <td>50%</td>
                        </tr>
                        <tr>
                            <th class="text-danger text-center" colspan="2"><h3>Нестандартные виды работ согласовываются
                                    дополнительно с мастером</h3></th>
                        </tr>
                        <tr>
                            <th>Замена элементов питания в простых часах</th>
                            <td>1100</td>

                        <tr>
                            <th>Замена элементов питания в хронографе</th>
                            <td>1450</td>

                        </tr>
                        </tr>
                        <tr>
                            <th>Замена элементов питания в часах с нестандартным извлечением</th>
                            <td>2150</td>

                        </tr>
                        <tr>
                            <th>Подгонка браслета. Замена ремня. Штифта</th>
                            <td>От 500</td>

                        </tr>
                        <tr>
                            <th>Замена уплотнителя задней крышки</th>
                            <td>От 600</td>

                        </tr>
                        <tr>
                            <th>Установка съемного ушка</th>
                            <td>От 250</td>

                        </tr>
                        <tr>
                            <th>Чистка браслета часов ультразвуком</th>
                            <td>От 1200</td>

                        </tr>
                        <tr>
                            <th>Регулировка точности хода в механических часах ( без гарантии)</th>
                            <td>800</td>
                        </tr>
                        <tr>
                            <th class="text-danger text-center" colspan="2"><h3>Изготовление и замена стекол</h3></th>
                        </tr>
                        <tr>
                            <th>Круглое плоское минеральное (без ремонта механизма )</th>
                            <td>2950</td>

                        </tr>
                        <tr>
                            <th>Круглое плоское минеральное (с ремонтом механизма )</th>
                            <td>1700</td>

                        </tr>
                        <tr>
                            <th>Сфера, минеральное (без ремонта механизма)</th>
                            <td>3500</td>

                        </tr>
                        <tr>
                            <th>Сфера, минеральное ( с ремонтом механизма )</th>
                            <td>2500</td>

                        </tr>
                        <tr>
                            <th>Фигурное минеральное (без ремонта механизма)</th>
                            <td>3500</td>

                        </tr>
                        <tr>
                            <th>Фигурное минеральное с ремонтом механизма</th>
                            <td>2100</td>
                        </tr>
                        <tr>
                            <th>«Мост», минеральное (без ремонта механизма )</th>
                            <td>3900</td>
                        </tr>
                        <tr>
                            <th>«Мост» минеральное (с ремонтом механизма)</th>
                            <td>2500</td>
                        </tr>
                        <tr>
                            <th>«Бочка» минеральное (без ремонта механизма)</th>
                            <td>4900</td>
                        </tr>
                        <tr>
                            <th>«Бочка» минеральное (с ремонтом механизма)</th>
                            <td>3500</td>
                        </tr>
                        <tr>
                            <th>Круглое плоское сапфир (без ремонта механизма)</th>
                            <td>4900</td>

                        </tr>
                        <tr>
                            <th>Круглое плоское сапфир (с ремонтом механизма)</th>
                            <td>4000</td>
                        </tr>
                        <tr>
                            <th>Диагностика часов</th>
                            <td>800</td>
                        </tr>
                        <tr>
                            <th>Замена люминисцентной массы на стрелках</th>
                            <td>От 900</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>


<div id="price2" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Прайс</h4>
            </div>
            <div class="modal-body">
                <p class="alert alert-success">Общий ремонт механизма. <b>Гарантия</b> на выполненные работы составляет
                    <b>12 месяцев.</b></p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Услуга</th>
                            <th>Цена</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>Механические часы с ручным заводом</th>
                            <td>4550</td>

                        </tr>
                        <tr>
                            <th>Механические часы с автоподзаводом</th>
                            <td>5400</td>

                        </tr>
                        <tr>
                            <th>Механический хронограф</th>
                            <td>12250</td>

                        </tr>
                        <tr>
                            <th>Механизм с накладным модулем</th>
                            <td>13800</td>

                        </tr>
                        <tr>
                            <th>Кварцевые часы</th>
                            <td>4100</td>

                        </tr>
                        <tr>
                            <th>Кварцевый хронограф</th>
                            <td>7800</td>

                        </tr>
                        <tr>
                            <th>Сложный кварцевый хронограф</th>
                            <td>9500</td>

                        </tr>
                        <tr>
                            <th>Кварцевые часы типа «Автокварц»</th>
                            <td>9600</td>
                        </tr>
                        <tr>
                            <th class="text-danger text-center" colspan="2"><h3>Наценка на выполняемые виды работ (Плюс
                                    к базовой стоимости )</h3></th>
                        </tr>
                        <tr>
                            <th>Одна дополнительная функция</th>
                            <td>20%</td>
                        </tr>
                        <tr>
                            <th>Две и более дополнительных функций</th>
                            <td>50%</td>
                        </tr>
                        <tr>
                            <th>Часы в корпусе из драгметалла и или с драгоценными камнями</th>
                            <td>20%</td>
                        </tr>
                        <tr>
                            <th>Часы со следами коррозии</th>
                            <td>50%</td>
                        </tr>
                        <tr>
                            <th>Хронометрированный механизм</th>
                            <td>20%</td>
                        </tr>
                        <tr>
                            <th>Часы с механизмом еtа 2000-1</th>
                            <td>20%</td>
                        </tr>
                        <tr>
                            <th>Срочный ремонт в течении 3 суток</th>
                            <td>50%</td>
                        </tr>
                        <tr>
                            <th class="text-danger text-center" colspan="2"><h3>Нестандартные виды работ согласовываются
                                    дополнительно с мастером</h3></th>
                        </tr>
                        <tr>
                            <th>Замена элементов питания в простых часах</th>
                            <td>850</td>
                        </tr>
                        <tr>
                            <th>Замена элементов питания в хронографе</th>
                            <td>950</td>

                        </tr>

                        <tr>
                            <th>Замена элементов питания в часах с нестандартным извлечением</th>
                            <td>1450</td>

                        </tr>
                        <tr>
                            <th>Подгонка браслета. Замена ремня. Штифта</th>
                            <td>От 400</td>

                        </tr>
                        <tr>
                            <th>Замена уплотнителя задней крышки</th>
                            <td>От 500</td>

                        </tr>
                        <tr>
                            <th>Установка съемного ушка</th>
                            <td>От 200</td>

                        </tr>
                        <tr>
                            <th>Чистка браслета часов ультразвуком</th>
                            <td>От 850</td>

                        </tr>
                        <tr>
                            <th>Регулировка точности хода в механических часах ( без гарантии)</th>
                            <td>550</td>
                        </tr>
                        <tr>
                            <th class="text-danger text-center" colspan="2"><h3>Изготовление и замена стекол</h3></th>
                        </tr>
                        <tr>
                            <th>Круглое плоское минеральное (без ремонта механизма )</th>
                            <td>1500</td>

                        </tr>
                        <tr>
                            <th>Круглое плоское минеральное (с ремонтом механизма )</th>
                            <td>1000</td>

                        </tr>
                        <tr>
                            <th>Сфера, минеральное (без ремонта механизма)</th>
                            <td>2000</td>
                        </tr>
                        <tr>
                            <th>Сфера, минеральное ( с ремонтом механизма )</th>
                            <td>1500</td>
                        </tr>
                        <tr>
                            <th>Фигурное минеральное (без ремонта механизма)</th>
                            <td>2000</td>
                        </tr>
                        <tr>
                            <th>Фигурное минеральное с ремонтом механизма</th>
                            <td>1500</td>
                        </tr>
                        <tr>
                            <th>«Мост», минеральное (без ремонта механизма )</th>
                            <td>2000</td>
                        </tr>
                        <tr>
                            <th>«Мост» минеральное (с ремонтом механизма)</th>
                            <td>1500</td>
                        </tr>
                        <tr>
                            <th>«Бочка» минеральное (без ремонта механизма)</th>
                            <td>2500</td>
                        </tr>
                        <tr>
                            <th>«Бочка» минеральное (с ремонтом механизма)</th>
                            <td>1800</td>
                        </tr>
                        <tr>
                            <th>Круглое плоское сапфир (без ремонта механизма)</th>
                            <td>3000</td>
                        </tr>
                        <tr>
                            <th>Круглое плоское сапфир (с ремонтом механизма)</th>
                            <td>2500</td>
                        </tr>
                        <tr>
                            <th>Диагностика часов</th>
                            <td>800</td>
                        </tr>
                        <tr>
                            <th>Замена люминисцентной массы на стрелках</th>
                            <td>900</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>



<div id="price3" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Прайс</h4>
            </div>
            <div class="modal-body">
                <p class="alert alert-success">Общий ремонт механизма. <b>Гарантия</b> на выполненные работы составляет
                    <b>12 месяцев.</b></p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Услуга</th>
                            <th>Цена</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>Механические часы с ручным заводом</th>
                            <td>9350</td>
                        </tr>
                        <tr>
                            <th>Механические часы с автоподзаводом</th>
                            <td>13200</td>
                        </tr>
                        <tr>
                            <th>Механический хронограф</th>
                            <td>21000</td>
                        </tr>
                        <tr>
                            <th>Механизм с накладным модулем</th>
                            <td>26400</td>
                        </tr>
                        <tr>
                            <th>Кварцевые часы</th>
                            <td>8400</td>
                        </tr>
                        <tr>
                            <th>Кварцевый хронограф</th>
                            <td>14500</td>
                        </tr>
                        <tr>
                            <th>Сложный кварцевый хронограф</th>
                            <td>16550</td>
                        </tr>
                        <tr>
                            <th>Кварцевые часы типа «Автокварц»</th>
                            <td>14400</td>
                        </tr>
                        <tr>
                            <th class="text-danger text-center" colspan="2"><h3>Наценка на выполняемые виды работ (Плюс
                                    к базовой стоимости )</h3></th>
                        </tr>
                        <tr>
                            <th>Одна дополнительная функция</th>
                            <td>20%</td>
                        </tr>
                        <tr>
                            <th>Две и более дополнительных функций</th>
                            <td>50%</td>
                        </tr>
                        <tr>
                            <th>Часы в корпусе из драгметалла и или с драгоценными камнями</th>
                            <td>20%</td>
                        </tr>
                        <tr>
                            <th>Часы со следами коррозии</th>
                            <td>50%</td>
                        </tr>
                        <tr>
                            <th>Хронометрированный механизм</th>
                            <td>20%</td>
                        </tr>
                        <tr>
                            <th>Часы с механизмом еtа 2000-1</th>
                            <td>20%</td>
                        </tr>
                        <tr>
                            <th>Срочный ремонт в течении 3 суток</th>
                            <td>50%</td>
                        </tr>
                        <tr>
                            <th class="text-danger text-center" colspan="2"><h3>Нестандартные виды работ согласовываются
                                    дополнительно с мастером</h3></th>
                        </tr>
                        <tr>
                            <th>Замена элементов питания в простых часах</th>
                            <td>1560</td>
                        </tr>
                        <tr>
                            <th>Замена элементов питания в хронографе</th>
                            <td>1800</td>
                        </tr>

                        <tr>
                            <th>Замена элементов питания в часах с нестандартным извлечением</th>
                            <td>2400</td>
                        </tr>
                        <tr>
                            <th>Подгонка браслета. Замена ремня. Штифта</th>
                            <td>От 600</td>
                        </tr>
                        <tr>
                            <th>Замена уплотнителя задней крышки</th>
                            <td>От 850</td>

                        </tr>
                        <tr>
                            <th>Установка съемного ушка</th>
                            <td>От 300</td>

                        </tr>
                        <tr>
                            <th>Чистка браслета часов ультразвуком</th>
                            <td>1550</td>

                        </tr>
                        <tr>
                            <th>Регулировка точности хода в механических часах ( без гарантии)</th>
                            <td>900</td>
                        </tr>
                        <tr>
                            <th class="text-danger text-center" colspan="2"><h3>Изготовление и замена стекол</h3></th>
                        </tr>
                        <tr>
                            <th>Круглое плоское минеральное (без ремонта механизма )</th>
                            <td>3500</td>

                        </tr>
                        <tr>
                            <th>Круглое плоское минеральное (с ремонтом механизма )</th>
                            <td>2500</td>
                        </tr>
                        <tr>
                            <th>Сфера, минеральное (без ремонта механизма)</th>
                            <td>4500</td>
                        </tr>
                        <tr>
                            <th>Сфера, минеральное ( с ремонтом механизма )</th>
                            <td>3100</td>
                        </tr>
                        <tr>
                            <th>Фигурное минеральное (без ремонта механизма)</th>
                            <td>4900</td>
                        </tr>
                        <tr>
                            <th>Фигурное минеральное с ремонтом механизма</th>
                            <td>3500</td>
                        </tr>
                        <tr>
                            <th>«Мост», минеральное (без ремонта механизма )</th>
                            <td>5900</td>
                        </tr>
                        <tr>
                            <th>«Мост» минеральное (с ремонтом механизма)</th>
                            <td>4500</td>
                        </tr>
                        <tr>
                            <th>«Бочка» минеральное (без ремонта механизма)</th>
                            <td>6300</td>
                        </tr>
                        <tr>
                            <th>«Бочка» минеральное (с ремонтом механизма)</th>
                            <td>4900</td>
                        </tr>
                        <tr>
                            <th>Круглое плоское сапфир (без ремонта механизма)</th>
                            <td>5900</td>
                        </tr>
                        <tr>
                            <th>Круглое плоское сапфир (с ремонтом механизма)</th>
                            <td>4500</td>
                        </tr>
                        <tr>
                            <th>Диагностика часов</th>
                            <td>900</td>
                        </tr>
                        <tr>
                            <th>Замена люминисцентной массы на стрелках</th>
                            <td>От 1050</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div id="price4" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Прайс</h4>
            </div>
            <div class="modal-body">
                <p class="alert alert-success">Общий ремонт механизма. <b>Гарантия</b> на выполненные работы составляет
                    <b>12 месяцев.</b></p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Услуга</th>
                            <th>Цена</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>Механические часы с ручным заводом</th>
                            <td>18750</td>
                        </tr>
                        <tr>
                            <th>Механические часы с автоподзаводом</th>
                            <td>21600</td>
                        </tr>
                        <tr>
                            <th>Механический хронограф</th>
                            <td>31200</td>
                        </tr>
                        <tr>
                            <th>Механизм с накладным модулем</th>
                            <td>48100</td>
                        </tr>
                        <tr>
                            <th>Кварцевые часы</th>
                            <td>15850</td>
                        </tr>
                        <tr>
                            <th>Кварцевый хронограф</th>
                            <td>25200</td>

                        </tr>
                        <tr>
                            <th>Сложный кварцевый хронограф</th>
                            <td>28000</td>
                        </tr>
                        <tr>
                            <th>Кварцевые часы типа «Автокварц»</th>
                            <td>21000</td>
                        </tr>
                        <tr>
                            <th class="text-danger text-center" colspan="2"><h3>Наценка на выполняемые виды работ (Плюс
                                    к базовой стоимости )</h3></th>
                        </tr>
                        <tr>
                            <th>Одна дополнительная функция</th>
                            <td>20%</td>
                        </tr>
                        <tr>
                            <th>Две и более дополнительных функций</th>
                            <td>50%</td>
                        </tr>
                        <tr>
                            <th>Часы в корпусе из драгметалла и или с драгоценными камнями</th>
                            <td>20%</td>
                        </tr>
                        <tr>
                            <th>Часы со следами коррозии</th>
                            <td>50%</td>
                        </tr>
                        <tr>
                            <th>Хронометрированный механизм</th>
                            <td>20%</td>
                        </tr>
                        <tr>
                            <th>Часы с механизмом еtа 2000-1</th>
                            <td>20%</td>
                        </tr>
                        <tr>
                            <th>Срочный ремонт в течении 3 суток</th>
                            <td>50%</td>
                        </tr>
                        <tr>
                            <th class="text-danger text-center" colspan="2"><h3>Нестандартные виды работ согласовываются
                                    дополнительно с мастером</h3></th>
                        </tr>
                        <tr>
                            <th>Замена элементов питания в простых часах</th>
                            <td>2500</td>




                        </tr>
                        <tr>
                            <th>Замена элементов питания в хронографе</th>
                            <td>2750</td>

                        </tr>

                        <tr>
                            <th>Замена элементов питания в часах с нестандартным извлечением</th>
                            <td>3350</td>
                        </tr>
                        <tr>
                            <th>Подгонка браслета. Замена ремня. Штифта</th>
                            <td>От 1200</td>

                        </tr>
                        <tr>
                            <th>Замена уплотнителя задней крышки</th>
                            <td>От 2000</td>

                        </tr>
                        <tr>
                            <th>Установка съемного ушка</th>
                            <td>От 800</td>

                        </tr>
                        <tr>
                            <th>Чистка браслета часов ультразвуком</th>
                            <td>От 4200</td>

                        </tr>
                        <tr>
                            <th>Регулировка точности хода в механических часах ( без гарантии)</th>
                            <td>2400</td>
                        </tr>
                        <tr>
                            <th class="text-danger text-center" colspan="2"><h3>Изготовление и замена стекол</h3></th>
                        </tr>
                        <tr>
                            <th>Круглое плоское минеральное (без ремонта механизма )</th>
                            <td>6300</td>
                        </tr>
                        <tr>
                            <th>Круглое плоское минеральное (с ремонтом механизма )</th>
                            <td>4900</td>
                        </tr>
                        <tr>
                            <th>Сфера, минеральное (без ремонта механизма)</th>
                            <td>7300</td>
                        </tr>
                        <tr>
                            <th>Сфера, минеральное ( с ремонтом механизма )</th>
                            <td>5600</td>
                        </tr>
                        <tr>
                            <th>Фигурное минеральное (без ремонта механизма)</th>
                            <td>6900</td>
                        </tr>
                        <tr>
                            <th>Фигурное минеральное с ремонтом механизма</th>
                            <td>5500</td>
                        </tr>
                        <tr>
                            <th>«Мост», минеральное (без ремонта механизма )</th>
                            <td>8000</td>
                        </tr>
                        <tr>
                            <th>«Мост» минеральное (с ремонтом механизма)</th>
                            <td>6600</td>
                        </tr>
                        <tr>
                            <th>«Бочка» минеральное (без ремонта механизма)</th>
                            <td>8700</td>
                        </tr>
                        <tr>
                            <th>«Бочка» минеральное (с ремонтом механизма)</th>
                            <td>7300</td>
                        </tr>
                        <tr>
                            <th>Круглое плоское сапфир (без ремонта механизма)</th>
                            <td>7700</td>
                        </tr>
                        <tr>
                            <th>Круглое плоское сапфир (с ремонтом механизма)</th>
                            <td>6300</td>
                        </tr>
                        <tr>
                            <th>Диагностика часов</th>
                            <td>1400</td>
                        </tr>
                        <tr>
                            <th>Замена люминисцентной массы на стрелках</th>
                            <td>От 1800</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>

<div id="price5" class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog"
     aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">Прайс</h4>
            </div>
            <div class="modal-body">
                <p class="alert alert-success">Общий ремонт механизма. <b>Гарантия</b> на выполненные работы составляет
                    <b>12 месяцев.</b></p>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                        <tr>
                            <th>Услуга</th>
                            <th>Цена</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th>Механические часы с ручным заводом</th>
                            <td>13200</td>
                        </tr>
                        <tr>
                            <th>Механические часы с автоподзаводом</th>
                            <td>16800</td>
                        </tr>
                        <tr>
                            <th>Механический хронограф</th>
                            <td>25200</td>


                        </tr>
                        <tr>
                            <th>Механизм с накладным модулем</th>
                            <td>33600</td>
                        </tr>
                        <tr>
                            <th>Кварцевые часы</th>
                            <td>12000</td>
                        </tr>
                        <tr>
                            <th>Кварцевый хронограф</th>
                            <td>16800</td>
                        </tr>
                        <tr>
                            <th>Сложный кварцевый хронограф</th>
                            <td>21600</td>
                        </tr>
                        <tr>
                            <th>Кварцевые часы типа «Автокварц»</th>
                            <td>19200</td>
                        </tr>
                        <tr>
                            <th class="text-danger text-center" colspan="2"><h3>Наценка на выполняемые виды работ (Плюс
                                    к базовой стоимости )</h3></th>
                        </tr>
                        <tr>
                            <th>Одна дополнительная функция</th>
                            <td>20%</td>
                        </tr>
                        <tr>
                            <th>Две и более дополнительных функций</th>
                            <td>50%</td>
                        </tr>
                        <tr>
                            <th>Часы в корпусе из драгметалла и или с драгоценными камнями</th>
                            <td>20%</td>
                        </tr>
                        <tr>
                            <th>Часы со следами коррозии</th>
                            <td>50%</td>
                        </tr>
                        <tr>
                            <th>Хронометрированный механизм</th>
                            <td>20%</td>
                        </tr>
                        <tr>
                            <th>Часы с механизмом еtа 2000-1</th>
                            <td>20%</td>
                        </tr>
                        <tr>
                            <th>Срочный ремонт в течении 3 суток</th>
                            <td>50%</td>
                        </tr>
                        <tr>
                            <th class="text-danger text-center" colspan="2"><h3>Нестандартные виды работ согласовываются
                                    дополнительно с мастером</h3></th>
                        </tr>
                        <tr>
                            <th>Замена элементов питания в простых часах</th>
                            <td>1800</td>

                        </tr>
                        <tr>
                            <th>Замена элементов питания в хронографе</th>
                            <td>2400</td>
                        </tr>

                        <tr>
                            <th>Замена элементов питания в часах с нестандартным извлечением</th>
                            <td>3000</td>
                        </tr>
                        <tr>
                            <th>Подгонка браслета. Замена ремня. Штифта</th>
                            <td>От 950</td>
                        </tr>
                        <tr>
                            <th>Замена уплотнителя задней крышки</th>
                            <td>От 1450</td>

                        </tr>
                        <tr>
                            <th>Установка съемного ушка</th>
                            <td>От 650</td>

                        </tr>
                        <tr>
                            <th>Чистка браслета часов ультразвуком</th>
                            <td>3000</td>

                        </tr>
                        <tr>
                            <th>Регулировка точности хода в механических часах ( без гарантии)</th>
                            <td>1550</td>
                        </tr>
                        <tr>
                            <th class="text-danger text-center" colspan="2"><h3>Изготовление и замена стекол</h3></th>
                        </tr>
                        <tr>
                            <th>Круглое плоское минеральное (без ремонта механизма )</th>
                            <td>4900</td>

                        </tr>
                        <tr>
                            <th>Круглое плоское минеральное (с ремонтом механизма )</th>
                            <td>3500</td>
                        </tr>
                        <tr>
                            <th>Сфера, минеральное (без ремонта механизма)</th>
                            <td>5900</td>
                        </tr>
                        <tr>
                            <th>Сфера, минеральное ( с ремонтом механизма )</th>
                            <td>4500</td>
                        </tr>
                        <tr>
                            <th>Фигурное минеральное (без ремонта механизма)</th>
                            <td>5500</td>
                        </tr>
                        <tr>
                            <th>Фигурное минеральное с ремонтом механизма</th>
                            <td>4100</td>
                        </tr>
                        <tr>
                            <th>«Мост», минеральное (без ремонта механизма )</th>
                            <td>6500</td>
                        </tr>
                        <tr>
                            <th>«Мост» минеральное (с ремонтом механизма)</th>
                            <td>5200</td>
                        </tr>
                        <tr>
                            <th>«Бочка» минеральное (без ремонта механизма)</th>
                            <td>7300</td>
                        </tr>
                        <tr>
                            <th>«Бочка» минеральное (с ремонтом механизма)</th>
                            <td>5900</td>
                        </tr>
                        <tr>
                            <th>Круглое плоское сапфир (без ремонта механизма)</th>
                            <td>6600</td>
                        </tr>
                        <tr>
                            <th>Круглое плоское сапфир (с ремонтом механизма)</th>
                            <td>5200</td>
                        </tr>
                        <tr>
                            <th>Диагностика часов</th>
                            <td>1100</td>
                        </tr>
                        <tr>
                            <th>Замена люминисцентной массы на стрелках</th>
                            <td>1450</td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
            </div>
        </div>
    </div>
</div>