<?php

namespace Drupal\omdb\Controller;

class OMDBController {
    public function omdb_search($id) {

        $omdb_response = file_get_contents("http://www.omdbapi.com/?apikey=2cbab1d9&i=$id");
        $movie_data = json_decode($omdb_response);

        $year = $movie_data->Year; //str
        $genres = $movie_data->Genre; //arr
        $director = $movie_data->Director; //str
        $actors = $movie_data->Actors; //arr
        $plot = $movie_data->Plot; //string
        $lang = $movie_data->Language; //str
        $poster = $movie_data->Poster; //url

        $text = "
        <div class=\"row\">
            <div class=\"col-md-5\">
                <img src=\"$poster\">
            </div>
            <div class=\"col-md-7\" style=\"margin: 1em;\">
                <div class=\"row\">
                    <div class=\"col-sm-4\"><strong>Year</strong></div>
                    <div class=\"col-sm-8\">$year</div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-4\"><strong>Genres</strong></div>
                    <div class=\"col-sm-8\">$genres</div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-4\"><strong>Director</strong></div>
                    <div class=\"col-sm-8\">$director</div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-4\"><strong>Actors</strong></div>
                    <div class=\"col-sm-8\">$actors</div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-4\"><strong>Language</strong></div>
                    <div class=\"col-sm-8\">$lang</div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-4\"><strong>Plot</strong></div>
                </div>
                <div class=\"row\">
                    <p>$plot</p>
                </div>
            </div>
        </div>";

        return array('#title' => $movie_data->Title, '#markup' => $text);
    }
}