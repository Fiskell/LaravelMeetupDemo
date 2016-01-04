<?php namespace App\Examples\StrategyPattern\Candidates;

use App\Examples\StrategyPattern\CandidateInterface;

class BaseCandidate implements CandidateInterface
{
    public function getSpeech() {
        throw new \Exception('404 candidate speech not found');
    }
}