<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-2xl text-gray-800">Clients</h2>
            <a href="{{ route('clients.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg shadow">
                + New Client
            </a>
        </div>
    </x-slot>

    <div class="p-6 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        @forelse($clients as $client)
            <div class="bg-white rounded-xl shadow-md p-5 hover:shadow-lg transition">
                <div class="text-lg font-bold text-gray-800">{{ $client->name }}</div>
                <div class="text-sm text-gray-600 mt-1">{{ $client->email ?? 'No email' }}</div>
                <div class="text-sm text-gray-600">{{ $client->phone ?? 'No phone' }}</div>
                <div class="text-sm text-gray-500 mt-2">{{ Str::limit($client->address, 60) }}</div>

                <div class="mt-4 flex space-x-2">
                    <a href="{{ route('clients.edit', $client) }}" class="text-blue-600 hover:underline">Edit</a>
                    <form action="{{ route('clients.destroy', $client) }}" method="POST" onsubmit="return confirm('Delete this client?')" class="inline">
                        @csrf @method('DELETE')
                        <button class="text-red-600 hover:underline">Delete</button>
                    </form>
                </div>
            </div>
        @empty
            <p class="text-gray-500">No clients found.</p>
        @endforelse
    </div>
</x-app-layout>
