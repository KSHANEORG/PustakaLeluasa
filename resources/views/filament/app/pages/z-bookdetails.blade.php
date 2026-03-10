<div style="max-width: 1100px; margin: 0 auto; padding: 2rem;">
    <nav style="display: flex; justify-content: flex-end; gap: 1rem; margin-bottom: 1.5rem;">
        @auth
            <a onclick="history.back();">Dashboard</a>
        @else
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ url('/app/register') }}">Sign up</a>
        @endauth
    </nav>

    <div style="display: grid; grid-template-columns: 320px 1fr; gap: 2rem;">
        <img src="{{ asset($book->imageurl) }}" alt="{{ $book->bookname }}" style="width: 100%; border-radius: 12px;">

        <div>
            <h1 style="font-size: 2rem; font-weight: 700; margin-bottom: 0.75rem;">{{ $book->bookname }}</h1>
            <p style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Rp {{ number_format($book->price) }}</p>
            <p style="line-height: 1.7;">{{ $book->description }}</p>
        </div>
    </div>
</div>
