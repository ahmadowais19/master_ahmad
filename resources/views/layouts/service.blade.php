@extends('index')





@section('content')
<div class="container-fluid bg-breadcrumb">
    <div class="bg-breadcrumb-single"></div>
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Services</h4>
        <ol class="breadcrumb justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Pages</a></li>
            <li class="breadcrumb-item active text-primary">Service</li>
        </ol>    
    </div>
</div>
<!-- Header End -->


{{-- <div class="container py-5" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; max-width: 1200px; margin: 0 auto;">
    <h2 style="color: #2c3e50; font-weight: 600; margin-bottom: 25px; border-bottom: 2px solid #3498db; padding-bottom: 10px;">
        {{ $course->name_course }}
    </h2>

    <!-- Start Tabs Navigation -->
    <ul class="nav nav-tabs" id="courseTabs" role="tablist" style="border-bottom: 2px solid #dee2e6;">
        <li class="nav-item" role="presentation">
            <button class="nav-link active" id="info-tab" data-bs-toggle="tab" data-bs-target="#info" type="button" role="tab"
                    style="color: #495057; font-weight: 500; border: none; padding: 12px 20px; background: none; transition: all 0.3s;">
                معلومات الكورس
            </button>
        </li>
        <li class="nav-item" role="presentation">
            <button class="nav-link" id="videos-tab" data-bs-toggle="tab" data-bs-target="#videos" type="button" role="tab"
                    style="color: #495057; font-weight: 500; border: none; padding: 12px 20px; background: none; transition: all 0.3s;">
                الفيديوهات
            </button>
        </li>
    </ul>
    <!-- End Tabs Navigation -->

    <!-- Start Tabs Content -->
    <div class="tab-content mt-3" id="courseTabsContent">
        <!-- Tab: معلومات الكورس -->
        <div class="tab-pane fade show active" id="info" role="tabpanel" aria-labelledby="info-tab"
             style="background: #f8f9fa; padding: 25px; border-radius: 0 0 8px 8px; border: 1px solid #dee2e6; border-top: none;">
            <p style="color: #495057; line-height: 1.7; font-size: 16px;">
                {{ $course->description_course }}
            </p>
        </div>

        <!-- Tab: الفيديوهات -->
        <div class="tab-pane fade" id="videos" role="tabpanel" aria-labelledby="videos-tab"
             style="background: #f8f9fa; padding: 25px; border-radius: 0 0 8px 8px; border: 1px solid #dee2e6; border-top: none;">
            <div style="display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px;">
                <h4 style="color: #2c3e50; font-weight: 600;">فيديوهات الكورس</h4>
                <a href="{{ route('courses.videos.create', $course->id) }}" 
                   style="background: #3498db; color: white; padding: 8px 15px; border-radius: 4px; text-decoration: none; font-weight: 500;">
                    إضافة فيديو جديد
                </a>
            </div>

            @if($course->videos->count())
                <div class="row" style="display: grid; grid-template-columns: repeat(auto-fill, minmax(350px, 1fr)); gap: 20px;">
                    @foreach($course->videos as $video)
                        <div style="background: white; border-radius: 8px; overflow: hidden; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                            <div style="padding: 15px; border-bottom: 1px solid #eee;">
                                <h5 style="color: #2c3e50; font-weight: 600; margin: 0 0 10px 0;">
                                    {{ $video->title }}
                                </h5>
                            </div>
                            <video width="100%" controls style="display: block; background: #000;">
                                <source src="{{ asset('storage/' . $video->video_path) }}" type="video/mp4">
                                متصفحك لا يدعم عرض الفيديو.
                            </video>
                            <div style="padding: 15px; display: flex; justify-content: space-between; align-items: center;">
                                <span style="color: #7f8c8d; font-size: 14px;">
                                    {{ $video->created_at->diffForHumans() }}
                                </span>
                                <div>
                                    <a href="#" style="color: #3498db; margin-left: 10px; text-decoration: none;">
                                        <i class="fas fa-edit"></i> تعديل
                                    </a>
                                    <a href="#" style="color: #e74c3c; margin-left: 10px; text-decoration: none;">
                                        <i class="fas fa-trash"></i> حذف
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            @else
                <div style="text-align: center; padding: 40px 20px; background: white; border-radius: 8px; box-shadow: 0 2px 10px rgba(0,0,0,0.1);">
                    <i class="fas fa-video-slash" style="font-size: 50px; color: #bdc3c7; margin-bottom: 20px;"></i>
                    <h5 style="color: #7f8c8d; font-weight: 500;">لا توجد فيديوهات متاحة لهذا الكورس</h5>
                    <a href="{{ route('courses.videos.create', $course->id) }}" 
                       style="display: inline-block; margin-top: 15px; background: #3498db; color: white; padding: 8px 20px; border-radius: 4px; text-decoration: none;">
                        إضافة أول فيديو
                    </a>
                </div>
            @endif
        </div>
    </div>
    <!-- End Tabs Content -->
</div>

<style>
    .nav-tabs .nav-link {
        position: relative;
    }
    .nav-tabs .nav-link.active {
        color: #3498db !important;
        background: transparent !important;
        border: none !important;
    }
    .nav-tabs .nav-link.active:after {
        content: '';
        position: absolute;
        bottom: -2px;
        left: 0;
        width: 100%;
        height: 2px;
        background: #3498db;
    }
    video {
        border-radius: 0 0 8px 8px;
    }
</style> --}}




