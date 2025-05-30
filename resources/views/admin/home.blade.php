@extends('layouts.adminapp')
@section('title', 'Home')
@section('content')

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <form method="POST" action="{{ route('submit.form') }}">
        @csrf
        <label for="key">Name:</label>
        <input type="text" name="data[px name]" value="<?= $data['px name']; ?>" required>
        <br><br>

        <label for="value">label:</label>
        <input type="text" name="data[px_label]" value="<?= $data['px_label']; ?>" required>
        <br><br>

        <button type="submit">Update JSON</button>
    </form>
@endsection
