<x-layout>
    <x-slot:heading>
        Jobs
    </x-slot:heading>
    <div class="my-12">
        <a href="/job/create" class="px-4 py-3 sm:px-6 lg:px-8 bg-violet-600 text-white rounded-md font-semibold">Create
            Job +</a>
    </div>
    <div class="flex gap-8 flex-wrap justify-center">
        @foreach ($listJobs as $job)
            <div class="p-8 bg-white rounded-xl shadow-lg mb-10 w-[25%] relative">
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
                        &#8250;
                    </span>
                </a>
                <div class="flex gap-x-4 mt-5">
                    <div>
                        <button class="px-4 py-2 bg-red-600 text-white rounded-md font-semibold text-sm" form="delete-form">
                            Delete
                        </button>
                    </div>
                    <div>
                        <a href="/job/{{ $job->id }}/edit"
                            class="px-4 py-2 bg-amber-600 text-white rounded-md font-semibold text-sm">
                            Edit
                        </a>
                    </div>
                </div>
                <form action="job/{{ $job->id }}" method="post" class="hidden" id="delete-form">
                    @csrf
                    @method('DELETE')
                </form>
            </div>
        @endforeach
    </div>
    <div>
        {{ $listJobs->links() }}
    </div>

</x-layout>
