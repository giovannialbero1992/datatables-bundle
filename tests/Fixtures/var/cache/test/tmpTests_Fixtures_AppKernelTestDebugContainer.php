<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFStUBCO\tmpTests_Fixtures_AppKernelTestDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFStUBCO/tmpTests_Fixtures_AppKernelTestDebugContainer.php') {
    touch(__DIR__.'/ContainerFStUBCO.legacy');

    return;
}

if (!\class_exists(tmpTests_Fixtures_AppKernelTestDebugContainer::class, false)) {
    \class_alias(\ContainerFStUBCO\tmpTests_Fixtures_AppKernelTestDebugContainer::class, tmpTests_Fixtures_AppKernelTestDebugContainer::class, false);
}

return new \ContainerFStUBCO\tmpTests_Fixtures_AppKernelTestDebugContainer([
    'container.build_hash' => 'FStUBCO',
    'container.build_id' => 'df2dfa4f',
    'container.build_time' => 1599845736,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerFStUBCO');
