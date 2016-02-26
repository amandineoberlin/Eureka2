<?php

/* IntranetPlatformBundle:Main:showOne.html.twig */
class __TwigTemplate_c15f5e5944c3ed15675068d7955dde7cec25f5fe6d29fa51e73e97358ebe5986 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IntranetPlatformBundle::layout.html.twig", "IntranetPlatformBundle:Main:showOne.html.twig", 1);
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
        $__internal_2b5e5825f324c5a40657f43722bc6cfd1560479c39840651b2f6f83c35f05817 = $this->env->getExtension("native_profiler");
        $__internal_2b5e5825f324c5a40657f43722bc6cfd1560479c39840651b2f6f83c35f05817->enter($__internal_2b5e5825f324c5a40657f43722bc6cfd1560479c39840651b2f6f83c35f05817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IntranetPlatformBundle:Main:showOne.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2b5e5825f324c5a40657f43722bc6cfd1560479c39840651b2f6f83c35f05817->leave($__internal_2b5e5825f324c5a40657f43722bc6cfd1560479c39840651b2f6f83c35f05817_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_6746ce461b73797098965f39afc4f0035c3a27dc1ee497615d83cc9587d1254a = $this->env->getExtension("native_profiler");
        $__internal_6746ce461b73797098965f39afc4f0035c3a27dc1ee497615d83cc9587d1254a->enter($__internal_6746ce461b73797098965f39afc4f0035c3a27dc1ee497615d83cc9587d1254a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <table class=\"table\">
        <h4>Ma demande ID: ";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["maDemande"]) ? $context["maDemande"] : $this->getContext($context, "maDemande")), "id", array()), "html", null, true);
        echo "</h4>
        <thead>
            <tr>
                <th>Champs</th>
                <th>Valeur</th>
            </tr>
        </thead>
        <tbody>  

            <tr class=\"warning\">
                <td>Description : </td>
                <td>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["maDemande"]) ? $context["maDemande"] : $this->getContext($context, "maDemande")), "description", array()), "html", null, true);
        echo "</td>
            </tr>
            <tr class=\"warning\">
                <td>Date de début : </td>
                <td>";
        // line 20
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["maDemande"]) ? $context["maDemande"] : $this->getContext($context, "maDemande")), "dateDebut", array()), "Y-m-d"), "html", null, true);
        echo "</td>
            </tr>
            <tr class=\"warning\">
                <td>Date de fin : </td>
                <td>";
        // line 24
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute((isset($context["maDemande"]) ? $context["maDemande"] : $this->getContext($context, "maDemande")), "dateFin", array()), "Y-m-d"), "html", null, true);
        echo "</td>
            </tr>
        <a href=\"";
        // line 26
        echo $this->env->getExtension('routing')->getPath("intranet_voir-mes-demandes");
        echo "\" class=\"btn btn-info btn-large\"><i class=\"icon-white icon-heart\"></i>Retour à la liste</a>

    </tbody>

";
        
        $__internal_6746ce461b73797098965f39afc4f0035c3a27dc1ee497615d83cc9587d1254a->leave($__internal_6746ce461b73797098965f39afc4f0035c3a27dc1ee497615d83cc9587d1254a_prof);

    }

    public function getTemplateName()
    {
        return "IntranetPlatformBundle:Main:showOne.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  77 => 26,  72 => 24,  65 => 20,  58 => 16,  44 => 5,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "IntranetPlatformBundle::layout.html.twig" %}*/
/* {% block body %}*/
/* */
/*     <table class="table">*/
/*         <h4>Ma demande ID: {{ maDemande.id }}</h4>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>Champs</th>*/
/*                 <th>Valeur</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>  */
/* */
/*             <tr class="warning">*/
/*                 <td>Description : </td>*/
/*                 <td>{{ maDemande.description }}</td>*/
/*             </tr>*/
/*             <tr class="warning">*/
/*                 <td>Date de début : </td>*/
/*                 <td>{{ maDemande.dateDebut|date('Y-m-d') }}</td>*/
/*             </tr>*/
/*             <tr class="warning">*/
/*                 <td>Date de fin : </td>*/
/*                 <td>{{ maDemande.dateFin|date('Y-m-d') }}</td>*/
/*             </tr>*/
/*         <a href="{{ path("intranet_voir-mes-demandes") }}" class="btn btn-info btn-large"><i class="icon-white icon-heart"></i>Retour à la liste</a>*/
/* */
/*     </tbody>*/
/* */
/* {% endblock %}*/
