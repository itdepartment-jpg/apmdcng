<?php

namespace Database\Seeders;

use App\Models\ClientProjectDetail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class ClientProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'commencement_date' => Carbon::create(2025, 6, 1),
                'client' => 'OANDO Energy Resources',
                'location_project' => 'Brass Oil Field',
                'description_of_work' => 'Provision of Diving & Offshore Maintenance Services and Supply of Diving Support Vessel (DSV Liberty) for NAOC operation areas/Brass Oil Field',
                'main_contractor' => '-',
                'status' => 'active',
            ],
            [
                'commencement_date' => Carbon::create(2024, 3, 15),
                'client' => 'OANDO Energy Resources',
                'location_project' => 'Ogbaru-Toru field',
                'description_of_work' => 'Diving Support for Leak Intervention on Tebidaba/Brass 18" Pipeline Repairs',
                'main_contractor' => '-',
                'status' => 'active',
            ],
            [
                'commencement_date' => Carbon::create(2024, 1, 10),
                'client' => 'TOTAL ENERGIES LTD',
                'location_project' => 'Total Fields',
                'description_of_work' => 'Underwater Inspection of FSO Unity and Calm BUOY Anchor Chains by ROV',
                'main_contractor' => 'OCEAN EASE',
                'status' => 'active',
            ],
            [
                'commencement_date' => Carbon::create(2023, 8, 22),
                'client' => 'GLOBAL SPECTRUM',
                'location_project' => 'Anthan field',
                'description_of_work' => 'Hire and Operation of Security Patrol Boat (Conqueror Tre) for Security Activities',
                'main_contractor' => '-',
                'status' => 'inactive',
            ],
            [
                'commencement_date' => Carbon::create(2022, 5, 17),
                'client' => 'GLOBAL SPECTRUM',
                'location_project' => 'Agbara field',
                'description_of_work' => 'Hire and Operation of Security Patrol Boat (Conqueror Due) for Security Activities',
                'main_contractor' => '-',
                'status' => 'inactive',
            ],
            [
                'commencement_date' => Carbon::create(2021, 11, 3),
                'client' => 'AUGUSTA MARITIME SERVICES',
                'location_project' => 'Mellitah Terminal, Libya',
                'description_of_work' => 'Provision of Diving Maintenance/Services at Western Libya Mellitah Terminal (ENIGAS)',
                'main_contractor' => '-',
                'status' => 'inactive',
            ],
            [
                'commencement_date' => Carbon::create(2020, 7, 8),
                'client' => 'NAOC',
                'location_project' => 'Brass Terminal',
                'description_of_work' => 'Patrol Services (Conqueror Tre) at Brass Terminal',
                'main_contractor' => '-',
                'status' => 'inactive',
            ],
            [
                'commencement_date' => Carbon::create(2020, 9, 14),
                'client' => 'DAEWOO ENGINEERING & CONSTRUCTION NIG. LTD',
                'location_project' => 'NLNG Bonny Field',
                'description_of_work' => 'Demolition of MOF2 General Cargo Berth Project',
                'main_contractor' => '-',
                'status' => 'inactive',
            ],
            [
                'commencement_date' => Carbon::create(2020, 4, 30),
                'client' => 'GLOBAL SPECTRUM ENERGY SERVICES LTD / ADDAX',
                'location_project' => 'Okwori Field',
                'description_of_work' => 'Hire and Operation of Security Patrol Boat (Conqueror Tre) for Security Activities',
                'main_contractor' => '-',
                'status' => 'inactive',
            ],
            [
                'commencement_date' => Carbon::create(2019, 12, 5),
                'client' => 'SPDC',
                'location_project' => 'Forcados & Bonny Field',
                'description_of_work' => 'Call Off Emergency works at Forcados and Bonny Fields',
                'main_contractor' => 'HNL',
                'status' => 'inactive',
            ],
            [
                'commencement_date' => Carbon::create(2019, 10, 18),
                'client' => 'NAE',
                'location_project' => 'Okwori Field',
                'description_of_work' => 'Hire and Operation of Security Patrol Boat (Conqueror Tre) for Security Activities',
                'main_contractor' => '-',
                'status' => 'inactive',
            ],
            [
                'commencement_date' => Carbon::create(2019, 8, 7),
                'client' => 'SPDC',
                'location_project' => 'Ogbotobo Flow Station',
                'description_of_work' => 'Ogbotobo Concrete Barge Scour Rectification Project',
                'main_contractor' => '-',
                'status' => 'inactive',
            ],
            [
                'commencement_date' => Carbon::create(2019, 6, 25),
                'client' => 'PISCES OFFSHORE',
                'location_project' => 'Asasa Field',
                'description_of_work' => 'Provision of Inspection Class ROV Spread and Personnel for Asasa VA and Asasa VB Platform Jacket Face Survey at MPN Field',
                'main_contractor' => '-',
                'status' => 'inactive',
            ],
            [
                'commencement_date' => Carbon::create(2019, 5, 12),
                'client' => 'NAOC',
                'location_project' => 'Brass Oil Field',
                'description_of_work' => 'Complete Inspections and Reporting of Single Point Mooring System 1 & System 2 and BOP',
                'main_contractor' => '-',
                'status' => 'inactive',
            ],
            [
                'commencement_date' => Carbon::create(2019, 3, 9),
                'client' => 'NAOC',
                'location_project' => 'Brass Oil field',
                'description_of_work' => 'Subsea Marine Hoses Change out on SPM1 at Brass Oil field',
                'main_contractor' => '-',
                'status' => 'inactive',
            ],
            [
                'commencement_date' => Carbon::create(2019, 2, 28),
                'client' => 'Niger Dive Ltd',
                'location_project' => 'Agbara field',
                'description_of_work' => 'Underwater Inspection of Sealines and Structural Jacket at Agbara field',
                'main_contractor' => '-',
                'status' => 'inactive',
            ],
            [
                'commencement_date' => Carbon::create(2019, 1, 15),
                'client' => 'SPDC',
                'location_project' => 'SPDC EA Field',
                'description_of_work' => 'Accommodation and Security Coverage at SPDC EA field',
                'main_contractor' => '-',
                'status' => 'inactive',
            ],
        ];

        foreach ($projects as $project) {
            ClientProjectDetail::create($project);
        }
    }
}
