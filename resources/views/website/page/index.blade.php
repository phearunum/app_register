@extends('website.web-master')

@section('content')
    <div class="page-header pattern-bg">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12 mb-2">
                 
                    <div class="d-flex justify-content-between align-items-center">
                        <h1 class="h2 mb-md-0 text-white fw-light"> {{__('lang.welcome')}} </h1>
                        <div class="page-action">

                     
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-3 my-md-3 justify-content-between">
                <div class="col-xxl-12 col-xl-12 col-lg-12">
                    <div class="ph-tab">
                        <input checked="checked" id="tab1" type="radio" name="pct">
                        <input id="tab2" type="radio" name="pct">
                        <input id="tab3" type="radio" name="pct">
                        <nav>
                            <ul>
                                <li class="tab1"><label for="tab1">Application</label></li>
                                <li class="tab2"><label for="tab2">Infor</label></li>
                                <li class="tab3"><label for="tab3">Recently</label></li>
                            </ul>
                        </nav>
                        <section>

                            <div class="tab1 rounded-4">
                                <div class="owl-carousel owl-theme owl_summary owl-loaded owl-drag">






                                    <div class="owl-stage-outer">
                                        <div class="owl-stage"
                                            style="transform: translate3d(-835px, 0px, 0px); transition: all 0.25s ease 0s; width: 2004px;">
                                            <div class="owl-item cloned" style="width: 157px; margin-right: 10px;">
                                                <div class="item card">
                                                    <div class="card-body">
                                                        <svg class="mb-3" width="32" height="32"
                                                            viewBox="0 0 32 32" fill="none"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path class="fill-muted"
                                                                d="M2 3C2 2.20435 2.31607 1.44129 2.87868 0.87868C3.44129 0.31607 4.20435 0 5 0L29 0C29.7956 0 30.5587 0.31607 31.1213 0.87868C31.6839 1.44129 32 2.20435 32 3V29C32 29.7956 31.6839 30.5587 31.1213 31.1213C30.5587 31.6839 29.7956 32 29 32H5C4.20435 32 3.44129 31.6839 2.87868 31.1213C2.31607 30.5587 2 29.7956 2 29V26H1C0.734784 26 0.48043 25.8946 0.292893 25.7071C0.105357 25.5196 0 25.2652 0 25C0 24.7348 0.105357 24.4804 0.292893 24.2929C0.48043 24.1054 0.734784 24 1 24H2V17H1C0.734784 17 0.48043 16.8946 0.292893 16.7071C0.105357 16.5196 0 16.2652 0 16C0 15.7348 0.105357 15.4804 0.292893 15.2929C0.48043 15.1054 0.734784 15 1 15H2V8H1C0.734784 8 0.48043 7.89464 0.292893 7.70711C0.105357 7.51957 0 7.26522 0 7C0 6.73478 0.105357 6.48043 0.292893 6.29289C0.48043 6.10536 0.734784 6 1 6H2V3ZM5 2C4.73478 2 4.48043 2.10536 4.29289 2.29289C4.10536 2.48043 4 2.73478 4 3V29C4 29.2652 4.10536 29.5196 4.29289 29.7071C4.48043 29.8946 4.73478 30 5 30H29C29.2652 30 29.5196 29.8946 29.7071 29.7071C29.8946 29.5196 30 29.2652 30 29V3C30 2.73478 29.8946 2.48043 29.7071 2.29289C29.5196 2.10536 29.2652 2 29 2H5Z">
                                                            </path>
                                                            <path class="fill-muted"
                                                                d="M27 12C27.2652 12 27.5195 12.1054 27.7071 12.2929C27.8946 12.4804 28 12.7348 28 13V19C28 19.2652 27.8946 19.5196 27.7071 19.7071C27.5195 19.8946 27.2652 20 27 20C26.7348 20 26.4804 19.8946 26.2929 19.7071C26.1053 19.5196 26 19.2652 26 19V13C26 12.7348 26.1053 12.4804 26.2929 12.2929C26.4804 12.1054 26.7348 12 27 12ZM9.65597 8.928C9.74886 8.83487 9.85921 8.76099 9.9807 8.71058C10.1022 8.66016 10.2324 8.63421 10.364 8.63421C10.4955 8.63421 10.6257 8.66016 10.7472 8.71058C10.8687 8.76099 10.9791 8.83487 11.072 8.928L13.252 11.108C14.2677 10.3871 15.4824 9.9999 16.728 9.9999C17.9735 9.9999 19.1882 10.3871 20.204 11.108L22.384 8.928C22.5717 8.74049 22.8263 8.63526 23.0917 8.63544C23.357 8.63563 23.6115 8.74123 23.799 8.929C23.9865 9.11677 24.0917 9.37134 24.0915 9.63671C24.0913 9.90207 23.9857 10.1565 23.798 10.344L21.618 12.524C23.098 14.598 23.098 17.404 21.618 19.476L23.798 21.656C23.9857 21.8435 24.0913 22.0979 24.0915 22.3633C24.0917 22.6287 23.9865 22.8832 23.799 23.071C23.6115 23.2588 23.357 23.3644 23.0917 23.3646C22.8263 23.3647 22.5717 23.2595 22.384 23.072L20.204 20.892C19.1883 21.6131 17.9736 22.0005 16.728 22.0005C15.4824 22.0005 14.2676 21.6131 13.252 20.892L11.072 23.072C10.979 23.165 10.8686 23.2387 10.7471 23.289C10.6257 23.3394 10.4955 23.3653 10.364 23.3653C10.2325 23.3653 10.1023 23.3394 9.9808 23.289C9.85932 23.2387 9.74895 23.165 9.65597 23.072C9.56299 22.979 9.48924 22.8686 9.43892 22.7472C9.38861 22.6257 9.36271 22.4955 9.36271 22.364C9.36271 22.2325 9.38861 22.1023 9.43892 21.9808C9.48924 21.8594 9.56299 21.749 9.65597 21.656L11.836 19.476C11.1151 18.4603 10.7279 17.2455 10.7279 16C10.7279 14.7545 11.1151 13.5397 11.836 12.524L9.65597 10.344C9.56284 10.2511 9.48896 10.1408 9.43855 10.0193C9.38813 9.89778 9.36218 9.76753 9.36218 9.636C9.36218 9.50447 9.38813 9.37422 9.43855 9.25273C9.48896 9.13124 9.56284 9.02089 9.65597 8.928ZM13.9 13.172C13.5179 13.541 13.2132 13.9824 13.0036 14.4704C12.7939 14.9584 12.6836 15.4833 12.679 16.0144C12.6744 16.5455 12.7756 17.0722 12.9767 17.5638C13.1778 18.0554 13.4748 18.502 13.8504 18.8776C14.226 19.2532 14.6726 19.5502 15.1642 19.7513C15.6557 19.9524 16.1825 20.0536 16.7136 20.049C17.2447 20.0444 17.7696 19.934 18.2576 19.7244C18.7456 19.5148 19.187 19.21 19.556 18.828C20.2846 18.0736 20.6878 17.0632 20.6787 16.0144C20.6696 14.9656 20.2489 13.9624 19.5072 13.2207C18.7656 12.4791 17.7624 12.0584 16.7136 12.0493C15.6648 12.0402 14.6544 12.4434 13.9 13.172Z">
                                                            </path>
                                                        </svg>
                                                        <p class="small text-uppercase mb-1 text-muted">Revenue</p>
                                                        <h5 class="mb-0">$9,780.00</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                  
                                </div>
                              
                            </div>

                            <div class="tab2 rounded-4">
                                <div class="owl-carousel owl-theme owl-loaded owl-drag owl-hidden" id="live_coins">
                                    <div class="owl-stage-outer">
                                        
                                    </div>
                                   
                                </div>
                               
                              
                            </div>

                            <div class="tab3 rounded-4">
                                <div class="carousel vertical slide" data-bs-ride="carousel" data-bs-interval="3000">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active">
                                            <div class="row g-2">
                                                <div class="col-12">
                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                        <h6 class="mb-0 text-white">Assigned Tasks</h6>
                                                       
                                                    </div>
                                                </div>
                                              
                                            </div>
                                        </div>
                                        <div class="carousel-item">
                                            <div class="row g-2">
                                                <div class="col-12">
                                                    <div class="d-flex justify-content-between align-items-center mb-3">
                                                        <h6 class="mb-0 text-white">Customer Orders</h6>
                                                    </div>
                                                </div>
                                             
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-4 col-lg-12 d-none d-xl-inline-flex">
                   
                </div>
            </div>
        </div>
    </div>
@endsection
