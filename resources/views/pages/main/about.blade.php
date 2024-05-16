@extends('layouts.layout')

@section('description') Hexashop is clothing store that is currently located in Belgrade. Our store tries to bring the best of all worlds including street wear, fashion wear, trending wear, etc... Be sure to check out our store live, we guarantee You will find what You are looking for! @endsection
@section('keywords') Hexa shop, clothes, women, men, kids, best, awesome, online, shopping, shop, located, clothing, street, fashion, trend, wear @endsection
@section('title') About Us @endsection

@section('content')

    <!-- ***** Main Banner Area Start ***** -->
    <div class="page-heading about-page-heading" id="top">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-content">
                        <h2>About Our Company</h2>
                        <span>Checkout a few things about our store</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Main Banner Area End ***** -->

    <!-- ***** About Area Starts ***** -->
    <div class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="left-image">
                        <img src="assets/images/about-left-image.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="right-content">
                        <h4>About Us</h4>
                        <span>Hexashop is clothing store that is currently located in Belgrade. Our store tries to bring the best of all worlds including street wear, fashion wear, trending wear, etc... Be sure to check out our store live, we guarantee You will find what You are looking for!</span>
                        <div class="quote">
                            <i class="fa fa-quote-left"></i><p>Fashion is like eating, you shouldn't stick to the same menu...</p>
                        </div>
                        <p>In our store, You can see workers from all around the world. Our main goal is to bring back street wear in life. These days, You can wear something casual, for streets, and still people be looking at You, asking questions and give You compliments. We are here to provide You clothes like that. We are always trying to have happy and loyal customers who will wear our clothes with smile, prideful and confident!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** About Area Ends ***** -->

    <!-- ***** Our Team Area Starts ***** -->
    <section class="our-team">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Our Amazing Team</h2>
                        <span>Some of our people that </span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-item">
                        <div class="thumb">
                            <img src="assets/images/team-member-01.jpg">
                        </div>
                        <div class="down-content">
                            <h4>Rachel Williams</h4>
                            <span>Product Caretaker</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-item">
                        <div class="thumb">
                            <img src="assets/images/team-member-02.jpg">
                        </div>
                        <div class="down-content">
                            <h4>Joey Joe</h4>
                            <span>Product Manager</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="team-item">
                        <div class="thumb">
                            <img src="assets/images/team-member-03.jpg">
                        </div>
                        <div class="down-content">
                            <h4>Johnny O'Neal</h4>
                            <span>Fashion Trender</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Our Team Area Ends ***** -->

    <!-- ***** Services Area Starts ***** -->
    <section class="our-services">
        <div class="container" id="author">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Author</h2>
                        <span>See some info about our author of this website</span>
                    </div>
                </div>
                <div class="col-4">
                    <div class="service-item">
                        <h4>Author</h4>
                        <p>Hello, my name is Nikola Lazarevic. I'm front-end and back-end web developer. For front-end development, I'm using HTML (4 and 5), CSS(2 and 3), Javascript, Jquery and focuses on writing elegant, clean and efficient code. As for back-end development, I'm learning procedural PHP, Laravel, C# and ASP .NET. I'm learning also to focus as much as I can on UI/UX design. I'm studying at The ICT College of Applied Studies in Belgrade, Serbia. I came from a small town named Gornji Milanovac where I was a student at The Economically-comercial High School "Knjaz Milos". You can see some of my front-end projects <a href="https://github.com/lazarevicN" target="_blank" class="redColorHeadings text-decoration-none">here.</a></p>
                        <img src="{{asset('assets/images/autor.jpg')}}" alt="Author">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ***** Services Area Ends ***** -->


@endsection
