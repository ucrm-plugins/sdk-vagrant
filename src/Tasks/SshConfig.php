<?php /** @noinspection PhpUnused */
declare(strict_types=1);

namespace SpaethTech\Robo\Vagrant\Tasks;

/**
 * Handles task execution for `vagrant ssh-config [options]`
 *
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @copyright 2022 Spaeth Technologies Inc.
 * @final
 */
final class SshConfig extends Base
{
    protected string $action = "ssh-config";
    
    /**
     * Adds the `--host` option to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function host(string $host_name = ""): self
    {
        $this->option("--host $host_name");
        return $this;
    }

}
