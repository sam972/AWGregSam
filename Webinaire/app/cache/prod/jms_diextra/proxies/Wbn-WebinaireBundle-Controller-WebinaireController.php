<?php

namespace EnhancedProxy_ca8c0b01b7eb7a704417ab4bdc46fb36cfbdb64d\__CG__\Wbn\WebinaireBundle\Controller;

/**
 * CG library enhanced proxy class.
 *
 * This code was generated automatically by the CG library, manual changes to it
 * will be lost upon next generation.
 */
class WebinaireController extends \Wbn\WebinaireBundle\Controller\WebinaireController
{
    private $__CGInterception__loader;

    public function membreAction()
    {
        $ref = new \ReflectionMethod('Wbn\\WebinaireBundle\\Controller\\WebinaireController', 'membreAction');
        $interceptors = $this->__CGInterception__loader->loadInterceptors($ref, $this, array());
        $invocation = new \CG\Proxy\MethodInvocation($ref, $this, array(), $interceptors);

        return $invocation->proceed();
    }

    public function __CGInterception__setLoader(\CG\Proxy\InterceptorLoaderInterface $loader)
    {
        $this->__CGInterception__loader = $loader;
    }
}