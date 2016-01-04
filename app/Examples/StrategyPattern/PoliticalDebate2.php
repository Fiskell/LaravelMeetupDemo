<?php namespace App\Examples\StrategyPattern;

use App\Examples\StrategyPattern\Candidates\BaseCandidate;
use App\Examples\StrategyPattern\Candidates\Clinton;
use App\Examples\StrategyPattern\Candidates\Sanders;
use App\Examples\StrategyPattern\Candidates\Trump;

class PoliticalDebate2 implements DebateInterface
{
    function speech($candidateName) {
        $candidates = [
            'TheDonald' => new Trump(),
            'Hillary'   => new Clinton(),
            'Bernie'    => new Sanders(),
        ];

        /** @var CandidateInterface $candidate */
        $candidate = array_get($candidates, $candidateName, new BaseCandidate());

        return $candidate->getSpeech();
    }
}