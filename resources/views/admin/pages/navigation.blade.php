@extends('admin.layout')

@section('content')
  <div class="navigation-content">
    <ul>
      @foreach ($menus as $menu)
      <li>{{ $menu.name }}</li>
      @endforeach
      <li>
        <span id="add-menu">
          <i class="fas fa-plus"></i>add menu
        </span>
      </li>
    </ul>
  </div>
@endsection

@push('scripts')
  <script>
    $(document).ready(function () {
      $('#add-menu').on('click', function() {
        console.log('pike')
      })
    })
  </script>
@endpush