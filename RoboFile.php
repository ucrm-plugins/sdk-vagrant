<?php
/**
 * @noinspection PhpUnused
 * @noinspection PhpUnusedParameterInspection
 * @noinspection PhpDocSignatureIsNotCompleteInspection
 */
declare(strict_types=1);

require __DIR__."/vendor/autoload.php";

use Robo\Symfony\ConsoleIO;
use Robo\Tasks;

/**
 * The project's console commands configuration for Robo task runner.
 *
 * @see https://robo.li/
 *
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @copyright 2022 Spaeth Technologies Inc.
 * @final
 */
final class RoboFile extends Tasks
{
    //private string $autoVersion = "1.4.2";
    
    public function __construct()
    {
        // Load the project's ".env" file, if it exists!
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
        $dotenv->safeLoad();
        
        define("UISP_VERSION",
            (array_key_exists("UISP_VERSION", $_ENV) && $_ENV["UISP_VERSION"])
                ? $_ENV["UISP_VERSION"]
                : "1.4.2"
        );
    }
    
    
    use SpaethTech\Robo\Vagrant\VagrantTasks;
    use SpaethTech\Robo\Vagrant\VagrantCommands;
    
    /**
     * @param string|null $version
     *
     * @return void
     */
    public function boxPackage(ConsoleIO $io, ?string $version = null)
    {
        $version = $version ?? UISP_VERSION;
        
        //Runs: vagrant package --output ./boxes/$version/uisp.box
        $this
            ->taskVagrantPackage()
            ->outputFile("./boxes/$version/uisp.box")
            ->run();
    }
    
    
    /**
     * @param string|null $version
     *
     * @return void
     */
    public function boxPublish(ConsoleIO $io, ?string $version = null)
    {
        $version = $version ?? UISP_VERSION;
        
        //$token = $_ENV["VAGRANT_CLOUD_TOKEN"];
        if (! $path = realpath(__DIR__."/boxes/$version/uisp.box"))
        {
            $io->error("The path \"$path\" does not exist, exiting!");
            return;
        }
        
        $this
            ->taskVagrantCloudPublish("ucrm-plugins", "uisp", $version, "virtualbox", $path)
            ->withVersionDescription("UISP $version running on Ubuntu 20.04")
            ->release()
            ->force()
            ->run();
        
        //$this
        //    ->taskVagrantStatus()
        //    ->run();
    
    
    }
    
    
}