 <link href="/css/login.css" rel="stylesheet">

<div class='container'>
    <div class='container__svgs'>
      <img src="/assets/images/kodego.png" alt="" width="350px">
    </div>
    <div class='container__content'>
      <form class='container__form' method="POST" action="/users/authenticate">
          @csrf
          @error('email')
          <p class="error">{{$message}}</p>
        @enderror
        <input type='text' name='email' placeholder='Email' class='container__inputField' required="" value="{{old('email')}}"/>
        @error('password')
        <p class="error">{{$message}}</p>
      @enderror
        <input type='password' name='password' placeholder='Password' class='container__inputField' required/>
       
        <input type='submit' value='Login' hr class='container__sumbitButton'>
      </form>
      <div class='container__links'>
        <a href='/' class='container__link'><b class='container__link2'>HOME</b></a>
        <span class='container__separator'></span>
        <a href='/' class='container__link'><b>FORGOT PASSWORD CONTACT ADMIN</b></a>
      </div>
    </div>
  </div>