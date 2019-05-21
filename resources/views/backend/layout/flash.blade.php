@if(session()->has('success'))
<p class="alert alert-success text-center">{{session()->get('success') }}</p>
@endif
@if(session()->has('failure'))
<p class="alert alert-danger text-center">{{session()->get('failure') }}</p>
@endif