<x-app-layout>
    <x-slot:title> Edit Doctor </x-slot:title>
    <form method="POST" action="{{ route('doctors.update', $doctor) }}">
        @csrf
        @method('PUT')
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Full name</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    name="name"
                    value="{{ $doctor->user->name }}"
                    placeholder="Jane Doe">
            </label>
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Phone</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    name="phone"
                    value="{{ $doctor->user->phone }}"
                    placeholder="Phone">
            </label>
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Email</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="email"
                    name="email"
                    value="{{ $doctor->user->email }}"
                    placeholder="Email">
            </label>
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Password</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="password"
                    name="password"
                    placeholder="Password">
            </label>
            <button
                class="block w-full mt-4 px-3 py-2 text-sm font-medium text-white transition-colors duration-150 border border-transparent rounded-lg active:bg-purple-600 bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                type="submit">
                Edit
            </button>
        </div>
    </form>
</x-app-layout>
