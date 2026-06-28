@extends('layouts.app')
@section('main-content')
<main class="py-5 bg-light">
    <div class="container">
        <div class="text-center mb-5 mt-4 pt-3">
            <h2 class="fw-bold text-dark" style="font-size: 2.2rem; letter-spacing: -0.5px;">Penyelesaian Pesanan</h2>
            <p class="text-secondary mb-3">Lengkapi detail pengiriman dan pembayaran Anda di bawah ini.</p>
        </div>

        <div class="row g-5">
            <!-- Bagian Kanan: Ringkasan Keranjang -->
            <div class="col-md-5 col-lg-4 order-md-last">
                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-header bg-white border-bottom-0 pt-4 pb-0 px-4">
                        <h5 class="fw-bold mb-0 d-flex justify-content-between align-items-center">
                            Ringkasan Pesanan
                        </h5>
                        @if(isset($prevRakitanData))
                            <small class="text-muted">Desain: {{ $prevRakitanData->name }}</small>
                        @endif
                    </div>
                    <div class="card-body p-4">
                        <ul class="list-group list-group-flush mb-3">
                            <!-- CPU -->
                            <li class="list-group-item d-flex justify-content-between lh-sm px-0 py-3">
                                <div>
                                    @if(session('cpus'))
                                        <h6 class="my-0 text-dark fw-bold">{{ session()->get('cpus')->name }}</h6>
                                        <small class="text-muted">Prosesor (CPU)</small>
                                    @else
                                        <h6 class="my-0 text-dark fw-bold">Belum Dipilih</h6>
                                        <small class="text-muted">Prosesor (CPU)</small>
                                    @endif
                                </div>
                                <span class="text-muted fw-semibold">
                                    @if(session('cpus')) {{ session()->get('cpus')->formattedPrice }} @else Rp 0 @endif
                                </span>
                            </li>
                            <!-- Motherboard -->
                            <li class="list-group-item d-flex justify-content-between lh-sm px-0 py-3">
                                <div>
                                    @if(session('motherboards'))
                                        <h6 class="my-0 text-dark fw-bold">{{ session()->get('motherboards')->name }}</h6>
                                        <small class="text-muted">Motherboard</small>
                                    @else
                                        <h6 class="my-0 text-dark fw-bold">Belum Dipilih</h6>
                                        <small class="text-muted">Motherboard</small>
                                    @endif
                                </div>
                                <span class="text-muted fw-semibold">
                                    @if(session('motherboards')) {{ session()->get('motherboards')->formattedPrice }} @else Rp 0 @endif
                                </span>
                            </li>
                            <!-- Memori -->
                            <li class="list-group-item d-flex justify-content-between lh-sm px-0 py-3">
                                <div>
                                    @if(session('memories'))
                                        <h6 class="my-0 text-dark fw-bold">{{ session()->get('memories')->name }}</h6>
                                        <small class="text-muted">RAM (Memori)</small>
                                    @else
                                        <h6 class="my-0 text-dark fw-bold">Belum Dipilih</h6>
                                        <small class="text-muted">RAM (Memori)</small>
                                    @endif
                                </div>
                                <span class="text-muted fw-semibold">
                                    @if(session('memories')) {{ session()->get('memories')->formattedPrice }} @else Rp 0 @endif
                                </span>
                            </li>
                            <!-- Storage -->
                            <li class="list-group-item d-flex justify-content-between lh-sm px-0 py-3">
                                <div>
                                    @if(session('internal_storages'))
                                        <h6 class="my-0 text-dark fw-bold">{{ session()->get('internal_storages')->name }}</h6>
                                        <small class="text-muted">Penyimpanan</small>
                                    @else
                                        <h6 class="my-0 text-dark fw-bold">Belum Dipilih</h6>
                                        <small class="text-muted">Penyimpanan</small>
                                    @endif
                                </div>
                                <span class="text-muted fw-semibold">
                                    @if(session('internal_storages')) {{ session()->get('internal_storages')->formattedPrice }} @else Rp 0 @endif
                                </span>
                            </li>
                            <!-- GPU -->
                            <li class="list-group-item d-flex justify-content-between lh-sm px-0 py-3">
                                <div>
                                    @if(session('gpus'))
                                        <h6 class="my-0 text-dark fw-bold">{{ session()->get('gpus')->name }}</h6>
                                        <small class="text-muted">Kartu Grafis (VGA)</small>
                                    @else
                                        <h6 class="my-0 text-dark fw-bold">Belum Dipilih</h6>
                                        <small class="text-muted">Kartu Grafis (VGA)</small>
                                    @endif
                                </div>
                                <span class="text-muted fw-semibold">
                                    @if(session('gpus')) {{ session()->get('gpus')->formattedPrice }} @else Rp 0 @endif
                                </span>
                            </li>
                            <!-- Casing -->
                            <li class="list-group-item d-flex justify-content-between lh-sm px-0 py-3">
                                <div>
                                    @if(session('cases'))
                                        <h6 class="my-0 text-dark fw-bold">{{ session()->get('cases')->name }}</h6>
                                        <small class="text-muted">Casing PC</small>
                                    @else
                                        <h6 class="my-0 text-dark fw-bold">Belum Dipilih</h6>
                                        <small class="text-muted">Casing PC</small>
                                    @endif
                                </div>
                                <span class="text-muted fw-semibold">
                                    @if(session('cases')) {{ session()->get('cases')->formattedPrice }} @else Rp 0 @endif
                                </span>
                            </li>
                            <!-- PSU -->
                            <li class="list-group-item d-flex justify-content-between lh-sm px-0 py-3 mb-2">
                                <div>
                                    @if(session('power_supplies'))
                                        <h6 class="my-0 text-dark fw-bold">{{ session()->get('power_supplies')->name }}</h6>
                                        <small class="text-muted">Power Supply (PSU)</small>
                                    @else
                                        <h6 class="my-0 text-dark fw-bold">Belum Dipilih</h6>
                                        <small class="text-muted">Power Supply (PSU)</small>
                                    @endif
                                </div>
                                <span class="text-muted fw-semibold">
                                    @if(session('power_supplies')) {{ session()->get('power_supplies')->formattedPrice }} @else Rp 0 @endif
                                </span>
                            </li>
                            
                            <!-- Total -->
                            <li class="list-group-item d-flex justify-content-between bg-light px-3 py-3 rounded-3 mt-3 border-0">
                                <span class="fw-bold text-dark">Total Harga</span>
                                <strong class="fs-5 text-primary">{{ isset($formattedTotalPrice) ? $formattedTotalPrice : 'Rp 0' }}</strong>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Bagian Kiri: Form Identitas -->
            <div class="col-md-7 col-lg-8 order-md-1">
                <div class="card shadow-sm border-0 rounded-4 mb-4">
                    <div class="card-body p-5">
                        <h4 class="mb-4 fw-bold">1. Informasi Pengiriman</h4>
                        <form class="needs-validation" novalidate>
                            <div class="row g-4">
                                <div class="col-sm-6">
                                    <label for="firstName" class="form-label fw-semibold">Nama Depan</label>
                                    <input type="text" class="form-control form-control-lg bg-light border-0 px-3" id="firstName" placeholder="" required>
                                    <div class="invalid-feedback">Nama depan wajib diisi.</div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="lastName" class="form-label fw-semibold">Nama Belakang</label>
                                    <input type="text" class="form-control form-control-lg bg-light border-0 px-3" id="lastName" placeholder="" required>
                                    <div class="invalid-feedback">Nama belakang wajib diisi.</div>
                                </div>

                                <div class="col-12">
                                    <label for="email" class="form-label fw-semibold">Email</label>
                                    <input type="email" class="form-control form-control-lg bg-light border-0 px-3" id="email" placeholder="mail@example.com" required>
                                    <div class="invalid-feedback">Valid email wajib diisi untuk notifikasi pengiriman.</div>
                                </div>
                                
                                <div class="col-12">
                                    <label for="address" class="form-label fw-semibold">Alamat Lengkap</label>
                                    <textarea class="form-control form-control-lg bg-light border-0 px-3" id="address" rows="2" placeholder="Nama Jalan, Gedung, No. Rumah" required></textarea>
                                    <div class="invalid-feedback">Alamat pengiriman wajib diisi.</div>
                                </div>

                                <div class="col-12">
                                    <label for="address2" class="form-label fw-semibold">Detail Alamat <span class="text-muted fw-normal">(Opsional)</span></label>
                                    <input type="text" class="form-control form-control-lg bg-light border-0 px-3" id="address2" placeholder="Blok, Patokan, RT/RW">
                                </div>

                                <div class="col-md-5">
                                    <label for="provinsi" class="form-label fw-semibold">Provinsi</label>
                                    <select class="form-select form-select-lg bg-light border-0 px-3" id="provinsi" required>
                                        <option value="">Pilih Provinsi...</option>
                                    </select>
                                    <div class="invalid-feedback">Silakan pilih provinsi Anda.</div>
                                </div>

                                <div class="col-md-4">
                                    <label for="kota" class="form-label fw-semibold">Kota / Kabupaten</label>
                                    <select class="form-select form-select-lg bg-light border-0 px-3" id="kota" required disabled>
                                        <option value="">Pilih Kota...</option>
                                    </select>
                                    <div class="invalid-feedback">Silakan pilih kota atau kabupaten.</div>
                                </div>

                                <div class="col-md-3">
                                    <label for="zip" class="form-label fw-semibold">Kode Pos</label>
                                    <input type="text" class="form-control form-control-lg bg-light border-0 px-3" id="zip" placeholder="12345" required>
                                    <div class="invalid-feedback">Kode pos diperlukan.</div>
                                </div>
                            </div>
                    </div>
                </div>

                <div class="card shadow-sm border-0 rounded-4">
                    <div class="card-body p-5">
                        <h4 class="mb-4 fw-bold">2. Metode Pembayaran</h4>

                        <div class="my-4 d-flex flex-wrap gap-3">
                            <div class="form-check form-check-inline payment-card m-0">
                                <input id="bank" name="paymentMethod" type="radio" class="form-check-input" checked required>
                                <label class="form-check-label px-2" for="bank">
                                    <i class="fa fa-university text-primary mb-2" style="font-size: 24px;"></i><br>Transfer Bank
                                </label>
                            </div>
                            <div class="form-check form-check-inline payment-card m-0">
                                <input id="qris" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label px-2" for="qris">
                                    <i class="fa fa-qrcode text-primary mb-2" style="font-size: 24px;"></i><br>QRIS
                                </label>
                            </div>
                            <div class="form-check form-check-inline payment-card m-0">
                                <input id="credit" name="paymentMethod" type="radio" class="form-check-input" required>
                                <label class="form-check-label px-2" for="credit">
                                    <i class="fa fa-credit-card text-primary mb-2" style="font-size: 24px;"></i><br>Kartu Kredit
                                </label>
                            </div>
                        </div>

                        <hr class="my-4 text-muted">

                        <button class="btn btn-primary btn-lg w-100 py-3 rounded-pill fw-bold shadow" type="submit" style="font-size: 1.1rem; letter-spacing: 0.5px;">
                            <i class="fa fa-lock me-2"></i> Konfirmasi & Bayar Pesanan
                        </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>

