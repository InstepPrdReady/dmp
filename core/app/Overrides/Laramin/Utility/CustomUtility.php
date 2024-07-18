<?php
namespace App\Overrides\Laramin\Utility;

use Laramin\Utility\Utility;
use Closure;

class CustomUtility extends Utility
{
    // Override handle function from class Utility
    public function handle($request, Closure $next)
    { 
		  return $next($request);
    }
}
?>