<?php /** @noinspection PhpUnused */
declare(strict_types=1);

namespace SpaethTech\Robo\Vagrant\Tasks;

/**
 * Handles task execution for `vagrant init [options]`
 *
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @copyright 2022 Spaeth Technologies Inc.
 * @final
 */
final class Init extends Base
{
    protected string $action = "init";
    
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
    
    /**
     * Adds the `--minimal` option to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function minimal(): self
    {
        $this->option("--minimal");
        return $this;
    }
    
    /**
     * Adds the `--output` option to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function outputFile(string $outputFile): self
    {
        $this->option("--output \"$outputFile\"");
        return $this;
    }

}
