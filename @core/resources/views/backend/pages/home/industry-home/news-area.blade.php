@extends('backend.admin-master')
@section('site-title')
    {{__('News Area')}}
@endsection
@section('content')
    <div class="col-lg-12 col-ml-12 padding-bottom-30">
        <div class="row">
            <div class="col-lg-12">
                <div class="margin-top-40"></div>
                @include('backend/partials/message')
                @include('backend/partials/error')
            </div>
            <div class="col-lg-12 mt-t">
                <div class="card">
                    <div class="card-body">
                        <h4 class="header-title">{{__('News Area Settings')}}</h4>

                        <form action="{{route('admin.home07.news.area')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <nav>
                                <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                    @foreach($all_languages as $key => $lang)
                                        <a class="nav-item nav-link @if($key == 0) active @endif" id="nav-home-tab" data-toggle="tab" href="#nav-home-{{$lang->slug}}" role="tab" aria-controls="nav-home" aria-selected="true">{{$lang->name}}</a>
                                    @endforeach
                                </div>
                            </nav>
                            <div class="tab-content margin-top-30" id="nav-tabContent">
                                @foreach($all_languages as $key => $lang)
                                    <div class="tab-pane fade @if($key == 0) show active @endif" id="nav-home-{{$lang->slug}}" role="tabpanel" aria-labelledby="nav-home-tab">
                                        <div class="form-group">
                                            <label for="industry_news_area_section_{{$lang}}_subtitle">{{__('Subtitle')}}</label>
                                            <input type="text" name="industry_news_area_section_{{$lang->slug}}_subtitle" value="{{get_static_option('industry_news_area_section_'.$lang->slug.'_subtitle')}}" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label for="industry_news_area_section_{{$lang}}_title">{{__('Title')}}</label>
                                            <input type="text" name="industry_news_area_section_{{$lang->slug}}_title" value="{{get_static_option('industry_news_area_section_'.$lang->slug.'_title')}}" class="form-control" >
                                        </div>
                                        <div class="form-group">
                                            <label for="industry_news_area_section_{{$lang}}_btn_text">{{__('Button Text')}}</label>
                                            <input type="text" name="industry_news_area_section_{{$lang->slug}}_btn_text" value="{{get_static_option('industry_news_area_section_'.$lang->slug.'_btn_text')}}" class="form-control" >
                                        </div>
                                    </div>
                                @endforeach
                            </div>

                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">{{__('Update Settings')}}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
