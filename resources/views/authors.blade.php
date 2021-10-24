@extends('base')

@section('content')
<br><br><br>
<div class="container">
  <h1 class="text-white pt-2 pb-2">Users</h1>
  <hr>
  @foreach($users as $u)
  @if ($u->gender == 'Male')
  <div class="card m-1 mb-3 pb-3 pt-3" style="background-color: lightblue">
  @else
  <div class="card m-1 mb-3 pb-3 pt-3" style="background-color: lightpink">
  @endif
    <div class="card-body">
      <h5 class="card-title"><i class="fas fa-user"></i> {{$u->name}}</h5>
      <a href="/authors/{{$u->id}}" class="btn">Show Posts <i class="fas fa-angle-double-right"></i></a>
    </div>
  </div>
  @endforeach
  
</div>
    
@endsection

