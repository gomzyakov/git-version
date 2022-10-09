<?php

namespace Gomzyakov\GitVersion\Exception;

use RuntimeException;

class CouldNotGetVersionException extends RuntimeException
{
    /**
     * Default error message.
     */
    private const DEFAULT_MESSAGE = 'Could not get version string (no version file and `git describe` failed)';

    /**
     * @param string|null $message
     * @param int         $code
     */
    public function __construct(?string $message = null, int $code = 0)
    {
        if ($message === null) {
            $message = self::DEFAULT_MESSAGE;
        }
        parent::__construct($message, $code);
    }
}
