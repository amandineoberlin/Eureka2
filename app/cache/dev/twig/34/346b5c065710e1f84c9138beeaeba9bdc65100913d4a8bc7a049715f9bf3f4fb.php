<?php

/* IntranetPlatformBundle:Main:accueil.html.twig */
class __TwigTemplate_06631530ba4e266f62fa419a5f82dee6f1af05203604a413ddb61f5cb5b95c99 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IntranetPlatformBundle::layout.html.twig", "IntranetPlatformBundle:Main:accueil.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IntranetPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0c8d0ded040f4acf8a62f56b9fbfb9209584433776a1dbc58faa0e942e2a0c0 = $this->env->getExtension("native_profiler");
        $__internal_c0c8d0ded040f4acf8a62f56b9fbfb9209584433776a1dbc58faa0e942e2a0c0->enter($__internal_c0c8d0ded040f4acf8a62f56b9fbfb9209584433776a1dbc58faa0e942e2a0c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IntranetPlatformBundle:Main:accueil.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0c8d0ded040f4acf8a62f56b9fbfb9209584433776a1dbc58faa0e942e2a0c0->leave($__internal_c0c8d0ded040f4acf8a62f56b9fbfb9209584433776a1dbc58faa0e942e2a0c0_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_a6fb1bb7f4a6f9a76a36aff461b9478689485700da8c88c56fade65074597476 = $this->env->getExtension("native_profiler");
        $__internal_a6fb1bb7f4a6f9a76a36aff461b9478689485700da8c88c56fade65074597476->enter($__internal_a6fb1bb7f4a6f9a76a36aff461b9478689485700da8c88c56fade65074597476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <p>Bonjour ";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_join_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "roles", array()), ", "), "html", null, true);
        echo " </p>
    
";
        
        $__internal_a6fb1bb7f4a6f9a76a36aff461b9478689485700da8c88c56fade65074597476->leave($__internal_a6fb1bb7f4a6f9a76a36aff461b9478689485700da8c88c56fade65074597476_prof);

    }

    public function getTemplateName()
    {
        return "IntranetPlatformBundle:Main:accueil.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  43 => 4,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "IntranetPlatformBundle::layout.html.twig" %}*/
/* {% block body %}*/
/* */
/*     <p>Bonjour {{ app.user.username }} {{ app.user.roles|join(', ')  }} </p>*/
/*     */
/* {% endblock %}*/
