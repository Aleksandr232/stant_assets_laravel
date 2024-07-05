<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
  <link rel="stylesheet" href="{{asset('admin_panel/css/style.css')}}?v={{ time() }}">
</head>
<body>
  @include('admin.inc.sidebar')
  @include('admin.inc.navbar')
<main>
    @yield('content')
</main>


{{-- @if (session()->has('success'))
    <div class="alert alert-success" id="success-alert">
        {{ session('success') }}
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

            var successAlert = document.getElementById('success-alert');


            if (successAlert) {
                setTimeout(function() {
                    successAlert.remove();
                }, 1000);
            }
        });
    </script>
@endif --}}
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const sidebar = document.querySelector('.sidebar');
    const toggleSidebarBtn = document.getElementById('toggleSidebar');
    const content = document.querySelector('.content');

    toggleSidebarBtn.addEventListener('click', () => {
      sidebar.classList.toggle('expanded');
      content.classList.toggle('expanded');
    });
  </script>
</body>
</html>
