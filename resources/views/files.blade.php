@extends('master')


@section('content')
    <h3>Files</h3>
    
    @if($files)
        <ul class="list-group">
        @foreach($files as $file)
            <li class="list-group-item">
                <span class="badge">{{ $file->created_at->diffForHumans() }}</span>
                <a href="uploads/{{ $file->formatted_name }}" target="_blank">{{ $file->formatted_name }}</a>
            </li>
        @endforeach
        </ul>
    @endif

@endsection