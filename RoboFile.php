<?php
/**
 * @noinspection PhpUnused
 * @noinspection PhpUnusedParameterInspection
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
    private const DEFAULT_UISP_VERSION = "1.4.2";
    
    
    public function __construct()
    {
        $dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
        $dotenv->safeLoad();
    }
    
    
    use SpaethTech\Robo\Vagrant\VagrantTasks;
    use SpaethTech\Robo\Vagrant\VagrantCommands;
    
    /**
     * @param ConsoleIO $io
     * @param string $version
     *
     * @return void
     */
    public function boxPackage(ConsoleIO $io, string $version = self::DEFAULT_UISP_VERSION)
    {
        //vagrant package --output ./boxes/${UISP_VERSION}/uisp.box
        $this
            ->taskVagrantPackage()
            ->outputFile("./boxes/$version/uisp.box")
            ->run();
    }
    
    
    
    public function boxPublish(ConsoleIO $io, string $version = self::DEFAULT_UISP_VERSION)
    {
        //$token = $_ENV["VAGRANT_CLOUD_TOKEN"];
        
        $this
            //->taskVagrantCloudAuthLogin()
            //->check()
            ->taskVagrantCloudAuthWhoAmI()
            ->run();
        
        //$this
        //    ->taskVagrantStatus()
        //    ->run();
    
    
    }
    
    
}