
<div>
        <h1>cart</h1>
        <a href="/home">home</a>
        <table>
            <thead>
                <tr>
                    <th>fruit</th>
                    <th>mass(100g)</th>
                    <th>price</th>
                    <th>status</th>
                </tr>
                @foreach ($carts as $cart)
                <tbody>
                    <tr>
                        <td>{{ $cart->p_name }}</td>
                        <td>{{ $cart->total_mass }}</td>
                        <td>{{ $cart->total_mass * $cart->p_price/100 }}</td>
                        <td>{{ $cart->status }}</td>
                    </tr>
                </tbody>
                @endforeach
            </thead>
        </table>
        <form action="{{ route('checkout') }}" method="POST">
            @csrf
            @method('PUT')
            <button type="submit">checkout</button>
        </form>
</div>
