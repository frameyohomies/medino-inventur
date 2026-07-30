<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\BestandBewegung;

/**
 * BestandBewegungSearch represents the model behind the search form of `app\models\BestandBewegung`.
 */
class BestandBewegungSearch extends BestandBewegung
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'produkt_id', 'benutzer_id', 'delta', 'bestand_nach'], 'integer'],
            [['gebucht_am'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     * @param string|null $formName Form name to be used into `->load()` method.
     *
     * @return ActiveDataProvider
     */
    public function search($params, $formName = null)
    {
        $query = BestandBewegung::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params, $formName);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'produkt_id' => $this->produkt_id,
            'benutzer_id' => $this->benutzer_id,
            'delta' => $this->delta,
            'bestand_nach' => $this->bestand_nach,
            'gebucht_am' => $this->gebucht_am,
        ]);

        return $dataProvider;
    }
}
