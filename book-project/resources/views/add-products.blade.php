<form method="post" action="{{ url('add-products') }}">
    @csrf
    Product title: <input type='text' name='title'>
    </br>
    Product description: <textarea name='description'></textarea>
    </br>
    Product cost: <input type='number' step='.01' name='cost'>
    </br>
    <input type='submit'>
</form>
