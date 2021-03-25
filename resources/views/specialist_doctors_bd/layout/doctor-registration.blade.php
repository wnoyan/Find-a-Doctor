@extends('specialist_doctors_bd.layout.master')

@section('content')

    <!-- @if ($message = Session::get('success'))
        <div class="container shadow-lg mb-2 p-2 bg-white alert alert-success">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <strong>{{ $message }}</strong>
        </div>
    @endif -->

    @if (count($errors) > 0)
        <div class="container shadow-lg mb-2 p-2 bg-success alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
    @endif

    @if (session()->has('done'))
        <div class="container shadow-lg mb-2 p-2 bg-success text-white alert alert-success">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong>Notification:</strong> {{ session()->get('done') }}
        </div>
    @endif
      
    <!--Doctor Registration Form Starting-->
    <div class="container shadow-lg mb-2 p-2 bg-white">
        <div>
          <p class="m-2"><strong>Register Doctor</strong></p>
        </div>
        
        <div id="accordion">

          <!-- Doctor Basic Information -->

            <div class="card">
              <div class="card-header">
                <a class="card-link" data-toggle="collapse" href="#collapseOne">
                  <strong>Provide Basic Information About Doctor</strong>
                </a>
              </div>
              <div id="collapseOne" class="collapse" data-parent="#accordion">
                <div class="card-body">
                      <form action="{{ route('basicinfo') }}" method="POST" enctype="multipart/form-data" class="was-validated">
                      {{ csrf_field() }}
          
                        <div class="form-group">
                          <label for="drname">Dr Name:</label>
                          <input type="text" class="form-control" id="drname" placeholder="Ex: Dr Mike Kazi" name="drname" required>
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                          <label for="drid">Dr ID:</label>
                          <input type="number" class="form-control" id="drid" placeholder="Ex: 1001" name="drid" required>
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please fill out this field.</div>
                        </div>  
                        <div class="form-group">
                          <label for="mainspeciality">Main Speciality:</label>
                          <input type="text" class="form-control" id="mainspeciality" placeholder="Ex: Cardiology" name="mainspeciality" required>
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                          <label for="state">State:</label>
                          <input type="text" class="form-control" id="state" placeholder="Ex: Miami" name="state" required>
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                          <label for="city">City:</label>
                          <input type="text" class="form-control" id="city" placeholder="Ex: Miami" name="city" required>
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                          <label for="experience">Experience (Exp. in years):</label>
                          <input type="number" class="form-control" id="experience" placeholder="Ex: 5" name="experience" required>
                          <div class="valid-feedback">Valid.</div>
                          <div class="invalid-feedback">Please fill out this field.</div>
                        </div>
                        <div class="form-group">
                          <label for="accepting">Accepting New Patients:</label>
                          <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="accepting" id="accepting1" value="Yes" checked>
                              <label class="form-check-label" for="accepting1">
                                Yes
                              </label>
                            </div>
                            <div class="form-check form-check-inline">
                              <input class="form-check-input" type="radio" name="accepting" id="accepting2" value="No">
                              <label class="form-check-label" for="accepting2">
                                No
                              </label>
                            </div>
                        </div>
                        <div class="form-group">
                          <label for="about-dr">About Dr:</label>
                          <textarea name="aboutdr" rows="3" cols="10" class="form-control" id="aboutdr" required>Write About Doctor.</textarea>
                        </div>
                        <!-- <div class="form-group">
                          <label for="insurance">Accepting Insurance:</label>
                          <input type="text" class="form-control" id="insurance" placeholder="Ex: USA Health Insurance" name="insurance" required>
                        </div> -->  
                        <div class="form-group">
                          <p>Upload Image:</p>
                          <div class="custom-file">
                            <input type="file" class="custom-file-input" id="image" name="image" required>
                            <label class="custom-file-label" for="image">Choose Image</label>
                          </div>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                      </form>
                </div>
              </div>
            </div>

            <!-- Chamber Location Information -->
            <div class="card">
                  <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseTwo">
                    <strong>Provide Chamber Location Information</strong>
                  </a>
                  </div>
                  <div id="collapseTwo" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        <form action="{{ route('chamberlocation') }}" method="POST" enctype="multipart/form-data" class="was-validated">
                          {{ csrf_field() }}
                            <div class="form-group">
                              <label for="drid">Dr ID:</label>
                              <input type="number" class="form-control" id="drid" placeholder="Ex: 1001" name="drid" required>
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            
                            <div class="form-group">
                              <label for="chambername">Chamber Name:</label>
                              <input type="text" class="form-control" id="chambername" placeholder="Ex: Miami Chamber" name="chambername" required>
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            
                            <div class="form-group">
                              <label for="state">State:</label>
                              <input type="text" class="form-control" id="state" placeholder="Ex: Miami" name="state" required>
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            
                            <div class="form-group">
                              <label for="city">City:</label>
                              <input type="text" class="form-control" id="city" placeholder="Ex: Miami" name="city" required>
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            
                            <div class="form-group">
                              <label for="zip">Zip:</label>
                              <input type="number" class="form-control" id="zip" placeholder="Ex: 9203" name="zip" required>
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            
                            <div class="form-group">
                              <label for="telephone">Telephone:</label>
                              <input type="tel" class="form-control" id="telephone" placeholder="Ex: +88345-89" name="telephone" required>
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            
                            <div class="form-group">
                              <label for="accepting">Accepting New Patients:</label>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="accepting" id="accepting1" value="Yes" checked>
                                  <label class="form-check-label" for="accepting1">
                                    Yes
                                  </label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="accepting" id="accepting2" value="No">
                                  <label class="form-check-label" for="accepting2">
                                    No
                                  </label>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>

                          </form>
                    </div>
                  </div>
            </div>

            <!-- Hospital Affliation Information -->
            <div class="card">
                  <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseThree">
                    <strong>Provide Hospital Affliation Information</strong>
                  </a>
                  </div>
                  <div id="collapseThree" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        <form action="{{ route('hospitalaffliation') }}" method="POST" enctype="multipart/form-data" class="was-validated">
                          {{ csrf_field() }}
                            <div class="form-group">
                              <label for="drid">Dr ID:</label>
                              <input type="number" class="form-control" id="drid" placeholder="Ex: 1001" name="drid" required>
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group">
                              <label for="hospitalname">Hospital Affliation:</label>
                              <input type="text" class="form-control" id="hospitalname" placeholder="Ex: Rajshahi Medical College, Rajshahi" name="hospitalname" required>
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            
                            <div class="form-group">
                              <label for="url">URL:</label>
                              <input type="url" class="form-control" id="url" placeholder="Ex: http://www.xyz.com/jhon" name="url" required>
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>

                          </form>
                    </div>
                  </div>
            </div>

            <!-- Education Information Storing -->
            <div class="card">
                  <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseFour">
                    <strong>Provide Education Information</strong>
                  </a>
                  </div>
                  <div id="collapseFour" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        <form action="{{ route('education') }}" method="POST" enctype="multipart/form-data" class="was-validated">
                          {{ csrf_field() }}
                            <div class="form-group">
                              <label for="drid">Dr ID:</label>
                              <input type="number" class="form-control" id="drid" placeholder="Ex: 1001" name="drid" required>
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <div class="form-group">
                              <label for="institution">Institution:</label>
                              <input type="text" class="form-control" id="institution" placeholder="Ex: Rajshahi Medical College, Rajshahi" name="institution" required>
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            
                            <div class="form-group">
                              <label for="gyear">Graduation Year:</label>
                              <input type="number" class="form-control" id="gyear" placeholder="Ex: 2016" name="gyear" required>
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            
                            <button type="submit" class="btn btn-primary">Submit</button>

                          </form>
                    </div>
                  </div>
            </div>

            <!-- Insurance Information Storing -->
            <div class="card">
                  <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#insurancesection">
                    <strong>Provide Insurance Information</strong>
                  </a>
                  </div>
                  <div id="insurancesection" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        <form action="{{ route('insurance') }}" method="POST" enctype="multipart/form-data" class="was-validated">
                          {{ csrf_field() }}
                            <div class="form-group">
                              <label for="drid">Dr ID:</label>
                              <input type="number" class="form-control" id="drid" placeholder="Ex: 1001" name="drid" required>
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Please fill out this field.</div>
                            </div>

                            <div class="form-group">
                              <label for="name">Insurance Name:</label>
                              <input type="text" class="form-control" id="name" placeholder="Ex: USA Health Insurance" name="name" required>
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>

                          </form>
                    </div>
                  </div>
            </div>


            <!-- Award Information Storing -->
            <div class="card">
                  <div class="card-header">
                    <a class="collapsed card-link" data-toggle="collapse" href="#collapseFive">
                    <strong>Provide Award Information</strong>
                  </a>
                  </div>
                  <div id="collapseFive" class="collapse" data-parent="#accordion">
                    <div class="card-body">
                        <form action="{{ route('award') }}" method="POST" enctype="multipart/form-data" class="was-validated">
                          {{ csrf_field() }}
                            <div class="form-group">
                              <label for="drid">Dr ID:</label>
                              <input type="number" class="form-control" id="drid" placeholder="Ex: 1001" name="drid" required>
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Please fill out this field.</div>
                            </div>

                            <div class="form-group">
                              <label for="name">Name:</label>
                              <input type="text" class="form-control" id="name" placeholder="Ex: Health Award 2020, USA" name="name" required>
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Please fill out this field.</div>
                            </div>
                            
                            <div class="form-group">
                              <label for="description">Description:</label>
                              <textarea name="description" rows="3" cols="10" class="form-control" id="description" required>Write About Award.</textarea>
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Please fill out this field.</div>
                            </div>

                            <button type="submit" class="btn btn-primary">Submit</button>

                          </form>
                    </div>
                  </div>
            </div>

            
        </div>  

        <script>
        // Add the following code if you want the name of the file appear on select
        $(".custom-file-input").on("change", function() {
          var fileName = $(this).val().split("\\").pop();
          $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
        });
        </script>

      </div>
      
    <!--Doctor Registration Form Closing-->
	
@endsection