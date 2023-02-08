<h1>{{ $product->title }}</h1>
<p>{{ $product->description }}</p>
<p>{{ $product->cost }} kr</p>
</br>
</br>
<p>Edit the product:</p>
<form method="post" action="{{ url('edit-product') }}">
    @csrf
    Product title: <input type='text' name='title'>
    </br>
    Product description: <textarea name='description'></textarea>
    </br>
    Product cost: <input type='number' step='.01' name='cost'>
    </br>
    </br>
    <button type="submit" name="id" value="{{ $product->id }}">Edit the product</button>
</form>
</br>
<form method="post" action="{{ url('delete-product') }}">
    @csrf
    <button type="submit" name="id" value="{{ $product->id }}">Delete the product</button>
</form>
</br>
</br>
<p>Comments:</p>
@forelse ($comments as $comment)
    <li>{{ $comment->comment }}</li>
@empty
    <p>No comments</p>
@endforelse
</br>
</br>
<form method="post" action="{{ url('add-comment') }}">
    @csrf
    New comment: <textarea name='comment'></textarea>
    </br>
    <button type="submit" name="product_id" value="{{ $product->id }}">Submit comment</button>
</form>
