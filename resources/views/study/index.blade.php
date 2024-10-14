<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>

    <ul class="list-group">
        @foreach ($studies as $study)
            <li class="list-group-item">{{ $loop->iteration . '. ' . $study->name }}</li>
        @endforeach
    </ul>

</x-layout>
