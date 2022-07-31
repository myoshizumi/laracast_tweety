<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img src="/images/default-profile-banner.jpg" alt="" class="mb-2">

            <img src="https://i.pravatar.cc/400?u={{ $user->email }}" width="150" alt=""
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2" style="left: 50%;">
        </div>

        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-bold text-2xl">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div class="flex">
                @can('edit', $user)
                    {{-- @if (current_user()->is($user)) --}}
                    <a href="{{ $user->path('edit') }}"
                        class="rounded-full border border-gray-300 py-2 px-4 text-xs mr-2">Edit Profile</a>
                    {{-- @endif --}}
                @endcan
                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>
        <p class="text-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam expedita quam ipsam possimus
            rem
            voluptate inventore similique iste deserunt debitis corrupti natus, optio atque ab accusamus, animi voluptas
            non
            sunt?</p>
    </header>

    @include('_timeline', [
        'tweets' => $user->tweets,
    ])
</x-app>