<!-- Services Start -->
<div class="container-fluid service py-5">
    <div class="container py-5">
        <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
            <h4 class="text-primary">Our Courses</h4>
            <h1 class="display-4">Explore the Latest Educational Content</h1>
        </div>

        <div class="row g-4 justify-content-center text-center">
            @foreach($courses as $index => $course)
                <div class="col-md-6 col-lg-4 col-xl-3 wow fadeInUp" data-wow-delay="{{ 0.1 + ($index * 0.2) }}s">
                    <div class="service-item bg-light rounded">
                        <div class="service-img">
                            <img src="{{ asset('storage/' . $course->image) }}" class="img-fluid w-100 rounded-top" alt="{{ $course->title }}">
                        </div>
                        <div class="service-content text-center p-4">
                            <div class="service-content-inner">
                                <a href="{{ route('course.show', $course->id) }}" class="h4 mb-4 d-inline-flex text-start">
                                    <i class="fas fa-play-circle fa-2x me-2"></i>
                                    {{ Str::limit($course->title, 25) }}
                                </a>
                                <p class="mb-4">{{ Str::limit($course->description, 80) }}</p>
                                <a class="btn btn-light rounded-pill py-2 px-4" href="{{ route('course.userShow', $course->id) }}">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

            {{-- <div class="col-12">
                <a class="btn btn-primary rounded-pill py-3 px-5 wow fadeInUp" data-wow-delay="0.1s" href="{{ route('course.index') }}">
                    View All Courses
                </a> --}}
            </div>
        </div>
    </div>
</div>
<!-- Services End -->









