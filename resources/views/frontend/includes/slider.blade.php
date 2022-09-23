@if(count($SliderBanners) > 0)
    <section id="featured">
        <!-- start slider -->
        <!-- Slider -->
        <?php
        $title_var = "title_" . App\Helpers\Helper::currentLanguage()->code;
        $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
        $details_var = "details_" . App\Helpers\Helper::currentLanguage()->code;
        $details_var2 = "details_" . env('DEFAULT_LANGUAGE');
        $file_var = "file_" . App\Helpers\Helper::currentLanguage()->code;
        $file_var2 = "file_" . env('DEFAULT_LANGUAGE');
        ?>
        {{-- Photo Slider Banners--}}
        <div id="main-slider" class="flexslider">
            <ul class="slides">
                @foreach($SliderBanners as $SliderBanner)
                    <?php
                    if ($SliderBanner->$title_var != "") {
                        $BTitle = $SliderBanner->$title_var;
                    } else {
                        $BTitle = $SliderBanner->$title_var2;
                    }
                    $BDetails = $SliderBanner->$details_var;
                    if ($SliderBanner->$file_var != "") {
                        $BFile = $SliderBanner->$file_var;
                    } else {
                        $BFile = $SliderBanner->$file_var2;
                    }
                    ?>
                    <li>
                        <img src="{{ URL::to('uploads/banners/'.$BFile) }}"
                             alt="{{ $BTitle }}"/>
                        @if($BDetails !="" || $SliderBanner->link_url!="")
                            <div class="flex-caption">
                                @if($BTitle !="")
                                    <h3>{!! $BTitle !!}</h3>
                                @endif
                                @if($BDetails !="")
                                    <p>{!! nl2br($BDetails) !!}</p>
                                @endif
                                @if($SliderBanner->link_url !="")
                                    <a href="{!! $SliderBanner->link_url !!}" class="btn btn-theme">{{ 'Read More' }}</a>
                                @endif
                            </div>
                        @endif
                    </li>
                @endforeach
            </ul>
        </div>
        <!-- end slider -->
    </section>
@endif
