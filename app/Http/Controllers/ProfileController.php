<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $name = 'Jagad';
    $nim = '2150205030507111021';
    $jurusan = 'Ekonomi Krislam';

    $data['name'] = $name;
    $data['nim'] = $nim;
    $data['jurusan'] = $jurusan;

    return view('profile', $data);
  }
}