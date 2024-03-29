<table class="table table-striped table-advance table-hover">
    <tbody>
      <tr>
        <th><i class="icon_profile"></i> S.N.</th>
        <th><i class="icon_calendar"></i> Title</th>
        <th><i class="icon_calendar"></i> Item Code</th>
        <th><i class="icon_calendar"></i> Status</th>
        <th><i class="icon_cogs"></i> Action</th>
      </tr>
      @if($data->count())
      @foreach ($data as $key=>$item)
      <tr>
        <td>{{ $key+1 }}</td>
        <td>{{ $item->title }}</td>
        <td>{{ $item->code }}</td>
        <td>{{ ($item->status==1)?'Active':'InActive' }}</td>
        <td>
          <div class="btn-group">
            <form action="{{ route('admin.items.destroy',$item->id) }}" method="post">
                @method('DELETE')
                @csrf
                @can('Edit Items')
                  <a class="btn btn-success" href="{{ route('admin.items.edit',$item->id) }}" onclick="return confirm('Editing Record!!!\nAre you sure?')"><i class="fa fa-edit"></i></a>
                @endcan
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