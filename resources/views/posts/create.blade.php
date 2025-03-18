<x-layout>
    <x-slot:title>Izveidot uzdevumu</x-slot:title>
    <h1>Izveidot uzdevumu</h1>

    <form method="POST" action="/" class="create">
        @csrf
        <input name="content"/>
        <select name="category_id">
        @foreach ($categories as $category)
            <option value="{{$category->id}}">{{ $category->category_name }}</option>
        @endforeach 
        
        </select>
        @error("content")
            <p>{{ $message }}</p>
        @enderror
        @error("category_id")
            <p>{{ $message }}</p>
        @enderror
        <button>Saglabāt</button>
    </form>
</x-layout>