<?php

namespace App\Listeners;
use Illuminate\Support\Facades\Storage;
use App\Events\myevent;
use Illuminate\Contracts\Queue\ShouldQueue; 
class mylistener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\myevent  $event
     * @return void
     */
    public function handle(myevent $event)
    {
        $disk = Storage::build([
            'driver'=>'local',
            'root'=>'App/myfolderofstorage'
        ]);
        $content = " welcome sir in event class "  ;
        $disk -> put('eventfile.php',$content);
    }
}
