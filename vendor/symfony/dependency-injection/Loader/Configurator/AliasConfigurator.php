<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace _PhpScoper5ece82d7231e4\Symfony\Component\DependencyInjection\Loader\Configurator;

use _PhpScoper5ece82d7231e4\Symfony\Component\DependencyInjection\Alias;
/**
 * @author Nicolas Grekas <p@tchwork.com>
 */
class AliasConfigurator extends \_PhpScoper5ece82d7231e4\Symfony\Component\DependencyInjection\Loader\Configurator\AbstractServiceConfigurator
{
    const FACTORY = 'alias';
    use Traits\PublicTrait;
    public function __construct(\_PhpScoper5ece82d7231e4\Symfony\Component\DependencyInjection\Loader\Configurator\ServicesConfigurator $parent, \_PhpScoper5ece82d7231e4\Symfony\Component\DependencyInjection\Alias $alias)
    {
        $this->parent = $parent;
        $this->definition = $alias;
    }
}
