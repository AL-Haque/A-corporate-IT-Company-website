@extends('frontend.web_master')
@section('web-master')

    <body
        class="page-template page-template-elementor_header_footer page page-id-98 elementor-default elementor-template-full-width elementor-kit-6 elementor-page elementor-page-98">
        <div data-elementor-type="wp-page" data-elementor-id="98" class="elementor elementor-98">
            <section
                class="elementor-section elementor-top-section elementor-element elementor-element-023970f elementor-section-boxed elementor-section-height-default elementor-section-height-default"
                data-id="023970f" data-element_type="section"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
                <div class="elementor-container elementor-column-gap-default">
                    @foreach ($project as $key => $item)
                        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-9c37734"
                            data-id="9c37734" data-element_type="column"
                            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;background_motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;animation&quot;:&quot;none&quot;}">
                            <div class="elementor-widget-wrap elementor-element-populated">
                                <div class="elementor-background-overlay"></div>
                                <div class="elementor-element elementor-element-a11a6a5 elementor-view-framed e-transform elementor-shape-circle elementor-invisible elementor-widget elementor-widget-icon"
                                    data-id="a11a6a5" data-element_type="widget"
                                    data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_transform_flipX_effect&quot;:&quot;transform&quot;}"
                                    data-widget_type="icon.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-icon-wrapper">
                                            <div class="elementor-icon">
                                                <i aria-hidden="true" class="{{ $item->icon }}"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-dfa9e60 elementor-widget elementor-widget-heading"
                                    data-id="dfa9e60" data-element_type="widget" data-widget_type="heading.default">
                                    <div class="elementor-widget-container">

                                        <h2 class="elementor-heading-title elementor-size-default"> {{ $item->name }}</h2>
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-4c06c76 elementor-widget elementor-widget-text-editor"
                                    data-id="4c06c76" data-element_type="widget" data-widget_type="text-editor.default">
                                    <div class="elementor-widget-container">

                                        {!! $item->description !!}
                                    </div>
                                </div>
                                <div class="elementor-element elementor-element-d31aa75 elementor-align-center elementor-invisible elementor-widget elementor-widget-button"
                                    data-id="d31aa75" data-element_type="widget"
                                    data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;sticky&quot;:&quot;bottom&quot;,&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0}"
                                    data-widget_type="button.default">
                                    <div class="elementor-widget-container">
                                        <div class="elementor-button-wrapper">
                                            <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-push"
                                                href="{{ route('project.details', $item->id) }}">
                                                <span class="elementor-button-content-wrapper">
                                                    <span class="elementor-button-text">Read More</span>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @if ($key == 2)
                        @break
                    @endif
                @endforeach
            </div>

            <div class="elementor-container elementor-column-gap-default">
                @foreach ($project as $key => $item)
                    @if ($key <= 2)
                        @continue
                    @elseif ($key == 6)
                    @break
                @endif
                <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-9c37734"
                    data-id="9c37734" data-element_type="column"
                    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;background_motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;animation&quot;:&quot;none&quot;}">
                    <div class="elementor-widget-wrap elementor-element-populated">
                        <div class="elementor-background-overlay"></div>
                        <div class="elementor-element elementor-element-a11a6a5 elementor-view-framed e-transform elementor-shape-circle elementor-invisible elementor-widget elementor-widget-icon"
                            data-id="a11a6a5" data-element_type="widget"
                            data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_transform_flipX_effect&quot;:&quot;transform&quot;}"
                            data-widget_type="icon.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-icon-wrapper">
                                    <div class="elementor-icon">
                                        <i aria-hidden="true" class="fas fa-hotel"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-dfa9e60 elementor-widget elementor-widget-heading"
                            data-id="dfa9e60" data-element_type="widget" data-widget_type="heading.default">
                            <div class="elementor-widget-container">

                                <h2 class="elementor-heading-title elementor-size-default">{{ $item->name }}</h2>
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-4c06c76 elementor-widget elementor-widget-text-editor"
                            data-id="4c06c76" data-element_type="widget" data-widget_type="text-editor.default">
                            <div class="elementor-widget-container">

                                {!! $item->description !!}
                            </div>
                        </div>
                        <div class="elementor-element elementor-element-d31aa75 elementor-align-center elementor-invisible elementor-widget elementor-widget-button"
                            data-id="d31aa75" data-element_type="widget"
                            data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;sticky&quot;:&quot;bottom&quot;,&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0}"
                            data-widget_type="button.default">
                            <div class="elementor-widget-container">
                                <div class="elementor-button-wrapper">
                                    <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-push"
                                        href="{{ route('project.details', $item->id) }}">
                                        <span class="elementor-button-content-wrapper">
                                            <span class="elementor-button-text">Read More</span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <div class="elementor-container elementor-column-gap-default">
            @foreach ($project as $key => $item)
                @if ($key <= 6)
                    @continue
                @elseif ($key == 10)
                @break
            @endif
            <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-9c37734"
                data-id="9c37734" data-element_type="column"
                data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;background_motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;animation&quot;:&quot;none&quot;}">
                <div class="elementor-widget-wrap elementor-element-populated">
                    <div class="elementor-background-overlay"></div>
                    <div class="elementor-element elementor-element-a11a6a5 elementor-view-framed e-transform elementor-shape-circle elementor-invisible elementor-widget elementor-widget-icon"
                        data-id="a11a6a5" data-element_type="widget"
                        data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_transform_flipX_effect&quot;:&quot;transform&quot;}"
                        data-widget_type="icon.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-icon-wrapper">
                                <div class="elementor-icon">
                                    <i aria-hidden="true" class="fas fa-hotel"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-dfa9e60 elementor-widget elementor-widget-heading"
                        data-id="dfa9e60" data-element_type="widget" data-widget_type="heading.default">
                        <div class="elementor-widget-container">

                            <h2 class="elementor-heading-title elementor-size-default">{{ $item->name }}</h2>
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-4c06c76 elementor-widget elementor-widget-text-editor"
                        data-id="4c06c76" data-element_type="widget" data-widget_type="text-editor.default">
                        <div class="elementor-widget-container">

                            {!! $item->description !!}
                        </div>
                    </div>
                    <div class="elementor-element elementor-element-d31aa75 elementor-align-center elementor-invisible elementor-widget elementor-widget-button"
                        data-id="d31aa75" data-element_type="widget"
                        data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;sticky&quot;:&quot;bottom&quot;,&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0}"
                        data-widget_type="button.default">
                        <div class="elementor-widget-container">
                            <div class="elementor-button-wrapper">
                                <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-push"
                                    href="{{ route('project.details', $item->id) }}">
                                    <span class="elementor-button-content-wrapper">
                                        <span class="elementor-button-text">Read More</span>
                                    </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach

    </div>


    <div class="elementor-container elementor-column-gap-default">
        @foreach ($project as $key => $item)
            @if ($key <= 10)
                @continue
            @elseif ($key == 14)
            @break
        @endif
        <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-9c37734"
            data-id="9c37734" data-element_type="column"
            data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;background_motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;animation&quot;:&quot;none&quot;}">
            <div class="elementor-widget-wrap elementor-element-populated">
                <div class="elementor-background-overlay"></div>
                <div class="elementor-element elementor-element-a11a6a5 elementor-view-framed e-transform elementor-shape-circle elementor-invisible elementor-widget elementor-widget-icon"
                    data-id="a11a6a5" data-element_type="widget"
                    data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_transform_flipX_effect&quot;:&quot;transform&quot;}"
                    data-widget_type="icon.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-icon-wrapper">
                            <div class="elementor-icon">
                                <i aria-hidden="true" class="fas fa-hotel"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="elementor-element elementor-element-dfa9e60 elementor-widget elementor-widget-heading"
                    data-id="dfa9e60" data-element_type="widget" data-widget_type="heading.default">
                    <div class="elementor-widget-container">

                        <h2 class="elementor-heading-title elementor-size-default">{{ $item->name }}</h2>
                    </div>
                </div>
                <div class="elementor-element elementor-element-4c06c76 elementor-widget elementor-widget-text-editor"
                    data-id="4c06c76" data-element_type="widget" data-widget_type="text-editor.default">
                    <div class="elementor-widget-container">

                        {!! $item->description !!}
                    </div>
                </div>
                <div class="elementor-element elementor-element-d31aa75 elementor-align-center elementor-invisible elementor-widget elementor-widget-button"
                    data-id="d31aa75" data-element_type="widget"
                    data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;sticky&quot;:&quot;bottom&quot;,&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0}"
                    data-widget_type="button.default">
                    <div class="elementor-widget-container">
                        <div class="elementor-button-wrapper">
                            <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-push"
                                href="{{ route('project.details', $item->id) }}">
                                <span class="elementor-button-content-wrapper">
                                    <span class="elementor-button-text">Read More</span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>


