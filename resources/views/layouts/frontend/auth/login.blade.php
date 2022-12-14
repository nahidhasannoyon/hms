@include('layouts.frontend.header')

<body class="">

  <!-- Main Section-->
  <section class="d-flex justify-content-center align-items-start vh-100 py-5 px-3 px-md-0">

    <!-- Login Form-->
    <div class="d-flex flex-column w-100 align-items-center">

      <!-- Logo-->
      <a href="./index.html" class="d-table mt-5 mb-4 mx-auto">
        <div class="d-flex align-items-center justify-content-center">
            <svg class="f-w-6 me-2 text-primary" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 398.39 353.81"><polygon points="228.38 33.94 0 262.32 0 0 119.61 0 119.61 43.01 101.9 60.73 86.02 76.61 86.02 33.6 33.6 33.6 33.6 181.2 214.46 0.34 390.66 0.34 242.09 148.91 218.73 124.76 309.55 33.94 228.38 33.94" fill="currentColor"/><polygon points="398.39 353.81 217.51 353.81 131.04 261.75 45.09 353.81 0 353.81 0 353.49 131.26 212.91 232.05 320.21 317.27 320.21 170.28 173.21 194.19 149.29 194.19 149.55 254.9 210.51 254.97 210.39 398.39 353.81" fill="currentColor"/></svg>
            <span class="fw-bold fs-3 text-white">Kavlan</span>
        </div>      </a>
      <!-- Logo-->
      
      <div class="shadow-lg rounded p-4 p-sm-5 bg-white form">
        <h5 class="fw-bold text-muted">Login</h5>
        <p class="text-muted">Welcome back!</p>

        <!-- Login Form-->
        <form class="mt-4">
          <div class="form-group">
            <label class="form-label form-label-light" for="login-email">Email address</label>
            <input type="email" class="form-control form-control-light" id="login-email" placeholder="name@email.com">
          </div>
          <div class="form-group">
            <label for="login-password" class="form-label form-label-light d-flex justify-content-between align-items-center">
              Password
              <a href="./forgot-password.html" class="text-muted small ms-2 text-decoration-underline">Forgotton
                password?</a>
            </label>
            <input type="password" class="form-control form-control-light" id="login-password" placeholder="Enter your password">
          </div>
          <button type="submit" class="btn btn-primary d-block w-100 my-4">Login</button>
        </form>
        <!-- / Login Form -->

        <p class="d-block text-center text-muted small">New customer? <a class=" text-decoration-underline"
            href="./register.html">Sign up for an account</a></p>
      </div>
    </div>
    <!-- / Login Form-->

  </section>
  <!-- / Main Section-->

  <!-- main JS -->
  @include('layouts.frontend.js.main')
</body>

</html>
