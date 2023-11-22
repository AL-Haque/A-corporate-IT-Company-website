@extends('frontend.web_master')
@section('web-master')

    <body class="page-template-default page page-id-2 elementor-default elementor-kit-6 elementor-page elementor-page-2">

        <div data-elementor-type="header" data-elementor-id="148" class="elementor elementor-148 elementor-location-header">
        </div>
        <main id="content" class="site-main post-2 page type-page status-publish hentry" role="main">
            {{-- <header class="page-header">
                <h1 class="entry-title">Our Clients</h1>
            </header> --}}
            <div class="page-content">
                <div data-elementor-type="wp-page" data-elementor-id="2" class="elementor elementor-2">
                    <section
                        class="elementor-section elementor-top-section elementor-element elementor-element-8477c54 elementor-section-content-middle elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                        data-id="8477c54" data-element_type="section"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-container elementor-column-gap-no">
                            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-51358039"
                                data-id="51358039" data-element_type="column">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-6d1bb8dd elementor-widget elementor-widget-heading"
                                        data-id="6d1bb8dd" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h2 class="elementor-heading-title elementor-size-default">Our Clients</h2>
                                        </div>
                                    </div>
                                    <div class="elementor-element elementor-element-58659564 elementor-widget elementor-widget-heading"
                                        data-id="58659564" data-element_type="widget" data-widget_type="heading.default">
                                        <div class="elementor-widget-container">
                                            <h4 class="elementor-heading-title elementor-size-small">Here's what we look for
                                                in our clients: ... Hundreds of businesses have trusted Meta with their
                                                website design, development and online marketing strategy.</h4>
                                        </div>
                                    </div>
                                    <section
                                        class="elementor-section elementor-inner-section elementor-element elementor-element-6d4a2153 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                                        data-id="6d4a2153" data-element_type="section">

                                        <div class="elementor-container elementor-column-gap-default">
                                            @foreach ($client as $key => $item)
                                                <div data-id="{{ $item->id }}"
                                                    class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-551eb105"
                                                    data-id="551eb105" data-element_type="column"
                                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                    <div class="elementor-widget-wrap elementor-element-populated">
                                                        <div class="elementor-element elementor-element-176e15ca elementor-widget elementor-widget-image"
                                                            data-id="176e15ca" data-element_type="widget"
                                                            data-widget_type="image.default">
                                                            <div class="elementor-widget-container">
                                                                <figure class="wp-caption">
                                                                    <img decoding="async" width="556" height="369"
                                                                        src="{{ asset('images/' . $item->image) }}"
                                                                        class="elementor-animation-grow attachment-2048x2048 size-2048x2048 wp-image-699"
                                                                        alt=""
                                                                        srcset="{{ asset('images/' . $item->image) }}"
                                                                        sizes="(max-width: 556px) 100vw, 556px" />
                                                                    <figcaption
                                                                        class="widget-image-caption wp-caption-text">
                                                                    </figcaption>
                                                                </figure>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                                @if ($key == 2)
                                                @break
                                            @endif
                                        @endforeach

                                    </div>



                                    <section>


                                        <div class="elementor-container elementor-column-gap-default">
                                            @foreach ($client as $key => $item)
                                                @if ($key <= 2)
                                                    @continue
                                                @elseif ($key == 6)
                                                @break
                                            @endif
                                            <div data-id="{{ $item->id }}"
                                                class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-551eb105"
                                                data-id="551eb105" data-element_type="column"
                                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                                <div class="elementor-widget-wrap elementor-element-populated">
                                                    <div class="elementor-element elementor-element-176e15ca elementor-widget elementor-widget-image"
                                                        data-id="176e15ca" data-element_type="widget"
                                                        data-widget_type="image.default">
                                                        <div class="elementor-widget-container">
                                                            <figure class="wp-caption">
                                                                <img decoding="async" width="556" height="369"
                                                                    src="{{ asset('images/' . $item->image) }}"
                                                                    class="elementor-animation-grow attachment-2048x2048 size-2048x2048 wp-image-699"
                                                                    alt=""
                                                                    srcset="{{ asset('images/' . $item->image) }}"
                                                                    sizes="(max-width: 556px) 100vw, 556px" />
                                                                <figcaption
                                                                    class="widget-image-caption wp-caption-text">
                                                                </figcaption>
                                                            </figure>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </section>


                                <section>
                                    <div class="elementor-container elementor-column-gap-default">
                                        @foreach ($client as $key => $item)
                                            @if ($key <= 6)
                                                @continue
                                            @elseif ($key == 10)
                                            @break
                                        @endif
                                        <div data-id="{{ $item->id }}"
                                            class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-551eb105"
                                            data-id="551eb105" data-element_type="column"
                                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                            <div class="elementor-widget-wrap elementor-element-populated">
                                                <div class="elementor-element elementor-element-176e15ca elementor-widget elementor-widget-image"
                                                    data-id="176e15ca" data-element_type="widget"
                                                    data-widget_type="image.default">
                                                    <div class="elementor-widget-container">
                                                        <figure class="wp-caption">
                                                            <img decoding="async" width="556" height="369"
                                                                src="{{ asset('images/' . $item->image) }}"
                                                                class="elementor-animation-grow attachment-2048x2048 size-2048x2048 wp-image-699"
                                                                alt=""
                                                                srcset="{{ asset('images/' . $item->image) }}"
                                                                sizes="(max-width: 556px) 100vw, 556px" />
                                                            <figcaption
                                                                class="widget-image-caption wp-caption-text">
                                                            </figcaption>
                                                        </figure>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </section>

                            <section>
                                <div class="elementor-container elementor-column-gap-default">
                                    @foreach ($client as $key => $item)
                                        @if ($key <= 10)
                                            @continue
                                        @elseif ($key == 14)
                                        @break
                                    @endif
                                    <div data-id="{{ $item->id }}"
                                        class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-551eb105"
                                        data-id="551eb105" data-element_type="column"
                                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                        <div class="elementor-widget-wrap elementor-element-populated">
                                            <div class="elementor-element elementor-element-176e15ca elementor-widget elementor-widget-image"
                                                data-id="176e15ca" data-element_type="widget"
                                                data-widget_type="image.default">
                                                <div class="elementor-widget-container">
                                                    <figure class="wp-caption">
                                                        <img decoding="async" width="556"
                                                            height="369"
                                                            src="{{ asset('images/' . $item->image) }}"
                                                            class="elementor-animation-grow attachment-2048x2048 size-2048x2048 wp-image-699"
                                                            alt=""
                                                            srcset="{{ asset('images/' . $item->image) }}"
                                                            sizes="(max-width: 556px) 100vw, 556px" />
                                                        <figcaption
                                                            class="widget-image-caption wp-caption-text">
                                                        </figcaption>
                                                    </figure>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </section>

                        <section>

                            <div class="elementor-container elementor-column-gap-default">
                                @foreach ($client as $key => $item)
                                    @if ($key <= 14)
                                        @continue
                                    @elseif ($key == 18)
                                    @break
                                @endif
                                <div data-id="{{ $item->id }}"
                                    class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-551eb105"
                                    data-id="551eb105" data-element_type="column"
                                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                    <div class="elementor-widget-wrap elementor-element-populated">
                                        <div class="elementor-element elementor-element-176e15ca elementor-widget elementor-widget-image"
                                            data-id="176e15ca" data-element_type="widget"
                                            data-widget_type="image.default">
                                            <div class="elementor-widget-container">
                                                <figure class="wp-caption">
                                                    <img decoding="async" width="556"
                                                        height="369"
                                                        src="{{ asset('images/' . $item->image) }}"
                                                        class="elementor-animation-grow attachment-2048x2048 size-2048x2048 wp-image-699"
                                                        alt=""
                                                        srcset="{{ asset('images/' . $item->image) }}"
                                                        sizes="(max-width: 556px) 100vw, 556px" />
                                                    <figcaption
                                                        class="widget-image-caption wp-caption-text">
                                                    </figcaption>
                                                </figure>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            @endforeach

                        </div>
                    </section>

                    <section>

                        <div class="elementor-container elementor-column-gap-default">
                            @foreach ($client as $key => $item)
                                @if ($key <= 18)
                                    @continue
                                @elseif ($key == 22)
                                @break
                            @endif
                            <div data-id="{{ $item->id }}"
                                class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-551eb105"
                                data-id="551eb105" data-element_type="column"
                                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                                <div class="elementor-widget-wrap elementor-element-populated">
                                    <div class="elementor-element elementor-element-176e15ca elementor-widget elementor-widget-image"
                                        data-id="176e15ca" data-element_type="widget"
                                        data-widget_type="image.default">
                                        <div class="elementor-widget-container">
                                            <figure class="wp-caption">
                                                <img decoding="async" width="556"
                                                    height="369"
                                                    src="{{ asset('images/' . $item->image) }}"
                                                    class="elementor-animation-grow attachment-2048x2048 size-2048x2048 wp-image-699"
                                                    alt=""
                                                    srcset="{{ asset('images/' . $item->image) }}"
                                                    sizes="(max-width: 556px) 100vw, 556px" />
                                                <figcaption
                                                    class="widget-image-caption wp-caption-text">
                                                </figcaption>
                                            </figure>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </section>

                <section>

                    <div class="elementor-container elementor-column-gap-default">
                        @foreach ($client as $key => $item)
                            @if ($key <= 22)
                                @continue
                            @elseif ($key == 26)
                            @break
                        @endif
                        <div data-id="{{ $item->id }}"
                            class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-551eb105"
                            data-id="551eb105" data-element_type="column"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-element elementor-element-176e15ca elementor-widget elementor-widget-image"
                                    data-id="176e15ca" data-element_type="widget"
                                    data-widget_type="image.default">
                                    <div class="elementor-widget-container">
                                        <figure class="wp-caption">
                                            <img decoding="async" width="556"
                                                height="369"
                                                src="{{ asset('images/' . $item->image) }}"
                                                class="elementor-animation-grow attachment-2048x2048 size-2048x2048 wp-image-699"
                                                alt=""
                                                srcset="{{ asset('images/' . $item->image) }}"
                                                sizes="(max-width: 556px) 100vw, 556px" />
                                            <figcaption
                                                class="widget-image-caption wp-caption-text">
                                            </figcaption>
                                        </figure>
                                    </div>

                                </div>
                            </div>
                        </div>
                    @endforeach

                </div>
            </section>


            <section>

                <div class="elementor-container elementor-column-gap-default">
                    @foreach ($client as $key => $item)
                        @if ($key <= 27)
                            @continue
                        @elseif ($key == 31)
                        @break
                    @endif
                    <div data-id="{{ $item->id }}"
                        class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-551eb105"
                        data-id="551eb105" data-element_type="column"
                        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                        <div class="elementor-widget-wrap elementor-element-populated">
                            <div class="elementor-element elementor-element-176e15ca elementor-widget elementor-widget-image"
                                data-id="176e15ca" data-element_type="widget"
                                data-widget_type="image.default">
                                <div class="elementor-widget-container">
                                    <figure class="wp-caption">
                                        <img decoding="async" width="556"
                                            height="369"
                                            src="{{ asset('images/' . $item->image) }}"
                                            class="elementor-animation-grow attachment-2048x2048 size-2048x2048 wp-image-699"
                                            alt=""
                                            srcset="{{ asset('images/' . $item->image) }}"
                                            sizes="(max-width: 556px) 100vw, 556px" />
                                        <figcaption
                                            class="widget-image-caption wp-caption-text">
                                        </figcaption>
                                    </figure>
                                </div>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
        </section>

        <section>

            <div class="elementor-container elementor-column-gap-default">
                @foreach ($client as $key => $item)
                    @if ($key <= 31)
                        @continue
                    @elseif ($key == 35)
                    @break
                @endif
                <div data-id="{{ $item->id }}"
                    class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-551eb105"
                    data-id="551eb105" data-element_type="column"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-element elementor-element-176e15ca elementor-widget elementor-widget-image"
                            data-id="176e15ca" data-element_type="widget"
                            data-widget_type="image.default">
                            <div class="elementor-widget-container">
                                <figure class="wp-caption">
                                    <img decoding="async" width="556"
                                        height="369"
                                        src="{{ asset('images/' . $item->image) }}"
                                        class="elementor-animation-grow attachment-2048x2048 size-2048x2048 wp-image-699"
                                        alt=""
                                        srcset="{{ asset('images/' . $item->image) }}"
                                        sizes="(max-width: 556px) 100vw, 556px" />
                                    <figcaption
                                        class="widget-image-caption wp-caption-text">
                                    </figcaption>
                                </figure>
                            </div>

                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </section>


    <section>

        <div class="elementor-container elementor-column-gap-default">
            @foreach ($client as $key => $item)
                @if ($key <= 35)
                    @continue
                @elseif ($key == 39)
                @break
            @endif
            <div data-id="{{ $item->id }}"
                class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-551eb105"
                data-id="551eb105" data-element_type="column"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-element elementor-element-176e15ca elementor-widget elementor-widget-image"
                        data-id="176e15ca" data-element_type="widget"
                        data-widget_type="image.default">
                        <div class="elementor-widget-container">
                            <figure class="wp-caption">
                                <img decoding="async" width="556"
                                    height="369"
                                    src="{{ asset('images/' . $item->image) }}"
                                    class="elementor-animation-grow attachment-2048x2048 size-2048x2048 wp-image-699"
                                    alt=""
                                    srcset="{{ asset('images/' . $item->image) }}"
                                    sizes="(max-width: 556px) 100vw, 556px" />
                                <figcaption
                                    class="widget-image-caption wp-caption-text">
                                </figcaption>
                            </figure>
                        </div>

                    </div>
                </div>
            </div>
        @endforeach

    </div>
