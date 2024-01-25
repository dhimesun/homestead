<x-layout>
    <a href="{{route('index.posts')}}" class="re">戻る</a>
    <h1>
        <span>{{ $post->title }}</span>
        <a href="{{ route('edit.posts' ,$post->id) }}">編集</a>
        <form action="{{ route('destroy.posts', $post->id) }}" method="post">
            @method('DELETE')
            @csrf

            <button>削除</button>
        </form>
    </h1>
    <p>{{ $post->detail }}</p>
</x-layout>
