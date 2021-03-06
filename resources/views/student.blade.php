<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Student Management System</title>
  </head>
  <body>
    @include('navbar')
    <div class="row header-container justify-content-center">
        <div class="header">
            <h1>Student Management System</h1>
        </div>
    </div>
    @if($layout == 'index')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include("studentlist")
                </section>
                <section class="col-md-5">
                    
                </section>
            </div>
        </div>
    @elseif($layout == 'create')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include("studentlist")
                </section>
                <section class="col-md-5">
                    <div class="card mb-3">
                        <img src="http://austinchildrensacademy.org/wp-content/uploads/2014/12/elementary-school-girl.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Enter the new informations of the new student</h5>
                            <form action="{{ url('/store') }}" method="post">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="form-label">CNE</label>
                                    <input type="text" class="form-control" id="cne" name="cne" placeholder="Enter cne">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">First Name</label>
                                    <input type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter the first name">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Second Name</label>
                                    <input type="text" class="form-control" id="secondName" name="secondName" placeholder="Enter the second name">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Age</label>
                                    <input type="text" class="form-control" id="age" name="age" placeholder="Enter the age">
                                </div>
                                <div class="form-group mb-3">
                                    <label class="form-label">Speciality</label>
                                    <input type="text" class="form-control" id="speciality" name="speciality" placeholder="Enter the speciality">
                                </div>
                                <input type="submit" class="btn btn-info" value="Save">
                            </form>
                        </div>
                    </div>
                    
                    
                </section>
            </div>
        </div>
    @elseif($layout == 'show')
        <div class="container-fluid mt-4">
            <div class="row">
                <section class="col-md-7">
                    @include("studentlist")
                </section>
                <section class="col-md-5">
                    
                </section>
            </div>
        </div>
    @elseif($layout == 'edit')
    <div class="container-fluid mt-4">
        <div class="row">
            <section class="col-md-7">
                @include("studentlist")
            </section>
            <section class="col-md-5">

                <div class="card mb-3">
                    <img src="http://austinchildrensacademy.org/wp-content/uploads/2014/12/elementary-school-girl.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Update informations of student</h5>
                      <form action="{{ url('/update/' . $student->id) }}" method="post">
                        @csrf
                        <div class="form-group mb-3">
                            <label class="form-label">CNE</label>
                            <input value="{{ $student->cne }}" type="text" class="form-control" id="cne" name="cne" placeholder="Enter cne">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">First Name</label>
                            <input value="{{ $student->firstName }}" type="text" class="form-control" id="firstName" name="firstName" placeholder="Enter the first name">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Second Name</label>
                            <input value="{{ $student->secondName }}" type="text" class="form-control" id="secondName" name="secondName" placeholder="Enter the second name">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Age</label>
                            <input value="{{ $student->age }}" type="text" class="form-control" id="age" name="age" placeholder="Enter the age">
                        </div>
                        <div class="form-group mb-3">
                            <label class="form-label">Speciality</label>
                            <input value="{{ $student->speciality }}" type="text" class="form-control" id="speciality" name="speciality" placeholder="Enter the speciality">
                        </div>
                        <input type="submit" class="btn btn-info" value="Update">
                    </form>
                    </div>
                </div>
               
            </section>
        </div>
    </div>
    @endif

    <footer>

    </footer>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>