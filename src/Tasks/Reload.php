<?php /** @noinspection PhpUnused */
declare(strict_types=1);

namespace SpaethTech\Robo\Vagrant\Tasks;

/**
 * Handles task execution for `vagrant reload [options]`
 *
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @copyright 2022 Spaeth Technologies Inc.
 * @final
 */
final class Reload extends Base
{
    protected string $action = "reload";
    
    /**
     * Adds the `--no-provision` option to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function noProvision(): self
    {
        $this->option("--no-provision");
        return $this;
    }
    
    /**
     * Adds the `--provision` option to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function provision(): self
    {
        $this->option("--provision");
        return $this;
    }
    
    /**
     * Adds the `--provision-with` option to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function provisionWith(string ...$provisioners): self
    {
        $this->option("--provision-with ".implode(",", $provisioners));
        return $this;
    }

}
