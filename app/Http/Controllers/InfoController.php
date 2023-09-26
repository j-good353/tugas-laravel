<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
  /**
   * Display a listing of the resource.
   */
  public function index()
  {
    $namaKampus = 'Universitas Brawijaya';
    $alamatKampus = 'Malang_Jawatimur';
    $contactPerson = '08129090934';

    $data['namaKampus'] = $namaKampus;
    $data['alamatKampus'] = $alamatKampus;
    $data['contactPerson'] = $contactPerson;

    return view('info', $data);
  }
}

