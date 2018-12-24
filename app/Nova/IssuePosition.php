<?php

namespace App\Nova;

use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Silvanite\NovaFieldCloudinary\Fields\CloudinaryImage;

use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\File;
use Illuminate\Http\Request;
use Laravel\Nova\Http\Requests\NovaRequest;
use R64\NovaFields\JSON;


class IssuePosition extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = 'App\IssuePosition';

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'title';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
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
            BelongsTo::make("Candidate")->sortable(),
            BelongsTo::make("Issue")->sortable(),
            Text::make("Title"),
            Trix::make("Body"),
            Trix::make("summary"),
            File::make("Audio")->hideFromIndex(),
JSON::make('sources', [
              Text::make('source Link 1'),
              Text::make('source Link 2'),
              Text::make('source Link 3'),
              Text::make('source Link 4'),
              Text::make('source Link 5'),
              Text::make('source Link 6'),
              Text::make('source Link 7'),
          ])->hideFromIndex(),
          CloudinaryImage::make('infographic'),
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
