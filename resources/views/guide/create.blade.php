@extends('layouts.app')

@section('content')
<h2>Новый гайд</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('guide.store') }}" method="POST">
    @csrf
    <div class="mb-3">
        <label>Имя Чемпиона</label>
        <input type="text" name="champion_name" class="form-control" value="{{ old('champion_name') }}">
    </div>
    <div class="mb-3">
        <label>Текст гайда</label>
        <textarea name="guide_text" class="form-control" rows="5">{{ old('guide_text') }}</textarea>
    </div>
    <button type="submit" class="btn btn-success">Сохранить</button>
</form>
@endsection
