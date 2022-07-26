@extends('website.web-master')

@section('content')
<style>
    #carousel{
        max-height: 300px;
    }
    .carousel-inner {
        width: 100%;
        display: inline-block;
        position: relative;
        max-height: 300px;
    }
    .carousel-inner {
        padding-top: 43.25%;
        display: block;
        content: "";
        max-height: 300px;
    }
    .carousel-item {
        position: absolute;
        top: 0;
        bottom: 0;
        right: 0;
        left: 0;
        background: skyblue;
        background: no-repeat center center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        max-height: 300px;
    }

    .caption {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
        width: 60%;
        z-index: 9;
        margin-top: 20px;
        text-align: center;
        max-height: 300px;
    }

    .caption h1 {
        color: #fff;
        font-size: 52px;
        font-weight: 700;
        margin-bottom: 23px;
    }

    .caption h2 {
        color: rgba(255, 255, 255, .75);
        font-size: 26px;
        font-weight: 300;
    }

    a.big-button {
        color: #fff;
        font-size: 19px;
        font-weight: 700;
        text-transform: uppercase;
        background: #eb7a00;
        background: rgba(255, 0, 0, 0.75);
        padding: 28px 35px;
        border-radius: 3px;
        margin-top: 80px;
        margin-bottom: 0;
        display: inline-block;
    }

    a.big-button:hover {
        text-decoration: none;
        background: rgba(255, 0, 0, 0.9);
    }

    a.view-demo {
        color: #fff;
        font-size: 21px;
        font-weight: 700;
        display: inline-block;
        margin-top: 35px;
    }

    a.view-demo:hover {
        text-decoration: none;
        color: #333;
    }

    .carousel-indicators .active {
        background: #fff;
    }

    .carousel-indicators li {
        background: rgba(255, 255, 255, 0.4);
        border-top: 20px solid;
        z-index: 15;
    }
    <style>
.our-services {
    text-align: center;
    padding: 50px 0px;
    background-color: #fff;
}
.our-services h1 {
    margin-bottom: 45px;
    font-size: 40px;
    color: #a0a0a0;
    text-transform: uppercase;
}
.our-services a{
    color: #9c27b0;
}
.our-services a:hover {
    color: #F44336;
    text-decoration: none;
}
.service-box {
    background-color: #f5f5f5;
    padding: 20px;
    margin: 15px 0px;
    border-radius: 10px;
    transition: 0.4s;
}
.service-box:hover {
    box-shadow: 0px 0px 28px -10px #000;
    background-color: #fff;
}
.our-services .icon {
    display: inline-block;
    width: 70px;
    height: 70px;
    border: 3px solid #ba68c8;
    transform: rotate(45deg);
    margin-bottom: 30px;
    margin-top: 16px;
    transition: 0.3s linear;
}
.our-services .icon i {
    line-height: 70px;
    transform: rotate(-45deg);
    font-size: 26px;
    color: #ba68c8;
}
.our-services .short-description {
    font-size: 14px;
}
</style>
    <div class="page-header pattern-bg">
        <div class="container">
            <div id="carousel" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel" data-slide-to="1"></li>
                    <li data-target="#carousel" data-slide-to="2"></li>
                </ol>

                <div class="carousel-inner" role="listbox">

                    
                    <div class="carousel-item active"
                    style="background-image: url('/website/img/slide1.jpeg'); background-size: cover;">
                    <div class="caption">
                        <h1>Create and share your whatever</h1>
                        <h2>Make it easy for you to do whatever this thing does.</h2>
                    </div>
                </div>
                    <div class="carousel-item"
                        style="background-image: url('/website/img/slide1.png'); background-size: cover;">
                        <div class="caption">
                            <h1>Create and share your whatever</h1>
                            <h2>Make it easy for you to do whatever this thing does.</h2>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        
    </div>
    <div class="container p-0">
        <div class="row">
            <div <div class="col-12 mb-2 p-0">

                <div class="d-flex justify-content-between align-items-center">
                    
                    <div class="page-action">
                        <div class="our-services">
                            <div class="container">
                                <div class="row-title mb-2 app_font_titel mt-4 text-primary">
                                    <h5>
                                    សេចក្ដីប្រកាសព័ត៌មានថ្មីៗ 
                                    </h5>
                                </div>
                                <div class="row">
                                    <div class="col-md-4 col-sm-6">
                                        <div class="service-box">
                                            <div class="icon">
                                                <i class="fas fa-paint-brush"></i>
                                            </div>
                                            <a href="#"><h3>Web Designs</h3></a>
                                            <div class="short-description">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has</p>
                                            </div>
                                        </div>
                                    </div>
                    
                                    <div class="col-md-4 col-sm-6">
                                        <div class="service-box">
                                            <div class="icon">
                                                <i class="fas fa-code"></i>
                                            </div>
                                            <a href="#"><h3>Web Development</h3></a>
                                            <div class="short-description">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et eaque ratione rem porro, nihil.</p>
                                            </div>
                                        </div>
                                    </div>
                    
                                    <div class="col-md-4 col-sm-6">
                                        <div class="service-box">
                                            <div class="icon">
                                                <i class="fas fa-mobile-alt"></i>
                                            </div>
                                            <a href="#"><h3>Responsive Designs</h3></a>
                                            <div class="short-description">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has</p>
                                            </div>
                                        </div>
                                    </div>
                    
                                    <div class="col-md-4 col-sm-6">
                                        <div class="service-box">
                                            <div class="icon">
                                                <i class="fas fa-video"></i>
                                            </div>
                                            <a href="#"><h3>Video Editing</h3></a>
                                            <div class="short-description">
                                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et eaque ratione rem porro, nihil.</p>
                                            </div>
                                        </div>
                                    </div>
                    
                                    <div class="col-md-4 col-sm-6">
                                        <div class="service-box">
                                            <div class="icon">
                                                <i class="fab fa-apple"></i>
                                            </div>
                                            <a href="#"><h3>IOS</h3></a>
                                            <div class="short-description">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has</p>
                                            </div>
                                        </div>
                                    </div>
                    
                                    <div class="col-md-4 col-sm-6">
                                        <div class="service-box">
                                            <div class="icon">
                                                <i class="fab fa-android"></i>
                                            </div>
                                            <a href="#"><h3>Android</h3></a>
                                            <div class="short-description">
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="row g-3 my-md-3 justify-content-between">
                
        </div>
    </div>
@endsection
