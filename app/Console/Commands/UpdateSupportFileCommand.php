<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class UpdateSupportFileCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update_support_file';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $support_files = \App\Models\SupportFile::all();
        foreach ($support_files as $item) {
            $item->files()->create($item->toArray());
        }
        return Command::SUCCESS;
    }
}
