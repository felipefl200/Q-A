@if($model instanceof App\Models\Question)
    @php
        $name = 'question';
        $firstURISegment = 'questions';
    @endphp
@elseif ($model instanceof App\Models\Answer)
    @php
        $name = 'answer';
        $firstURISegment = 'answers';
    @endphp
@endif

@php
    $formId = $name . '-' . $model->id;
    $formAction = "/{$firstURISegment}/{$model->id}/vote";
@endphp

<div class="d-flex flex-column vote-controls">
    <a href="" title="This {{$name}} is usefull" class="vote-up {{Auth::guest() ? 'off' : ''}}"
       onclick="event.preventDefault(); document.getElementById('up-vote-{{$formId}}').submit()">
        <i class="fa fa-caret-up fa-3x"></i>
    </a>
    <form action="{{$formAction}}" id="up-vote-{{$formId}}" method="post" style="display: none;">
        @csrf
        <input type="hidden" name="vote" value="1">
    </form>
    <span class="votes-count">{{$model->votes_count}}</span>
    <a href="" title="This {{$name}} is not useful" class="vote-down {{Auth::guest() ? 'off' : ''}}"
       onclick="event.preventDefault(); document.getElementById('down-vote-{{$formId}}').submit()">
        <i class="fa fa-caret-down fa-3x"></i>
    </a>
    <form action="{{$formAction}}" id="down-vote-{{$formId}}" method="post" style="display: none;">
        @csrf
        <input type="hidden" name="vote" value="-1">
    </form>
    @if($model instanceof App\Models\Question)
        @include('shared._favorite', [
        'model' => $model
        ])
    @elseif($model instanceof App\Models\Answer)
        @include('shared._accept', [
      'model' => $model
      ])
    @endif
</div>