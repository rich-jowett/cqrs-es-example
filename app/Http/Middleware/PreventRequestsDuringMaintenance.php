<?php

declare(strict_types=1);

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\PreventRequestsDuringMaintenance as Middleware;

/**
 * Class PreventRequestsDuringMaintenance
 *
 * @author Rich Jowett <rich@jowett.me>
 * @package App\Http\Middleware
 */
class PreventRequestsDuringMaintenance extends Middleware
{
}
