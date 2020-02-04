<?php

use yii\db\Migration;

/**
 * Class m200204_174926_insert_data
 */
class m200204_174926_insert_data extends Migration
{
    /**
     * @inheritdoc
     */
    public function safeUp()
    {
        $this->batchInsert('brand', ['name'], [
            ['ARMAND'],
            ['NICOLET'],
            ['BAUME'],
            ['MERCIER'],
            ['TAG'],
            ['HEUER'],
            ['RADO'],
            ['PEQUIGNET'],
            ['EBERHARD'],
            ['JAGUAR'],
            ['MONTBLANK'],
            ['MAURICE'],
            ['LACROIX'],
            ['RAYMOND'],
            ['WEIL'],
            ['APELLA'],
            ['GOLD'],
            ['MOVADO'],
            ['CHANEL'],
            ['A.DUNHILL'],
            ['ITD'],
            ['MILUS'],
            ['KELEK'],
            ['TECHNOMARINE'],
            ['AQUANAUTIC'],
            ['BREITILING'],
            ['BVLGARI'],
            ['CORUM'],
            ['EBEL'],
            ['IWC'],
            ['JEAN RICHARD'],
            ['JORG HYSEK'],
            ['PANERAI'],
            ['PAUL PICOT'],
            ['ULYSSE NARDIN'],
            ['CFB'],
            ['FORTIS'],
            ['TUDOR'],
            ['CARL F. BUCHERER'],
            ['CHRONOSWISS'],
            ['PERRELET'],
            ['PORCHE DESIGN'],
            ['CONCORD'],
            ['DUBEY SHALDENBRAND'],
            ['OMEGA'],
            ['CHAUMET'],
            ['VAN DER BAUWEDE'],
            ['August Raymond'],
            ['Mido'],
            ['Longines'],
            ['Edox'],
            ['Marvin'],
            ['Nina Ricci'],
            ['Oris'],
            ['Revue Thommen'],
            ['Frederique'],
            ['Constant'],
            ['Bulova'],
            ['Jacques Lemans'],
            ['Eterna'],
            ['Maurice Lacroix'],
            ['Jean Marcel'],
            ['Busherer'],
            ['K. Mozer'],
            ['Сhristian Dior'],
            ['Gustav'],
            ['Becker'],
            ['louis Erard'],
            ['Paul Nickel'],
            ['Michel Herbelin'],
            ['Tissot'],
            ['Charmex'],
            ['Enicar Certina'],
            ['Hugo Boss'],
            ['Sector'],
            ['Swiss Military'],
            ['Festina'],
            ['Apella'],
            ['Continental'],
            ['Cover'],
            ['Swatch'],
            ['Balmain'],
            ['CK'],
            ['Wenger'],
            ['Olma'],
            ['Doxa'],
            ['Kolber'],
            ['Philipp Laurence'],
            ['Roamer'],
            ['Titoni'],
            ['Crovana'],
            ['Fendi'],
            ['Claude Bernard'],
            ['Candino'],
            ['Alfex'],
            ['Atlantic'],
            ['Cerutti'],
            ['Emporio Armani'],
            ['Roberto cavalli'],
            ['AUDEMARS PIGUET'],
            ['CARTIER'],
            ['BLANCPAIN'],
            ['BREGUET'],
            ['CHOPARD'],
            ['FRANK'],
            ['MULLER'],
            ['PATEK PHILIPPE'],
            ['VACHERON'],
            ['KONSTANTIN'],
            ['PARMIGIANI'],
            ['GIRARD PERREGAUX'],
            ['JAEGER LE COOLTRE'],
            ['ZENITH'],
            ['GRAHAM'],
            ['QUINTING'],
            ['RICHARD MILLE'],
            ['GERALD GENTA'],
            ['ROGER DUBUIS'],
            ['LOUIS MOINET'],
            ['A. LANGE & SÖHNE'],
            ['GLASHUTTE ORIGINAL'],
            ['ARNOLD & SON'],
            ['ROLEX'],
            ['HUBLOT'],
        ]);
    }

    /**
     * @inheritdoc
     */
    public function safeDown()
    {
        echo "m200204_174926_insert_data cannot be reverted.\n";

        return false;
    }

    /*
    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

    }

    public function down()
    {
        echo "m200204_174926_insert_data cannot be reverted.\n";

        return false;
    }
    */
}
