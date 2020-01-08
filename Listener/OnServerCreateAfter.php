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

namespace ImiApp\Listener;

use Imi\Bean\Annotation\Listener;
use Imi\Event\EventParam;
use Imi\Event\IEventListener;
use Imi\Process\ProcessManager;

/**
 * @Listener(eventName="IMI.SERVERS.CREATE.AFTER")
 */
class OnServerCreateAfter implements IEventListener
{
    /**
     * 事件处理方法.
     * @return void
     */
    public function handle(EventParam $e)
    {
        // 挂载进程到 Manager 进程下
        // ProcessManager::runWithManager('Test');
    }
}
