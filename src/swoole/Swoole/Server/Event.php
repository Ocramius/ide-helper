<?php

declare(strict_types=1);
/**
 * This file is part of OpenSwoole IDE Helper.
 * @link     https://www.swoole.co.uk
 * @contact  hello@swoole.co.uk
 * @license  https://github.com/openswoole/library/blob/master/LICENSE
 */
namespace Swoole\Server;

class Event
{
    public $reactor_id = 0;

    public $fd = 0;

    public $dispatch_time = 0;

    public $data;
}
