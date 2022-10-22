<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/stylelogin.css')}}">
</head>
<body>
<header>
		<nav>
			<h1>Automated Brokerage System</h1>
			<ul id="navli">
				
				
				
			</ul>
		</nav>
	</header>
	<div class="divider"></div>
    

    <div class="loginbox">
    <img src="{{asset('assets/assets/avatar.png')}}" class="avatar">
        <h1>Login </h1>
        




        <form method="POST" action="{{ route('login') }}">
            @csrf
             <p>Email</p>
            <input  type="text"  name="email" placeholder="Enter Email Address" required="required">
            <p>Password</p>
            @error('email')
                <span class="invalid-feedback" role="alert">
                   <strong>{{ $message }}</strong>
                </span>
            @enderror

             <input id="password" type="password" name="password" name="pwd" placeholder="Enter Password" required="required">
           
            @error('password')
               <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
               </span>
            @enderror

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                  <label class="form-check-label" for="remember">
                  {{ __('Remember Me') }}
                  </label>
             </div>
            <input type="submit" name="login-submit" value="Login">
            <a href="/register">Register</a>
           
        </form>



        






        
    </div>
            
            
</body>
</html>