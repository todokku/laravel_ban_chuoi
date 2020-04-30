<div class="slider-area an-1 hm-1">
    <!-- slider -->
    <div class="bend niceties preview-2">
        <div id="ensign-nivoslider" class="slides">
            @foreach($banners as $banner)
                <img src="{{asset(pare_url_file_home($banner->banner_thumbnail))}}"/>
            @endforeach
        </div>
    </div>
    <!-- slider end-->
</div>