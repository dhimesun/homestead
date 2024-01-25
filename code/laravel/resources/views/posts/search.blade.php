<x-layout>
    <a href="{{route('index.posts')}}" class="re">戻る</a>
    <h1>
        <span>検索画面</span>
    </h1>
    <p>Title検索</p>
    <form action="{{ route('search.posts') }}" method="get">
        @csrf
        <label>
            <input type="text" name="title" value="{{ old('title') }}">
        </label>
        @error('title')
            <div class="error">{{ $message }}</div>
        @enderror
        <input type="submit" value="検索">
    </form>
    @if (request()->has('title') && $posts->count() > 0)
        <h1>検索結果</h1>
        <ul>
            @foreach ($posts as $post)
                <li><a href="{{ route('text.posts', $post->id) }}">{{ $post->title }}</a></li>
            @endforeach
        </ul>

    @endif
</x-layout>
