<?php
/**
 * @noinspection PhpUnused
 * @noinspection PhpMissingReturnTypeInspection
 * @noinspection PhpIncompatibleReturnTypeInspection
 * @noinspection PhpReturnDocTypeMismatchInspection
 */
declare(strict_types=1);

namespace SpaethTech\Robo\Vagrant;

/**
 * All available vagrantCommands Tasks for Robo.
 *
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @copyright 2022 Spaeth Technologies Inc.
 */
trait VagrantTasks
{
    /**
     * @param string|NULL $pathToVagrant
     * @return Tasks\Box
     */
    protected function taskVagrantBox(?string $pathToVagrant = NULL)
    {
        return $this->task(Tasks\Box::class, $pathToVagrant);
    }

    /**
     * @param string|NULL $pathToVagrant
     * @return Tasks\Destroy
     */
    protected function taskVagrantDestroy(?string $pathToVagrant = NULL)
    {
        return $this->task(Tasks\Destroy::class, $pathToVagrant);
    }

    /**
     * @param string|NULL $pathToVagrant
     * @return Tasks\GlobalStatus
     */
    protected function taskVagrantGlobalStatus(?string $pathToVagrant = NULL)
    {
        return $this->task(Tasks\GlobalStatus::class, $pathToVagrant);
    }

    /**
     * @param string|NULL $pathToVagrant
     * @return Tasks\Halt
     */
    protected function taskVagrantHalt(?string $pathToVagrant = NULL)
    {
        return $this->task(Tasks\Halt::class, $pathToVagrant);
    }

    /**
     * @param string|NULL $pathToVagrant
     * @return Tasks\Help
     */
    protected function taskVagrantHelp(?string $pathToVagrant = NULL)
    {
        return $this->task(Tasks\Help::class, $pathToVagrant);
    }

    /**
     * @param string|NULL $pathToVagrant
     * @return Tasks\Init
     */
    protected function taskVagrantInit(?string $pathToVagrant = NULL)
    {
        return $this->task(Tasks\Init::class, $pathToVagrant);
    }

    /**
     * @param string|NULL $pathToVagrant
     * @return Tasks\ListCommands
     */
    protected function taskVagrantListCommands(?string $pathToVagrant = NULL)
    {
        return $this->task(Tasks\ListCommands::class, $pathToVagrant);
    }

    /**
     * @param string|NULL $pathToVagrant
     * @return Tasks\Package
     */
    protected function taskVagrantPackage(?string $pathToVagrant = NULL)
    {
        return $this->task(Tasks\Package::class, $pathToVagrant);
    }

    /**
     * @param string|NULL $pathToVagrant
     * @return Tasks\Plugin
     */
    protected function taskVagrantPlugin(?string $pathToVagrant = NULL)
    {
        return $this->task(Tasks\Plugin::class, $pathToVagrant);
    }

    /**
     * @param string|NULL $pathToVagrant
     * @return Tasks\Port
     */
    protected function taskVagrantPort(?string $pathToVagrant = NULL)
    {
        return $this->task(Tasks\Port::class, $pathToVagrant);
    }

    /**
     * @param string|NULL $pathToVagrant
     * @return Tasks\Provision
     */
    protected function taskVagrantProvision(?string $pathToVagrant = NULL)
    {
        return $this->task(Tasks\Provision::class, $pathToVagrant);
    }

    /**
     * @param string|NULL $pathToVagrant
     * @return Tasks\Reload
     */
    protected function taskVagrantReload(?string $pathToVagrant = NULL)
    {
        return $this->task(Tasks\Reload::class, $pathToVagrant);
    }

    /**
     * @param string|NULL $pathToVagrant
     * @return Tasks\Resume
     */
    protected function taskVagrantResume(?string $pathToVagrant = NULL)
    {
        return $this->task(Tasks\Resume::class, $pathToVagrant);
    }

    /**
     * @param string|NULL $pathToVagrant
     * @return Tasks\Ssh
     */
    protected function taskVagrantSsh(?string $pathToVagrant = NULL)
    {
        return $this->task(Tasks\Ssh::class, $pathToVagrant);
    }

    /**
     * @param string|NULL $pathToVagrant
     * @return Tasks\SshConfig
     */
    protected function taskVagrantSshConfig(?string $pathToVagrant = NULL)
    {
        return $this->task(Tasks\SshConfig::class, $pathToVagrant);
    }

    /**
     * @param string|NULL $pathToVagrant
     * @return Tasks\Snapshot
     */
    protected function taskVagrantSnapshot(?string $pathToVagrant = NULL)
    {
        return $this->task(Tasks\Snapshot::class, $pathToVagrant);
    }

    /**
     * @param string|NULL $pathToVagrant
     * @return Tasks\Status
     */
    protected function taskVagrantStatus(?string $pathToVagrant = NULL)
    {
        return $this->task(Tasks\Status::class, $pathToVagrant);
    }

    /**
     * @param string|NULL $pathToVagrant
     * @return Tasks\Suspend
     */
    protected function taskVagrantSuspend(?string $pathToVagrant = NULL)
    {
        return $this->task(Tasks\Suspend::class, $pathToVagrant);
    }

    /**
     * @param string|NULL $pathToVagrant
     * @return Tasks\Up
     */
    protected function taskVagrantUp(?string $pathToVagrant = NULL)
    {
        return $this->task(Tasks\Up::class, $pathToVagrant);
    }

    /**
     * @param string|NULL $pathToVagrant
     *
     * @return Tasks\Version
     */
    protected function taskVagrantVersion(?string $pathToVagrant = NULL)
    {
        return $this->task(Tasks\Version::class, $pathToVagrant);
    }
    
    /**
     * @param string $organization
     * @param string $name
     * @param string|NULL $pathToVagrant
     *
     * @return Tasks\Cloud\Box\Create
     */
    protected function taskVagrantCloudBoxCreate(string $organization, string $name, ?string $pathToVagrant = NULL)
    {
        return $this->task(Tasks\Cloud\Box\Create::class, $organization, $name, $pathToVagrant);
    }
    
    /**
     * @param string|null $pathToVagrant
     *
     * @return Tasks\Cloud\Auth\Login
     */
    protected function taskVagrantCloudAuthLogin(?string $pathToVagrant = NULL)
    {
        return $this->task(Tasks\Cloud\Auth\Login::class, $pathToVagrant);
    }
    
    /**
     * @param string|null $pathToVagrant
     *
     * @return Tasks\Cloud\Auth\Logout
     */
    protected function taskVagrantCloudAuthLogout(?string $pathToVagrant = NULL)
    {
        return $this->task(Tasks\Cloud\Auth\Logout::class, $pathToVagrant);
    }
    
    /**
     * @param string|null $pathToVagrant
     *
     * @return Tasks\Cloud\Auth\WhoAmI
     */
    protected function taskVagrantCloudAuthWhoAmI(?string $pathToVagrant = NULL)
    {
        return $this->task(Tasks\Cloud\Auth\WhoAmI::class, $pathToVagrant);
    }
    
    /**
     * @param string $organization
     * @param string $name
     * @param string $version
     * @param string $provider
     * @param string|null $file
     * @param string|null $pathToVagrant
     *
     * @return Tasks\Cloud\Publish
     */
    protected function taskVagrantCloudPublish(
        string $organization,
        string $name,
        string $version,
        string $provider,
        ?string $file = NULL,
        ?string $pathToVagrant = NULL)
    {
        return $this->task(Tasks\Cloud\Publish::class, $organization, $name, $version, $provider, $file, $pathToVagrant);
    }
    
}
