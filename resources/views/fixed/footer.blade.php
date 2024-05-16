<!-- ***** Footer Start ***** -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="first-item">
                    <div class="logo">
                        <img src="{{asset('assets/images/white-logo.png')}}" alt="Hexashop">
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <h4>Shopping &amp; Categories</h4>
                <ul>
                    <li><a href="{{route('men')}}">Men’s Shopping</a></li>
                    <li><a href="{{route('women')}}">Women’s Shopping</a></li>
                    <li><a href="{{route('kids')}}">Kid's Shopping</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h4>Useful Links</h4>
                <ul>
                    <li><a href="{{route('home')}}">Home</a></li>
                    <li><a href="{{route('about')}}">About Us</a></li>
                    <li><a href="{{route('contact')}}">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-lg-3">
                <h4>Help &amp; Information</h4>
                <ul>
                    <li><a href="#">Call center:</a></li>
                    <li><a href="#">0800-011-011</a></li>
                    <li><a href="#">Work hours:</a></li>
                    <li><a href="#">07:30 AM - 9:30 PM Daily</a></li>
                </ul>
            </div>
            <div class="col-lg-12">
                <div class="under-footer">
                    <p>Copyright © 2022 Hexashop, All Rights Reserved.

                        <br>Designed by: <a href="{{route('about')}}">Nikola Lazarevic</a></p>
                    <ul>
                        @foreach($socialMedias as $sm)
                            <li><a href="{{$sm->route}}"><i class="fa fa-{{$sm->icon}}"></i></a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
