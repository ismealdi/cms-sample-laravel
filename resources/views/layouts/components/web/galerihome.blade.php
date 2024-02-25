


<div class="content py-5" style="background: whitesmoke;">
  
  <div class="section-title res-991-pt-30 container">
        <h2 class="title text-center">Galeri Kegiatan </h2>
    </div>
        <div class="container owl-2-style ">
         
        <div class="owl-carousel owl-2">
          @foreach(\App\Models\Galeri::all() as $images)
          <div class="media-29101">
            <a href="/galeri/"><img src="{{ asset('storage/galeri/'.$images->image) }}" alt="Image" class="img-fluid"></a>
            <h3><a href="/galeri/">{{ $images->name }}</a></h3>
          
          </div>
          @endforeach
        </div>

      </div>
   
   
  </div>
</div>
