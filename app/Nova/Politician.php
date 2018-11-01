<?php

namespace App\Nova;

use Silvanite\NovaFieldCloudinary\Fields\CloudinaryImage;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\TextArea;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use R64\NovaFields\JSON;

class Politician extends Resource
{

    public static $with = ['memberships'];

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\Politician';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'name',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */

    public function fields(Request $request)
    {
        return [
            ID::make()->sortable(), 
            Text::make("Title"),
            Text::make("Name"),
            JSON::make('Other Names',[
                    Text::make('Name'),
                    Text::make('Start Date'),
                    Text::make('End Date'),
                    Text::make('Note'),
                
            ]),
            Text::make("Email"),
            Text::make("Gender"),
            Date::make("Birth Date"),
            Date::make("Death Date"),
            CloudinaryImage::make("Image"),
            CloudinaryImage::make("Cover Image"),
            TextArea::make("Summary"),
            Trix::make("Biography"),
            Text::make("National Identity"),
JSON::make('Contact Details', [
                    TextArea::make('Contact Detail 1'),
                    TextArea::make('Contact Detail 2'),
            ]),
        JSON::make('Links', [
                    Text::make('Website')->help(
    'seperate with comma "," '
),
                   Text::make('Social-Media')->help(
    'seperate with comma "," '
),
               ]), 
               HasMany::make('Memberships'),
               HasMany::make('Candidates'),
];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
