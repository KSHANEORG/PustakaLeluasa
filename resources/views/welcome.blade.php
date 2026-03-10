<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Nusantara Merah Project</title>
    <meta property="og:type" content="website" />
<meta property="og:url" content="https://store.kenzieshane.my.id/" />
<meta property="og:image" content="https://www.kenzieshane.my.id/profile.jpg" />
    
<link rel="stylesheet" href="css/index.css">
</head>
<body>

    <nav>

                    <a href=/app><span> hubungi&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;promo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;toko&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;tentang&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span></a>
                    @auth
                        <a
                            href="{{ url('/app') }}"
                            class="Lnav"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ url('/app') }}"
                            class="Lnav"
                        >
                            Log in
                        </a>

<span class="Lnav">|</span>
                            <a
href="{{ url('/app') }}"
                                class="Lnav"
                                > Register
                            </a>
                    @endauth


                </nav>

               <div class="header-container">
                   <h1 class="leftys">PUSTAKA LELUASA</h1> 
                   <input class="search" id="search" type="text" value="Search"/>
               </div>
                <br>
                <a href=/app> <div class="bookcasex">
                <img class=prev src="Screenshot from 2026-03-03 12-31-16.png">
        </div></a>
                         <div class="bookcasex">
               <img class=prev src="Pasted image.png">
        </div>
                 <section id="menu" class="menu-section">

                <div class="menu-grid">
            <!-- Menu Item 1 -->
            <?php $books = DB::table('books')->paginate(10); ?>
            @foreach ($books as $book)
            <a href="/{{ $book->specialbookid }}" style="text-decoration: none; color: inherit;">
                 <div class="menu-card">
                <img src="{{ $book->imageurl }}" alt="{{ $book->bookname }}" class="menu-img">
                <h3 class="menu-item-title">{{ $book->bookname }}</h3>
                <p class="menu-item-desc">{{ $book->description }}</p>
                <span class="menu-item-price">{{ 'Rp.'.' '.number_format($book->price) }}</span>
            </div>
</a>
            @endforeach
           
           
            </div>
        </div>
                <br>
                <br>
                <p>TOKO GENERIK KS(c)2026</p>
                <br>
</body>
</html>