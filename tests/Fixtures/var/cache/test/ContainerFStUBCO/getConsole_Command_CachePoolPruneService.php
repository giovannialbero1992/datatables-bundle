<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'console.command.cache_pool_prune' shared service.

$this->privates['console.command.cache_pool_prune'] = $instance = new \Symfony\Bundle\FrameworkBundle\Command\CachePoolPruneCommand(new RewindableGenerator(function () {
    yield 'cache.app' => ($this->services['cache.app'] ?? $this->getCache_AppService());
    yield 'cache.system' => ($this->services['cache.system'] ?? $this->getCache_SystemService());
    yield 'cache.validator' => ($this->privates['cache.validator'] ?? $this->getCache_ValidatorService());
    yield 'cache.serializer' => ($this->privates['cache.serializer'] ?? $this->getCache_SerializerService());
    yield 'cache.annotations' => ($this->privates['cache.annotations'] ?? $this->getCache_AnnotationsService());
    yield 'cache.property_info' => ($this->privates['cache.property_info'] ?? $this->getCache_PropertyInfoService());
    yield 'doctrine.result_cache_pool' => ($this->privates['doctrine.result_cache_pool'] ?? $this->getDoctrine_ResultCachePoolService());
    yield 'doctrine.system_cache_pool' => ($this->privates['doctrine.system_cache_pool'] ?? $this->getDoctrine_SystemCachePoolService());
}, 8));

$instance->setName('cache:pool:prune');

return $instance;
