<?php

if (!defined('LARAVEL_START') && !class_exists('Dotenv\Dotenv', false)) {
    require_once '../vendor/autoload.php';
    Dotenv\Dotenv::createImmutable('../')->load();
}

/**
 * ndGetEnv
 *
 * @param  string  $key
 * @param  mixed  $default
 * @return mixed
 */
function ndGetEnv(string $key, $default = null)
{
    return array_key_exists($key, $_ENV) ? $_ENV[$key] : $default;
}

/**
 * ndCurlExec
 *
 * @param  string  $path
 * @param  string|null  $baseUrl
 * @return string|bool
 */
function ndCurlExec(string $path, ?string $baseUrl = null)
{
    if ($baseUrl === null) {
        $baseUrl = ndGetEnv('APP_URL');
    }
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_POST, false);
    curl_setopt($ch, CURLOPT_URL, $baseUrl.$path);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    $username = ndGetEnv('ND_CURL_USERNAME', '');
    if (strlen($username)) {
        $password = ndGetEnv('ND_CURL_PASSWORD', '');
        curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
    }
    if (ndGetEnv('ND_CURL_SSL_VERIFY', 'true') === 'false') {
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    }
    return curl_exec($ch);
}

/**
 * ndCurlExecJson
 *
 * @param  string  $path
 * @param  string|null  $baseUrl
 * @return mixed
 */
function ndCurlExecJson(string $path, ?string $baseUrl = null)
{
    return json_decode(ndCurlExec($path, $baseUrl), true);
}

/**
 * ndAppUrl
 *
 * @param  string  $path
 * @param  string|null  $baseUrl
 * @return string
 */
function ndAppUrl(string $path, ?string $baseUrl = null): string
{
    if ($baseUrl === null) {
        $baseUrl = ndGetEnv('APP_URL');
    }
    return $baseUrl.$path;
}
