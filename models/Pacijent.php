<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "{{%pacijent}}".
 *
 * @property integer $S_Pacijenta
 * @property string $Ime
 * @property string $Prezime
 * @property string $OIB
 * @property string $Spol
 * @property string $Datum_rodenja
 * @property string $Adresa
 * @property string $Telefon
 * @property string $Status
 * @property string $Datum_i_vrijeme_unosa_pacijenta
 */
class Pacijent extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%pacijent}}';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['S_Pacijenta', 'Ime', 'Prezime', 'OIB', 'Spol', 'Datum_rodenja', 'Adresa', 'Telefon', 'Status'], 'required'],
            [['S_Pacijenta'], 'integer'],
            [['Ime', 'Prezime', 'Adresa', 'Telefon', 'Status'], 'string'],
            [['Datum_rodenja', 'Datum_i_vrijeme_unosa_pacijenta'], 'safe'],
            [['OIB'], 'string', 'max' => 11],
            [['Spol'], 'string', 'max' => 1],
            [['S_Pacijenta'], 'unique'],
            [['OIB'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'S_Pacijenta' => Yii::t('app', 'Sifra  pacijenta'),
            'Ime' => Yii::t('app', 'Ime'),
            'Prezime' => Yii::t('app', 'Prezime'),
            'OIB' => Yii::t('app', 'OIB'),
            'Spol' => Yii::t('app', 'Spol'),
            'Datum_rodenja' => Yii::t('app', 'Datum rodenja'),
            'Adresa' => Yii::t('app', 'Adresa'),
            'Telefon' => Yii::t('app', 'Telefon'),
            'Status' => Yii::t('app', 'Status'),
            'Datum_i_vrijeme_unosa_pacijenta' => Yii::t('app', 'Datum I Vrijeme Unosa Pacijenta'),
        ];
    }
}
