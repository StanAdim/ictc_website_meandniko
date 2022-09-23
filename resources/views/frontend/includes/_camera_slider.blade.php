@if(count($SliderBanners) > 0)
    <section class="content-row">
        <!-- Slider -->
        <?php
        $title_var = "title_" . App\Helpers\Helper::currentLanguage()->code;
        $title_var2 = "title_" . env('DEFAULT_LANGUAGE');
        $details_var = "details_" . App\Helpers\Helper::currentLanguage()->code;
        $details_var2 = "details_" . env('DEFAULT_LANGUAGE');
        $file_var = "file_" . App\Helpers\Helper::currentLanguage()->code;
        $file_var2 = "file_" . env('DEFAULT_LANGUAGE');
        ?>
        <div class="camera_wrap camera_azure_skin" id="camera_wrap_1">
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
                @if(!empty($BFile))
                    <div data-src="{{ URL::to('uploads/banners/'.$BFile) }}">
                        <div class="camera_caption fadeFromBottom">
                            <a class="btn btn-primary btn-sm" style="text-transform:capitalize"
                               href="">
                                &nbsp;&nbsp;{{$BDetails }}&nbsp;&nbsp;
                            </a>
                            {{--@if(isset($SliderBanner->link_url))--}}
                                {{--<a class="btn btn-primary btn-sm pull-right hidden-xs" style="text-transform:lowercase"--}}
                                   {{--href="{{ $SliderBanner->link_url }}">--}}
                                    {{--&nbsp;&nbsp--}}
                                    {{--View &nbsp;&nbsp;--}}
                                {{--</a>--}}
                            {{--@endif--}}
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </section>
    </div>
@endif