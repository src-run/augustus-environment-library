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
 * Class IncludePath.
 */
final class IncludePath
{
    /**
     * @return string
     */
    static public function restore()
    {
        restore_include_path();

        return static::get();
    }

    /**
     * @return string
     */
    static public function get()
    {
        return (string) get_include_path();
    }

    /**
     * @param string $includePath
     * @param bool   $prepend
     *
     * @return bool|string
     */
    static public function add($includePath, $prepend = true)
    {
        if (!file_exists($includePath)) {
            return false;
        }

        $existing = static::get();

        if ($prepend) {
            return set_include_path(
                ($includePath . PATH_SEPARATOR) .
                (substr($existing, 0, 1) === PATH_SEPARATOR ? substr($existing, 1) : $existing));
        }

        return set_include_path(
            (substr($existing, -1, 1) === PATH_SEPARATOR ? substr($existing, 0, strlen($existing) - 1) : $existing) .
            (PATH_SEPARATOR . $includePath));
    }

    /**
     * @param string $includePath
     *
     * @return bool|string
     */
    static public function prependAdd($includePath)
    {
        return static::add($includePath, true);
    }

    /**
     * @param string $includePath
     *
     * @return bool|string
     */
    static public function appendAdd($includePath)
    {
        return static::add($includePath, false);
    }
}

/* EOF */
