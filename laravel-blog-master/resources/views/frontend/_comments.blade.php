@forelse ($post->comments as $comment)
    <div class="panel panel-default">
        <div class="panel-heading">
            {{ $comment->user->name }} написал

            <span class="pull-right">{{ $comment->created_at->diffForHumans() }}</span>
        </div>

        <div class="panel-body">
            <p>{{ $comment->body }}</p>
        </div>
    </div>
@empty
    <div class="panel panel-default">
        <div class="panel-heading">Ничего нет</div>

        <div class="panel-body">
            <p>Простите, пока что нет комментариев. Можете стать первым, кто его оставит!</p>
        </div>
    </div>
@endforelse
