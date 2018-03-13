<p align="center">
    <h1 align="center">Material Dashboard Extension for Yii 2</h1>
    <br>
</p>

This is the Material Dashboard extension [Yii framework 2.0](http://www.yiiframework.com). Based on [Material Dashboard](https://github.com/creativetimofficial/material-dashboard)
and [Bootstrap](http://getbootstrap.com/).

For license information check the [LICENSE](LICENSE.md)-file.

## Links:

+ [Original theme](https://github.com/creativetimofficial/material-dashboard)

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist mrgros/material-dashboard
```

or add

```
"creativetimofficial/material-dashboard": "@dev",
"mrgros/material-dashboard": "@dev"
```

to the require section of your `composer.json` file.

Configure your application

```
    'components' => [
        'assetManager' => [
            'bundles' => [
                'yii\bootstrap\BootstrapPluginAsset' => [
                    'js'=>[]
                ],
                'yii\bootstrap\BootstrapAsset' => [
                    'css' => []
                ]
            ],
        ],
        //...
    ]
```

And add bundle

```
    class AppAsset extends AssetBundle
    {
        public $basePath = '@webroot';
        public $baseUrl = '@web';

        public $depends = [
            'yii\material\MaterialAsset',
        ];
    }
```