<x-layout>
    <x-slot:title>
        {{ $post->content }}
    </x-slot:title>
    <h1>{{ $post->content }}</h1>
    <h1>{{ $post->category->category_id }}</h1>

    <a method="POST" href="/posts/{{$post->id}}/edit">Rediģēt</a>
    <form method="POST" action="/posts/{{$post->id}}">
        @csrf
        @method("delete")
        <button>Dzest</button>
    </form>
    
</x-layout>