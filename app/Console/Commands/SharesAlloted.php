<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SharesAlloted extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    //protected $signature = 'alloted:shares {user}';
    //protected $signature = 'alloted:shares {user?}';
    //protected $signature = 'alloted:shares {user} {age} {--difficulty=} {--istest=}';
    protected $signature = 'alloted:shares {user} {--v} {--d}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Allocation of the shares of an IPO';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        // Retrieve a specific option...
        $queueNamev = $this->option('v');
        $queueNamed = $this->option('d');

        // Retrieve all options...
        //$options = $this->options();

        $user = $this->argument('user');
        $msg='Welcome '.$this->argument('user');
        if($queueNamev){
            $msg.='. The version is 2.1.0. ';
        }
        if($queueNamed){
            $msg.=' Today is '.date('d M Y',time()).'.';
        }
        $this->line($msg);
    }
}
