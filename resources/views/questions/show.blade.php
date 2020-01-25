@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <div class="d-flex align-items-center">
                                <h1>
                                    {{$question->title}}
                                </h1>
                                <div class="ml-auto">
                                    <a href="{{route('questions.index')}}" class="btn btn-outline-secondary">Back top all Questions</a>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="media">
                            <div class="d-flex flex-column vote-controls">
                                <a href="" title="This question is usefull" class="vote-up">
                                    <i class="fa fa-caret-up fa-3x"></i>
                                </a>
                                <span class="votes-count">30</span>
                                <a href="" title="This question is not useful" class="vote-down off">
                                    <i class="fa fa-caret-down fa-3x"></i>
                                </a>
                                <a href="" title="Click to mark as favorite question(Click again to undo" class="favorite mt-2 favorited">
                                    <i class="fa fa-star fa-2x"></i>
                                    <span class="favorite-count">312</span>
                                </a>
                            </div>
                            <div class="media-body">
                                {!!  $question->body_html !!}
                                <div class="float-right mt-1">
                                        <span class="text-muted">
                                            Answered {{$question->created_date}}
                                        </span>
                                    <div class="media mt-3">
                                        <a href="{{$question->user->url}}" class="pr-2">
                                            <img src="{{$question->user->avatar}}" alt="">
                                        </a>
                                        <div class="media-body mt-1">
                                            <a href="{{$question->user->url}}">{{$question->user->name}}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('answers._index', [
        'answers' => $question->answers,
        'answersCount' => $question->answers_count
        ])
        @if(\Illuminate\Support\Facades\Auth::check())
            @include('answers._create')
            @else
            <a href="/login">Login for answer</a>
        @endif

    </div>
@endsection