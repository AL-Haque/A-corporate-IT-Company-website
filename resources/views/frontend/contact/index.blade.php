@extends('frontend.web_master')
@section('web-master')

    <body
        class="page-template page-template-elementor_header_footer page page-id-130 elementor-default elementor-template-full-width elementor-kit-6 elementor-page elementor-page-130">

        <div data-elementor-type="wp-page" data-elementor-id="141" class="elementor elementor-141">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-5eb62d5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="5eb62d5" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-726a10c"
                        data-id="726a10c" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-5e2764e elementor-widget elementor-widget-heading"
                                data-id="5e2764e" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Contact Us</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-6070129 elementor-icon-list--layout-inline elementor-align-center elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                data-id="6070129" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items elementor-inline-items">
                                        <li class="elementor-icon-list-item elementor-inline-item">
                                            <span class="elementor-icon-list-text">Home</span>
                                        </li>
                                        <li class="elementor-icon-list-item elementor-inline-item">
                                            <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-chevron-right"></i> </span>
                                            <span class="elementor-icon-list-text">Contact</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-acfb3d6 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="acfb3d6" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f6a6dbe"
                        data-id="f6a6dbe" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-1d4bc80 elementor-button-align-stretch elementor-widget elementor-widget-form"
                                data-id="1d4bc80" data-element_type="widget"
                                data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width&quot;:&quot;100&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}"
                                data-widget_type="form.default">
                                <div class="elementor-widget-container">
                                    <form  method="POST"
                                        action="{{route('contact.store')}}">
                                        {{ csrf_field() }}
                                            <div
                                                class="elementor-field-type-text elementor-field-group elementor-column elementor-field-group-name elementor-col-100">
                                                <label for="form-field-name" class="elementor-field-label">
                                                    Name </label>
                                                <input type="text" name="name"
                                                    class="elementor-field elementor-size-sm  elementor-field-textual"
                                                    placeholder="Name">
                                            </div>
                                            <div
                                                class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-100 elementor-field-required">
                                                <label for="form-field-email" class="elementor-field-label">
                                                    Email </label>
                                                <input type="email" name="email"
                                                    class="elementor-field elementor-size-sm  elementor-field-textual"
                                                    placeholder="Email" required="required" aria-required="true">
                                            </div>
                                            <div
                                                class="elementor-field-type-textarea elementor-field-group elementor-column elementor-field-group-message elementor-col-100">
                                                <label for="form-field-message" class="elementor-field-label">
                                                    Message </label>
                                                <textarea class="elementor-field-textual elementor-field  elementor-size-sm" name="massage" rows="4"
                                                    placeholder="Message"></textarea>
                                            </div>
                                            <div
                                                class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
                                                <button type="submit" class="elementor-button elementor-size-sm">
                                                    <span>
                                                        <span class=" elementor-button-icon">
                                                        </span>
                                                        <span class="elementor-button-text">Send</span>
                                                    </span>
                                                </button>
                                            </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-aa98a5e"
                        data-id="aa98a5e" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-259444f animated-slow elementor-invisible elementor-widget elementor-widget-heading"
                                data-id="259444f" data-element_type="widget"
                                data-settings="{&quot;_animation&quot;:&quot;fadeInRight&quot;}"
                                data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h5 class="elementor-heading-title elementor-size-default">Contact Us</h5>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-6c4fb3c elementor-widget elementor-widget-heading"
                                data-id="6c4fb3c" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Get In Touch With Us</h2>
                                </div>
                                    <P style="font-size:25px; padding-top:10px; color:#273C90" class="elementor-heading-title elementor-size-default">SRS IDEA LIMITED</P>

                            </div>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-95e2ff8 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="95e2ff8" data-element_type="section">
                                @foreach ($contact as $item)
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-597eebe"
                                            data-id="597eebe" data-element_type="column"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-8e23999 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                    data-id="8e23999" data-element_type="widget"
                                                    data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items">
                                                            <li class="elementor-icon-list-item">
                                                                <span class="elementor-icon-list-icon">
                                                                    <i aria-hidden="true" class="fas fa-mail-bulk"></i>
                                                                </span>
                                                                <span
                                                                    class="elementor-icon-list-text">{{ $item->email }}</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-4436471"
                                            data-id="4436471" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-65b3f1c elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                    data-id="65b3f1c" data-element_type="widget"
                                                    data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items">
                                                            <li class="elementor-icon-list-item">
                                                                <span class="elementor-icon-list-icon">
                                                                    <i aria-hidden="true" class="fas fa-phone-alt"></i>
                                                                </span>
                                                                <span
                                                                    class="elementor-icon-list-text">{{ $item->phone }}</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </section>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-539a9a9 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="539a9a9" data-element_type="section">
                                @foreach ($contact as $item)
                                    <div class="elementor-container elementor-column-gap-no">
                                        <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-0998a1e"
                                            data-id="0998a1e" data-element_type="column">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-6157965 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                    data-id="6157965" data-element_type="widget"
                                                    data-widget_type="icon-list.default">
                                                    <div class="elementor-widget-container">
                                                        <ul class="elementor-icon-list-items">
                                                            <li class="elementor-icon-list-item">
                                                                <span class="elementor-icon-list-icon">
                                                                    <i aria-hidden="true"
                                                                        class="fas fa-location-arrow"></i>
                                                                </span>
                                                                <span
                                                                    class="elementor-icon-list-text">{{ $item->address1 }}</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                            </section>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-13bf56f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="13bf56f" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-7c17133"
                                        data-id="7c17133" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-e402d5b elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="e402d5b" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-location-arrow"></i>
                                                            </span>
                                                            <span
                                                                class="elementor-icon-list-text">{{ $item->address2 }}</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-2e85ebf elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="2e85ebf" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-0ce10ea"
                                        data-id="0ce10ea" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-dc2203a elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="dc2203a" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-location-arrow"></i>
                                                            </span>
                                                            <span
                                                                class="elementor-icon-list-text">{{ $item->address3 }}</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-96b2d92 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="96b2d92" data-element_type="section">
                                <div class="elementor-container elementor-column-gap-no">
                                    <div class="elementor-column elementor-col-100 elementor-inner-column elementor-element elementor-element-3067e81"
                                        data-id="3067e81" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-25cb1e7 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                                data-id="25cb1e7" data-element_type="widget"
                                                data-widget_type="icon-list.default">
                                                <div class="elementor-widget-container">
                                                    <ul class="elementor-icon-list-items">
                                                        <li class="elementor-icon-list-item">
                                                            <span class="elementor-icon-list-icon">
                                                                <i aria-hidden="true" class="fas fa-location-arrow"></i>
                                                            </span>
                                                            <span
                                                                class="elementor-icon-list-text">{{ $item->address4 }}</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>

                            <div class="elementor-element elementor-element-58e6c9f elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                data-id="58e6c9f" data-element_type="widget" data-widget_type="divider.default">
                                <div class="elementor-widget-container">

                                    <div class="elementor-divider">
                                        <span class="elementor-divider-separator">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-4f09483 elementor-widget elementor-widget-heading"
                                data-id="4f09483" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h4 class="elementor-heading-title elementor-size-default">Our Social Media</h4>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-51d7428 elementor-shape-circle e-grid-align-left elementor-grid-mobile-0 e-grid-align-mobile-left elementor-grid-0 elementor-widget elementor-widget-social-icons"
                                data-id="51d7428" data-element_type="widget" data-widget_type="social-icons.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-social-icons-wrapper elementor-grid">
                                        <span class="elementor-grid-item">
                                        <a href="{{$item->facebook}}"  class="elementor-icon elementor-social-icon elementor-social-icon-facebook-f elementor-animation-shrink elementor-repeater-item-c0163ab"
                                                target="_blank">
                                                <span class="elementor-screen-only">Facebook-f</span>
                                                <i class="fab fa-facebook-f"></i> </a>
                                        </span>
                                        <span class="elementor-grid-item">
                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-animation-shrink elementor-repeater-item-310ab07"
                                                target="_blank">
                                                <span class="elementor-screen-only">Twitter</span>
                                                <i class="fab fa-twitter"></i> </a>
                                        </span>
                                        <span class="elementor-grid-item">
                                            <a href="{{$item->instragram}}"  class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-animation-shrink elementor-repeater-item-63f86db"
                                                target="_blank">
                                                <span class="elementor-screen-only">Instagram</span>
                                                <i class="fab fa-instagram"></i> </a>
                                        </span>
                                        <span class="elementor-grid-item">
                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin-in elementor-animation-shrink elementor-repeater-item-3dbfd36"
                                                target="_blank">
                                                <span class="elementor-screen-only">Linkedin-in</span>
                                                <i class="fab fa-linkedin-in"></i> </a>
                                        </span>
                                        <span class="elementor-grid-item">
                                            <a class="elementor-icon elementor-social-icon elementor-social-icon-youtube elementor-animation-shrink elementor-repeater-item-40041f1"
                                                target="_blank">
                                                <span class="elementor-screen-only">Youtube</span>
                                                <i class="fab fa-youtube"></i> </a>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-e413274 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="e413274" data-element_type="section">
                <div class="elementor-background-overlay"></div>
                @foreach ($map as $item)
                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-ce8bcc2"
                            data-id="ce8bcc2" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-edde538 elementor-widget elementor-widget-google_maps"
                                    data-id="edde538" data-element_type="widget" data-widget_type="google_maps.default">
                                    <div class="elementor-widget-container">

                                        <div class="elementor-custom-embed">
                                            <iframe loading="lazy" src="{{ $item->map_url }}"
                                                title="Eastern Housing,Mirpur-12 Pallabi Dhaka"
                                                aria-label="Eastern Housing,Mirpur-12 Pallabi Dhaka"></iframe>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </section>
        </div>

    </body>

    <!-- Mirrored from srsidea.biz/contact/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Oct 2023 08:31:28 GMT -->
@endsection
