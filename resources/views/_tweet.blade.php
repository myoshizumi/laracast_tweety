<div class="flex p-4 border-b border-b-gray-400">
    <div class="mr-4 flex-shrink-0">
        <img src="https://i.pravatar.cc/400?u={{ $tweet->user->email }}" alt="" width="50"
            {{-- src="{{ $tweet->user->avatar }}" --}} class="rounded-full mr-2">
    </div>
    <div>
        <h5 class="font-bold mb-4">{{ $tweet->user->name }}</h5>
        <p class="test-sm">
            {{ $tweet->body }}
        </p>
    </div>
</div>
