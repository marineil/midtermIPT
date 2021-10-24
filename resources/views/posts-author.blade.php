@extends('base')

@section('content')
<br><br><br>
<div class="container">
  <h1 class="text-white pt-2 pb-2">Post by {{$user->name}}</h1>
  <hr>
  @foreach($posts as $p)
  @if ($p->user->gender == 'Male')
  <div class="card m-1 mb-3 pb-3 pt-3" style="background-color: lightblue">
  @else
  <div class="card m-1 mb-3 pb-3 pt-3" style="background-color: lightpink">
  @endif
    <div class="card-body">
      <div class="dropdown float-end">
        <button class="btn dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
          <i class="fas fa-list"></i> {{$p->category->category}}
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
            @foreach(App\Models\User::whereHas('posts', function($query) use ($p){
                $query->where('category_id', $p->category_id);
                })->get() as $u)
                <li><a class="dropdown-item" href="/authors/{{$u->id}}">{{$u->name}}</a></li>
            @endforeach
        </ul>
      </div>
      <h5 class="card-title pb-3"><i class="fas fa-user"></i> {{$p->user->name}}</h5>
      <p class="card-text bg-white p-3" style="border-radius: 10px;">{{$p->post}}</p>
    </div>
  </div>
  @endforeach
  
</div>
    
@endsection

