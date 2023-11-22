@extends('frontend.web_master')
@section('web-master')

    <body
        class="page-template page-template-elementor_header_footer page page-id-90 elementor-default elementor-template-full-width elementor-kit-6 elementor-page elementor-page-90">
        </div>
        <div data-elementor-type="wp-page" data-elementor-id="90" class="elementor elementor-90">

            <section
                @foreach ($facility as $item)
                class="elementor-section elementor-top-section elementor-element elementor-element-31962cd elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="31962cd" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}"style="background-image: url({{ asset('images/banner/' . $item->banner) }}" >
                <div class="elementor-background-overlay"></div> @endforeach
                <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-c6c79c4"
                    data-id="c6c79c4" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-bcc5e09 elementor-widget elementor-widget-heading"
                            data-id="bcc5e09" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">Our Services</h2>
                            </div>
                        </div>
                    </div>
                </div>
        </div>
        </section>
        <section
            class="elementor-section elementor-top-section elementor-element elementor-element-c915263 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="c915263" data-element_type="section">
            @foreach ($facilities as $key => $item)
                <div data-id="{{ $item->id }}"class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-d4c7ab5"
                        data-id="d4c7ab5" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-807e6f8 elementor-hidden-mobile elementor-widget elementor-widget-image"
                                data-id="807e6f8" data-element_type="widget" data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <img decoding="async" width="640" height="426"
                                        src=" {{ asset('images/' . $item->image) }}"
                                        class="attachment-large size-large wp-image-714" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-9807f25"
                        data-id="9807f25" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-51523e9 elementor-widget elementor-widget-heading"
                                data-id="51523e9" data-element_type="widget" data-widget_type="heading.default">
                                <div class="elementor-widget-container" >
                                    <h2 class="elementor-heading-title elementor-size-default">{{ $item->title }}
                                    </h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-cad5789 elementor-widget elementor-widget-text-editor"
                                data-id="cad5789" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container" >
                                    <p>{!! $item->details!!}</p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-d806a0f elementor-widget elementor-widget-text-editor"
                                data-id="d806a0f" data-element_type="widget" data-widget_type="text-editor.default">
                                <div class="elementor-widget-container" style="text-align: justify" >
                                    <p>{!! $item->description !!}
                                    </p>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-ac3635b elementor-align-justify elementor-widget elementor-widget-button"
                                data-id="ac3635b" data-element_type="widget" data-widget_type="button.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-button-wrapper">
                                        <a class="elementor-button elementor-button-link elementor-size-sm"
                                            href="{{ route('project') }}">
                                            <span class="elementor-button-content-wrapper">
                                                <span class="elementor-button-text">Check our projects</span>
                                            </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @if ($key == 0)
                @break
            @endif
        @endforeach
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-5413d61 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="5413d61" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            @foreach ($facilities as $key => $item)
                @if ($key == 0)
                    @continue
                @endif
                <div data-id="{{ $item->id }}"
                    class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-2d10007"
                    data-id="2d10007" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-abb95da elementor-widget elementor-widget-heading"
                            data-id="abb95da" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">{{ $item->title }}
                                </h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-a836da5 elementor-widget elementor-widget-text-editor"
                            data-id="a836da5" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                {!! $item->details !!}
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-2b317e8 elementor-widget elementor-widget-text-editor"
                            data-id="2b317e8" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container" style="text-align: justify">
                                {!! $item->description !!}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-6ccdc37"
                    data-id="6ccdc37" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-b35ffee elementor-hidden-mobile elementor-widget elementor-widget-image"
                            data-id="b35ffee" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img decoding="async" width="800" height="534"
                                    src=" {{ asset('images/' . $item->image) }}"
                                    class="attachment-large size-large wp-image-206" alt=""
                                    {{-- srcset="https://srsidea.biz/wp-content/uploads/2022/05/web-design-concepts-with-blurred-background-min-1024x683.jpg 1024w, https://srsidea.biz/wp-content/uploads/2022/05/web-design-concepts-with-blurred-background-min-300x200.jpg 300w, https://srsidea.biz/wp-content/uploads/2022/05/web-design-concepts-with-blurred-background-min-768x512.jpg 768w, https://srsidea.biz/wp-content/uploads/2022/05/web-design-concepts-with-blurred-background-min-1536x1024.jpg 1536w, https://srsidea.biz/wp-content/uploads/2022/05/web-design-concepts-with-blurred-background-min-2048x1365.jpg 2048w"
                                        sizes="(max-width: 800px) 100vw, 800px" /> --}} />
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
    <section
        class="elementor-section elementor-top-section elementor-element elementor-element-4f2eaf4 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="4f2eaf4" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-151812c"
                data-id="151812c" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-6c2fbd6 elementor-align-justify elementor-widget elementor-widget-button"
                        data-id="6c2fbd6" data-element_type="widget" data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a class="elementor-button elementor-button-link elementor-size-sm" href="#featuress">
                                    <span class="elementor-button-content-wrapper">
                                        <span class="elementor-button-text">More Featuress</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-6b6a239 elementor-widget elementor-widget-heading"
                        data-id="6b6a239" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">DEVELOPMENT
                            </h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-bb2d239 elementor-widget-divider--view-line_icon elementor-view-default elementor-widget-divider--element-align-center elementor-widget elementor-widget-divider"
                        data-id="bb2d239" data-element_type="widget" data-widget_type="divider.default">
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
        class="elementor-section elementor-top-section elementor-element elementor-element-32de6c2 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="32de6c2" data-element_type="section">
        @foreach ($serviceDev as $item)
            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-494cbf6"
                    data-id="494cbf6" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-a55f7d1 elementor-widget elementor-widget-image"
                            data-id="a55f7d1" data-element_type="widget" data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <img decoding="async" loading="lazy" width="800" height="534"
                                    src="{{ asset('images/dervicedev/' . $item->image) }}"
                                    class="attachment-large size-large wp-image-242" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-f36f271"
                    data-id="f36f271" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-7e6e650 elementor-align-left elementor-icon-list--layout-traditional elementor-list-item-link-full_width elementor-widget elementor-widget-icon-list"
                            data-id="7e6e650" data-element_type="widget" data-widget_type="icon-list.default">
                            <div class="elementor-widget-container">
                                <ul class="elementor-icon-list-items">
                                    <li class="elementor-icon-list-item">
                                        <span class="elementor-icon-list-icon">
                                            <i aria-hidden="true" class="fas fa-server"></i> </span>
                                        <span class="elementor-icon-list-text" style="text-align: justify">{{ $item->title }}</span>
                                    </li>
                                    <li class="elementor-icon-list-item">
                                        <span class="elementor-icon-list-icon">
                                            <i aria-hidden="true" class="fas fa-volleyball-ball"></i> </span>
                                        <span class="elementor-icon-list-text" style="text-align: justify">{!! $item->details !!}</span>
                                    </li>
                                    <li class="elementor-icon-list-item">
                                        <span class="elementor-icon-list-icon">
                                            <i aria-hidden="true" class="fas fa-recycle"></i> </span>
                                        <span class="elementor-icon-list-text" style="text-align: justify">{!! $item->description !!}</span>
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
        class="elementor-section elementor-top-section elementor-element elementor-element-c995e38 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="c995e38" data-element_type="section" id="featuress">
        <div class="elementor-container elementor-column-gap-default">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-440216e"
                data-id="440216e" data-element_type="column">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-a248525 elementor-widget elementor-widget-heading"
                        data-id="a248525" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">
                            <h2 class="elementor-heading-title elementor-size-default">More Features
                            </h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-ce98145 elementor-widget-divider--view-line_icon elementor-view-default elementor-widget-divider--element-align-center elementor-widget elementor-widget-divider"
                        data-id="ce98145" data-element_type="widget" data-widget_type="divider.default">
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
        class="elementor-section elementor-top-section elementor-element elementor-element-0eb3067 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
        data-id="0eb3067" data-element_type="section">
        <div class="elementor-container elementor-column-gap-default">
            @foreach ($moreservice as $key => $item)
                <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3c1ac1a"
                    data-id="3c1ac1a" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <section
                            class="elementor-section elementor-inner-section elementor-element elementor-element-a9b85df elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                            data-id="a9b85df" data-element_type="section">

                            <div class="elementor-container elementor-column-gap-default">
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5e17e24"
                                    data-id="5e17e24" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-6fc221f elementor-view-default elementor-widget elementor-widget-icon"
                                            data-id="6fc221f" data-element_type="widget"
                                            data-widget_type="icon.default">
                                            <div class="elementor-widget-container">
                                                <div class="elementor-icon-wrapper">
                                                    <div class="elementor-icon">
                                                        <i aria-hidden="true" class="fas fa-tachometer-alt"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1918d1d"
                                    data-id="1918d1d" data-element_type="column">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-9dde25f elementor-widget elementor-widget-heading"
                                            data-id="9dde25f" data-element_type="widget"
                                            data-widget_type="heading.default">
                                            <div class="elementor-widget-container">
                                                <h2 class="elementor-heading-title elementor-size-default">
                                                    {{ $item->name }} </h2>
                                            </div>
                                        </div>
                                        <div class="elementor-element elementor-element-fa7358a elementor-widget elementor-widget-text-editor"
                                            data-id="fa7358a" data-element_type="widget"
                                            data-widget_type="text-editor.default">
                                            <div class="elementor-widget-container" style="text-align: justify">
                                                {!! $item->details !!}</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                @if ($key == 1)
                @break
            @endif
        @endforeach
    </div>
