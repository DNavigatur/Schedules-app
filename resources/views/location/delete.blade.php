<form method="POST" name="delete" action="{{ route('location-delete') }}">
    @method('delete')
    {{ csrf_field() }}
    <h1>Delete Security Location</h1>
    @if ($errors->delete->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->delete->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session()->has('delete_success'))
        <div class="alert alert-success">
            {{ session()->get('delete_success') }}
        </div>
    @endif
    <strong>Location:</strong>
    <select name="location_id" class="form-control form-control-lg">
        @foreach ($locations as $location)
            <option value="{{ $location['id'] }}" {{ ($errors->delete->any() && old('location_id') == $id) ? 'selected' : '' }}>
                {{ $location['name'] }}
            </option>
        @endforeach
    </select>
    <div class="mt-3">
        <button type="submit" class="btn btn-danger col-md-3">Delete</button>
    </div>
</form>
