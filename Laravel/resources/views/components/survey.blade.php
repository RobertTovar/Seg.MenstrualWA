<div class="list-group mx-auto w-auto">
    <div class="row justify-content-center mb-3">
        <div class="w-100">
            <h1 class="text-center">{{ __('Phase') }} {{$phase}}</h1>
        
            <div class="progress">
                <div class="progress-bar progress-bar-striped bg-success" role="progressbar" style="width: calc({{$phase}}*33%)" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <label class="list-group-item d-flex gap-2">
        @if ($in_survey)
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled>
        @else
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled>
        @endif
        <span class="w-50">
            {{ __('Survey')}}
            <small class="d-block text-muted">{{ __('Initial Survey')}}</small>
        </span>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end w-50">
            @if ($in_survey)
                <a type="button" href="{{ route('surveyReturn',['phase'=>$phase,'survey'=>0]) }}" 
                    class="btn btn-secondary me-md-2">{{ __('Go to Survey')}}
                </a>
            @else
                @switch($phase)
                    @case(1)
                        <a type="button" href="{{ route('surveyFirst',['phase'=>$phase,'survey'=>0]) }}" 
                            class="btn btn-success me-md-2">{{ __('Go to Survey')}}
                        </a>

                        @break

                    @case(2)
                        @if ($s1_2)
                            @if ($nowPlusMonth<=$td_s1_2)
                                <a type="button" href="{{ route('surveyFirst',['phase'=>$phase,'survey'=>0]) }}" 
                                    class="btn btn-success me-md-2">{{ __('Go to Survey')}}
                                </a>
                            @else
                                <a type="button" href="{{ route('surveyFirst',['phase'=>$phase,'survey'=>0]) }}" 
                                    class="btn btn-secondary me-md-2 disabled">{{ __('Please wait at least one month')}} 
                                    {{$td_s1_2}}
                                </a>
                            @endif
                        @else
                            <a type="button" href="{{ route('surveyFirst',['phase'=>$phase,'survey'=>0]) }}" 
                                class="btn btn-secondary me-md-2 disabled">{{ __('Please do the previous survey first')}}
                            </a>
                        @endif

                        @break

                    @case(3)
                        @if ($s2_2)
                            @if ($nowPlusMonth<=$td_s2_2)
                                <a type="button" href="{{ route('surveyFirst',['phase'=>$phase,'survey'=>0]) }}" 
                                    class="btn btn-success me-md-2">{{ __('Go to Survey')}}
                                </a>
                            @else
                                <a type="button" href="{{ route('surveyFirst',['phase'=>$phase,'survey'=>0]) }}" 
                                    class="btn btn-secondary me-md-2 disabled">{{ __('Please wait at least one month')}} 
                                    {{$td_s2_2}}
                                </a>
                            @endif
                        @else
                            <a type="button" href="{{ route('surveyFirst',['phase'=>$phase,'survey'=>0]) }}" 
                                class="btn btn-secondary me-md-2 disabled">{{ __('Please do the previous survey first')}}
                            </a>
                        @endif

                        @break
                @endswitch
        
            @endif
        </div>
    </label>
    <br>
    <label class="list-group-item d-flex gap-2">
        @if ($check1)
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled>
        @else
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled>
        @endif
        <span class="w-50">
            {{ __('1st Check')}}
            <small class="d-block text-muted">{{ __("Phase's first check")}}</small>
        </span>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end w-50">
            @if ($check1)
                <a type="button" href="{{ route('surveyReturn',['phase'=>$phase,'survey'=>1]) }}" 
                    class="btn btn-secondary me-md-2">{{ __('Go to Survey')}}
                </a>
            @else
                @if ($in_survey)
                    @if ($nowPlusMonth<=$td_in_survey)
                        <a type="button" href="{{ route('surveyFirst',['phase'=>$phase,'survey'=>1]) }}" 
                            class="btn btn-success me-md-2">{{ __('Go to Survey')}}
                        </a>
                    @else
                        <a type="button" href="{{ route('surveyFirst',['phase'=>$phase,'survey'=>1]) }}" 
                            class="btn btn-secondary me-md-2 disabled">{{ __('Please wait at least one month')}} 
                            {{$td_in_survey}}
                        </a>
                    @endif
                @else
                    <a type="button" href="{{ route('surveyFirst',['phase'=>$phase,'survey'=>1]) }}" 
                        class="btn btn-secondary me-md-2 disabled">{{ __('Please do the previous survey first')}}
                    </a>
                @endif
            @endif
        </div>
    </label>
    <br>
    <label class="list-group-item d-flex gap-2">
        @if ($check2)
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" checked disabled>
        @else
            <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked" disabled>
        @endif
        <span class="w-50">
            {{ __('2nd Check')}}
            <small class="d-block text-muted">{{ __("Phase's second check")}}</small>
        </span>
        <div class="d-grid gap-2 d-md-flex justify-content-md-end w-50">
            @if ($check2)
                <a type="button" href="{{ route('surveyReturn',['phase'=>$phase,'survey'=>2]) }}" 
                    class="btn btn-secondary me-md-2">{{ __('Go to Survey')}}
                </a>
            @else
                @if ($check1)
                    @if ($nowPlusMonth<=$td_check1)
                        <a type="button" href="{{ route('surveyFirst',['phase'=>$phase,'survey'=>2]) }}" 
                            class="btn btn-success me-md-2">{{ __('Go to Survey')}}
                        </a>
                    @else
                        <a type="button" href="{{ route('surveyFirst',['phase'=>$phase,'survey'=>2]) }}" 
                            class="btn btn-secondary me-md-2 disabled">{{ __('Please wait at least one month')}} 
                            {{$td_check1}}
                        </a>
                    @endif
                @else
                    <a type="button" href="{{ route('surveyFirst',['phase'=>$phase,'survey'=>2]) }}" 
                        class="btn btn-secondary me-md-2 disabled">{{ __('Please do the previous survey first')}}
                    </a>
                @endif
            @endif
        </div>
    </label>
</div>