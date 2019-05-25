<table class="table table-striped table-advance table-hover">
    <tbody>
      <tr>
        <th><i class="icon_profile"></i> S.N.</th>
        <th><i class="icon_calendar"></i> Role Name</th>
        <th><i class="icon_calendar"></i> Permissions</th>
        <th><i class="icon_cogs"></i> Action</th>
      </tr>
      @if($data->count())
      @foreach ($data as $key=>$item)
      <tr>
        <td>{{ $key+1 }}</td>
        <td>{{ $item->name }}</td>
        <td>
          @php
            $role=Spatie\Permission\Models\Role::findById($item->id);
            $permissions=$role->getAllPermissions();  
            foreach ($permissions as $key => $permission) {
              echo $permission->name;
              if($permissions->count()>1){
                  echo ' | ';
              }
            }
          @endphp
        </td>
        <td>
          <a class="btn btn-success" href="{{ route('admin.roles-permissions.edit',$item->id) }}" onclick="return confirm('Editing Record!!!\nAre you sure?')"><i class="fa fa-edit"></i></a>
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