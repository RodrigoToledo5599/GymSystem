<div>
  <link href="{{asset('bootstrapDist/css/bootstrap.css')}}" rel="stylesheet">    
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="nav-content">
      <div class="logo">
        <img src="{{asset('images/header-logo.svg')}}" alt="">
      </div>

      <div class="options">
        <a class="nav-link" href="/users">Usuários </a>
        <a class="nav-link" href="/entrance">Acessos</a>
      </div>
    </div>
  </nav>
    
  <style>
    nav .nav-content{
      width:100%;
      display:flex;
      flex-direction:row;
      justify-content:space-between;
      align-items: center;
    }
    nav .nav-content .options{
      width: fit-content;
      display:flex;
      flex-direction:row;
      justify-content:center;
      align-items: center;
    }
  </style>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>    
</div>
