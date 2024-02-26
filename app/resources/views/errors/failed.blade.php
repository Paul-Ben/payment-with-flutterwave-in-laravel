<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BSU-CSL E-LEARNING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center align-items-center vh-100">
          <div class="col col-lg-6 col-md-9">
            <div class="card shadow-sm rounded ">
                <div class="card-title text-center bg-danger text-white">
                    <h2>Transaction Failed!!!</h2>
                </div>
                <div class="card-body p-2 bg-white text-center">
              <p>Your transaction was failed. Please try again.</p>
              <p>click the button below.</p>
              <div class="col-md-12 px-5 text-center align-items-center">
                <a href="{{@route('register')}}" class="btn btn-primary my-3">Payment</a>

            </div>
                </div>
                

          </div>
        </div>
    </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>