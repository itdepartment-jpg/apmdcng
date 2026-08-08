<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Inertia\Inertia;

use App\Models\User;
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

                'leadership' => LeadershipTeam::count(),

                'shipments' => Shipment::count(),

                'partners' => Partner::count(),

                'carriers' => Carrier::count(),

                'users' => User::count(),

            ]

        ]);
    }
}