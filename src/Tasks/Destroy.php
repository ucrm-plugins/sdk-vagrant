<?php /** @noinspection PhpUnused */
declare(strict_types=1);

namespace SpaethTech\Robo\Vagrant\Tasks;

/**
 * Handles task execution for `vagrant destroy [options]`
 *
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @copyright 2022 Spaeth Technologies Inc.
 * @final
 */
final class Destroy extends Base
{
    protected string $action = "destroy";
    
    /**
     * Adds the `--force` option to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function force(): self
    {
        $this->option("--force");
        return $this;
    }

}
