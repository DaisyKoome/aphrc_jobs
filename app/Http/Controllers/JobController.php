<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\JobApplication;


class JobController extends Controller
{
    public function showJobs()
    {
        $jobs = Job::all();
        return view('jobslist', compact('jobs'));
    }

    public function show($id)
    {
        $job = Job::findOrFail($id);
        return view('singlejob', ['job' => $job]);
    }

    public function applyForm($id)
    {
        $job = Job::findOrFail($id);
        return view('apply', compact('job'));
    }

    public function submitApplication(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'cv' => 'required|file|mimes:pdf|max:2048',
            'cover_letter' => 'required|file|mimes:pdf|max:2048',
        ]);

        // Process the files
        $cvPath = $request->file('cv')->store('cvs', 'public');
        $coverLetterPath = $request->file('cover_letter')->store('cover_letters', 'public');

        // Save the application details
        $application = new JobApplication();
        $application->name = $validated['name'];
        $application->cv_path = $cvPath;
        $application->cover_letter_path = $coverLetterPath;
        $application->save();

        // Redirect back or to another page with a success message
        return redirect()->back()->with('success', 'Application submitted successfully.');
    }
}
