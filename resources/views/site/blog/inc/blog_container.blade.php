<section class="product_container">
    <div class="product_container_header">
        <h1>{{$blog->name_post}}</h1>

    </div>
    <div class="product_container_main">
        <div class="product_container_main-gallery">

            <span class="gallery-previous"></span>
            <span class="gallery-next"></span>
            <div class="gallery">
                @foreach(explode(',', $blog->path_img_post) as $img)
                    <img src="{{$img}}">
                @endforeach
            </div>
            <div class="gallery_footer">

            </div>
        </div>
        <div class="product_container_main-info">
                {!! $blog->content_blog !!}
        </div>

</section>
