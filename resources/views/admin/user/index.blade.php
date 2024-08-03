@extends('admin.layouts.main')

@section('title', 'Пользователи')

@section('content')

  <div style="width:500px; margin: 0 auto" >
    <div class="table-responsive">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>Имя</th>
                    <th>Email</th>
                    <th>Баланс</th>
                    <th>Покупки</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->balance }}</td>
                    <td>
                        <a href="{{ route('data', $user->id) }}">Посмотреть</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
      <div class="d-flex justify-content-center">
        {{ $users->links('pagination::bootstrap-4') }}
    </div>
</div>

@endsection
