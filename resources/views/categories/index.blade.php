<x-layout>
    <ul class="posts">
        @foreach ($categories as $category)
            <li><a class="post" href="/categories/{{ $category->id }}">{{ $category->category_name }}</a></li>
        @endforeach 
    </ul>
</x-layout>