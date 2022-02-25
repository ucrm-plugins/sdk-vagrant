<?php /** @noinspection PhpUnused */
declare(strict_types=1);

namespace SpaethTech\Robo\Vagrant\Tasks;

/**
 * Handles task execution for `vagrant plugin [options]`
 *
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @copyright 2022 Spaeth Technologies Inc.
 * @final
 */
final class Plugin extends Base
{
    protected string $action = "plugin";
    
    /**
     * Adds the `install` subcommand to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function install(): self
    {
        $this->action = "plugin install";
        return $this;
    }
    
    /**
     * Adds the `license` subcommand to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function license(): self
    {
        $this->action = "plugin license";
        return $this;
    }
    
    /**
     * Adds the `list` subcommand to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function listPlugins(): self
    {
        $this->action = "plugin list";
        return $this;
    }
    
    /**
     * Adds the `uninstall` subcommand to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function uninstall(): self
    {
        $this->action = "plugin uninstall";
        return $this;
    }
    
    /**
     * Adds the `update` subcommand to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function update(): self
    {
        $this->action = "plugin update";
        return $this;
    }

}
