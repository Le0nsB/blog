<x-layout>
    <ul class="posts">
        @foreach ($posts as $post)
            <li><a href="/posts/{{ $post->id }}" class="post">{{ $post->content }}</a></li>
        @endforeach 
    </ul>
</x-layout>