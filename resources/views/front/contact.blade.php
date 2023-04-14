@extends('front.front')
@section('css')
@endsection

@section('content')

    <form action="{{route('contact')}}" method="POST" class="mx-5">
        İletişim sayfası
        <hr>
        @csrf
        @method('post')
        <div class="mb-3">
            <label for="fullName" class="form-label">Full Name address</label>
            <input type="text" id="fullName" name="fullName" placeholder="Please enter your Full Name ..."
                   class="form-control @error('fullName') is-invalid @enderror">
            @error('fullName')
            <p class="alert alert-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" name="password" placeholder="Please enter your name ..."
                   class="form-control @error('password') is-invalid @enderror">
            @error('password')
            <p class="alert alert-danger">{{$message}}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-outline-secondary">Submit</button>
    </form>

    <hr>

    <form action="{{route('support-form')}}" class="mx-5">
        Support Form
        <hr>
        @csrf

        @method('match')
        <div class="mb-3">
            <label for="fullName" class="form-label">Full Name address</label>
            <input type="text" id="fullName" name="fullName" placeholder="Please enter your Full Name ..."
                   class="form-control @error('fullName') is-invalid @enderror">
            @error('fullName')
            <p class="alert alert-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" name="password" placeholder="Please enter your name ..."
                   class="form-control @error('password') is-invalid @enderror">
            @error('password')
            <p class="alert alert-danger">{{$message}}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-outline-secondary">Submit</button>
    </form>
    <hr>
    <form action="{{route('update')}}" method="post" class="mx-5">
        Method deneme put
        <hr>
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="fullName" class="form-label">Full Name address</label>
            <input type="text" id="fullName" name="fullName" placeholder="Please enter your Full Name ..."
                   class="form-control @error('fullName') is-invalid @enderror">
            @error('fullName')
            <p class="alert alert-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" name="password" placeholder="Please enter your name ..."
                   class="form-control @error('password') is-invalid @enderror">
            @error('password')
            <p class="alert alert-danger">{{$message}}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-outline-secondary">Submit</button>
    </form>


    <hr>
    <form action="{{route('updateAll')}}" method="POST" class="mx-5">
        Method deneme patch
        <hr>
        @csrf
        @method('PATCH')
        <div class="mb-3">
            <label for="fullName" class="form-label">Full Name address</label>
            <input type="text" id="fullName" name="fullName" placeholder="Please enter your Full Name ..."
                   class="form-control @error('fullName') is-invalid @enderror">
            @error('fullName')
            <p class="alert alert-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" name="password" placeholder="Please enter your name ..."
                   class="form-control @error('password') is-invalid @enderror">
            @error('password')
            <p class="alert alert-danger">{{$message}}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-outline-secondary">Submit</button>
    </form>
    <hr>
{{--    <form action="{{route('delete')}}" method="POST" class="mx-5">--}}
{{--        Method deneme delete--}}
{{--        <hr>--}}
{{--        @csrf--}}
{{--        @method('delete')--}}
{{--        <div class="mb-3">--}}
{{--            <label for="fullName" class="form-label">Full Name address</label>--}}
{{--            <input type="text" id="fullName" name="fullName" placeholder="Please enter your Full Name ..."--}}
{{--                   class="form-control @error('fullName') is-invalid @enderror">--}}
{{--            @error('fullName')--}}
{{--            <p class="alert alert-danger">{{$message}}</p>--}}
{{--            @enderror--}}
{{--        </div>--}}
{{--        <div class="mb-3">--}}
{{--            <label for="password" class="form-label">Password</label>--}}
{{--            <input type="password" id="password" name="password" placeholder="Please enter your name ..."--}}
{{--                   class="form-control @error('password') is-invalid @enderror">--}}
{{--            @error('password')--}}
{{--            <p class="alert alert-danger">{{$message}}</p>--}}
{{--            @enderror--}}
{{--        </div>--}}
{{--        <button type="submit" class="btn btn-outline-secondary">Submit</button>--}}
{{--    </form>--}}

    <hr>
    <form action="{{route('nameShow')}}" method="POST" class="mx-5">
        where tanımları kullanımı
        <hr>
        @csrf
        @method('post')
        <div class="mb-3">
            <label for="fullName" class="form-label">Full Name address</label>
            <input type="text" id="fullName" name="fullName" placeholder="Please enter your Full Name ..."
                   class="form-control @error('fullName') is-invalid @enderror">
            @error('fullName')
            <p class="alert alert-danger">{{$message}}</p>
            @enderror
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" name="password" placeholder="Please enter your name ..."
                   class="form-control @error('password') is-invalid @enderror">
            @error('password')
            <p class="alert alert-danger">{{$message}}</p>
            @enderror
        </div>
        <button type="submit" class="btn btn-outline-secondary">Submit</button>
    </form>
@endsection

@section('js')
@endsection
