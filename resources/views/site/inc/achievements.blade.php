<section class="achievements">
    <h2>Выберите категорию</h2>
    <div class="achievements__row">
        <div class="achievements__row-cards">
            @foreach ($category as $post)
            <a href="{{ route('product_category', [$post->id, $post->name_category]) }}"   class="achievement">
                @if(str_starts_with($post->path, 'https://'))
                    <img src="{{$post->path}}"/>
                @else
                    <img src="{{ asset('product/' . $post->path) }}"/>
                @endif
                <span>{{$post->name_category}}</span>
            </a>
            @endforeach

        </div>


        <button class="achievements-arrow">
            <img src="{{ asset('site/assets/images/dropdown.svg')}}" />
        </button>
        <button class="achievements-arrow-left ">
            <img src="{{ asset('site/assets/images/dropdown.svg')}}" />
        </button>
    </div>
    <div class="achievements-dots"></div>
</section>
