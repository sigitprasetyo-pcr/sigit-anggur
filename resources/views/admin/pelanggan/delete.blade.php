@extends('layouts.admin.app')
@section('content')
    <div class="py-4">
        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
            <ol class="breadcrumb breadcrumb-dark breadcrumb-transparent">
                <li class="breadcrumb-item">
                    <a href="#">
                        <svg class="icon icon-xxs" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                            xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6">
                            </path>
                        </svg>
                    </a>
                </li>
                <li class="breadcrumb-item"><a
                        href="{{ route('pelanggan.update', $dataPelanggan->pelanggan_id) }}">Pelanggan</a></li>
                <li class="breadcrumb-item active" aria-current="page">edit pelanggan</li>
            </ol>
        </nav>
        <div class="d-flex justify-content-between w-100 flex-wrap">
            <div class="mb-3 mb-lg-0">
                <h1 class="{{ route('pelanggan.update', $dataPelanggan->pelanggan_id) }}">Tambah Pelanggan</h1>
                <p class="mb-0">Form untuk edit data pelanggan barus.</p>
            </div>
            <div>
                <a href="{{ route('pelanggan.index') }}" class="btn btn-primary"><i class="far fa-question-circle me-1"></i>
                    Kembali</a>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mb-4">
            <div class="card border-0 shadow components-section">
                <div class="card-body">
                    <form action="" method="POST" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <div class="row mb-4">
                            <div class="col-lg-4 col-sm-6">
                                <!-- First Name -->
                                <div class="mb-3">
                                    <label for="first_name" class="form-label">First name</label>
                                    <input type="text" id="first_name" class="form-control" required
                                        value="{{ $dataPelanggan->first_name }}" name="first_name">
                                </div>

                                <!-- Last Name -->
                                <div class="mb-3">
                                    <label for="last_name" class="form-label">Last name</label>
                                    <input type="text" id="last_name" class="form-control" required
                                        value="{{ $dataPelanggan->last_name }}" name="last_name">
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-6">
                                <!-- Birthday -->
                                <div class="mb-3">
                                    <label for="birthday" class="form-label">Birthday</label>
                                    <input type="date" id="birthday" class="form-control" required
                                        value="{{ $dataPelanggan->birthday }}" name="birthday">
                                </div>

                                <!-- Gender -->
                                <div class="mb-3">
                                    <label for="gender" class="form-label">Gender</label>
                                    <select class="form-select mb-0" id="gender" name="gender"
                                        arial-label="Gender select example">
                                        <option selected>Gender</option>
                                        <option value="Male">
                                            {{ $dataPelanggan->gender == 'Male' ? 'selected' : '' }}>Male</option>
                                        <option value="Female">
                                            {{ $dataPelanggan->gender == 'Female' ? 'selected' : '' }}>Female
                                        </option>
                                        <option value="Other">
                                            {{ $dataPelanggan->gender == 'Other' ? 'selected' : '' }}>Other
                                        </option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-12">
                                <!-- Email -->
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="text" id="email" class="form-control" required
                                        value="{{ $dataPelanggan->email }}" name="email">
                                </div>

                                <!-- Phone -->
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Phone</label>
                                    <input type="text" id="phone" class="form-control" required
                                        value="{{ $dataPelanggan->phone }}" name="phone">
                                </div>

                                <!-- Buttons -->
                                <div class="">
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        <svg class="icon icon-xs me-2" data-slot="icon" fill="none" stroke-width="1.5"
                                            stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                                            aria-hidden="true">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0">
                                            </path>
                                        </svg>
                                        Hapus
                                    </button>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
