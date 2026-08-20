<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index(): Response
    {
        $urls = [
            route('home'),
            route('about'),
            route('contact.show'),
            route('faq'),
            route('team'),
            route('career'),
            route('services.index'),

            // Services
            route('ship-agency'),
            route('bunkering-and-fuel-services'),
            route('offshore-rig-operations'),
            route('warehousing-distribution-offshore-rig-operations'),
            route('crew-and-management'),
            route('logistics'),
            route('vessel-and-ports-services'),
            route('offshore'),
            route('warehousing-and-distribution'),
            route('sailing-schedules'),
            route('rail-freight-services'),

            // Additional Services
            route('general-cargo'),
            route('haulage-petroleum-products'),
            route('protocol-logistics-services'),
            route('international-freights'),
            route('agro-logistics-solutions'),
            route('off-docks'),
            route('apmdc-ships-to-shore'),
            route('ships-agency-handling'),

            // Other public pages
            route('tracking.index'),
            route('news'),
            route('projects'),
            route('equipments'),
            route('privacy-policy'),
            route('refund-policy'),
            route('terms-of-service'),
        ];

        $xml = view('seo-page.sitemap', compact('urls'))->render();

        return response($xml, 200)
            ->header('Content-Type', 'application/xml');
    }
}