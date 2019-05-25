<!--sidebar start-->
  <aside>
    <div id="sidebar" class="nav-collapse ">
    <!-- sidebar menu start-->
    <ul class="sidebar-menu">
      @if(Auth::user()->is_admin==1)
      <li class="active">
        <a href="">
          <i class="icon_house_alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="sub-menu {!! request()->is('admin/items*')?'active':'' !!}">
        <a href="javascript:;">
          <i class="icon_document_alt"></i>
          <span>Items</span>
          <span class="menu-arrow arrow_carrot-right"></span>
        </a>
        <ul class="sub">
          <li><a href="{{ route('admin.items.create') }}">Add</a></li>
          <li><a href="{{ route('admin.items.index') }}">Manage</a></li>
        </ul>
      </li>
      <li class="sub-menu {!! request()->is('admin/departments*')?'active':'' !!}">
        <a href="javascript:;">
          <i class="icon_document_alt"></i>
          <span>Departments</span>
          <span class="menu-arrow arrow_carrot-right"></span>
        </a>
        <ul class="sub">
          <li><a href="{{ route('admin.departments.create') }}">Add</a></li>
          <li><a href="{{ route('admin.departments.index') }}">Manage</a></li>
        </ul>
      </li>
      <li class="sub-menu {!! request()->is('admin/sub-departments*')?'active':'' !!}">
        <a href="javascript:;">
          <i class="icon_document_alt"></i>
          <span>Sub Depart..</span>
          <span class="menu-arrow arrow_carrot-right"></span>
        </a>
        <ul class="sub">
          <li><a href="{{ route('admin.sub-departments.create') }}">Add</a></li>
          <li><a href="{{ route('admin.sub-departments.index') }}">Manage</a></li>
        </ul>
      </li>
      <li class="sub-menu {!! request()->is('admin/roles/*')?'active':'' !!}">
        <a href="javascript:;">
          <i class="icon_document_alt"></i>
          <span>Roles</span>
          <span class="menu-arrow arrow_carrot-right"></span>
        </a>
        <ul class="sub">
          <li><a href="{{ route('admin.roles.create') }}">Add</a></li>
          <li><a href="{{ route('admin.roles.index') }}">Manage</a></li>
        </ul>
      </li>
      <li class="sub-menu {!! request()->is('admin/permissions*')?'active':'' !!}">
        <a href="javascript:;">
          <i class="icon_document_alt"></i>
          <span>Permissions</span>
          <span class="menu-arrow arrow_carrot-right"></span>
        </a>
        <ul class="sub">
          <li><a  href="{{ route('admin.permissions.create') }}">Add</a></li>
          <li><a  href="{{ route('admin.permissions.index') }}">Manage</a></li>
        </ul>
      </li>
      <li class="sub-menu {!! request()->is('admin/roles-permissions/*')?'active':'' !!}">
        <a href="javascript:;">
          <i class="icon_document_alt"></i>
          <span>Roles & Permi..</span>
          <span class="menu-arrow arrow_carrot-right"></span>
        </a>
        <ul class="sub">
          <li><a  href="{{ route('admin.roles-permissions.create') }}">Add</a></li>
          <li><a  href="{{ route('admin.roles-permissions.index') }}">Manage</a></li>
        </ul>
      </li>
      <li class="sub-menu {!! request()->is('admin/users/*')?'active':'' !!}">
        <a href="javascript:;">
          <i class="icon_document_alt"></i>
          <span>Users</span>
          <span class="menu-arrow arrow_carrot-right"></span>
        </a>
        <ul class="sub">
          <li><a  href="{{ route('admin.users.create') }}">Add</a></li>
          <li><a  href="{{ route('admin.users.index') }}">Manage</a></li>
        </ul>
      </li>
      <li class="sub-menu {!! request()->is('admin/users/*')?'active':'' !!}">
        <a href="javascript:;">
          <i class="icon_document_alt"></i>
          <span>User & Role</span>
          <span class="menu-arrow arrow_carrot-right"></span>
        </a>
        <ul class="sub">
          <li><a  href="{{ route('admin.users-roles.create') }}">Add</a></li>
          <li><a  href="{{ route('admin.users-roles.index') }}">Manage</a></li>
        </ul>
      </li>
    </ul>
    @else
    <li class="active">
        <a href="">
          <i class="icon_house_alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li class="sub-menu {!! request()->is('admin/items*')?'active':'' !!}">
        <a href="javascript:;">
          <i class="icon_document_alt"></i>
          <span>Items</span>
          <span class="menu-arrow arrow_carrot-right"></span>
        </a>
        <ul class="sub">
          <li><a href="{{ route('user.items.create') }}">Add</a></li>
          <li><a href="{{ route('user.items.index') }}">Manage</a></li>
        </ul>
      </li>
    @endif
    <!-- sidebar menu end-->
  </div>
</aside>
<!--sidebar end--> 