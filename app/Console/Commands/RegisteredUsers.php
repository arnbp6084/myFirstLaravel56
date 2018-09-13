<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

use DB;

class RegisteredUsers extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'registered:users';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send an email of registered users';

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
        /*$count = \DB::table('users')
                  ->count();*/

        /*DB::table('users')->insert([
            'name' => 'User1',
            'email' => 'user1@email.com',
            'password' => bcrypt('password'),
        ]);*/

        DB::table('users')->insert([
            'name' => str_random(10),
            'email' => str_random(10).'@gmail.com',
            'password' => bcrypt('secret'),
        ]);
        //Mail::to('arnabpolley84@gmail.com')->send(new SendMailable($totalUsers));
                  //return $this->view('emails.registeredcount')->compact('count',$count);
                  $this->line('Added..');
    }
}
