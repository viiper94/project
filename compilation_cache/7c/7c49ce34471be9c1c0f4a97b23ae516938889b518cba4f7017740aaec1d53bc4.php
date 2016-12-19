<?php

/* school.html */
class __TwigTemplate_eb8951a8e06d1863e8965a004f02d8b6d8fe8999f08880e0247e87cb33a0680d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("index.html", "school.html", 1);
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
        echo "<div class=\"release-container\">
\t<div class=\"info\">
        <h3 class=\"school-header\" id=\"about\">ПРО КУРСИ</h3>
        <p>«Damage School» — музична школа в центрі Києва, в 5-ти хвилинах ходьби від метро. У 2010-му році команда високопрофесійних музикантів заснувала центр «Damage School», який займається навчанням вокальній майстерності, і грі на таких музичних інструментах, як скрипка, фортепіано і гітара.p>
        <p>Ми щодня вигострюємо і опрацьовуємо власні навички та знання, при цьому показуємо учням краще, що можемо. Головне достоїнство нашої школи - це індивідуальний підхід до кожного учня! Ми старанно передаємо напрацьовані навички і знання, при цьому добиваємося максимальної результативності. Лише цілісна самовіддача супроводжується успіхом. Наші зусилля не проходять даром - щомісяця ми стаємо приблизно на 300 годин досвідченішим.</p>
        <p>Однак це ще не все - наше навчання не поставлено на потік. Ми вбачаємо в учня, в першу чергу, особистість, яка звернулася до нас за допомогою в отриманні нових навичок, знань і насичених емоції.</p>
        <p>Двері школи «Damage School» відкриті для всіх, незалежно від вікової категорії або рівня підготовки. Ми з радістю возьем вас на навчання, якщо ви пообіцяєте, що добре потрудіться. Однак, музичний світ чудовий, і він стоїть таких зусиль і тимчасових витрат.</p>
    </div>
    <div class=\"equipment\">
        <h3 class=\"school-header\" id=\"equipment\">ОБЛАДНАННЯ</h3>
        <div class=\"col-md-6\">
            <div class=\"row text-center\">
                <h4>HARDWARE</h4>
                <ul class=\"school-list hardware\">
                    <li>Комп'ютери:<br>Mac Pro 2x2,8 Quad-Core QX<br>Mac Pro 2x2,66 QX<br>Mac Book Pro 2,66 QX</li>
                    <li>Pro Tools HD 3 Accel Digidesign 192 I/O</li>
                    <li>Мікрофон:<br>Neuman M 149</li>
                    <li>Попередній підсилювач:<br>Millenia STT-1</li>
                    <li>Компресори:<br>SSL<br>ART PRO VLA II</li>
                    <li>Сумуючі мікшери:<br>AMS NEVE 8816</li>
                    <li>Контрольні монітори:<br>Dynaudio BM 15A<br>Genelec 8040 A<br>Dynaudio DBM 50</li>
                    <li>Студійні монітори:<br>MAKIE Big knob</li>
                    <li>Miditerminal<br>M4U ESI<br>M-Audio Ozonic<br>Digidesign M-BOX 2<br>RME Fireface 400</li>
                    <li>Синтезатори:<br>Moog SUB 37 Tribute Edition<br>Virus TI Access<br>Korg EMX-1</li>
                    <li>Процесори вокальних ефектів:<br>DigiTech<br>Korg Kaoss Pad</li>
                    <li>Ліцензійні софт-синтезатори, плагіни</li>
                </ul>
            </div>
        </div>
        <div class=\"col-md-6\">
            <div class=\"row text-center\">
                <h4>SOFTWARE</h4>
                <ul class=\"school-list software\">
                    <li>Propellerheads REASON</li>
                    <li>Ableton LIVE</li>
                    <li>Digidesign PRO TOOLS</li>
                    <li>Apple LOGIC PRO</li>
                    <li>Presonus STUDIO ONE</li>
                    <li>Steinberg NUENDO</li>
                </ul>
            </div>
        </div>
        <div class=\"clearfix\"></div>
    </div>
    <div class=\"prices\">
        <h3 class=\"school-header\" id=\"prices\">ЦІНИ</h3>
        <div class=\"col-md-4\"><a href=\"mailto:viiper94@gmail.com?subject=Навчання в школі\"><img
                src=\"/assets/img/prices-1.jpg\"></a></div>
        <div class=\"col-md-4\"><a href=\"mailto:viiper94@gmail.com?subject=Навчання в школі\"><img
                src=\"/assets/img/prices-2.jpg\"></a></div>
        <div class=\"col-md-4\"><a href=\"mailto:viiper94@gmail.com?subject=Навчання в школі\"><img
                src=\"/assets/img/prices-3.jpg\"></a></div>
        <div class=\"col-md-4\"><a href=\"mailto:viiper94@gmail.com?subject=Навчання в школі\"><img
                src=\"/assets/img/prices-4.jpg\"></a></div>
        <div class=\"col-md-4\"><a href=\"mailto:viiper94@gmail.com?subject=Навчання в школі\"><img
                src=\"/assets/img/prices-5.jpg\"></a></div>
        <div class=\"col-md-4\"><a href=\"mailto:viiper94@gmail.com?subject=Навчання в школі\"><img
                src=\"/assets/img/prices-6.jpg\"></a></div>
    </div>
    <div class=\"clearfix\"></div>
    <div class=\"contact\">
        <h3 class=\"school-header\" id=\"contact\">ЗВ'ЯЗАТИСЯ З НАМИ</h3>
        <p>Якщо ви хочете зв'язатися з нами, ви можете використати форму нижче. Заповніть його повністю і натисніть кнопку Надіслати. Ми намагаємося читати кожен лист електронної пошти, що відправляється нам, і відповідаємо на більшість з них. Конкретні питання, більш імовірно, отримають відповідь швидше, ніж загальні питання.</p>
        <div class=\"contact-form\">
            <form action=\"#\" method=\"POST\">
                <input type=\"text\" name=\"first-name\" placeholder=\"Ім'я\">
                <input type=\"text\" name=\"second-name\" placeholder=\"Прізвище\">
                <input type=\"email\" name=\"email\" placeholder=\"E-Mail\">
                <textarea name=\"message\" cols=\"30\" rows=\"10\" placeholder=\"Повідомлення\"></textarea>
                <button type=\"submit\">Відправити</button>
            </form>
        </div>
    </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "school.html";
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