<div class="elementor-container elementor-column-gap-default">
    @foreach ($project as $key => $item)
        @if ($key <= 14)
            @continue
        @elseif ($key == 18)
        @break
    @endif
    <div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-9c37734"
        data-id="9c37734" data-element_type="column"
        data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;background_motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;animation&quot;:&quot;none&quot;}">
        <div class="elementor-widget-wrap elementor-element-populated">
            <div class="elementor-background-overlay"></div>
            <div class="elementor-element elementor-element-a11a6a5 elementor-view-framed e-transform elementor-shape-circle elementor-invisible elementor-widget elementor-widget-icon"
                data-id="a11a6a5" data-element_type="widget"
                data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_transform_flipX_effect&quot;:&quot;transform&quot;}"
                data-widget_type="icon.default">
                <div class="elementor-widget-container">
                    <div class="elementor-icon-wrapper">
                        <div class="elementor-icon">
                            <i aria-hidden="true" class="fas fa-hotel"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="elementor-element elementor-element-dfa9e60 elementor-widget elementor-widget-heading"
                data-id="dfa9e60" data-element_type="widget" data-widget_type="heading.default">
                <div class="elementor-widget-container">

                    <h2 class="elementor-heading-title elementor-size-default">{{ $item->name }}</h2>
                </div>
            </div>
            <div class="elementor-element elementor-element-4c06c76 elementor-widget elementor-widget-text-editor"
                data-id="4c06c76" data-element_type="widget" data-widget_type="text-editor.default">
                <div class="elementor-widget-container">

                    {!! $item->description !!}
                </div>
            </div>
            <div class="elementor-element elementor-element-d31aa75 elementor-align-center elementor-invisible elementor-widget elementor-widget-button"
                data-id="d31aa75" data-element_type="widget"
                data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;sticky&quot;:&quot;bottom&quot;,&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0}"
                data-widget_type="button.default">
                <div class="elementor-widget-container">
                    <div class="elementor-button-wrapper">
                        <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-push"
                            href="{{ route('project.details', $item->id) }}">
                            <span class="elementor-button-content-wrapper">
                                <span class="elementor-button-text">Read More</span>
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endforeach
</div>

