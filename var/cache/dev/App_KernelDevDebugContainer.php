<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerJCeNvEJ\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerJCeNvEJ/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerJCeNvEJ.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerJCeNvEJ\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerJCeNvEJ\App_KernelDevDebugContainer([
    'container.build_hash' => 'JCeNvEJ',
    'container.build_id' => 'ded0f489',
    'container.build_time' => 1634929372,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerJCeNvEJ');
