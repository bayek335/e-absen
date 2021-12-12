@extends('dashboard.layouts.main')

@section('content')
<div class="row mb-3 py-2 border-bottom">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center py-2 border mb-1 rounded">
        <div class="nav-toolbar">
            <nav class=""
                style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='currentColor'/%3E%3C/svg%3E&#34;);"
                aria-label="breadcrumb">
                @php
                $url = explode('/', url()->current());
                $new_url = array_slice($url, 3);
                @endphp
                <ol class="breadcrumb mb-0">
                    @foreach ($new_url as $key => $item)
                    @if($key!=count($new_url)-1)
                    <li class="breadcrumb-item"><a class="" href="/{{ $item }}">{{ucFirst($item) }}</a></li>
                    @else
                    <li class="breadcrumb-item active"><a class="">{{ucFirst($item) }}</a></li>
                    @endif
                    @endforeach
                </ol>
            </nav>
        </div>
        <div class="btn-toolbar mb-2 mb-md-0 ">
            <div class="btn-group me-1">
                <button type="button" class="btn btn-sm btn-outline-primary"
                    onclick="location.href='/dashboard/students/create'"><i class="bi bi-person-plus"></i>
                    Tambah</button>
            </div>
            <div class="btn-group me-2">
                <button type="button" class="btn btn-sm btn-outline-secondary"><i class="bi bi-download"></i>
                    Ekspor</button>
            </div>
        </div>
    </div>
</div>
@if (session()->has('success'))
<div class="row">
    <div class="alert alert-success text-center">
        {{ session('success') }} <i class="bi bi-check-lg"></i>
    </div>
</div>
@endif
<div class="row">
    @if (count($students)>0)
    <div class="col-12 mb-3">
        <form action="" class="d-flex ">
            <div class="form-group">
                <label for="search_name" class="">Filter berdasarkan Nama atau NISN</label>
                <input type="text" name="search" id="search_name" class="form-control form-control-sm m-0 ">
            </div>
            <div class="form-group mx-4">
                <label for="search_class">Filter berdasarkan kelas</label>
                <select type="text" name="search" id="search_class" class="form-select form-select-sm m-0 "
                    onchange="filterByClass(event)">
                    <option value="">Pilih</option>
                    @foreach ($classes as $class)
                    <option class="" value="{{ $class->id }}">{{ $class->class }} ( {{ ucFirst($class->name) }}
                        )
                    </option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="search_gender">Filter berdasarkan jenis kelamin</label>
                <select name="search" id="search_gender" class="form-select form-select-sm"
                    onchange="filterByGender(event)">
                    <option value="">pilih</option>
                    <option value="perempuan">Perempuan</option>
                    <option value="laki-laki">Laki - Laki</option>
                </select>
            </div>
        </form>
    </div>
    <div class="row" id="class_ajax">
        @include('dashboard.students.ajax_index')
    </div>
    @else
    <div class="row">
        <div class="alert alert-danger w-100 p-5 text-center">
            <h5> Belum memiliki data apapun.</h5>
        </div>
    </div>
    @endif

</div>


@endsection