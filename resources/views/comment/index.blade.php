<x-layout :title="$pageTitle">
    <h2>Comments Exploring (testing)</h2>
    @foreach ($comments as $comment)
        <h1 class="text-2xl">{{ $comment->content }}</h1>
        <p>{{ $comment->author }}</p>
        <a href="/blog/{{ $comment->post->id }}">{{ $comment->post->title }}</a>
    @endforeach
</x-layout>