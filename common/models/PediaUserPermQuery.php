<?php

namespace common\models;

/**
 * This is the ActiveQuery class for [[PediaUserPerm]].
 *
 * @see PediaUserPerm
 */
/**
 * Team:没有蛀牙
 * Coding by:孙一冉 1711297，20190712
 */
class PediaUserPermQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return PediaUserPerm[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    /**
     * {@inheritdoc}
     * @return PediaUserPerm|array|null
     */
    public function one($db = null)
    {
        return parent::one($db);
    }
}
