@extends('base')

@section('title')
{{ __('Surveys') }}
@stop

@section('content')
<div class="container">
    <div class="row justify-content-center mt-3">
        <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    {{ __('Phase') }} 1
                </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                    <div class="accordion-body">
                    @include('components.survey',['phase'=>1,'in_survey'=>$s1,
                        'td_in_survey'=>$td_s1,
                        'check1'=>$s1_1,
                        'td_check1'=>$td_s1_1,
                        'check2'=>$s1_2,
                        'td_check2'=>$td_s1_2])
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    {{ __('Phase') }} 2
                </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingTwo">
                    <div class="accordion-body">
                    @include('components.survey',['phase'=>2,'in_survey'=>$s2,
                        'td_in_survey'=>$td_s2,
                        'check1'=>$s2_1,
                        'td_check1'=>$td_s2_1,
                        'check2'=>$s2_2,
                        'td_check2'=>$td_s2_2])
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    {{ __('Phase') }} 3
                </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingThree">
                    <div class="accordion-body">
                    @include('components.survey',['phase'=>3,'in_survey'=>$s3,
                        'td_in_survey'=>$td_s3,
                        'check1'=>$s3_1,
                        'td_check1'=>$td_s3_1,
                        'check2'=>$s3_2,
                        'td_check2'=>$td_s3_2])
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop
