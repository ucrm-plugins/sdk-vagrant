<?php /** @noinspection PhpUnused */
declare(strict_types=1);

namespace SpaethTech\Robo\Vagrant\Tasks\Cloud\Auth;

use SpaethTech\Robo\Vagrant\Tasks\Base;

/**
 * Handles task execution for `vagrant cloud auth logout [options]`
 *
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @copyright 2022 Spaeth Technologies Inc.
 * @final
 */
final class Logout extends Base
{
    protected string $action = "cloud auth logout";

}
