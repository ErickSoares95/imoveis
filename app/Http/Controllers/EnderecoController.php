<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnderecoController extends Controller
{
    //

    public function imovel()
    {
        return $this->belongsTo(Imovel::class);
    }
}
