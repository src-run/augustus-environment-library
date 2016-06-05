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
 * Class SapiInterface.
 */
interface SapiInterface
{
    const SAPI_WEB_LIST = [
        'aolserver',
        'apache.*',
        'caudium',
        'cgi.*',
        'cli-server',
        'fpm-fcgi',
        'milter',
        'nsapi',
        '[pt]httpd',
        '(pi3)?web(james)?',
        'roxen',
        'tux',
    ];

    /**
     * @return bool
     */
    public static function isCli();

    /**
     * @return bool
     */
    public static function isPhpServer();

    /**
     * @return bool
     */
    public static function isWebServer();
}

/* EOF */
