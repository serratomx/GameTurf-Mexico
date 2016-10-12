<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class HomeController extends Controller
{
  private $params = [];

  public function index() {
    return view('site.home.index');
  }

  public function advantages() {
    return view('site.home.advantages');
  }

  public function services() {
    return view('site.home.services');
  }

  public function gallery() {
    return view('site.home.gallery');
  }

  public function downloads() {
    return view('site.home.downloads');
  }

  public function contact() {
    return view('site.home.contact');
  }
}
