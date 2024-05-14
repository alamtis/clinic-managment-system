<x-app-layout>
    <x-slot:title> Edit Consultation</x-slot:title>
    <form method="POST" action="{{ route('consultations.update', $consultation) }}">
        @csrf
        @method('PUT')
        <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Objet</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    name="object"
                    value="{{ $consultation->object }}"
                    placeholder="Objet">
            </label>

            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Patient
                </span>
                <select
                    class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="patient_id" disabled>
                        <option value="{{ $consultation->patient->id }}" >{{ $consultation->patient->name }}</option>
                </select>
            </label>

            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Docteur
                </span>
                <select
                    class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="doctor_id" disabled>
                        <option value="{{ $consultation->doctor->id }}">{{ $consultation->doctor->user->name }} ({{ $consultation->doctor->specialization }})</option>
                </select>
            </label>

            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">Objet</span>
                <input
                    class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input"
                    type="datetime-local"
                    name="date"
                    value="{{ \Carbon\Carbon::parse($consultation->date)->format('Y-m-d H:i') }}"
                    placeholder="Date">
            </label>

            <button class="block w-full mt-4 px-3 py-2 text-sm font-medium text-white transition-colors duration-150 border border-transparent rounded-lg active:bg-purple-600 bg-purple-700 focus:outline-none focus:shadow-outline-purple" type="submit"> Edit </button>
        </div>
    </form>
</x-app-layout>
