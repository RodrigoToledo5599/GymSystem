<head>
    <link rel="stylesheet" href="{{asset('css/livewire/accounts-list.css')}}">
    <link rel="stylesheet" href="{{asset('bootstrapDist/css/bootstrap.css')}}">
</head>
<div>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Login
                    </div>
                    <div class="card-body">
                        <form action="/login-user" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="email" class="form-label">Email address</label>
                                <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp">
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" name="password" class="form-control" id="password">
                            </div>
                            <div class="submit">
                                <button type="submit" class="btn btn-primary">Login</button><br>
                                <p class="error-msg">
                                    {{$message}}
                                </p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <style>
        .card .card-body{
            padding-bottom:0;
        }
        .card .card-body .submit{
            padding-top:0.4rem;
            display:flex;
            flex-direction:column;
            justify-content:space-between;
            align-items:center;

        }
        .card .card-body .submit .error-msg{
            color:red;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
</div>