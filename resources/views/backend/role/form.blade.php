{{-- If id is not set it is store else update --}}
@if(isset($data->id))
<form role="form" method="post" action="{{ route('admin.roles.update',$data->id) }}">
    @method('PUT')
@else
<form role="form" method="post" action="{{ route('admin.roles.store') }}">
@endif  
    @csrf
    <div class="form-group">
        <label for="title">Role Name</label>
        <input type="text" class="form-control" name='name' id="name" placeholder="Enter role name" value="{{ isset($data->name)?$data->name:(old('name')?old('name'):'') }}">
        @if($errors->has('name'))
            <div class="alert alert-danger">{{ $errors->first('name')}}</div>
        @endif
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    @if(!isset($data))
    <button type="reset" class="btn btn-danger">Reset</button>    
    @endif           
</form>