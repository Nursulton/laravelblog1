@extends('layout.main')



@section('content')

 
        
          <h3 class="pb-3 mb-4 font-italic border-bottom">
            From the Firehose
          </h3>
          <div class="blog-post">
          @foreach($posts as $post)
          
            <h2 class="blog-post-title"><a href="/post/{{$post->id}}">{!!$post->title!!}</a></h2>
            <p class="blog-post-meta">{!!$post->created_at!!} <a href="#">Mark</a></p>

           {!!$post->body!!}
            @endforeach

          <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
          </nav>

        </div><!-- /.blog-main -->



@endsection