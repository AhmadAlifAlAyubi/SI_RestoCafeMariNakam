@extends('template.main')
 
@section('konten')
<div class="card card-user">
    <div class="image">
        <img src="../assets/img/damir-bosnjak.jpg" alt="...">
    </div>
    <div class="card-body">
        <div class="author">
            <a href="#">
                <img class="avatar border-gray" src="../assets/img/mike.jpg" alt="...">
                <h5 class="title">Admin</h5>
            </a>
            <p class="description">
                @Admin
            </p>
        </div>
        <p class="description text-center">
            "Halo Admin Di Sini"
        </p>
    </div>
</div>
@endsection