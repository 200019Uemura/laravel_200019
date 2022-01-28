<div>
<h2>商品入力</h2>
<form action="{{ route('admin.item.add') }}" method="post">
@csrf
<div>
<label for="name">{{ __('Item Name') }}</label>
<input type="text" name="name">
</div>
<div>
<label for="name">{{ __('Item Code') }}</label>
<input type="text" name="code">
</div>
<div class="mb-8">
<label for="price">{{ __('Price') }}</label>
<input type="number" name="price">
</div>
<button>{{ __('Add') }}</button>
<a href="{{ route('admin.item.index') }}">{{ __('Back') }}</a>
</form>
</div>