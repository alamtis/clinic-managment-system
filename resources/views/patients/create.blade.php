<x-app-layout>
    <x-slot:title> Nouveau Patient</x-slot:title>
    <form method="POST" action="{{ route('patients.store') }}">
        @csrf
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Nom complet</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    name="name"
                    placeholder="Jane Doe">
            </label>
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Adresse</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    name="address"
                    placeholder="Address">
            </label>
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Téléphone</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    name="phone"
                    placeholder="Téléphone">
            </label>
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Email</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="email"
                    name="email"
                    placeholder="Email">
            </label>

            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Gender
                </span>
                <select
                    class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                    name="gender"
                >
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </label>
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Birthdate</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    name="birthdate"
                    type="date"
                    placeholder="Birthdate">
            </label>
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">SSIN</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    name="ssin"
                    placeholder="SSIN">
            </label>

            <button
                class="block w-full mt-4 px-3 py-2 text-sm font-medium text-white transition-colors duration-150 border border-transparent rounded-lg active:bg-purple-600 bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                type="submit">Ajouter
            </button>
        </div>
    </form>
</x-app-layout>
