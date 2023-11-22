@extends('frontend.web_master')
@section('web-master')
     {{-- @foreach ($projectdetails as $key=>$item )
     @if ($key==1)
     @break
     @endif --}}

    <body  class="page-template-default page page-id-421 elementor-default elementor-kit-6 elementor-page elementor-page-421">
        <main id="content" class="site-main post-421 page type-page status-publish hentry" role="main">
            {{-- <header class="page-header">
                <h1 class="entry-title">H</h1>
            </header> --}}
            <div class="page-content">
                <div data-elementor-type="wp-page" data-elementor-id="421" class="elementor elementor-421">
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-85b2775 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="85b2775" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;slideshow&quot;,&quot;background_slideshow_gallery&quot;:[{&quot;id&quot;:419,&quot;url&quot;:&quot;https:\/\/srsidea.biz\/wp-content\/uploads\/2022\/09\/Hotel-Management-System.webp&quot;}],&quot;background_slideshow_loop&quot;:&quot;yes&quot;,&quot;background_slideshow_slide_duration&quot;:5000,&quot;background_slideshow_slide_transition&quot;:&quot;fade&quot;,&quot;background_slideshow_transition_duration&quot;:500}
                        " style="background-image: url({{asset('images/'.$projectdetails->image)}}">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cbb1ae6"
                                data-id="cbb1ae6" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-5f7a01c elementor-widget elementor-widget-heading"
                                        data-id="5f7a01c" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h3 class="elementor-heading-title elementor-size-default" style="padding:50px">{{$projectdetails->name}}
                                                </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-0f9ff7c elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="0f9ff7c" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f0aaceb"
                                data-id="f0aaceb" data-element_type="column">

                            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-00dbd2a"
                                data-id="00dbd2a" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">

                                    <div class="elementor-element elementor-element-63f134b elementor-widget elementor-widget-text-editor"
                                        data-id="63f134b" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                          
                                                {!!$projectdetails->short_details!!}

                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-291fe62 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="291fe62" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            {{-- <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-c5160f5"
                                data-id="c5160f5" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;background_motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;}"> --}}
                                {{-- <div class="elementor-widget-wrap elementor-element-populated"> --}}
                                    {{-- <div class="elementor-element elementor-element-b2c41d0 elementor-invisible elementor-widget elementor-widget-heading"
                                        data-id="b2c41d0" data-element_type="widget"
                                        data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">HRM</h2>
                                        </div>
                                    </div> --}}
                                    <div class="elementor-element elementor-element-dc6467c elementor-widget elementor-widget-text-editor"
                                        data-id="dc6467c" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            {!!$projectdetails->details!!}
                                        </div>
                                    </div>
                                {{-- </div> --}}
                            {{-- </div> --}}
                            {{-- <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-ae93e48"
                                data-id="ae93e48" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-aa947fe elementor-invisible elementor-widget elementor-widget-heading"
                                        data-id="aa947fe" data-element_type="widget"
                                        data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Booking ,Billing,
                                                Room sales</h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-3c1e2e8 elementor-widget elementor-widget-text-editor"
                                        data-id="3c1e2e8" data-element_type="widget" data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <ul>
                                                <li>Online booking</li>
                                                <li>Booking entry</li>
                                                <li>Room Over view</li>
                                                <li>Room Sales</li>
                                                <li>Group Guest entry</li>
                                                <li>Guest Billing</li>
                                                <li>Guest Service Billing</li>
                                                <li>Group Checking</li>
                                                <li>Group Bill Distribution</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-a39e362"
                                data-id="a39e362" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-48150c5 elementor-invisible elementor-widget elementor-widget-heading"
                                        data-id="48150c5" data-element_type="widget"
                                        data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Inventory Management
                                            </h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-9481778 elementor-widget elementor-widget-text-editor"
                                        data-id="9481778" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <ul>
                                                <li>Product category</li>
                                                <li>Product Sub Category</li>
                                                <li>Product In</li>
                                                <li>Product Out</li>
                                                <li>Stock In hand</li>
                                                <li>Product Value in Stock                         </li>
                                                <li>Wastage Product</li>
                                                <li>Supplier List</li>
                                                <li> </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-f9cf489"
                                data-id="f9cf489" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-9562e14 elementor-invisible elementor-widget elementor-widget-heading"
                                        data-id="9562e14" data-element_type="widget"
                                        data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Mini bar</h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-df14534 elementor-widget elementor-widget-text-editor"
                                        data-id="df14534" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <ul>
                                                <li>Online booking</li>
                                                <li>Mini bar Stock</li>
                                                <li>Mini bar sales</li>
                                                <li>Mini bar billing</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </section>
                    {{-- <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-1a270b9 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="1a270b9" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-default">
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-d2010a4"
                                data-id="d2010a4" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-839f4de elementor-invisible elementor-widget elementor-widget-heading"
                                        data-id="839f4de" data-element_type="widget"
                                        data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Restaurant</h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-8ffb0da elementor-widget elementor-widget-text-editor"
                                        data-id="8ffb0da" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <ul>
                                                <li>Meal category</li>
                                                <li>Meal Subcategory</li>
                                                <li>Meal Order</li>
                                                <li>KOT</li>
                                                <li>Guest Order</li>
                                                <li>Inventory Restaurant Product</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-fa66a10"
                                data-id="fa66a10" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-9ea1206 elementor-invisible elementor-widget elementor-widget-heading"
                                        data-id="9ea1206" data-element_type="widget"
                                        data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Accounts</h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-1f3ca23 elementor-widget elementor-widget-text-editor"
                                        data-id="1f3ca23" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <ul>
                                                <li>Receive Payment</li>
                                                <li>Income–expenditure</li>
                                                <li>General Leader</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-8955185"
                                data-id="8955185" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-8870377 elementor-invisible elementor-widget elementor-widget-heading"
                                        data-id="8870377" data-element_type="widget"
                                        data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Laundry</h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-2f7ee02 elementor-widget elementor-widget-text-editor"
                                        data-id="2f7ee02" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <ul>
                                                <li>Laundry service</li>
                                                <li>entry</li>
                                                <li>Billing</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-top-column elementor-element elementor-element-4dc32d6"
                                data-id="4dc32d6" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-31e8bd5 elementor-invisible elementor-widget elementor-widget-heading"
                                        data-id="31e8bd5" data-element_type="widget"
                                        data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;}"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Bar </h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-9246bd5 elementor-widget elementor-widget-text-editor"
                                        data-id="9246bd5" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            <ul>
                                                <li>Sale</li>
                                                <li>Stock</li>
                                                <li>Billing</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section> --}}
                </div>
                <div class="post-tags">
                </div>
            </div>
            {{-- <section id="comments" class="comments-area">
            </section><!-- .comments-area --> --}}
        </main>
    </body>
    {{-- @if ($key==1)
    @break
    @endif --}}
{{-- @endforeach --}}
    <!-- Mirrored from srsidea.biz/h/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Oct 2023 08:32:24 GMT -->
@endsection
