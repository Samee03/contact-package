<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Contact Pkg</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-lg-12 mt-lg-5">
            <div class="card">
                <div class="card-header text-center"><h3>Contact Form</h3></div>
                <div class="card-body">
                    @if($status)
                        <div class="alert alert-success text-center">
                            <h4>{{ $status !== null ? $status : null }}</h4>
                        </div>
                    @endif
                    <h3 class="text-center"><a href="{{ route('contact.index') }}">&larr; Back To Contact</a></h3>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>