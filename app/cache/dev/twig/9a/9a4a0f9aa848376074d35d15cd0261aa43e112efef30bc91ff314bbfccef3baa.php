<?php

/* CoreContactBundle:Contact:index.html.twig */
class __TwigTemplate_d2c827c0aaef0e994209c893e9cb21683f2adb850b822217bb72cf922162d7a5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreCoreBundle:Core:layout.html.twig", "CoreContactBundle:Contact:index.html.twig", 1);
        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreCoreBundle:Core:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38f3f74ef0782f46cab68073a2af7726782e3e34234da41e01a14d4bbcb734f4 = $this->env->getExtension("native_profiler");
        $__internal_38f3f74ef0782f46cab68073a2af7726782e3e34234da41e01a14d4bbcb734f4->enter($__internal_38f3f74ef0782f46cab68073a2af7726782e3e34234da41e01a14d4bbcb734f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreContactBundle:Contact:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38f3f74ef0782f46cab68073a2af7726782e3e34234da41e01a14d4bbcb734f4->leave($__internal_38f3f74ef0782f46cab68073a2af7726782e3e34234da41e01a14d4bbcb734f4_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_d3d0cf69684ab40202399971346fd4840dc3509806cf711f0e441293b4d60602 = $this->env->getExtension("native_profiler");
        $__internal_d3d0cf69684ab40202399971346fd4840dc3509806cf711f0e441293b4d60602->enter($__internal_d3d0cf69684ab40202399971346fd4840dc3509806cf711f0e441293b4d60602_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "<p>CONTACT A remplir avec les liens de redirection </p>
    ";
        
        $__internal_d3d0cf69684ab40202399971346fd4840dc3509806cf711f0e441293b4d60602->leave($__internal_d3d0cf69684ab40202399971346fd4840dc3509806cf711f0e441293b4d60602_prof);

    }

    public function getTemplateName()
    {
        return "CoreContactBundle:Contact:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "CoreCoreBundle:Core:layout.html.twig" %}*/
/* {% block nav %}*/
/* <p>CONTACT A remplir avec les liens de redirection </p>*/
/*     {% endblock %}*/
/* */
/* */
