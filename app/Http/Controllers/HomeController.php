<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {

        return view('home.index');

    }

    public function contact(): View
    {
        $viewData = [];
        $viewData['title'] = 'Contact - Online Store';
        $viewData['subtitle'] = 'Contact information';
        $viewData['name'] = 'Santiago Arellano';
        $viewData['address'] = 'Carrera 49 #7 Sur-50, Medellín, Antioquia';
        $viewData['phone'] = '+57 300 123 4567';

        return view('home.contact')->with('viewData', $viewData);
    }
}
