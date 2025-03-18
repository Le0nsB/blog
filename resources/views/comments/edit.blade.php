<x-layout>
    <x-slot:title>Rediģēt</x-slot:title>
    <h1>Rediģēt</h1>

    <form method="POST" action="/comments/{{ $comment->id }}">
        @csrf
        @method('PUT')
        <label>Saturs:<input name="author" value="{{$comment->author}}"/></label>
        <label>Saturs:<input name="comment" value="{{$comment->comment}}"/></label>
        @error("author")
            <p>{{ $message }}</p>
        @enderror
        @error("comment")
            <p>{{ $message }}</p>
        @enderror
        
        <button>Saglabāt</button>
    </form>
</x-layout>