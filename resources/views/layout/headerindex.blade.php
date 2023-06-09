
<link rel="shortcut icon" type="image/x-icon" href="/path/to/favicon.ico"><div class="header" style="top: 0px;">
            <div class="brand">
                <h1 class="red">My</h1>
                <h1 class="red">Music</h1>
            </div>
            <div class="main-nav">
                <a href="{{ route('index')}}" class="button-container">
                    <h2>HOME</h2>
                </a>
                <a href="#" class="button-container">
                    <h2>SONGS</h2>
                </a>
                <a href="#" class="button-container">
                    <h2>TRENDING</h2>
                </a>
                
                {{-- <a href="#" class="button-container">
                    <h2>SEARCH</h2>
                </a> --}}
                <a href="{{ route('dashboard')}}" class="button-container">
                    <h2>ADD NEW PRODUCT</h2>
                </a>
                <form action="{{ route('products.search') }}" method="GET">
                    <input type="text" name="search" placeholder="Song Search">
                    <button type="submit">Search</button>
                </form>
            </div>
            @if ($user)
<div class="avatar">
  <!-- <img src="{{ $user->avatar_url }}" alt="AVATAR" class="avatar-img" onclick="toggleAccountInfo()"> -->
  <img src="https://png.pngtree.com/element_our/20190529/ourlarge/pngtree-avatar-pattern-flat-cartoon-user-image_1200105.jpg" alt="AVATAR" class="avatar-img" onclick="toggleAccountInfo()" style="margin-left: 100px"><a style="margin-left: 5px; "
>{{ $user->display_name }}</a> 
{{-- <div id="account-info" class="account-info show" style="height: 205px;margin-left: 570px;">
    <p class="info">Display Name: {{ $user->display_name }}</p>
    <p class="info">Username: {{ $user->username }}</p>
    <p class="info">Email: {{ $user->email }}</p>
    <p class="info">Role: {{ $user->role }}</p> --}}


    <form method="POST" action="{{ route('logout') }}">
      @csrf
      
      <button type="submit" class="logout-btn" style="font-size:20px">Logout</button>
    </form>
  </div>
</div>
@else
            <div class="right-nav">
                <div class="button-container login">
                    <a href="{{ route('login')}}">Login</a>
                </div>
                <div class="button-container create">    
                    <a href="{{ route('register')}}">Register</a>
@endif
                </div>
            </div>
            </div>
            </div>
            




            



