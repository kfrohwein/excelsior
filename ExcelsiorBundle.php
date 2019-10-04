<?php

/*
 * This file is part of the excelsior bundle.
 *
 * (c) Karsten Frohwein 2019 to today
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Kfrohwein\Excelsior;

use Kfrohwein\Excelsior\DependencyInjection\ExcelsiorPageExtension;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ExcelsiorBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        $container->registerExtension(new ExcelsiorPageExtension());

        parent::build($container);
    }

}
