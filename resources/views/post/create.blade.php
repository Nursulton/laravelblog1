@extends('layout.blank')




@section('content')
<h1>First a Post</h1>
<hr>
<form class="form-horizontal" method="post" action="/post">
{{csrf_field()}}
  <div class="form-group">
    
    <div class="col-sm-10">
      <input type="text" class="form-control"  name="title">
    </div>
  </div>
  <h3>Body</h3>
  <div class="form-group">
    <div class="col-sm-10" >
      <textarea name="body" class="form-control" rows="3" ></textarea>
    </div>
  </div>
 
  <div class="form-group">
    <div class="col-sm-offset-2 col-sm-10">
      <button type="submit" class="btn btn-default">Publsh</button>
    </div>
  </div>
</form>


@endsection