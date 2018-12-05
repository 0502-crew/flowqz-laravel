@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@section('content')
<div class="container">
    <div class="row mb-4 vcenter">
        <a href="{{ route('frontend.index') }}" class="header-logo"><span class="first-logo">Flow</span><span class="second-logo">Quiz</span></a>
    </div>
    <div class="row mb-4  description">
            @lang('fq.description')
    </div>
</div>
<section class="fqcards">
    <div class="container">


            <div class="row mbr-justify-content-center">

                <div class="col-lg-6 mbr-col-md-10">
                    <div class="wrap">
                        <div class="ico-wrap">
                            <span class="mbr-iconfont fa-fire fa"></span>
                        </div>
                        <div class="text-wrap vcenter">
                            <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">@lang('fq.cards.find')</h2>
                            <p class="mbr-fonts-style text1 mbr-text display-6">@lang('fq.cards.finddesc')</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mbr-col-md-10">
                    <div class="wrap">
                        <div class="ico-wrap">
                            <span class="mbr-iconfont fa-creative-commons-remix fab"></span>
                        </div>
                        <div class="text-wrap vcenter">
                            <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">@lang('fq.cards.create')</h2>
                            <p class="mbr-fonts-style text1 mbr-text display-6"> @lang('fq.cards.createdesc')</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mbr-col-md-10">
                    <div class="wrap">
                        <div class="ico-wrap">
                            <span class="mbr-iconfont fa-globe fa"></span>
                        </div>
                        <div class="text-wrap vcenter">
                            <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">@lang('fq.cards.share')
                            </h2>
                            <p class="mbr-fonts-style text1 mbr-text display-6">@lang('fq.cards.sharedesc')</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mbr-col-md-10">
                    <div class="wrap">
                        <div class="ico-wrap">
                            <span class="mbr-iconfont fa-trophy fa"></span>
                        </div>
                        <div class="text-wrap vcenter">
                            <h2 class="mbr-fonts-style mbr-bold mbr-section-title3 display-5">@lang('fq.cards.compete')</span></h2>
                            <p class="mbr-fonts-style text1 mbr-text display-6">@lang('fq.cards.competedesc')</p>
                        </div>
                    </div>
                </div>




            </div>

    </div>

    </section>

    <div class="row mb-4">
        <div class="col">
            {{-- <example-component></example-component> --}}
        </div><!--col-->
    </div><!--row-->

    <div class="row">
        <div class="col">

        </div><!--col-->
    </div><!--row-->
@endsection
