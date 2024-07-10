<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    <div class="flex gap-8 flex-wrap justify-center">
        @foreach ($listJobs as $job)
            <div class="p-8 bg-white rounded-xl shadow-lg mb-10 w-[25%]">
                <span>employer : {{ $job->employer['name'] }}</span>
                <h1 class="from-pink-500 font-bold line-clamp-1">
                    {{ $job['title'] }}
                </h1>
                <small class="text-gray-500 block">
                  ${{ $job['salary'] }}
                </small>
                <a href="/job/{{ $job['id'] }}" class="text-sky-500 text-xs font-bold">
                    detail job 
                    <span class="text-[20px]">
                        &#8250;</span>
                    </a>
            </div>
        @endforeach
    </div>
</x-layout>
