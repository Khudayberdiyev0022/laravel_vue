@extends('layouts.app')
@section('content')

    <div id="app">
        <div class="row mt-5">
            <div class="col-12 p-3">
                <img src="{{ $article->img }}" alt="" class="border rounded mx-auto d-block">
                <h5 class="mt-5">{{ $article->title }}</h5>
                <p>
                    @foreach($article->tags as $tag)
                        @if($loop->last)
                            <span class="tag">{{ $tag->label }}</span>
                        @else
                            <span class="tag">{{ $tag->label }}</span>
                        @endif
                    @endforeach
                </p>
                <p class="card-text">{{ $article->body }}</p>
                <p>Опубликованно: <i>{{ $article->createdAtForHumans() }}</i></p>
            </div>
        </div>
        <hr>
        <div class="row">
            <form action="">
                <div class="mb-3">
                    <label for="" class="form-label">Тема комментария</label>
                    <input type="text" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Комментарий</label>
                    <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-success">Отправить</button>
            </form>
            <div class="toast-container pb-5 mt-5 mx-auto">
                @foreach($article->comments as $comment)
                    <div class="toast showing" style="width: 100%">
                        <div class="toast-header">
                            <img src="https://via.placeholder.com/50/5F113B/FFFFFF/?text=User" alt="" class="rounded me-2">
                            <strong class="me-auto">{{ $comment->subject }}</strong>
                            <small class="text-muted">{{ $comment->createdAtForHumans() }}</small>
                        </div>
                        <div class="toast-body">
                            {{ $comment->body }}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection

@section('vue')

@endsection
