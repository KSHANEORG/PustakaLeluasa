<style>
    /* From Uiverse.io by css.btn-17s-io */ 
.btn-17 {
  --color: #000000;
  font-family: inherit;
  display: inline-block;
  width: 8em;
  height: 2.6em;
  line-height: 2.5em;
  margin: 20px;
  position: relative;
  cursor: pointer;
  overflow: hidden;
  border: 2px solid var(--color);
  transition: color 0.5s;
  z-index: 1;
  font-size: 17px;
  border-radius: 6px;
  font-weight: 500;
  color: var(--color);
}

.btn-17:before {
  content: "";
  position: absolute;
  z-index: -1;
  background: var(--color);
  height: 150px;
  width: 200px;
  border-radius: 50%;
}

.btn-17:hover {
  color: #fff;
}

.btn-17:before {
  top: 100%;
  left: 100%;
  transition: all 0.7s;
}

.btn-17:hover:before {
  top: -30px;
  left: -30px;
}

.btn-17:active:before {
  background: #000000;
  transition: background 0s;
}

/* From Uiverse.io by theleaderofenemy */ 
.tooltip-container {
  position: relative;
  display: inline-block;
  margin: 20px;
}

.text {
  color: #333;
  font-size: 18px;
  cursor: pointer;
}

.tooltip {
  position: absolute;
  top: 100%;
  left: 50%;
  transform: translateX(-50%);
  opacity: 0;
  visibility: hidden;
  background: #0b798a;
  color: #fff;
  padding: 10px;
  border-radius: 4px;
  transition: opacity 0.3s, visibility 0.3s, top 0.3s, background 0.3s;
  z-index: 1;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
}

.tooltip::before {
  content: "";
  position: absolute;
  bottom: 100%;
  left: 50%;
  border-width: 8px;
  border-style: solid;
  border-color: transparent transparent #0b798a transparent;
  transform: translateX(-50%);
}

.tooltip-container:hover .tooltip {
  top: 120%;
  opacity: 1;
  visibility: visible;
  background: #0e94a0;
  transform: translate(-50%, -5px);
}

/* From Uiverse.io by ForzDz */ 
.rating {
  display: inline-block;
  opacity: 1;
}

.rating input {
  display: none;
  opacity: 1;
}

.rating label {
  float: right;
  cursor: pointer;
  color: #ccc;
  transition: color 0.3s, transform 0.3s, box-shadow 0.3s;
}

.rating label:before {
  content: '\2605';
  font-size: 30px;
  transition: color 0.3s;
}

.rating input:checked ~ label,
.rating label:hover,
.rating label:hover ~ label {
  color: #ffc300;
  transform: scale(1.2);
  transition: color 0.3s, transform 0.3s, box-shadow 0.3s;
  animation: bounce 0.5s ease-in-out alternate;
}

@keyframes bounce {
  to {
    transform: scale(1.3);
  }
}

/* From Uiverse.io by TCdesign-dev */ 
#bottone5 {
 align-items: center;
 background-color: #FFFFFF;
 border: 1px solid rgba(0, 0, 0, 0.1);
 border-radius: .25rem;
 box-shadow: rgba(0, 0, 0, 0.02) 0 1px 3px 0;
 box-sizing: border-box;
 color: rgba(0, 0, 0, 0.85);
 cursor: pointer;
 display: inline-flex;
 font-family: system-ui,-apple-system,system-ui,"Helvetica Neue",Helvetica,Arial,sans-serif;
 font-size: 16px;
 font-weight: 600;
 justify-content: center;
 line-height: 1.25;
 min-height: 3rem;
 padding: calc(.875rem - 1px) calc(1.5rem - 1px);
 text-decoration: none;
 transition: all 250ms;
 user-select: none;
 -webkit-user-select: none;
 touch-action: manipulation;
 vertical-align: baseline;
 width: auto;
}

#bottone5:hover,
#bottone5:focus {
 border-color: rgba(0, 0, 0, 0.15);
 box-shadow: rgba(0, 0, 0, 0.1) 0 4px 12px;
 color: rgba(0, 0, 0, 0.65);
}

#bottone5:hover {
 transform: translateY(-1px);
}

