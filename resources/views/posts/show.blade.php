@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <!-- Latest Posts -->
      <main class="post blog-post col-lg-8"> 
        <div class="container">
          <div class="post-single">
            <div class="post-thumbnail"><img src="{{ Voyager::image($post->image) }}" alt="..." class="img-fluid"></div>
            <div class="post-details">
              <div class="post-meta d-flex justify-content-between">
                <div class="category"><a href="#">{{ $post->category->name or ''}}</a></div>
              </div>
              <h1>{{ $post->title }}<a href="#"><i class="fa fa-bookmark-o"></i></a></h1>
              <div class="post-footer d-flex align-items-center flex-column flex-sm-row"><a href="#" class="author d-flex align-items-center flex-wrap">
                  <div class="avatar"><img src="{{ Voyager::image($post->author->avatar) }}" alt="..." class="img-fluid"></div>
                  <div class="title"><span>{{ $post->author->name or 'Author' }}</span></div></a>
                <div class="d-flex align-items-center flex-wrap">       
                  <div class="date"><i class="icon-clock"></i>{{ $post->created_at->diffForHumans() }}</div>
                  <div class="views"><i class="icon-eye"></i>500</div>
                  <div class="comments meta-last"><i class="icon-comment"></i><span class="disqus-comment-count" data-disqus-url="{{ URL::to("/") .'/'. $post->slug }}"></span></div>
                </div>
              </div>
              <div class="post-body">
                {!! $post->body !!}
              </div>
              <div class="post-tags">
                <a href="#" class="tag">#Business</a>
                <a href="#" class="tag">#Tricks</a>
                <a href="#" class="tag">#Financial</a>
                <a href="#" class="tag">#Economy</a>
              </div>

              <div class="posts-nav d-flex justify-content-between align-items-stretch flex-column flex-md-row">
                @isset ($prev)
                  <a href="{{ URL::to( 'post/' . $prev->slug ) }}" class="prev-post text-left d-flex align-items-center">
                    <div class="icon prev">
                      <i class="fa fa-angle-left"></i>
                    </div>
                    <div class="text"><strong class="text-primary">Artikel Sebelumnya </strong>
                      <h6>{{ $prev->title }}</h6>
                    </div>
                  </a>
                @endisset
                @isset ($next)
                  <a href="{{ URL::to( 'post/' . $next->slug ) }}" class="next-post text-right d-flex align-items-center justify-content-end">
                    <div class="text"><strong class="text-primary">Artikel Selanjutnya </strong>
                      <h6>{{ $next->title }}</h6>
                    </div>
                    <div class="icon next">
                      <i class="fa fa-angle-right"></i>
                    </div>
                  </a>
                @endisset
              </div>
              
              <div class="post-comments">
                <header>
                  {{-- <h3 class="h6">Post Comments<span class="no-of-comments">(3)</span></h3> --}}
                  <h3 class="h6">Komentar
                    (<span class="no-of-comments disqus-comment-count" data-disqus-url="{{ URL::to("/") .'/'. $post->slug }}"></span> )
                  </h3>
                </header>
                <div class="comment">
                  @include('partials._disqus-comments')
                </div>
              </div>

            </div>
          </div>
        </div>
      </main>
      <aside class="col-lg-4">
        <!-- Widget [Search Bar Widget]-->
        <div class="widget search">
          <header>
            <h3 class="h6">Cari artikel..</h3>
          </header>
          <form action="#" class="search-form">
            <div class="form-group">
              <input placeholder="Apa yang anda cari?" type="search">
              <button type="submit" class="submit"><i class="icon-search"></i></button>
            </div>
          </form>
        </div>
        <!-- Widget [Latest Posts Widget]-->
          @include('partials._latest_post-panel')
        <!-- Widget [Latest Posts Widget]-->
        
        <!-- Widget [Categories Widget]-->
          @include('partials._category-panel')
        <!-- Widget [Categories Widget]-->
      </aside>
    </div>
  </div>
@endsection