<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display the dashboard
     */
    public function index()
    {
        $user = auth()->user();
        
        $data = [
            'user' => $user,
            'stats' => [
                'total_resources' => 0,
                'groups_joined' => 0,
                'progress' => 0,
            ],
        ];
        
        return view('dashboard.index', $data);
    }
}
