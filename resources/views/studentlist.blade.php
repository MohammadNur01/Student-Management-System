
    <table class="table">
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
                    <td>{{ $srudent->firstName }}</td>
                    <td>{{ $student->secondName }}</td>
                    <th>{{ $student->age }}</th>
                    <td>{{ $student->speciality }}</td>
                    <td>
                        <a href="" class="btn btn-sm btn-info">Show</a>
                        <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <a href="" class="btn btn-sm btn-danger">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
      </table>
