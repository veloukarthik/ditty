<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerF0WSuhz\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerF0WSuhz/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerF0WSuhz.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerF0WSuhz\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerF0WSuhz\App_KernelDevDebugContainer([
    'container.build_hash' => 'F0WSuhz',
    'container.build_id' => 'f84152b7',
    'container.build_time' => 1698486237,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerF0WSuhz');
