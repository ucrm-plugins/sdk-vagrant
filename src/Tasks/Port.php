<?php /** @noinspection PhpUnused */
declare(strict_types=1);

namespace SpaethTech\Robo\Vagrant\Tasks;

/**
 * Handles task execution for `vagrant port [options]`
 *
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @copyright 2022 Spaeth Technologies Inc.
 * @final
 */
final class Port extends Base
{
    protected string $action = "port";
    
    /**
     * Adds the `--guest` option to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function guest(int $port): self
    {
        // TODO: Convert the port number to a string and check range for valid values.
        
        $this->option("--guest $port");
        return $this;
    }
    
    /**
     * Adds the `--machine-readable` option to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function machineReadable(): self
    {
        $this->option("--machine-readable");
        return $this;
    }

}
