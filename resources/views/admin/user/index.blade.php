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
                        <ul>
                            @foreach ($purchases->where('user_id', $user->id) as $purchase)
                            <li>{{ $purchase->product_purchase }} - {{ $purchase->price_purchase }}</li>
                            @endforeach
                        </ul>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
      <div class="d-flex justify-content-center">
        {{-- {{ $product->links('pagination::bootstrap-4') }} --}}
    </div>
</div>

@endsection
