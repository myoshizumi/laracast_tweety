<h3 class="font-bold text-xl mb-4">Friends</h3>
<ul>
    @foreach (range(1, 8) as $index)
        <li class="mb-4">
            <div class="flex items-center text-sm">
                <img src="https://i.pravatar.cc/400" alt="" width="40" class="rounded-full mr-2">

                John Doe
            </div>
        </li>
    @endforeach
</ul>
