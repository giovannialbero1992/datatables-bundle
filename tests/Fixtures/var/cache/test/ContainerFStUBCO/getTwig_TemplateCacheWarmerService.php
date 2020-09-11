<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'twig.template_cache_warmer' shared service.

return $this->privates['twig.template_cache_warmer'] = new \Symfony\Bundle\TwigBundle\CacheWarmer\TemplateCacheWarmer((new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'twig' => ['services', 'twig', 'getTwigService', false],
], [
    'twig' => 'Twig\\Environment',
]))->withContext('twig.template_cache_warmer', $this), ($this->privates['twig.template_iterator'] ?? $this->load('getTwig_TemplateIteratorService.php')));
