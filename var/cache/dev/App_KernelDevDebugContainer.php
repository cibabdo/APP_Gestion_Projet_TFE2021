<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerB0GSx7g\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerB0GSx7g/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerB0GSx7g.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerB0GSx7g\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerB0GSx7g\App_KernelDevDebugContainer([
    'container.build_hash' => 'B0GSx7g',
    'container.build_id' => 'a021e5b9',
    'container.build_time' => 1624213457,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerB0GSx7g');
