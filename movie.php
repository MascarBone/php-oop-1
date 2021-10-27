<?php 

class Movie {
    public $id;
    public $title;
    public $posterPath;
    public $genres;
    public $language;
    public $releaseDate;
    public $length;
    public $adult;
    public $overview;
    public $review;
    public $cast;

    /**
     * Construct to set the initial values of the instance
     *
     * @param int $_id                  ID of the movie
     * @param string $_title            Title of the movie         
     * @param string $_posterPath      Path to the image of the movie
     * @param array $_genres             List of the genres of the movie
     * @param string $_language         Language the movie will be proiected
     * @param string $_releaseDate     Date of release of the movie
     * @param int $_length              Duration in minute of the movie
     * @param bool $_adult              True or false if the film is for adults
     * @param string $_overview         Brief description of the plot
     * @param int $_review              A number between 1 and 10
     * @param array $_cast              List of acthors
     */
    function __construct($_id,$_title,$_posterPath,$_genres,$_language,$_releaseDate,$_length,$_adult,$_overview,$_review,$_cast) {

        $this->id = $_id;
        $this->title = $_title;
        $this->posterPath = $_posterPath;
        $this->genres = $_genres;
        $this->language = $_language;
        $this->releaseDate = $_releaseDate;
        $this->length = $_length;
        $this->adult = $_adult;
        $this->overview = $_overview;
        $this->review = $_review;
        $this->cast = $_cast;
    }

    /**
     * Get the id value
     *
     * @return int ID
     */
    function getId () {
        return $this->id;
    }
    /**
     * Get the title of the movie
     *
     * @return string Title
     */
    function getTitle () {
        return $this->title;
    }
    /**
     * Get the path to the poster
     *
     * @return string img-path
     */
    function getPosterPath () {
        return $this->posterPath;
    }
    /**
     * Get genres from an array of movies
     *
     * @return string list of genres
     */
    function getGenres () {
        $list = '';
        foreach($this->genres as $index => $genre)
        {
            if(count($this->genres)-1 == $index)
            {
                $list .= $genre;   
                break;
            }
            $list .= $genre . ', ';   

        }
        return $list;
    }
    /**
     * Get the language of the movie
     *
     * @return string language
     */
    function getLanguage () {
        return $this->language;
    }
    /**
     * Get the date of release of the movie
     *
     * @return string date
     */
    function getReleaseDate () {
        return $this->releaseDate;
    }
    /**
     * Get the duration of the movie in minutes
     *
     * @return int minutes
     */
    function getLength () {
        return $this->length;
    }
    /**
     * Get the info if the movie is for adult
     *
     * @return bool true or false
     */
    function getAdult () {
        return $this->adult;
    }
    /**
     * Get the plot of the movie
     *
     * @return string plot
     */
    function getOverview () {
        return $this->overview;
    }
    /**
     * Get the review between 1 an 10
     *
     * @return int review
     */
    function getReview () {
        return $this->review;
    }
    /**
     * Get the list of achtors
     *
     * @return array cast
     */
    function getCast () {
        $list = '';
        foreach($this->cast as $index => $achtor)
        {
            if(count($this->cast)-1 == $index)
            {
                $list .= $achtor;   
                break;
            }
            $list .= $achtor . ', ';   

        }
        return $list;;
    }
}

?>
