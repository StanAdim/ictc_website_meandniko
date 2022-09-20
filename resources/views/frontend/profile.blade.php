<?php
$title_var = "title_" . App\Helpers\Helper::currentLanguage()->code;
$title_var2 = "title_" . env('DEFAULT_LANGUAGE');
?>
@extends('frontend.layout.main', ['title' => $title_var ?? $title_var2, 'header' => $title_var ?? $title_var2])
@section('content')
    <section class="section section-md">
        <div class="container">
            <!-- Profile Modern-->
            <article class="profile-modern">
                <div class="profile-modern-figure"><img class="profile-modern-image" src="images/team-7-336x336.jpg" alt="" width="336" height="336"><a class="profile-modern-button" href="#"><span class="icon mdi mdi-facebook-messenger"></span><span class="icon mdi mdi-facebook-messenger"></span></a>
                </div>
                <div class="profile-modern-main">
                    <div class="profile-modern-header">
                        <div class="profile-modern-header-item">
                            <h3>John Porter</h3>
                            <p>City Founder</p>
                        </div>
                        <div class="profile-modern-item">
                            <div class="group group-xs group-middle">
                                <a class="icon icon-sm icon-creative mdi mdi-facebook" href="#"></a>
                                <a class="icon icon-sm icon-creative mdi mdi-twitter" href="#"></a>
                                <a class="icon icon-sm icon-creative mdi mdi-instagram" href="#"></a>
                                <a class="icon icon-sm icon-creative mdi mdi-google" href="#"></a>
                                <a class="icon icon-sm icon-creative mdi mdi-linkedin" href="#"></a>
                            </div>
                        </div>
                    </div>
                    <div class="row row-30">
                        <div class="col-lg-6">
                            <p>Sunt valebates dignus superbus, mirabilis particulaes. Abnobas ire in placidus palatium! Resistere sensim ducunt ad regius zirbus. Pol, a bene silva, uria! Ubi est placidus magister? Adelphiss sunt habenas de altus elevatus. Zirbus neuter devirginato est. Itineris tramitem tolerares, tanquam teres.</p>
                        </div>
                        <div class="col-lg-6">
                            <!-- Linear progress bar-->
                            <article class="progress-linear animated-first">
                                <div class="progress-header">
                                    <p>Government</p><span class="progress-value">90</span>
                                </div>
                                <div class="progress-bar-linear-wrap">
                                    <div class="progress-bar-linear" style="width: 90%;"></div>
                                </div>
                            </article>
                            <!-- Linear progress bar-->
                            <article class="progress-linear animated-first">
                                <div class="progress-header">
                                    <p>Departments</p><span class="progress-value">65</span>
                                </div>
                                <div class="progress-bar-linear-wrap">
                                    <div class="progress-bar-linear" style="width: 65%;"></div>
                                </div>
                            </article>
                            <!-- Linear progress bar-->
                            <article class="progress-linear animated-first">
                                <div class="progress-header">
                                    <p>Community</p><span class="progress-value">100</span>
                                </div>
                                <div class="progress-bar-linear-wrap">
                                    <div class="progress-bar-linear" style="width: 100%;"></div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
@endsection
@push('after-scripts')
@endpush

@push('after-styles')
@endpush