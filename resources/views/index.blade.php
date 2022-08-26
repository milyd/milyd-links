@extends('layout')

@section('content')

<div class="card border-info mb-3">
    <div class="card-body">
        <h4 class="card-title">Do you want to add a link?</h4>
        <p class="card-text">Write to <a href="mailto:yeaq@linux.pl">yeaq@linux.pl</a></p>
    </div>
</div>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Name</th>
            <th scope="col">Languages</th>
            <th scope="col">Clicks</th>
            <th scope="col"> </th>
        </tr>
    </thead>
    <tbody>
@foreach ($link as $linkOne)
<tr>
    <th scope="row">{{ $linkOne->description }}</th>
    <td>{{ $linkOne->languages }}</td>
    <td>{{ $linkOne->clicks }}</td>
    <td><a href="link/{{ $linkOne->slug }}"<button class="btn btn-info">Go</button></a></td>
</tr>
@endforeach
    </tbody>
</table>
@endsection