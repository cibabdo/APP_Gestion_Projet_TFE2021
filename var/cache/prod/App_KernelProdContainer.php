<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerZhtUYqA\App_KernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerZhtUYqA/App_KernelProdContainer.php') {
    touch(__DIR__.'/ContainerZhtUYqA.legacy');

    return;
}

if (!\class_exists(App_KernelProdContainer::class, false)) {
    \class_alias(\ContainerZhtUYqA\App_KernelProdContainer::class, App_KernelProdContainer::class, false);
}

return new \ContainerZhtUYqA\App_KernelProdContainer([
    'container.build_hash' => 'ZhtUYqA',
    'container.build_id' => 'b5314170',
    'container.build_time' => 1622710184,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerZhtUYqA');
