<?php

namespace backend\modules\persons\models;

use Yii;

/**
 * This is the model class for table "person_marriage_status".
 *
 * @property integer $id
 * @property string $name
 * @property integer $weight
 * @property integer $active
 *
 * @property Person[] $people
 */
class MarriageStatus extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
	return 'person_marriage_status';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
	return [
            [['name'], 'required'],
            [['weight', 'active'], 'integer'],
            [['name'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
	return [
	    'id' => 'ID',
	    'name' => 'Name',
	    'weight' => 'Weight',
	    'active' => 'Active',
	];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPeople()
    {
	return $this->hasMany(Person::className(), ['marriage_status_id' => 'id']);
    }

    /**
     * @inheritdoc
     * @return MarriageStatusQuery the active query used by this AR class.
     */
    public static function find()
    {
	return new MarriageStatusQuery(get_called_class());
    }
}
