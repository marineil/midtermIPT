<div class="container">
    <h1>IPT102 System Project</h1>

    <div>
        <h3>Welcome {{$user->name}}!</h3>

        <p>
            This email is sent through our web application. click the link below 
            for verification..
        </p>
    </div>
    <p>
        <a href="{{url('/verification/' . $user->id . '/' . $user->remember_token)}}" class="btn btn-primary form-control">
            Verify Account
        </a>
    </p> 
</div>