<div class="elementor-container elementor-column-gap-default">
@foreach ($project as $key => $item)
    @if ($key <= 18)
        @continue
    @elseif ($key == 22)
    @break
@endif
<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-9c37734"
    data-id="9c37734" data-element_type="column"
    data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;background_motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;animation&quot;:&quot;none&quot;}">
    <div class="elementor-widget-wrap elementor-element-populated">
        <div class="elementor-background-overlay"></div>
        <div class="elementor-element elementor-element-a11a6a5 elementor-view-framed e-transform elementor-shape-circle elementor-invisible elementor-widget elementor-widget-icon"
            data-id="a11a6a5" data-element_type="widget"
            data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_transform_flipX_effect&quot;:&quot;transform&quot;}"
            data-widget_type="icon.default">
            <div class="elementor-widget-container">
                <div class="elementor-icon-wrapper">
                    <div class="elementor-icon">
                        <i aria-hidden="true" class="fas fa-hotel"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="elementor-element elementor-element-dfa9e60 elementor-widget elementor-widget-heading"
            data-id="dfa9e60" data-element_type="widget" data-widget_type="heading.default">
            <div class="elementor-widget-container">

                <h2 class="elementor-heading-title elementor-size-default">{{ $item->name }}
                </h2>
            </div>
        </div>
        <div class="elementor-element elementor-element-4c06c76 elementor-widget elementor-widget-text-editor"
            data-id="4c06c76" data-element_type="widget" data-widget_type="text-editor.default">
            <div class="elementor-widget-container">

                {!! $item->description !!}
            </div>
        </div>
        <div class="elementor-element elementor-element-d31aa75 elementor-align-center elementor-invisible elementor-widget elementor-widget-button"
            data-id="d31aa75" data-element_type="widget"
            data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;sticky&quot;:&quot;bottom&quot;,&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0}"
            data-widget_type="button.default">
            <div class="elementor-widget-container">
                <div class="elementor-button-wrapper">
                    <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-push"
                        href="{{ route('project.details', $item->id) }}">
                        <span class="elementor-button-content-wrapper">
                            <span class="elementor-button-text">Read More</span>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach
