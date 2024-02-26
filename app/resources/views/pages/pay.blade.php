<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BSU-CSL E-LEARNING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body style="background-color: rgba(255, 255, 255, 0.63)">
    <div class="container" >
        
        <div class="row justify-content-center align-items-center vh-100">
            <div class="header col col-lg-8 col-md-9 text-center rounded p-3 mt-4" >
                <img src="{{asset('imgs/bsulogo.jpeg')}}" alt="" width="90" height="90">
                <p class="my-3 mx-5" style="font-size: 25px;">Benue State University Consultancy Services Ltd.</p>
            </div> 
            <div class="col col-lg-8 col-md-9">
                <div class="card shadow-sm rounded border-secondary">
                    <div class="card-title text-center bg-primary text-black">
                        <h2>E-Learning Registration</h2>
                    </div>
                    <div class="card-body align-items-center">
                        <div class="main">
                            <form action="{{route('pay')}}" method="post" id="paymentForm">
                                @csrf
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="name">Name:</label>
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Your Name.." required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="email">Email:</label>
                                            <input type="text" name="email" id="email" class="form-control" placeholder="Your Email.." required>
                                        </div>
                                    </div>
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="phone">Phone:</label>
                                            <input type="text" name="phone" id="phone" class="form-control" placeholder="Your Phone.." required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="reg_number">JAMB Registration Number:</label>
                                            <input type="text" name="reg_number" id="reg_number" class="form-control" placeholder="Your JAMB REG NO.." required>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row mt-3">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="phone">Faculty:</label>
                                            <select name="faculty" id="faculty" class="form-control" placeholder="Select Faculty">
                                                <option value="">Select Faculty</option>
                                                @foreach($faculties as $faculty)
                                                <option value="{{ $faculty->name}}">
                                                    {{ $faculty->name}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="reg_number">Department:</label>
                                            <select name="department" id="department" class="form-control" placeholder="Select Department">
                                                <option value="">Select Department</option>
                                                @foreach($departments as $department)
                                                <option value="{{ $department->name}}">
                                                    {{ $department->name}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="reg_number">Payment Item:</label>
                                            <select name="amount" id="amount" class="form-control">
                                                <option value="">Select Pay Item</option>
                                                @foreach($fees as $fee)
                                                <option value="{{ $fee->amount}}">
                                                    {{ $fee->name}}
                                                </option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>
                                <div class="row text-center">
                                    <div class="col-md-12 px-5">
                                    <input type="submit" value="Pay Now" class="btn btn-primary mt-4">
                                    </div>
                                </div> 
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer mt-5 py-5">
            <div class="col-12 text-center">
                    <p>Benue State University Consultancy Services Ltd.</p>
                    <small><i>OZATech Services.</i> </small>
            </div>

        </div>
        
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>