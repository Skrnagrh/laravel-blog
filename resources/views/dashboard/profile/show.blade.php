<h5 class="card-title">Tentang {{ $profile->name }}</h5>
<p class="small fst-italic">{{ $profile->about }}</p>

<h5 class="card-title">Profile Detail</h5>

<div class="row">
    <div class="col-lg-3 col-md-4 label ">Nama Lengkap</div>
    <div class="col-lg-9 col-md-8">{{ $profile->name }}</div>
</div>

<div class="row">
    <div class="col-lg-3 col-md-4 label">Perusahaan</div>
    <div class="col-lg-9 col-md-8">{{ $profile->company }}</div>
</div>

<div class="row">
    <div class="col-lg-3 col-md-4 label">Pekerjaan</div>
    <div class="col-lg-9 col-md-8">{{ $profile->job }}</div>
</div>

<div class="row">
    <div class="col-lg-3 col-md-4 label">Country</div>
    <div class="col-lg-9 col-md-8">{{ $profile->country }}</div>
</div>

<div class="row">
    <div class="col-lg-3 col-md-4 label">Alamat</div>
    <div class="col-lg-9 col-md-8">{{ $profile->address }}</div>
</div>

<div class="row">
    <div class="col-lg-3 col-md-4 label">No. Handphone</div>
    <div class="col-lg-9 col-md-8">{{ $profile->phone }}</div>
</div>

<div class="row">
    <div class="col-lg-3 col-md-4 label">Alamat Email</div>
    <div class="col-lg-9 col-md-8">{{ $profile->email }}</div>
</div>