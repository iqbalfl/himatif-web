<div class="widget categories">
	<header>
		<h3 class="h6">Kategori</h3>
	</header>
	@foreach(App\Category::noParent()->get() as $category)
		<div class="item d-flex justify-content-between"><a href="{{ url('/post?category=' . $category->slug) }}">{{ $category->name }}</a><span>{{ $category->total_posts or '0' }}</span></div>
	@endforeach
</div>
