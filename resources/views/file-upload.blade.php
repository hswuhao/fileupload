@extends('master')


@section('content')
        
        <form id="fileUploadForm" action="/upload" class="dropzone">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input type="hidden" name="MAX_FILE_SIZE" value="90000">
                  <div class="fallback">
                    <input name="file" type="file" multiple />
                  </div>
                </form>
            </div>
    
@endsection