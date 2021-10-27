<?php 

class Movie {
    public $id;
    public $title;
    public $poster_path;
    public $genre;
    public $language;
    public $release_date;
    public $length;
    public $adult;
    public $overview;
    public $review;
    public $cast;

    /**
     * Undocumented function
     *
     * @param int $_id                  ID of the movie
     * @param string $_title            Title of the movie         
     * @param string $_poster_path      Path to the image of the movie
     * @param array $_genre             List of the genres of the movie
     * @param string $_language         Language the movie will be proiected
     * @param string $_release_date     Date of release of the movie
     * @param int $_length              Duration in minute of the movie
     * @param bool $_adult              True or false if the film is for adults
     * @param string $_overview         Brief description of the plot
     * @param int $_review              A number between 1 and 10
     * @param array $_cast              List of acthors
     */
    function __construct($_id,$_title,$_poster_path,$_genre,$_language,$_release_date,$_length,$_adult,$_overview,$_review,$_cast) {

        $this->id = $_id;
        $this->title = $_title;
        $this->poster_path = $_poster_path;
        $this->genre = $_genre;
        $this->language = $_language;
        $this->release_date = $_release_date;
        $this->length = $_length;
        $this->adult = $_adult;
        $this->overview = $_overview;
        $this->review = $_review;
        $this->cast = $_cast;
    }

}

?>
