<x-layout :title="$pageTitle">
    <h2>{{ $post->title }}</h2>
    <p>{{ $post->body }}</p>
    <p>{{ $post->author }}</p>
    <ul class="mt-6 space-y-4">
        @foreach ($post->comments as $comment)
            <li class="p-4 bg-gray-100 rounded-md shadow-sm">
                <p class="text-gray-800">{{ $comment->content }}</p>
                <span class="mt-1 text-sm text-gray-600">— {{ $comment->author }}</span>
            </li>
        @endforeach
    </ul>

    <div class="border border-gray-300 px-3 py-2 mt-2">
        <form action="/comments" method="POST" class="mt-8">
            @csrf

            <input type="hidden" name="post_id" value="{{ $post->id }}" />

            <div class="space-y-6">
                <div>
                    <label for="author" class="block text-sm font-medium text-gray-900">Your Name</label>
                    <div class="mt-2">
                        <input type="text" name="author" id="author" value="{{ old('author') }}"
                            class="{{ $errors->has('author') ? 'outline-red-500' : 'outline-gray-300' }} block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 shadow-sm outline outline-1 -outline-offset-1 placeholder-gray-400 focus:outline-indigo-600 sm:text-sm">
                    </div>
                    @error('author')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>

                <div>
                    <label for="content" class="block text-sm font-medium text-gray-900">Your Comment</label>
                    <div class="mt-2">
                        <textarea name="content" id="content" rows="4"
                            class="{{ $errors->has('content') ? 'outline-red-500' : 'outline-gray-300' }} block w-full rounded-md bg-white px-3 py-2 text-base text-gray-900 shadow-sm outline outline-1 -outline-offset-1 placeholder-gray-400 focus:outline-indigo-600 sm:text-sm">{{ old('content') }}</textarea>
                    </div>
                    @error('content')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="mt-6 flex items-center justify-end gap-x-4">
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-4 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">
                    Add Comment
                </button>
            </div>
        </form>
    </div>
</x-layout>