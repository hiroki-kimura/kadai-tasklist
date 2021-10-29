@extends('layouts.app')

@section('content')
    @if (Auth::check())
        {{ Auth::user()->name }}
        <div class="row">
            {{-- タスク一覧 --}}
            @include('tasks.index')
        </div>
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>タスクリストへようこそ</h1>
                {{-- ユーザ登録ページへのリンク --}}
                {!! link_to_route('signup.get', '今すぐ登録！', [], ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection