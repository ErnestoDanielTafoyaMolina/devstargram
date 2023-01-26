<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("assets/css/mdb.min.css")}}">

    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
    <title>Registrate</title>
</head>
<body>
  
  <div class="container mt-10">
    <form action="/registro" method="POST">
      @csrf
        <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
              <input type="text" id="form3Example1" class="form-control" name="name"/>
              <label class="form-label" for="form3Example1">Nombre completo</label>
            </div>
          </div>
          @error('name')
              <p style="color:red">{{$message}}</p>
          @enderror
        <div class="row mb-4">
          <div class="col">
            <div class="form-outline">
              <input type="text" id="form3Example5" class="form-control" name="username" />
              <label class="form-label" for="form3Example5">Nombre de usuario</label>
            </div>
          </div>
          @error('username')
              <p style="color:red">{{$message}}</p>
          @enderror
        <!-- Email input -->
        <div class="form-outline mb-4">
          <input type="email" id="form3Example3" class="form-control" name="email" />
          <label class="form-label" for="form3Example3">Correo electronico</label>
        </div>
        @error('email')
            <p style="color:red">{{$message}}</p>
        @enderror
        <!-- Password input -->
        <div class="form-outline mb-4">
          <input type="password" id="password_confirmation" class="form-control" name="password"/>
          <label class="form-label" for="password_confirmation">Contraseña</label>
        </div>
        @error('password')
            <p style="color:red">{{$message}}</p>
         @enderror
         <div class="form-outline mb-4">
          <input type="password" id="password" class="form-control" name="password"/>
          <label class="form-label" for="password">confirma la contraseña</label>
        </div>
        @error('password')
            <p style="color:red">{{$message}}</p>
         @enderror
        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Registrate</button>
      
        <!-- Register buttons -->
        <div class="text-center">
          <p>O registrate con</p>
          <button type="button" class="btn btn-secondary btn-floating mx-1">
            <i class="fab fa-facebook-f"></i>
          </button>
      
          <button type="button" class="btn btn-secondary btn-floating mx-1">
            <i class="fab fa-google"></i>
          </button>
      
          <button type="button" class="btn btn-secondary btn-floating mx-1">
            <i class="fab fa-twitter"></i>
          </button>
      
          <button type="button" class="btn btn-secondary btn-floating mx-1">
            <i class="fab fa-github"></i>
          </button>
        </div>
      </form>
  </div>
</body>
</html>