</section>



<section
    class="elementor-section elementor-top-section elementor-element elementor-element-0eb3067 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
    data-id="0eb3067" data-element_type="section">

    <div class="elementor-container elementor-column-gap-default">
        @foreach ($moreservice as $key => $item)
            @if ($key <= 1)
                @continue
            @elseif ($key == 4)
            @break
        @endif
        <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3c1ac1a"
            data-id="3c1ac1a" data-element_type="column">
            <div class="elementor-widget-wrap elementor-element-populated">
                <section
                    class="elementor-section elementor-inner-section elementor-element elementor-element-a9b85df elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                    data-id="a9b85df" data-element_type="section">

                    <div class="elementor-container elementor-column-gap-default">
                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5e17e24"
                            data-id="5e17e24" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-6fc221f elementor-view-default elementor-widget elementor-widget-icon"
                                    data-id="6fc221f" data-element_type="widget"
                                    data-widget_type="icon.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-icon-wrapper">
                                            <div class="elementor-icon">
                                                <i aria-hidden="true" class="fas fa-tachometer-alt"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1918d1d"
                            data-id="1918d1d" data-element_type="column">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-9dde25f elementor-widget elementor-widget-heading"
                                    data-id="9dde25f" data-element_type="widget"
                                    data-widget_type="heading.default">
                                    <div class="elementor-widget-container">
                                        <h2 class="elementor-heading-title elementor-size-default">
                                            {{ $item->name }} </h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-fa7358a elementor-widget elementor-widget-text-editor"
                                    data-id="fa7358a" data-element_type="widget"
                                    data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container" style="text-align: justify">
                                        {!! $item->details !!}</div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
            </div>
        </div>
    @endforeach
