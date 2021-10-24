@extends('base')

@section('content')
<br><br><br>
<div class="container">
    <div class="row mt-5">
        <div class="col-md-4 offset-md-4">
            <div>
                <div>
                    <h1 style="text-align:center;">Login Form</h1>
                </div>
<br>
                <div>
                    <form action="{{url('/login')}}" method="post">
                        {{csrf_field()}}
                        <div class="mb-3">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control" >
                        </div>

                        <div class="mb-3">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control">
                        </div>

                        <button class="btn btn-primary" style="width:120px; height:35px; margin-left:8rem;" type="submit">
                            Login
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@stop