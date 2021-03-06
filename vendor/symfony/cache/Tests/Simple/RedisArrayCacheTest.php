<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper5ece82d7231e4\Symfony\Component\Cache\Tests\Simple;

class RedisArrayCacheTest extends \_PhpScoper5ece82d7231e4\Symfony\Component\Cache\Tests\Simple\AbstractRedisCacheTest
{
    public static function setUpBeforeClass()
    {
        parent::setupBeforeClass();
        if (!\class_exists('_PhpScoper5ece82d7231e4\\RedisArray')) {
            self::markTestSkipped('The RedisArray class is required.');
        }
        self::$redis = new \_PhpScoper5ece82d7231e4\RedisArray([\getenv('REDIS_HOST')], ['lazy_connect' => \true]);
    }
}
