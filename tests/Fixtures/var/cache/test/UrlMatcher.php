<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'home', '_controller' => 'Tests\\Fixtures\\AppBundle\\Controller\\HomeController::showAction'], null, null, null, false, false, null]],
        '/plain' => [[['_route' => 'plain', '_controller' => 'Tests\\Fixtures\\AppBundle\\Controller\\PlainController::tableAction'], null, null, null, false, false, null]],
        '/type' => [[['_route' => 'type', '_controller' => 'Tests\\Fixtures\\AppBundle\\Controller\\TypeController::tableAction'], null, null, null, false, false, null]],
        '/service' => [[['_route' => 'service', '_controller' => 'Tests\\Fixtures\\AppBundle\\Controller\\ServiceController::tableAction'], null, null, null, false, false, null]],
        '/custom' => [[['_route' => 'custom', '_controller' => 'Tests\\Fixtures\\AppBundle\\Controller\\CustomQueryController::tableAction'], null, null, null, false, false, null]],
        '/grouped' => [[['_route' => 'grouped', '_controller' => 'Tests\\Fixtures\\AppBundle\\Controller\\GroupedController::tableAction'], null, null, null, false, false, null]],
        '/grouped2' => [[['_route' => 'grouped2', '_controller' => 'Tests\\Fixtures\\AppBundle\\Controller\\GroupedController::table2Action'], null, null, null, false, false, null]],
        '/orm-adapter-events/pre-query' => [[['_route' => 'orm_adapter_events.pre_query', '_controller' => 'Tests\\Fixtures\\AppBundle\\Controller\\ORMAdapterEventsController::preQueryAction'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/employee/([^/]++)(*:25)'
            .')/?$}sD',
    ],
    [ // $dynamicRoutes
        25 => [
            [['_route' => 'employee.edit'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
