@extends('layouts.headerandfooter')


{{-- section use na korle amader conten upore chole jabe pore tumi akta design error kiss khba so sabdhan 😒😒 --}}

@section('content')

{{-- ji murubbi log in korar por er msg pabe 🫡🫡 --}}

<div class="row" style="justify-content: center">
    <div class="col-4">
        <div class="card-body">

            <div class="">
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Welcome Murubbi 🫡🫡</h4>
                    <p>ID : {{auth()->user()->id}} </p>
                    <p>Name : {{Auth::user()->name}} </p>
                    <p class="mb-0">Email : {{Auth::user()->email}} </p>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
