<link rel="stylesheet" href="/css/index.css">
<?php $book->increment('views') ?>
//===========================================================================
// for inserting data, it is MUCH easier to... just use SQL injection, ngl. 
// I mean, it's not like I care about security or anything, 
// and it is a pain to set up a form just for inserting data into 
// the database. So yeah, SQL injection is the way to go for me.
// what is security? I don't even know her.
// just kidding, I do care about security, but I also don't want 
// to spend time on setting up a form for inserting data into 
// the database. So yeah, SQL injection is the way to go for me.
// <?php // $result = DB::update('UPDATE books SET thing = 9991 WHERE id = ?', [$id]); ?>
// <?php // $result = DB::update($sql); ?>
//===========================================================================

 <div class="header-container">
                   <h1 class="leftys">PUSTAKA LELUASA</h1> 
                       <nav style="display: flex; justify-content: flex-end; gap: 1rem; margin-bottom: 1.5rem;">
        @auth
            <a href="/app/dashboard">Dashboard</a>
            <a href="/app/library">Koleksi Saya</a>
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
// wow commenting is so fun
        <div>
            <h1 style="font-size: 2rem; font-weight: 700; margin-bottom: 0.75rem;">{{ $book->bookname }}</h1>
            <p style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Rp {{ number_format($book->price) }}</p>
                        <p style="font-size: 1rem; margin-bottom: 1rem;">Views: {{ number_format($book->views) }}</p>
            <p style="line-height: 1.7;">{{ $book->description }}</p>
            <a style=color:red href="{{ "https://wa.me/6285379426392?text=I'm%20interested%20in%20your%20BOOK%20for%20sale%20".$book->bookname }}" target="_blank">Hubungi</a>
// the wonders of comments
            @auth
            @if (auth()->user()->OwnedBooks->contains($book->id))

            // i use UIverse tooltip for this, because it is just so easy to use and it looks good.
            // also because i cant design a tooltip myself.
            <!-- From Uiverse.io by theleaderofenemy --> 
<div class="tooltip-container">
  <span class="text">Buku ini sudah ada di koleksi Anda.</span>
  <span class="tooltip">Cek koleksi di <a href="/app/library" style="color: #fff; text-decoration: underline;">Koleksi Saya</a></span>
</div>
            @else
            // i still dont quite get how this works, but it seems to work fine, so yeah. 
                <form method="POST" action="{{ route('collection.add', ['specialbookid' => $book->specialbookid]) }}" style="margin-top: 0.75rem;">
                    @csrf
                    <button class=btn-17 type="submit">Tambah ke Koleksi</button>
                </form>
            @endif

            @else
            // spooky warning
                <p style=color:red><a href="{{ url('/app/login') }}">Login untuk tambah ke koleksi</a></p>
            @endauth
        </div>
    </div>
</div>
