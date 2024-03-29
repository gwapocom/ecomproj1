<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user'))
{
  $total=ProductController::cartItem();
}

?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Sample ECOMM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Home</a>
      </li>

      <li class="">
        <a class="nav-link" href="myorders">Orders</a>
      </li>

      <form action="/search" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2 search-box" name="query" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
     
    </ul>
    
    <ul class="nav navbar-nav navbar-right">
    	<li><a href="/cartlist">cart({{ $total }})</a></li>
      @if(Session::has('user'))
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">{{ Session::get('user')['name'] }}
        </a>
        <ul class="dropdown-menu">
          <li><a href="/logout">Logout</a></li>
          
        </ul>
      </li>
      @else
            <li><a href="/login">Login</a></li>
            <li><a href="/register">Register</a></li>

      @endif 
    </ul>
  </div>
</nav>