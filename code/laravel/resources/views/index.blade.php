<x-layout>
    <h1>Hello Laravel!</h1>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('text.posts',$post->id) }}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>
</x-layout>
