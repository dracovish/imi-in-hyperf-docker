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

namespace ImiApp\Task;

use Imi\Task\Annotation\Task;
use Imi\Task\Interfaces\ITaskHandler;
use Imi\Task\TaskParam;

/**
 * @Task("Test1")
 */
class TestTask implements ITaskHandler
{
    /**
     * 任务处理方法.
     * @return void
     */
    public function handle(TaskParam $param, \Swoole\Server $server, int $taskID, int $WorkerID)
    {
        $data = $param->getData();
        return date('Y-m-d H:i:s', $data['time']);
    }

    /**
     * 任务结束时触发.
     * @param \swoole_server $server
     * @param int $taskId
     * @param mixed $data
     * @return void
     */
    public function finish(\Swoole\Server $server, int $taskID, $data)
    {
    }
}
