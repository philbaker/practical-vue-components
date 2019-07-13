<ul class="p-4">
    @foreach ($examples as $example)
        <li>
            <a class="hover:underline text-blue-500" href={{ url($example) }}>{{ ucwords(str_replace('-', ' ', $example)) }}</a>
        </li>
    @endforeach
</ul>
