<header
    class="sticky top-0 flex h-20 items-center justify-between border-b-[1px] border-black px-8 py-2 shadow-xl backdrop-blur">

    <img src="/assets/logo_transparency.png" alt="logo" class='h-12 w-12'>

    <nav class='flex items-center gap-8 font-semibold tracking-wider [&_a:hover]:text-sky-500'>

        <a class="" href="{{ route('blog.index') }}">Blogs</a>
        <a class="" href="{{ route('about') }}">About</a>

        {{-- TODO: WTF  --- FT was here :)  Fixed!    --}}
        <div class="pointer-events-none h-6 w-[1px] bg-black/20 dark:bg-white/20"></div>

        @auth
            <a href="{{ url('/dashboard') }}" class="">
                Dashboard
            </a>
            {{-- TODO: Add a logout route --}}
        @else
            <a href="{{ route('login') }}" class="">
                Log in
            </a>

            <a href="{{ route('register') }}" class="">
                Register
            </a>
        @endauth
    </nav>
</header>
