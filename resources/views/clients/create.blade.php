<div class="space-y-6 bg-white p-6 rounded-xl shadow max-w-xl">
    <div>
        <label class="block font-medium text-gray-700">Name</label>
        <input name="name" value="{{ old('name', $client->name ?? '') }}"
            class="w-full mt-1 border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-200" required>
    </div>
    <div>
        <label class="block font-medium text-gray-700">Email</label>
        <input name="email" type="email" value="{{ old('email', $client->email ?? '') }}"
            class="w-full mt-1 border-gray-300 rounded-lg shadow-sm">
    </div>
    <div>
        <label class="block font-medium text-gray-700">Phone</label>
        <input name="phone" value="{{ old('phone', $client->phone ?? '') }}"
            class="w-full mt-1 border-gray-300 rounded-lg shadow-sm">
    </div>
    <div>
        <label class="block font-medium text-gray-700">Address</label>
        <textarea name="address"
            class="w-full mt-1 border-gray-300 rounded-lg shadow-sm">{{ old('address', $client->address ?? '') }}</textarea>
    </div>

    <button class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-2 rounded-lg shadow">
        {{ isset($client) ? 'Update Client' : 'Save Client' }}
    </button>
</div>
