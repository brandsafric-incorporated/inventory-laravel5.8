<table class="table table-striped table-advance table-hover">
    <tbody>
      <tr>
        <th><i class="icon_profile"></i> S.N.</th>
        <th><i class="icon_calendar"></i> User Name</th>
        <th><i class="icon_calendar"></i> Email</th>
        <th><i class="icon_calendar"></i> Role</th>
        <th><i class="icon_cogs"></i> Action</th>
      </tr>
      @if($data->count())
      @foreach ($data as $key=>$item)
      <tr>
        <td>{{ $key+1 }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->email }}</td>
        <td>
          @php
            $user=App\User::find($item->id);
            $roles=$user->getRoleNames();
            foreach ($roles as $key => $value) {
              echo $value;
              if($roles->count()>1){
                  echo ' | ';
              }
            }
          @endphp
        </td>
        <td>
          <div class="btn-group">
            <form action="{{ route('admin.users.destroy',$item->id) }}" method="post">
                @method('DELETE')
                @csrf
                <a class="btn btn-success" href="{{ route('admin.users.edit',$item->id) }}" onclick="return confirm('Editing Record!!!\nAre you sure?')"><i class="fa fa-edit"></i></a>
                <button type="submit" class="btn btn-danger" onclick="return confirm('Deleteing Record!!!\nAre you sure?')"><i class="icon_close_alt2"></i></button>
            </form>
          </div>
        </td>
      </tr>
      @endforeach
      @else
      <tr>
        <td colspan="7">No Data Found!!!</td>
      </tr>
      @endif
    </tbody>
  </table>