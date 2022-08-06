<div class="flex p-4 {{ $loop->last ? '' : 'border-b border-b-gray-400' }}">
    <div class="mr-4 flex-shrink-0">
        <a href="{{ $tweet->user->path() }}">
            <img {{-- src="https://i.pravatar.cc/400?u={{ $tweet->user->email }}" --}} alt="" width="50" src="{{ $tweet->user->avatar }}"
                class="rounded-full mr-2">
        </a>
    </div>
    <div>
        <h5 class="font-bold mb-4">
            <a href="{{ $tweet->user->path() }}">
                {{ $tweet->user->name }}
            </a>
        </h5>
        <p class="test-sm mb-3">
            {{ $tweet->body }}
        </p>

        <x-like-buttons :tweet="$tweet" />
    </div>
</div>
