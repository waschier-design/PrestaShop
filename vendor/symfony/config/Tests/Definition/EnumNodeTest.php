<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper5ece82d7231e4\Symfony\Component\Config\Tests\Definition;

use _PhpScoper5ece82d7231e4\PHPUnit\Framework\TestCase;
use _PhpScoper5ece82d7231e4\Symfony\Component\Config\Definition\EnumNode;
class EnumNodeTest extends \_PhpScoper5ece82d7231e4\PHPUnit\Framework\TestCase
{
    public function testFinalizeValue()
    {
        $node = new \_PhpScoper5ece82d7231e4\Symfony\Component\Config\Definition\EnumNode('foo', null, ['foo', 'bar']);
        $this->assertSame('foo', $node->finalize('foo'));
    }
    public function testConstructionWithNoValues()
    {
        $this->expectException('InvalidArgumentException');
        $this->expectExceptionMessage('$values must contain at least one element.');
        new \_PhpScoper5ece82d7231e4\Symfony\Component\Config\Definition\EnumNode('foo', null, []);
    }
    public function testConstructionWithOneValue()
    {
        $node = new \_PhpScoper5ece82d7231e4\Symfony\Component\Config\Definition\EnumNode('foo', null, ['foo']);
        $this->assertSame('foo', $node->finalize('foo'));
    }
    public function testConstructionWithOneDistinctValue()
    {
        $node = new \_PhpScoper5ece82d7231e4\Symfony\Component\Config\Definition\EnumNode('foo', null, ['foo', 'foo']);
        $this->assertSame('foo', $node->finalize('foo'));
    }
    public function testFinalizeWithInvalidValue()
    {
        $this->expectException('_PhpScoper5ece82d7231e4\\Symfony\\Component\\Config\\Definition\\Exception\\InvalidConfigurationException');
        $this->expectExceptionMessage('The value "foobar" is not allowed for path "foo". Permissible values: "foo", "bar"');
        $node = new \_PhpScoper5ece82d7231e4\Symfony\Component\Config\Definition\EnumNode('foo', null, ['foo', 'bar']);
        $node->finalize('foobar');
    }
}
