<?php namespace App\Console\Commands;

use App\Examples\MethodInjection\KyloRen;
use Illuminate\Console\Command;
use Illuminate\Container\Container;

class Reunion extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'demo:daddy-issues';

    /**
     * Execute the console command.
     *
     * @param Container $container
     * @param KyloRen $kyloRen
     * @return mixed
     */
    public function handle(Container $container, KyloRen $kyloRen)
    {
        $container->call([$kyloRen, 'talkToDad'],['speech' => 'Im in a gang, Im cool now!']);
    }
}
