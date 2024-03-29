<?php

namespace backend\modules\persons\models;

/**
 * This is the ActiveQuery class for [[Religion]].
 *
 * @see Religion
 */
class ReligionQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        $this->andWhere('[[status]]=1');
        return $this;
    }*/

    /**
     * @inheritdoc
     * @return Religion[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * @inheritdoc
     * @return Religion|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}