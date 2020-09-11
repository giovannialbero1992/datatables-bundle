<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the private 'datatables.adapter_locator' shared service.

return $this->privates['datatables.adapter_locator'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($this->getService, [
    'Omines\\DataTablesBundle\\Adapter\\ArrayAdapter' => [false, 'Omines\\DataTablesBundle\\Adapter\\ArrayAdapter', 'getArrayAdapterService.php', true],
    'Omines\\DataTablesBundle\\Adapter\\Doctrine\\ORMAdapter' => [false, 'Omines\\DataTablesBundle\\Adapter\\Doctrine\\ORMAdapter', 'getORMAdapterService.php', true],
    'Tests\\Fixtures\\AppBundle\\DataTable\\Adapter\\CustomORMAdapter' => [false, 'Tests\\Fixtures\\AppBundle\\DataTable\\Adapter\\CustomORMAdapter', 'getCustomORMAdapterService.php', true],
], [
    'Omines\\DataTablesBundle\\Adapter\\ArrayAdapter' => '?',
    'Omines\\DataTablesBundle\\Adapter\\Doctrine\\ORMAdapter' => '?',
    'Tests\\Fixtures\\AppBundle\\DataTable\\Adapter\\CustomORMAdapter' => '?',
]);
