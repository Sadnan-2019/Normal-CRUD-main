<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

</head>
<body>
<h1>laravel</h1>
<a href="<?php echo route('home') ?>">Home</a>
<a href="<?php echo route('bitm') ?>">Bitm1</a>

<div class="container">

    <div class="row">


        <div class="col-md-6">

            <form method="post" action="<?php echo route('my-form') ?>">
              <?php echo   @csrf_field() ?>
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" name="name">
                 </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Number</label>
                    <input type="number" class="form-control"name="phone">
                </div>

                <input type="submit" name="btn" class="btn btn-primary btn-sm" value="Submit">
            </form>
        </div>
    </div>
</div>


</body>
</html>