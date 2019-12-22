<?php


namespace App\Http\View\Composers;


use App\Channels;
use Illuminate\View\View;

class ChannelsComposer
{
    public function compose(View $view)
    {
        $view->with('channels', Channels::orderBy('name', 'desc')->get());
    }
}
