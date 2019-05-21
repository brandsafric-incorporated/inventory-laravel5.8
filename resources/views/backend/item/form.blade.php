{{-- If id is not set it is store else update --}}
@if(isset($data->id))
<form role="form" method="post" action="{{ route('items.update',$data->id) }}">
    @method('PUT')
@else
<form role="form" method="post" action="{{ route('items.store') }}">
@endif  
    @csrf
    <div class="form-group">
        <label for="title">Item Code</label>
        <input type="text" class="form-control" name='item_code' id="item_code" placeholder="Enter unique item code" value="{{ isset($data->item_code)?$data->item_code:(old('item_code')?old('item_code'):'') }}">
        @if($errors->has('item_code'))
            <div class="alert alert-danger">{{ $errors->first('item_code')}}</div>
        @endif
    </div>
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name='title' id="title" placeholder="Enter title" value="{{ isset($data->title)?$data->title:(old('title')?old('title'):'') }}">
        @if($errors->has('title'))
            <div class="alert alert-danger">{{ $errors->first('title')}}</div>
        @endif
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    <button type="reset" class="btn btn-danger">Reset</button>            
</form>