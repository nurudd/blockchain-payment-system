<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;

class MakeServiceCommand extends Command
{
    protected $signature = 'make:service {name}';
    protected $description = 'Create a new service class';

    public function handle()
    {
        $name = $this->argument('name');
        $path = app_path("Services/{$name}.php");

        if (file_exists($path)) {
            $this->error('Service already exists!');
            return;
        }

        // Ensure Services directory exists
        (new Filesystem)->ensureDirectoryExists(app_path('Services'));

        // Service class template
        $stub = <<<EOT
        <?php

        namespace App\Services;

        class {$name}
        {
            public function __construct()
            {
                // Constructor
            }

            public function exampleMethod()
            {
                return "This is an example method in {$name}";
            }
        }
        EOT;

        file_put_contents($path, $stub);
        $this->info("Service created successfully: App\Services\\{$name}");
    }
}
