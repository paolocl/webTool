<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_dd80082ad06a16cee4938195f06c774110b44df7e4f573df43f526564fa8b739 extends Twig_Template
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
        $__internal_44d5f269ab6efaf2540c2e4a9870aa56823167e3a6488c807e7c39485dc947ac = $this->env->getExtension("native_profiler");
        $__internal_44d5f269ab6efaf2540c2e4a9870aa56823167e3a6488c807e7c39485dc947ac->enter($__internal_44d5f269ab6efaf2540c2e4a9870aa56823167e3a6488c807e7c39485dc947ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_44d5f269ab6efaf2540c2e4a9870aa56823167e3a6488c807e7c39485dc947ac->leave($__internal_44d5f269ab6efaf2540c2e4a9870aa56823167e3a6488c807e7c39485dc947ac_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
