<div>
    <h1>Fruits Market</h1>
    <a href={{ route('logout') }}>logout</a>
    <table>
        <thead>
            <tr>
                <th>image</th>
                <th>fruit</th>
                <th>mass</th>
                <th>price</th>
            </tr>
            @foreach ($fruits as $fruit)
            <tbody>
                <tr>
                    <td> <img src="{{ $fruit->p_image }}" alt=""> </td>
                    <td>{{ $fruit->p_name }}</td>
                    <td>{{ $fruit->p_mass }}</td>
                    <td>{{ $fruit->p_price }}</td>
                    <td><a href="{{ route('details',$fruit->id) }}">buy</td>
                </tr>
            </tbody>
            @endforeach
        </thead>
    </table>
</div>
