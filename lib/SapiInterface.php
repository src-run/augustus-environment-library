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
        'phttpd',
        'pi3web',
        'roxen',
        'thttpd',
        'tux',
        'webjames',
    ];

    /**
     * @return bool
     */
    static public function isCli();

    /**
     * @return bool
     */
    static public function isPhpServer();

    /**
     * @return bool
     */
    static public function isWebServer();
}

/* EOF */
