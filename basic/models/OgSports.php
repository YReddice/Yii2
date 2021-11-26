<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "og_sports".
 *
 * @property int $sSportsID
 * @property string $sSports
 * @property int $sFoundTime
 *
 * @property OgRecordranking $sSports0
 */
class OgSports extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'og_sports';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['sSports', 'sFoundTime'], 'required'],
            [['sFoundTime'], 'integer'],
            [['sSports'], 'string', 'max' => 255],
            [['sSportsID'], 'exist', 'skipOnError' => true, 'targetClass' => OgRecordranking::className(), 'targetAttribute' => ['sSportsID' => 'sportsID']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'sSportsID' => 'S Sports ID',
            'sSports' => 'S Sports',
            'sFoundTime' => 'S Found Time',
        ];
    }

    /**
     * Gets query for [[SSports0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSSports0()
    {
        return $this->hasOne(OgRecordranking::className(), ['sportsID' => 'sSportsID']);
    }
}
