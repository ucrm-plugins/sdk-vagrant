<?php /** @noinspection PhpUnused */
declare(strict_types=1);

namespace SpaethTech\Robo\Vagrant\Tasks;

/**
 * Handles task execution for `vagrant provision [options]`
 *
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @copyright 2022 Spaeth Technologies Inc.
 * @final
 */
final class Provision extends Base
{
    protected string $action = "provision";
    
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
