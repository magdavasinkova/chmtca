@extends ('layouts.master')

@section ('content')

    <h1 class="cover-heading">Better things are coming!</h1>
        <p class="lead">We are working on new and exciting ways of getting people together for their home improvements. Stay tuned and subscribe bellow to our email list.</p>
        <form method="POST" action="/">
            {{csrf_field()}}
            <p>
                <input type="email" name="email" class="form-control" placeholder="Email address" required autofocus>
            </p>
            <p class="lead">
                <button type="submit" class="btn btn-lg btn-default">Subscribe</button>
            </p>
            @if (count($errors))
            <div class="form-group">
                <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)

                     <li>{{$error}}</li>

                    @endforeach
                 </ul>
                </div> 
            </div>
            @endif
        </form> 
@endsection