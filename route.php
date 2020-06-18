<?php
function routingMatch($url)
{
    $arr = array(
        'controller' => 'Error',
        'action' => 'error404'
    );
    // root url
    if ('/' == $url || '' == $url || '/website' == $url) {
        $arr = array(
            'area' => 'website',
            'controller' => 'index',
            'action' => 'index'
        );
    }

    if ('/signin' == $url) {
        $arr = array(
            'controller' => 'signin',
            'action' => 'index'
        );
    }

    // blog urls
    //   /blog
    //   /blog/show/{id}
    if ('/blog' == $url) {
        $arr = array(
            'controller' => 'Blog',
            'action' => 'index'
        );
    } elseif (preg_match('#^/blog/show/(\\d+)$#', $url, $matches)) {
        $arr = array(
            'controller' => 'Blog',
            'action' => 'show',
            'id' => $matches[1]
        );
    }

    // generic urls
    //   /{controllername}
    //   /{controllername}/{method}/{paramname}
    if (preg_match('#^/([^/]+)/$#', $url, $matches)) {
        $arr = array(
            'controller' => $matches[1],
            'action' => 'index'
        );
    } elseif (preg_match('#^/([^/]+)/([^/]+)$#', $url, $matches)) {
        $arr = array(
            'area' => $matches[1],
            'controller' => $matches[2],
            'action' => 'index'
        );
    } elseif (preg_match('#^/([^/]+)/([^/]+)/([^/]+)$#', $url, $matches)) {
        $arr = array(
            'area' => $matches[1],
            'controller' => $matches[2],
            'action' => $matches[3]
        );
    }

    // if nothing else matches, then 404
    return $arr;
}



?>