@extends('layout')

@section('content')
<div class="max-w-lg mx-auto px-4 py-8">
    <h2 class="text-2xl font-bold mb-6">Apply for Job</h2>
    <form method="POST" action="{{ route('jobs.submitApplication') }}" enctype="multipart/form-data" class="space-y-4">
        @csrf
        <div>
            <label for="name" class="block text-sm font-medium text-gray-700">Name:</label>
            <input type="text" id="name" name="name" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500 sm:text-sm">
        </div>
        <div>
            <label for="cv" class="block text-sm font-medium text-gray-700">CV (PDF):</label>
            <input type="file" id="cv" name="cv" accept=".pdf" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500 sm:text-sm">
        </div>
        <div>
            <label for="cover_letter" class="block text-sm font-medium text-gray-700">Cover Letter (PDF):</label>
            <input type="file" id="cover_letter" name="cover_letter" accept=".pdf" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-gray-500 focus:ring-gray-500 sm:text-sm">
        </div>
        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-gray-600 hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500">
            Submit Application
        </button>
    </form>
</div>
@endsection