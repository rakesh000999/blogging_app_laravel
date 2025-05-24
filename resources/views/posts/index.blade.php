<x-app-layout>
    <div class="max-w-4xl mx-auto mt-10">
        <h1 class="text-3xl font-bold mb-6 text-center">All Posts</h1>

        @forelse ($posts as $post)
        <div class="bg-white p-6 rounded-xl shadow-md mb-4">
            <a href="{{route('posts.show', $post->id)}}">
                <h2 class="text-xl font-semibold mb-2">{{ $post->title }}</h2>
            </a>
            <p class="text-gray-700">{{ $post->content }}</p>
            <p class="text-sm text-gray-500 mt-2">Posted on {{ $post->created_at->format('F j, Y') }}</p>
        </div>
        @empty
        <p class="text-gray-600">No posts available yet.</p>
        @endforelse

    </div>

</x-app-layout>