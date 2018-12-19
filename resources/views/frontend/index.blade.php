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


<section class="fqcards mb-2">
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
<section class="popular mb-2">
    <div class="container">
        <div class="txt-header mb-2">@lang('fq.mostpopular')</div>
        <div class="cards">
            <div class="card">
                <div class="image">
                    <img src="/q/public/img/d394415.jpg"/>
                </div>
                <div class="details">
                    <div class="center">
                    <h1><a href="/q">El izquierdómetro</a><br><span>13 @lang('fq.questions')</span></h1>
                    <p>¿Eres muy pero que muy de izquierdas? No sé, habrá que ver...</p>
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="image">
                    <img src="/q/public/img/7fbb876.jpg"/>
                </div>
                <div class="details">
                    <div class="center">
                    <h1><a href="/q">¿Soy catalán?</a><br><span>9 @lang('fq.questions')</span></h1>
                    <p>¿Eres muy pero que muy de izquierdas? No sé, habrá que ver...</p>
                    <ul>
                        <li><a href="#"><i class="fab fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram" aria-hidden="true"></i></a></li>
                    </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<section class="we pt-3">
    @include('frontend.includes.we')
</section>
@endsection
