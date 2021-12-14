@if (session()->has('alert'))
  <div class="alert alert-{{ session()->get('alert')['type'] }}">
    {{ session()->get('alert')['msg'] }}
  </div>
@endif
