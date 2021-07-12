<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="{{asset('user\style.css')}}" />
    <link rel="icon" href="{{asset('user\img\icon.png')}}" type="image/gif" sizes="16x16">
    <title>Appointment | Skinic Dermatology Center</title>
  </head>
  <body>
    <div class="container">
      <div class="forms-container">
        <div class="signin-signup">
          <form action="#" class="sign-in-form">
            <h2 class="title">Hi,there</h2>
            <p class="social-text">Skinic Dermatology Centre offers a wide range of dermatologic care for patients with both common and rare problems of skin, hair, nails and sexual transmitted disease (STD).</p>
            <input type="submit" value="visit us" class="btn solid" />
            <p class="social-text">Or visit our social platforms</p>
            <div class="social-media">
              <a href="https://www.facebook.com/Skinic.bd" class="social-icon">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="https://www.youtube.com/channel/UCNe8gokkY8gjQlkIy1Sdb6w" class="social-icon">
                <i class="fab fa-youtube"></i>
              </a>
              <a href="https://twitter.com/skinicc?lang=en" class="social-icon">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="https://www.instagram.com/skinicderma/" class="social-icon">
                <i class="fab fa-instagram"></i>
              </a>
            </div>
          </form>

          
          <form method="POST" class="sign-up-form" action="{{ route('bookAppointment') }}">
          @csrf
            <h2 class="title">Book Appointment</h2>
            <div class="input-field">
              <i class="fas fa-user"></i>
              <input type="text" placeholder="Patient Name" name="name" required/>
            </div>
            
            <div class="input-field">
              <i class="fas fa-address-book"></i>
              <input type="text" placeholder="Mobile no" name="phone" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-envelope"></i>
              <input type="email" placeholder="Email" name="email" required/>
            </div>
            <div class="input-field">
              <i class="fas fa-venus-mars"></i>
              <input type="text" placeholder="Gender" name="gender" required/>
            </div>
            <input type="submit" class="btn" value="Book" />
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>New here ?</h3>
            <p>
              Specialized in both clinical &Cosmetic skin treatments - lasers, Fillers, Botox, mesotherapy, thread lifting, micro needling ,microdermabrasion etc.
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Appointment
            </button>
          </div>
          {{-- <img src="{{asset('user/img/dermatologist.svg')}}" class="image" alt="" /> --}}
            <img src="{{asset('user/img/Munna_Doctor.png')}}" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Still confused ?</h3>
            <p>
              We maintain high class safety sterile procedures in all our treatments with latest medicines from world wide renowned pharmaceuticals. We also maintain highest possible privacy to all regardless celebrity or general patients.
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Back
            </button>
          </div>
          
          <div class="sknicimage">
            <img src="{{asset('user/img/skinic.png')}}" class="image" alt="" />
          </div>
        </div>
      </div>
    </div>

   
    <script src="{{asset('user/app.js')}}"></script>
  </body>
</html>
