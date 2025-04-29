<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl">Edit Client</h2>
    </x-slot>

    <div class="p-4 max-w-xl">
        <form action="{{ route('clients.update', $client) }}" method="POST" class="space-y-4">
            @csrf @method('PUT')
            <div>
                <label class="block font-medium">Name</label>
                <input name="name" value="{{ old('name', $client->name) }}" class="w-full border p-2 rounded" required>
            </div>
            <div>
                <label class="block font-medium">Email</label>
                <input name="email" type="email" value="{{ old('email', $client->email) }}" class="w-full border p-2 rounded">
            </div>
            <div>
                <label class="block font-medium">Phone</label>
                <input name="phone" value="{{ old('phone', $client->phone) }}" class="w-full border p-2 rounded">
            </div>
            <div>
                <label class="block font-medium">Address</label>
                <textarea name="address" class="w-full border p-2 rounded">{{ old('address', $client->address) }}</textarea>
            </div>
            <button class="bg-green-600 text-white px-4 py-2 rounded">Update</button>
        </form>
    </div>
</x-app-layout>
