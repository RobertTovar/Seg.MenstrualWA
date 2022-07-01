<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App;

class SurveysController extends Controller
{
    public function index()
    {
        $survArray ['nowPlusMonth'] = Carbon::now()->addMonth();
        $survArray ['s1'] = auth()->user()->survey_1;
        $survArray ['td_s1'] = auth()->user()->time_done_survey_1;
        $survArray ['s1_1'] = auth()->user()->survey_1_1;
        $survArray ['td_s1_1'] = auth()->user()->time_done_survey_1_1;
        $survArray ['s1_2'] = auth()->user()->survey_1_2;
        $survArray ['td_s1_2'] = auth()->user()->time_done_survey_1_2;
        $survArray ['s2'] = auth()->user()->survey_2;
        $survArray ['td_s2'] = auth()->user()->time_done_survey_2;
        $survArray ['s2_1'] = auth()->user()->survey_2_1;
        $survArray ['td_s2_1'] = auth()->user()->time_done_survey_2_1;
        $survArray ['s2_2'] = auth()->user()->survey_2_2;
        $survArray ['td_s2_2'] = auth()->user()->time_done_survey_2_2;
        $survArray ['s3'] = auth()->user()->survey_3;
        $survArray ['td_s3'] = auth()->user()->time_done_survey_3;
        $survArray ['s3_1'] = auth()->user()->survey_3_1;
        $survArray ['td_s3_1'] = auth()->user()->time_done_survey_3_1;
        $survArray ['s3_2'] = auth()->user()->survey_3_2;
        $survArray ['td_s3_2'] = auth()->user()->time_done_survey_3_2;

        return view('surveys',$survArray);
    }

    public function firstTimeSurvey(int $phase,int $survey)
    {
        switch ($phase) {
            case 1:
                if ($survey==0) {
                    auth()->user()->survey_1 = true;
                    auth()->user()->time_done_survey_1 = Carbon::now();
                    auth()->user()->save();

                    if (App::isLocale('en')) {
                        return redirect(env('urlSurvey1'));
                    } elseif (App::isLocale('es')) {
                        return redirect(env('urlSurvey1_es'));
                    }
                }
                else if ($survey==1) {
                    auth()->user()->survey_1_1 = true;
                    auth()->user()->time_done_survey_1_1 = Carbon::now();
                    auth()->user()->save();

                    if (App::isLocale('en')) {
                        return redirect(env('urlSurvey1_1'));
                    } elseif (App::isLocale('es')) {
                        return redirect(env('urlSurvey1_1_es'));
                    }
                }
                else if ($survey==2) {
                    auth()->user()->survey_1_2 = true;
                    auth()->user()->time_done_survey_1_2 = Carbon::now();
                    auth()->user()->save();

                    if (App::isLocale('en')) {
                        return redirect(env('urlSurvey1_2'));
                    } elseif (App::isLocale('es')) {
                        return redirect(env('urlSurvey1_2_es'));
                    }
                }
                break;

            case 2:
                if ($survey==0) {
                    auth()->user()->survey_2 = true;
                    auth()->user()->time_done_survey_2 = Carbon::now();
                    auth()->user()->save();

                    if (App::isLocale('en')) {
                        return redirect(env('urlSurvey2'));
                    } elseif (App::isLocale('es')) {
                        return redirect(env('urlSurvey2_es'));
                    }
                }
                else if ($survey==2) {
                    auth()->user()->survey_2_1 = true;
                    auth()->user()->time_done_survey_2_1 = Carbon::now();
                    auth()->user()->save();

                    if (App::isLocale('en')) {
                        return redirect(env('urlSurvey2_1'));
                    } elseif (App::isLocale('es')) {
                        return redirect(env('urlSurvey2_1_es'));
                    }
                }
                else if ($survey==2) {
                    auth()->user()->survey_2_2 = true;
                    auth()->user()->time_done_survey_2_2 = Carbon::now();
                    auth()->user()->save();

                    if (App::isLocale('en')) {
                        return redirect(env('urlSurvey2_2'));
                    } elseif (App::isLocale('es')) {
                        return redirect(env('urlSurvey2_2_es'));
                    }
                }
                break;

            case 3:
                if ($survey==0) {
                    auth()->user()->survey_3 = true;
                    auth()->user()->time_done_survey_3 = Carbon::now();
                    auth()->user()->save();

                    if (App::isLocale('en')) {
                        return redirect(env('urlSurvey3'));
                    } elseif (App::isLocale('es')) {
                        return redirect(env('urlSurvey3_es'));
                    }
                }
                else if ($survey==1) {
                    auth()->user()->survey_3_1 = true;
                    auth()->user()->time_done_survey_3_1 = Carbon::now();
                    auth()->user()->save();

                    if (App::isLocale('en')) {
                        return redirect(env('urlSurvey3_1'));
                    } elseif (App::isLocale('es')) {
                        return redirect(env('urlSurvey3_1_es'));
                    }
                }
                else if ($survey==2) {
                    auth()->user()->survey_3_2 = true;
                    auth()->user()->time_done_survey_3_2 = Carbon::now();
                    auth()->user()->save();

                    if (App::isLocale('en')) {
                        return redirect(env('urlSurvey3_2'));
                    } elseif (App::isLocale('es')) {
                        return redirect(env('urlSurvey3_2_es'));
                    }
                }
                break;
        }
    }

