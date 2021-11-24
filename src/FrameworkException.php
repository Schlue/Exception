<?php
/**
 * Copyright 2008-2021 Horde LLC (http://www.horde.org/)
 *
 * See the enclosed file LICENSE for license information (LGPL). If you
 * did not receive this file, see http://www.horde.org/licenses/lgpl21.
 *
 * @author   Ralf Lang <lang@b1-systems.de>
 * @category Horde
 * @license  http://www.horde.org/licenses/lgpl21 LGPL-2.1
 * @package  Exception
 */

namespace Horde\Exception;

use Exception;

/**
 * Horde extended exception interface.
 *
 * @author   Ralf Lang <lang@b1-systems.de>
 * @category  Horde
 * @copyright 2008-2021 Horde LLC
 * @license   http://www.horde.org/licenses/lgpl21 LGPL-2.1
 * @package   Exception
 */
interface FrameworkException
{
    /**
     * Get the log level.
     *
     * @return int  The Horde_Log constant for the log level.
     */
    public function getLogLevel(): int;

    /**
     * Sets the log level.
     *
     * @param mixed $level  The log level.
     */
    public function setLogLevel($level = 0): void;
}
