<?php

use App\Models\Language;
use App\Models\Setting;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

if(!function_exists('currentLanguage'))
{
    /**
     * Return Current Language from datebase
     * @return mixed
     */
    function currentLanguage()
    {
        $language = Language::where('status',1)->where('local',LaravelLocalization::getCurrentLocale())->first();
        return $language;
    }

}
if(!function_exists('getCurrentLocale'))
{
    /**
     * Return Current Local from datebase
     * @return mixed
     */
    function getCurrentLocale()
    {
        $current = Language::where('local',LaravelLocalization::getCurrentLocale())->first()->local;
        return $current;
    }
}
if(!function_exists('languages'))
{
    /**
     * Return List of Languages from datebase
     * @return mixed
    */
    function languages()
    {
        $languages = Language::where('status',1)->cursor();
        return $languages;
    }


}

if(!function_exists('settings'))
{
    /**
     * Return settings
     * @param null $key
     * @return mixed
     */
    function settings($key = null)
    {
        $settings = [];
        if($key){
            $settings = Setting::where('key',$key)->first()->value;

        }else{
            $allSettings = Setting::cursor()->toArray();
            foreach($allSettings as $setting)
            {
                $setting[$setting['key']] = $setting['value'];
            }
        }
        return $settings;

    }

}
if(!function_exists('settingByLang'))

{
    function settingByLang($key = null){

        $setting = [];
        if($key){
            $setting = Setting::where('key',$key)->where('language_id',LaravelLocalization::getCurrentLocaleId())->first()->value;
        }
        return $setting;
    }
}
