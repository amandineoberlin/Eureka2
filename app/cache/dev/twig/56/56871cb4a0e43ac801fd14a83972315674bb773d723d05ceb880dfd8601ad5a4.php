<?php

/* CoreAccueilBundle:Accueil:index.html.twig */
class __TwigTemplate_56b6f691c405d655a2fdce45956186c77bf400c639dce9103d7d6b2bb4f3d68d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreCoreBundle:Core:layout.html.twig", "CoreAccueilBundle:Accueil:index.html.twig", 1);
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
        $__internal_d367eb81644437e60ca1d82d5211374baed3bede7cee27130db48a9d5353939d = $this->env->getExtension("native_profiler");
        $__internal_d367eb81644437e60ca1d82d5211374baed3bede7cee27130db48a9d5353939d->enter($__internal_d367eb81644437e60ca1d82d5211374baed3bede7cee27130db48a9d5353939d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreAccueilBundle:Accueil:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d367eb81644437e60ca1d82d5211374baed3bede7cee27130db48a9d5353939d->leave($__internal_d367eb81644437e60ca1d82d5211374baed3bede7cee27130db48a9d5353939d_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_8cd26d92751878a98656c3274a01eed557166725e5d7340ae58b38b0ea33a096 = $this->env->getExtension("native_profiler");
        $__internal_8cd26d92751878a98656c3274a01eed557166725e5d7340ae58b38b0ea33a096->enter($__internal_8cd26d92751878a98656c3274a01eed557166725e5d7340ae58b38b0ea33a096_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "    <p>ACCUEIL Vous pouvez trouver des informations sur notre site 
        <a href=\"http://ssci-kalliste.fr/\">SSCI Kalliste</a></p>
    
    <a href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getUrl("contact_homepage");
        echo "\">try my route</a></p>


 
    ";
        
        $__internal_8cd26d92751878a98656c3274a01eed557166725e5d7340ae58b38b0ea33a096->leave($__internal_8cd26d92751878a98656c3274a01eed557166725e5d7340ae58b38b0ea33a096_prof);

    }

    public function getTemplateName()
    {
        return "CoreAccueilBundle:Accueil:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "CoreCoreBundle:Core:layout.html.twig" %}*/
/* {% block nav %}*/
/*     <p>ACCUEIL Vous pouvez trouver des informations sur notre site */
/*         <a href="http://ssci-kalliste.fr/">SSCI Kalliste</a></p>*/
/*     */
/*     <a href="{{ url('contact_homepage') }}">try my route</a></p>*/
/* */
/* */
/*  */
/*     {% endblock %}*/
/* */
/* */
