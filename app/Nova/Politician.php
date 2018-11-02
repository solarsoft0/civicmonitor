<?php

namespace App\Nova;

use Silvanite\NovaFieldCloudinary\Fields\CloudinaryImage;
use Laravel\Nova\Panel;

use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\TextArea;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Date;
use Laravel\Nova\Fields\Trix;
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
                    Date::make('Start Date'),
                    Date::make('End Date'),
                    Text::make('Note'),
                
            ])->hideFromIndex(),
            Text::make("Email"),
            Select::make('Gender')->options([
    'Male' => 'Male',
    'Female' => 'Female',
 ])->hideFromIndex(),
            Date::make("Birth Date")->hideFromIndex(),
            Date::make("Death Date")->hideFromIndex(),
            CloudinaryImage::make("Image"),
            CloudinaryImage::make("Cover Image")->hideFromIndex(),
            TextArea::make("Summary"),
            Trix::make("Biography")->hideFromIndex(),
            Select::make('National Identity')->options([
    'Nigerian' => 'Nigerian',
]),
JSON::make('Contact Details', [
                    TextArea::make('Contact Detail 1'),
                    TextArea::make('Contact Detail 2'),
            ])->hideFromIndex(),
        JSON::make('Links', [
                    TextArea::make('Website')->help(
    'seperate with comma "," '
),
                   TextArea::make('Social Media')->help(
    'seperate with comma "," '
),
               ])->hideFromIndex(), 
                           TextArea::make("Honors")->hideFromIndex(),
            TextArea::make("Works")->hideFromIndex(),
            TextArea::make("Family")->hideFromIndex(),
                    new Panel('Education', $this->educationFields()),

               HasMany::make('Memberships')->hideFromIndex(),
];
    }



    protected function educationFields()
{
    return [
       TextArea::make("Primary","education_primary")->hideFromIndex(),
            TextArea::make("Secondary","education_secondary")->hideFromIndex(),
            TextArea::make("University","education_university")->hideFromIndex(),
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
