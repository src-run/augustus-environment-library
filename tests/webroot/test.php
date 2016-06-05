<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>SAPI Test</title>
</head>
<body><?php

/*
 * This file is part of the `src-run/vermicious-environment-library` project.
 *
 * (c) Rob Frawley 2nd <rmf@src.run>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

require_once "../../vendor/autoload.php";

use SR\Environment\Sapi;
use SR\Environment\Requester;

echo sprintf('<p>Is CLI SAPI: %s</p>', Sapi::isCli() ? 'true' : 'false');
echo sprintf('<p>Is PHP Server SAPI: %s</p>', Sapi::isPhpServer() ? 'true' : 'false');
echo sprintf('<p>Is Web Server SAPI: %s</p>', Sapi::isWebServer() ? 'true' : 'false');
echo sprintf('<p>Is Local Requester: %s</p>', Requester::isLocal() ? 'true' : 'false');

?></body>
</html>
