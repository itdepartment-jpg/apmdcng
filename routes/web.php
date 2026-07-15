<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ClientProjectDetailController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LeadershipTeamController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectCategoryController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RolePermissionController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

// Route::get('/', function () {
//    return Inertia::render('Welcome', [
//        'canLogin' => Route::has('login'),
//        'canRegister' => Route::has('register'),
//        'laravelVersion' => Application::VERSION,
//        'phpVersion' => PHP_VERSION,
//    ]);
// });

Route::get('/', function () {
    return view('seo-page/index2');
})->name('home');
Route::get('/about', function () {
    return view('seo-page/about');
})->name('about');

Route::get('/privacy-policy', function () {
    return view('seo-page/privacy');
})->name('privacy-policy');

Route::get('/refund-policy', function () {
    return view('seo-page/refund-policy');
})->name('refund-policy');

Route::get('/faq', function () {
    return view('seo-page/faq');
})->name('faq');

// Route::get('/team', function () {
//     return view('seo-page/team');
// })->name('team');

Route::get('/terms-of-service', function () {
    return view('seo-page/tos');
})->name('terms-of-service');

Route::get('/ship-agency', function () {
    return view('seo-page/services/ship-agency');
})->name('ship-agency');

// New Services  warehouse-distribution-rig.blade.php
Route::get('/bunkering-and-fuel-services', function () {
    return view('seo-page/services/bunkering');
})->name('bunkering-and-fuel-services');

Route::get('/offshore-rig-operations', function () {
    return view('seo-page/services/offshore-rig-operations');
})->name('offshore-rig-operations');

Route::get('/warehousing-distribution-offshore-rig-operations', function () {
    return view('seo-page/services/warehousing-distribution-offshore-rig-operations');
})->name('warehousing-distribution-offshore-rig-operations');

Route::get('/crew-and-management', function () {
    return view('seo-page/services/crewpersonal');
})->name('crew-and-management');

// Services
Route::get('/logistics', function () {
    return view('seo-page/services/logistics');
})->name('logistics');

Route::get('/vessel-and-ports-services', function () {
    return view('seo-page/services/vesselport');
})->name('vessel-and-ports-services');

Route::get('/offshore', function () {
    return view('seo-page/services/offshore');
})->name('offshore');
Route::get('/warehousing-and-distribution', function () {
    return view('seo-page/services/warehousing-and-distribution');
})->name('warehousing-and-distribution');
Route::get('/sailing-schedules', function () {
    return view('seo-page/sailing-schedules');
})->name('sailing-schedules');
Route::get('rail-freight-services', function () {
    return view('seo-page/rail-freight-services');
})->name('rail-freight-services');
Route::get('career', function () {
    return view('seo-page/career');
})->name('career');

// Route::get('contact', function () {
//     return view('seo-page/contact');
// })->name('contact');

// Route to display the form
Route::get('/contact', [ContactController::class, 'show'])->name('contact.show');

// Route to handle form submission
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// New Services 2
Route::get('warehousing-distribution', function () {
    return view('seo-page/services-new/warehousing-distribution');
})->name('warehousing-distribution');

Route::get('general-cargo', function () {
    return view('seo-page/services-new/general-cargo');
})->name('general-cargo');

// Oil and gas Sub menu

Route::get('haulage-petroleum-products', function () {
    return view('seo-page/services-new/oil-and-gas/haulage-petroleum-products');
})->name('haulage-petroleum-products');

Route::get('protocol-logistics-services', function () {
    return view('seo-page/services-new/oil-and-gas/protocol-logistics-services');
})->name('protocol-logistics-services');

Route::get('international-freights', function () {
    return view('seo-page/services-new/oil-and-gas/international-freights');
})->name('international-freights');

// Oil and gas Sub menu ends here

Route::get('agro-logistics-solutions', function () {
    return view('seo-page/services-new/agro-logistics-solutions');
})->name('agro-logistics-solutions');

Route::get('off-docks', function () {
    return view('seo-page/services-new/off-docks');
})->name('off-docks');

