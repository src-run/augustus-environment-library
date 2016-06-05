<?php

/*
 * This file is part of the `src-run/augustus-environment-library` project.
 *
 * (c) Rob Frawley 2nd <rmf@src.run>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace SR\Environment\Tests;

use SR\Environment\Sapi;

/**
 * Class SapiTest.
 */
class SapiTest extends \PHPUnit_Framework_TestCase
{
    public function testIsCli()
    {
        $this->assertTrue(Sapi::isCli());
        $this->assertFalse(Sapi::isPhpServer());
        $this->assertFalse(Sapi::isWebServer());
    }

    public function testIsWeb()
    {
        $server = new \Goutte\Client();
        //$response = $server->request('GEt', 'http://127.0.0.1:8888/webroot/test.php');

        //$this->assertRegExp('{Is CLI SAPI: false}', $response->text());
        //$this->assertRegExp('{Is PHP Server SAPI: true}', $response->text());
        //$this->assertRegExp('{Is Web Server SAPI: true}', $response->text());
    }
}

/* EOF */
