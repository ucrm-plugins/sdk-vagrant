<?php /** @noinspection PhpUnused */
declare(strict_types=1);

namespace SpaethTech\Robo\Vagrant\Tasks;

/**
 * Handles task execution for `vagrant box [options]`
 *
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @copyright 2022 Spaeth Technologies Inc.
 * @final
 */
final class Box extends Base
{
    protected string $action = "box";
    
    /**
     * Adds the `add` subcommand to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function add(): self
    {
        $this->action = "box add";
        return $this;
    }
    
    /**
     * Adds the `--box-info` option to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function boxInfo(): self
    {
        $this->option("--box-info");
        return $this;
    }
    
    /**
     * Adds the `list` subcommand to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function listBoxes(): self
    {
        $this->action = "box list";
        return $this;
    }
    
    /**
     * Adds the `outdated` subcommand to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function outdated(): self
    {
        $this->action = "box outdated";
        return $this;
    }
    
    /**
     * Adds the `remove` subcommand to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function remove(): self
    {
        $this->action = "box remove";
        return $this;
    }
    
    /**
     * Adds the `repackage` subcommand to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function repackage(): self
    {
        $this->action = "box repackage";
        return $this;
    }
    
    /**
     * Adds the `update` subcommand to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function update(): self
    {
        $this->action = "box update";
        return $this;
    }

}
