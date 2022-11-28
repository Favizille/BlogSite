<!DOCTYPE html>
<html lang="en">
<head>
  <title>Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset("css/register.css")}}}">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

    <section class="bg-image"
    style="background-image: url('https://images.unsplash.com/photo-1567201864585-6baec9110dac?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=687&q=80');" >
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                <div class="card my-3" style="border-radius: 15px;">
                    <div class="card-body p-3">
                    <h2 class="text-uppercase text-center mb-3">Register</h2>

                    <form action="{{route("registration")}}" method="POST">
                        @csrf
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example1cg">First Name</label>
                            <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="first_name" required/>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example1cg">Last Name</label>
                            <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="last_name" required/>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example4cg">Email</label>
                            <input type="email" id="form3Example4cg" class="form-control form-control-lg" name="email" required/>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example1cg">Phone Number</label>
                            <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="phone_number" required/>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example1cg">Facebook Username</label>
                            <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="facebook" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example1cg">Twitter Username</label>
                            <input type="text" id="form3Example1cg" class="form-control form-control-lg" name="twitter" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example4cdg">Password</label>
                            <input type="password" id="form3Example4cdg" class="form-control form-control-lg" name="password" required/>
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form3Example4cdg">Confirm Password</label>
                            <input type="password" id="form3Example4cdg" class="form-control form-control-lg" name="password_confirmation" required/>
                        </div>

                        <div class="d-flex justify-content-center">
                        <button type="submit"
                            class="btn btn-secondary btn-block btn-lg gradient-custom-4 text-body">Register</button>
                        </div>

                        <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="{{route("login_view")}}"
                            class="fw-bold text-body"><u>Login here</u></a></p>

                    </form>

                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </section>

</body>
</html>
