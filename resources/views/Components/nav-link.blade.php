@props(['active' => false, 'isAnchor' => true])
@if ($isAnchor)
    <a {{ $attributes }}
        class="{{ $active ? 'bg-gray-900 font-medium text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white' }} rounded-md px-3 py-2 text-sm"
        aria-current="page">{{ $slot }}</a>
@else
    <button {{ $attributes }}
        class="{{ $active ? 'bg-gray-900 font-medium text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white bg-red-500' }} rounded-md px-3 py-2 text-sm"
        aria-current="page">{{ $slot }}</button>
@endif
