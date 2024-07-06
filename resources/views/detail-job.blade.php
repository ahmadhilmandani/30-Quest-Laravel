<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    <div class="flex gap-8">
        {{-- @foreach ($job as $job) --}}
        <div class="p-8 bg-white rounded-xl shadow-lg mb-10">
            <small class="text-gray-500 block">
                {{ $job['id'] }}
            </small>
            <h1 class="from-pink-500 font-bold">
                {{ $job['title'] }}
            </h1>
            <small class="text-gray-500 block">
                ${{ $job['salary'] }}
            </small>
            <p>
              {{ $job['description'] }}
            </p>
            {{-- <a href="/job/{{ $job['id'] }}" class="text-sky-400 text-xs underline">detail job -></a> --}}
        </div>
        {{-- @endforeach --}}
    </div>
</x-layout>
