<?php namespace App\Providers;

use App\Examples\StrategyPattern\Candidates\BaseCandidate;
use App\Examples\StrategyPattern\Candidates\Clinton;
use App\Examples\StrategyPattern\Candidates\Sanders;
use App\Examples\StrategyPattern\Candidates\Trump;
use Illuminate\Support\ServiceProvider;

class CandidateServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        // TODO don't always want to bind like this, give more examples

        $this->app->bind('TheDonald', function() {
            return new Trump();
        });

        $this->app->bind('Hillary', function() {
            return new Clinton();
        });

        $this->app->bind('Bernie', function() {
            return new Sanders();
        });

        $this->app->bind('BaseCandidate', function() {
            return new BaseCandidate();
        });
    }
}
