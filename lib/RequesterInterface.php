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
 * Class RequesterInterface.
 */
interface RequesterInterface
{
    /**
     * @return bool
     */
    public static function isLocal();
}

/* EOF */
