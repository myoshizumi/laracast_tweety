<div class="bg-gray-200 border border-gray-300 rounded-xl py-4 px-6">
    <h3 class="font-bold text-xl mb-4">Following</h3>
    <ul>
        @forelse (auth()->user()->follows as $user)
            <li class="{{ $loop->last ? '' : 'mb-4' }}">
                <div>
                    <a href="{{ route('profile', $user) }}" class="flex items-center text-sm">

                        {{-- <img src="{{ $user->getAvatarAttributes() }}" alt="" width="40" --}}
                        {{-- class="rounded-full mr-2" --}}
                        <img src="https://i.pravatar.cc/400?u={{ $user->email }}" alt="" width="40"
                            class="rounded-full mr-2">

                        {{ $user->name }}
                    </a>
                </div>
            </li>
        @empty
            <li>No friends yet!</li>
        @endforelse
    </ul>
</div>
