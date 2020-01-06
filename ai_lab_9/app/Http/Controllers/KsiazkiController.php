<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KsiazkiController extends Controller
{
    public function najlepsze()
    {
		  return view("najlepsze");
    }

    public function najgorsze()
    {
		  return view("najgorsze");
    }

    public function polecane()
    {
		  return view("polecane");
    }

    public function recenzje()
    {
		  return view("recenzje");
    }

    public function opinie()
    {
		  return view("opinie");
    }

    public function ksiazka1()
    {
		  return view("ksiazka1");
    }

    public function ksiazka2()
    {
		  return view("ksiazka2");
    }

    public function ksiazka3()
    {
		  return view("ksiazka3");
    }

    public function ksiazka4()
    {
		  return view("ksiazka4");
    }

    public function ksiazka5()
    {
		  return view("ksiazka5");
    }
}
