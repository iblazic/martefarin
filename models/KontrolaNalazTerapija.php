<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%kontrola_nalaz_terapija}}".
 *
 * @property integer $S_kontrole
 * @property string $Datum_kontrole
 * @property string $Datum_i_vrijeme_unosa_kontrole
 * @property integer $Broj_nalaza
 * @property string $Datum_nalaza
 * @property string $INR
 * @property string $Datum_i_vrijeme_unosa_nalaza
 * @property string $Shema
 * @property string $Datum_i_vrijeme_unosa_terapije
 */
class KontrolaNalazTerapija extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%kontrola_nalaz_terapija}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['S_kontrole', 'Datum_kontrole', 'Datum_i_vrijeme_unosa_kontrole', 'Broj_nalaza', 'Datum_nalaza', 'INR', 'Datum_i_vrijeme_unosa_nalaza', 'Shema', 'Datum_i_vrijeme_unosa_terapije'], 'required'],
            [['S_kontrole', 'Broj_nalaza'], 'integer'],
            [['Datum_kontrole', 'Datum_i_vrijeme_unosa_kontrole', 'Datum_nalaza', 'Datum_i_vrijeme_unosa_nalaza', 'Datum_i_vrijeme_unosa_terapije'], 'safe'],
            [['INR'], 'number'],
            [['Shema'], 'string', 'max' => 200],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'S_kontrole' => Yii::t('app', 'S Kontrole'),
            'Datum_kontrole' => Yii::t('app', 'Datum Kontrole'),
            'Datum_i_vrijeme_unosa_kontrole' => Yii::t('app', 'Datum I Vrijeme Unosa Kontrole'),
            'Broj_nalaza' => Yii::t('app', 'Broj Nalaza'),
            'Datum_nalaza' => Yii::t('app', 'Datum Nalaza'),
            'INR' => Yii::t('app', 'Inr'),
            'Datum_i_vrijeme_unosa_nalaza' => Yii::t('app', 'Datum I Vrijeme Unosa Nalaza'),
            'Shema' => Yii::t('app', 'Shema'),
            'Datum_i_vrijeme_unosa_terapije' => Yii::t('app', 'Datum I Vrijeme Unosa Terapije'),
        ];
    }
}