</section>


<section>

    <div class="elementor-container elementor-column-gap-default">
        @foreach ($client as $key => $item)
            @if ($key <= 39)
                @continue
            @elseif ($key == 43)
            @break
        @endif
        <div data-id="{{ $item->id }}"
            class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-551eb105"
            data-id="551eb105" data-element_type="column"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-element elementor-element-176e15ca elementor-widget elementor-widget-image"
                    data-id="176e15ca" data-element_type="widget"
                    data-widget_type="image.default">
                    <div class="elementor-widget-container">
                        <figure class="wp-caption">
                            <img decoding="async" width="556"
                                height="369"
                                src="{{ asset('images/' . $item->image) }}"
                                class="elementor-animation-grow attachment-2048x2048 size-2048x2048 wp-image-699"
                                alt=""
                                srcset="{{ asset('images/' . $item->image) }}"
                                sizes="(max-width: 556px) 100vw, 556px" />
                            <figcaption
                                class="widget-image-caption wp-caption-text">
                            </figcaption>
                        </figure>
                    </div>

                </div>
            </div>
        </div>
    @endforeach

</div>
</section>

<section>

<div class="elementor-container elementor-column-gap-default">
    @foreach ($client as $key => $item)
        @if ($key <= 43)
            @continue
        @elseif ($key == 47)
        @break
    @endif
    <div data-id="{{ $item->id }}"
        class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-551eb105"
        data-id="551eb105" data-element_type="column"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
        <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-element elementor-element-176e15ca elementor-widget elementor-widget-image"
                data-id="176e15ca" data-element_type="widget"
                data-widget_type="image.default">
                <div class="elementor-widget-container">
                    <figure class="wp-caption">
                        <img decoding="async" width="556"
                            height="369"
                            src="{{ asset('images/' . $item->image) }}"
                            class="elementor-animation-grow attachment-2048x2048 size-2048x2048 wp-image-699"
                            alt=""
                            srcset="{{ asset('images/' . $item->image) }}"
                            sizes="(max-width: 556px) 100vw, 556px" />
                        <figcaption
                            class="widget-image-caption wp-caption-text">
                        </figcaption>
                    </figure>
                </div>

            </div>
        </div>
    </div>
