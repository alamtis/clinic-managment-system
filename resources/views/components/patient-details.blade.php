@props(['patient'])
<tr class="text-gray-700 dark:text-gray-400">
    <td class="px-4 py-3">
        <div class="flex items-center text-sm">
            <div>
                <p class="font-semibold">
                    {{ $patient->name }}
                </p>
                <p class="text-xs text-gray-600 dark:text-gray-400">
                    {{ $patient->address }}
                </p>
                <p class="text-xs text-gray-600 dark:text-gray-400">
                    <span class="font-bold text-blue-400">SSN: </span>
                    {{ $patient->ssin }}
                </p>
            </div>
        </div>
    </td>
    <td class="px-4 py-3 text-sm uppercase">
        {{ $patient->gender }}
    </td>
    <td class="px-4 py-3 text-sm">
        {{ \Carbon\Carbon::parse($patient->age)->age }}
    </td>
    <td class="px-4 py-3 text-sm ">
        {{ $patient->email }}
    </td>
    <td class="px-4 py-3">
        <div class="flex items-center space-x-4 text-sm">
            <a
                    href="{{ route('patients.edit', $patient) }}"
                    class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                    aria-label="Edit">
                <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                    <path
                            d="M13.586 3.586a2 2 0 112.828 2.828l-.793.793-2.828-2.828.793-.793zM11.379 5.793L3 14.172V17h2.828l8.38-8.379-2.83-2.828z"></path>
                </svg>
            </a>
            <form method="POST" action="{{ route('patients.destroy', $patient) }}">
                @csrf
                @method('DELETE')
                <button
                    class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray"
                    aria-label="Delete">
                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                              d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                              clip-rule="evenodd"></path>
                    </svg>
                </button>
            </form>

        </div>
    </td>
</tr>
