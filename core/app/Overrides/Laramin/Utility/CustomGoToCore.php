<?php
namespace App\Overrides\Laramin\Utility;

use Laramin\Utility\GoToCore;
use App\Models\GeneralSetting;
use Closure;

class CustomGoToCore extends GoToCore
{
    // Override the handle method
    public function handle($request, Closure $next)
    { 
		 return redirect()->route('home');
    }
}
