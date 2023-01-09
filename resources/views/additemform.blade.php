
@extends('layouts.app')

@section('content')
<div class="container">

    <form>
        <div class="form-group">
          <label for="name">name</label>
          <input type="text" class="form-control" id="name" placeholder="name">
        </div>

        <div class="form-group">
          <label for="price">price</label>
          <input type="text" class="form-control" id="price" placeholder="price">
        </div>

        <div class="form-group">
          <label for="avalable">avalable</label>
          <select class="form-select" aria-label="Default select example" id="avalable">
            <option selected>avalablity</option>
            <option value="1">yes</option>
            <option value="0">no</option>
          </select>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
</div>
@endsection

