<x-layout>
    <x-slot:title>Rediģēt</x-slot:title>
    <h1>Rediģēt</h1>

    <form method="POST" action="/posts/{{ $post->id }}">
        @csrf
        @method('PUT')
        <label>Saturs:<input name="content" value="{{$post->content}}"/></label>
        <label>Kategorijas ID:<input name="category_id" value="{{$post->category_id}}"/></label>
        @error("category_id")
            <p>{{ $message }}</p>
        @enderror
        @error("content")
            <p>{{ $message }}</p>
        @enderror
        
        <button>Saglabāt</button>
    </form>
</x-layout>