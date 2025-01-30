@extends('frontend.layouts.app')

@section('title', $article->title)

@section('content')
    <article class="bg-white rounded-lg shadow p-6">
        <!-- Article Header -->
        <div class="mb-4">
            <span class="text-red-600 text-sm">{{ $article->category->name }}</span>
            <h1 class="text-3xl font-bold mb-2">{{ $article->title }}</h1>
            <div class="flex items-center text-sm text-gray-600">
                <span class="mr-2">{{ $article->author->name }}</span>
                <span class="mr-2">•</span>
                <span>{{ $article->published_at->translatedFormat('l, d F Y') }}</span>
                <span class="mr-2">•</span>
                <span>{{ $article->views->count() }}x dilihat</span>
            </div>
        </div>

        <!-- Featured Image -->
        <img src="{{ $article->thumbnail_url }}" alt="{{ $article->title }}" class="w-full h-96 object-cover mb-6 rounded">

        <!-- Article Content -->
        <div class="prose max-w-none mb-8">
            {!! $article->content !!}
        </div>

        <!-- Tags -->
        <div class="flex flex-wrap gap-2 mb-6">
            @foreach($article->tags as $tag)
                <a href="#" class="bg-gray-100 px-3 py-1 rounded-full text-sm hover:bg-gray-200">{{ $tag->name }}</a>
            @endforeach
        </div>

        <!-- Comments Section -->
        <div class="mt-8">
            <h3 class="text-xl font-bold mb-4">Komentar ({{ $article->comments->count() }})</h3>
            <div class="space-y-4">
                @foreach($article->comments as $comment)
                    @include('comments._comment', ['comment' => $comment])
                @endforeach
            </div>

            @auth
                <div class="mt-6">
                    <form action="{{ route('comments.store', $article) }}" method="POST">
                        @csrf
                        <textarea name="content" rows="3"
                            class="w-full border rounded p-2"
                            placeholder="Tulis komentar..."></textarea>
                        <button type="submit"
                            class="bg-red-600 text-white px-4 py-2 rounded mt-2 hover:bg-red-700">
                            Kirim Komentar
                        </button>
                    </form>
                </div>
            @else
                <p class="mt-4 text-gray-600">Silakan <a href="/login" class="text-red-600">login</a> untuk memberikan komentar</p>
            @endauth
        </div>
    </article>
@endsection
