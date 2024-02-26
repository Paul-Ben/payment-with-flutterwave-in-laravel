<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/pay.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
    <section class="gradient-custom">
        <div class="container my-5 py-5">
          <div class="row d-flex justify-content-center py-5">
            <div class="col-md-7 col-lg-5 col-xl-4">
              <div class="card" style="border-radius: 15px;">
                <div class="card-body p-4">
                  <form action="{{route('pay')}}" method="post" id="paymentForm">
                    @csrf
                    <div class="d-flex justify-content-between align-items-center mb-3">
                      <div class="form-outline">
                        <label class="form-label" for="typeText">Name:</label>
                        <input type="text" id="name" class="form-control form-control-lg" siez="17"
                          placeholder="Enter your Name" />
                        
                      </div>
                    </div>
      
                    <div class="d-flex justify-content-between align-items-center mb-4">
                      <div class="form-outline">
                        <label class="form-label" for="email">Email:</label>
                        <input type="text" id="email" class="form-control form-control-lg" siez="17"
                          placeholder="Email" />
                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="form-outline">
                          <label class="form-label" for="phone">Phone</label>
                          <input type="text" id="phone" class="form-control form-control-lg" siez="17"
                            placeholder="Phone Number" />
                        </div>
                      </div>
      
                    <div class="d-flex justify-content-between align-items-center pb-2">
                      <div class="form-outline">
                        <label class="form-label" for="reg_number">JAMB NUMBER</label>
                        <input type="text" id="reg_number" class="form-control form-control-lg" placeholder="2023XXXXXXXJA"
                          size="17" />
                      </div>
                    </div>
                    <div>
                        <input type="submit" class="btn btn-info" value="Pay">
                     </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>