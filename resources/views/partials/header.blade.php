<nav class="navbar navbar-expand-lg navbar-light bg-light header">
  <a class="navbar-brand" href="#">Chilling Store</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
    </ul>

    <ul class="navbar-nav  navbar-right">

     <li class="nav-item">
        <a class="nav-link" href="#"><i class="fa fa-shopping-cart"> </i> Shopping Cart</a>
     </li>
     
        <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user">  </i>  
          User Management
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="{{route('user.signup')}}">Sign Up</a>
          <a class="dropdown-item" href="#">Sign In</a>
        
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Logout</a>
        </div>
      </li>        
    </ul>
    
  </div>
</nav>