@endforeach

</div>
</section>
<section>

<div class="elementor-container elementor-column-gap-default">
@foreach ($client as $key => $item)
    @if ($key <= 47)
        @continue
    @elseif ($key == 51)
    @break
@endif
<div data-id="{{ $item->id }}"
    class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-551eb105"
    data-id="551eb105" data-element_type="column"
    data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
    <div class="elementor-widget-wrap elementor-element-populated">
        <div class="elementor-element elementor-element-176e15ca elementor-widget elementor-widget-image"
            data-id="176e15ca" data-element_type="widget"
            data-widget_type="image.default">
            <div class="elementor-widget-container">
                <figure class="wp-caption">
                    <img decoding="async" width="556"
                        height="369"
                        src="{{ asset('images/' . $item->image) }}"
                        class="elementor-animation-grow attachment-2048x2048 size-2048x2048 wp-image-699"
                        alt=""
                        srcset="{{ asset('images/' . $item->image) }}"
                        sizes="(max-width: 556px) 100vw, 556px" />
                    <figcaption
                        class="widget-image-caption wp-caption-text">
                    </figcaption>
                </figure>
            </div>

        </div>
    </div>
</div>
@endforeach

</div>
</section>


<section>

<div class="elementor-container elementor-column-gap-default">
@foreach ($client as $key => $item)
@if ($key <= 51)
    @continue
