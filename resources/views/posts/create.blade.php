<x-app-layout>
    <div class="max-w-3xl mx-auto mt-10 p-6 bg-white rounded-xl shadow-md">
        <h2 class="text-2xl font-bold mb-6">Create a New Post</h2>

        @if(session('success'))
        <div class="bg-green-100 text-green-700 px-4 py-2 mb-4 rounded">
            {{ session('success') }}
        </div>
        @endif

        @if ($errors->any())
        <div class="bg-red-100 text-red-700 px-4 py-2 mb-4 rounded">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        <form action="{{ route('posts.store') }}" method="POST" class="space-y-4">
            @csrf

            <div>
                <label for="title" class="block font-semibold mb-1">Title</label>
                <input type="text" name="title" id="title"
                    value="{{ old('title') }}"
                    class="w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-200" required>
            </div>

            <div>
                <label for="content" class="block font-semibold mb-1">Content</label>
                <textarea name="content" id="content" rows="6"
                    class="w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-200" required>{{ old('content') }}</textarea>
            </div>

            <button type="submit"
                class="bg-blue-600 px-4 py-2 rounded-lg hover:bg-blue-700 transition text-white">Create Post</button>
        </form>
    </div>
</x-app-layout>