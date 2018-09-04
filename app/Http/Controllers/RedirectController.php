<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Redirect;

class RedirectController extends Controller
{

  public function index() {
    return view('home');
  }

  public function redirect(string $hash) {
    $redirect = Redirect::where('hash', '=', $hash)->first();
    return redirect()->to($redirect->url);
  }

  public function store(Request $request) {

    $this->validate($request, [
      'url' => 'required|min:7',
    ]);

    $result = Redirect::where('url', '=', $request->url)->first();

    if($result == null) {
      $redirect = new Redirect;
      $redirect->url = $request->url;
      $redirect->hash = hash('adler32', $request->url);
      $redirect->save();
      $result = Redirect::where('hash', '=', $redirect->hash)->first();
    }

    return view('home', [
      'redirect' => $result
    ]);
  }
}