</div>

<div class="elementor-container elementor-column-gap-default">
@foreach ($project as $key => $item)
@if ($key <= 22)
    @continue
@elseif ($key == 26)
@break
@endif
<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-9c37734"
data-id="9c37734" data-element_type="column"
data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;background_motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;animation&quot;:&quot;none&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
    <div class="elementor-background-overlay"></div>
    <div class="elementor-element elementor-element-a11a6a5 elementor-view-framed e-transform elementor-shape-circle elementor-invisible elementor-widget elementor-widget-icon"
        data-id="a11a6a5" data-element_type="widget"
        data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_transform_flipX_effect&quot;:&quot;transform&quot;}"
        data-widget_type="icon.default">
        <div class="elementor-widget-container">
            <div class="elementor-icon-wrapper">
                <div class="elementor-icon">
                    <i aria-hidden="true" class="fas fa-hotel"></i>
                </div>
            </div>
        </div>
    </div>
    <div class="elementor-element elementor-element-dfa9e60 elementor-widget elementor-widget-heading"
        data-id="dfa9e60" data-element_type="widget" data-widget_type="heading.default">
        <div class="elementor-widget-container">

            <h2 class="elementor-heading-title elementor-size-default">{{ $item->name }}
            </h2>
        </div>
    </div>
    <div class="elementor-element elementor-element-4c06c76 elementor-widget elementor-widget-text-editor"
        data-id="4c06c76" data-element_type="widget" data-widget_type="text-editor.default">
        <div class="elementor-widget-container">

            {!! $item->description !!}
        </div>
    </div>
    <div class="elementor-element elementor-element-d31aa75 elementor-align-center elementor-invisible elementor-widget elementor-widget-button"
        data-id="d31aa75" data-element_type="widget"
        data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;sticky&quot;:&quot;bottom&quot;,&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0}"
        data-widget_type="button.default">
        <div class="elementor-widget-container">
            <div class="elementor-button-wrapper">
                <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-push"
                    href="{{ route('project.details', $item->id) }}">
                    <span class="elementor-button-content-wrapper">
                        <span class="elementor-button-text">Read More</span>
                    </span>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
@endforeach
</div>


<div class="elementor-container elementor-column-gap-default">
@foreach ($project as $key => $item)
@if ($key <= 26)
@continue
@elseif ($key == 30)
@break
@endif
<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-9c37734"
data-id="9c37734" data-element_type="column"
data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;background_motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;animation&quot;:&quot;none&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-background-overlay"></div>
<div class="elementor-element elementor-element-a11a6a5 elementor-view-framed e-transform elementor-shape-circle elementor-invisible elementor-widget elementor-widget-icon"
    data-id="a11a6a5" data-element_type="widget"
    data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_transform_flipX_effect&quot;:&quot;transform&quot;}"
    data-widget_type="icon.default">
    <div class="elementor-widget-container">
        <div class="elementor-icon-wrapper">
            <div class="elementor-icon">
                <i aria-hidden="true" class="fas fa-hotel"></i>
            </div>
        </div>
    </div>
</div>
<div class="elementor-element elementor-element-dfa9e60 elementor-widget elementor-widget-heading"
    data-id="dfa9e60" data-element_type="widget" data-widget_type="heading.default">
    <div class="elementor-widget-container">

        <h2 class="elementor-heading-title elementor-size-default">{{ $item->name }}
        </h2>
    </div>
