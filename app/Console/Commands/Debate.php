<?php namespace App\Console\Commands;

use App\Examples\StrategyPattern\DebateInterface;
use App\Examples\StrategyPattern\PoliticalDebate;
use App\Examples\StrategyPattern\PoliticalDebate2;
use App\Examples\StrategyPattern\PoliticalDebate3;
use Illuminate\Console\Command;

class Debate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:politics {version}{candidate}';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle() {
        $candidate = $this->argument('candidate');
        try {
            $this->info($this->getDebate()->speech($candidate));
        } catch (\Exception $ex) {
            $this->error($ex->getMessage());
        }
    }

    /**
     * @return DebateInterface
     * @throws \Exception
     */
    private function getDebate() {
        switch ($this->argument('version')) {
            case 1:
                return new PoliticalDebate();
            case 2:
                return new PoliticalDebate2();
            case 3:
                return new PoliticalDebate3();
        }
        throw new \Exception('Invalid debate number');
    }
}
