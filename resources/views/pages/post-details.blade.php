@extends("layouts.main")
@section("content")
<div class="py-4"></div>
<section class="section">
  <div class="container">
    <div class="row justify-content-center">
      <div class=" col-lg-9   mb-5 mb-lg-0">
        <article>
          <div class="post-slider mb-4">
            <img src="{{ asset("images/post/post-2.jpg") }}" class="card-img" alt="post-thumb">
          </div>

          <h1 class="h2">{{ $post->title }} </h1>
          <ul class="card-meta my-3 list-inline">
            <li class="list-inline-item">
              <a href="author-single.html" class="card-meta-author">
                <img src="images/john-doe.jpg">
                <span>Patrick Ngoy</span>
              </a>
            </li>
            <li class="list-inline-item">
              <i class="ti-timer"></i>2 min
            </li>
            <li class="list-inline-item">
              <i class="ti-calendar"></i>{{ $post->created_at }}
            </li>
            <li class="list-inline-item">
              <ul class="card-meta-tag list-inline">
                <li class="list-inline-item"><a href="tags.html">Color</a></li>
                <li class="list-inline-item"><a href="tags.html">Recipe</a></li>
                <li class="list-inline-item"><a href="tags.html">Fish</a></li>
              </ul>
            </li>
          </ul>
          <div class="content">
            <p>
                {{ $post->description }}
            </p>
        </div>
        </article>

      </div>


    </div>
  </div>
</section>

@endsection
