
<div class="container py-5" style="font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; max-width: 1200px; margin: 0 auto;">
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
</style>
