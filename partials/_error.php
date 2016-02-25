<?php
/**
 * Created by PhpStorm.
 * User: Mohamed
 * Date: 24/02/16
 * Time: 17:36
 */


if(isset($errors) && count($errors) !=0)
{
    echo '<div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert"
                       aria-hidden="true">&times;</button>';
    foreach($errors as $error)
    {
        echo $error.'<br/>';
    }
    echo '</div>';
}