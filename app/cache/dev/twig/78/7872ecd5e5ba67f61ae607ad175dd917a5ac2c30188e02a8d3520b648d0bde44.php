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
        $__internal_35660a02bed508c5cb7f740b83a489a291b8440d0674704dd2160217dcb61ea1 = $this->env->getExtension("native_profiler");
        $__internal_35660a02bed508c5cb7f740b83a489a291b8440d0674704dd2160217dcb61ea1->enter($__internal_35660a02bed508c5cb7f740b83a489a291b8440d0674704dd2160217dcb61ea1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IntranetPlatformBundle:Main:showAll.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_35660a02bed508c5cb7f740b83a489a291b8440d0674704dd2160217dcb61ea1->leave($__internal_35660a02bed508c5cb7f740b83a489a291b8440d0674704dd2160217dcb61ea1_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_19929d34e3d6bb5695fab1137ad9e70994711e5ab708ea8ce369b4c6747e4330 = $this->env->getExtension("native_profiler");
        $__internal_19929d34e3d6bb5695fab1137ad9e70994711e5ab708ea8ce369b4c6747e4330->enter($__internal_19929d34e3d6bb5695fab1137ad9e70994711e5ab708ea8ce369b4c6747e4330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
                    <td class=\"content\" >";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["demandes"], "id", array()), "html", null, true);
            echo "</td>
                    <td class=\"content\" >";
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
                    <td><a id=\"description\" type=\"button\" class=\"btn btn-default\">Description</a></td>
                    <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_voir-ma-demande", array("id" => $this->getAttribute($context["demandes"], "id", array()))), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-primary\">Voir la demande</a></td>
                    <td><a href=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_modifier-ma-demande", array("id" => $this->getAttribute($context["demandes"], "id", array()))), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-warning\">Modifier</a></td>
                    <td><a href=\"";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("intranet_supprimer-ma-demande", array("id" => $this->getAttribute($context["demandes"], "id", array()))), "html", null, true);
            echo "\" type=\"button\" class=\"btn btn-danger\">Supprimer</a></td>

        </tr>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['demandes'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "</tbody>

<div id=\"dialog\">
    <h1>amandine</h1>
</div>
";
        
        $__internal_19929d34e3d6bb5695fab1137ad9e70994711e5ab708ea8ce369b4c6747e4330->leave($__internal_19929d34e3d6bb5695fab1137ad9e70994711e5ab708ea8ce369b4c6747e4330_prof);

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
        return array (  96 => 28,  86 => 24,  82 => 23,  78 => 22,  73 => 20,  69 => 19,  65 => 18,  61 => 17,  58 => 16,  54 => 15,  40 => 3,  34 => 2,  11 => 1,);
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
/*                     <td class="content" >{{ demandes.id }}</td>*/
/*                     <td class="content" >{{ demandes.dateDebut|date('Y-m-d') }}</td>*/
/*                     <td>{{ demandes.dateFin|date('Y-m-d') }}</td>*/
/*                     <td>{{ demandes.description }}</td>*/
/*                     <td><a id="description" type="button" class="btn btn-default">Description</a></td>*/
/*                     <td><a href="{{ path('intranet_voir-ma-demande', { 'id' : demandes.id }) }}" type="button" class="btn btn-primary">Voir la demande</a></td>*/
/*                     <td><a href="{{ path('intranet_modifier-ma-demande', { 'id' : demandes.id }) }}" type="button" class="btn btn-warning">Modifier</a></td>*/
/*                     <td><a href="{{ path('intranet_supprimer-ma-demande', { 'id' : demandes.id }) }}" type="button" class="btn btn-danger">Supprimer</a></td>*/
/* */
/*         </tr>*/
/*     {% endfor %}*/
/* </tbody>*/
/* */
/* <div id="dialog">*/
/*     <h1>amandine</h1>*/
/* </div>*/
/* {% endblock %}*/
