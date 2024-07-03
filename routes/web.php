<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController; // Import the JobController

Route::get('/', [JobController::class, 'showJobs']);

// Route for showing an individual job's details
Route::get('/jobs/{job}', [JobController::class, 'show'])->name('job.show');


Route::get('/jobs/{id}/apply', [JobController::class, 'applyForm'])->name('job.applyForm');

Route::post('/jobs/apply', [JobController::class, 'submitApplication'])->name('jobs.submitApplication');


