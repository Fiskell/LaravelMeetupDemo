<?php namespace App\Examples\StrategyPattern;

class PoliticalDebate implements DebateInterface
{
    function speech($politician) {
        switch($politician) {
            case 'TheDonald':
                return 'Im going to build a big wall';
            case 'Hillary':
                return 'Email server l337 h@x0r5';
            case 'Bernie':
                return 'Rich people suck';
            default:
                return '404 candidate not found';
        }
    }
}