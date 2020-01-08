<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

return [
    'configs' => [
    ],
    // bean扫描目录
    'beanScan' => [
        'ImiApp\ApiServer\Controller',
    ],
    'beans' => [
        'SessionManager' => [
            'handlerClass' => \Imi\Server\Session\Handler\File::class,
        ],
        'SessionFile' => [
            'savePath' => dirname(__DIR__, 2) . '/.runtime/.session/',
        ],
        'SessionConfig' => [
        ],
        'SessionCookie' => [
            'lifetime' => 86400 * 30,
        ],
        'HttpDispatcher' => [
            'middlewares' => [
                \ImiApp\ApiServer\Middleware\PoweredBy::class,
                \Imi\Server\Session\Middleware\HttpSessionMiddleware::class,
                \Imi\Server\Http\Middleware\RouteMiddleware::class,
            ],
        ],
        'HtmlView' => [
            'templatePath' => dirname(__DIR__) . '/template/',
            // 支持的模版文件扩展名，优先级按先后顺序
            'fileSuffixs' => [
                'tpl',
                'html',
                'php',
            ],
        ],
    ],
];
