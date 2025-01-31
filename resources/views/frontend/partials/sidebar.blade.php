<div class="bg-white rounded-lg shadow p-4 space-y-4">
    <!-- Categories -->
    <div>
        <h3 class="font-bold mb-2">Kategori</h3>
        <ul class="space-y-1">
            @foreach ($categories as $category)
                <li>
                    {{-- <a href="{{ route('categories.show', $category->slug) }}" --}}
                    <a href="#" class="text-gray-600 hover:text-red-600 flex justify-between">
                        <span>{{ $category->name }}</span>
                        <span>({{ $category->articles_count }})</span>
                    </a>
                </li>
            @endforeach
        </ul>
    </div>

    <!-- Popular Articles -->
    <div>
        <h3 class="font-bold mb-2">Populer</h3>
        <div class="space-y-2">
            @foreach ($popularArticles as $article)
                <a href="{{ route('articles.show', $article->slug) }}"
                    class="block text-gray-600 hover:text-red-600 truncate">
                    {{ $article->title }}
                </a>
            @endforeach
        </div>
    </div>
</div>
