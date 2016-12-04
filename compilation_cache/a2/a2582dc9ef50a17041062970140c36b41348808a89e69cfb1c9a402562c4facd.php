<?php

/* contacts.html */
class __TwigTemplate_014ed19fe2bca296e9a2117b7f2750cc5919a68e348d78ef2534c59ed27ba3b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html", "contacts.html", 1);
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
\t<p class=\"about\">Контакти Damage Records</p>
\t<p>Якщо ви хочете зв'язатися з нами, ви можете використати форму нижче. Заповніть його повністю і натисніть кнопку Надіслати. Ми намагаємося читати кожен лист електронної пошти, що відправляється нам, і відповідаємо на більшість з них. Конкретні питання, більш імовірно, отримають відповідь швидше, ніж загальні питання.</p>
\t<div class=\"contact-form\">
\t\t<form action=\"#\" method=\"POST\">
\t\t\t<input type=\"text\" name=\"first-name\" placeholder=\"Ім'я\">
\t\t\t<input type=\"text\" name=\"second-name\" placeholder=\"Прізвище\">
\t\t\t<input type=\"email\" name=\"email\" placeholder=\"E-Mail\">
\t\t\t<textarea name=\"message\" cols=\"30\" rows=\"10\" placeholder=\"Повідомлення\"></textarea>
\t\t\t<button type=\"submit\">Відправити</button>
\t\t</form>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "contacts.html";
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
