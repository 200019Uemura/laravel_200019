<div>
    <h2>商品編集</h2>
    <form action="" method="post">
        @csrf
        <div>
            <label for="name">{{ __('Item Name') }}</label>
            <input type="text" name="name" value="{{ $item->name }}">
        </div>
        <div>
            <label for="name">{{ __('Item Code') }}</label>
            <input type="text" name="code" value="{{ $item->code }}">
        </div>
        <div>
            <label for="price">{{ __('Price') }}</label>
            <input type="number" name="price" value="{{ $item->price }}">
        </div>
        <div>
            <label for="price">{{ __('Stock') }}</label>
            <input type="number" name="stock" value="{{ $item->stock }}">
        </div>
        <button>{{ __('Update') }}</button>
        <a href="{{ route('admin.item.index') }}">{{ __('Back') }}</a>
    </form>
</div>