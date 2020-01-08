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

namespace ImiApp\ApiServer\Controller;

use Imi\Controller\HttpController;
use Imi\Server\Route\Annotation\Action;
use Imi\Server\Route\Annotation\Controller;
use Imi\Server\Route\Annotation\Route;
use Imi\Server\View\Annotation\View;

/**
 * @Controller("/")
 * @View(baseDir="index/")
 */
class IndexController extends HttpController
{
    /**
     * @Action
     * @Route("/")
     * @View(renderType="html")
     *
     * @return void
     */
    public function index()
    {
        return [
            'hello' => 'imi',
            'time' => date('Y-m-d H:i:s', time()),
        ];
    }

    /**
     * @Action
     * @param mixed $time
     * @return void
     */
    public function api($time)
    {
        return [
            'hello' => 'imi',
            'time' => date('Y-m-d H:i:s', time()),
        ];
    }
}
