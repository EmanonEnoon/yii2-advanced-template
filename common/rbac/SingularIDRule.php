<?php

namespace common\rbac;

use Yii;
use yii\rbac\Rule;

/**
 * 检查是否匹配用户的组
 */
class SingularIDRule extends Rule
{
    public $name = 'singularID';

    public function execute($user, $item, $params)
    {
        if (!Yii::$app->user->isGuest) {
            if (isset($params['id'])) {
                return $params['id'] % 2 == 1;
            }
        }
        return false;
    }
}