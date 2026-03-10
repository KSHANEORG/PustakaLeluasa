<link rel="stylesheet" href="/css/index.css">
 <div class="header-container">
                   <h1 class="leftys">PUSTAKA LELUASA</h1> 
                       <nav style="display: flex; justify-content: flex-end; gap: 1rem; margin-bottom: 1.5rem;">
        @auth
            <a href="/app/dashboard">Dashboard</a>
            <a href="{{ route('collection.index') }}">Koleksi Saya</a>
        @else
            <a href="{{ url('/app/login') }}">Login</a>
            <a href="{{ url('/app/register') }}">Sign up</a>
        @endauth
    </nav>
               </div>
<div style="max-width: 1100px; margin: 0 auto; padding: 2rem;">

    @if (session('status'))
        <p>{{ session('status') }}</p>
    @endif

    <div style="display: grid; grid-template-columns: 320px 1fr; gap: 2rem;">
        <img src="{{ asset($book->imageurl) }}" alt="{{ $book->bookname }}" style="width: 100%; border-radius: 12px;">

        <div>
            <h1 style="font-size: 2rem; font-weight: 700; margin-bottom: 0.75rem;">{{ $book->bookname }}</h1>
            <p style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Rp {{ number_format($book->price) }}</p>
            <p style="line-height: 1.7;">{{ $book->description }}</p>
            <a style=color:red href="{{ "https://wa.me/6285379426392?text=I'm%20interested%20in%20your%20BOOK%20for%20sale%20".$book->bookname }}" target="_blank">Hubungi</a>

            @auth
                <form method="POST" action="{{ route('collection.add', ['specialbookid' => $book->specialbookid]) }}" style="margin-top: 0.75rem;">
                    @csrf
                    <button class=btn-17 type="submit">Tambah ke Koleksi</button>
                </form>
            @else
                <p style=color:red><a href="{{ url('/app/login') }}">Login untuk tambah ke koleksi</a></p>
            @endauth
        </div>
    </div>
</div>
