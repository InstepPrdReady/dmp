<?php
// app/Providers/CustomServiceProvider.php
namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Laramin\Utility\Utility;
use App\Overrides\Laramin\Utility\CustomUtility;

use Laramin\Utility\GoToCore;
use App\Overrides\Laramin\Utility\CustomGoToCore;

class CustomServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        // Bind the original class to the custom class
        $this->app->bind(Utility::class, CustomUtility::class);
		$this->app->bind(GoToCore::class, CustomGoToCore::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
