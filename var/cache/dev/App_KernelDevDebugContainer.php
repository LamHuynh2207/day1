<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerOpy4NC4\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerOpy4NC4/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerOpy4NC4.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerOpy4NC4\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerOpy4NC4\App_KernelDevDebugContainer([
    'container.build_hash' => 'Opy4NC4',
    'container.build_id' => 'cb342bc3',
    'container.build_time' => 1663988148,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerOpy4NC4');
