<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class dtcl extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dtcl:install';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

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
        $this->info(">> php artisan key:generate");
        if (!env('APP_KEY')) {
            $this->call('key:generate');
        } else {
            $this->comment('Application key exists already');
        }
        $this->info(">> php artisan storage:link");
        $storagePath = base_path('public' . DIRECTORY_SEPARATOR . 'storage');
        if (is_dir($storagePath)) {
            if (strtoupper(substr(PHP_OS, 0, 3)) === 'WIN') {
                rmdir($storagePath);
            } else {
                unlink($storagePath);
            }
            $this->comment("removed 'public/storage'");
        }
        $this->call('storage:link');
        $this->info(">> php artisan migrate:fresh --seed");
        $this->call('migrate:fresh', ['--seed' => true]);
    }
}
