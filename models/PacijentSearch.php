<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Pacijent;

/**
 * PacijentSearch represents the model behind the search form about `app\models\Pacijent`.
 */
class PacijentSearch extends Pacijent
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['S_Pacijenta'], 'integer'],
            [['Ime', 'Prezime', 'OIB', 'Spol', 'Datum_rodenja', 'Adresa', 'Telefon', 'Status', 'Datum_i_vrijeme_unosa_pacijenta'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Pacijent::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'OIB' => $this->OIB,
            //'Datum_rodenja' => $this->Datum_rodenja,
           // 'Datum_i_vrijeme_unosa_pacijenta' => $this->Datum_i_vrijeme_unosa_pacijenta,
        ]);

        $query
//                ->andFilterWhere(['like', 'Ime', $this->Ime])
//            ->andFilterWhere(['like', 'Prezime', $this->Prezime])
            ->andFilterWhere(['like', 'OIB', $this->OIB]);
//            ->andFilterWhere(['like', 'Spol', $this->Spol])
//            ->andFilterWhere(['like', 'Adresa', $this->Adresa])
//            ->andFilterWhere(['like', 'Telefon', $this->Telefon])
//            ->andFilterWhere(['like', 'Status', $this->Status]);

        return $dataProvider;
    }
}
