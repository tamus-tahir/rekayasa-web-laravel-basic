<x-layout>

    <x-slot:title>{{ $title }}</x-slot:title>

    <form action="{{ route('student.update', $student) }}" method="post">
        @csrf
        @method('put')

        <div class="mb-3">
            <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
            <input type="text" class="form-control @error('name') is-invalid @enderror " id="name" name="name"
                value="{{ old('name', $student->name) }}" required>
            @error('name')
                <div id="validationServerUsernameFeedback" class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>

        <div class="row g-3 mb-3">
            <div class="col-md-6">
                <label for="nim" class="form-label">NIM <span class="text-danger">*</span></label>
                <input type="text" class="form-control @error('nim') is-invalid @enderror " id="nim"
                    name="nim" value="{{ old('nim', $student->nim) }}" required>
                @error('nim')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="study_id" class="form-label">Study <span class="text-danger">*</span></label>
                <select class="form-select @error('study_id') is-invalid @enderror" required name="study_id">
                    <option value="">-- Choose Study --</option>
                    @foreach ($studies as $study)
                        <option value="{{ $study->id }}" @selected($student->study_id == $study->id)>{{ $study->name }}</option>
                    @endforeach
                </select>
                @error('study_id')
                    <div id="validationServerUsernameFeedback" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
        </div>

        <a class="btn btn-warning" href="{{ route('student.index') }}" role="button">Back</a>
        <button type="submit" class="btn btn-primary">Save</button>


    </form>


</x-layout>
