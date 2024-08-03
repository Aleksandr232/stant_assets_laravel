@extends('admin.layouts.main')

@section('title', 'Покупки')

@section('content')

  <div style="width:500px; margin: 0 auto" >
    <div class="table-responsive">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>Номер покупки</th>
                    <th>Продукт</th>
                    <th>Цена</th>
                    <th>Дата покупки</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($purchases as $data)
                <tr>
                    <td>{{ $data->transaction_purchase }}</td>
                    <td>{{ $data->product_purchase  }}</td>
                    <td>{{ $data->price_purchase }}</td>
                    <td>
                        {{ $data->date_purchase }}
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
