<?php

/* AppBundle:Default:index.html.twig */
class __TwigTemplate_835154baf3dd8c08f1e35f851c9f861d8baa52782a839ddc107645cd7641f298 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_504aabca60d022dbbd3774fcb61c42eef2cfb34abd116498b051ba4eac6f745e = $this->env->getExtension("native_profiler");
        $__internal_504aabca60d022dbbd3774fcb61c42eef2cfb34abd116498b051ba4eac6f745e->enter($__internal_504aabca60d022dbbd3774fcb61c42eef2cfb34abd116498b051ba4eac6f745e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "AppBundle:Default:index.html.twig"));

        // line 1
        echo "<body>
    <form action=\"";
        // line 2
        echo $this->env->getExtension('routing')->getUrl("page_speed_api_result");
        echo "\" method=\"post\">
        <input type=\"text\" name=\"url\">
        <input type=\"submit\">
    </form>

    ";
        // line 7
        if ((array_key_exists("dataMobile", $context) && array_key_exists("dataDesktop", $context))) {
            // line 8
            echo "        <h1>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["dataMobile"]) ? $context["dataMobile"] : $this->getContext($context, "dataMobile")), "id", array()), "html", null, true);
            echo "</h1>
        <p>Mobile : ";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["dataMobile"]) ? $context["dataMobile"] : $this->getContext($context, "dataMobile")), "ruleGroups", array()), "SPEED", array()), "score", array()), "html", null, true);
            echo "</p>
        <p>Desktop : ";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["dataDesktop"]) ? $context["dataDesktop"] : $this->getContext($context, "dataDesktop")), "ruleGroups", array()), "SPEED", array()), "score", array()), "html", null, true);
            echo "</p>
        <p>Locate : ";
            // line 11
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["dataDesktop"]) ? $context["dataDesktop"] : $this->getContext($context, "dataDesktop")), "formattedResults", array()), "locale", array()), "html", null, true);
            echo "</p>
        ";
            // line 13
            echo "        ";
            echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["dataMobile"]) ? $context["dataMobile"] : $this->getContext($context, "dataMobile")));
            echo "
        ";
            // line 14
            echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["dataDesktop"]) ? $context["dataDesktop"] : $this->getContext($context, "dataDesktop")));
            echo "
    ";
        }
        // line 16
        echo "
    ";
        // line 17
        if (array_key_exists("file", $context)) {
            // line 18
            echo "        ";
            echo $this->env->getExtension('dump')->dump($this->env, $context, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")));
            echo "
    ";
        }
        // line 20
        echo "</body>
";
        
        $__internal_504aabca60d022dbbd3774fcb61c42eef2cfb34abd116498b051ba4eac6f745e->leave($__internal_504aabca60d022dbbd3774fcb61c42eef2cfb34abd116498b051ba4eac6f745e_prof);

    }

    public function getTemplateName()
    {
        return "AppBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 20,  67 => 18,  65 => 17,  62 => 16,  57 => 14,  52 => 13,  48 => 11,  44 => 10,  40 => 9,  35 => 8,  33 => 7,  25 => 2,  22 => 1,);
    }
}
/* <body>*/
/*     <form action="{{ url('page_speed_api_result') }}" method="post">*/
/*         <input type="text" name="url">*/
/*         <input type="submit">*/
/*     </form>*/
/* */
/*     {% if dataMobile is defined and dataDesktop is defined %}*/
/*         <h1>{{ dataMobile.id }}</h1>*/
/*         <p>Mobile : {{ dataMobile.ruleGroups.SPEED.score }}</p>*/
/*         <p>Desktop : {{ dataDesktop.ruleGroups.SPEED.score }}</p>*/
/*         <p>Locate : {{ dataDesktop.formattedResults.locale }}</p>*/
/*         {#<img src="data:{{ dataDesktop.screenshot.mime_type }};base64,{{ dataDesktop.screenshot.data|replace({'_' : '/', '-' : '+'}) }}" width="{{ dataDesktop.screenshot.width }}" height="{{ dataDesktop.screenshot.height }}">#}*/
/*         {{ dump(dataMobile) }}*/
/*         {{ dump(dataDesktop) }}*/
/*     {% endif %}*/
/* */
/*     {% if file is defined %}*/
/*         {{ dump(file) }}*/
/*     {% endif %}*/
/* </body>*/
/* */
