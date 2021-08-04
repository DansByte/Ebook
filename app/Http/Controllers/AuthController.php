<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function me(){
        return ([
            '3103119050',
            'Daniel Viand',
            'Laki-laki',
            '+62 857-2981-3571',
            'XII RPL 2'
        ]);
    }
}