<?php

/*
 * This file is part of the Symfony CMF package.
 *
 * (c) 2011-2014 Symfony CMF
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


namespace Symfony\Cmf\Bundle\RoutingAutoBundle\Model;

use Symfony\Cmf\Bundle\RoutingBundle\Doctrine\Phpcr\Route;
use Symfony\Cmf\Component\RoutingAuto\Model\AutoRouteInterface;

/**
 * Sub class of Route to enable automatically generated routes
 * to be identified.
 *
 * @author Daniel Leech <daniel@dantleech.com>
 */
class AutoRoute extends Route implements AutoRouteInterface
{
    const DEFAULT_KEY_AUTO_ROUTE_TAG = '_auto_route_tag';

    /**
     * @var AutoRouteInterface
     */
    protected $redirectRoute;

    /**
     * {@inheritDoc}
     */
    public function setAutoRouteTag($autoRouteTag)
    {
        $this->setDefault(self::DEFAULT_KEY_AUTO_ROUTE_TAG, $autoRouteTag);
    }

    /**
     * {@inheritDoc}
     */
    public function getAutoRouteTag()
    {
        return $this->getDefault(self::DEFAULT_KEY_AUTO_ROUTE_TAG);
    }

    public function setType($type)
    {
        $this->setDefault('type', $type);
    }

    public function setRedirectTarget(AutoRouteInterface $redirectRoute)
    {
        $this->redirectRoute = $redirectRoute;
    }

    public function getRedirectTarget()
    {
        return $this->redirectRoute;
    }
}