</div>
<div class="elementor-element elementor-element-4c06c76 elementor-widget elementor-widget-text-editor"
    data-id="4c06c76" data-element_type="widget" data-widget_type="text-editor.default">
    <div class="elementor-widget-container">

        {!! $item->description !!}
    </div>
</div>
<div class="elementor-element elementor-element-d31aa75 elementor-align-center elementor-invisible elementor-widget elementor-widget-button"
    data-id="d31aa75" data-element_type="widget"
    data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;sticky&quot;:&quot;bottom&quot;,&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0}"
    data-widget_type="button.default">
    <div class="elementor-widget-container">
        <div class="elementor-button-wrapper">
            <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-push"
                href="{{ route('project.details', $item->id) }}">
                <span class="elementor-button-content-wrapper">
                    <span class="elementor-button-text">Read More</span>
                </span>
            </a>
        </div>
    </div>
</div>
</div>
</div>
@endforeach
</div>


<div class="elementor-container elementor-column-gap-default">
@foreach ($project as $key => $item)
@if ($key <= 30)
@continue
@elseif ($key == 34)
@break
@endif
<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-9c37734"
data-id="9c37734" data-element_type="column"
data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;background_motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;animation&quot;:&quot;none&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-background-overlay"></div>
<div class="elementor-element elementor-element-a11a6a5 elementor-view-framed e-transform elementor-shape-circle elementor-invisible elementor-widget elementor-widget-icon"
data-id="a11a6a5" data-element_type="widget"
data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_transform_flipX_effect&quot;:&quot;transform&quot;}"
data-widget_type="icon.default">
<div class="elementor-widget-container">
    <div class="elementor-icon-wrapper">
        <div class="elementor-icon">
            <i aria-hidden="true" class="fas fa-hotel"></i>
        </div>
    </div>
</div>
</div>
<div class="elementor-element elementor-element-dfa9e60 elementor-widget elementor-widget-heading"
data-id="dfa9e60" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">

    <h2 class="elementor-heading-title elementor-size-default">{{ $item->name }}
    </h2>
</div>
</div>
<div class="elementor-element elementor-element-4c06c76 elementor-widget elementor-widget-text-editor"
data-id="4c06c76" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">

    {!! $item->description !!}
</div>
</div>
<div class="elementor-element elementor-element-d31aa75 elementor-align-center elementor-invisible elementor-widget elementor-widget-button"
data-id="d31aa75" data-element_type="widget"
data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;sticky&quot;:&quot;bottom&quot;,&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0}"
data-widget_type="button.default">
<div class="elementor-widget-container">
    <div class="elementor-button-wrapper">
        <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-push"
            href="{{ route('project.details', $item->id) }}">
            <span class="elementor-button-content-wrapper">
                <span class="elementor-button-text">Read More</span>
            </span>
        </a>
    </div>
</div>
</div>
</div>
</div>
@endforeach
</div>


<div class="elementor-container elementor-column-gap-default">
@foreach ($project as $key => $item)
@if ($key <= 34)
@continue
@elseif ($key == 38)
@break
@endif
<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-9c37734"
data-id="9c37734" data-element_type="column"
data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;background_motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;animation&quot;:&quot;none&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-background-overlay"></div>
<div class="elementor-element elementor-element-a11a6a5 elementor-view-framed e-transform elementor-shape-circle elementor-invisible elementor-widget elementor-widget-icon"
data-id="a11a6a5" data-element_type="widget"
data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_transform_flipX_effect&quot;:&quot;transform&quot;}"
data-widget_type="icon.default">
<div class="elementor-widget-container">
<div class="elementor-icon-wrapper">
    <div class="elementor-icon">
        <i aria-hidden="true" class="fas fa-hotel"></i>
    </div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-dfa9e60 elementor-widget elementor-widget-heading"
data-id="dfa9e60" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">

<h2 class="elementor-heading-title elementor-size-default">{{ $item->name }}
</h2>
</div>
</div>
<div class="elementor-element elementor-element-4c06c76 elementor-widget elementor-widget-text-editor"
data-id="4c06c76" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">

