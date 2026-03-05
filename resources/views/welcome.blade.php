<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Nusantara Merah Project</title>
    <meta property="og:type" content="website" />
<meta property="og:url" content="https://store.kenzieshane.my.id/" />
<meta property="og:image" content="https://www.kenzieshane.my.id/profile.jpg" />
    
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
*
 {
  font-family: "Inter", sans-serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
}

body {
    background-color: #ffffff;
    color: #000000;
}
            .leftys
            {
                font-size: 100px;
                text-align:left;
                display: inline-block;
                line-height: 0;
            }

            .Lnav
            {

                text-align:right;
            }

            nav {
                                font-size:15px;
                              text-align:right;
                               line-height: 1;
            }

            a
            {

                color: #000000ff;
                text-decoration: none;
                  text-align:center;
            }

            .bookcase
            {
                align-items: center;
                background-color: #FF8888;
                padding:10px;
                border-radius: 10px;
                display: grid;
                /* default to single column for small screens */
                grid-template-columns: 1fr;
                gap: 10px;
            }
            /* stack three columns on larger viewports */
            @media (min-width: 640px) {
                .bookcase {
                    grid-template-columns: 1fr 1fr 1fr;
                }
            }

                        .bookcasex
            {
                align-items: center;
                padding:10px;
                border-radius: 10px;
                display: grid;
                /* default to single column for small screens */
                grid-template-columns: 1fr;
                gap: 10px;
            }
            /* stack three columns on larger viewports */
            @media (min-width: 640px) {
                .bookcasex {
                    grid-template-columns: 1fr;
                }
            }

            .books
            {
                max-width: 50%;
                height: auto;
                margin-left: auto;
                margin-right: auto;
            }

            .prev{
                                margin-left: auto;
                margin-right: auto;
            }
            
            .header-container {
                display: flex;
                justify-content: space-between;
                align-items: center;
                margin-bottom: 20px;
            }
            
            .search {
                width: 200px;
                padding: 8px;
                border: 1px solid #ccc;
                border-radius: 4px;
                font-size: 16px;
            }
    </style>
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
                 <div class="bookcasex">
                <img class=prev src="Screenshot from 2026-03-03 12-31-16.png">
        </div>
                         <div class="bookcasex">
               <img class=prev src="Pasted image.png">
        </div>
                <br>

                 <div class="bookcase">
                <a href=/app><img class=books src="{{asset('buku.png')}}"></a>
                <a href=/app><img class=books src="{{asset('buku1.png')}}"></a>
                <a href=/app><img class=books src="{{asset('buku2.png')}}"></a>
                </div>
                <br>
                <br>
                <p>TOKO GENERIK KS(c)2026</p>
                <br>
</body>
</html>