<x-layout>
    <x-slot:title>Izveidot uzdevumu</x-slot:title>
    <h1>Izveidot uzdevumu</h1>

    <form method="POST" action="/" class="create">
        @csrf
        <input name="content"/>
        <input name="category_id"/>
        @error("content")
            <p>{{ $message }}</p>
        @enderror
        @error("category_id")
            <p>{{ $message }}</p>
        @enderror
        <button>Saglabāt</button>
    </form>
</x-layout>