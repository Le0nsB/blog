<x-layout>
    <x-slot:title>
        {{ $post->content }}
    </x-slot:title>
    <h1 class="post_title">{{ $post->content }}</h1>
    <p>Kategorija: {{ $post->category->category_name }}</p>
    <div class="edit_delete_post">
        <a href="/posts/{{$post->id}}/edit">Rediģēt</a>
        <form method="POST" action="/posts/{{$post->id}}">
            @csrf
            @method("delete")
            <button>Dzēst</button>
        </form >
    </div>
   
    <form method="POST" action="/comments" class="create_comment"> 
        @csrf
        
            <p>Izveidot komentāru</p>
            <input type="hidden" name="post_id" value="{{$post->id}}"></input>
            <label class="create_comment_label">Autors: <input name="author" class="create_comment_input"></input></label>
            <label class="create_comment_label">Komentārs: <input name="comment" class="create_comment_input"></input></label>
        
        @error("author")
            <p>{{ $message }}</p>
        @enderror
        @error("comment")
            <p>{{ $message }}</p>
        @enderror
        <button class="save_comment">Saglabāt</button>
    </form>
    <p>Komentāri</p>
    @foreach ( $post->comments as $comment )
        <form class="show_comment" method="POST" action="/comments/{{$comment->id}}">
             @csrf
                @method("delete")
                <div class="text_cont">
                    <p>{{ $comment->author }}</p>
                    <p>{{ $comment->comment }}</p>
                </div>
                <div class="button_cont">
                    <a href="/comments/{{$comment->id}}/edit" class="edit_comment">Rediģēt</a>
                    <button class="delete_comment">Dzēst</button>
                </div>
                
        </form>
        @endforeach 
</x-layout>