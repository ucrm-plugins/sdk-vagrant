<?php /** @noinspection PhpUnused */
declare(strict_types=1);

namespace SpaethTech\Robo\Vagrant\Tasks\Cloud;

use SpaethTech\Robo\Vagrant\Tasks\Base;

/**
 * Handles task execution for `vagrant cloud box create [options]`
 *
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @copyright 2022 Spaeth Technologies Inc.
 * @final
 */
final class Publish extends Base
{
    //protected string $action = "cloud box create";
    
    public function __construct(
        string $organization,
        string $name,
        string $version,
        string $provider,
        ?string $file = NULL,
        ?string $pathToVagrant = NULL)
    {
        parent::__construct($pathToVagrant);
        $this->action = "cloud publish";
        $this->append = "$organization/$name $version $provider".($file ? " \"$file\"" : "");
    }
    
    /**
     * Adds the `--box-version` option to the Vagrant command.
     *
     * @param string $version
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function withVersion(string $version): self
    {
        $this->option("--version \"$version\"");
        return $this;
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
    public function private(): self
    {
        $this->option("--private");
        return $this;
    }
    
    /**
     * Adds the `--release` option to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function release(): self
    {
        $this->option("--release");
        return $this;
    }
    
    /**
     * Adds the `--url` option to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function fromUrl(string $url): self
    {
        $this->option("--url \"$url\"");
        return $this;
    }
    
    /**
     * Adds the `--version-description` option to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function withVersionDescription(string $description): self
    {
        $this->option("--version-description \"$description\"");
        return $this;
    }
    
}
