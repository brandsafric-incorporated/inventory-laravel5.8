<table class="table table-striped table-advance table-hover">
    <tbody>
      <tr>
        <th><i class="icon_profile"></i> S.N.</th>
        <th><i class="icon_calendar"></i> Sub Dep. Name</th>
        <th><i class="icon_calendar"></i> Sub Dep. Code</th>
        <th><i class="icon_calendar"></i> Department</th>
        <th><i class="icon_calendar"></i> Status</th>
        <th><i class="icon_cogs"></i> Action</th>
      </tr>
      @if($data->count())
      @foreach ($data as $key=>$item)
      <tr>
        <td>{{ $key+1 }}</td>
        <td>{{ $item->name }}</td>
        <td>{{ $item->code }}</td>
        <td>{{ ucwords($item->department->name) }}</td>
        <td>{{ ($item->status==1)?'Active':'Inactive' }}</td>
        <td>
          <div class="btn-group">
            <form action="{{ route('admin.sub-departments.destroy',$item->id) }}" method="post">
                @method('DELETE')
                @csrf
                <a class="btn btn-success" href="{{ route('admin.sub-departments.edit',$item->id) }}" onclick="return confirm('Editing Record!!!\nAre you sure?')"><i class="fa fa-edit"></i></a>
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