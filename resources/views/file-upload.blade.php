@extends('master')

@section('content')    
    <form id="fileUploadForm" action="/upload" class="dropzone" enctype="multipart/form-data">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="fallback">
       		<input name="file" type="file" multiple />
        </div>
    </form>
@endsection