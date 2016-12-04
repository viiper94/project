<?php

/* about.html */
class __TwigTemplate_ce5986ba6207335879a49147873a3ab6a02d3a6759ed518cf62df4b4712b0f20 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html", "about.html", 1);
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
\t<p class=\"about\">Про Damage Records</p>
\t<article>
\tDamage Records - лейбл, заснований в 1992 році в Вестмінстері, штат Каліфорнія, і підписує виконавців переважно поп-панку та альтернативного року. Дистриб'ютором релізів, випущених на лейблі Damage Records, на національному рівні є компанія RED Distribution. Damage Records відомий перш за все завдяки випуску ранніх записів груп панк-року і поп-панку в збірниках Punk Bites і Damage Flush Sampler 1996 і 1997 року відповідно, а також ранніх альбомів Bigwig, Dynamite Boy і більш пізніх - Sugarcult , Plain White T's, The Aquabats і At the Drive-In [5]. Останнім часом лейблом були також підписані пост-хардкор і емо-групи: A Static Lullaby, Rock Kills Kid, Mayday Parade, Alesana.<br>
\tБоб Беккер почав Damage Records, коли він видавав своїх друзів тако на їх шоу. Він також хотів би перейти до запису магазинів і покласти свої записи на вантаж. Назва лейбл прийшла від Боба, не знаючи, що він робив у той час і \"не боячись стрибнути в голову в першу чергу.\" Безстрашний записів була офіційно сформована в 1994 році. <br>
\tУ 2000 році Damage Records випустили Punk Goes Metal, перша збірка з Punk Goes ... серії. З тих пір Punk Goes ... серія розширилася. Він включав шість Punk Goes Pop-релізів, два Punk Goes акустичні релізи, Punk Goes 80-х і 90-х, панк йде Crunk, Punk Goes Classic Rock і Punk Goes X, який показує кавер-версії пісень, які були представлені в 2011 Winter X Games. Punk Goes Pop 5 був випущений 6 листопада 2012 року на 1 січня 2014 року, Damage звіти випустила відео на своїй сторінці на YouTube оголошуючи групи, які будуть випускати альбоми в 2014 році, а також оголосили збірник безстрашним Records \"Панка Йде 90-2. <br>
\tУ 2005 році Damage Records випустили студійний альбом Все, що нам потрібно від Plain White T'S, колекція тринадцять пісень, яка виявилася проривом як для лейбла і Іллінойс основі групи. \"Гей Там Delilah,\" сингл з цього альбому, досяг № 1 на Billboard Hot 100, став успішним для лейбла і був сертифікований як мультиплатинового Сингл. <br>
\t8 листопада 2010 року Damage оголосила про випуск різдвяною тематикою збірник, що одержав назву 'Це сезон, щоб бути безстрашним. Він виступатиме вісім з підписаних артистів оригінальних пісень. Альбом був доступний для попереднього замовлення на ITunes в той же день, і був випущений 22 листопада 2010 три роки по тому, Damage Records випустила Punk Goes Різдво показуючи оригінальні і кавер-треки з All Time Low, питання, New Found Glory, і багато іншого. <br>
\tУ 2011 році Damage Records випустила Дихайте Кароліни альбом Hell Is What You Make It. \"Blackout\" сингл з альбому, став ще одним успіхом для лейбла. Він дебютував під номером 32 на Billboard Hot 100 і був сертифікований як золотий сингл. <br>
\tУ жовтні 2012 року Damage звіти оголосили, що вони запустили лейбл сестра під назвою \"Old Friends Records,\" який буде підписувати більш інді-рок-артистів, включаючи Hellogoodbye. У листопаді 2013 року, Damage звіти оголосили другий лейбл відбиток під назвою \"Outerloop Records,\" разом з їх першого підпису Ice Nine Kills. <br>
\tЕтикетка з бек-каталогом близько 150 альбомів був придбаний Concord велосипедний музики в травні 2015 року з орієнтовною \$ 10 млн.
\t</article>
\t<div class=\"popup\">
\t\t<p><a data-target=\"#collapsable\" data-toggle=\"collapse\" aria-expanded=\"false\" href=\"#subscribe\">Підписатися на новини Damage Records</a></p>
\t\t<form action=\"#\" id=\"collapsable\" method=\"POST\" name=\"subscribe-email\" class=\"collapse\">
\t\t\t<input name=\"name\" required type=\"text\" class=\"popup-form form-control\" placeholder=\"Ім'я\">
\t\t\t<input name=\"email\" required type=\"email\" class=\"popup-form form-control\" placeholder=\"E-Mail\">
\t\t\t<input type=\"submit\" value=\"Підписатися!\" class=\"popup-form btn\" style=\"vertical-align: top;\">
\t\t</form>
\t</div>
</div>
";
    }

    public function getTemplateName()
    {
        return "about.html";
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
