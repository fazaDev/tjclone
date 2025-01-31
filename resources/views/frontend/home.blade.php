@extends('frontend.layouts.app')

@section('title', 'Berita Terkini Jambi')

@section('content')
    <!-- Featured Articles -->
    <div class="mb-8">
        <h2 class="text-2xl font-bold mb-4">Berita Utama</h2>
        <div class="grid grid-cols-2 gap-4">
            @foreach ($featured as $article)
                <article class="bg-white rounded-lg shadow overflow-hidden">
                    <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->thumbnail }}"
                        class="w-full h-48 object-cover">
                    <div class="p-4">
                        <span class="text-red-600 text-sm">{{ $article->category->name }}</span>
                        <h3 class="font-bold text-xl mb-2">
                            <a href="{{ route('articles.show', $article->slug) }}" class="hover:text-red-600">
                                {{ $article->title }}
                            </a>
                        </h3>
                        <p class="text-gray-600 text-sm">
                            {{ \Carbon\Carbon::parse($article->published_at)->diffForHumans() }}</p>
                    </div>
                </article>
            @endforeach
        </div>
    </div>

    <!-- Categories Section -->
    @foreach ($categories as $category)
        <div class="mb-8">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-2xl font-bold">{{ $category->name }}</h2>
                {{-- <a href="{{ route('categories.show', $category->slug) }}" class="text-red-600 hover:underline">Lihat Semua</a> --}}
                <a href="#" class="text-red-600 hover:underline">Lihat Semua</a>
            </div>
            <div class="grid grid-cols-3 gap-4">
                @foreach ($category->articles as $article)
                    <article class="bg-white rounded-lg shadow overflow-hidden">
                        <img src="{{ asset('storage/' . $article->thumbnail) }}" alt="{{ $article->thumbnail }}"
                            class="w-full h-32 object-cover">
                        <div class="p-3">
                            <h3 class="font-semibold mb-1">
                                {{-- <a href="{{ route('articles.show', $article->slug) }}" class="hover:text-red-600"> --}}
                                <a href="#" class="hover:text-red-600">
                                    {{ $article->title }}
                                </a>
                            </h3>
                            <p class="text-gray-600 text-sm">
                                {{ \Carbon\Carbon::parse($article->published_at)->diffForHumans() }}</p>
                        </div>
                    </article>
                @endforeach
            </div>
        </div>
    @endforeach
@endsection
