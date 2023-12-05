@extends('frontend.web_master')
@section('web-master')
    <section
        @foreach ($info as $item)
        class="elementor-section elementor-top-section elementor-element elementor-element-041f5d8 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="041f5d8" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}" style="background-image: url({{ asset('images/' . $item->image) }}">
        <div class="elementor-background-overlay"></div> @endforeach
        <div class="elementor-container elementor-column-gap-default">
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-fed12a1"
            data-id="fed12a1" data-element_type="column"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            @foreach ($info as $item)
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-4d47c8c elementor-widget elementor-widget-heading"
                        data-id="4d47c8c" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">Welcome to <span>
                                    {{ $item->name }}</span>
                            </h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-806b64f animated-slow elementor-invisible elementor-widget elementor-widget-text-editor"
                        data-id="806b64f" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                        data-widget_type="text-editor.default">
                        <div class="elementor-widget-container" style="width: 100%">
                            <p> {{ $item->slogun }}</p>
                        </div>
                    </div>
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-b8f7058 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="b8f7058" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-c28b41f"
                                style="width:55.995%" data-id="c28b41f" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-6322c43 elementor-align-right animated-slow elementor-widget__width-initial elementor-widget-tablet__width-inherit elementor-invisible elementor-widget elementor-widget-button"
                                        data-id="6322c43" data-element_type="widget"
                                        data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}"
                                        data-widget_type="button.default"
                                        style="text-align:left !important;">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-button-wrapper">
                                                <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float"
                                                    href="#section-b">
                                                    <span class="elementor-button-content-wrapper">
                                                        <span class="elementor-button-text">Get Started</span>
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </section>
                </div>
        </div>
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-216be7d"
            data-id="216be7d" data-element_type="column"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-widget-wrap">
            </div>
        </div>
        </div>
    </section>

    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-a622f2a elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="a622f2a" data-element_type="section" id="section-b"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">


        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-d091134"
                data-id="d091134" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="" data-id="5653ec4" data-element_type="widget" data-widget_type="image.default">

                        <img decoding="async" style="height: 385px; width:650px" src="{{ asset('logo/' . $item->logo) }}" />

                    </div>

                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3635c58"
                data-id="3635c58" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-bc80b21 elementor-widget elementor-widget-heading"
                        data-id="bc80b21" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">INTRODUCTION</h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-fe51029 elementor-widget elementor-widget-text-editor"
                        data-id="fe51029" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container" style="text-align: justify;line-height:1.5rem">
                            <p>{!! $item->about !!}</p>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-c9f5f41 elementor-align-left elementor-widget elementor-widget-button"
                        data-id="c9f5f41" data-element_type="widget" data-widget_type="button.default">
                        {{-- <div class="elementor-widget-container"> --}}
                        <div class="elementor-button-wrapper">
                            <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float"
                                href="{{ route('about.index') }}">
                                <span class="elementor-button-content-wrapper">
                                    <span class="elementor-button-text" style="padding-top: 0px">More About Us</span>
                                </span>
                            </a>
                        </div>
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </section>


    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-e646d44 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="e646d44" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-acc9a05"
                data-id="acc9a05" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-5769363 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                        data-id="5769363" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                        data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h5 class="elementor-heading-title elementor-size-default">We Ensures</h5>
                        </div>
                    </div>
                    @foreach ($text as $item)
                        <div class="elementor-element elementor-element-17f390b elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                            data-id="17f390b" data-element_type="widget" data-widget_type="icon-list.default">

                            <div class="elementor-widget-container">
                                <ul class="elementor-icon-list-items">
                                    <li class="elementor-icon-list-item">
                                        <span class="elementor-icon-list-icon">
                                            <i aria-hidden="true" class="fas fa-check-circle"></i> </span>
                                        <span class="elementor-icon-list-text">{{ $item->name }}</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-581cb8c"
                data-id="581cb8c" data-element_type="column">
                <div class="elementor-widget-wrap">
                </div>
            </div>
        </div>
    </section>

    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-4b16bac elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="4b16bac" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-84d5553"
                data-id="84d5553" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-1717e5b animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                        data-id="1717e5b" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">Product Featuress</h2>
                        </div>
                    </div>
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-2af21c0 animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
                        data-id="2af21c0" data-element_type="section"
                        data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                        <div class="elementor-container elementor-column-gap-no">

                            @foreach ($product as $key => $item)
                                <div data-id="{{ $item->id }}"
                                    class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4c99f64"
                                    data-id="4c99f64" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-154aa2c elementor-view-default elementor-widget elementor-widget-icon"
                                            data-id="154aa2c" data-element_type="widget" data-widget_type="icon.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-icon-wrapper">
                                                    <div class="elementor-icon">
                                                        <i aria-hidden="true" class="fas fa-tachometer-alt"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-231238b elementor-widget elementor-widget-heading"
                                            data-id="231238b" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">
                                                    {{ $item->name }}</h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-2306801 elementor-widget elementor-widget-text-editor"
                                            data-id="2306801" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container">
                                                {!! $item->details !!}

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if ($key == 1)
                                @break
                            @endif
                        @endforeach
                    </div>
                </section>
                <section
                    class="elementor-section elementor-inner-section elementor-element elementor-element-56f806b animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
                    data-id="56f806b" data-element_type="section"
                    data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
                    <div class="elementor-container elementor-column-gap-no">
                        @foreach ($product as $key => $item)
                            @if ($key <= 1)
                                @continue
                            @elseif ($key == 5)
                            @break
                        @endif
                        <div data-id="{{ $item->id }}"class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-95f00f8"
                            data-id="95f00f8" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-c36e8c0 elementor-view-default elementor-widget elementor-widget-icon"
                                    data-id="c36e8c0" data-element_type="widget" data-widget_type="icon.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-icon-wrapper">
                                            <div class="elementor-icon">
                                                <i aria-hidden="true" class="fas fa-shopping-basket"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-0c77feb elementor-widget elementor-widget-heading"
                                    data-id="0c77feb" data-element_type="widget"
                                    data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">
                                            {{ $item->name }}
                                        </h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-f1cd9c7 elementor-widget elementor-widget-text-editor"
                                    data-id="f1cd9c7" data-element_type="widget"
                                    data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">
                                        {!! $item->details !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </section>
            <div class="elementor-element elementor-element-6ddaafc elementor-align-center elementor-widget elementor-widget-button"
                data-id="6ddaafc" data-element_type="widget" data-widget_type="button.default">
                <div class="elementor-widget-container">
                    <div class="elementor-button-wrapper">
                        <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-grow"
                            href="{{ route('facilities') }}">
                            <span class="elementor-button-content-wrapper">
                                <span class="elementor-button-text">More Features</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>



{{-- <section> --}}

<!-- container class for bootstrap card-->
{{-- <div class="container"> --}}
    <!-- bootstrap card with row name myCarousel as row 1-->



    {{-- <div class="carousel slide" id="myCarousel">

        <div class="carousel-inner">
            @foreach ($clients as $key=>$item)
            @if ($key==5)
            @break
            @endif
            <div class="item active">
                <div class="col-xs-2">
                    <a href="#">
                        <img src="{{ asset('images/' . $item->image) }}"
                            class="img-responsive">
                    </a>
                </div>

            </div>
           @if ($key<=5)
           @continue
           @endif
             <div class="item">
                <div class="col-xs-2">
                    <a href="#">
                        <img src=""
                            class="img-responsive">
                    </a>
                </div>
            </div>
            @endforeach
        </div>



        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <i class="glyphicon glyphicon-chevron-left">
            </i>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <i class="glyphicon glyphicon-chevron-right">
            </i>
        </a>

    </div>

</div>

</section> --}}

<section>
    <h2 class="elementor-heading-title elementor-size-default"
    style="text-align: center; color:#273C90; padding-bottom:50px ">Our Client</h2>
    <div id="containerr"  data-animated>
        <div class="shuvo">
        <ul id="list">
            @foreach ($clients as $item)
            <li><img src= "{{asset('images/'.$item->image)}}">
            </li>
            {{-- <li>Second</li>
            <li>Third</li>
            <li>Fourth</li>
            <li>Fifth</li>
            <li>First</li>
            <li>Second</li>
            <li>Third</li>
            <li>Fourth</li>
            <li>Fifth</li> --}}
            @endforeach
        </ul>
    </div>
</div>


<section
class="elementor-section elementor-top-section elementor-element elementor-element-3533b58 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
data-id="3533b58" data-element_type="section">
<div class="elementor-container elementor-column-gap-default">
    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a4b7c17"
        data-id="a4b7c17" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-5e9d8cc elementor-widget elementor-widget-heading"
                data-id="5e9d8cc" data-element_type="widget" data-widget_type="heading.default">
                <div class="elementor-widget-container">
                    <h2 class="elementor-heading-title elementor-size-default">Frequently Asked Questions
                    </h2>
                </div>
            </div>
            <div class="elementor-element elementor-element-8775f0f elementor-widget-divider--view-line_icon elementor-view-default elementor-widget-divider--element-align-center elementor-widget elementor-widget-divider"
                data-id="8775f0f" data-element_type="widget" data-widget_type="divider.default">
                <div class="elementor-widget-container">

                    <div class="elementor-divider">
                        <span class="elementor-divider-separator">
                            <div class="elementor-icon elementor-divider__element">
                                <i aria-hidden="true" class="fab fa-connectdevelop"></i>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-2bad884 elementor-widget elementor-widget-accordion"
                data-id="2bad884" data-element_type="widget" data-widget_type="accordion.default">
                <div class="elementor-widget-container">
                    <div class="elementor-accordion">
                        @foreach ($questions as $key => $item)
                            <div class="elementor-accordion-item">

                                <div id="elementor-tab-title-4571" class="elementor-tab-title"
                                    data-tab="{{ $key + 1 }}" role="button"
                                    aria-controls="elementor-tab-content-4571" aria-expanded="false">

                                    <span class="elementor-accordion-icon elementor-accordion-icon-right"
                                        aria-hidden="true">
                                        <span class="elementor-accordion-icon-closed"><i
                                                class="fas fa-plus"></i></span>
                                        <span class="elementor-accordion-icon-opened"><i
                                                class="fas fa-minus"></i></span>
                                    </span>
                                    <a class="elementor-accordion-title" tabindex="0">
                                        {{ $item->name }}</a>
                                </div>
                                <div id="elementor-tab-content-4571"
                                    class="elementor-tab-content elementor-clearfix"
                                    data-tab="{{ $key + 1 }}" role="region"
                                    aria-labelledby="elementor-tab-title-4571">
                                    {!! $item->details !!}
                                </div>

                            </div>
                        @endforeach
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
</section>
@endsection



{{-- carosoul css and js --}}
<script>
    const list = document.querySelector("#list");
    const listContent = Array.from(list.children);

    listContent.forEach(item => {
        const duplicatedItem = item.cloneNode(true);
        duplicatedItem.setAttribute("aria-hidden",true);
        list.appendChild(duplicatedItem);
    });

    </script>
<style>



    #container{
        width: 200vw;
        mask: linear-gradient(90deg, transparent, white 40%, white 60%, transparent);
        -webkit-mask: linear-gradient(90deg, transparent, white 40%, white 60%, transparent);
    }
    .shuvo ul{
        display: flex;
        gap: 20px;
        list-style: none;
        padding: 0;
    }

    #list li img{
        height: 100px;
        width: 150px;
    }

    #containerr[data-animated]{
        overflow: hidden;

    }
    #containerr[data-animated] #list{
        width: max-content;
        animation: scroll 20s linear infinite;
    }

    @keyframes scroll{
        to{
            translate: calc(-30% - 5px);
        }
    }

        </style>
