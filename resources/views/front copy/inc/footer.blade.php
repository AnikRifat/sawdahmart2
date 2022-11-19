<footer class="footer-area pt-100 pb-95 border-top-1" id="contact">
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-lg-3 col-md-5 col-12">
                <div class="footer-widget">
                    <div class="footer-widget-l-content">
                        {{-- <h4>20 Years Experience</h4> --}}
                        <ul>
                            <li><a href="#"><i class="ion-social-twitter"></i></a></li>
                            <li><a href="#"><i class="ion-social-tumblr"></i></a></li>
                            <li><a href="#"><i class="ion-social-facebook"></i></a></li>
                            <li><a href="#"><i class="ion-social-instagram-outline"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-7 col-12">
                <div class="footer-widget">
                    <div class="footer-widget-m-content text-center">
                        <div class="footer-logo">
                            <a href="#"><img src="{{ asset('/') }}assets/images/logo/{{ $content->logo }}" alt=""></a>
                        </div>

                        {{-- <p>Copyright © <a href="https://hastech.company/">HasTech</a> 2021 . All Right Reserved.</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12 col-12">
                <div class="footer-widget">
                    <div class="footer-widget-r-content f-right">
                        <ul>
                            <li><span>Phone :</span> {{ $content->phone }}</li>
                            <li><span>Email : </span> <a href="#">{{ $content->email }}</a></li>
                            <li><span>Address :</span> {{ $content->address }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
