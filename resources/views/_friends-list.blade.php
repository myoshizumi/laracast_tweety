<h3 class="font-bold text-xl mb-4">Following</h3>
<ul>
    @foreach (auth()->user()->follows as $user)
        <li class="mb-4">
            <div class="flex items-center text-sm">
                <img src="{{ $user->getAvatarAttributes() }}" alt="" width="40" class="rounded-full mr-2"
                    {{-- <img src="https://i.pravatar.cc/400?u={{ $tweet->user->email }}" alt="" width="40" --}} class="rounded-full mr-2">

                {{ $user->name }}
            </div>
        </li>
    @endforeach
</ul>