Route::get('apmdc-ships-to-shore', function () {
    return view('seo-page/services-new/apmdc-ships-to-shore');
})->name('apmdc-ships-to-shore');

Route::get('ships-agency-handling', function () {
    return view('seo-page/services-new/ships-agency-handling');
})->name('ships-agency-handling');

// Route::get('/aboutx', function () {
//     return view('seo-page/about');
// });

// Route::get('/about', function () {
//     return view('seo-page/about2');
// })->name('about');

// Route::get('/contacts', function () {
//     return view('seo-page/contacts');
// })->name('contacts');

Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');

// Route::get('/projects', function () {
//    return view('seo-page/projects');
// })->name('projects');

// Route::get('/projects', [ProjectController::class, 'index'])->name('projects');

Route::get('/equipments', function () {
    return view('seo-page/equipments');
})->name('equipments');

// Route::get('/news', function () {
//    return view('seo-page/news');
// })->name('news');

Route::get('/news', [NewsController::class, 'indexBlade'])->name('news');
Route::get('/news/{article}', [NewsController::class, 'showBlade'])->name('news.show');

Route::get('/projects', [ClientProjectDetailController::class, 'indexBlade'])->name('projects');
// Route::get('/projects', function () {
//    return view('seo-page/projects');
// })->name('projects');

// Services Start here

Route::prefix('services')->group(function () {
    Route::get('/', function () {
        return view('seo-page/management');
    })->name('services.index');
});

Route::get('/payment', function () { // render
    return Inertia::render('Payment'); // file to render
})->name('payment'); // url name

Route::get('/digital', function () { // render
    return Inertia::render('Digital'); // file to render
})->name('digital'); // url name

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard'); // middleware to authenticate before routing

// Route::get('/invoice', function () {
//    return Inertia::render('Invoice');
// })->middleware(['auth', 'verified'])->name('invoice');

Route::get('/invoicex', function () {
    return Inertia::render('InvoiceView');
})->middleware(['auth', 'verified'])->name('invoicex');

// Route::get('/newpayment', function () {
//    return Inertia::render('User/NewPayment');
// })->middleware(['auth', 'verified'])->name('newpayment');

// CMS PAGES
// Route::get('/management', function () {
//    return view('seo-page/management');
// })->name('management');
Route::get('/team', [LeadershipTeamController::class, 'Bladeindex'])
    ->name('team');

Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    Route::get('/users', [UserController::class, 'index'])
        ->middleware('can:view users')
        ->name('admin.users.index');

    Route::get('/users/create', [UserController::class, 'create'])
        ->name('admin.users.create')
        ->middleware('can:create users');

    Route::post('/users', [UserController::class, 'store'])
        ->middleware('can:create users')
        ->name('admin.users.store');

    Route::put('/users/{user}', [UserController::class, 'update'])
        ->middleware('can:edit users')
        ->name('admin.users.update');

    Route::put('/users/{user}/toggle-status', [UserController::class, 'toggleStatus'])
        ->name('admin.users.toggle-status')
        ->middleware('can:edit users');

    Route::delete('/users/{user}', [UserController::class, 'destroy'])
        ->name('admin.users.destroy')
        ->middleware('can:delete users');
});

// Profile
Route::get('/profile', [UserController::class, 'indexProfile'])
    ->middleware(['auth', 'verified'])
    ->name('admin.profile.index');

Route::put('/profile', [UserController::class, 'update_profile'])
    ->middleware(['auth', 'verified'])
    ->name('admin.profile.update');
Route::patch('/profile', [ProfileController::class, 'update'])
    ->middleware('auth')
    ->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])
    ->middleware('auth')
    ->name('profile.destroy');

Route::middleware(['auth', 'verified', 'can:manage roles'])->group(function () {
    Route::get('/roles-permissions', [RolePermissionController::class, 'index'])->name('roles-permissions.index');
    Route::post('/roles-permissions', [RolePermissionController::class, 'store'])->name('roles-permissions.store');
});

