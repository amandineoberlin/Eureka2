<?php

/* IntranetPlatformBundle:Main:showAll.html.twig */
class __TwigTemplate_bfca4f3c194776b753c3a2ad33ef774b75b21ef7f10564942e6b76ccb3b2387e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IntranetPlatformBundle::layout.html.twig", "IntranetPlatformBundle:Main:showAll.html.twig", 1);
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
        $__internal_d4ab54819bd3777dd39aefd33654ee456c821cfbc97070e84fd4c90aeac99cad = $this->env->getExtension("native_profiler");
        $__internal_d4ab54819bd3777dd39aefd33654ee456c821cfbc97070e84fd4c90aeac99cad->enter($__internal_d4ab54819bd3777dd39aefd33654ee456c821cfbc97070e84fd4c90aeac99cad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IntranetPlatformBundle:Main:showAll.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d4ab54819bd3777dd39aefd33654ee456c821cfbc97070e84fd4c90aeac99cad->leave($__internal_d4ab54819bd3777dd39aefd33654ee456c821cfbc97070e84fd4c90aeac99cad_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_f51c64939e37cb244f43c9545dc8bc2db04d498ae4cbb76096f971784641ac96 = $this->env->getExtension("native_profiler");
        $__internal_f51c64939e37cb244f43c9545dc8bc2db04d498ae4cbb76096f971784641ac96->enter($__internal_f51c64939e37cb244f43c9545dc8bc2db04d498ae4cbb76096f971784641ac96_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <table class=\"table\">
        <h4>Mes demandes</h4>
        <thead>
            <tr>
                <th>ID</th>
                <th>Date de Début</th>
                <th>Date de Fin</th>
                <th>Description</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 15
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($context["demandes"]);
        foreach ($context['_seq'] as $context["_key"] => $context["demandes"]) {
            // line 16
            echo "                <tr class=\"warning\">
                    <td>";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["demandes"], "id", array()), "html", null, true);
            echo "</td>
                    <td>";
            // line 18
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["demandes"], "dateDebut", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                    <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["demandes"], "dateFin", array()), "Y-m-d"), "html", null, true);
            echo "</td>
                    <td>";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["demandes"], "description", array()), "html", null, true);
            echo "</td>
                    <td><a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_voir-ma-demande", array("id" => $this->getAttribute($context["demandes"], "id", array()))), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-default\">Voir la demande</a></td>
                    <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_modifier-ma-demande", array("id" => $this->getAttribute($context["demandes"], "id", array()))), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-warning\">Modifier</a></td>
                    <td><button type=\"button\" class=\"btn btn-danger\">Supprimer</button></td>

        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demandes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "</tbody>

";
        
        $__internal_f51c64939e37cb244f43c9545dc8bc2db04d498ae4cbb76096f971784641ac96->leave($__internal_f51c64939e37cb244f43c9545dc8bc2db04d498ae4cbb76096f971784641ac96_prof);

    }

    public function getTemplateName()
    {
        return "IntranetPlatformBundle:Main:showAll.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 27,  81 => 22,  77 => 21,  73 => 20,  69 => 19,  65 => 18,  61 => 17,  58 => 16,  54 => 15,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "IntranetPlatformBundle::layout.html.twig" %}*/
/* {% block body %}*/
/* */
/*     <table class="table">*/
/*         <h4>Mes demandes</h4>*/
/*         <thead>*/
/*             <tr>*/
/*                 <th>ID</th>*/
/*                 <th>Date de Début</th>*/
/*                 <th>Date de Fin</th>*/
/*                 <th>Description</th>*/
/*             </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*             {% for demandes in demandes %}*/
/*                 <tr class="warning">*/
/*                     <td>{{ demandes.id }}</td>*/
/*                     <td>{{ demandes.dateDebut|date('Y-m-d') }}</td>*/
/*                     <td>{{ demandes.dateFin|date('Y-m-d') }}</td>*/
/*                     <td>{{ demandes.description }}</td>*/
/*                     <td><a href="{{ path('intranet_voir-ma-demande', { 'id' : demandes.id }) }}" type="button" class="btn btn-default">Voir la demande</a></td>*/
/*                     <td><a href="{{ path('intranet_modifier-ma-demande', { 'id' : demandes.id }) }}" type="button" class="btn btn-warning">Modifier</a></td>*/
/*                     <td><button type="button" class="btn btn-danger">Supprimer</button></td>*/
/* */
/*         </tr>*/
/*     {% endfor %}*/
/* </tbody>*/
/* */
/* {% endblock %}*/
