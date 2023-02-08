<h1>Products</h1>
<ul>
@forelse ($products as $product)
    <li>
        <a href="/products/{{ $product->id }}">{{ $product->title }}</a>
        <ul>
            <li>{{ $product->description }}</li>
            <li>{{ $product->cost }} kr</li>
        </ul>
    </li>
    </br>
@empty
    <p>No products</p>
    <a href="/add-products">Add new products</a>
@endforelse
</ul>