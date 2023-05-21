@extends('welcome')

@section('content')
<div>
    <form>
        <div class="mb-3">
            <label for="nama" class="form-label">Namagit</label>
            <input type="email" class="form-control" id="nama" >
            <div id="nama" class="form-text">We'll never share your email with anyone else.</div>
        </div>
       
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
