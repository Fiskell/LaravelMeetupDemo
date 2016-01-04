<?php namespace App\Examples\StrategyPattern;

class PoliticalDebate3 implements DebateInterface
{
    function speech($candidateName) {
        try {
            return app($candidateName)->getSpeech();
        } catch (\ReflectionException $ex) {
            return app('BaseCandidate')->getSpeech();
        }
    }
}