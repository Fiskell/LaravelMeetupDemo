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
        // TODO check out contextual binding
        
        $this->app->bind('BaseCandidate', function() {
            return new BaseCandidate();
        });

        $this->app->singleton('TheDonald', function() {
            return new Trump();
        });

        $this->app->bind('Hillary', function() {
            return new Clinton();
        });

        $this->app->bind('Bernie', 'App\Examples\StrategyPattern\Candidates\Sanders');
    }
}
