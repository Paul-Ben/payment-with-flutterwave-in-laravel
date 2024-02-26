<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BSU-CSL E-LEARNING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script>
        window.onload = function() {
          window.print();
        }
     </script>
  </head>
  <body>
    <div class="row justify-content-center align-items-center pt-5 vh-100" >
      <div class="col col-lg-6 col-md-8">
          <div class="card shadow-sm rounded">
              <div class="col-12 card-title text-center bg-primary text-white px-5 py-5 ">
                  <h2>E-Learning Registration Receipt</h2>
              </div>
              <div class="card-body align-items-center">

        <div class="container">
          <div class="col-12 text-center">
            <img src="{{asset('imgs/bsulogo.jpeg')}}" alt="" width="90" height="90">
            <p class="my-3 mx-5" style="font-size: 30px;">Registered</p>
          </div>
          
          <div class="row">
            <div class="col-6">
              <ul class="list-unstyled">
                <li class="text-black">Name : {{$receipt_info->name}}</li>
                <li class="text-muted mt-1"><span class="text-black">Reg No : </span>{{$receipt_info->reg_number}}</li>
                <li class="text-muted mt-1"><span class="text-black">Phone : </span>{{$receipt_info->phone_number}}</li>
                <li class="text-muted mt-1"><span class="text-black">Ref : </span>{{$receipt_info->tx_ref}}</li>
              </ul>

            </div>
            <div class="col-6">
              <ul class="list-unstyled float-end">
                <li class="text-muted mt-1"><span class="text-black">Email : </span>{{$receipt_info->email}}</li>
                <li class="text-muted mt-1"><span class="text-black">Transaction id : </span>{{$receipt_info->txr_id}}</li>
                <li class="text-black mt-1">Date : {{now()}}</li>
              </ul>

            </div>
            
            <hr>
            <div class="col-xl-8">
              <p>E-Learning Registration</p>
            </div>
            <div class="col-xl-4">
              <p class="float-end">NGN {{$receipt_info->amount}}.00
              </p>
            </div>
            <hr>
          </div>
          {{-- <div class="row">
            <div class="col-xl-10">
              <p>Consulting</p>
            </div>
            <div class="col-xl-2">
              <p class="float-end">$100.00
              </p>
            </div>
            <hr>
          </div>
          <div class="row">
            <div class="col-xl-10">
              <p>Support</p>
            </div>
            <div class="col-xl-2">
              <p class="float-end">$10.00
              </p>
            </div> --}}
            {{-- <hr style="border: 2px solid black;">
          </div> --}}
          <div class="row text-black">
    
            <div class="col-xl-12">
              <p class="float-end fw-bold">Total: NGN {{$receipt_info->amount}}.00
              </p>
            </div>
            <hr style="border: 2px solid black;">
          </div>
          <div class="text-center" style="margin-top: 90px;">
            <p><a href="{{ @route('register')}}"> Make another payment.</a> </p>
          </div>
    
        </div>
      </div>
    </div>

  </div>
</div>
</div>
</div>
    
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>