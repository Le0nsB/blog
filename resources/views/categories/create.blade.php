<x-layout>
    <x-slot:title>Izveidot uzdevumu</x-slot:title>
    <h1>Izveidot uzdevumu</h1>

    <form method="POST" action="/categories" class="create">
        @csrf
        <input name="category_name"/>
        @error("category_name")
            <p>{{ $message }}</p>
        @enderror
        <button>Saglabāt</button>
    </form>
</x-layout>