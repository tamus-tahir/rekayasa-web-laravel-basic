<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="mb-3">
        <a class="btn btn-primary" href="{{ route('student.create') }}" role="button">Create</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered" id="example">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Study</th>
                <th scope="col">Name</th>
                <th scope="col">NIM</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <th scope="row">{{ $loop->iteration }}</th>
                    <td>{{ $student->study->name }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->nim }}</td>
                    <td>
                        <a href="{{ route('student.edit', $student) }}">&#9999;</a>
                        <form action="{{ route('student.destroy', $student) }}" method="post" class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="badge text-bg-danger" type="submit"
                                onclick="return confirm('Are you sure?')">X</button>
                        </form>
                    </td>
                </tr>
            @endforeach


        </tbody>
    </table>

</x-layout>
