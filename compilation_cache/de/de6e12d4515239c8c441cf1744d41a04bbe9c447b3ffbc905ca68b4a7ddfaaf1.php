<?php

/* news.html */
class __TwigTemplate_1d5ab48f98f864bdc7e1fc4550558d9f9d7ff43f5f313d77a0ca212e03b717a3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html", "news.html", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "index.html";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        // line 3
        echo "<div class=\"news-container\">
\t<figure>
\t\t<img src=\"./images/news/1.jpg\">
\t</figure>
\t<article>
\t\t<span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, autem? Quisquam eveniet nisi consequatur ipsum, eum magnam excepturi? Vitae quidem nostrum, dicta ipsum vero optio, nemo nesciunt inventore nobis placeat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, autem? Quisquam eveniet nisi consequatur ipsum, eum magnam excepturi? Vitae quidem nostrum, dicta ipsum vero optio, nemo nesciunt inventore nobis placeat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, autem? Quisquam eveniet nisi consequatur ipsum, eum magnam excepturi? Vitae quidem nostrum, dicta ipsum vero optio, nemo nesciunt inventore nobis placeat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, autem? Quisquam eveniet nisi consequatur ipsum, eum magnam excepturi? Vitae quidem nostrum, dicta ipsum vero optio, nemo nesciunt inventore nobis placeat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, autem? Quisquam eveniet nisi consequatur ipsum, eum magnam excepturi? Vitae quidem nostrum, dicta ipsum vero optio, nemo nesciunt inventore nobis placeat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, autem? Quisquam eveniet nisi consequatur ipsum, eum magnam excepturi? Vitae quidem nostrum, dicta ipsum vero optio, nemo nesciunt inventore nobis placeat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, autem? Quisquam eveniet nisi consequatur ipsum, eum magnam excepturi? Vitae quidem nostrum, dicta ipsum vero optio, nemo nesciunt inventore nobis placeat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, autem? Quisquam eveniet nisi consequatur ipsum, eum magnam excepturi? Vitae quidem nostrum, dicta ipsum vero optio, nemo nesciunt inventore nobis placeat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, autem? Quisquam eveniet nisi consequatur ipsum, eum magnam excepturi? Vitae quidem nostrum, dicta ipsum vero optio, nemo nesciunt inventore nobis placeat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, autem? Quisquam eveniet nisi consequatur ipsum, eum magnam excepturi? Vitae quidem nostrum, dicta ipsum vero optio, nemo nesciunt inventore nobis placeat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, autem? Quisquam eveniet nisi consequatur ipsum, eum magnam excepturi? Vitae quidem nostrum, dicta ipsum vero optio, nemo nesciunt inventore nobis placeat. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Natus, autem? Quisquam eveniet nisi consequatur ipsum, eum magnam excepturi? Vitae quidem nostrum, dicta ipsum vero optio, nemo nesciunt inventore nobis placeat. </span>
\t</article>\t\t\t\t
\t<div class=\"sharers\">
\t\t<a href=\"#\" class=\"share-fb\"></a>
\t\t<a href=\"#\" class=\"share-twitter\"></a>
\t\t<a href=\"#\" class=\"share-vk\"></a>
\t\t<a href=\"#\" class=\"share-mail\"></a>
\t</div>
\t<div class=\"related\">
\t\t<span>Схожі новини:</span>
\t\t<div class=\"clearfix\"></div>
\t\t<div class=\"item related-item\" style=\"background-image: url(./images/news/1.jpg);\">
\t\t\t<a href=\"news.html\">
\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t<span>Lorem ipsum</span>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</a>
\t\t</div>
\t\t<div class=\"item related-item\" style=\"background-image: url(./images/news/1.jpg);\">
\t\t\t<a href=\"news.html\">
\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t<span>Lorem ipsum</span>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</a>
\t\t</div>
\t\t<div class=\"item related-item\" style=\"background-image: url(./images/news/1.jpg);\">
\t\t\t<a href=\"news.html\">
\t\t\t\t<div class=\"overlay\">
\t\t\t\t\t<div class=\"title\">
\t\t\t\t\t\t<span>Lorem ipsum</span>
\t\t\t\t\t</div>\t\t\t\t\t
\t\t\t\t</div>
\t\t\t</a>
\t\t</div>
\t\t<div class=\"clearfix\"></div>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "news.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  31 => 3,  28 => 2,  11 => 1,);
    }

    public function getSource()
    {
        return "";
    }
}
