<x-app-layout>
    <x-slot:title>
        Secretaries
    </x-slot:title>
    <div class="flex justify-between my-4">
        <h4 class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300">
            Secretaries table
        </h4>
        <a href="{{ route('secretaries.create') }}"
           class="flex items-center justify-between  px-3 text-sm font-medium text-white transition-colors duration-150 border border-transparent rounded-lg active:bg-purple-600 bg-purple-700 focus:outline-none focus:shadow-outline-purple">
            New
            <span class="ml-2">+</span></a>
    </div>
    <div class="w-full overflow-hidden rounded-lg shadow-xs">
        <div class="w-full overflow-x-auto">
            <table class="w-full whitespace-no-wrap">
                <thead>
                <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800">
                    <th class="px-4 py-3">Name</th>
                    <th class="px-4 py-3">Gender</th>
                    <th class="px-4 py-3">Email</th>
                    <th class="px-4 py-3">Phone</th>
                    <th class="px-4 py-3">Actions</th>
                </tr>
                </thead>
                <tbody class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800">
                @foreach($secretaries as $secretary)
                    <x-secretary-details :secretary="$secretary"></x-secretary-details>
                @endforeach
                </tbody>
            </table>
        </div>
        <div
            class=" text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">

            {{ $secretaries->links() }}
        </div>
    </div>
</x-app-layout>
