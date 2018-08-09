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
                        <form action="{{ route('contact.send') }}" method="post">
                            <div class="form-group">
                                <label for="exampleInputName1">Full Name</label>
                                <input type="name" name="name" class="form-control" placeholder="Enter name" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Email address</label>
                                <input type="email" name="email" class="form-control" placeholder="Enter email" required>
                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>
                            <div class="form-group">
                                <label>Write you message</label>
                                <textarea class="form-control" name="message" rows="5" required></textarea>
                            </div>
                            <button class="btn btn-success" type="submit"><span class="glyphicon glyphicon-send"></span>Send Main</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>