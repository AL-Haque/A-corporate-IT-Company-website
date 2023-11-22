<div data-elementor-type="footer" data-elementor-id="152" class="elementor elementor-152 elementor-location-footer">
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-4c86159 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="4c86159" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        @foreach ($info as $item )

        <div class="elementor-background-overlay"></div>
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9c24995"
                data-id="9c24995" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-d3b4e40 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="d3b4e40" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-1857f4a"
                                data-id="1857f4a" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-b75972f elementor-widget elementor-widget-image"
                                        data-id="b75972f" data-element_type="widget" data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <img width="400" height="150"
                                            src="{{ asset('images/icon/'.$item->icon) }}"
                                                class="attachment-full size-full wp-image-169" alt=""
                                                loading="lazy"
                                                />
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-2581e91 elementor-widget elementor-widget-text-editor"
                                        data-id="2581e91" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            We are team of talanted designers making websites and web based solution
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-cc4172b elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                        data-id="cc4172b" data-element_type="widget"
                                        data-widget_type="icon-list.default">
                                        <div class="elementor-widget-container">
                                            <ul class="elementor-icon-list-items">
                                                <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                        <i aria-hidden="true" class="fas fa-map-marker-alt"></i>
                                                    </span>
                                                    <span class="elementor-icon-list-text">{{$item->address1}}</span>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                        <i aria-hidden="true" class="fas fa-envelope"></i> </span>
                                                    <span class="elementor-icon-list-text">{{$item->email}}</span>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                        <i aria-hidden="true" class="fas fa-phone-alt"></i> </span>
                                                    <span class="elementor-icon-list-text">{{$item->phone}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-c89899f elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                        data-id="c89899f" data-element_type="widget"
                                        data-widget_type="icon-list.default">
                                        <div class="elementor-widget-container">
                                            <ul class="elementor-icon-list-items">
                                                <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                        <i aria-hidden="true" class="fas fa-map-marker-alt"></i>
                                                    </span>
                                                    <span class="elementor-icon-list-text">{{$item->address2}}</span>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                        <i aria-hidden="true" class="fas fa-phone-alt"></i> </span>
                                                    <span class="elementor-icon-list-text">{{$item->phone}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-388567a elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                        data-id="388567a" data-element_type="widget"
                                        data-widget_type="icon-list.default">
                                        <div class="elementor-widget-container">
                                            <ul class="elementor-icon-list-items">
                                                <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                        <i aria-hidden="true" class="fas fa-map-marker-alt"></i>
                                                    </span>
                                                    <span class="elementor-icon-list-text">{{$item->address3}}</span>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                        <i aria-hidden="true" class="fas fa-phone-alt"></i> </span>
                                                    <span class="elementor-icon-list-text">{{$item->phone}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-9984b6c elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                        data-id="9984b6c" data-element_type="widget"
                                        data-widget_type="icon-list.default">
                                        <div class="elementor-widget-container">
                                            <ul class="elementor-icon-list-items">
                                                <li class="elementor-icon-list-item">
                                                    <span class="elementor-icon-list-icon">
                                                        <i aria-hidden="true" class="fas fa-map-marker-alt"></i>
                                                    </span>
                                                    <span class="elementor-icon-list-text">{{$item->address3}}</span>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-7869472"
                                data-id="7869472" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-b3ae2a0 elementor-widget elementor-widget-heading"
                                        data-id="b3ae2a0" data-element_type="widget"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h4 class="elementor-heading-title elementor-size-default">Quick Links
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-9d0798a elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                        data-id="9d0798a" data-element_type="widget"
                                        data-widget_type="divider.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-divider">
                                                <span class="elementor-divider-separator">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-85d2775 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                        data-id="85d2775" data-element_type="widget"
                                        data-widget_type="icon-list.default">
                                        <div class="elementor-widget-container">
                                            <ul class="elementor-icon-list-items">
                                                <li class="elementor-icon-list-item">
                                                    <a href="{{route('about.index')}}">
                                                    <span class="elementor-icon-list-text">About Us</span></a>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <a href="{{route('facilities')}}">

                                                        <span class="elementor-icon-list-text">Services</span>
                                                    </a>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <a href="{{route('project')}}">

                                                        <span class="elementor-icon-list-text">Projects</span>
                                                    </a>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <a href="{{route('forntpricing.index')}}">

                                                        <span class="elementor-icon-list-text">Pricing</span>
                                                    </a>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <a href="{{route('contact.index')}}">

                                                        <span class="elementor-icon-list-text">Contact</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-cf1743a"
                                data-id="cf1743a" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-ef91614 elementor-widget elementor-widget-heading"
                                        data-id="ef91614" data-element_type="widget"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h4 class="elementor-heading-title elementor-size-default">Useful Links
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-be22e93 elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                        data-id="be22e93" data-element_type="widget"
                                        data-widget_type="divider.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-divider">
                                                <span class="elementor-divider-separator">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-1489768 elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                        data-id="1489768" data-element_type="widget"
                                        data-widget_type="icon-list.default">
                                        <div class="elementor-widget-container">
                                            <ul class="elementor-icon-list-items">
                                                <li class="elementor-icon-list-item">
                                                    <a href="#">

                                                        <span class="elementor-icon-list-text">Privacy Policy</span>
                                                    </a>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <a href="#">

                                                        <span class="elementor-icon-list-text">Terms and
                                                            Conditions</span>
                                                    </a>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <a href="#">

                                                        <span class="elementor-icon-list-text">Disclaimer</span>
                                                    </a>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <a href="#">

                                                        <span class="elementor-icon-list-text">Support</span>
                                                    </a>
                                                </li>
                                                <li class="elementor-icon-list-item">
                                                    <a href="#">

                                                        <span class="elementor-icon-list-text">FAQ</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-25 elementor-inner-column elementor-element elementor-element-9b3d106"
                                data-id="9b3d106" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-f4328af elementor-widget elementor-widget-heading"
                                        data-id="f4328af" data-element_type="widget"
                                        data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h4 class="elementor-heading-title elementor-size-default">Newsletter
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-3b76c6a elementor-widget-divider--view-line elementor-widget elementor-widget-divider"
                                        data-id="3b76c6a" data-element_type="widget"
                                        data-widget_type="divider.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-divider">
                                                <span class="elementor-divider-separator">
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-bc34917 elementor-button-align-stretch elementor-widget elementor-widget-form"
                                        data-id="bc34917" data-element_type="widget"
                                        data-settings="{&quot;step_next_label&quot;:&quot;Next&quot;,&quot;step_previous_label&quot;:&quot;Previous&quot;,&quot;button_width&quot;:&quot;100&quot;,&quot;step_type&quot;:&quot;number_text&quot;,&quot;step_icon_shape&quot;:&quot;circle&quot;}"
                                        data-widget_type="form.default">
                                        <div class="elementor-widget-container">
                                            <style>
                                                /*! elementor-pro - v3.6.4 - 15-03-2022 */
                                                .elementor-button.elementor-hidden,
                                                .elementor-hidden {
                                                    display: none
                                                }

                                                .e-form__step {
                                                    width: 100%
                                                }

                                                .e-form__step:not(.elementor-hidden) {
                                                    display: -webkit-box;
                                                    display: -ms-flexbox;
                                                    display: flex;
                                                    -ms-flex-wrap: wrap;
                                                    flex-wrap: wrap
                                                }

                                                .e-form__buttons {
                                                    -ms-flex-wrap: wrap;
                                                    flex-wrap: wrap
                                                }

                                                .e-form__buttons,
                                                .e-form__buttons__wrapper {
                                                    display: -webkit-box;
                                                    display: -ms-flexbox;
                                                    display: flex
                                                }

                                                .e-form__indicators {
                                                    -webkit-box-pack: justify;
                                                    -ms-flex-pack: justify;
                                                    justify-content: space-between;
                                                    -ms-flex-wrap: nowrap;
                                                    flex-wrap: nowrap;
                                                    font-size: 13px;
                                                    margin-bottom: var(--e-form-steps-indicators-spacing)
                                                }

                                                .e-form__indicators,
                                                .e-form__indicators__indicator {
                                                    display: -webkit-box;
                                                    display: -ms-flexbox;
                                                    display: flex;
                                                    -webkit-box-align: center;
                                                    -ms-flex-align: center;
                                                    align-items: center
                                                }

                                                .e-form__indicators__indicator {
                                                    -webkit-box-orient: vertical;
                                                    -webkit-box-direction: normal;
                                                    -ms-flex-direction: column;
                                                    flex-direction: column;
                                                    -webkit-box-pack: center;
                                                    -ms-flex-pack: center;
                                                    justify-content: center;
                                                    -ms-flex-preferred-size: 0;
                                                    flex-basis: 0;
                                                    padding: 0 var(--e-form-steps-divider-gap)
                                                }

                                                .e-form__indicators__indicator__progress {
                                                    width: 100%;
                                                    position: relative;
                                                    background-color: var(--e-form-steps-indicator-progress-background-color);
                                                    border-radius: var(--e-form-steps-indicator-progress-border-radius);
                                                    overflow: hidden
                                                }

                                                .e-form__indicators__indicator__progress__meter {
                                                    width: var(--e-form-steps-indicator-progress-meter-width, 0);
                                                    height: var(--e-form-steps-indicator-progress-height);
                                                    line-height: var(--e-form-steps-indicator-progress-height);
                                                    padding-right: 15px;
                                                    border-radius: var(--e-form-steps-indicator-progress-border-radius);
                                                    background-color: var(--e-form-steps-indicator-progress-color);
                                                    color: var(--e-form-steps-indicator-progress-meter-color);
                                                    text-align: right;
                                                    -webkit-transition: width .1s linear;
                                                    -o-transition: width .1s linear;
                                                    transition: width .1s linear
                                                }

                                                .e-form__indicators__indicator:first-child {
                                                    padding-left: 0
                                                }

                                                .e-form__indicators__indicator:last-child {
                                                    padding-right: 0
                                                }

                                                .e-form__indicators__indicator--state-inactive {
                                                    color: var(--e-form-steps-indicator-inactive-primary-color, #c2cbd2)
                                                }

                                                .e-form__indicators__indicator--state-inactive [class*=indicator--shape-]:not(.e-form__indicators__indicator--shape-none) {
                                                    background-color: var(--e-form-steps-indicator-inactive-secondary-color, #fff)
                                                }

                                                .e-form__indicators__indicator--state-inactive object,
                                                .e-form__indicators__indicator--state-inactive svg {
                                                    fill: var(--e-form-steps-indicator-inactive-primary-color, #c2cbd2)
                                                }

                                                .e-form__indicators__indicator--state-active {
                                                    color: var(--e-form-steps-indicator-active-primary-color, #39b54a);
                                                    border-color: var(--e-form-steps-indicator-active-secondary-color, #fff)
                                                }

                                                .e-form__indicators__indicator--state-active [class*=indicator--shape-]:not(.e-form__indicators__indicator--shape-none) {
                                                    background-color: var(--e-form-steps-indicator-active-secondary-color, #fff)
                                                }

                                                .e-form__indicators__indicator--state-active object,
                                                .e-form__indicators__indicator--state-active svg {
                                                    fill: var(--e-form-steps-indicator-active-primary-color, #39b54a)
                                                }

                                                .e-form__indicators__indicator--state-completed {
                                                    color: var(--e-form-steps-indicator-completed-secondary-color, #fff)
                                                }

                                                .e-form__indicators__indicator--state-completed [class*=indicator--shape-]:not(.e-form__indicators__indicator--shape-none) {
                                                    background-color: var(--e-form-steps-indicator-completed-primary-color, #39b54a)
                                                }

                                                .e-form__indicators__indicator--state-completed .e-form__indicators__indicator__label {
                                                    color: var(--e-form-steps-indicator-completed-primary-color, #39b54a)
                                                }

                                                .e-form__indicators__indicator--state-completed .e-form__indicators__indicator--shape-none {
                                                    color: var(--e-form-steps-indicator-completed-primary-color, #39b54a);
                                                    background-color: initial
                                                }

                                                .e-form__indicators__indicator--state-completed object,
                                                .e-form__indicators__indicator--state-completed svg {
                                                    fill: var(--e-form-steps-indicator-completed-secondary-color, #fff)
                                                }

                                                .e-form__indicators__indicator__icon {
                                                    width: var(--e-form-steps-indicator-padding, 30px);
                                                    height: var(--e-form-steps-indicator-padding, 30px);
                                                    font-size: var(--e-form-steps-indicator-icon-size);
                                                    border-width: 1px;
                                                    border-style: solid;
                                                    display: -webkit-box;
                                                    display: -ms-flexbox;
                                                    display: flex;
                                                    -webkit-box-pack: center;
                                                    -ms-flex-pack: center;
                                                    justify-content: center;
                                                    -webkit-box-align: center;
                                                    -ms-flex-align: center;
                                                    align-items: center;
                                                    overflow: hidden;
                                                    margin-bottom: 10px
                                                }

                                                .e-form__indicators__indicator__icon img,
                                                .e-form__indicators__indicator__icon object,
                                                .e-form__indicators__indicator__icon svg {
                                                    width: var(--e-form-steps-indicator-icon-size);
                                                    height: auto
                                                }

                                                .e-form__indicators__indicator__icon .e-font-icon-svg {
                                                    height: 1em
                                                }

                                                .e-form__indicators__indicator__number {
                                                    width: var(--e-form-steps-indicator-padding, 30px);
                                                    height: var(--e-form-steps-indicator-padding, 30px);
                                                    border-width: 1px;
                                                    border-style: solid;
                                                    display: -webkit-box;
                                                    display: -ms-flexbox;
                                                    display: flex;
                                                    -webkit-box-pack: center;
                                                    -ms-flex-pack: center;
                                                    justify-content: center;
                                                    -webkit-box-align: center;
                                                    -ms-flex-align: center;
                                                    align-items: center;
                                                    margin-bottom: 10px
                                                }

                                                .e-form__indicators__indicator--shape-circle {
                                                    border-radius: 50%
                                                }

                                                .e-form__indicators__indicator--shape-square {
                                                    border-radius: 0
                                                }

                                                .e-form__indicators__indicator--shape-rounded {
                                                    border-radius: 5px
                                                }

                                                .e-form__indicators__indicator--shape-none {
                                                    border: 0
                                                }

                                                .e-form__indicators__indicator__label {
                                                    text-align: center
                                                }

                                                .e-form__indicators__indicator__separator {
                                                    width: 100%;
                                                    height: var(--e-form-steps-divider-width);
                                                    background-color: #c2cbd2
                                                }

                                                .e-form__indicators--type-icon,
                                                .e-form__indicators--type-icon_text,
                                                .e-form__indicators--type-number,
                                                .e-form__indicators--type-number_text {
                                                    -webkit-box-align: start;
                                                    -ms-flex-align: start;
                                                    align-items: flex-start
                                                }

                                                .e-form__indicators--type-icon .e-form__indicators__indicator__separator,
                                                .e-form__indicators--type-icon_text .e-form__indicators__indicator__separator,
                                                .e-form__indicators--type-number .e-form__indicators__indicator__separator,
                                                .e-form__indicators--type-number_text .e-form__indicators__indicator__separator {
                                                    margin-top: calc(var(--e-form-steps-indicator-padding, 30px) / 2 - var(--e-form-steps-divider-width, 1px) / 2)
                                                }

                                                .elementor-field-type-hidden {
                                                    display: none
                                                }

                                                .elementor-field-type-html {
                                                    display: inline-block
                                                }

                                                .elementor-login .elementor-lost-password,
                                                .elementor-login .elementor-remember-me {
                                                    font-size: .85em
                                                }

                                                .elementor-field-type-recaptcha_v3 .elementor-field-label {
                                                    display: none
                                                }

                                                .elementor-field-type-recaptcha_v3 .grecaptcha-badge {
                                                    z-index: 1
                                                }

                                                .elementor-button .elementor-form-spinner {
                                                    -webkit-box-ordinal-group: 4;
                                                    -ms-flex-order: 3;
                                                    order: 3
                                                }

                                                .elementor-form .elementor-button>span {
                                                    display: -webkit-box;
                                                    display: -ms-flexbox;
                                                    display: flex;
                                                    -webkit-box-pack: center;
                                                    -ms-flex-pack: center;
                                                    justify-content: center;
                                                    -webkit-box-align: center;
                                                    -ms-flex-align: center;
                                                    align-items: center
                                                }

                                                .elementor-form .elementor-button .elementor-button-text {
                                                    white-space: normal;
                                                    -webkit-box-flex: 0;
                                                    -ms-flex-positive: 0;
                                                    flex-grow: 0
                                                }

                                                .elementor-form .elementor-button svg {
                                                    height: auto
                                                }

                                                .elementor-form .elementor-button .e-font-icon-svg {
                                                    height: 1em
                                                }
                                            </style>
                                            <form class="elementor-form" method="post" action="{{route('contact.store')}}" name="New Form">
                                                {{ csrf_field() }}
                                                <input type="hidden" name="post_id" value="152" />
                                                <input type="hidden" name="form_id" value="bc34917" />
                                                <input type="hidden" name="referer_title" value="" />

                                                <input type="hidden" name="queried_id" value="80" />

                                                <div class="elementor-form-fields-wrapper elementor-labels-above">
                                                    <div
                                                        class="elementor-field-type-email elementor-field-group elementor-column elementor-field-group-email elementor-col-100 elementor-field-required">
                                                        <input size="1" type="email"
                                                            name="email" id="form-field-email"
                                                            class="elementor-field elementor-size-sm  elementor-field-textual"
                                                            placeholder="Email" required="required"
                                                            aria-required="true">
                                                    </div>
                                                    <div
                                                        class="elementor-field-group elementor-column elementor-field-type-submit elementor-col-100 e-form__buttons">
                                                        <button type="submit"
                                                            class="elementor-button elementor-size-sm">
                                                            <span>
                                                                <span class=" elementor-button-icon">
                                                                </span>
                                                                <span class="elementor-button-text">Subscribe
                                                                    Now</span>
                                                            </span>
                                                        </button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-143d744 elementor-shape-circle e-grid-align-left e-grid-align-tablet-left elementor-grid-0 elementor-widget elementor-widget-social-icons"
                                        data-id="143d744" data-element_type="widget"
                                        data-widget_type="social-icons.default">
                                        <div class="elementor-widget-container">
                                            <div class="elementor-social-icons-wrapper elementor-grid">
                                                <span class="elementor-grid-item">
                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook-f elementor-animation-shrink elementor-repeater-item-c0163ab"
                                                        href="{{$item->facebook}}" target="_blank">
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
                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-animation-shrink elementor-repeater-item-63f86db"
                                                        href="{{$item->instragram}}"
                                                        target="_blank">
                                                        <span class="elementor-screen-only">Instagram</span>
                                                        <i class="fab fa-instagram"></i> </a>
                                                </span>
                                                <span class="elementor-grid-item">
                                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-animation-shrink elementor-repeater-item-d54d883"
                                                        target="_blank">
                                                        <span class="elementor-screen-only">Linkedin</span>
                                                        <i class="fab fa-linkedin"></i> </a>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section
                        class="elementor-section elementor-inner-section elementor-element elementor-element-dafd5ae elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="dafd5ae" data-element_type="section">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-69414dd"
                                data-id="69414dd" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-9698124 elementor-widget elementor-widget-text-editor"
                                        data-id="9698124" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            SRS IDEA LIMITED </div>
                                    </div>
                                </div>
                            </div>
                            <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-0c5603e"
                                data-id="0c5603e" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-6ebb11e elementor-widget elementor-widget-text-editor"
                                        data-id="6ebb11e" data-element_type="widget"
                                        data-widget_type="text-editor.default">
                                        <div class="elementor-widget-container">
                                            Copyright © 2022. All rights reserved. </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
        @endforeach
    </section>
</div>
