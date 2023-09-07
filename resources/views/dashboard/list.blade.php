@extends('layouts.dashboard')
@section('content')

<div class="row w-75 mb-5">
  <form class="d-flex" role="search">
    <input class="form-control me-2" name="search" type="search" placeholder="Search by Name or voter Id" aria-label="Search" value="{{$search}}">
    <button class="btn btn-outline-success" type="submit">Search</button>
  @if ($search)
      <!-- If $search is true, show the button -->  <a href={{route('dashboard.list')}} >
      <button class="ms-2 btn btn-outline-danger" type="button">Reset</button></a>
  {{-- @else
      <!-- If $search is false, hide the button -->
      <button class="btn btn-outline-danger" type="reset" style="display: none;">Reset</button> --}}
  @endif
  </form>
</div>

<table class="table table-striped table-hover">
    <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Name</th>
          <th scope="col">Voter ID</th>
          <th scope="col">Number</th>
          <th scope="col">Email</th>
          <th scope="col">View uploads</th>
          <th scope="col">Download</th>
        </tr>
      </thead>
      <tbody>
        @foreach($volunteers as $volunteer)
            <tr>
              <td> <a href="{{ url('/volunteer/' . $volunteer->id) }}">{{ $volunteer->id }} </a> </td>
              <td>{{ $volunteer->name }}</td>
                <td>{{ $volunteer->voter_id }}</td>
                <td>{{ $volunteer->mobile_no }}</td>
                <td>{{ $volunteer->email }}</td>
                <td> <a href="{{ asset('storage/' . $volunteer->file_path) }}" target="_blank">
                  uploads
              </a></td>
                <td><a href="{{ route('exportSingleVolunteer', ['id' => $volunteer->id]) }}" class="btn btn-outline-success">Download Entry</a>
                </td>
            </tr>
        @endforeach
      
        
      </tbody>
  </table>
  
<div class="w-75 d-flex justify-content-between">
  @if (empty($search))

  <div class="pagination-container">
    <ul class="pagination">
        <li class="page-item {{ $volunteers->onFirstPage() ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $volunteers->previousPageUrl() }}" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
            </a>
        </li>

        @for ($i = 1; $i <= $volunteers->lastPage(); $i++)
            <li class="page-item {{ $i == $volunteers->currentPage() ? 'active' : '' }}">
                <a class="page-link" href="{{ $volunteers->url($i) }}">{{ $i }}</a>
            </li>
        @endfor

        <li class="page-item {{ $volunteers->currentPage() == $volunteers->lastPage() ? 'disabled' : '' }}">
            <a class="page-link" href="{{ $volunteers->nextPageUrl() }}" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
            </a>
        </li>
    </ul>
  </div>@endif
  <a class="float-end" href="{{route('list.export')}}"> <button class="mx-auto btn btn-success justify-content-end">Download all entries
  </button></a>


</div>
  @endsection