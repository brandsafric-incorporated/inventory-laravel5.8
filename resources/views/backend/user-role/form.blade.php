{{-- If id is not set it is store else update --}}
@if(isset($data->id))
<form role="form" method="post" action="{{ route('admin.users-roles.update',$data->id) }}">
    @method('PUT')
@else
<form role="form" method="post" action="{{ route('admin.users-roles.store') }}">
@endif  
    @csrf
    <div class="form-group">
        <label for="user_id">User</label>
        <select name="user_id" id="user_id" class="form-control">
            <option value="">---Select User---</option>
            @foreach ($users as $user)
                <option value="{{ $user->id }}" {{(isset($data->id) && ($user->id==$data->id))?'selected':'' }}>{{ $user->name }} ({{ $user->email}})</option>
            @endforeach
        </select>
        @if($errors->has('user_id'))
            <div class="alert alert-danger">{{ $errors->first('user_id')}}</div>
        @endif
    </div>
    <div class="form-group">
        <label for="permission">Roles</label>
        @foreach ($roles as $role)
            <div class="checkbox">
                <label>
                    <input name="role[]" id="role" type="checkbox" value="{{ $role->id }}" @if(isset($data->id) && in_array($role->name,$userRole)) checked @endif>
                    {{ $role->name }}
                </label>
            </div>
        @endforeach
        @if($errors->has('role'))
            <div class="alert alert-danger">{{ $errors->first('role')}}</div>
        @endif
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    @if(!isset($data))
    <button type="reset" class="btn btn-danger">Reset</button>    
    @endif           
</form>