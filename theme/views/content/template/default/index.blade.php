<div class="posts">
        @foreach ( $posts as $post )

         <div class="post">
         {{--   <{{ get_theme_setting('content.general.postTitle.size') }} class="post-title"><a class="post-title-link" href="/{{ $post->type->slug }}/{{ $post->slug }}">{{ $post->title }}</a></{{ get_theme_setting('content.general.postTitle.size') }}>

            <div class="post-meta">
                <div class="post-meta-detail">
                    Posted on {{ $post->created_at->format('Y-m-d') }} by {{ $post->author->username }}
                </div>
            </div>
            @if($post->featuredimage && !empty(get_theme_setting('content.general.featuredImage.indexPageHeight')))
                <a class="post-image-link" href="/{{ $post->type->slug }}/{{ $post->slug }}">
                    <div class="post-featured-image" style='background-image: url({{ $post->featuredimage->original }});'></div>
                </a> --}}


                {{-- VEC POSTOJECI KOMENTAR OD RANIJE <img src="{{ $post->featuredimage->original }}" class="img-responsive" alt=""> --}}
            {{-- @elseif($post->featuredimage && empty(get_theme_setting('content.general.featuredImage.indexPageHeight')))
                <img src="{{ $post->featuredimage->original }}" class="post-featured-image img-responsive" alt="">
            @endif

            <div class="post-excerpt">
                {{ get_excerpt($post, get_theme_setting('content.general.excerptLength')) }}
            </div>

            <div class="post-footer">
                <div class="post-meta-detail">
                    <div class="post-taxonomy">
                        @taxonomy([
                            'taxonomy' => 'Tags',
                            'post' => $post,
                            'commaSeparate' => false
                        ]) @endtaxonomy
                    </div>
                </div>
                <a class="post-read-more" href="/{{ $post->type->slug }}/{{ $post->slug }}">Read More</a>
            </div>
        </div> --}}

        <!-- Content image -->
        @if($post->featuredimage && !empty(get_theme_setting('content.general.featuredImage.indexPageHeight')))
            <a class="post-image-link" href="/{{ $post->type->slug }}/{{ $post->slug }}">
                <div class="post-featured-image" style='background-image: url({{ $post->featuredimage->original }});'></div>
            </a>
            {{-- <img src="{{ $post->featuredimage->original }}" class="img-responsive" alt=""> --}}
        @elseif($post->featuredimage && empty(get_theme_setting('content.general.featuredImage.indexPageHeight')))
            <img src="{{ $post->featuredimage->original }}" class="post-featured-image img-responsive" alt="">
        @endif
        <!-- Post section -->
        <section class="mx-auto py-24 w-70">
            <a class="bg-orange-400 hover:bg-orange-300 hover:text-white py-2 px-3 rounded-md text-white uppercase" style="text-decoration: none;"
                href="#">Inspiration</a>
            <p class="pt-6 text-4xl md:text-5xl lg:text-6xl font-serif font-semibold text-gray-800 leading-tight">Five
                Romantic Countries to
                Visit</p>
            <div class="flex flex-col sm:flex-row sm:items-center">
                <p class="pt-6 text-lg lg:text-2xl text-gray-500">Posted on October 16, 2018 &nbsp;
                </p>
                <p class="sm:pt-6 text-lg lg:text-2xl text-gray-500">
                    &bull;
                    &nbsp; by
                    <a class="text-green-400 hover:text-green-500" style="text-decoration: none;" href="#">John Wood</a>
                </p>
            </div>
            <p class="pt-12 text-gray-600 tracking-normal text-2xl">A romantic journey is the best way to fill your
                relationship with a loved one with new feelings and vivid
                emotions. This journey will leave only pleasant impressions, and, perhaps, will be the beginning of a
                new stage of your life together.</p>
            <p class="pt-12 text-2xl md:text-4xl lg:text-4xl font-serif font-semibold text-gray-800 leading-tight">
                Holidays in Spain
            </p>
            <p class="pt-6 text-gray-600 tracking-normal text-2xl">
                Many couples in love choose Spain as a place for solemn registration of marriage or a honeymoon. This
                country attracts attention with its hot sun and beautiful beaches. Spain is known for its small cozy
                towns, endless coastline, palm trees, orange gardens, and fascinating history of the state itself. The
                city of Madrid, which is the capital of Spain, is an ideal place for the best honeymoon.<br><br>

                Spain is also a country of contrasts. Noisy Ibiza will be great for lovers of outdoor activities and
                sleepless nights; Port de Pollen?a will become a paradise for those who want to relax and to spend
                romantic evenings together. Barcelona is famous for its sights. The city has a huge number of
                comfortable hotels with rooms for lovebirds and newlyweds. Spain is one of the oldest countries in
                Europe. So, it always has something to tell you!
            </p>
            <p class="pt-12 text-3xl md:text-4xl lg:text-5xl font-serif font-semibold text-gray-800 leading-tight">
                Holidays in Italy
            </p>
            <p class="pt-6 pb-12 text-gray-600 tracking-normal text-2xl">
                Italy is a favorite holiday destination for lovers. After all, it is the birthplace of Romeo and Juliet.
                It was in this country, in Verona, that the loving-tragic events of the famous play took place. Everyone
                can visit the courtyard at Juliet`s house and even watch a theatrical performance. Every year in Verona,
                on the eve of St. Valentine`s Day, the festival Verona In Love is held. These events are certainly
                connected with the tragedy of Shakespeare. Part of the city is decorated with illumination in the form
                of large and small hearts. There are performances, food and wine tastings, and fairs on the streets.
            </p>
            <a class="text-gray-500 border border-gray-400 hover:border-gray-500 rounded-full px-6 py-3" style="text-decoration: none;" href="#">Read
                More</a>
        </section>
</div>
        @endforeach
    </div>
    {{ $posts->links() }}
