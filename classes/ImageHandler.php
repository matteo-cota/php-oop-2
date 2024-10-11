<?php

trait ImageHandler
{
    public function validateImage($imageUrl)
    {

        return filter_var($imageUrl, FILTER_VALIDATE_URL) !== false;
    }

    public function getImage()
    {
        return $this->imageUrl;
    }
}
