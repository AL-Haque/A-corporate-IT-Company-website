@extends('frontend.web_master')
@section('web-master')

    <body
        class="page-template page-template-elementor_header_footer page page-id-112 elementor-default elementor-template-full-width elementor-kit-6 elementor-page elementor-page-112">

        <div data-elementor-type="header" data-elementor-id="148" class="elementor elementor-148 elementor-location-header">

        </div>
        <div data-elementor-type="wp-page" data-elementor-id="112" class="elementor elementor-112">
            <section
            @foreach ( $price as $item )
                class="elementor-section elementor-top-section elementor-element elementor-element-8b21685 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="8b21685" data-element_type="section" style="background-image:url({{asset('images/'.$item->image)}}"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;} ">
                <div class="elementor-background-overlay"></div> @endforeach
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-46d7951"
                        data-id="46d7951" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-e16b245 elementor-widget elementor-widget-heading"
                                data-id="e16b245" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">

                                    <h2 class="elementor-heading-title elementor-size-default">Our Pricing</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-8be0e65 elementor-icon-list--layout-inline elementor-align-center elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                data-id="8be0e65" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items elementor-inline-items">
                                        <li class="elementor-icon-list-item elementor-inline-item">
                                            <span class="elementor-icon-list-text">Home</span>
                                        </li>
                                        <li class="elementor-icon-list-item elementor-inline-item">
                                            <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-chevron-right"></i> </span>
                                            <span class="elementor-icon-list-text">Pricing</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-21f3fe5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="21f3fe5" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b10cbae"
                        data-id="b10cbae" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-e77eb4e animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                                data-id="e77eb4e" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
                                data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h5 class="elementor-heading-title elementor-size-default">Our Pricing</h5>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-f8be3b5 elementor-widget elementor-widget-text-editor"
                                data-id="f8be3b5" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                    incididunt ut labore et dolore magna aliqua
                                </div>
                            </div>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-2c7a3a6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="2c7a3a6" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    @foreach ( $pricing as $item )
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-8bc9dcb"
                                    data-id="{{ $item->id }}"   data-id="8bc9dcb" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-46808bc elementor-widget elementor-widget-heading"
                                                data-id="46808bc" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">{{$item->name}}
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-3b89dbe elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                data-id="3b89dbe" data-element_type="widget"
                                                data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider">
                                                        <span class="elementor-divider-separator">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-452be87 elementor-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="452be87" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text">{{$item->content1}}</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text">{{$item->content2}}</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text">{{$item->content3}}</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text">{{$item->content4}}</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text">{{$item->content5}}</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text">{{$item->content6}}</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-5ef22a4 elementor-align-left elementor-widget elementor-widget-button"
                                                data-id="5ef22a4" data-element_type="widget"
                                                data-widget_type="button.default"  style="text-align:left !important;"  >
                                                <div class="elementor-widget-container " >
                                                    <div class="elementor-button-wrapper" >
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
                                    @endforeach
                                    {{-- <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-09a6d82"
                                        data-id="09a6d82" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-0164c0a elementor-widget elementor-widget-heading"
                                                data-id="0164c0a" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">Bridge-H HMS
                                                    </h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-0876300 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                data-id="0876300" data-element_type="widget"
                                                data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider">
                                                        <span class="elementor-divider-separator">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-13800e3 elementor-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="13800e3" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text"> Front Office</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text"> Point Of Sale</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text"> Bar & Minibar</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text">Payroll</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text">HRM</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text">Accounts</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-1602961 elementor-align-center elementor-widget elementor-widget-button"
                                                data-id="1602961" data-element_type="widget"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a class="elementor-button elementor-button-link elementor-size-lg elementor-animation-float"
                                                            href="#">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span class="elementor-button-text">Get Started</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-b09aed6"
                                        data-id="b09aed6" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-6d9a239 elementor-widget elementor-widget-heading"
                                                data-id="6d9a239" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h3 class="elementor-heading-title elementor-size-default">Hospital
                                                        Management</h3>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-3446c1d elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                                data-id="3446c1d" data-element_type="widget"
                                                data-widget_type="divider.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-divider">
                                                        <span class="elementor-divider-separator">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-7070ccf elementor-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="7070ccf" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text"> Patient
                                                                Mnagement</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text"> Doctor Mnagement</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text">
                                                                 Out Door/In Door
                                                               Mnagement</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text"> Pharmacy</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text">Bill</span>
                                                        </li>
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                            <span class="elementor-icon-list-text">Accounts</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-0fb7e22 elementor-align-center elementor-widget elementor-widget-button"
                                                data-id="0fb7e22" data-element_type="widget"
                                                data-widget_type="button.default">
                                                <div class="elementor-widget-container">
                                                    <div class="elementor-button-wrapper">
                                                        <a class="elementor-button elementor-button-link elementor-size-lg elementor-animation-float"
                                                            href="#">
                                                            <span class="elementor-button-content-wrapper">
                                                                <span class="elementor-button-text">Get Started</span>
                                                            </span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                </div>
                            </section>



                            <section
                            {{-- class="elementor-section elementor-inner-section elementor-element elementor-element-2c7a3a6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="2c7a3a6" data-element_type="section">
                            <div class="elementor-container elementor-column-gap-no">
                                @foreach ( $pricing as $key=>$item )
                                @if ($key==2)
                                @continue
                                @endif
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-8bc9dcb"
                                    data-id="8bc9dcb" data-element_type="column"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-46808bc elementor-widget elementor-widget-heading"
                                            data-id="46808bc" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h3 class="elementor-heading-title elementor-size-default">{{$item->name}}
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-3b89dbe elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                            data-id="3b89dbe" data-element_type="widget"
                                            data-widget_type="divider.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-divider">
                                                    <span class="elementor-divider-separator">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-452be87 elementor-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                            data-id="452be87" data-element_type="widget"
                                            data-widget_type="icon-list.default">
                                            <div class="elementor-widget-container">
                                                <ul class="elementor-icon-list-items">
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                        <span class="elementor-icon-list-text">{{$item->content1}}</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                        <span class="elementor-icon-list-text">{{$item->content2}}</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                        <span class="elementor-icon-list-text">{{$item->content3}}</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                        <span class="elementor-icon-list-text">{{$item->content4}}</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                        <span class="elementor-icon-list-text">{{$item->content5}}</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                        <span class="elementor-icon-list-text">{{$item->content6}}</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-5ef22a4 elementor-align-center elementor-widget elementor-widget-button"
                                            data-id="5ef22a4" data-element_type="widget"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a class="elementor-button elementor-button-link elementor-size-lg elementor-animation-float"
                                                        href="#">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-text">Get Started</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @if ($key<=5)
                                @break
                                @endif
                                @endforeach --}}
                                {{-- <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-09a6d82"
                                    data-id="09a6d82" data-element_type="column"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-0164c0a elementor-widget elementor-widget-heading"
                                            data-id="0164c0a" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h3 class="elementor-heading-title elementor-size-default">Bridge-H HMS
                                                </h3>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-0876300 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                            data-id="0876300" data-element_type="widget"
                                            data-widget_type="divider.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-divider">
                                                    <span class="elementor-divider-separator">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-13800e3 elementor-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                            data-id="13800e3" data-element_type="widget"
                                            data-widget_type="icon-list.default">
                                            <div class="elementor-widget-container">
                                                <ul class="elementor-icon-list-items">
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                        <span class="elementor-icon-list-text"> Front Office</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                        <span class="elementor-icon-list-text"> Point Of Sale</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                        <span class="elementor-icon-list-text"> Bar & Minibar</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                        <span class="elementor-icon-list-text">Payroll</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                        <span class="elementor-icon-list-text">HRM</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                        <span class="elementor-icon-list-text">Accounts</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-1602961 elementor-align-center elementor-widget elementor-widget-button"
                                            data-id="1602961" data-element_type="widget"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a class="elementor-button elementor-button-link elementor-size-lg elementor-animation-float"
                                                        href="#">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-text">Get Started</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-b09aed6"
                                    data-id="b09aed6" data-element_type="column"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-6d9a239 elementor-widget elementor-widget-heading"
                                            data-id="6d9a239" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h3 class="elementor-heading-title elementor-size-default">Hospital
                                                    Management</h3>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-3446c1d elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                            data-id="3446c1d" data-element_type="widget"
                                            data-widget_type="divider.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-divider">
                                                    <span class="elementor-divider-separator">
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-7070ccf elementor-align-center elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                            data-id="7070ccf" data-element_type="widget"
                                            data-widget_type="icon-list.default">
                                            <div class="elementor-widget-container">
                                                <ul class="elementor-icon-list-items">
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                        <span class="elementor-icon-list-text"> Patient
                                                            Mnagement</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                        <span class="elementor-icon-list-text"> Doctor Mnagement</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                        <span class="elementor-icon-list-text">
                                                             Out Door/In Door
                                                           Mnagement</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                        <span class="elementor-icon-list-text"> Pharmacy</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                        <span class="elementor-icon-list-text">Bill</span>
                                                    </li>
                                                    <li class="elementor-icon-list-item">
                                                        <span class="elementor-icon-list-icon">
                                                            <i aria-hidden="true" class="fas fa-check"></i> </span>
                                                        <span class="elementor-icon-list-text">Accounts</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-0fb7e22 elementor-align-center elementor-widget elementor-widget-button"
                                            data-id="0fb7e22" data-element_type="widget"
                                            data-widget_type="button.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-button-wrapper">
                                                    <a class="elementor-button elementor-button-link elementor-size-lg elementor-animation-float"
                                                        href="#">
                                                        <span class="elementor-button-content-wrapper">
                                                            <span class="elementor-button-text">Get Started</span>
                                                        </span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            {{-- </div>
                        </section> --}}
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-498d09e elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="498d09e" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-ee3432b"
                        data-id="ee3432b" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-cfd3aed animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                                data-id="cfd3aed" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInLeft&quot;}"
                                data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h5 class="elementor-heading-title elementor-size-default">Why Choose Us</h5>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-9604936 elementor-widget elementor-widget-text-editor"
                                data-id="9604936" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>As a fast growing company SRS Idea Ltd focuses on the complete lifecycle of
                                        delivering quality services and software. These range from requirements gathering
                                        through implementation and finally support &amp; maintenance. We are a team of
                                        mature and certified professionals dedicated to building your business by maximizing
                                        productivity, reducing complexities and helping you to stay competitive.</p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-229bc6f elementor-align-left elementor-widget elementor-widget-button"
                                data-id="229bc6f" data-element_type="widget" data-widget_type="button.default">
                                <div class="elementor-widget-container" style=" text-align:left;">
                                    <div class="elementor-button-wrapper">
                                        <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float"
                                            href="{{route('project')}}">
                                            <span class="elementor-button-content-wrapper" >
                                                <span class="elementor-button-text">View Projects</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-d89608d"
                        data-id="d89608d" data-element_type="column">
                        <div class="elementor-widget-wrap">
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </body>

    <!-- Mirrored from srsidea.biz/pricing/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Oct 2023 08:31:22 GMT -->
@endsection
