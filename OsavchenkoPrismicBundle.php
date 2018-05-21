<?php

namespace Osavchenko\PrismicBundle;

use Osavchenko\PrismicBundle\DependencyInjection\PrismicExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class PrismicBundle
 *
 * @package Prismic\Bundle\PrismicBundle
 */
class OsavchenkoPrismicBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function getContainerExtension()
    {
        return new PrismicExtension();
    }
}