    public function reEnterSurvey(int $phase,int $survey)
    {
        switch ($phase) {
            case 1:
                if ($survey==0) {    
                    if (App::isLocale('en')) {
                        return redirect(env('urlSurvey1'));
                    } elseif (App::isLocale('es')) {
                        return redirect(env('urlSurvey1_es'));
                    }
                }
                else if ($survey==1) {    
                    if (App::isLocale('en')) {
                        return redirect(env('urlSurvey1_1'));
                    } elseif (App::isLocale('es')) {
                        return redirect(env('urlSurvey1_1_es'));
                    }
                }
                else if ($survey==2) {    
                    if (App::isLocale('en')) {
                        return redirect(env('urlSurvey1_2'));
                    } elseif (App::isLocale('es')) {
                        return redirect(env('urlSurvey1_2_es'));
                    }
                }
                break;

            case 2:
                if ($survey==0) {    
                    if (App::isLocale('en')) {
                        return redirect(env('urlSurvey2'));
                    } elseif (App::isLocale('es')) {
                        return redirect(env('urlSurvey2_es'));
                    }
                }
                else if ($survey==2) {    
                    if (App::isLocale('en')) {
                        return redirect(env('urlSurvey2_1'));
                    } elseif (App::isLocale('es')) {
                        return redirect(env('urlSurvey2_1_es'));
                    }
                }
                else if ($survey==2) {    
                    if (App::isLocale('en')) {
                        return redirect(env('urlSurvey2_2'));
                    } elseif (App::isLocale('es')) {
                        return redirect(env('urlSurvey2_2_es'));
                    }
                }
                break;

            case 3:
                if ($survey==0) {    
                    if (App::isLocale('en')) {
                        return redirect(env('urlSurvey3'));
                    } elseif (App::isLocale('es')) {
                        return redirect(env('urlSurvey3_es'));
                    }
                }
                else if ($survey==1) {    
                    if (App::isLocale('en')) {
                        return redirect(env('urlSurvey3_1'));
                    } elseif (App::isLocale('es')) {
                        return redirect(env('urlSurvey3_1_es'));
                    }
                }
                else if ($survey==2) {    
                    if (App::isLocale('en')) {
                        return redirect(env('urlSurvey3_2'));
                    } elseif (App::isLocale('es')) {
                        return redirect(env('urlSurvey3_2_es'));
                    }
                }
                break;
        }
    }
}
