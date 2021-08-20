<?php
    if(have_posts()){
        while(have_posts()){
            the_post();
            if(get_the_content() !== '[tomchat]'){
                do_shortcode('[tomchat]');
            }else{
                the_content();
            }
        }
    }
?>
