<div wire:poll>
    <ul role="list" class="space-y-2 sm:space-y-8">
        @foreach($comments->sortByDesc('id') as $comment)
        <li>
            <div class="flex space-x-3">
                <div class="flex-shrink-0">
                    <img class="h-10 w-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                </div>
                <div>
                    <div class="text-sm">
                        <a href="#" class="font-medium text-gray-900">{{$comment->user->name}}</a>
                    </div>
                    <div class="mt-1 text-sm text-gray-700">
                        {!! htmlspecialchars_decode($comment->comment) !!}
                    </div>
                    <div class="mt-2 text-sm space-x-2">
                        <span class="text-gray-500 font-medium">{{$comment->created_at->diffForHumans()}}</span>
                    </div>
                </div>
            </div>
        </li>
        @endforeach
    </ul>
</div>
