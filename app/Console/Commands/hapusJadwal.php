<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class hapusJadwal extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'hapus:jadwal';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'hapus jadwal berdasarkan tanggal';

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
        $dataDB   = DB::table('jadwal_online')->whereRaw('tanggal>="2020-04-22"')->get();
        foreach ($dataDB as $data) {
            echo $data->id."\n";
            DB::table('jadwal_online_detail')->where([
                'id_jadwal_online'=>$data->id
            ])->delete();
            DB::table('jadwal_online')->where([
                'id'=>$data->id
            ])->delete();
        }
    }
}