{!! $item->description !!}
</div>
</div>
<div class="elementor-element elementor-element-d31aa75 elementor-align-center elementor-invisible elementor-widget elementor-widget-button"
data-id="d31aa75" data-element_type="widget"
data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;sticky&quot;:&quot;bottom&quot;,&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0}"
data-widget_type="button.default">
<div class="elementor-widget-container">
<div class="elementor-button-wrapper">
    <a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-push"
        href="{{ route('project.details', $item->id) }}">
        <span class="elementor-button-content-wrapper">
            <span class="elementor-button-text">Read More</span>
        </span>
    </a>
</div>
</div>
</div>
</div>
</div>
@endforeach
</div>



<div class="elementor-container elementor-column-gap-default">
@foreach ($project as $key => $item)
@if ($key <= 38)
@continue
@elseif ($key == 42)
@break
@endif
<div class="elementor-column elementor-col-33 elementor-top-column elementor-element elementor-element-9c37734"
data-id="9c37734" data-element_type="column"
data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;background_motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;animation&quot;:&quot;none&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-background-overlay"></div>
<div class="elementor-element elementor-element-a11a6a5 elementor-view-framed e-transform elementor-shape-circle elementor-invisible elementor-widget elementor-widget-icon"
data-id="a11a6a5" data-element_type="widget"
data-settings="{&quot;_animation&quot;:&quot;zoomIn&quot;,&quot;_transform_flipX_effect&quot;:&quot;transform&quot;}"
data-widget_type="icon.default">
<div class="elementor-widget-container">
<div class="elementor-icon-wrapper">
<div class="elementor-icon">
    <i aria-hidden="true" class="fas fa-hotel"></i>
</div>
</div>
</div>
</div>
<div class="elementor-element elementor-element-dfa9e60 elementor-widget elementor-widget-heading"
data-id="dfa9e60" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">

<h2 class="elementor-heading-title elementor-size-default">{{ $item->name }}
</h2>
</div>
</div>
<div class="elementor-element elementor-element-4c06c76 elementor-widget elementor-widget-text-editor"
data-id="4c06c76" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">

{!! $item->description !!}
</div>
</div>
<div class="elementor-element elementor-element-d31aa75 elementor-align-center elementor-invisible elementor-widget elementor-widget-button"
data-id="d31aa75" data-element_type="widget"
data-settings="{&quot;motion_fx_motion_fx_scrolling&quot;:&quot;yes&quot;,&quot;motion_fx_motion_fx_mouse&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_effect&quot;:&quot;yes&quot;,&quot;motion_fx_mouseTrack_speed&quot;:{&quot;unit&quot;:&quot;px&quot;,&quot;size&quot;:0,&quot;sizes&quot;:[]},&quot;sticky&quot;:&quot;bottom&quot;,&quot;_animation&quot;:&quot;fadeInDown&quot;,&quot;motion_fx_devices&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_on&quot;:[&quot;desktop&quot;,&quot;tablet&quot;,&quot;mobile&quot;],&quot;sticky_offset&quot;:0,&quot;sticky_effects_offset&quot;:0}"
data-widget_type="button.default">
<div class="elementor-widget-container">
<div class="elementor-button-wrapper">
<a class="elementor-button elementor-button-link elementor-size-sm elementor-animation-push"
    href="{{ route('project.details', $item->id) }}">
    <span class="elementor-button-content-wrapper">
        <span class="elementor-button-text">Read More</span>
    </span>
</a>
</div>
</div>
</div>
</div>
</div>
@endforeach
</div>
</div>
</section>
<section
class="elementor-section elementor-top-section elementor-element elementor-element-eb8f055 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
data-id="eb8f055" data-element_type="section">
<h2 class="elementor-heading-title elementor-size-default" style="text-align: center;padding-top:60px;color:#273C90;border-bottom:2px solid #273C90"> Other Project</h2>
@foreach ($projects as $item)
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-34dbab5"
data-id="34dbab5" data-element_type="column">

<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-2cb4e4a elementor-widget elementor-widget-heading"
data-id="2cb4e4a" data-element_type="widget" data-widget_type="heading.default">
<div class="elementor-widget-container">

