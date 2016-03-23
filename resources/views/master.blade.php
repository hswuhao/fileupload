<!DOCTYPE html>
<html>
    <head>
        <title>File Upload</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.css">
        <style>
            body
            {
                margin-top: 70px;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                @if (Session::has('info'))
                    <div class="alert alert-info" role="alert">
                        {{ Session::get('info') }}
                    </div>
                @endif
                @yield('content')
            </div>      
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/min/dropzone.min.js"></script>
        <script>
            Dropzone.options.fileUploadForm = 
            {
                maxFileSize: 50,
                acceptedFiles: '.zip'
            };
        </script>
    </body>
</html>
