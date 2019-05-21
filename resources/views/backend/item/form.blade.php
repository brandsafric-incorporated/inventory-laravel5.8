{{-- If id is not set it is store else update --}}
@if(isset($data->id))
<form role="form" method="post" action="{{ route('admin.items.update',$data->id) }}">
    @method('PUT')
@else
<form role="form" method="post" action="{{ route('admin.items.store') }}">
@endif  
    @csrf
    <div class="form-group">
        <label for="title">Title</label>
        <input type="text" class="form-control" name='title' id="title" placeholder="Enter title of item" value="{{ isset($data->title)?$data->title:(old('title')?old('title'):'') }}">
        @if($errors->has('title'))
            <div class="alert alert-danger">{{ $errors->first('title')}}</div>
        @endif
    </div>
    <div class="form-group">
        <label for="code">Item Code</label>
        <input type="text" class="form-control" name='code' id="code" placeholder="Enter unique item code" value="{{ isset($data->code)?$data->code:(old('code')?old('code'):'') }}">
        @if($errors->has('code'))
            <div class="alert alert-danger">{{ $errors->first('code')}}</div>
        @endif
    </div>
    <div class="form-group">
        <label for="status">Status</label>
        <select class="form-control" name="status" id="status">
            <option value="">---Select Status---</option>
            <option value="1" {{ (isset($data->status) && $data->status==1)?'selected':'' }}>Active</option>
            <option value="0" {{ (isset($data->status) && $data->status==0)?'selected':'' }}>InActive</option>
        </select>
        @if($errors->has('status'))
            <div class="alert alert-danger">{{ $errors->first('status')}}</div>
        @endif
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    @if(!isset($data))
    <button type="reset" class="btn btn-danger">Reset</button>    
    @endif           
</form>