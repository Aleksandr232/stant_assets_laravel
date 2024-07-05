@extends('admin.layouts.main')

@section('title', 'Продукты')

@section('content')
<div class="row mb-4 justify-content-center mt-5">
    <div class="col-md-3">
        <a class="text-decoration-none" href="#" data-bs-toggle="modal" data-bs-target="#categoryModal">
          <div class="card shadow-sm">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-3">Категория</h5>
                <button class="btn btn-link p-0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </a>
      </div>
      <div class="col-md-3">
        <a class="text-decoration-none" href="#" data-bs-toggle="modal" data-bs-target="#productModal">
          <div class="card shadow-sm">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <h5 class="card-title mb-3">Товары</h5>
                <button class="btn btn-link p-0">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                    <line x1="12" y1="5" x2="12" y2="19"></line>
                    <line x1="5" y1="12" x2="19" y2="12"></line>
                  </svg>
                </button>
              </div>
            </div>
          </div>
        </a>
      </div>
  </div>
@endsection