</div>
</section>


<section
class="elementor-section elementor-top-section elementor-element elementor-element-0eb3067 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
data-id="0eb3067" data-element_type="section">

<div class="elementor-container elementor-column-gap-default">
    @foreach ($moreservice as $key => $item)
        @if ($key <= 4)
            @continue
        @elseif ($key == 7)
        @break
    @endif
    <div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3c1ac1a"
        data-id="3c1ac1a" data-element_type="column">
        <div class="elementor-widget-wrap elementor-element-populated">
            <section
                class="elementor-section elementor-inner-section elementor-element elementor-element-a9b85df elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="a9b85df" data-element_type="section">

                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5e17e24"
                        data-id="5e17e24" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-6fc221f elementor-view-default elementor-widget elementor-widget-icon"
                                data-id="6fc221f" data-element_type="widget"
                                data-widget_type="icon.default">
                                <div class="elementor-widget-container">
                                    <div class="elementor-icon-wrapper">
                                        <div class="elementor-icon">
                                            <i aria-hidden="true" class="fas fa-tachometer-alt"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1918d1d"
                        data-id="1918d1d" data-element_type="column">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-9dde25f elementor-widget elementor-widget-heading"
                                data-id="9dde25f" data-element_type="widget"
                                data-widget_type="heading.default">
                                <div class="elementor-widget-container">
                                    <h2 class="elementor-heading-title elementor-size-default">
                                        {{ $item->name }} </h2>
                                </div>
                            </div>
                            <div class="elementor-element elementor-element-fa7358a elementor-widget elementor-widget-text-editor"
                                data-id="fa7358a" data-element_type="widget"
                                data-widget_type="text-editor.default">
                                <div class="elementor-widget-container" style="text-align: justify">
                                    {!! $item->details !!}</div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>
        </div>
    </div>
@endforeach

</div>

</section>


<section
class="elementor-section elementor-top-section elementor-element elementor-element-0eb3067 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
data-id="0eb3067" data-element_type="section">

<div class="elementor-container elementor-column-gap-default">
@foreach ($moreservice as $key => $item)
    @if ($key <= 7)
        @continue
    @elseif ($key == 10)
    @break
@endif
<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-3c1ac1a"
    data-id="3c1ac1a" data-element_type="column">
    <div class="elementor-widget-wrap elementor-element-populated">
        <section
            class="elementor-section elementor-inner-section elementor-element elementor-element-a9b85df elementor-section-boxed elementor-section-height-default elementor-section-height-default"
            data-id="a9b85df" data-element_type="section">

            <div class="elementor-container elementor-column-gap-default">
                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-5e17e24"
                    data-id="5e17e24" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-6fc221f elementor-view-default elementor-widget elementor-widget-icon"
                            data-id="6fc221f" data-element_type="widget"
                            data-widget_type="icon.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-icon-wrapper">
                                    <div class="elementor-icon">
                                        <i aria-hidden="true" class="fas fa-tachometer-alt"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-1918d1d"
                    data-id="1918d1d" data-element_type="column">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-9dde25f elementor-widget elementor-widget-heading"
                            data-id="9dde25f" data-element_type="widget"
                            data-widget_type="heading.default">
                            <div class="elementor-widget-container">
                                <h2 class="elementor-heading-title elementor-size-default">
                                    {{ $item->name }} </h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-fa7358a elementor-widget elementor-widget-text-editor"
                            data-id="fa7358a" data-element_type="widget"
                            data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">
                                {!! $item->details !!}</div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
    </div>
</div>
@endforeach

</div>

</section>



</div>


</body>

<!-- Mirrored from srsidea.biz/features/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Oct 2023 08:30:48 GMT -->

</html>
@endsection
