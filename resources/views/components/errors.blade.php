@props(['errors'])

@if ($errors->any())
    <ul class="px-4 py-3 mb-8 bg-red-300 rounded-lg shadow-md dark:bg-red-400">
        @foreach ( $errors->all() as $message)
            <p class="text-sm text-red-800 dark:text-red-700">{{ $message }}</p>
        @endforeach
    </ul>
@endif
