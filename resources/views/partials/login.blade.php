<link href="/css/login.css" rel="stylesheet">

<div class='container'>
    <div class='container__svgs'>
      <img src="/assets/images/kodego.png" alt="" width="350px">
    </div>
    <div class='container__content'>
      <form class='container__form' method="POST" action="/users/authenticate">
          @csrf
          
        <input type='text' name='email' placeholder='Email' class='container__inputField' required="" value="{{old('email')}}"/>
       
        <input type='password' name='password' placeholder='Password' class='container__inputField' required/>
        
        <input type='submit' value='Login'  class='container__sumbitButton mt-5'>
      </form>
      <div class='container__links'>
        <a href='/' class='container__link'><b class='container__link2'>HOME</b></a>
        <span class='container__separator'></span>
        
      </div>
    </div>
  </div>
</div>