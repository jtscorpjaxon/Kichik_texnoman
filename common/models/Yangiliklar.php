<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "yangiliklar".
 *
 * @property int $nomer
 * @property string|null $sarlavha
 * @property int|null $bolim_id
 * @property string|null $mahsulot
 * @property int|null $hosil_sana
 *
 * @property Bolimlar $bolim
 */
class Yangiliklar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'yangiliklar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['bolim_id', 'hosil_sana'], 'integer'],
            [['mahsulot'], 'string'],
            [['sarlavha'], 'string', 'max' => 250],
            [['bolim_id'], 'exist', 'skipOnError' => true, 'targetClass' => Bolimlar::className(), 'targetAttribute' => ['bolim_id' => 'nomer']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'nomer' => 'Nomer',
            'sarlavha' => 'Sarlavha',
            'bolim_id' => 'Bolim ID',
            'mahsulot' => 'Mahsulot',
            'hosil_sana' => 'Hosil Sana',
        ];
    }

    /**
     * Gets query for [[Bolim]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getBolim()
    {
        return $this->hasOne(Bolimlar::className(), ['nomer' => 'bolim_id']);
    }
}
