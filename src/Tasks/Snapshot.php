<?php /** @noinspection PhpUnused */
declare(strict_types=1);

namespace SpaethTech\Robo\Vagrant\Tasks;

/**
 * Handles task execution for `vagrant snapshot [options]`
 *
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @copyright 2022 Spaeth Technologies Inc.
 * @final
 */
final class Snapshot extends Base
{
    protected string $action = "snapshot";
    
    /**
     * Adds the `delete` subcommand to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function delete(): self
    {
        $this->action = "snapshot delete";
        return $this;
    }
    
    /**
     * Adds the `list` subcommand to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function listSnapshots(): self
    {
        $this->action = "snapshot list";
        return $this;
    }
    
    /**
     * Adds the `pop` subcommand to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function pop(): self
    {
        $this->action = "snapshot pop";
        return $this;
    }
    
    /**
     * Adds the `push` subcommand to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function push(): self
    {
        $this->action = "snapshot push";
        return $this;
    }
    
    /**
     * Adds the `restore` subcommand to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function restore(): self
    {
        $this->action = "snapshot restore";
        return $this;
    }
    
    /**
     * Adds the `save` subcommand to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function save(): self
    {
        $this->action = "snapshot save";
        return $this;
    }

}
