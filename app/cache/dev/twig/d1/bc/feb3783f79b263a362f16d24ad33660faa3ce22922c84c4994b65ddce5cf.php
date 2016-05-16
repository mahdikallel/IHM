<?php

/* AcmeChampionatBundle:Saison:show.html.twig */
class __TwigTemplate_d1bcfeb3783f79b263a362f16d24ad33660faa3ce22922c84c4994b65ddce5cf extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "<h1>Saison</h1>

    <table class=\"record_properties\">
        <tbody>
            <tr>
                <th>Datedebut</th>
                <td>";
        // line 10
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateDebut"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Datefin</th>
                <td>";
        // line 14
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "dateFin"), "Y-m-d H:i:s"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Libelle</th>
                <td>";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "libelle"), "html", null, true);
        echo "</td>
            </tr>
            <tr>
                <th>Id</th>
                <td>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"), "html", null, true);
        echo "</td>
            </tr>
        </tbody>
    </table>

        <ul class=\"record_actions\">
    <li>
        <a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getPath("saison");
        echo "\">
            Back to the list
        </a>
    </li>
    <li>
        <a href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("saison_edit", array("id" => $this->getAttribute((isset($context["entity"]) ? $context["entity"] : $this->getContext($context, "entity")), "id"))), "html", null, true);
        echo "\">
            Edit
        </a>
    </li>
    <li>";
        // line 38
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["delete_form"]) ? $context["delete_form"] : $this->getContext($context, "delete_form")), 'form');
        echo "</li>
</ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeChampionatBundle:Saison:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 72,  124 => 54,  81 => 37,  114 => 56,  90 => 34,  77 => 36,  110 => 54,  76 => 21,  104 => 37,  100 => 43,  84 => 28,  70 => 29,  53 => 18,  65 => 19,  58 => 20,  276 => 132,  271 => 130,  267 => 129,  263 => 128,  255 => 126,  251 => 111,  248 => 110,  244 => 106,  232 => 95,  226 => 91,  223 => 90,  218 => 87,  211 => 82,  205 => 16,  194 => 11,  190 => 10,  185 => 78,  180 => 7,  165 => 68,  118 => 45,  113 => 50,  34 => 5,  480 => 162,  474 => 161,  469 => 158,  461 => 155,  457 => 153,  453 => 151,  444 => 149,  440 => 148,  437 => 147,  435 => 146,  430 => 144,  427 => 143,  423 => 142,  413 => 134,  409 => 132,  407 => 131,  402 => 130,  398 => 129,  393 => 126,  387 => 122,  384 => 121,  381 => 120,  379 => 119,  374 => 116,  368 => 112,  365 => 111,  362 => 110,  360 => 109,  355 => 106,  341 => 105,  337 => 103,  322 => 101,  314 => 99,  312 => 98,  309 => 97,  305 => 95,  298 => 91,  294 => 90,  285 => 89,  283 => 88,  278 => 86,  268 => 85,  264 => 84,  258 => 127,  252 => 80,  247 => 78,  241 => 105,  229 => 73,  220 => 70,  214 => 83,  177 => 6,  169 => 60,  140 => 107,  132 => 51,  128 => 95,  107 => 52,  61 => 21,  273 => 96,  269 => 94,  254 => 92,  243 => 88,  240 => 86,  238 => 85,  235 => 96,  230 => 82,  227 => 81,  224 => 71,  221 => 77,  219 => 76,  217 => 75,  208 => 68,  204 => 72,  179 => 69,  159 => 67,  143 => 56,  135 => 53,  119 => 42,  102 => 37,  71 => 30,  67 => 22,  63 => 19,  59 => 18,  38 => 9,  94 => 42,  89 => 34,  85 => 38,  75 => 17,  68 => 14,  56 => 21,  87 => 38,  21 => 2,  26 => 6,  93 => 36,  88 => 35,  78 => 34,  46 => 14,  27 => 4,  44 => 12,  31 => 4,  28 => 3,  201 => 15,  196 => 90,  183 => 82,  171 => 5,  166 => 71,  163 => 74,  158 => 67,  156 => 71,  151 => 63,  142 => 59,  138 => 105,  136 => 62,  121 => 46,  117 => 51,  105 => 47,  91 => 32,  62 => 18,  49 => 14,  24 => 4,  25 => 3,  19 => 1,  79 => 30,  72 => 28,  69 => 25,  47 => 9,  40 => 9,  37 => 10,  22 => 2,  246 => 90,  157 => 56,  145 => 110,  139 => 58,  131 => 52,  123 => 53,  120 => 52,  115 => 49,  111 => 41,  108 => 40,  101 => 32,  98 => 31,  96 => 38,  83 => 33,  74 => 35,  66 => 27,  55 => 24,  52 => 19,  50 => 10,  43 => 12,  41 => 10,  35 => 6,  32 => 4,  29 => 3,  209 => 82,  203 => 78,  199 => 67,  193 => 73,  189 => 71,  187 => 84,  182 => 77,  176 => 64,  173 => 65,  168 => 72,  164 => 59,  162 => 57,  154 => 58,  149 => 63,  147 => 112,  144 => 49,  141 => 48,  133 => 57,  130 => 99,  125 => 94,  122 => 43,  116 => 41,  112 => 42,  109 => 48,  106 => 36,  103 => 42,  99 => 40,  95 => 28,  92 => 21,  86 => 40,  82 => 31,  80 => 19,  73 => 23,  64 => 26,  60 => 22,  57 => 23,  54 => 22,  51 => 14,  48 => 13,  45 => 11,  42 => 10,  39 => 10,  36 => 5,  33 => 3,  30 => 2,);
    }
}
