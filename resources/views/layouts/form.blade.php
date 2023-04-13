İletişim sayfası
<hr>
<form action="{{route('contact')}}" method="POST">
    @csrf
    @method('post')
    <div class="mb-3">
        <label for="name" class="form-label">Email address</label>
        <input type="text" id="name" name="name" placeholder="Please enter your name ..."
               class="form-control @error('name') is-invalid @enderror">
        @error('name')
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
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
