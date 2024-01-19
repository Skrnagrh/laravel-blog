<form method="post" action="/dashboard/profile/{{ $profile->id }}" class="mb-5"
    enctype="multipart/form-data">
    @method('put')
    @csrf
    <div class="row mb-3">
        <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile
            Image</label>
        <div class="col-md-8 col-lg-9">
            @if ($profile->profile_image)
            <img src="{{ asset('storage/' . $profile->profile_image) }}" id="previewImage">
            @else
            <img src="/assets/dashboard/img/profile-img.jpg" id="previewImage">
            @endif
            <div class="pt-2">
                <input type="file" name="profile_image" id="profileImage"
                    style="display: none;" accept="image/*">
                <label for="profileImage" class="btn btn-primary btn-sm"
                    title="Upload new profile image">
                    <i class="bi bi-upload text-white"></i> </label>
                <a href="#" class="btn btn-danger btn-sm" title="Remove my profile image"
                    id="removeProfileImage">
                    <i class="bi bi-trash"></i> </a>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Nama Lengkap</label>
        <div class="col-md-8 col-lg-9">
            <input name="name" type="text" class="form-control" id="name"
                value="{{ old('name', $profile->name) }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="about" class="col-md-4 col-lg-3 col-form-label">Tentang</label>
        <div class="col-md-8 col-lg-9">
            <textarea name="about" class="form-control" id="about"
                style="height: 100px">{{ old('about', $profile->about) }}</textarea>
        </div>
    </div>

    <div class="row mb-3">
        <label for="company" class="col-md-4 col-lg-3 col-form-label">Perusahaan</label>
        <div class="col-md-8 col-lg-9">
            <input name="company" type="text" class="form-control" id="company"
                value="{{ old('company', $profile->company) }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="Job" class="col-md-4 col-lg-3 col-form-label">Pekerjaan</label>
        <div class="col-md-8 col-lg-9">
            <input name="job" type="text" class="form-control" id="Job"
                value="{{ old('job', $profile->job) }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="Country" class="col-md-4 col-lg-3 col-form-label">Country</label>
        <div class="col-md-8 col-lg-9">
            <input name="country" type="text" class="form-control" id="Country"
                value="{{ old('country', $profile->country) }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="Address" class="col-md-4 col-lg-3 col-form-label">Alamat</label>
        <div class="col-md-8 col-lg-9">
            <input name="address" type="text" class="form-control" id="Address"
                value="{{ old('address', $profile->address) }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="Phone" class="col-md-4 col-lg-3 col-form-label">No. Handphone</label>
        <div class="col-md-8 col-lg-9">
            <input name="phone" type="text" class="form-control" id="Phone"
                value="{{ old('phone', $profile->phone) }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="Email" class="col-md-4 col-lg-3 col-form-label">Alamat Email</label>
        <div class="col-md-8 col-lg-9">
            <input name="email" type="email" class="form-control" id="Email"
                value="{{ old('email', $profile->email) }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="Twitter" class="col-md-4 col-lg-3 col-form-label">Twitter </label>
        <div class="col-md-8 col-lg-9">
            <input name="twitter" type="text" class="form-control" id="Twitter"
                value="{{ old('twitter', $profile->twitter) }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="Facebook" class="col-md-4 col-lg-3 col-form-label">Facebook </label>
        <div class="col-md-8 col-lg-9">
            <input name="facebook" type="text" class="form-control" id="Facebook"
                value="{{ old('facebook', $profile->facebook) }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="Instagram" class="col-md-4 col-lg-3 col-form-label">Instagram </label>
        <div class="col-md-8 col-lg-9">
            <input name="instagram" type="text" class="form-control" id="Instagram"
                value="{{ old('instagram', $profile->instagram) }}">
        </div>
    </div>

    <div class="row mb-3">
        <label for="Linkedin" class="col-md-4 col-lg-3 col-form-label">Linkedin </label>
        <div class="col-md-8 col-lg-9">
            <input name="linkedin" type="text" class="form-control" id="Linkedin"
                value="{{ old('linkedin', $profile->linkedin) }}">
        </div>
    </div>

    <div class="text-center">
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>
