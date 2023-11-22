<div data-elementor-type="header" data-elementor-id="148" class="elementor elementor-148 elementor-location-header">
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-c8be807 elementor-section-content-middle elementor-hidden-tablet elementor-hidden-phone elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="c8be807" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
        @foreach ($info as $item)
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-8870dad"
                data-id="8870dad" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-72fd686 elementor-icon-list--layout-inline elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                        data-id="72fd686" data-element_type="widget" data-widget_type="icon-list.default">


                        <div class="elementor-widget-container">
                            <link rel="stylesheet"
                                href="{{asset("wp-content/plugins/elementor/assets/css/widget-icon-list.min.css")}}">
                            <ul class="elementor-icon-list-items elementor-inline-items">
                                <li class="elementor-icon-list-item elementor-inline-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-envelope"></i> </span>
                                    <span class="elementor-icon-list-text">{{$item->email}}</span>
                                </li>
                                <li class="elementor-icon-list-item elementor-inline-item">
                                    <span class="elementor-icon-list-icon">
                                        <i aria-hidden="true" class="fas fa-map-marker-alt"></i> </span>
                                    <span class="elementor-icon-list-text">{{$item->address1}}</span>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e6d5803"
                data-id="e6d5803" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-23e3936 elementor-shape-circle e-grid-align-right elementor-grid-0 elementor-widget elementor-widget-social-icons"
                        data-id="23e3936" data-element_type="widget" data-widget_type="social-icons.default">
                        <div class="elementor-widget-container">
                            <style>
                                /*! elementor - v3.16.0 - 09-10-2023 */
                                .elementor-widget-social-icons.elementor-grid-0 .elementor-widget-container,
                                .elementor-widget-social-icons.elementor-grid-mobile-0 .elementor-widget-container,
                                .elementor-widget-social-icons.elementor-grid-tablet-0 .elementor-widget-container {
                                    line-height: 1;
                                    font-size: 0
                                }

                                .elementor-widget-social-icons:not(.elementor-grid-0):not(.elementor-grid-tablet-0):not(.elementor-grid-mobile-0) .elementor-grid {
                                    display: inline-grid
                                }

                                .elementor-widget-social-icons .elementor-grid {
                                    grid-column-gap: var(--grid-column-gap, 5px);
                                    grid-row-gap: var(--grid-row-gap, 5px);
                                    grid-template-columns: var(--grid-template-columns);
                                    justify-content: var(--justify-content, center);
                                    justify-items: var(--justify-content, center)
                                }

                                .elementor-icon.elementor-social-icon {
                                    font-size: var(--icon-size, 25px);
                                    line-height: var(--icon-size, 25px);
                                    width: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)));
                                    height: calc(var(--icon-size, 25px) + (2 * var(--icon-padding, .5em)))
                                }

                                .elementor-social-icon {
                                    --e-social-icon-icon-color: #fff;
                                    display: inline-flex;
                                    background-color: #69727d;
                                    align-items: center;
                                    justify-content: center;
                                    text-align: center;
                                    cursor: pointer
                                }

                                .elementor-social-icon i {
                                    color: var(--e-social-icon-icon-color)
                                }

                                .elementor-social-icon svg {
                                    fill: var(--e-social-icon-icon-color)
                                }

                                .elementor-social-icon:last-child {
                                    margin: 0
                                }

                                .elementor-social-icon:hover {
                                    opacity: .9;
                                    color: #fff
                                }

                                .elementor-social-icon-android {
                                    background-color: #a4c639
                                }

                                .elementor-social-icon-apple {
                                    background-color: #999
                                }

                                .elementor-social-icon-behance {
                                    background-color: #1769ff
                                }

                                .elementor-social-icon-bitbucket {
                                    background-color: #205081
                                }

                                .elementor-social-icon-codepen {
                                    background-color: #000
                                }

                                .elementor-social-icon-delicious {
                                    background-color: #39f
                                }

                                .elementor-social-icon-deviantart {
                                    background-color: #05cc47
                                }

                                .elementor-social-icon-digg {
                                    background-color: #005be2
                                }

                                .elementor-social-icon-dribbble {
                                    background-color: #ea4c89
                                }

                                .elementor-social-icon-elementor {
                                    background-color: #d30c5c
                                }

                                .elementor-social-icon-envelope {
                                    background-color: #ea4335
                                }

                                .elementor-social-icon-facebook,
                                .elementor-social-icon-facebook-f {
                                    background-color: #3b5998
                                }

                                .elementor-social-icon-flickr {
                                    background-color: #0063dc
                                }

                                .elementor-social-icon-foursquare {
                                    background-color: #2d5be3
                                }

                                .elementor-social-icon-free-code-camp,
                                .elementor-social-icon-freecodecamp {
                                    background-color: #006400
                                }

                                .elementor-social-icon-github {
                                    background-color: #333
                                }

                                .elementor-social-icon-gitlab {
                                    background-color: #e24329
                                }

                                .elementor-social-icon-globe {
                                    background-color: #69727d
                                }

                                .elementor-social-icon-google-plus,
                                .elementor-social-icon-google-plus-g {
                                    background-color: #dd4b39
                                }

                                .elementor-social-icon-houzz {
                                    background-color: #7ac142
                                }

                                .elementor-social-icon-instagram {
                                    background-color: #262626
                                }

                                .elementor-social-icon-jsfiddle {
                                    background-color: #487aa2
                                }

                                .elementor-social-icon-link {
                                    background-color: #818a91
                                }

                                .elementor-social-icon-linkedin,
                                .elementor-social-icon-linkedin-in {
                                    background-color: #0077b5
                                }

                                .elementor-social-icon-medium {
                                    background-color: #00ab6b
                                }

                                .elementor-social-icon-meetup {
                                    background-color: #ec1c40
                                }

                                .elementor-social-icon-mixcloud {
                                    background-color: #273a4b
                                }

                                .elementor-social-icon-odnoklassniki {
                                    background-color: #f4731c
                                }

                                .elementor-social-icon-pinterest {
                                    background-color: #bd081c
                                }

                                .elementor-social-icon-product-hunt {
                                    background-color: #da552f
                                }

                                .elementor-social-icon-reddit {
                                    background-color: #ff4500
                                }

                                .elementor-social-icon-rss {
                                    background-color: #f26522
                                }

                                .elementor-social-icon-shopping-cart {
                                    background-color: #4caf50
                                }

                                .elementor-social-icon-skype {
                                    background-color: #00aff0
                                }

                                .elementor-social-icon-slideshare {
                                    background-color: #0077b5
                                }

                                .elementor-social-icon-snapchat {
                                    background-color: #fffc00
                                }

                                .elementor-social-icon-soundcloud {
                                    background-color: #f80
                                }

                                .elementor-social-icon-spotify {
                                    background-color: #2ebd59
                                }

                                .elementor-social-icon-stack-overflow {
                                    background-color: #fe7a15
                                }

                                .elementor-social-icon-steam {
                                    background-color: #00adee
                                }

                                .elementor-social-icon-stumbleupon {
                                    background-color: #eb4924
                                }

                                .elementor-social-icon-telegram {
                                    background-color: #2ca5e0
                                }

                                .elementor-social-icon-thumb-tack {
                                    background-color: #1aa1d8
                                }

                                .elementor-social-icon-tripadvisor {
                                    background-color: #589442
                                }

                                .elementor-social-icon-tumblr {
                                    background-color: #35465c
                                }

                                .elementor-social-icon-twitch {
                                    background-color: #6441a5
                                }

                                .elementor-social-icon-twitter {
                                    background-color: #1da1f2
                                }

                                .elementor-social-icon-viber {
                                    background-color: #665cac
                                }

                                .elementor-social-icon-vimeo {
                                    background-color: #1ab7ea
                                }

                                .elementor-social-icon-vk {
                                    background-color: #45668e
                                }

                                .elementor-social-icon-weibo {
                                    background-color: #dd2430
                                }

                                .elementor-social-icon-weixin {
                                    background-color: #31a918
                                }

                                .elementor-social-icon-whatsapp {
                                    background-color: #25d366
                                }

                                .elementor-social-icon-wordpress {
                                    background-color: #21759b
                                }

                                .elementor-social-icon-xing {
                                    background-color: #026466
                                }

                                .elementor-social-icon-yelp {
                                    background-color: #af0606
                                }

                                .elementor-social-icon-youtube {
                                    background-color: #cd201f
                                }

                                .elementor-social-icon-500px {
                                    background-color: #0099e5
                                }

                                .elementor-shape-rounded .elementor-icon.elementor-social-icon {
                                    border-radius: 10%
                                }

                                .elementor-shape-circle .elementor-icon.elementor-social-icon {
                                    border-radius: 50%
                                }
                            </style>
                            <div class="elementor-social-icons-wrapper elementor-grid">
                                <span class="elementor-grid-item">
                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-facebook elementor-repeater-item-03903b1"
                                        href="{{$item->facebook}}" target="_blank">
                                        <span class="elementor-screen-only">Facebook</span>
                                        <i class="fab fa-facebook"></i> </a>
                                </span>
                                <span class="elementor-grid-item">
                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-twitter elementor-repeater-item-e7a79ae"
                                        target="_blank">
                                        <span class="elementor-screen-only">Twitter</span>
                                        <i class="fab fa-twitter"></i> </a>
                                </span>
                                <span class="elementor-grid-item">
                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-instagram elementor-repeater-item-0fa537d"
                                        href="{{$item->instragram}}" target="_blank">
                                        <span class="elementor-screen-only">Instagram</span>
                                        <i class="fab fa-instagram"></i> </a>
                                </span>
                                <span class="elementor-grid-item">
                                    <a class="elementor-icon elementor-social-icon elementor-social-icon-linkedin elementor-repeater-item-123eb88"
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
        class="elementor-section elementor-top-section elementor-element elementor-element-96c0d27 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="96c0d27" data-element_type="section"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;sticky&quot;:&quot;top&quot;,&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0}">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-20f9a94"
                data-id="20f9a94" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-ea13ceb elementor-widget elementor-widget-image"
                        data-id="ea13ceb" data-element_type="widget" data-widget_type="image.default">
                        <div class="elementor-widget-container">
                             <a href="{{ route('home') }}"> <img width="400" height="150"
                                    src="{{asset('images/icon/'.$item->icon)}}"
                                    class="attachment-full size-full wp-image-169" alt=""></a>

                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-38eb63e"
                data-id="38eb63e" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-69bcaf8 elementor-nav-menu__align-right elementor-nav-menu--stretch elementor-nav-menu--dropdown-tablet elementor-nav-menu__text-align-aside elementor-nav-menu--toggle elementor-nav-menu--burger elementor-widget elementor-widget-nav-menu"
                        data-id="69bcaf8" data-element_type="widget"
                        data-settings="{&quot;full_width&quot;:&quot;stretch&quot;,&quot;layout&quot;:&quot;horizontal&quot;,&quot;submenu_icon&quot;:{&quot;value&quot;:&quot;&lt;i class=\&quot;fas fa-caret-down\&quot;&gt;&lt;\/i&gt;&quot;,&quot;library&quot;:&quot;fa-solid&quot;},&quot;toggle&quot;:&quot;burger&quot;}"
                        data-widget_type="nav-menu.default">
                        <div class="elementor-widget-container">
                            <link rel="stylesheet"
                                href="{{asset("wp-content/plugins/elementor-pro/assets/css/widget-nav-menu.min.css")}}">
                            <nav migration_allowed="1" migrated="0" role="navigation"
                                class="elementor-nav-menu--main elementor-nav-menu__container elementor-nav-menu--layout-horizontal e--pointer-underline e--animation-fade">
                                <ul id="menu-1-69bcaf8" class="elementor-nav-menu">
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-80 current_page_item menu-item-137">
                                        <a href="{{ route('home') }}" aria-current="page"
                                            class="elementor-item {{ Route::current()->getName() == 'home' ? 'elementor-item-active' : ''}}">Home</a>
                                    </li>
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-136">
                                        <a href="{{ route('about.index') }}" class="elementor-item {{ Route::current()->getName() == 'about.index' ? 'elementor-item-active' : ''}}">About Us</a>
                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-526">
                                                <a href="{{ route('clients') }}" class="elementor-sub-item">Our
                                                    Clients</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-140">
                                    <a href="{{route('facilities')}}" class="elementor-item {{ Route::current()->getName() == 'facilities' ? 'elementor-item-active' : ''}}">Service</a></li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-139">
                                        <a href="{{ route('project') }}"  class="elementor-item {{ Route::current()->getName() == 'project' ? 'elementor-item-active' : ''}}">Projects</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-138">
                                        <a href="{{ route('forntpricing.index') }}" class="elementor-item {{ Route::current()->getName() == 'forntpricing.index' ? 'elementor-item-active' : ''}}">Pricing</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-147">
                                        <a href="{{ route('contact.index') }}" class="elementor-item {{ Route::current()->getName() == 'contact.index' ? 'elementor-item-active' : ''}}">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                            <div class="elementor-menu-toggle" role="button" tabindex="0"
                                aria-label="Menu Toggle" aria-expanded="false">
                                <i aria-hidden="true" role="presentation"
                                    class="elementor-menu-toggle__icon--open eicon-menu-bar"></i><i aria-hidden="true"
                                    role="presentation" class="elementor-menu-toggle__icon--close eicon-close"></i>
                                <span class="elementor-screen-only">Menu</span>
                            </div>
                            <nav class="elementor-nav-menu--dropdown elementor-nav-menu__container" role="navigation"
                                aria-hidden="true">
                                <ul id="menu-2-69bcaf8" class="elementor-nav-menu">
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-80 current_page_item menu-item-137">
                                        <a href="{{route('home')}}" aria-current="page"
                                            class="elementor-item elementor-item-active" tabindex="-1">Home</a>
                                    </li>
                                    <li
                                        class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children menu-item-136">
                                        <a href="{{route('about.index')}}" class="elementor-item" tabindex="-1">About
                                            Us</a>
                                        <ul class="sub-menu elementor-nav-menu--dropdown">
                                            <li
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-526">
                                                <a href="{{route('clients')}}" class="elementor-sub-item"
                                                    tabindex="-1">Our Clients</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-140">
                                        <a href="{{route('facilities')}}"   class="elementor-item"
                                            tabindex="-1">Service</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-139">
                                        <a href="{{route('project')}}" class="elementor-item"
                                            tabindex="-1">Projects</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-138">
                                        <a href="{{route('forntpricing.index')}}" class="elementor-item"
                                            tabindex="-1">Pricing</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-147">
                                        <a href="{{route('contact.index')}}" class="elementor-item"
                                            tabindex="-1">Contact</a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-db55ac1 elementor-hidden-phone"
                data-id="db55ac1" data-element_type="column"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-40a3054 elementor-position-left elementor-vertical-align-middle elementor-widget__width-auto elementor-view-framed elementor-shape-circle elementor-mobile-position-top elementor-widget elementor-widget-icon-box"
                        data-id="40a3054" data-element_type="widget" data-widget_type="icon-box.default">
                        <div class="elementor-widget-container">
                            <link rel="stylesheet"
                                href="{{asset("wp-content/plugins/elementor/assets/css/widget-icon-box.min.css")}}">
                            <div class="elementor-icon-box-wrapper">
                                <div class="elementor-icon-box-icon">
                                    <span class="elementor-icon elementor-animation-">
                                        <i aria-hidden="true" class="fas fa-phone-alt"></i> </span>
                                </div>
                                <div class="elementor-icon-box-content">
                                    <h3 class="elementor-icon-box-title">
                                        <span>
                                            Start Consultation </span>
                                    </h3>
                                    <p class="elementor-icon-box-description">
                                        {{$item->phone}} </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </section>
</div>
