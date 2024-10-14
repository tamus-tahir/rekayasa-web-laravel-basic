<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>

    <table class="table table-bordered" id="example">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Study</th>
                <th scope="col">Name</th>
                <th scope="col">NIM</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $student->study->name }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->nim }}</td>
                </tr>
            @endforeach


        </tbody>
    </table>

</x-layout>
