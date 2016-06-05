<?php

/*
 * This file is part of the `src-run/vermicious-environment-library` project.
 *
 * (c) Rob Frawley 2nd <rmf@src.run>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace SR\Environment;

/**
 * Class Sapi.
 */
final class Sapi implements SapiInterface
{
    /**
     * @return bool
     */
    static public function isCli()
    {
        return PHP_SAPI === 'cli';
    }

    /**
     * @return bool
     */
    static public function isPhpServer()
    {
        return PHP_SAPI === 'cli-server';
    }

    /**
     * @return bool
     */
    static public function isWebServer()
    {
        if (static::isCli() === true) {
            return false;
        }

        return 1 === preg_match(sprintf('{^(%s)$}i', implode(self::SAPI_WEB_LIST, '|')), PHP_SAPI);
    }
}

/* EOF */
