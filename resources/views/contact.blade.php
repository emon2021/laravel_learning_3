<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form Validation Using PHP Laravel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  </head>
  <body>
    <h1>This is Contact Page.</h1><hr>
    <ul>
        <li><a href="{{route('bariJa')}}">Home</a></li>
        <li><a href="{{route('about-us')}}">About</a></li>
    </ul> <hr>

      <div class="row">
        <div class="col-lg-3"></div>
        <div class="card col-lg-6">
            <div class="card-body">
                <form action="{{route('store.contact')}}" method="post">
                    @csrf
                    <div class="mb-3">
                      <label for="NameInput" class="form-label">Full Name</label>
                      <input type="text" value="{{old('name')}}" name="name" class="form-control @error('name') is-invalid @enderror" aria-describedby="emailHelp">
                      @error('name')
                      <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Email address</label>
                      <input type="email" value="{{old('email')}}" name="email" class="form-control @error('email') is-invalid @enderror" aria-describedby="emailHelp">
                      @error('email')
                      <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="exampleInputPassword1" class="form-label">Password</label>
                      <input type="password" value="{{old('password')}}" name="password" class="form-control @error('password') is-invalid @enderror" >
                      @error('password')
                        <strong class="text-danger">{{$message}}</strong>
                      @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
                  
                {{-- @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div> --}}
        </div>
      </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>