<x-app-layout>

    <div class="max-w-3xl mx-auto mt-10 p-6 bg-white rounded-xl shadow-md">
        <h1 class="text-3xl font-bold mb-4">{{ $post->title }}</h1>
        <p class="text-gray-800 text-lg mb-6">{{ $post->content }}</p>
        <p class="text-sm text-gray-500">Posted on {{ $post->created_at->format('F j, Y') }}</p>

        <a href="{{ route('posts.index') }}" class="inline-block mt-6 text-blue-600 hover:underline">← Back to all posts</a>

        <a href="{{route('posts.edit', $post)}}" class="text-blue-600 hover:underline pl-5">Edit Post</a>

        <form action="{{ route('posts.destroy', $post) }}" method="POST" class="inline-block pl-5" onsubmit="return confirm('Are you sure you want to delete this post?');">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-red-600 hover:underline">Delete Post</button>
        </form>

    </div>

</x-app-layout>