<!-- Testimonial Start -->
<div class="container-fluid testimonial bg-light py-5">
    <div class="container py-5">
        <div class="row g-4 align-items-center">
            <div class="col-xl-4 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="h-100 rounded">
                    <h4 class="text-primary">Our Feedbacks </h4>
                    <h1 class="display-4 mb-4">Clients are Talking</h1>
                    <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Harum atque soluta unde itaque. Consequatur quam odit blanditiis harum veritatis porro.</p>
                    <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Read All Reviews <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
            <div class="col-xl-8">
                <div class="testimonial-carousel owl-carousel wow fadeInUp" data-wow-delay="0.1s">
                    <div class="testimonial-item bg-white rounded p-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="d-flex">
                            <div><i class="fas fa-quote-left fa-3x text-dark me-3"></i></div>
                            <p class="mt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam eos impedit eveniet dolorem culpa ullam incidunt vero quo recusandae nemo? Molestiae doloribus iure,
                            </p>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="my-auto text-end">
                                <h5>Person Name</h5>
                                <p class="mb-0">Profession</p>
                            </div>
                            <div class="bg-white rounded-circle ms-3">
                                <img src="img/testimonial-1.jpg" class="rounded-circle p-2" style="width: 80px; height: 80px; border: 1px solid; border-color: var(--bs-primary);" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-white rounded p-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="d-flex">
                            <div><i class="fas fa-quote-left fa-3x text-dark me-3"></i></div>
                            <p class="mt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam eos impedit eveniet dolorem culpa ullam incidunt vero quo recusandae nemo? Molestiae doloribus iure,
                            </p>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="my-auto text-end">
                                <h5>Person Name</h5>
                                <p class="mb-0">Profession</p>
                            </div>
                            <div class="bg-white rounded-circle ms-3">
                                <img src="img/testimonial-2.jpg" class="rounded-circle p-2" style="width: 80px; height: 80px; border: 1px solid; border-color: var(--bs-primary);" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-white rounded p-4 wow fadeInUp" data-wow-delay="0.7s">
                        <div class="d-flex">
                            <div><i class="fas fa-quote-left fa-3x text-dark me-3"></i></div>
                            <p class="mt-4">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Magnam eos impedit eveniet dolorem culpa ullam incidunt vero quo recusandae nemo? Molestiae doloribus iure,
                            </p>
                        </div>
                        <div class="d-flex justify-content-end">
                            <div class="my-auto text-end">
                                <h5>Person Name</h5>
                                <p class="mb-0">Profession</p>
                            </div>
                            <div class="bg-white rounded-circle ms-3">
                                <img src="img/testimonial-3.jpg" class="rounded-circle p-2" style="width: 80px; height: 80px; border: 1px solid; border-color: var(--bs-primary);" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Testimonial End -->


<!-- FAQ Start -->
<div class="container-fluid faq py-5">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="pb-5">
                    <h4 class="text-primary">FAQs</h4>
                    <h1 class="display-4">Get the Answers to Common Questions</h1>
                </div>
               <div class="accordion bg-light rounded p-4" id="accordionExample">
                    <div class="accordion-item border-0 mb-4">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button text-dark fs-5 fw-bold rounded-top" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseTOne">
                                What Does a Financial Advisor Do?
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body my-2">
                                <h5>Dolor sit amet consectetur adipisicing elit.</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad nemo impedit, sapiente quis illo quia nulla atque maxime fuga minima ipsa quae cum consequatur, sit, delectus exercitationem odit officiis maiores! Neque, quidem corrupti modi architecto eos saepe incidunt dignissimos rerum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 mb-4">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed text-dark fs-5 fw-bold rounded-top" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                What industries do you specialize in? 
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body my-2">
                                <h5>Dolor sit amet consectetur adipisicing elit.</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad nemo impedit, sapiente quis illo quia nulla atque maxime fuga minima ipsa quae cum consequatur, sit, delectus exercitationem odit officiis maiores! Neque, quidem corrupti modi architecto eos saepe incidunt dignissimos rerum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 mb-4">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed text-dark fs-5 fw-bold rounded-top" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Can you guarantee for growth?
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body my-2">
                                <h5>Dolor sit amet consectetur adipisicing elit.</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad nemo impedit, sapiente quis illo quia nulla atque maxime fuga minima ipsa quae cum consequatur, sit, delectus exercitationem odit officiis maiores! Neque, quidem corrupti modi architecto eos saepe incidunt dignissimos rerum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item border-0 mb-0">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed text-dark fs-5 fw-bold rounded-top" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                What makes your business plans so special?
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body my-2">
                                <h5>Dolor sit amet consectetur adipisicing elit.</h5>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad nemo impedit, sapiente quis illo quia nulla atque maxime fuga minima ipsa quae cum consequatur, sit, delectus exercitationem odit officiis maiores! Neque, quidem corrupti modi architecto eos saepe incidunt dignissimos rerum.</p>
                            </div>
                        </div>
                    </div>
               </div>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                <div class="faq-img RotateMoveRight rounded">
                    <img src="img/faq-img.jpg" class="img-fluid rounded w-100" alt="Image">
                    <a class="faq-btn btn btn-primary rounded-pill text-white py-3 px-5" href="#">Read More Q & A <i class="fas fa-arrow-right ms-2"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FAQ End -->

@endsection