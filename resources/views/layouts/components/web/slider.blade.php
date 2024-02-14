
 <div id="carouselExample" class="carousel slide carousel-fade">
  <div class="carousel-inner">
    @foreach ($sliders as $slider)
      <div class="carousel-item {{ ($loop->first) ? 'active' : '' }}">
        <img src="{{ asset('storage/sliders/'.$slider->image) }}" class="d-block w-100" alt="...">
      </div>
    @endforeach
  </div>
  @if(count($sliders) > 1)
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
  @endif

  <div class="container" id="slider">
    <div class="carousel-indicators">
      
      @foreach ($sliders as $slider)
      <button type="button" data-bs-target="#carouselExample" data-bs-slide-to="{{ $loop->index }}" class="{{ ($loop->first) ? 'active' : ''}}" aria-current="true"
        aria-label="Slide {{ $loop->index }}"></button>
      @endforeach
    </div>
  </div>
</div>