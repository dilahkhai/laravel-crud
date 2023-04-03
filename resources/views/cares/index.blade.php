@extends('layouts.app')
@section('main')
    <div class="container py-5">
        <!-- First Row [Prosucts]-->
        <h2 class="font-weight-bold mb-2" style="margin-top: 20px">From the Shop</h2>
        <p class="font-italic text-muted mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt.</p>
        <a href="{{ url('care/data/create') }}" class="btn btn-primary">add</a>
        <br>
        <br>
        <div class="row">
            @foreach ($cares as $item)
                <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                    <div class="card">
                        <div class="card-body">
                            <img src="imagecare/{{ $item->image }}" class="card-img-top" alt="...">
                            <h5 class="card-title">{{ $item->product }}</h5>
                            <p style="color:darkgrey">{{ $item->stok }} pcs</p>
                            <h5 style="color:deepskyblue">IDR {{ $item->price }}</h5>
                            <form action="{{ url("/care/$item->id") }}" method="POST" >
                                @csrf
                                @method('DELETE')
                                <a class="btn btn-primary" href="{{ url("/care/$item->id/edit") }}" style="text-decoration:none; border-style: none;">edit</a>
                                <button type="submit" class="btn btn-danger" onclick="return confirm ('Are You Sure You Want To Delete Data?')" style="border-style: none;">delete</button>
                            </form>
                        </div>
                    </div>
                    <br>
                </div>
            @endforeach
        </div>
    </div>
@endsection
