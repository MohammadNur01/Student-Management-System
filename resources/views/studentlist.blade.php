<div class="card mb-3">
  <img width="400" src="https://www.ei-ie.org/img/Future-of-work-in-education.jpg?p=card" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List Student</h5>
    <p class="card-text">You can find here all the informations about students in system.</p>
  </div>
  <table class="table table-striped">
    <thead class="thead-light">
      <tr>
        <th scope="col">CNE</th>
        <th scope="col">First Name</th>
        <th scope="col">Second Name</th>
        <th scope="col">Age</th>
        <th scope="col">Speciality</th>
        <th scope="col">Operations</th>
      </tr>
    </thead>
    <tbody>
        @foreach($students as $student)
            <tr>
                <th>{{ $student->cne }}</th>
                <td>{{ $student->firstName }}</td>
                <td>{{ $student->secondName }}</td>
                <th>{{ $student->age }}</th>
                <td>{{ $student->speciality }}</td>
                <td>
                    <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <a href="{{ url('/delete/'.$student->id) }}" class="btn btn-sm btn-danger">Delete</a>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>


</div>



   
