@extends('frontend.web_master')
@section('web-master')
    <body
    @foreach ($info as $item)
        class="page-template page-template-elementor_header_footer page page-id-130 elementor-default elementor-template-full-width elementor-kit-6 elementor-page elementor-page-130">
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-e6d5803"
            data-id="e6d5803" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-23e3936 elementor-shape-circle e-grid-align-right elementor-grid-0 elementor-widget elementor-widget-social-icons"
                    data-id="23e3936" data-element_type="widget" data-widget_type="social-icons.default">

                </div>
            </div>
        </div>
        </div>
        </section>

        <div data-elementor-type="wp-page" data-elementor-id="130" class="elementor elementor-130">

            <section

                class="elementor-section elementor-top-section elementor-element elementor-element-eaa6ea6 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="eaa6ea6" data-element_type="section" style="background-image: url({{asset("logo/".$item->logo)}}"
                >
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-e908de6"
                        data-id="e908de6" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-c459518 elementor-widget elementor-widget-heading"
                                data-id="c459518" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">

                                    <p class="elementor-heading-title elementor-size-default">About Us</p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-13fd0e7 elementor-icon-list--layout-inline elementor-align-center elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                                data-id="13fd0e7" data-element_type="widget" data-widget_type="icon-list.default">
                                <div class="elementor-widget-container">
                                    <ul class="elementor-icon-list-items elementor-inline-items">
                                        <li class="elementor-icon-list-item elementor-inline-item">
                                            <span class="elementor-icon-list-text">Home</span>
                                        </li>
                                        <li class="elementor-icon-list-item elementor-inline-item">
                                            <span class="elementor-icon-list-icon">
                                                <i aria-hidden="true" class="fas fa-chevron-right"></i> </span>
                                            <span class="elementor-icon-list-text">About Us</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-3d8df2e elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="3d8df2e" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">

                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6faeead"
                        data-id="6faeead" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class=""
                                data-id="1093868" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img decoding="async" style="height: 385px; width:650px"
                                        src="{{asset("images/".$item->image)}}"
                                        title="close-up-image-programer-working-his-desk-office-min"
                                        alt="close-up-image-programer-working-his-desk-office-min" loading="lazy" />
                                </div>
                            </div>
                            {{-- <div class="elementor-element elementor-element-b7665d9 elementor-widget elementor-widget-image"
                                data-id="b7665d9" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img decoding="async"
                                        src="../wp-content/uploads/elementor/thumbs/srs-idea-ltd-landing-page-04-puex2ls0fy5vac3lwn1khh96nt48u0hkcbxlpooum8.jpg"
                                        title="srs idea ltd &#8211; landing page-04" alt="srs idea ltd - landing page-04"
                                        loading="lazy" />
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-b4fa0a2"
                        data-id="b4fa0a2" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-64a24ec elementor-widget elementor-widget-heading"
                                data-id="64a24ec" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">INTRODUCTION</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-c622882 elementor-widget elementor-widget-text-editor"
                                data-id="c622882" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container" style="text-align: justify;line-height:1.5rem">

                                    <p>{!!$item->about!!}</p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-b59c9e2 elementor-align-left elementor-widget elementor-widget-button"
                                data-id="b59c9e2" data-element_type="widget" data-widget_type="button.default">
                                {{-- <div class="elementor-widget-container"> --}}
                                    <div class="elementor-button-wrapper">
                                        <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-float"
                                            href="#">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-text"
                                                >More About Us</span>
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
                class="elementor-section elementor-top-section elementor-element elementor-element-a954c17 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="a954c17" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-8e943ae"
                        data-id="8e943ae" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-90cc616 elementor-widget elementor-widget-heading"
                                data-id="90cc616" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Company Background
                                    </h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-44aaceb elementor-widget-divider--view-line_icon elementor-view-default elementor-widget-divider--element-align-center elementor-widget elementor-widget-divider"
                                data-id="44aaceb" data-element_type="widget" data-widget_type="divider.default">
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
                            <section
                                class="elementor-section elementor-inner-section elementor-element elementor-element-7338b14 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                data-id="7338b14" data-element_type="section">
                                @foreach ( $info as $item)

                                <div class="elementor-container elementor-column-gap-default">
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-a268172"
                                        data-id="a268172" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-beb6f2d elementor-widget elementor-widget-heading"
                                                data-id="beb6f2d" data-element_type="widget"
                                                data-widget_type="heading.default">
                                                <div class="elementor-widget-container">
                                                    <h2 class="elementor-heading-title elementor-size-default">
                                                        {{$item->slogun}}
                                                    </h2>
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-258a811 elementor-hidden-desktop elementor-hidden-tablet elementor-widget elementor-widget-image"
                                                data-id="258a811" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" width="800" height="485"
                                                        src="../wp-content/uploads/2022/-solution-branding-concept-min-1024x621.jpg"
                                                        class="attachment-large size-large wp-image-251" alt=""
                                                        srcset="https://srsidea.biz/wp-content/uploads/2022/05/corporate-management-strategy-solution-branding-concept-min-1024x621.jpg 1024w, https://srsidea.biz/wp-content/uploads/2022/05/corporate-management-strategy-solution-branding-concept-min-300x182.jpg 300w, https://srsidea.biz/wp-content/uploads/2022/05/corporate-management-strategy-solution-branding-concept-min-768x465.jpg 768w, https://srsidea.biz/wp-content/uploads/2022/05/corporate-management-strategy-solution-branding-concept-min-1536x931.jpg 1536w, https://srsidea.biz/wp-content/uploads/2022/05/corporate-management-strategy-solution-branding-concept-min-2048x1241.jpg 2048w"
                                                        sizes="(max-width: 800px) 100vw, 800px" />
                                                </div>
                                            </div>
                                            <div class="elementor-element elementor-element-e8d957e elementor-widget elementor-widget-text-editor"
                                                data-id="e8d957e" data-element_type="widget"
                                                data-widget_type="text-editor.default">
                                                <div class="elementor-widget-container" style="text-align: justify;line-height:1.2rem">
                                                    <p>{!!$item->note!!}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-40f42a2"
                                        data-id="40f42a2" data-element_type="column">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-bcf8842 elementor-hidden-mobile elementor-widget elementor-widget-image"
                                                data-id="bcf8842" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <img decoding="async" width="800" height="485"
                                                        src="{{asset("logo/".$item->logo)}}"
                                                        class="attachment-large size-large wp-image-251" alt=""
                                                         />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </section>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-35f0705 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="35f0705" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c81e8d6"
                        data-id="c81e8d6" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-d3394c5 elementor-widget elementor-widget-text-editor"
                                data-id="d3394c5" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container">
                                    <p>To understand the needs of our clients and provide them with quality, result oriented and
                                        cost-effective solutions.</p>
                                </div>
                            </div>

                            <div class="elementor-element elementor-element-723f6ad elementor-align-center elementor-mobile-align-center elementor-widget elementor-widget-button"
                                data-id="723f6ad" data-element_type="widget" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a href="{{route('contact.index')}}" class="elementor-button elementor-size-sm elementor-animation-float"
                                            role="button">
                                            <span class="elementor-button-content-wrapper">
                                             <span class="elementor-button-text">Contact Us</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-2e540d5 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="2e540d5" data-element_type="section">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-3e7ec7c"
                        data-id="3e7ec7c" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-97a4475 elementor-widget elementor-widget-heading"
                                data-id="97a4475" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">Our Blog</h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-7e8521c elementor-widget-divider--view-line_icon elementor-view-default elementor-widget-divider--element-align-center elementor-widget elementor-widget-divider"
                                data-id="7e8521c" data-element_type="widget" data-widget_type="divider.default">
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
                        </div>
                    </div>
                </div>
            </section>
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-e946bbb elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="e946bbb" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-a787608"
                        data-id="a787608" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-e6d8a55 elementor-grid-3 elementor-grid-tablet-2 elementor-grid-mobile-1 elementor-posts--thumbnail-top elementor-posts--show-avatar elementor-card-shadow-yes elementor-posts__hover-gradient elementor-widget elementor-widget-archive-posts"
                                data-id="e6d8a55" data-element_type="widget"
                                data-settings="{&quot;archive_cards_columns&quot;:&quot;3&quot;,&quot;archive_cards_columns_tablet&quot;:&quot;2&quot;,&quot;archive_cards_columns_mobile&quot;:&quot;1&quot;,&quot;archive_cards_row_gap&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:35,&quot;sizes&quot;:[]},&quot;archive_cards_row_gap_tablet&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;archive_cards_row_gap_mobile&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:&quot;&quot;,&quot;sizes&quot;:[]},&quot;pagination_type&quot;:&quot;numbers&quot;}"
                                data-widget_type="archive-posts.archive_cards">
                                <div class="elementor-widget-container">
                                    <link rel="stylesheet"
                                        href="../wp-content/plugins/elementor-pro/assets/css/widget-posts.min.css">
                                    <div
                                        class="elementor-posts-container elementor-posts elementor-posts--skin-cards elementor-grid">
                                        <article
                                            class="elementor-post elementor-grid-item post-130 page type-page status-publish hentry">
                                            <div class="elementor-post__card">
                                                <div class="elementor-post__text">
                                                    <h3 class="elementor-post__title">
                                                        <a href="index.html">
                                                            About Us </a>
                                                    </h3>
                                                    <div class="elementor-post__excerpt">
                                                        <p>About Us Home About Us INTRODUCTION The world we live in today is
                                                            increasingly dependent on digital technology, from small,
                                                            hand-held devices to giant processors</p>
                                                    </div>
                                                    <a class="elementor-post__read-more" href="{{route('about.index')}}">
                                                        Read More » </a>
                                                </div>
                                                <div class="elementor-post__meta-data">
                                                    <span class="elementor-post-date">
                                                        May 26, 2022 </span>
                                                    <span class="elementor-post-avatar">
                                                        No Comments </span>
                                                </div>
                                            </div>
                                        </article>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        </div>
        </div>
        </div>
        </section>
    </body>
@endsection
