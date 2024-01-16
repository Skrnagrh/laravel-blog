<!-- Footer Start -->
<div class="container-fluid bg-dark footer py-5">
    <div class="container py-5">
        {{-- <div class="pb-4 mb-4" style="border-bottom: 1px solid rgba(255, 255, 255, 0.08);">
            <div class="row g-4">
                <div class="col-lg-3">
                    <a href="/" class="d-flex flex-column flex-wrap">
                        <p class="text-white mb-0 display-6">Newsers</p>
                        <small class="text-light" style="letter-spacing: 11px; line-height: 0;">Newspaper</small>
                    </a>
                </div>
                <div class="col-lg-9">
                    <div class="d-flex position-relative rounded-pill overflow-hidden">
                        <input class="form-control border-0 w-100 py-3 rounded-pill" type="email"
                            placeholder="example@gmail.com">
                        <button type="submit"
                            class="btn btn-primary border-0 py-3 px-5 rounded-pill text-white position-absolute"
                            style="top: 0; right: 0;">Subscribe</button>
                    </div>
                </div>
            </div>
        </div> --}}
        <div class="row justify-content-between">
            <div class="col-lg-6 col-xl-3">
                <div class="footer-item-1">
                    <h4 class="mb-4 text-white">Kontak</h4>
                    <p class="text-secondary line-h">Address: <span class="text-white">123 Jalan, 45 Serang</span>
                    </p>
                    <p class="text-secondary line-h">Email: <span class="text-white">ptblog@gmail.com</span></p>
                    <p class="text-secondary line-h">Phone: <span class="text-white">+0123 4567 8910</span></p>
                    <div class="d-flex line-h">
                        <a class="btn btn-light me-2 btn-md-square rounded-circle"
                            href="https://www.instagram.com/skrnagrh"><i class="fab fa-instagram text-dark"></i></a>
                        <a class="btn btn-light me-2 btn-md-square rounded-circle"
                            href="https://www.linkedin.com/in/sukron/"><i class="fab fa-linkedin-in text-dark"></i></a>
                        <a class="btn btn-light me-2 btn-md-square rounded-circle" href="https://github.com/skrnagrh"><i
                                class="fab fa-github text-dark"></i></a>
                        <a class="btn btn-light me-2 btn-md-square rounded-circle"
                            href="https://api.whatsapp.com/send?phone=6285691468025"><i
                                class="fab fa-whatsapp text-dark"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-xl-3">
                <div class="d-flex flex-column text-start footer-item-3">
                    <h4 class="mb-4 text-white">Kategori</h4>
                    @foreach ($categories as $category)
                    <a class="btn-link text-white" href="kategori?category={{ $category->slug }}"><i
                            class="fas fa-angle-right text-white me-2"></i>
                        {{ $category->name }}</a>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-6 col-xl-3">
                <div class="footer-item-4">
                    <h4 class="mb-4 text-white">Galeri Kami</h4>
                    <div class="row g-2">
                        <div class="col-4">
                            <div class="rounded overflow-hidden">
                                <img src="/assets/home/img/footer-1.jpg" class="img-zoomin img-fluid rounded w-100"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="rounded overflow-hidden">
                                <img src="/assets/home/img/footer-2.jpg" class="img-zoomin img-fluid rounded w-100"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="rounded overflow-hidden">
                                <img src="/assets/home/img/footer-3.jpg" class="img-zoomin img-fluid rounded w-100"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="rounded overflow-hidden">
                                <img src="/assets/home/img/footer-4.jpg" class="img-zoomin img-fluid rounded w-100"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="rounded overflow-hidden">
                                <img src="/assets/home/img/footer-5.jpg" class="img-zoomin img-fluid rounded w-100"
                                    alt="">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="rounded overflow-hidden">
                                <img src="/assets/home/img/footer-6.jpg" class="img-zoomin img-fluid rounded w-100"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid copyright bg-dark py-4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 text-center mb-3 mb-md-0">
                <span class="text-light"><a href="#"><i class="fas fa-copyright text-light me-2"></i>Your Site
                        Name</a>,
                    <?= Date('Y'); ?> All right reserved.
                </span>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->
