<?php

/* index.html */
class __TwigTemplate_159eb1db8d163257ac7f8d15e32dbb495f6d83eca144413f62d0c49e48025514 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
\t<meta charset=\"UTF-8\">
\t<meta name=\"viewport\" content=\"width=device-width\">
\t<link rel=\"shortcut icon\" type=\"image/x-icon\" href=\"/favicon.ico\" />
\t<link rel=\"stylesheet\" href=\"/assets/bootstrap/css/bootstrap.min.css\">
\t<link rel=\"stylesheet\" href=\"/assets/css/style.css\">
\t<title>";
        // line 9
        if ( !(null === (isset($context["title"]) ? $context["title"] : null))) {
            echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : null), "html", null, true);
        } else {
            echo "Damage Records";
        }
        echo "</title>
</head>
<body>
\t<div class=\"wrapper\">
\t\t<header ";
        // line 13
        if ($this->getAttribute((isset($context["item"]) ? $context["item"] : null), "news_title_picture", array())) {
            echo "style=\"background-image: url(/images/news/";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["item"]) ? $context["item"] : null), "news_title_picture", array()), "html", null, true);
            echo ");\"";
        }
        echo ">
\t\t\t<nav class=\"navbar navbar-default bottom\">
\t\t\t\t<div class=\"nav-container container-fluid\">
\t\t\t\t\t<div class=\"navbar-header\">
\t\t\t\t\t\t<button type=\"button\" class=\"navbar-toggle collapsed\" data-toggle=\"collapse\" data-target=\"#navbar-collapse-1\" aria-expanded=\"false\">
\t\t\t\t\t\t    <span class=\"sr-only\">Розгорнути меню</span>
\t\t\t\t\t\t    <span class=\"icon-bar\"></span>
\t\t\t\t\t\t    <span class=\"icon-bar\"></span>
\t\t\t\t\t\t    <span class=\"icon-bar\"></span>
\t\t\t\t\t    </button>
\t\t\t\t\t\t<a href=\"/\" data-target=\"news\" data-page=\"1\" class=\"logo ajaxable\"><img src=\"/assets/img/damage-logo-sign-600.png\"></a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"collapse navbar-collapse\" id=\"navbar-collapse-1\">
\t\t\t\t\t\t<ul class=\"nav navbar-nav\">
\t\t\t\t\t\t\t<li ";
        // line 27
        if (((isset($context["controller"]) ? $context["controller"] : null) == "news")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/\" class=\"ajaxable\" data-target=\"news\">НОВИНИ</a></li>
\t\t\t\t\t\t\t<li ";
        // line 28
        if (((isset($context["controller"]) ? $context["controller"] : null) == "releases")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/releases\" class=\"ajaxable\" data-target=\"releases\">РЕЛІЗИ</a></li>
\t\t\t\t\t\t\t<li ";
        // line 29
        if (((isset($context["controller"]) ? $context["controller"] : null) == "artists")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/artists\" class=\"ajaxable\" data-target=\"artists\">АРТИСТИ</a></li>
\t\t\t\t\t\t\t<li ";
        // line 30
        if (((isset($context["controller"]) ? $context["controller"] : null) == "school")) {
            echo "class=\"active\"";
        }
        echo " id=\"dropdown\"><a href=\"/school\" class=\"ajaxable\" data-target=\"school\">ШКОЛА</a>
\t\t\t\t\t\t\t\t<ul class=\"dropdown hidden-xs\">
                                    <li><a href=\"/school#about\" class=\"ajaxable\" data-target=\"school\">ПРО КУРСИ</a></li>
                                    <li><a href=\"/school#equipment\" class=\"ajaxable\" data-target=\"school\">ОБЛАДНАННЯ</a></li>
                                    <li><a href=\"/school#prices\" class=\"ajaxable\" data-target=\"school\">ЦІНИ</a></li>
                                    <li><a href=\"/school#contact\" class=\"ajaxable\" data-target=\"school\">ЗВОРОТНІЙ ЗВ'ЯЗОК</a></li>
\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t\t<li ";
        // line 38
        if (((isset($context["controller"]) ? $context["controller"] : null) == "about")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/about\" class=\"ajaxable\" data-target=\"about\">ПРО НАС</a></li>
\t\t\t\t\t\t\t<li ";
        // line 39
        if (((isset($context["controller"]) ? $context["controller"] : null) == "contacts")) {
            echo "class=\"active\"";
        }
        echo "><a href=\"/contacts\" class=\"ajaxable\" data-target=\"contacts\">КОНТАКТИ</a></li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t\t<div class=\"search-box\">
                            <form action=\"/search/\" method=\"GET\" id=\"search-form\">
                                <input type=\"text\" name=\"q\" placeholder=\"Пошук\" minlength=\"3\" autocomplete=\"off\">
                                <button data-target=\"search\"><span class=\"glyphicon glyphicon-search\"></span></button>
                            </form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</nav>
\t\t</header>
\t\t<main>
\t\t\t";
        // line 52
        $this->displayBlock('content', $context, $blocks);
        // line 55
        echo "            <div class=\"clearfix\"></div>
   \t\t</main>
\t\t<footer>
\t\t\t<div class=\"partners\">
\t\t\t\t<p>PARTNERS:</p>
\t\t\t\t<a href=\"http://www.kissfm.ua/\"><img src=\"/assets/img/partner-1.png\"></a>
\t\t\t\t<a href=\"#\"><img src=\"/assets/img/partner-2.png\"></a>
\t\t\t\t<a href=\"http://besttrack.in.ua\"><img src=\"/assets/img/partner-3.png\"></a>
\t\t\t\t<a href=\"http://sweet-n-low.de/\"><img src=\"/assets/img/partner-4.png\"></a>
\t\t\t</div>
\t\t\t<div class=\"links\">
\t\t\t\t<p>FOLLOW US:</p>
\t\t\t\t<a href=\"https://www.facebook.com/\" class=\"social-link fb\"></a>
\t\t\t\t<a href=\"https://twitter.com/\" class=\"social-link twitter\"></a>
\t\t\t\t<a href=\"https://vk.com\" class=\"social-link vk\"></a>
\t\t\t\t<a href=\"https://soundcloud.com/\" class=\"social-link soundcloud\"></a>
\t\t\t\t<a href=\"https://www.youtube.com/\" class=\"social-link youtube\"></a>
\t\t\t\t<a href=\"https://www.instagram.com/\" class=\"social-link instagram\"></a>
\t\t\t\t<a href=\"http://www.last.fm/ru/\" class=\"social-link lastfm\"></a>
\t\t\t</div>
\t\t\t<div class=\"clearfix\"></div>
\t\t\t<div class=\"copyright\">
\t\t\t\t<p>&copy; DAMAGE RECORDS</p>
\t\t\t</div> 
\t\t</footer>
\t</div>
    <script type=\"text/html\" id=\"pagination-template\">
    <% if(pgn.total_pages > 1){ %>
        <div class=\"paginations text-center row\">
            <% var prev = pgn.current_page - 1; %>
            <a class=\"prev-pgn ajaxable<% if(prev >= 1){ %>\" href=\"/<%=controller%>/?page=<%=prev%>\"<% }else{ %> disabled\"<% } %> data-target=\"<%=controller%>\" data-page=\"<%=prev%>\">
                <span class=\"glyphicon glyphicon-backward\"></span>
            </a>
            <a href=\"/<%=controller%>/?page=1\" class=\"pgn ajaxable<% if(pgn.current_page == 1){ %> pgn-current<% } %>\" data-target=\"<%=controller%>\" data-page=\"1\">1</a>
            <% if(pgn.total_pages >= 10){ %>
                <% if(pgn.current_page < 6){ %>
                    <% for(var i = 2; i <= pgn.current_page + 2; i++){ %>
                        <a href=\"/<%=controller%>/?page=<%=i%>\" class=\"pgn ajaxable<% if(i == pgn.current_page){ %> pgn-current<% } %>\" data-target=\"<%=controller%>\" data-page=\"<%=i%>\"><%=i%></a>
                    <% } %>
                    <span style=\"color: #fff\">...</span>
                    <a href=\"/<%=controller%>/?page=<%=pgn.total_pages%>\" class=\"pgn ajaxable\" data-target=\"<%=controller%>\" data-page=\"<%=pgn.total_pages%>\"><%=pgn.total_pages%></a>
                    <% }else if(pgn.current_page >= pgn.total_pages - 4){ %>
                    <span style=\"color: #fff\">...</span>
                    <% for(var i = pgn.current_page - 2; i <= pgn.total_pages; i++){ %>
                        <a href=\"/<%=controller%>/?page=<%=i%>\" class=\"pgn ajaxable<% if(i == pgn.current_page){ %> pgn-current<% } %>\" data-target=\"<%=controller%>\" data-page=\"<%=i%>\"><%=i%></a>
                    <% } %>
                <% }else{ %>
                    <span style=\"color: #fff\">...</span>
                    <% for(var i = pgn.current_page - 2; i <= pgn.current_page + 2; i++){ %>
                        <a href=\"/<%=controller%>/?page=<%=i%>\" class=\"pgn ajaxable<% if(i == pgn.current_page){ %> pgn-current<% } %>\" data-target=\"<%=controller%>\" data-page=\"<%=i%>\"><%=i%></a>
                    <% } %>
                    <span style=\"color: #fff\">...</span>
                    <a href=\"/<%=controller%>/?page=<%=pgn.total_pages%>\" class=\"pgn ajaxable\" data-target=\"<%=controller%>\" data-page=\"<%=pgn.total_pages%>\"><%=pgn.total_pages%></a>
                <% } %>
            <% }else{ %>
                <% for(var i = 2; i <= pgn.total_pages; i++){ %>
                    <a href=\"/<%=controller%>/?page=<%=i%>\" class=\"pgn ajaxable<% if(i == pgn.current_page){ %> pgn-current<% } %>\" data-target=\"<%=controller%>\" data-page=\"<%=i%>\"><%=i%></a>
                <% } %>
            <% } %>
            <% var next = pgn.current_page + 1; %>
            <a class=\"next-pgn ajaxable<% if(next <= pgn.total_pages){ %>\" href=\"/<%=controller%>/?page=<%=next%>\"<% }else{ %> disabled\"<% } %> data-target=\"<%=controller%>\" data-page=\"<%=next%>\">
                <span class=\"glyphicon glyphicon-forward\"></span>
            </a>
        </div>
    <% } %>
    </script>
    <script type=\"text/html\" id=\"news-list-template\">
        <% news.forEach(function(item) { %>
        <div class=\"item item-block\" style=\"background-image: url(/images/news/<%=item.news_title_picture%>);\">
            <a href=\"/news/<%=item.news_id%>\" data-id=\"<%=item.news_id%>\" data-target=\"news\" class=\"ajaxable\">
                <div class=\"overlay\">
                    <div class=\"date\">
                        <span><%=item.news_date%></span>
                    </div>
                    <div class=\"title\">
                        <span><%=item.news_title%></span>
                    </div>
                </div>
            </a>
        </div>
        <% }); %>
        <div class=\"clearfix\"></div>
    </script>
    <script type=\"text/html\" id=\"releases-list-template\">
        <% releases.forEach(function(item) { %>
        <div class=\"item\" style=\"background-image: url(/images/releases/<%=item.release_cover%>);\">
            <a href=\"/releases/<%=item.releases_id%>\" data-id=\"<%=item.releases_id%>\" data-target=\"releases\" class=\"ajaxable\">
                <div class=\"overlay\">
                    <div class=\"title\">
                        <h4><%=item.release_artist%></h4>
                        <h3><%=item.release_title%></h3>
                    </div>
                </div>
            </a>
        </div>
        <% }); %>
        <div class=\"clearfix\"></div>
    </script>
    <script type=\"text/html\" id=\"artists-list-template\">
        <% artists.forEach(function(artist) { %>
        <div class=\"item\" style=\"background-image: url(/images/artists/<%=artist.artist_picture%>);\">
            <a href=\"/artists/<%=artist.artist_id%>\" data-id=\"<%=artist.artist_id%>\" data-target=\"artists\" class=\"ajaxable\">
                <div class=\"overlay\">
                    <div class=\"title\">
                        <h3><%=artist.artist_name%></h3>
                    </div>
                </div>
            </a>
        </div>
        <% }); %>
        <div class=\"clearfix\"></div>
    </script>
    <script type=\"text/html\" id=\"about-list-template\">
        <div class=\"release-container\">
            <p class=\"about\">Про Damage Records</p>
            <article>
                <%=text.text%>
            </article>
            <div class=\"popup\">
                <p><a data-target=\"#collapsable\" data-toggle=\"collapse\" aria-expanded=\"false\" href=\"#subscribe\">Підписатися на новини Damage Records</a></p>
                <form id=\"collapsable\" name=\"subscribe-email\" class=\"collapse subscribe-form\">
                    <input name=\"name\" required type=\"text\" class=\"popup-form form-control\" placeholder=\"Ім'я\">
                    <input name=\"email\" required type=\"email\" class=\"popup-form form-control\" placeholder=\"E-Mail\">
                    <input type=\"submit\" value=\"Підписатися!\" class=\"popup-form btn\" id=\"btn-submit\" style=\"vertical-align: top;\">
                </form>
            </div>
        </div>
    </script>
    <script type=\"text/html\" id=\"contacts-list-template\">
        <div class=\"news-container text-center\">
            <p class=\"about\">Контакти Damage Records</p>
            <article class=\"text-center\">
                <%=text.text%>
            </article>
        </div>
    </script>
    <script type=\"text/html\" id=\"school-list-template\">
        <%=html%>
    </script>
    <script type=\"text/html\" id=\"search-template\">
        <% if(newsTemplate != undefined){ %>
            <h3 class=\"search-header\">Знайдені новини:</h3>
            <%=newsTemplate%>
        <% } %>
        <% if(releasesTemplate != undefined){ %>
            <h3 class=\"search-header\">Знайдені релізи:</h3>
            <%=releasesTemplate%>
            <div class=\"clearfix\"></div>
        <% } %>
        <% if(artistsTemplate != undefined){ %>
            <h3 class=\"search-header\">Знайдені артисти:</h3>
            <%=artistsTemplate%>
            <div class=\"clearfix\"></div>
        <% }else{ %>
            <h1>Нічого не знайдено</h1>
        <% } %>
    </script>
    <script type=\"text/html\" id=\"news-template\">
        <div class=\"news-container\">
            <h2><%=item.news_title%></h2>
            <article>
                <span><%=item.news_article%></span>
            </article>
            <div class=\"sharers\">
                <a href=\"#\" class=\"share-fb\"></a>
                <a href=\"#\" class=\"share-twitter\"></a>
                <a href=\"#\" class=\"share-vk\"></a>
                <a href=\"#\" class=\"share-mail\"></a>
            </div>
            <% if(\$(related).length > 0){ %>
            <div class=\"related\">
                <span>Схожі новини:</span>
                <div class=\"clearfix\"></div>
                <% _.each(related, function(item){ %>
                <div class=\"item related-item\" style=\"background-image: url(/images/news/<%=item.news_title_picture%>);\">
                    <a href=\"/news/<%=item.news_id%>\" data-id=\"<%=item.news_id%>\" data-target=\"news\" class=\"ajaxable\">
                        <div class=\"overlay\">
                            <div class=\"title\">
                                <span><%=item.news_title%></span>
                            </div>
                        </div>
                    </a>
                </div>
                <% }) %>
                <div class=\"clearfix\"></div>
            </div>
            <% } %>
        </div>
    </script>
    <script type=\"text/html\" id=\"releases-template\">
        <div class=\"release-container\">
            <div class=\"left pull-left\">
                <div class=\"release-info\">
                    <p class=\"artist\"><%=item.release_artist%></p>
                    <p class=\"title\"><%=item.release_title%></p>
                </div>
                <div class=\"release-cover\">
                    <img src=\"/images/releases/<%=item.release_cover%>\" class=\"img-responsive\">
                </div>
                <div class=\"release-listen\">
                    <p>Listen and download:</p>
                    <a href=\"<%=item.release_itunes%>\" class=\"itunes\" target=\"_blank\"></a>
                    <a href=\"<%=item.release_gplay%>\" class=\"gplay\" target=\"_blank\"></a>
                    <a href=\"<%=item.release_spotify%>\" class=\"spotify\" target=\"_blank\"></a>
                    <a href=\"<%=item.release_deezer%>\" class=\"deezer\" target=\"_blank\"></a>
                </div>
                <div class=\"sharers\">
                    <p>Share:</p>
                    <a href=\"#\" class=\"share-fb\"></a>
                    <a href=\"#\" class=\"share-twitter\"></a>
                    <a href=\"#\" class=\"share-vk\"></a>
                    <a href=\"#\" class=\"share-mail\"></a>
                </div>
            </div>
            <div class=\"right pull-right\">
                <div class=\"release-nav text-center\">
                    <a <% if(prev != undefined){ %>data-target=\"releases\" data-id=\"<%=prev.releases_id%>\" href=\"/releases/<%=prev.releases_id%>\"<% } %> class=\"glyphicon glyphicon-menu-left<% if(prev == undefined){ %> disabled<% } %><% if(prev != undefined){ %> ajaxable<% } %>\"></a>
                    <span>Шукати реліз</span>
                    <a <% if(next != undefined){ %>data-target=\"releases\" data-id=\"<%=next.releases_id%>\" href=\"/releases/<%=next.releases_id%>\"<% } %> class=\"glyphicon glyphicon-menu-right<% if(next == undefined){ %> disabled<% } %><% if(next != undefined){ %> ajaxable<% } %>\"></a>
                </div>
                <div class=\"release-description\">
                    <%=item.release_description%>
                </div>
                <div class=\"release-tracklist\">
                    <h3>Трекліст:</h3>
                    <%=item.release_tracklist%>
                </div>
            </div>
            <div class=\"clearfix\"></div>
            <% if(\$(related).length > 0){ %>
            <div class=\"related\">
                <p>Схожі релізи:</p>
                <% _.each(related, function(rel){ %>
                <div class=\"item related-item\" style=\"background-image: url(/images/releases/<%=rel.release_cover%>);\">
                    <a href=\"/releases/<%=rel.releases_id%>\" data-id=\"<%=rel.releases_id%>\" data-target=\"releases\" class=\"ajaxable\">
                        <div class=\"overlay\">
                            <div class=\"title\">
                                <span><%=rel.release_title%></span>
                            </div>
                        </div>
                    </a>
                </div>
                <% }) %>
                <div class=\"clearfix\"></div>
            </div>
            <% } %>
        </div>
    </script>
    <script type=\"text/html\" id=\"artists-template\">
        <div class=\"news-container\">
            <figure>
                <img src=\"/images/artists/<%=artist.artist_picture%>\">
            </figure>
            <article>
                <span><%=artist.artist_bio%></span>
            </article>
            <div class=\"sharers\">
                <a href=\"#\" class=\"share-fb\"></a>
                <a href=\"#\" class=\"share-twitter\"></a>
                <a href=\"#\" class=\"share-vk\"></a>
                <a href=\"#\" class=\"share-mail\"></a>
            </div>
            <% if(\$(related).length > 0){ %>
            <div class=\"related\">
                <span>Схожі артисти:</span>
                <div class=\"clearfix\"></div>
                <% _.each(related, function(item){ %>
                <div class=\"item related-item\" style=\"background-image: url(/images/artists/<%=item.artist_picture%>);\">
                    <a href=\"/artists/<%=item.artist_id%>\" data-id=\"<%=item.artist_id%>\" data-target=\"artists\" class=\"ajaxable\">
                        <div class=\"overlay\">
                            <div class=\"title\">
                                <span><%=item.artist_name%></span>
                            </div>
                        </div>
                    </a>
                </div>
                <% }) %>
                <div class=\"clearfix\"></div>
            </div>
            <% } %>
        </div>
    </script>
\t<script src=\"/assets/js/jquery.min.js\"></script>
\t<script src=\"/assets/js/jquery.sticky.js\"></script>
\t<script src=\"/assets/bootstrap/js/bootstrap.min.js\"></script>
    <script src=\"/assets/js/lodash.js\"></script>
    <script src=\"/assets/js/script.js\"></script>
</body>
</html>";
    }

    // line 52
    public function block_content($context, array $blocks = array())
    {
        // line 53
        echo "
   \t\t\t";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  414 => 53,  411 => 52,  119 => 55,  117 => 52,  99 => 39,  93 => 38,  80 => 30,  74 => 29,  68 => 28,  62 => 27,  41 => 13,  30 => 9,  20 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
