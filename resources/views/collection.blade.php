<link rel="stylesheet" href="/css/index.css">
 <div class="header-container">
                   <h1 class="leftys">PUSTAKA LELUASA</h1> 
                   <p><a href="/app/dashboard">Dashboard</a></p>
               </div>
<div style="max-width: 900px; margin: 0 auto; padding: 2rem;">   
<h1>Koleksi {{ auth()->user()->name }}</h1>

    @if ($books->isEmpty())
        <p>Belum ada buku di koleksi kamu.</p>
    @else
        <ul>
            @foreach ($books as $book)
                <li>
                    <a class="btn-1" href="{{ route('z-bookdetails', ['specialbookid' => $book->specialbookid]) }}">
                        {{ $book->bookname }}
                    </a>
                </li>
            @endforeach
        </ul>
    @endif
</div>
