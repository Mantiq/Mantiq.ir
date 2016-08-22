<?php

class federation
{
    public function CustomThumb($ID, $size){
        if(has_post_thumbnail()){
            $thumb = get_the_post_thumbnail_url($ID, $size);
        }else {
            $thumb = get_bloginfo('template_directory'). "/no_image.png";
        }
        return $thumb;
    }
}