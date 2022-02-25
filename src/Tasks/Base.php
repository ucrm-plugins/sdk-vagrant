<?php /** @noinspection PhpUnused */
declare(strict_types=1);

namespace SpaethTech\Robo\Vagrant\Tasks;

use Robo\Common\ExecOneCommand;
use Robo\Result;
use Robo\Task\BaseTask;
use Symfony\Component\Process\ExecutableFinder;
use Robo\Contract\CommandInterface;

/**
 * The Base task for all of our Vagrant Robo Tasks.
 *
 * @author Ryan Spaeth <rspaeth@spaethtech.com>
 * @copyright 2022 Spaeth Technologies Inc.
 */
abstract class Base extends BaseTask implements CommandInterface
{
    use ExecOneCommand;

    protected array $options = [];
    protected string $executable = "";
    protected string $action = "";
    protected string $append = "";
    
    /**
     * Default constructor.
     *
     * @param string|null $pathToVagrant An optional path to the Vagrant executable.  When not provided, we determine
     *     the correct executable using Symfony's ExecutableFinder().
     */
    public function __construct(?string $pathToVagrant = null)
    {
        $this->executable = ($pathToVagrant) ?: (new ExecutableFinder())->find("vagrant");
    }

    /**
     * Adds the "--help" option to the Vagrant command.
     *
     * @return self Returns this calling Task, for method chaining.
     */
    public function help(): self
    {
        $this->option("--help");

        return $this;
    }
    
    /**
     * Builds the full command string from the provided executable, action, and arguments.
     *
     * @return string
     */
    public function getCommand() : string
    {
        return "$this->executable $this->action$this->arguments $this->append";
    }
    
    /**
     * Executes the Vagrant Task.
     *
     * @return Result
     */
    public function run() : Result
    {
        return $this->executeCommand($this->getCommand());
    }
}
