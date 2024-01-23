<x-layout>
    <a href="{{route('index.posts')}}" class="re">戻る</a>
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->detail }}</p>
</x-layout>
