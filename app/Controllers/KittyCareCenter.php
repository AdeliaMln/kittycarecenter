<?php

namespace App\Controllers;

class KittyCareCenter extends BaseController
{
    public function index()
    {
        return view('home');
    }

    public function meowsup()
    {
        return view('meows-up');
    }

    public function intermeow()
    {
        return view('interme-ow');
    }

    public function donasi()
    {
        return view('donasi');
    }

    public function petcare()
    {
        return view('petcare');
    }

    public function hubungikami()
    {
        return view('hubungikami');
    }

    public function daftar()
    {
        return view('daftar');
    }

    public function masuk()
    {
        return view('masuk');
    }

    public function pembayaran()
    {
        return view('Pembayaran');
    }

    public function artikel1()
    {
        return view('artikel1');
    }

    public function artikel2()
    {
        return view('artikel2');
    }

    public function artikel3()
    {
        return view('artikel3');
    }

    public function artikel4()
    {
        return view('artikel4');
    }

    //--------------------------------------------------------------------

}
