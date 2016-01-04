<?php namespace App\Examples\StrategyPattern\Candidates;

class Trump extends BaseCandidate
{
    public function getSpeech() {
        return 'Im going to build a big wall';
    }
}