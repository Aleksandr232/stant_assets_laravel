@extends('admin.layouts.main')

@section('title', 'Покупки')

@section('content')

  <div style="width:800px; margin: 0 auto" >
    <div class="table-responsive">
        <table class="table table-sm">
            <thead>
                <tr>
                    <th>Номер покупки</th>
                    <th>Продукт</th>
                    <th>Цена</th>
                    <th>Статус доставки</th>
                    <th>Статус оплаты</th>
                    <th>Дата покупки</th>
                    <th>Действия</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($purchases as $data)
                <tr>
                    <td>{{ $data->transaction_purchase }}</td>
                    <td>{{ $data->product_purchase  }}</td>
                    <td>{{ $data->price_purchase }}</td>
                    <td>{{ $data->status_purchase }}</td>
                    <td>{{ $data->account_details_purchase }}</td>
                    <td>
                        {{ $data->date_purchase }}
                    </td>
                    <td><button type="button" class="btn btn-primary btn-sm btn-purchase" data-purchase-id="{{ $data->id }}"  data-bs-toggle="modal" data-bs-target="#purchaseModal" >Изменить</button></td>
                </tr>
                @endforeach
            </tbody>
        </table>
      </div>
      <div class="d-flex justify-content-center">
        {{ $purchases->links('pagination::bootstrap-4') }}
    </div>
</div>

@endsection
