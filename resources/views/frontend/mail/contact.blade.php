<body>
<img width="250" src="{{ $message->embed('img/frontend/logo_horiz.png') }}">
<h4>Please find your order below:</h4>
<hr>
@foreach($order as $item)
    <?php $image = ltrim($item->options->image_url, '/') ?>
    <table>
        <tr>
            <th>Image</th>
            <th>Product Name</th>
            <th>Product Qty</th>
            <th>Product Price</th>
        </tr>
        <tr>
            <td><img width="100" src="{{ $message->embed($image) }}"></td>
            <td width="250" style="text-align: center">{{ $item->name }}</td>
            <td width="150" style="text-align: center">{{ $item->qty }}</td>
            <td width="150" style="text-align: center">{{ $item->price }}</td>
        </tr>
    </table>
    <hr>
@endforeach
<p><strong>Total:</strong> {{ Cart::total() }}</p>
</body>