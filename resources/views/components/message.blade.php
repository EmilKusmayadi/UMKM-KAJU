@if ($errors->any())
    <div class="bg-red-300 text-white font-bold rounded-lg border border-red-400 p-2 mb-4">
        <ul>
            @foreach ($errors->all() as $item)
                <li>{{ $item }}</li>
            @endforeach
        </ul>
    </div>
@endif

@if (Session::get('success'))
    <div class="bg-green-300 text-white font-bold rounded-lg border border-green-400 p-2 mb-4">{{ Session::get('success') }}</div>
@endif
