<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'doctrine.dbal.default_connection' shared service.

return $this->services['doctrine.dbal.default_connection'] = ($this->privates['doctrine.dbal.connection_factory'] ?? ($this->privates['doctrine.dbal.connection_factory'] = new \Doctrine\Bundle\DoctrineBundle\ConnectionFactory([])))->createConnection(['driver' => 'pdo_sqlite', 'path' => (\dirname(__DIR__, 6).'/tmp/data.sqlite'), 'host' => 'localhost', 'port' => NULL, 'user' => 'root', 'password' => NULL, 'driverOptions' => [], 'defaultTableOptions' => []], ($this->privates['doctrine.dbal.default_connection.configuration'] ?? ($this->privates['doctrine.dbal.default_connection.configuration'] = new \Doctrine\DBAL\Configuration())), ($this->privates['doctrine.dbal.default_connection.event_manager'] ?? $this->load('getDoctrine_Dbal_DefaultConnection_EventManagerService.php')), []);
