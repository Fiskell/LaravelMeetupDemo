<?php namespace App\Examples\StrategyPattern;

class Politics
{
    function speech($politician) {
        switch($politician) {
            case 'TheDonald':
                return 'Im going to build a big wall';
                break;
            case 'Hillary':
                return 'Email server l337 h@x0r5';
                break;
            case 'Bernie':
                return 'Rich people suck';
                break;
            default:
                return '404 candidate not found';
        }
    }
}