// LEADERSHIP MANAGEMENT
Route::middleware(['auth', 'verified', 'can:edit_leadership'])->group(function () {
    // Display page
    Route::get('/edit/leadership', [LeadershipTeamController::class, 'index'])
        ->name('leadership.index');

    // CRUD operations
    Route::post('/leadership', [LeadershipTeamController::class, 'store'])
        ->name('leadership.store');
    //    Route::put('/leadership/{leadershipTeam}', [LeadershipTeamController::class, 'update'])
    //        ->name('leadership.update');
    Route::match(['PUT', 'POST'], 'leadership/{leadershipTeam}', [LeadershipTeamController::class, 'update'])
        ->name('leadership.update');
    Route::put('/leadership/{leadershipTeam}/order', [LeadershipTeamController::class, 'updateOrder'])
        ->name('leadership.update-order');
    Route::delete('/leadership/{leadershipTeam}', [LeadershipTeamController::class, 'destroy'])
        ->name('leadership.destroy');

    // Header update
    Route::put('/leadership-header', [LeadershipTeamController::class, 'updateHeader'])
        ->name('leadership.update-header');
});

// ===================
// NOTES MANAGEMENT
// ===================
Route::middleware(['auth', 'verified', 'can:manage notes'])->group(function () {
    Route::get('/notes', [NoteController::class, 'index'])->name('notes.index');
    Route::post('/notes', [NoteController::class, 'store'])->name('notes.store');
    Route::put('/notes/{note}', [NoteController::class, 'update'])->name('notes.update');
    Route::delete('/notes/{note}', [NoteController::class, 'destroy'])->name('notes.destroy');
});

// ===================
// NEWS MANAGEMENT
// ===================
Route::middleware(['auth', 'verified', 'can:manage_news'])->group(function () {
    Route::get('/edit/news', [NewsController::class, 'index'])->name('news.index');
    Route::get('/edit/news/create', [NewsController::class, 'create'])->name('news.create');
    Route::post('/news', [NewsController::class, 'store'])->name('news.store');
    Route::get('/edit/news/{newsArticle}/edit', [NewsController::class, 'edit'])->name('news.edit');
    Route::put('/news/{newsArticle}', [NewsController::class, 'update'])->name('news.update');
    Route::delete('/news/{newsArticle}', [NewsController::class, 'destroy'])->name('news.destroy');
});

// Projects
Route::middleware(['auth', 'verified', 'can:manage projects'])->group(function () {
    Route::get('/admin/projects', [ProjectController::class, 'index'])->name('projects.index');
    Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
    Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
    Route::get('/projects/{project:slug}', [ProjectController::class, 'show'])->name('projects.show');
    Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
    Route::put('/projects/{project}', [ProjectController::class, 'update'])->name('projects.update');
    Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');
});

// Categories
Route::middleware(['auth', 'verified', 'can:manage project categories'])->group(function () {
    Route::get('/categories', [ProjectCategoryController::class, 'index'])->name('categories.index');
    Route::post('/categories', [ProjectCategoryController::class, 'store'])->name('project-categories.store');
    Route::put('/categories/{category}', [ProjectCategoryController::class, 'update'])->name('project-categories.update');
    Route::delete('/categories/{category}', [ProjectCategoryController::class, 'destroy'])->name('project-categories.destroy');
});

// Resource routes for CRUD operations
Route::middleware(['auth', 'verified', 'can:manage client projects'])->group(function () {
    Route::resource('client-project-details', ClientProjectDetailController::class)
        ->except(['show'])
        ->names([
            'index' => 'client-project-details.index',
            'create' => 'client-project-details.create',
            'store' => 'client-project-details.store',
            'edit' => 'client-project-details.edit',
            'update' => 'client-project-details.update',
            'destroy' => 'client-project-details.destroy',
        ]);

    // Additional route for status toggle
    Route::put(
        'client-project-details/{clientProjectDetail}/toggle-status',
        [ClientProjectDetailController::class, 'toggleStatus']
    )
        ->name('client-project-details.toggle-status');
});

require __DIR__.'/auth.php';
