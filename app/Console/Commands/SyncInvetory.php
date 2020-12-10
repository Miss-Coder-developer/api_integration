<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class SyncInvetory extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:SyncInvetory';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync invetory from SellerActive to RevCascade';

    /**
     * Create a new command instance.
     *
     * @return void
     */

    private $sellerApiUrl = "https://rest.selleractive.com:443";
    private $revcascadeUrl = "https://api-sandbox.revcascade.com";

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
        return 0;
    }
}
