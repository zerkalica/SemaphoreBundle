Millwright semaphore bundle
===========================

Integrates zerkalica/semaphore library into Symfony2.

Configuration options (config.yaml):

``` yaml
millwright_semaphore:
    try_count: 5 # try count, if lock not acquired
    sleep_time: 1 #sleep time in seconds, if lock not acquired
    adapter: millwright_semaphore.adapter.apc # semaphore adapter name
    #predefined adapters:
    #    millwright_semaphore.adapter.doctrine
    #    millwright_semaphore.adapter.apc
    #    millwright_semaphore.adapter.sem
    #    millwright_semaphore.adapter.flock
    namespace: millwright_semaphore # lock keys namespace
```

Usage:

``` php

/** @var $semaphore \Millwright\Semaphore\Model\SemaphoreManagerInterface */
$semaphore = $container->get('millwright_semaphore.manager');

$handle = $semaphore->acquire('lock key or object', 60 /* lock expire time in seconds */);

// Do something thread-safe

$semaphore->release($handle);
```

