<?php


namespace common\modules\chat\assets;


use yii\web\AssetBundle;

class ChatAsset extends AssetBundle
{
//    public $basePath = '@webroot';
//    public $baseUrl = '@web';
    public $sourcePath = '@common/modules/chat';

    public $js = [
        'js/chat.js'
    ];
    public $css = [
        'css/chat.css'
    ];
//    public $depends = [
//        'yii\web\YiiAsset',
//        'yii\bootstrap\BootstrapAsset',
//    ];
}