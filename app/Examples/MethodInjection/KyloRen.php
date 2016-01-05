<?php namespace App\Examples\MethodInjection;

class KyloRen
{
    public function talkToDad(Betrayal $betrayal, $speech) {

        $betrayal->doSomethingMean();

        echo $speech;
    }
}