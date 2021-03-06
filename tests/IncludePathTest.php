<?php

/*
 * This file is part of the `src-run/vermicious-environment-library` project.
 *
 * (c) Rob Frawley 2nd <rmf@src.run>
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace SR\Environment\Tests;

use SR\Environment\IncludePath;

/**
 * Class IncludePath.
 */
class IncludePathTest extends \PHPUnit_Framework_TestCase
{
    public function testPrependAdd()
    {
        IncludePath::restore();

        $default = IncludePath::get();
        IncludePath::prependAdd(__DIR__);
        $expected = $this->cleanPath(__DIR__.PATH_SEPARATOR.$default);

        $this->assertSame($expected, IncludePath::get());
    }

    public function testAppendAdd()
    {
        IncludePath::restore();

        $default = IncludePath::get();
        IncludePath::appendAdd(__DIR__);
        $expected = $this->cleanPath($default.PATH_SEPARATOR.__DIR__);

        $this->assertSame($expected, IncludePath::get());
    }

    public function testAddInvalid()
    {
        IncludePath::restore();

        $default = IncludePath::get();
        IncludePath::appendAdd(__DIR__.'/does/not/exist');
        $expected = $default;

        $this->assertSame($expected, IncludePath::get());
    }

    public function testRestore()
    {
        IncludePath::restore();

        $default = IncludePath::get();
        IncludePath::appendAdd(__DIR__);
        $expected = $this->cleanPath($default.PATH_SEPARATOR.__DIR__);

        $this->assertSame($expected, IncludePath::get());

        IncludePath::restore();
        $this->assertNotSame($expected, IncludePath::get());
    }

    private function cleanPath($path)
    {
        return preg_replace('{['.PATH_SEPARATOR.']+}', PATH_SEPARATOR, $path);
    }
}

/* EOF */
