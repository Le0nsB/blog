<x-layout>
    <ul>
        @foreach ($posts as $post)
            <li><a href="/posts/{{ $post->id }}">{{ $post->content }}</a></li>
        @endforeach 
    </ul>
</x-layout>