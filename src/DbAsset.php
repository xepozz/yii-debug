<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace Yiisoft\Debug;

use yii\web\AssetBundle;

/**
 * DB asset bundle
 */
class DbAsset extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public $sourcePath = '@Yiisoft/Debug/assets';
    /**
     * {@inheritdoc}
     */
    public $js = [
        'js/db.js',
    ];
}
