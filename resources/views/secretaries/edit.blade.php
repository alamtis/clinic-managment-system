<x-app-layout>
    <x-slot:title> Edit Secretary </x-slot:title>
    <form method="POST" action="{{ route('secretaries.update', $secretary) }}">
        @csrf
        @method('PUT')
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Full name</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    name="name"
                    value="{{ $secretary->user->name }}"
                    placeholder="Jane Doe">
            </label>
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Address</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    name="address"
                    value="{{ $secretary->user->address }}"
                    placeholder="Address">
            </label>
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Phone</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    name="phone"
                    value="{{ $secretary->user->phone }}"
                    placeholder="Phone">
            </label>
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Gender
                </span>
                <select
                    class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                    name="gender"
                >
                    @if($secretary->user->gender == 'male')
                        <option value="male" selected>Male</option>
                        <option value="female">Female</option>
                    @else
                        <option value="male" >Male</option>
                        <option value="female" selected>Female</option>
                    @endif
                </select>
            </label>
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Email</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="email"
                    name="email"
                    value="{{ $secretary->user->email }}"
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
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Doctor
                </span>
                <select
                    class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray"
                    name="gender"
                >
                    @foreach($doctors as $doctor)
                        <option value="{{ $doctor->id }}"> {{ $doctor->user->name }}</option>
                    @endforeach
                </select>
            </label>
            <button
                class="block w-full mt-4 px-3 py-2 text-sm font-medium text-white transition-colors duration-150 border border-transparent rounded-lg active:bg-purple-600 bg-purple-700 focus:outline-none focus:shadow-outline-purple"
                type="submit">
                Add
            </button>
        </div>
    </form>
</x-app-layout>
