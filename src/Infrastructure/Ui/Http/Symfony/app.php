<?php

/*
 * This file is part of the Php DDD Standard project project.
 *
 * Copyright (c) 2017-present-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);
/*
 * This file is part of the Php DDD Standard project.
 *
 * Copyright (c) 2017-present LIN3S <info@lin3s.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use ECommerce\Infrastructure\Symfony\Framework\AppKernel;
use Symfony\Component\HttpFoundation\Request;

require_once __DIR__ . '/../../../../../vendor/autoload.php';

if (PHP_VERSION_ID < 70000) {
    include_once __DIR__ . '/../../../../../var/bootstrap.php.cache';
}

$kernel = new AppKernel('prod', false);
if (PHP_VERSION_ID < 70000) {
    $kernel->loadClassCache();
}

$request = Request::createFromGlobals();
$response = $kernel->handle($request);
$response->send();
$kernel->terminate($request, $response);