<x-filament-panels::page>
    @php
        $books = auth()->user()?->ownedBooks()->latest('book_user.created_at')->get() ?? collect();
    @endphp

    @if ($books->isEmpty())
        <p>Belum ada buku di koleksi kamu.</p>
    @else
        <table style="border: 3px solid white; border-radius: 12px; width: 100%;">
            <thead>
                <tr>
                    <th>Nama buku</th>
                    <th>Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <td>
                            <a class="btn-1" href="{{ route('z-bookdetails', ['specialbookid' => $book->specialbookid]) }}">
                                {{ $book->bookname }}
                            </a>
                        </td>
                        <td>{{ 'Rp ' . number_format($book->price, 2) }}</td>
                    </tr>
                @endforeach
            <tr>
                <strong><td>
                    TOTAL
                </td>    
                <td>
                    {{ 'Rp ' . number_format($books->sum('price'), 2) }}
                </td>
            </strong>
            </tr>
            </tbody>
        </table>
       <style>
        /* From Uiverse.io by Creatlydev */ 
.Btn {
  width: 130px;
  height: 40px;
  display: flex;
  align-items: center;
  justify-content: center;
  background-color: rgb(15, 15, 15);
  border: none;
  color: white;
  font-weight: 600;
  gap: 8px;
  cursor: pointer;
  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.103);
  position: relative;
  overflow: hidden;
  transition-duration: .3s;
}

.svgIcon {
  width: 16px;
}

.svgIcon path {
  fill: white;
}

.Btn::before {
  width: calc(100% + 40px);
  aspect-ratio: 1/1;
  position: absolute;
  content: "";
  background-color: white;
  border-radius: 50%;
  left: -20px;
  top: 50%;
  transform: translate(-150%, -50%);
  transition-duration: .5s;
  mix-blend-mode: difference;
}

.Btn:hover::before {
  transform: translate(0, -50%);
}

.Btn:active {
  transform: translateY(4px);
  transition-duration: .3s;
}
        </style>
        <button class="Btn">
 Bayar
  <svg viewBox="0 0 576 512" class="svgIcon"><path d="M512 80c8.8 0 16 7.2 16 16v32H48V96c0-8.8 7.2-16 16-16H512zm16 144V416c0 8.8-7.2 16-16 16H64c-8.8 0-16-7.2-16-16V224H528zM64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm56 304c-13.3 0-24 10.7-24 24s10.7 24 24 24h48c13.3 0 24-10.7 24-24s-10.7-24-24-24H120zm128 0c-13.3 0-24 10.7-24 24s10.7 24 24 24H360c13.3 0 24-10.7 24-24s-10.7-24-24-24H248z"></path></svg>
</button>
    @endif
</x-filament-panels::page>
