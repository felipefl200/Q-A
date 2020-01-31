@can('accept', $model)
    <a href="" title="Mark this answer as best answer" class="{{$model->status}} mt-2" onclick="event.preventDefault(); document.getElementById('accept-answer-{{$model->id}}').submit()">
        <i class="fas fa-check fa-2x"></i>
{{--        <span class="favorite-count">312</span>--}}
    </a>
    <form action="{{route('answers.accept', $model->id)}}" id="accept-answer-{{$model->id}}" method="post" style="display: none;">
        @csrf
    </form>
@else
    @if($model->is_best)
        <a href="" title="The question owner accepted this answer as best answer" class="{{$model->status}} mt-2" onclick="event.preventDefault(); document.getElementById('accept-answer-{{$model->id}}').submit()">
            <i class="fas fa-check fa-2x"></i>
{{--            <span class="favorite-count">312</span>--}}
        </a>
    @endif
@endcan