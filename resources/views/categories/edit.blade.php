<x-layout>
    <x-slot:title>Rediģēt</x-slot:title>
    <h1>Rediģēt</h1>

    <form method="POST" action="/categories/{{ $category->id }}">
        @csrf
        @method('PUT')
        <label>Kategorijas vards:<input name="category_name" value="{{$category->category_name}}"/></label>
        @error("category_name")
            <p>{{ $message }}</p>
        @enderror
        
        <button>Saglabāt</button>
    </form>
</x-layout>