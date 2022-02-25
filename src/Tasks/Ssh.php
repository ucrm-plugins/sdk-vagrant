<?php /** @noinspection PhpUnused */
declare(strict_types=1);

namespace SpaethTech\Robo\Vagrant\Tasks;

/**
 * Handles task execution for `vagrant ssh [options]`
 *
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @copyright 2022 Spaeth Technologies Inc.
 * @final
 */
final class Ssh extends Base
{
    protected string $action = "ssh";
    
    /**
     * Adds the `--command` option to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function command(string $command = ""): self
    {
        $this->option("--command \"$command\"");
        return $this;
    }
    
    /**
     * Adds the `--plain` option to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function plain(): self
    {
        $this->option("--plain");
        return $this;
    }

}
