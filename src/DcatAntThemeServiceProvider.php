<?php

namespace Hercules\Admin;

use Hercules\Admin\Middleware\MiddleDcatAntThemeMiddleware;
use Dcat\Admin\Color;
use Dcat\Admin\Extend\ServiceProvider;
use Dcat\Admin\Admin;

class DcatAntThemeServiceProvider extends ServiceProvider
{
	protected $type = self::TYPE_THEME;

	protected $css = [
		'css/ant.css',
	];
    protected $middleware = [
        'middle' => [
            MiddleDcatAntThemeMiddleware::class,
        ],
    ];
	public function register()
	{
		//
	}

	public function init()
	{
		parent::init();
		//
		Admin::baseCss($this->formatAssetFiles($this->css));
        Color::extend('ant', [
            'primary'        => '#1890ff',
            'primary-darker' => '#1890ff',
            'link'           => '#1890ff',
        ]);
	}

//	public function settingForm()
//	{
//		return new Setting($this);
//	}
}
