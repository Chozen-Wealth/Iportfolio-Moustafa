<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GlobalController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TestimonialController;
use Illuminate\Support\Facades\Route;

#Frontend -----------
Route::get('/', [GlobalController::class, "home"])->name("home");

#Backend ------------
#---About
Route::get('/back/about/edit', [AboutController::class, "edit"])->name("edit_about");
Route::put('/back/about/update/', [AboutController::class, "update"])->name("update_about");

#---Skills
Route::get('/back/skills/index', [SkillController::class, "index"])->name("index_skills");
Route::get('/back/skills/create', [SkillController::class, "create"])->name("create_skills");
Route::post('/back/skills/store', [SkillController::class, "store"])->name("store_skills");
Route::get('/back/skills/edit', [SkillController::class, "edit"])->name("edit_skills");
Route::put('/back/skills/update/{id}', [SkillController::class, "update"])->name("update_skills");
Route::delete('/back/skills/destroy/{id}', [SkillController::class, "destroy"])->name("destroy_skills");

#---Portfolios
Route::get('/back/portfolios/index', [PortfolioController::class, "index"])->name("index_portfolios");
Route::get('/back/portfolios/create', [PortfolioController::class, "create"])->name("create_portfolios");
Route::post('/back/portfolios/store', [PortfolioController::class, "store"])->name("store_portfolios");
Route::get('/back/portfolios/edit/{id}', [PortfolioController::class, "edit"])->name("edit_portfolios");
Route::put('/back/portfolios/update/{id}', [PortfolioController::class, "update"])->name("update_portfolios");
Route::delete('/back/portfolios/destroy/{id}', [PortfolioController::class, "destroy"])->name("destroy_portfolios");

#---Services
Route::get('/back/services/index', [ServiceController::class, "index"])->name("index_services");
Route::get('/back/services/create', [ServiceController::class, "create"])->name("create_services");
Route::post('/back/services/store', [ServiceController::class, "store"])->name("store_services");
Route::get('/back/services/edit', [ServiceController::class, "edit"])->name("edit_services");
Route::put('/back/services/update/{id}', [ServiceController::class, "update"])->name("update_services");
Route::delete('/back/services/destroy/{id}', [ServiceController::class, "destroy"])->name("destroy_services");

#---Testimonials
Route::get('/back/testimonials/index', [TestimonialController::class, "index"])->name("index_testimonials");
Route::get('/back/testimonials/create', [TestimonialController::class, "create"])->name("create_testimonials");
Route::post('/back/testimonials/store', [TestimonialController::class, "store"])->name("store_testimonials");
Route::get('/back/testimonials/edit', [TestimonialController::class, "edit"])->name("edit_testimonials");
Route::put('/back/testimonials/update/{id}', [TestimonialController::class, "update"])->name("update_testimonials");
Route::delete('/back/testimonials/destroy/{id}', [TestimonialController::class, "destroy"])->name("destroy_testimonials");

#---Contacts
Route::get('/back/contacts/edit', [ContactController::class, "edit"])->name("edit_contacts");
Route::put('/back/contacts/update', [ContactController::class, "update"])->name("update_contacts");

#---Messages
Route::get('/back/messages/index', [MessageController::class, "index"])->name("index_messages");
Route::post('/back/messages/store', [MessageController::class, "store"])->name("store_messages");
Route::delete('/back/messages/destroy/{id}', [MessageController::class, "destroy"])->name("destroy_messages");
