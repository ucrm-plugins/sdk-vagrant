<?php /** @noinspection PhpUnused */
declare(strict_types=1);

namespace SpaethTech\Robo\Vagrant\Tasks\Cloud\Box;

use SpaethTech\Robo\Vagrant\Tasks\Base;

/**
 * Handles task execution for `vagrant cloud box create [options]`
 *
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @copyright 2022 Spaeth Technologies Inc.
 * @final
 */
final class Create extends Base
{
    //protected string $action = "cloud box create";
    
    public function __construct(string $organization, string $name, ?string $pathToVagrant = NULL)
    {
        parent::__construct($pathToVagrant);
        $this->action = "cloud box create $organization/$name";
    }
    
    /**
     * Adds the `--description` option to the Vagrant command.
     *
     * @param string $description
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function withDescription(string $description): self
    {
        $this->option("--description \"$description\"");
        return $this;
    }
    
    /**
     * Adds the `--short-description` option to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function withShortDescription(string $description): self
    {
        $this->option("--short-description \"$description\"");
        return $this;
    }
    
    /**
     * Adds the `--private` option to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function makePrivate(): self
    {
        $this->option("--private");
        return $this;
    }
    
    /**
     * Adds the `delete` subcommand to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function logout(): self
    {
        $this->action = "cloud auth logout";
        return $this;
    }
    
    /**
     * Adds the `whoami` subcommand to the Vagrant command.
     *
     * @param string $token
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function whoami(string $token = ""): self
    {
        $this->action = "cloud auth whoami".($token ? " \"$token\"" : "");
        return $this;
    }

}
