<?php namespace App\Examples\StrategyPattern\Candidates;

class Sanders extends BaseCandidate
{
    public function getSpeech() {
        return 'Rich people suck';
    }
}