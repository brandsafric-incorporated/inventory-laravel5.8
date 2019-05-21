{{-- If id is not set it is store else update --}}
@if(isset($data->id))
<form role="form" method="post" action="{{ route('admin.sub-departments.update',$data->id) }}">
    @method('PUT')
@else
<form role="form" method="post" action="{{ route('admin.sub-departments.store') }}">
@endif  
    @csrf
    <div class="form-group">
        <label for="department_id">Department Name</label>
        <select name="department_id" id="department_id" class="form-control">
            <option value="">---Select Department---</option>
            @foreach ($departments as $item)
        <option value="{{ $item->id }}" @if(isset($data) && $item->id==$data->department_id) selected @endif>{{ ucwords($item->name) }}</option>
            @endforeach
        </select>
        @if($errors->has('department_id'))
            <div class="alert alert-danger">{{ $errors->first('department_id')}}</div>
        @endif
    </div>
    <div class="form-group">
        <label for="name">Sub Department Name</label>
        <input type="text" class="form-control" name='name' id="name" placeholder="Enter department name" value="{{ isset($data->name)?$data->name:(old('name')?old('name'):'') }}">
        @if($errors->has('name'))
            <div class="alert alert-danger">{{ $errors->first('name')}}</div>
        @endif
    </div>
    <div class="form-group">
        <label for="code">Department Code</label>
        <input type="text" class="form-control" name='code' id="code" placeholder="Enter unique department code" value="{{ isset($data->code)?$data->code:(old('code')?old('code'):'') }}">
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