<?php

namespace Gomzyakov\GitVersion;

use Gomzyakov\GitVersion\Exception\CouldNotGetVersionException;
use Symfony\Component\Process\Process;
use Throwable;

class GitVersion
{
    /**
     * Shell command to get version string from git.
     */
    private const SHELL_COMMAND = 'git describe --always --tags --dirty';

    /**
     * Get the app's version string from `git describe`.
     *
     * @throws CouldNotGetVersionException
     *
     * @return string Version string
     */
    public static function getVersion(): string
    {
        try {
            $process = Process::fromShellCommandline(self::SHELL_COMMAND, __DIR__);

            $process->mustRun();
            $output = $process->getOutput();

            return trim($output);
        } catch (Throwable $e) {
            throw new CouldNotGetVersionException($e->getMessage(), $e->getCode());
        }
    }
}
