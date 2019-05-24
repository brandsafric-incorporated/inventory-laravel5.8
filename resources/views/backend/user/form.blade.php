{{-- If id is not set it is store else update --}}
@if(isset($data->id))
<form role="form" method="post" action="{{ route('admin.users.update',$data->id) }}">
    @method('PUT')
@else
<form role="form" method="post" action="{{ route('admin.users.store') }}">
@endif  
    @csrf
    <div class="form-group">
        <label for="title">User Name</label>
        <input type="text" class="form-control" name='name' id="name" placeholder="Enter role name" value="{{ isset($data->name)?$data->name:(old('name')?old('name'):'') }}">
        @if($errors->has('name'))
            <div class="alert alert-danger">{{ $errors->first('name')}}</div>
        @endif
    </div>
    <div class="form-group">
        <label for="title">User Email</label>
        <input type="email" class="form-control" name='email' id="email" placeholder="Email Address" value="{{ isset($data->email)?$data->email:(old('email')?old('email'):'') }}">
        @if($errors->has('email'))
            <div class="alert alert-danger">{{ $errors->first('email')}}</div>
        @endif
    </div>
    <div class="form-group">
        <label for="password">New Password</label>
        <input type="password" class="form-control" name='password' id="password" placeholder="Password">
        @if($errors->has('password'))
            <div class="alert alert-danger">{{ $errors->first('password')}}</div>
        @endif
    </div>
    <div class="form-group">
        <label for="confirm_password">Confirm Password</label>
        <input type="password" class="form-control" name='confirm_password' id="confirm_password" placeholder="Confirm password">
        @if($errors->has('confirm_password'))
            <div class="alert alert-danger">{{ $errors->first('confirm_password')}}</div>
        @endif
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    @if(!isset($data))
    <button type="reset" class="btn btn-danger">Reset</button>    
    @endif           
</form>