@elseif ($key == 55)
@break
@endif
<div data-id="{{ $item->id }}"
class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-551eb105"
data-id="551eb105" data-element_type="column"
data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
    <div class="elementor-element elementor-element-176e15ca elementor-widget elementor-widget-image"
        data-id="176e15ca" data-element_type="widget"
        data-widget_type="image.default">
        <div class="elementor-widget-container">
            <figure class="wp-caption">
                <img decoding="async" width="556"
                    height="369"
                    src="{{ asset('images/' . $item->image) }}"
                    class="elementor-animation-grow attachment-2048x2048 size-2048x2048 wp-image-699"
                    alt=""
                    srcset="{{ asset('images/' . $item->image) }}"
                    sizes="(max-width: 556px) 100vw, 556px" />
                <figcaption
                    class="widget-image-caption wp-caption-text">
                </figcaption>
            </figure>
        </div>

    </div>
</div>
</div>
@endforeach

</div>
</section>


<section>

<div class="elementor-container elementor-column-gap-default">
@foreach ($client as $key => $item)
@if ($key <= 51)
@continue
@elseif ($key == 55)
@break
@endif
<div data-id="{{ $item->id }}"
class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-551eb105"
data-id="551eb105" data-element_type="column"
data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-176e15ca elementor-widget elementor-widget-image"
    data-id="176e15ca" data-element_type="widget"
    data-widget_type="image.default">
    <div class="elementor-widget-container">
        <figure class="wp-caption">
            <img decoding="async" width="556"
                height="369"
                src="{{ asset('images/' . $item->image) }}"
                class="elementor-animation-grow attachment-2048x2048 size-2048x2048 wp-image-699"
                alt=""
                srcset="{{ asset('images/' . $item->image) }}"
                sizes="(max-width: 556px) 100vw, 556px" />
            <figcaption
                class="widget-image-caption wp-caption-text">
            </figcaption>
        </figure>
    </div>

