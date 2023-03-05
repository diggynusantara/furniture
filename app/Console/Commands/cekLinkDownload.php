<?php

namespace App\Console\Commands;

use App\Helpers\Fungsi_custom;
use Illuminate\Console\Command;
use DB;

class cekLinkDownload extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'cek:link';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'cek link download record';

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
        try{
            $cek    = DB::table('jadwal_onlibe')->whereRaw('room_id IS NOT NULL AND link_download IS NULL');
            if($cek->count()>0){
                $data   = $cek->get();
                foreach($data as $list){
                    $dataRoom   = Fungsi_custom::get_room_detail($list->access_key);
                    if(isset($dataRoom->recording->id)){
                        $dataLink   = Fungsi_custom::ambil_recordData($list->room_id);
                        if(isset($dataLink->links)){
                            if(strlen($dataLink->links->download)>0){
                                DB::table('jadwal_online')->where([
                                    'id'=>$list->id
                                ])->update([
                                    "link_download"=>$dataLink->links->download
                                ]);
                            }
                        }
                    }
                }
            }
        }catch (\Throwable $th) {
            //throw $th;
        }
    }
}
