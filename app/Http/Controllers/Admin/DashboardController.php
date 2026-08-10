<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

use App\Models\User;
use App\Models\Post;
use App\Models\Partner;
use App\Models\Carrier;
use App\Models\Shipment;
use App\Models\LeadershipTeam;

class DashboardController extends Controller
{
    public function index()
    {
        return Inertia::render('Dashboard', [

            'stats' => [

                'posts' => Post::count(),

                'shipments' => Shipment::count(),

                'leadership' => LeadershipTeam::count(),

                'users' => User::count(),

                'partners' => Partner::count(),

                'carriers' => Carrier::count(),

            ],

        ]);
    }
}