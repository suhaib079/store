
@extends('layouts.app')

@section('content')
<div class="container" >

    <form method="POST" action="{{ route('postform') }}" >
      @csrf
        <div class="form-group">
          <label for="name">name</label>
          <input required type="text" class="form-control" id="name" placeholder="name" name="name">
        </div>

        <div class="form-group">
          <label for="price">price</label>
          <input required type="text" class="form-control" id="price" placeholder="price" name="price">
        </div>

        <div class="form-group">
          <label for="avalable">avalable</label>
          <select required class="form-select" id="avalable" name="avalable">
            <option selected>avalablity</option>
            <option value="1">yes</option>
            <option value="0">no</option>
          </select>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>


@endsection

