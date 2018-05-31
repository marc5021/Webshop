<?php

namespace webshop;

use webshop\objects\Actor;

class Movie {

    private $id;
    private $title;
    private $cover_picture;
    private $backdrop_image;
    private $release_year;
    private $description;
    private $directors;
    private $price;

    private $actors;

    public function __construct($data) {
        $this->id = $data['id'];
        $this->title = $data['title'];
        $this->cover_picture = $data['cover_picture'];
        $this->backdrop_image = $data['backdrop_image'];
        $this->release_year = $data['release_year'];
        $this->description = $data['description'];
        $this->directors = $data['directors'];
        $this->price = $data['price'];

        $conn = SqlController::getConnection();
        $this->actors = [];
        $query = $conn->query("SELECT a.* FROM movie_actors ma LEFT JOIN actor a ON a.id = ma.id WHERE ma.id = $this->id");
        if ($query instanceof \mysqli_result) {
            while ($row = $query->fetch_row()) {
                $this->actors[] = new Actor($row);
            }
        }
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getCoverPicture()
    {
        return $this->cover_picture;
    }

    /**
     * @param mixed $cover_picture
     */
    public function setCoverPicture($cover_picture)
    {
        $this->cover_picture = $cover_picture;
    }

    /**
     * @return mixed
     */
    public function getBackdropImage()
    {
        return $this->backdrop_image;
    }

    /**
     * @param mixed $backdrop_image
     */
    public function setBackdropImage($backdrop_image)
    {
        $this->backdrop_image = $backdrop_image;
    }

    /**
     * @return mixed
     */
    public function getReleaseYear()
    {
        return $this->release_year;
    }

    /**
     * @param mixed $release_year
     */
    public function setReleaseYear($release_year)
    {
        $this->release_year = $release_year;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getDirectors()
    {
        return $this->directors;
    }

    /**
     * @param mixed $directors
     */
    public function setDirectors($directors)
    {
        $this->directors = $directors;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return array
     */
    public function getActors()
    {
        return $this->actors;
    }



}