<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class mycommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:file {title}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'to build a new file ';

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
     * @return int
     */
    public function handle()
    {
        $disk = Storage::build([
            'driver' => 'local',
            'root' => 'App/myfolderofstorage',
        ]);
        // $data = "<?php \n" . $this->argument('name') ;
        // Storage::disk('app')->put('yourcmdfile.php',$data);
        $data = "<?php \n echo " . $this->argument('title')  ."\n echo 'end of file'" ;
        $disk->put('file.php',$data);

        
    }
}
