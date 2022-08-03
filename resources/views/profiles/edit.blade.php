<x-app>
    <form method="POST" action="{{ $user->path() }}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')

        <div>
            <x-label for="name" :value="__('Name')" />

            <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $user->name }}"
                required autofocus />
        </div>

        <div>
            <x-label for="username" :value="__('Username')" />

            <x-input id="username" class="block mt-1 w-full" type="text" name="username"
                value="{{ $user->username }}" required autofocus />
        </div>

        {{-- avatar --}}

        <div>
            <x-label for="avatar" :value="__('Avatar')" />
            <div class=flex>

                <x-input id="avatar" class="block mt-1 w-full" type="file" name="avatar"
                    value="{{ $user->avatar }}" autofocus />
                <img src="{{ $user->avatar }}" alt="your avatar" width="40">
            </div>
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-label for="email" :value="__('Email')" />

            <x-input id="email" class="block mt-1 w-full" type="email" name="email" value="{{ $user->email }}"
                required />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-label for="password" :value="__('Password')" />

            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                autocomplete="new-password" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation"
                required />
        </div>

        <div class="mt-6">
            <button type="submit" class="bg-blue-400 text-white rounded py-2 px-4 hover:bg-blue-500">
                Submit
            </button>
        </div>
    </form>
</x-app>
