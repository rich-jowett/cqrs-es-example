<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Illuminate\Http\Middleware\TrustProxies as Middleware;
use Symfony\Component\HttpFoundation\Request as RequestAlias;

/**
 * Class TrustProxies
 *
 * @author Rich Jowett <rich@jowett.me>
 * @package App\Http\Middleware
 */
class TrustProxies extends Middleware
{
    /**
     * The trusted proxies for this application.
     *
     * @var array<int, string>|string|null
     */
    protected $proxies;

    /**
     * The headers that should be used to detect proxies.
     *
     * @var int
     */
    protected $headers =
        RequestAlias::HEADER_X_FORWARDED_FOR |
        RequestAlias::HEADER_X_FORWARDED_HOST |
        RequestAlias::HEADER_X_FORWARDED_PORT |
        RequestAlias::HEADER_X_FORWARDED_PROTO |
        RequestAlias::HEADER_X_FORWARDED_AWS_ELB;
}
