@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <!-- Latest Posts -->
      <main class="posts-listing col-lg-8"> 
        <div class="container">
          <div class="row">
            <!-- post -->
            @forelse ($posts as $item)
              <div class="post col-xl-6">
                <div class="post-thumbnail"><a href="{{ url('post',$item->slug) }}"><img src="{{ Voyager::image($item->image) }}" alt="..." class="img-fluid"></a></div>
                <div class="post-details">
                  <div class="post-meta d-flex justify-content-between">
                    <div class="date meta-last">{{ $item->created_at->format('d M | Y')}}</div>
                    <div class="category"><a href="#">{{ $item->category->name or '...'}}</a></div>
                  </div><a href="{{ url('post',$item->slug) }}">
                    <h3 class="h4">{{ $item->title }}</h3></a>
                  <p class="text-muted">{{ $item->excerpt }}</p>
                  <footer class="post-footer d-flex align-items-center"><a href="#" class="author d-flex align-items-center flex-wrap">
                      <div class="avatar"><img src="{{ Voyager::image($item->author->avatar) }}" alt="..." class="img-fluid"></div>
                      <div class="title"><span>{{ $item->author->name ?? 'Author' }}</span></div></a>
                    <div class="date"><i class="icon-clock"></i>{{ $item->created_at->diffForHumans() }}</div>
                    <div class="comments meta-last"><i class="icon-comment"></i><span class="disqus-comment-count" data-disqus-url="{{ URL::to("/") .'/'. $item->slug }}"></span></div>
                  </footer>
                </div>
              </div>
            @empty
              <div class="col-md-12 text-center">
                @if (isset($q))
                  <h1>:(</h1>
                  <p>Artikel yang kamu cari tidak ditemukan.</p>
                @else
                  <h1>:|</h1>
                  <p>Belum ada artikel untuk kategori ini.</p>
                @endif
                  <p><a href="{{ url('/post') }}">Lihat semua artikel <i class="fa fa-arrow-right"></i></a></p>
              </div>
            @endforelse
            <!-- post -->
          </div>
          <!-- Pagination -->
          <nav aria-label="Page navigation example">
            <ul class="pagination pagination-template d-flex justify-content-center">
              {{-- <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-left"></i></a></li>
              <li class="page-item"><a href="#" class="page-link active">1</a></li>
              <li class="page-item"><a href="#" class="page-link">2</a></li>
              <li class="page-item"><a href="#" class="page-link">3</a></li>
              <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-right"></i></a></li> --}}
              {{ $posts->appends(compact('category','q'))->links() }}
            </ul>
          </nav>
        </div>
      </main>
      <aside class="col-lg-4">
        <!-- Widget [Search Bar Widget]-->
        <div class="widget search">
          <header>
            <h3 class="h6">Cari artikel..</h3>
          </header>
          <form action="{{ route('post.index') }}" method="get" class="search-form">
            <div class="form-group">
              @if (isset($category))
                <input type="hidden" name="category" value="{{ isset($category) ? $category : '' }}">
              @endif
              <input placeholder="Apa yang anda cari?" type="text" name="q" value="{{ isset($q) ? $q : null }}">
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