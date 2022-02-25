<?php /** @noinspection PhpUnused */
declare(strict_types=1);

namespace SpaethTech\Robo\Vagrant\Tasks;

/**
 * Handles task execution for `vagrant package [options]`
 *
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @copyright 2022 Spaeth Technologies Inc.
 * @final
 */
final class Package extends Base
{
    protected string $action = "package";
    
    /**
     * Adds the `--base` option to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function base(string $base_name = ""): self
    {
        $this->option("--base \"$base_name\"");
        return $this;
    }
    
    /**
     * Adds the `--output` option to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function outputFile(string $outputFile = ""): self
    {
        $this->option("--output \"$outputFile\"");
        return $this;
    }
    
    /**
     * Adds the `--include` option to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function includeFile(string $includeFile = ""): self
    {
        $this->option("--include \"$includeFile\"");
        return $this;
    }
    
    /**
     * Adds the `--info` option to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function infoFile(string $infoFile = ""): self
    {
        $this->option("--info \"$infoFile\"");
        return $this;
    }
    
    /**
     * Adds the `--vagrantfile` option to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function vagrantFile(string $vagrantFile = ""): self
    {
        $this->option("--vagrantfile \"$vagrantFile\"");
        return $this;
    }
    
}
