<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "og_scoresranking".
 *
 * @property int $rID
 * @property string $goldRank
 * @property string $medalsRank
 *
 * @property OgYearog[] $ogYearogs
 */
class OgScoresranking extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'og_scoresranking';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['goldRank', 'medalsRank'], 'required'],
            [['goldRank', 'medalsRank'], 'string'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'rID' => '届数',
            'goldRank' => '金牌榜',
            'medalsRank' => '奖牌榜',
        ];
    }

    /**
     * Gets query for [[OgYearogs]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getOgYearogs()
    {
        return $this->hasMany(OgYearog::className(), ['scoresRankID' => 'rID']);
    }
}
