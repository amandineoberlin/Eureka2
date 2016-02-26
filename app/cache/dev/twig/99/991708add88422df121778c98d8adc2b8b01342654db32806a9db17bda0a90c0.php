<?php

/* IntranetPlatformBundle:Main:show.html.twig */
class __TwigTemplate_0983a5fcfcc5de2ec3431e49ffcc56cb39ac7ff0fafec036aaed0541cb119133 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IntranetPlatformBundle::layout.html.twig", "IntranetPlatformBundle:Main:show.html.twig", 1);
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
        $__internal_3bf1b1023adb98372ed1e8b7b5cc2db8ef6fbc380b0919033d586770c78c3c37 = $this->env->getExtension("native_profiler");
        $__internal_3bf1b1023adb98372ed1e8b7b5cc2db8ef6fbc380b0919033d586770c78c3c37->enter($__internal_3bf1b1023adb98372ed1e8b7b5cc2db8ef6fbc380b0919033d586770c78c3c37_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IntranetPlatformBundle:Main:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3bf1b1023adb98372ed1e8b7b5cc2db8ef6fbc380b0919033d586770c78c3c37->leave($__internal_3bf1b1023adb98372ed1e8b7b5cc2db8ef6fbc380b0919033d586770c78c3c37_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_973e253898d304ce925fe275f1f7a70875f51d70422fda137a45438fe24f43fe = $this->env->getExtension("native_profiler");
        $__internal_973e253898d304ce925fe275f1f7a70875f51d70422fda137a45438fe24f43fe->enter($__internal_973e253898d304ce925fe275f1f7a70875f51d70422fda137a45438fe24f43fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <td><button type=\"button\" class=\"btn btn-default\">Voir la demande</button></td>
                    <td><button type=\"button\" class=\"btn btn-warning\">Modifier</button></td>
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
        
        $__internal_973e253898d304ce925fe275f1f7a70875f51d70422fda137a45438fe24f43fe->leave($__internal_973e253898d304ce925fe275f1f7a70875f51d70422fda137a45438fe24f43fe_prof);

    }

    public function getTemplateName()
    {
        return "IntranetPlatformBundle:Main:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  86 => 27,  73 => 20,  69 => 19,  65 => 18,  61 => 17,  58 => 16,  54 => 15,  40 => 3,  34 => 2,  11 => 1,);
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
/*                     <td><button type="button" class="btn btn-default">Voir la demande</button></td>*/
/*                     <td><button type="button" class="btn btn-warning">Modifier</button></td>*/
/*                     <td><button type="button" class="btn btn-danger">Supprimer</button></td>*/
/* */
/*         </tr>*/
/*     {% endfor %}*/
/* </tbody>*/
/* */
/* {% endblock %}*/
