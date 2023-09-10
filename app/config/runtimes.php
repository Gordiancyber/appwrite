<?php

/**
 * List of Appwrite Cloud Functions supported runtimes
 */

use Utopia\Http\Http;
use Appwrite\Runtimes\Runtimes;

$runtimes = new Runtimes('v3');

$allowList = empty(App::getEnv('_APP_FUNCTIONS_RUNTIMES')) ? [] : \explode(',', App::getEnv('_APP_FUNCTIONS_RUNTIMES'));

$runtimes = $runtimes->getAll(true, $allowList);

return $runtimes;
