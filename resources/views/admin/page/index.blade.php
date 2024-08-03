@extends('admin.layouts.main')

@section('title', 'Админка')

@section('content')
<div class="row mb-4 justify-content-center mt-5">
    <div class="col-md-3">
        <a href="{{ route('product.index') }}"  class="text-decoration-none">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title mb-3">Товары</h5>
                    <i class="fas fa-store me-2"></i>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a href="{{ route('users.index')}}"  class="text-decoration-none">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title mb-3">Пользователи</h5>
                    <i class="fas fa-user me-2"></i>
                </div>
            </div>
        </a>
    </div>
    <div class="col-md-3">
        <a  class="text-decoration-none">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5 class="card-title mb-3">Настройки</h5>
                    <i class="fas fa-cogs me-2"></i>
                </div>
            </div>
        </a>
    </div>
</div>
@endsection
