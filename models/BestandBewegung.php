<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "bestand_bewegung".
 *
 * @property int $id
 * @property int $produkt_id
 * @property int $benutzer_id
 * @property int $delta
 * @property int $bestand_nach
 * @property string $gebucht_am
 *
 * @property Benutzer $benutzer
 * @property Produkt $produkt
 */
class BestandBewegung extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bestand_bewegung';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['produkt_id', 'benutzer_id', 'delta', 'bestand_nach'], 'required'],
            [['produkt_id', 'benutzer_id', 'delta', 'bestand_nach'], 'integer'],
            [['gebucht_am'], 'safe'],
            [['produkt_id'], 'exist', 'skipOnError' => true, 'targetClass' => Produkt::class, 'targetAttribute' => ['produkt_id' => 'id']],
            [['benutzer_id'], 'exist', 'skipOnError' => true, 'targetClass' => Benutzer::class, 'targetAttribute' => ['benutzer_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'produkt_id' => Yii::t('app', 'Produkt ID'),
            'benutzer_id' => Yii::t('app', 'Benutzer ID'),
            'delta' => Yii::t('app', 'Delta'),
            'bestand_nach' => Yii::t('app', 'Bestand Nach'),
            'gebucht_am' => Yii::t('app', 'Gebucht Am'),
        ];
    }

    /**
     * Gets query for [[Benutzer]].
     *
     * @return \yii\db\ActiveQuery|BenutzerQuery
     */
    public function getBenutzer()
    {
        return $this->hasOne(Benutzer::class, ['id' => 'benutzer_id']);
    }

    /**
     * Gets query for [[Produkt]].
     *
     * @return \yii\db\ActiveQuery|ProduktQuery
     */
    public function getProdukt()
    {
        return $this->hasOne(Produkt::class, ['id' => 'produkt_id']);
    }

    /**
     * {@inheritdoc}
     * @return BestandBewegungQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BestandBewegungQuery(get_called_class());
    }

}
