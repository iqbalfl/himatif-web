<div class="widget latest-posts">
  <header>
    <h3 class="h6">Artikel Terbaru</h3>
  </header>
  <div class="blog-posts">
    @forelse (App\Post::latestPosts()->paginate(4) as $latpost)
      <a href="{{ url('post',$latpost->slug) }}">
        <div class="item d-flex align-items-center">
          <div class="image"><img src="{{ Voyager::image($latpost->image) }}" alt="..." class="img-fluid"></div>
          <div class="title"><strong>{{ $latpost->title }}</strong>
            <div class="d-flex align-items-center">
              <div class="views"><i class="icon-clock"></i>{{ $latpost->created_at->format('d M Y')}}</div>
              <div class="comments"><i class="icon-comment"></i><span class="disqus-comment-count" data-disqus-url="{{ URL::to("/") .'/'. $latpost->slug }}"></span></div>
            </div>
          </div>
        </div>
      </a>
    @empty
      Belum Ada Artikel
    @endforelse
  </div>
</div>