<section class="blog_container">
    <h3 class="blog_container-label">Блог</h3>
    <div class="blog_container_list">
        @php
        use App\Models\Blog;
        $blog = Blog::all();

        @endphp
        @if($blog->count() > 0)
    @foreach($blog->sortByDesc('created_at')->take(4) as $post)
        <div class="blog_container_list-item">
            <img src="{{ asset('site/assets/images/header_BG.png')}}" />
            <div class="blog_container_list-item-info">
                <label class="blog_container_list-item-info-label">{{$post->name_post}}</label>
                <div class="blog_container_list-item-info-footer">
                    <?php
                        $monthNames = [
                            'January' => 'Январь',
                            'February' => 'Февраль',
                            'March' => 'Март',
                            'April' => 'Апрель',
                            'May' => 'Май',
                            'June' => 'Июнь',
                            'July' => 'Июль',
                            'August' => 'Август',
                            'September' => 'Сентябрь',
                            'October' => 'Октябрь',
                            'November' => 'Ноябрь',
                            'December' => 'Декабрь'
                        ];

                        $date = \Carbon\Carbon::parse($post->created_at);
                        $monthName = $monthNames[$date->format('F')];
                        echo $date->format('j')  . ' ' . $monthName;
                    ?>
                    <a href="{{ route('blog', [$post->id, $post->name_post]) }}" class="blog_container_list-item-info-footer-button">Подробнее</a>
                </div>
            </div>
            <span class="blog_container_list-item-popup">Онлайн курсы по маркетингу</span>
        </div>
    @endforeach
@else
    <p>Нет постов для отображения.</p>
@endif

    </div>
</section>
