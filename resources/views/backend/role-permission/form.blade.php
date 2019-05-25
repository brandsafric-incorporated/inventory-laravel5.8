{{-- If id is not set it is store else update --}}
@if(isset($data->id))
<form role="form" method="post" action="{{ route('admin.roles-permissions.update',$data->id) }}">
    @method('PUT')
@else
<form role="form" method="post" action="{{ route('admin.roles-permissions.store') }}">
@endif  
    @csrf
    <div class="form-group">
        <label for="role">Role</label>
        <select name="role" id="role" class="form-control">
            <option value="">---Select Role---</option>
            @foreach ($roles as $role)
                <option value="{{ $role->id }}" @if(isset($data->id) && $data->id==$role->id) selected @endif>{{ $role->name }}</option>
            @endforeach
        </select>
        @if($errors->has('role'))
            <div class="alert alert-danger">{{ $errors->first('role')}}</div>
        @endif
    </div>
    <div class="form-group">
        <label for="permission">Permissions</label>
        @foreach ($permissions as $permission)
            <div class="checkbox">
                <label>
                    <input name="permission[]" id="permission" type="checkbox" value="{{ $permission->id }}" @if(isset($data->id) && in_array($permission->id,$rolePermission)) checked @endif>
                    {{ $permission->name }}
                </label>
            </div>
        @endforeach
        @if($errors->has('permission'))
            <div class="alert alert-danger">{{ $errors->first('permission')}}</div>
        @endif
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    @if(!isset($data))
    <button type="reset" class="btn btn-danger">Reset</button>    
    @endif           
</form>