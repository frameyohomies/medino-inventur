<?php

namespace app\models;

/**
 * This is the ActiveQuery class for [[Produkt]].
 *
 * @see Produkt
 */
class ProduktQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return Produkt[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return Produkt|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
