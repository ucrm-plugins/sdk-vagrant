<?php /** @noinspection PhpUnused */
declare(strict_types=1);

namespace SpaethTech\Robo\Vagrant\Tasks;

/**
 * Handles task execution for `vagrant up [options]`
 *
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @copyright 2022 Spaeth Technologies Inc.
 * @final
 */
final class Up extends Base
{
    protected string $action = "up";
    
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
    
    /**
     * Adds the `--no-destroy-on-error` option to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function noDestroyOnError(): self
    {
        $this->option("--no-destroy-on-error");
        return $this;
    }
    
    /**
     * Adds the `--destroy-on-error` option to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function destroyOnError(): self
    {
        $this->option("--destroy-on-error");
        return $this;
    }
    
    /**
     * Adds the `--no-parallel` option to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function noParallel(): self
    {
        $this->option("--no-parallel");
        return $this;
    }
    
    /**
     * Adds the `--parallel` option to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function parallel(): self
    {
        $this->option("--parallel");
        return $this;
    }
    
    /**
     * Adds the `--provider` option to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function provider(string $provider): self
    {
        $this->option("--provider $provider");
        return $this;
    }
    
    /**
     * Adds the `--no-install-provider` option to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function noInstallProvider(): self
    {
        $this->option("--no-install-provider");
        return $this;
    }
    
    /**
     * Adds the `--install-provider` option to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function installProvider(): self
    {
        $this->option("--install-provider");
        return $this;
    }

}
