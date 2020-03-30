<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "bolimlar".
 *
 * @property int $nomer
 * @property string|null $sarlavha
 *
 * @property Yangiliklar[] $yangiliklar
 */
class Bolimlar extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'bolimlar';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sarlavha'], 'string', 'max' => 200],
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
        ];
    }

    /**
     * Gets query for [[yangiliklar]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getyangiliklar()
    {
        return $this->hasMany(Yangiliklar::className(), ['bolim_id' => 'nomer']);
    }
}
