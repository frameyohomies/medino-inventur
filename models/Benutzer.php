<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "benutzer".
 *
 * @property int $id
 * @property string $entra_oid
 * @property string $name
 * @property string $email
 * @property string $rolle
 * @property int $aktiv
 * @property string $erstellt_am
 *
 * @property BestandBewegung[] $bestandBewegungs
 */
class Benutzer extends \yii\db\ActiveRecord
{

    /**
     * ENUM field values
     */
    const ROLLE_ADMIN = 'admin';
    const ROLLE_ORDIHILFE = 'ordihilfe';

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'benutzer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['rolle'], 'default', 'value' => 'ordihilfe'],
            [['aktiv'], 'default', 'value' => 1],
            [['entra_oid', 'name', 'email'], 'required'],
            [['rolle'], 'string'],
            [['aktiv'], 'integer'],
            [['erstellt_am'], 'safe'],
            [['entra_oid'], 'string', 'max' => 100],
            [['name'], 'string', 'max' => 150],
            [['email'], 'string', 'max' => 255],
            ['rolle', 'in', 'range' => array_keys(self::optsRolle())],
            [['entra_oid'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => Yii::t('app', 'ID'),
            'entra_oid' => Yii::t('app', 'Entra Oid'),
            'name' => Yii::t('app', 'Name'),
            'email' => Yii::t('app', 'Email'),
            'rolle' => Yii::t('app', 'Rolle'),
            'aktiv' => Yii::t('app', 'Aktiv'),
            'erstellt_am' => Yii::t('app', 'Erstellt Am'),
        ];
    }

    /**
     * Gets query for [[BestandBewegungs]].
     *
     * @return \yii\db\ActiveQuery|BestandBewegungQuery
     */
    public function getBestandBewegungs()
    {
        return $this->hasMany(BestandBewegung::class, ['benutzer_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return BenutzerQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new BenutzerQuery(get_called_class());
    }


    /**
     * column rolle ENUM value labels
     * @return string[]
     */
    public static function optsRolle()
    {
        return [
            self::ROLLE_ADMIN => Yii::t('app', 'admin'),
            self::ROLLE_ORDIHILFE => Yii::t('app', 'ordihilfe'),
        ];
    }

    /**
     * @return string
     */
    public function displayRolle()
    {
        return self::optsRolle()[$this->rolle];
    }

    /**
     * @return bool
     */
    public function isRolleAdmin()
    {
        return $this->rolle === self::ROLLE_ADMIN;
    }

    public function setRolleToAdmin()
    {
        $this->rolle = self::ROLLE_ADMIN;
    }

    /**
     * @return bool
     */
    public function isRolleOrdihilfe()
    {
        return $this->rolle === self::ROLLE_ORDIHILFE;
    }

    public function setRolleToOrdihilfe()
    {
        $this->rolle = self::ROLLE_ORDIHILFE;
    }
}
