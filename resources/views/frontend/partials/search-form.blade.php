<form action="/search" method="GET" class="flex">
    <input type="text" name="search" placeholder="Cari berita..."
           class="border rounded-l px-2 py-1 w-64"
           value="{{ request('search') }}">
    <button type="submit"
            class="bg-red-600 text-white px-4 rounded-r hover:bg-red-700">
        Cari
    </button>
</form>
