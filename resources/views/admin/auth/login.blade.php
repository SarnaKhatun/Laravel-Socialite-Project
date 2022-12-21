<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('/')}}assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}assets/css/all.min.css">
</head>
<body>
<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-7 mx-auto">
               <div class="card">
                   <div class="card-header">
                       <h4 class="text-capitalize text-center">login form</h4>
                   </div>
                   <div class="card-body">
                       <form action="{{route('login')}}" method="post">
                           @csrf
                           <div class="mt-4">
                               <a href="{{route('login.google')}}" class="btn btn-danger btn-block"><i class="fab fa-google-plus"></i></a>
                               <a href="{{route('login.facebook')}}" class="btn btn-primary btn-block"><i class="fab fa-facebook-square"></i></a>
                               <a href="{{route('login.github')}}" class="btn btn-dark btn-block"><i class="fab fa-github-square"></i></a>
                           </div>
                           <p style="text-align: center">OR</p>
                           <div class="row mt-3">
                               <label for="" class="col-md-4">Email</label>
                               <div class="col-md-8">
                                   <input type="email" name="email" class="form-control">
                               </div>
                           </div>
                           <div class="row mt-3">
                               <label for="" class="col-md-4">password</label>
                               <div class="col-md-8">
                                   <input type="password" name="password" class="form-control">
                               </div>
                           </div>
                           <div class="row mt-3">
                               <label for="" class="col-md-4"></label>
                               <div class="col-md-8">
                                   <input type="submit"  class="btn btn-success">
                               </div>
                           </div>
                       </form>
                   </div>
               </div>
            </div>
        </div>
    </div>
</section>

<script src="{{asset('/')}}assets/js/jquery-3.6.0.min.js"></script>
<script src="{{asset('/')}}assets/js/bootstrap.bundle.min.js"></script>
</body>
</html>
