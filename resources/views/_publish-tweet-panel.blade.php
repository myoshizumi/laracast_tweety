<div class="border border-blue-400 rounded-xl px-8 py-6 mb-8">
    <form method="POST" action="/tweets">
        @csrf
        <textarea name="body" class="w-full" placeholder="what's up doc?" required autofocus></textarea>
        <hr class="my-4">
        <footer class="flex justify-between items-center">
            <img src="{{ auth()->user()->getAvatarAttribute() }}" alt="your avatar" width="40" {{-- src="{{ auth()->user()->avatar }}" --}}
                class="rounded-full mr-2">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-600 rounded-xl shadow px-10 text-white h-10">Publish</button>

        </footer>
    </form>
    @error('body')
        <p class="text-red-500 text-sm mt-2">{{ $message }}</p>
    @enderror
</div>
