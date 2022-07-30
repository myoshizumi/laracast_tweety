@extends('layouts.app')

@section('content')
    <header class="mb-6 relative">
        <img src="/images/default-profile-banner.jpg" alt="" class="mb-2">
        <div class="flex justify-between items-center mb-4">
            <div>
                <h2 class="font-bold text-2xl">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>
            <div>
                <a class="rounded-full border border-gray-300 py-2 px-4 text-xs mr-2">Edit Profile</a>
                <a class="bg-blue-500 rounded-full shadow py-2 px-4 text-white text-xs">Follow Me</a>

            </div>
        </div>
        <p class="text-sm">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Totam expedita quam ipsam possimus rem
            voluptate inventore similique iste deserunt debitis corrupti natus, optio atque ab accusamus, animi voluptas non
            sunt?</p>


        <img src="https://i.pravatar.cc/400?u={{ $user->email }}" width="150" alt=""
            class="rounded-full mr-2 absolute" style="width: 150px;transform: translate(185%, -135%);">

    </header>

    @include('_timeline', [
        'tweets' => $user->tweets,
    ])
@endsection
