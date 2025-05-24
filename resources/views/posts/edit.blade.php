<x-app-layout>
    <div class="max-w-3xl mx-auto mt-10 p-6 bg-white rounded-xl shadow-md">
        <h1 class="text-3xl font-bold mb-4">Edit Post</h1>

        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-4">
                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                <input type="text" name="title" id="title" value="{{ old('title', $post->title) }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500" required>
            </div>

            <div class="mb-4">
                <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                <textarea name="content" id="content" rows="5" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-blue-500 focus:ring-blue-500" required>{{ old('content', $post->content) }}</textarea>
            </div>

            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700">Update Post</button>
        </form>

        <a href="{{ route('posts.show', $post->id) }}" class="inline-block mt-6 text-blue-600 hover:underline">← Back to post</a>
    </div>
</x-app-layout>