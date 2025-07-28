<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
public function index()
    {
        $title = "Verso | Dashboard";
        $url = "/dashboard";
        
        $description = "CRM para la gestión de Recursos Humanos";
    
        return view('admin.dashboard.index', compact('title', 'url', 'description'));
    }
}