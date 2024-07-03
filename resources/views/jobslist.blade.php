@extends('layout')
@section('content')
    <div class="grid gap-6 lg:grid-cols-2 lg:gap-8">

    @foreach ($jobs as $job)
        <a href="{{ route('job.show', $job->id) }}" class="flex items-start gap-4 rounded-lg bg-white p-6 shadow-[0px_14px_34px_0px_rgba(0,0,0,0.08)] ring-1 ring-white/[0.05] transition duration-300 hover:text-black/70 hover:ring-black/20 focus:outline-none focus-visible:ring-[#FF2D20] lg:pb-10 dark:bg-zinc-900 dark:ring-zinc-800 dark:hover:text-white/70 dark:hover:ring-zinc-700 dark:focus-visible:ring-[#FF2D20]">
            <div class="flex size-12 shrink-0 items-center justify-center rounded-full bg-[#FF2D20]/10 sm:size-16">
                <!-- Icon can remain static or change based on job category -->
                <svg class="size-5 sm:size-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#FF2D20">
                    <path d="M19 6h-4V5c0-1.1-.9-2-2-2h-2c-1.1 0-2 .9-2 2v1H5c-1.1 0-2 .9-2 2v11c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V8c0-1.1-.9-2-2-2zm-6 0h-2V5h2v1zm4 13H7V9h10v10z"/>
                </svg>
            </div>
    
            <div class="pt-3 sm:pt-5">
                <h2 class="text-xl font-semibold text-black dark:text-white">{{ $job->title }}</h2>
    
                <p class="mt-4 text-base/relaxed">
                    {{ $job->description }}
                </p>
                
                <div class="mt-4 flex gap-4">
                    <p class="text-sm">
                        Deadline: {{ \Carbon\Carbon::parse($job->deadline)->format('d/m/Y') }}
                    </p>
                    <p class="text-sm">
                        {{ $job->category }}
                    </p>
                    <p class="text-sm">
                        {{ $job->status }}
                    </p>
                </div>
            </div>
    
            <svg class="size-6 shrink-0 self-center stroke-[#FF2D20]" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"><path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/></svg>
        </a>
    @endforeach

    </div>
@endsection