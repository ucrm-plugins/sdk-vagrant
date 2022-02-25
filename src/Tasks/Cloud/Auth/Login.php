<?php /** @noinspection PhpUnused */
declare(strict_types=1);

namespace SpaethTech\Robo\Vagrant\Tasks\Cloud\Auth;

use SpaethTech\Robo\Vagrant\Tasks\Base;

/**
 * Handles task execution for `vagrant cloud auth login [options]`
 *
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @copyright 2022 Spaeth Technologies Inc.
 * @final
 */
final class Login extends Base
{
    protected string $action = "cloud auth login";
    
    /**
     * Adds the `--check` option to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function check(): self
    {
        $this->option("--check");
        return $this;
    }
    
    /**
     * Adds the `--token` option to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function withToken(string $token): self
    {
        $this->option("--token \"$token\"");
        return $this;
    }
    
}
