<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;

class UserList extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:list';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Show list of all application users';

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
     * TODO: Fix append in model.
     *
     * @return mixed
     */
    public function handle()
    {
        $users = User::all(['id', 'name', 'username', 'email', 'email_verified_at', 'updated_at'])->toArray();
        if (count($users)) {
            $headers = ['ID', 'Name', 'Username', 'E-mail', 'Verified at', 'Updated at'];
            $this->info(PHP_EOL.'There are '.count($users).' users:');
            $this->table($headers, $users);
        } else {
            $this->error(PHP_EOL.'There are nobody here!');
        }
    }
}
