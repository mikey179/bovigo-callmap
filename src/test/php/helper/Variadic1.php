<?php
declare(strict_types=1);
/**
 * This file is part of bovigo\callmap.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @package  bovigo_callmap
 */
namespace bovigo\callmap\helper;
/**
 * Helper class for the test.
 */
class Variadic1
{
    public function something(...$foo)
    {
        // intentionally empty
    }

    public function doSomething($x, ...$foo)
    {
        // intentionally empty
    }
}