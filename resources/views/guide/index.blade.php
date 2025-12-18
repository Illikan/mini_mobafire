@extends('layouts.app')

@section('content')
<h2>Список гайдов</h2>
<table class="table table-striped">
    <thead>
        <tr>
            <th>Чемпион</th>
            <th>Описание</th>
        </tr>
    </thead>
    <tbody>
        @foreach($guides as $guide)
        <tr>
            <td>{{ $guide['champion_name'] }}</td>
            <td>{{ Str::limit($guide['guide_text'], 100) }}</td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
