<x-app-layout>
    <article class="blogs-heading">
        <h1>Blogs</h1>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex aliquid laudantium, ipsam</p>
    </article>
    <section class="all-blogs">
        <ul>
            @foreach ($blogs as $blog)
                <li class='blog-card'>
                    <img src="/assets/filler.jpg" alt="">
                    <div>
                        <h2>{{ $blog->title }}</h2>
                        <p tabindex="0">{{ Str::words($blog->content, 30) }}</p>
                    </div>
                    <a href="{{ route('blog.show', $blog) }}">
                        <span>Read</span>
                        <span><svg xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path
                                    d="M470.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L402.7 256 265.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160zm-352 160l160-160c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L210.7 256 73.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0z" />
                            </svg></span>
                    </a>
                </li>
            @endforeach

        </ul>
    </section>
</x-app-layout>