</div>
</div>
</div>
@endforeach

</div>
</section>


<section>

<div class="elementor-container elementor-column-gap-default">
@foreach ($client as $key => $item)
@if ($key <= 55)
@continue
@elseif ($key == 59)
@break
@endif
<div data-id="{{ $item->id }}"
class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-551eb105"
data-id="551eb105" data-element_type="column"
data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-176e15ca elementor-widget elementor-widget-image"
data-id="176e15ca" data-element_type="widget"
data-widget_type="image.default">
<div class="elementor-widget-container">
    <figure class="wp-caption">
        <img decoding="async" width="556"
            height="369"
            src="{{ asset('images/' . $item->image) }}"
            class="elementor-animation-grow attachment-2048x2048 size-2048x2048 wp-image-699"
            alt=""
            srcset="{{ asset('images/' . $item->image) }}"
            sizes="(max-width: 556px) 100vw, 556px" />
        <figcaption
            class="widget-image-caption wp-caption-text">
        </figcaption>
    </figure>
</div>

</div>
</div>
</div>
@endforeach

</div>
</section>
<section>

<div class="elementor-container elementor-column-gap-default">
@foreach ($client as $key => $item)
@if ($key <= 59)
@continue
@elseif ($key == 63)
@break
@endif
<div data-id="{{ $item->id }}"
class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-551eb105"
data-id="551eb105" data-element_type="column"
data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-176e15ca elementor-widget elementor-widget-image"
data-id="176e15ca" data-element_type="widget"
data-widget_type="image.default">
<div class="elementor-widget-container">
<figure class="wp-caption">
    <img decoding="async" width="556"
        height="369"
        src="{{ asset('images/' . $item->image) }}"
        class="elementor-animation-grow attachment-2048x2048 size-2048x2048 wp-image-699"
        alt=""
        srcset="{{ asset('images/' . $item->image) }}"
        sizes="(max-width: 556px) 100vw, 556px" />
    <figcaption
        class="widget-image-caption wp-caption-text">
    </figcaption>
</figure>
</div>

</div>
</div>
</div>
@endforeach

</div>

</div>

</div>

</main>

<div data-elementor-type="footer" data-elementor-id="152"
class="elementor elementor-152 elementor-location-footer">
<section
class="elementor-section elementor-top-section elementor-element elementor-element-4c86159 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
data-id="4c86159" data-element_type="section"
data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-background-overlay"></div>
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-9c24995"
data-id="9c24995" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
</div>
</div>
</div>
</section>
</div>
</body>

<!-- Mirrored from srsidea.biz/sample-page/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Oct 2023 08:30:36 GMT -->

</html>
@endsection
