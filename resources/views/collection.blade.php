<div style="max-width: 900px; margin: 0 auto; padding: 2rem;">
    <h1>Koleksi Saya</h1>

    <p><a href="/app/dashboard">Dashboard</a></p>

    @if ($books->isEmpty())
        <p>Belum ada buku di koleksi kamu.</p>
    @else
        <ul>
            @foreach ($books as $book)
                <li>
                    <a href="{{ route('z-bookdetails', ['specialbookid' => $book->specialbookid]) }}">
                        {{ $book->bookname }}
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
</div>