</div>
</div>
<div class="div">
<div class="elementor-element elementor-element-a78c073 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
data-id="a78c073" data-element_type="widget"
data-settings="{&quot;_animation&quot;:&quot;bounceInLeft&quot;,&quot;_animation_delay&quot;:700}"
data-widget_type="heading.default">

<div class="elementor-widget-container">
<h4 class="elementor-heading-title elementor-size-large" style="color:#273C90;padding-top:20px">{{ $item->name }}</h4>
</div>
</div>
<div class="elementor-element elementor-element-fde95dc elementor-widget elementor-widget-text-editor"
data-id="fde95dc" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container">
{{-- <p>Dynamic website full package features</p> --}}
<ul>
<li style="text-align:left">{!! $item->details !!}</li>
</ul>
</div>
</div>
{{-- <div class="elementor-element elementor-element-63c226e animated-slow elementor-invisible elementor-widget elementor-widget-heading"
							data-id="63c226e" data-element_type="widget"
							data-settings="{&quot;_animation&quot;:&quot;bounceInLeft&quot;,&quot;_animation_delay&quot;:700}"
							data-widget_type="heading.default">
							<div class="elementor-widget-container">
								<h4 class="elementor-heading-title elementor-size-large">Logo and Branding Design in
									Multiple Formats with Copyright</h4>
							</div>
						</div>
						<div class="elementor-element elementor-element-a88687a elementor-widget elementor-widget-text-editor"
							data-id="a88687a" data-element_type="widget" data-widget_type="text-editor.default">
							<div class="elementor-widget-container">
								<p>A logo identifies business &amp; speaks about business. Logo is the trademark of the
									company.</p>
								<p>2 logo concepts, up to 3 revisions by 2 logo designers, copyright ownership, multiple
									file formats.</p>
								<p> </p>
							</div>
						</div>
						<div class="elementor-element elementor-element-b00b396 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
							data-id="b00b396" data-element_type="widget"
							data-settings="{&quot;_animation&quot;:&quot;bounceInLeft&quot;,&quot;_animation_delay&quot;:700}"
							data-widget_type="heading.default">
							<div class="elementor-widget-container">
								<h4 class="elementor-heading-title elementor-size-large">Brand Bulk 1000 SMS Package
									with Your Brand Name</h4>
							</div>
						</div>
						<div class="elementor-element elementor-element-8c3dfcd elementor-widget elementor-widget-text-editor"
							data-id="8c3dfcd" data-element_type="widget" data-widget_type="text-editor.default">
							<div class="elementor-widget-container">
								<p>Reach your targeted client base with secure, reliable and robust bulk SMS. Using the
									traditional mobile phone to send large amounts of text messages can be a daunting
									task. Send sms to thousands of mobile phones at once takes only a few clicks.
									Features of brand bulk SMS.</p>
								<p> </p>
								<ul>
									<li>Send SMS from your brand name</li>
									<li>Effective and easy-to-use</li>
									<li>Cost efficient and worldwide access</li>
									<li>Free HTTP API</li>
									<li>Online address book and group management</li>
									<li>No monthly fees, no hidden costs</li>
								</ul>
								<p> </p>
								<p>We believe that &#8216;You are what you do&#8217; and we aim for perfection.</p>
								<p>Please feel free to get in touch with us. We will be delighted to hear from you.</p>
							</div>
						</div> --}}
</div>
@endforeach
</div>
</div>

</section>

<section
class="elementor-section elementor-top-section elementor-element elementor-element-0d02e15 elementor-section-boxed elementor-section-height-default elementor-section-height-default"
data-id="0d02e15" data-element_type="section">
<div class="elementor-container elementor-column-gap-default">
<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-cc792ac"
data-id="cc792ac" data-element_type="column">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-4f784f1 animated-slow elementor-invisible elementor-widget elementor-widget-heading"
data-id="4f784f1" data-element_type="widget"
data-settings="{&quot;_animation&quot;:&quot;fadeInUp&quot;}"
data-widget_type="heading.default">
<div class="elementor-widget-container">
<p class="elementor-heading-title elementor-size-default"
style="text-align:center; color:#273C90; border-bottom:2px solid #273C90">Our Pojects</p>
</div>
</div>
<div class="elementor-element elementor-element-f77df2e elementor-widget elementor-widget-text-editor"
data-id="f77df2e" data-element_type="widget" data-widget_type="text-editor.default">
<div class="elementor-widget-container" style="text-align: center">
{{-- Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
								incididunt ut labore et dolore magna aliqua </div> --}}
