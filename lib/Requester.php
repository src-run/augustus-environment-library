<?php

/*
 * This file is part of the `src-run/augustus-environment-library` project.
 *
 * (c) Rob Frawley 2nd <rmf@src.run>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace SR\Environment;

/**
 * Class Requester.
 */
final class Requester implements RequesterInterface
{
    /**
     * @return bool
     */
    static public function isLocal()
    {
        if (Sapi::isCli() === true) {
            return true;
        }

        if (Sapi::isPhpServer() === true) {
            return true;
        }

        if (isset($_SERVER['HTTP_CLIENT_IP']) || isset($_SERVER['HTTP_X_FORWARDED_FOR']) || !isset($_SERVER['REMOTE_ADDR'])) {
            return false;
        }

        return in_array($_SERVER['REMOTE_ADDR'], ['127.0.0.1', 'fe80::1', '::1']);
    }
}

/* EOF */
