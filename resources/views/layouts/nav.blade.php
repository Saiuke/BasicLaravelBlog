
<header class="blog-header py-3">
  <div class="row flex-nowrap justify-content-between align-items-center">
    <br>
    <div class="col-4 pt-1">
      @if (Auth::check())
          <a class="text-dark" href="#">Welcome {{Auth::user()->name}}</a>
      @else
           <a class="text-muted" href="/register">Subscribe</a>
      @endif
      
    </div>
    <div class="col-4 text-center">
      <a class="blog-header-logo text-dark" href="#">Large</a>
    </div>
    <div class="col-4 d-flex justify-content-end align-items-center">
      <a class="text-muted" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mx-3"><circle cx="10.5" cy="10.5" r="7.5"></circle><line x1="21" y1="21" x2="15.8" y2="15.8"></line></svg>
      </a>
      @if (Auth::check())
          <a class="btn btn-sm btn-outline-secondary" href="/logout">Logout</a>
      @else
           <a class="btn btn-sm btn-outline-secondary" href="/login">Login</a>
      @endif
    </div>
  </div>
</header>

<div class="nav-scroller py-1 mb-2">
  <nav class="nav d-flex justify-content-between">
    <a class="p-2 text-muted" href="#">World</a>
    <a class="p-2 text-muted" href="#">U.S.</a>
    <a class="p-2 text-muted" href="#">Technology</a>
    <a class="p-2 text-muted" href="#">Design</a>
    <a class="p-2 text-muted" href="#">Culture</a>
    <a class="p-2 text-muted" href="#">Business</a>
    <a class="p-2 text-muted" href="#">Politics</a>
    <a class="p-2 text-muted" href="#">Opinion</a>
    <a class="p-2 text-muted" href="#">Science</a>
    <a class="p-2 text-muted" href="#">Health</a>
    <a class="p-2 text-muted" href="#">Style</a>
    <a class="p-2 text-muted" href="#">Travel</a>
  </nav>
</div>