<div class="posts">
        @foreach ( $posts as $post )

         <div class="post">
        <!-- Content image -->
        @if($post->featuredimage && !empty(get_theme_setting('content.general.featuredImage.indexPageHeight')))
            <a class="post-image-link" href="/{{ $post->type->slug }}/{{ $post->slug }}">
                <div class="post-featured-image" style='background-image: url({{ $post->featuredimage->original }});'></div>
            </a>
            @elseif($post->featuredimage && empty(get_theme_setting('content.general.featuredImage.indexPageHeight')))
            <img src="{{ $post->featuredimage->original }}" class="post-featured-image img-responsive" alt="">
        @endif
        <!-- Post section -->
        <section class="mx-auto py-24 content-container">
                    <div class="post-meta-detail">
                            <div class="uppercase post-taxonomy">
                                @taxonomy([
                                    'taxonomy' => 'Tags',
                                    'post' => $post,
                                    'commaSeparate' => false
                                ]) @endtaxonomy
                            </div>
                        </div>
                <{{ get_theme_setting('content.general.postTitle.size') }} class="post-title pt-6"><a class="post-title-link" href="/{{ $post->type->slug }}/{{ $post->slug }}">{{ $post->title }}</a></{{ get_theme_setting('content.general.postTitle.size') }}>
            <div class="post-meta">
                <div class="post-meta-detail">
                    <p class="text-gray-500 text-lg lg:text-2xl">Posted on {{ $post->created_at->format('Y-m-d') }} &nbsp; &bull; &nbsp; by &nbsp; </p><p class="text-green-400 hover:text-green-500 text-lg lg:text-2xl">{{ $post->author->username }}</p>
                </div>
            </div>
                <div class="post-excerpt pt-12">
                    {{ get_excerpt($post, get_theme_setting('content.general.excerptLength')) }}
                </div>
            <div class="mt-16">
                <a class="text-gray-500 text-2xl border border-gray-400 hover:border-gray-500 rounded-full px-6 py-3" style="text-decoration: none;" href="/{{ $post->type->slug }}/{{ $post->slug }}">Read
                    More</a>
            </div>
        </section>
</div>
        @endforeach
    </div>
    {{ $posts->links() }}
