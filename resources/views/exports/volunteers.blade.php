<table class="table table-striped table-hover">
    <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">voter_id</th>
          <th scope="col">Name</th>
          <th scope="col">Mobile no</th>
          <th scope="col">Email</th>
          <th scope="col">Whatsapp Number</th>
          <th scope="col">Facebook Id</th>
          <th scope="col">Twitter Id</th>
          <th scope="col">address</th>
          <th scope="col">Ward #</th>
          <th scope="col">Assembly Constituency</th>
          <th scope="col">Parliament Seat</th>
          <th scope="col">State</th>
          <th scope="col">Contribution Options</th>
          <th scope="col">About Yourself</th>
          <th scope="col">File Uploaded</th>
          {{-- <th scope="col">Download</th> --}}
        </tr>
      </thead>
      <tbody>
        @foreach($volunteers as $volunteer)
            <tr>
                <td>{{ $volunteer->id }}</td>
                <td>{{ $volunteer->voter_id }}</td>
                <td>{{ $volunteer->name }}</td>
                <td>{{ $volunteer->mobile_no }}</td>
                <td>{{ $volunteer->email }}</td>
                <td>{{ $volunteer->whatsapp_no }}</td>
                <td>{{ $volunteer->facebook_id }}</td>
                <td>{{ $volunteer->twitter_id }}</td>
                <td>{{ $volunteer->address }}</td>
                <td>{{ $volunteer->ward_name_no }}</td>
                <td>{{ $volunteer->assembly_constituency }}</td>
                <td>{{ $volunteer->parliament_seat}}</td>
                <td>{{ $volunteer->state }}</td>
                <td>{{ $volunteer->contribute_options }}</td>
                <td>{{ $volunteer->about_yourself}}</td>
                <td><a class="btn btn-outline-info" href="{{ asset('storage/' . $volunteer->file_path) }}">View File</a></td>
                <!-- Add more table cells for other fields as needed -->
            </tr>
        @endforeach
    </tbody>
</table>