<style>
    /* Styling Kustom Untuk Pengalaman Premium */
    body {
        background-color: #f8f9fa;
        font-family: 'Inter', 'Roboto', sans-serif;
    }
    
    .card {
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }
    
    .form-control:focus, .form-select:focus {
        border-color: #86b7fe;
        box-shadow: 0 0 0 0.25rem rgba(13, 110, 253, 0.15);
        background-color: #fff !important;
    }
    
    /* Custom Radio untuk Pembayaran */
    .payment-card .form-check-label {
        cursor: pointer;
        padding: 15px 25px;
        border: 2px solid #e9ecef;
        border-radius: 12px;
        text-align: center;
        transition: all 0.2s ease;
        width: 140px;
    }
    
    .payment-card .form-check-input {
        display: none;
    }
    
    .payment-card .form-check-input:checked + .form-check-label {
        border-color: #0d6efd;
        background-color: #f0f7ff;
        color: #0d6efd;
    }
    
    .list-group-item {
        border-color: rgba(0,0,0,0.05);
    }
    
    input::placeholder, textarea::placeholder {
        color: #adb5bd !important;
    }
</style>

<!-- SweetAlert & Bootstrap -->
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        // --- 1. VALIDASI FORM BOOTSTRAP ---
        var forms = document.querySelectorAll('.needs-validation')
        Array.prototype.slice.call(forms).forEach(function (form) {
            form.addEventListener('submit', function (event) {
                if (!form.checkValidity()) {
                    event.preventDefault()
                    event.stopPropagation()
                } else {
                    event.preventDefault(); // Mencegah form beneran tersubmit saat demo
                    Swal.fire({
                        icon: 'success',
                        title: 'Pesanan Diproses!',
                        text: 'Terima kasih, pembayaran pesanan rakitan PC Anda akan segera kami proses.',
                        confirmButtonColor: '#0d6efd'
                    });
                }
                form.classList.add('was-validated')
            }, false)
        })

        // --- 2. API WILAYAH INDONESIA (PROVINSI & KOTA) ---
        const provinsiSelect = document.getElementById('provinsi');
        const kotaSelect = document.getElementById('kota');

        // Fetch Daftar Provinsi
        fetch('https://www.emsifa.com/api-wilayah-indonesia/api/provinces.json')
            .then(response => response.json())
            .then(provinces => {
                let options = '<option value="">Pilih Provinsi...</option>';
                provinces.forEach(provinsi => {
                    options += `<option value="${provinsi.id}">${provinsi.name}</option>`;
                });
                provinsiSelect.innerHTML = options;
            })
            .catch(error => console.error('Error fetching provinsi:', error));

        // Letika Provinsi Dipilih, Fetch Daftar Kotanya
        provinsiSelect.addEventListener('change', function () {
            const provinsiId = this.value;
            
            // Reset & Disable Kota saat memilih ulang provinsi
            kotaSelect.innerHTML = '<option value="">Loading...</option>';
            kotaSelect.disabled = true;

            if(provinsiId) {
                fetch(`https://www.emsifa.com/api-wilayah-indonesia/api/regencies/${provinsiId}.json`)
                    .then(response => response.json())
                    .then(regencies => {
                        let options = '<option value="">Pilih Kota / Kabupaten...</option>';
                        regencies.forEach(kota => {
                            options += `<option value="${kota.name}">${kota.name}</option>`;
                        });
                        kotaSelect.innerHTML = options;
                        kotaSelect.disabled = false;
                    })
                    .catch(error => {
                        console.error('Error fetching kota:', error);
                        kotaSelect.innerHTML = '<option value="">Gagal memuat data</option>';
                    });
            } else {
                kotaSelect.innerHTML = '<option value="">Pilih Kota...</option>';
            }
        });
    });
</script>
@endsection