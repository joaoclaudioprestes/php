<?php

namespace App\Http\Controllers;

use App\Models\User;

class WelcomeController
{
  public function __invoke()
  {

    session()->put('chave_sessao', 'joao');
    cache()->put('chave_cache', 'teste');


    return view('welcome');
  }
}
