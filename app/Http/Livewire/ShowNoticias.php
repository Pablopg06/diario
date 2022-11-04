<?php

namespace App\Http\Livewire;

use App\Models\Noticia;
use Livewire\Component;

class ShowNoticias extends Component
{
    public $search;
    public function render()
    {
        $noticias = Noticia::orderBy('id','desc')->paginate();
        return view('livewire.show-noticias', compact('noticias'));
        //->layout('layouts.nombre);
    }
}
