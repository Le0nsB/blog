<x-layout>
    <x-slot:title>
        {{ $post->content }}
    </x-slot:title>
    <h1>{{ $post->content }}</h1>
    <p>{{ $post->category->category_name }}</p>

    <a href="/posts/{{$post->id}}/edit">Rediģēt</a>
    <form method="POST" action="/posts/{{$post->id}}">
        @csrf
        @method("delete")
        <button>Dzest</button>
    </form >
   
    <form method="POST" action="/comments"> 
        @csrf
        <p>Komentari</p>
        <input type="hidden" name="post_id" value="{{$post->id}}"></input>
        <label>Autors: <input name="author"></input></label>
        <label>Komentars: <input name="comment"></input></label>
        @error("author")
            <p>{{ $message }}</p>
        @enderror
        @error("comment")
            <p>{{ $message }}</p>
        @enderror
        <button>Saglabāt</button>
    </form>
    @foreach ( $post->comments as $comment )
        <form class="show_comment" method="POST" action="/comments/{{$comment->id}}">
             @csrf
                @method("delete")
                <p>{{ $comment->author }}</p>
                <p>{{ $comment->comment }}</p>
                
                <a href="/comments/{{$comment->id}}/edit">Rediģēt</a>
                <button>Dzest</button>
            </form>
        @endforeach 
</x-layout>