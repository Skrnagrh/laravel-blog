<form action="/password" method="POST">
    @csrf

    <div class="row mb-3">
        <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Kata Sandi
            Lama</label>
        <div class="col-md-8 col-lg-9">
            <div class="form-group position-relative has-icon-right">
                <input class="form-control @error('old_password') is-invalid @enderror" type="password"
                    name="old_password" placeholder="Kata Sandi Lama" id="old-password-input">
                <div class="form-control-icon-end position-absolute top-50 translate-middle-y end-0 me-2">
                    <i id="password-toggle" class="bi bi-eye-slash toggle-password"
                        onclick="togglePasswordVisibility()"></i>
                </div>
                @error('old_password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <label for="newKata Sandi" class="col-md-4 col-lg-3 col-form-label">Kata Sandi
            Baru</label>
        <div class="col-md-8 col-lg-9">
            <div class="form-group position-relative has-icon-right">
                <input class="form-control" type="password" name="new_password" placeholder="Kata Sandi Baru"
                    id="new-password-input">
                <div class="form-control-icon-end position-absolute top-50 translate-middle-y end-0 me-2">
                    <i id="new-password-toggle" class="bi bi-eye-slash toggle-new-password"
                        onclick="toggleNewPasswordVisibility()"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="row mb-3">
        <label for="renewKata Sandi" class="col-md-4 col-lg-3 col-form-label">Konfirmasi
            Kata Sandi Baru</label>
        <div class="col-md-8 col-lg-9">
            <div class="form-group position-relative has-icon-right">
                <input class="form-control" type="password" name="new_password_confirmation"
                    placeholder="Konfirmasi Kata Sandi Baru" id="confirm-password-input">
                <div class="form-control-icon-end position-absolute top-50 translate-middle-y end-0 me-2">
                    <i id="confirm-password-toggle" class="bi bi-eye-slash toggle-confirm-password"
                        onclick="toggleConfirmPasswordVisibility()"></i>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center d-flex justify-content-end">
        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
    </div>
</form>