</div>
<section
class="elementor-section elementor-inner-section elementor-element elementor-element-5c3c5fc animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
data-id="5c3c5fc" data-element_type="section"
data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">

<div class="elementor-container elementor-column-gap-default">
@foreach ($project as $key => $item)
<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-a600be1"
data-id="a600be1" data-element_type="column"
data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
    <div class="elementor-element elementor-element-89d20ae elementor-widget elementor-widget-image"
        data-id="89d20ae" data-element_type="widget"
        data-widget_type="image.default">
        <div class="elementor-widget-container" style="border: 2px solid #273C90;padding:10px;border-radius:5px">
            <img decoding="async"
                src="{{ asset('images/' . $item->image) }}" />
        </div>
    </div>
</div>
</div>
@if ($key == 2)
@break
@endif
@endforeach
</div>
</section>
<section
class="elementor-section elementor-inner-section elementor-element elementor-element-5c3c5fc animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
data-id="5c3c5fc" data-element_type="section"
data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">

<div class="elementor-container elementor-column-gap-default">
@foreach ($project as $key => $item)
@if ($key <= 2)
@continue
@endif
<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-a600be1"
data-id="a600be1" data-element_type="column"
data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-89d20ae elementor-widget elementor-widget-image"
    data-id="89d20ae" data-element_type="widget"
    data-widget_type="image.default">
    <div class="elementor-widget-container" style="border: 2px solid #273C90;padding:10px;border-radius:5px">
        <img decoding="async"
            src="{{ asset('images/' . $item->image) }}" />
    </div>
</div>
</div>
</div>
@if ($key == 5)
@break
@endif
@endforeach
</div>
<section
class="elementor-section elementor-inner-section elementor-element elementor-element-5c3c5fc animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
data-id="5c3c5fc" data-element_type="section"
data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">

<div class="elementor-container elementor-column-gap-default">
@foreach ($project as $key => $item)
@if ($key <= 5)
@continue
@endif
<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-a600be1"
data-id="a600be1" data-element_type="column"
data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-89d20ae elementor-widget elementor-widget-image"
    data-id="89d20ae" data-element_type="widget"
    data-widget_type="image.default">
    <div class="elementor-widget-container" style="border: 2px solid #273C90;padding:10px;border-radius:5px">
        <img decoding="async"
            src="{{ asset('images/' . $item->image) }}" />
    </div>
</div>
</div>
</div>
@if ($key == 8)
@break
@endif
@endforeach
</div>
</section>


<section
class="elementor-section elementor-inner-section elementor-element elementor-element-5c3c5fc animated-slow elementor-section-boxed elementor-section-height-default elementor-section-height-default elementor-invisible"
data-id="5c3c5fc" data-element_type="section"
data-settings="{&quot;animation&quot;:&quot;fadeInUp&quot;}">
<div class="elementor-container elementor-column-gap-default">
@foreach ($project as $key => $item)
@if ($key <= 8)
@continue
@endif
<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-a600be1"
data-id="a600be1" data-element_type="column"
data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
<div class="elementor-widget-wrap elementor-element-populated">
<div class="elementor-element elementor-element-89d20ae elementor-widget elementor-widget-image"
data-id="89d20ae" data-element_type="widget"
data-widget_type="image.default">
<div class="elementor-widget-container" style="border: 2px solid #273C90;padding:10px;border-radius:5px">
    <img decoding="async"
        src="{{ asset('images/' . $item->image) }}" />
</div>
</div>
</div>
</div>
@if ($key == 11)
@break
@endif
@endforeach
</div>
</section>
</section>
</div>
</div>
</div>
</section>




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
</div>
</div>
</body>

<!-- Mirrored from srsidea.biz/projects/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 Oct 2023 08:31:15 GMT -->
@endsection
