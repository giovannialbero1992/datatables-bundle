<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'Omines\DataTablesBundle\Twig\TwigRenderer' shared autowired service.

return $this->privates['Omines\\DataTablesBundle\\Twig\\TwigRenderer'] = new \Omines\DataTablesBundle\Twig\TwigRenderer(($this->services['twig'] ?? $this->getTwigService()));