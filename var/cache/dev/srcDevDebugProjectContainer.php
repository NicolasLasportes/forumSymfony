<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerUqebdic\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerUqebdic/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerUqebdic.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerUqebdic\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerUqebdic\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'Uqebdic',
    'container.build_id' => '7c8c6cfe',
    'container.build_time' => 1543414912,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerUqebdic');
