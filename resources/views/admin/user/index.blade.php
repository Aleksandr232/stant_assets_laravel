@extends('admin.layouts.main')

@section('title', 'Пользователи')

@section('content')

  <div style="width:700px; margin: 0 auto" >
    <div class="table-responsive">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>Имя</th>
                    <th>Email</th>
                    <th>Баланс</th>
                    <th>Покупки</th>
                    <th>Действия</th>
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
                    <td>
                        <button type="button" class="btn btn-primary btn-sm btn-edit" data-user-id="{{ $user->id }}" data-user-name="{{ $user->name }}" data-user-email="{{ $user->email }}" data-user-balance="{{ $user->balance }}" data-bs-toggle="modal" data-bs-target="#editModal">Изменить</button>
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
