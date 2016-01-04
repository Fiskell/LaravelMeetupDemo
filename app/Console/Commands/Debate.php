<?php namespace App\Console\Commands;

use App\Examples\StrategyPattern\CandidateInterface;
use App\Examples\StrategyPattern\Politics;
use App\Examples\StrategyPattern\Politics2;
use App\Examples\StrategyPattern\Politics3;
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
        } catch (\ReflectionException $ex) {
            $this->error($ex->getMessage());
        }
    }

    /**
     * @return CandidateInterface
     * @throws \Exception
     */
    private function getDebate() {
        switch ($this->argument('version')) {
            case 1:
                return new Politics();
            case 2:
                return new Politics2();
            case 3:
                return new Politics3();
        }
        throw new \Exception('Invalid debate number');
    }
}
