<?php namespace App\Examples\MethodInjection;

class KyloRen
{
    public function talkToDad(Betrayal $betrayal) {
        $betrayal->doSomethingMean();
    }
}