@extends('layouts.app')
@section('main')
    <div class="container py-8">
        <form action="{{ url("care/$cares->id") }}" method="POST" style="margin-top: 90px">
            <!-- Name input -->
            @csrf
            @method('PUT')
            <div class="form-outline mb-4">
                <label class="form-label" for="form4Example1">Product</label>
                <input type="text" name="product" id="form4Example1" class="form-control" value="{{ old('product' ,$cares->product) }}" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form4Example1">Price</label>
                <input type="text" name="price" id="form4Example1" class="form-control" value="{{ old('price', $cares->price) }}" />
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" for="form4Example1">Stock</label>
                <input type="number" name="stok" id="form4Example1" class="form-control" value="{{ old('stok', $cares->stok ) }}" />
            </div>

            <label class="form-label" for="customFile">Default file input example</label>
            <input type="file" name="image" class="form-control" id="customFile" value="{{ old('image', $cares->image) }}" />
            @error('image')
            <span class="text-danger">
                {{ $message }}
            </span>
            @enderror
            <!-- Submit button -->
            <br><br>
            <button type="submit" class="btn btn-primary btn-block mb-4">Send</button>
        </form>
    </div>
@endsection
