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
    @endif
</x-filament-panels::page>
