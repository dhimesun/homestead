<x-layout>
    <h1>
        <span>Hello Laravel!</span>
        <div class="hbtn">
            <a class="create" href="{{ route('create.posts')}}">新規追加</a>
            <a class="search" href="{{ route('search.posts')}}">検索</a>
        </div>
    </h1>
    <ul>
        @foreach ($posts as $post)
            <li>
                <a href="{{ route('text.posts',$post->id) }}">{{ $post->title }}</a>
            </li>
        @endforeach
    </ul>
</x-layout>
