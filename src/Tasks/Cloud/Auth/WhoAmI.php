<?php /** @noinspection PhpUnused */
declare(strict_types=1);

namespace SpaethTech\Robo\Vagrant\Tasks\Cloud\Auth;

use SpaethTech\Robo\Vagrant\Tasks\Base;

/**
 * Handles task execution for `vagrant cloud auth whoami [options]`
 *
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @copyright 2022 Spaeth Technologies Inc.
 * @final
 */
final class WhoAmI extends Base
{
    protected string $action = "cloud auth whoami";
    
    
    /**
     * Adds the `[TOKEN]` value to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function withToken(string $token): self
    {
        //$this->option("--token \"$token\"");
        $this->action .= " \"$token\"";
        return $this;
    }
    
}
