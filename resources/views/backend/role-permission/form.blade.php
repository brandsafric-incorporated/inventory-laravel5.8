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
                <option value="{{ $role->id }}">{{ $role->name }}</option>
            @endforeach
        </select>
        @if($errors->has('role'))
            <div class="alert alert-danger">{{ $errors->first('role')}}</div>
        @endif
    </div>
    <div class="form-group">
        <label for="permission">Permission</label>
        <select name="permission" id="permission" class="form-control">
            <option value="">---Select Permission---</option>
            @foreach ($permissions as $permission)
                <option value="{{ $permission->id }}">{{ $permission->name }}</option>
            @endforeach
        </select>
        @if($errors->has('permission'))
            <div class="alert alert-danger">{{ $errors->first('permission')}}</div>
        @endif
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    @if(!isset($data))
    <button type="reset" class="btn btn-danger">Reset</button>    
    @endif           
</form>