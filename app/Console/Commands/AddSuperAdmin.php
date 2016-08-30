<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Admin;

class AddSuperAdmin extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:superadmin';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Add SuperAdministartor';

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
        $admin = new Admin();
        $admin->name = 'admin';
        $admin->email = 'admin@admin.com';
        $admin->password = bcrypt('password');
        if ($admin->save()) {
            $this->info("Create SuperAdministartor Success");
        } else {
            $this->error("Create SuperAdministartor False");
        }
    }
}