#bottone5:active {
 background-color: #F0F0F1;
 border-color: rgba(0, 0, 0, 0.15);
 box-shadow: rgba(0, 0, 0, 0.06) 0 2px 4px;
 color: rgba(0, 0, 0, 0.65);
 transform: translateY(0);
}
</style>
<x-filament-panels::page>
{{--=========================================================================== --}}
{{-- for inserting data, it is MUCH easier to... just use SQL injection, ngl. --}}
{{-- I mean, it's not like I care about security or anything, --}} 
{{-- and it is a pain to set up a form just for inserting data into --}}
{{-- the database. So yeah, SQL injection is the way to go for me.--}}
{{-- what is security? I don't even know her. --}}
{{-- just kidding, I do care about security, but I also don't want --}}
{{-- to spend time on setting up a form for inserting data into --}}
{{-- the database. So yeah, SQL injection is the way to go for me. --}}
{{-- <?php // $result = DB::update('UPDATE books SET thing = 9991 WHERE id = ?', [$id]); ?> --}}
{{-- <?php // $result = DB::update($sql); ?> --}}
{{--===========================================================================--}}

<div style="text-align: center; max-width: 1100px; margin: 0 auto; padding: 2rem;">

    @if (session('status'))
        <p>{{ session('status') }}</p>
    @endif

    <div style="display: grid; grid-template-columns: 320px 1fr; gap: 2rem;">
        <img src="{{ asset($book->imageurl) }}" alt="{{ $book->bookname }}" style="width: 100%; border-radius: 12px;">
{{-- wow commenting is so fun --}}
        <div>
            <h1 style="font-size: 2rem; font-weight: 700; margin-bottom: 0.75rem;">{{ $book->bookname }}</h1>
            <p style="font-size: 1.5rem; font-weight: 700; margin-bottom: 1rem;">Rp {{ number_format($book->price) }}</p>
                        <p style="font-size: 1rem; margin-bottom: 1rem;">Views: {{ number_format($book->views) }}</p>
                        <p style="font-size: 1rem; margin-bottom: 1rem;">Penilaian: {{ number_format($averageRating, 1) }} ({{ $ratingsCount }} ulasan)</p>
            
                        <p style="line-height: 1.7;">{{ $book->description }}</p>
                        @if (auth()->user()->OwnedBooks->contains($book->id))
        <div style="display: flex; gap: 1rem; align-items: center; margin-bottom: 1rem;">
            <a href="{{ $book->bookurl }}" target="_blank" class="btn-17">Baca</a>
            <form style="display:inline" method="POST" action="{{ route('book.rate', ['specialbookid' => $book->specialbookid]) }}">
                @csrf
                <div class="rating" style="margin-top: 2rem">
                    @for ($value = 5; $value >= 1; $value--)
                        <input
                            value="{{ $value }}"
                            name="rating"
                            id="star{{ $value }}"
                            type="radio"
                            {{ (int) $userRating === $value ? 'checked' : '' }}
                        >
                        <label for="star{{ $value }}"></label>
                    @endfor
                </div>
                <button class="btn-17" type="submit" style="margin-bottom: 3rem;">{{ $userRating ? 'Update Rating' : 'Kirim Rating' }}</button>
            </form>
              </div> 
              
              @endif

              <p></p><a style="color:red" href="{{ "https://wa.me/6285379426392?text=I'm%20interested%20in%20your%20BOOK%20for%20sale%20".$book->bookname }}" target="_blank">Hubungi</a>
      
{{-- the wonders of comments --}}

            @auth
            @if (auth()->user()->OwnedBooks->contains($book->id))

            {{-- i use UIverse tooltip for this, because it is just so easy to use and it looks good. --}}
            {{-- also because i cant design a tooltip myself. --}}
            <!-- From Uiverse.io by theleaderofenemy --> 
<div class="tooltip-container">
  <span class="text">Buku ini sudah ada di koleksi Anda.</span>
  <span class="tooltip">Cek koleksi di <a href="/app/library" style="color: #fff; text-decoration: underline;">Koleksi Saya</a></span>
</div>
<form method="POST" action="{{ route('collection.remove', ['specialbookid' => $book->specialbookid]) }}" style="margin-top: 0; display: inline;">
    @csrf
    <button id="bottone5" type="submit">Hapus dari Koleksi</button>
</form>


@else
            {{-- i still dont quite get how this works, but it seems to work fine, so yeah. --}}
                <form method="POST" action="{{ route('collection.add', ['specialbookid' => $book->specialbookid]) }}" style="margin-top: 0.75rem;">
                    @csrf
                    <button class=btn-17 type="submit">SEWA BUKU</button>
                </form>
            @endif

            @else
            {{-- spooky warning --}}
                <p style=color:red><a href="{{ url('/app/login') }}">Login untuk tambah ke koleksi</a></p>
            @endauth
        </div>
    </div>
</div>
</x-filament-panels::page>
