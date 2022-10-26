<?php

function generarTitulo() {

	return "Noticias XATAKA";
}

function generarFeeds() {
    require_once 'libs/simplepie/autoloader.php';

    $url = 'http://feeds.weblogssl.com/xataka2';
    $feed = new SimplePie();
    $feed->set_feed_url($url);
    $feed->enable_cache();
    $feed->set_cache_location('C:\xampp\htdocs\EjemplosMVC\mvc_PHP\libs\simplepie\cache');
    $feed->init();

    foreach ($feed->get_items() as $item) :
        $feeds .= '<article>';
        $feeds .= '<header>';
        $feeds .= '<p>Title: <a href="' . $item->get_link() . '">' . $item->get_title() . '</a></p>';
        $feeds .= '<p>Author: ' . $item->get_author()->get_name() . '</p>';
        $feeds .= '<p>Date: ' . $item->get_date('Y-m-d H:i:s') . '</p>';
        $feeds .= '<p>Description: ' . $item->get_description() . '</p>';
        $feeds .= '</header>';
        $feeds .= $item->get_content(true);
        $feeds .= '</article>';    
    endforeach;

    return $feeds;
    
}





?>