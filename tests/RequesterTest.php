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

use SR\Environment\Requester;

/**
 * Class RequesterTest.
 */
class RequesterTest extends \PHPUnit_Framework_TestCase
{
    public function testIsLocalCli()
    {
        $this->assertTrue(Requester::isLocal());
    }

    public function testIsLocal()
    {
        $server = new \Goutte\Client();
        $response = $server->request('GEt', 'http://127.0.0.1:8888/webroot/test.php');

        $this->assertRegExp('{Is Local Requester: true}', $response->text());
    }

}

/* EOF */
