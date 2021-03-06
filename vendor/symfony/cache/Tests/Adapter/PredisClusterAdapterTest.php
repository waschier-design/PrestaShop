<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper5ece82d7231e4\Symfony\Component\Cache\Tests\Adapter;

class PredisClusterAdapterTest extends \_PhpScoper5ece82d7231e4\Symfony\Component\Cache\Tests\Adapter\AbstractRedisAdapterTest
{
    public static function setUpBeforeClass()
    {
        parent::setUpBeforeClass();
        self::$redis = new \_PhpScoper5ece82d7231e4\Predis\Client([['host' => \getenv('REDIS_HOST')]]);
    }
    public static function tearDownAfterClass()
    {
        self::$redis = null;
    }
}
