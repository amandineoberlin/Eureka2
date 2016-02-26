<?php

/* IntranetPlatformBundle:Main:edit.html.twig */
class __TwigTemplate_8be56b19b832f0623c81b3c425189907ad0e00627d79b238565dfc7dce43cb68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IntranetPlatformBundle::layout.html.twig", "IntranetPlatformBundle:Main:edit.html.twig", 1);
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
        $__internal_317ab733a5902625d26d80989226d21767377f68892091537cef1a00d87cd942 = $this->env->getExtension("native_profiler");
        $__internal_317ab733a5902625d26d80989226d21767377f68892091537cef1a00d87cd942->enter($__internal_317ab733a5902625d26d80989226d21767377f68892091537cef1a00d87cd942_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IntranetPlatformBundle:Main:edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_317ab733a5902625d26d80989226d21767377f68892091537cef1a00d87cd942->leave($__internal_317ab733a5902625d26d80989226d21767377f68892091537cef1a00d87cd942_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_0e00a2e6eb9988bd09fb38c58b86a8ed408cb72f2ce78b1b68525409dd18a1d2 = $this->env->getExtension("native_profiler");
        $__internal_0e00a2e6eb9988bd09fb38c58b86a8ed408cb72f2ce78b1b68525409dd18a1d2->enter($__internal_0e00a2e6eb9988bd09fb38c58b86a8ed408cb72f2ce78b1b68525409dd18a1d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <h3>Modifier ma demande</h3>

    <div class=\"well\">
        ";
        // line 7
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("attr" => array("class" => "form-horizontal")));
        echo "

        ";
        // line 10
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'errors');
        echo "

        <div class=\"form-group\">
            ";
        // line 14
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebut", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Date de début"));
        echo "

            ";
        // line 17
        echo "            ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebut", array()), 'errors');
        echo "

            <div class=\"col-sm-4\">
                ";
        // line 21
        echo "                ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebut", array()), 'widget', array("attr" => array("type" => "text")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFin", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Date de fin"));
        echo "
            ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFin", array()), 'errors');
        echo "
            <div class=\"col-sm-4\">
                ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateFin", array()), 'widget', array("attr" => array("class" => "")));
        echo "
            </div>
        </div>

        <div class=\"form-group\">
            ";
        // line 34
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'label', array("label_attr" => array("class" => "col-sm-3 control-label"), "label" => "Description"));
        echo "
            ";
        // line 35
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'errors');
        echo "
            <div class=\"col-sm-4\">
                ";
        // line 37
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "description", array()), 'widget', array("attr" => array("class" => "form-control")));
        echo "
            </div>
        </div>

        ";
        // line 42
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "save", array()), 'widget', array("attr" => array("class" => "btn btn-primary")));
        echo "
        <a class=\"btn btn-danger\" type=\"button\" href=\"";
        // line 43
        echo $this->env->getExtension('routing')->getPath("intranet_voir-mes-demandes");
        echo "\">Annuler</a>
        

        ";
        // line 49
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

        ";
        // line 52
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>


";
        
        $__internal_0e00a2e6eb9988bd09fb38c58b86a8ed408cb72f2ce78b1b68525409dd18a1d2->leave($__internal_0e00a2e6eb9988bd09fb38c58b86a8ed408cb72f2ce78b1b68525409dd18a1d2_prof);

    }

    public function getTemplateName()
    {
        return "IntranetPlatformBundle:Main:edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 52,  124 => 49,  118 => 43,  113 => 42,  106 => 37,  101 => 35,  97 => 34,  89 => 29,  84 => 27,  80 => 26,  71 => 21,  64 => 17,  58 => 14,  51 => 10,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "IntranetPlatformBundle::layout.html.twig" %}*/
/* {% block body %}*/
/* */
/*     <h3>Modifier ma demande</h3>*/
/* */
/*     <div class="well">*/
/*         {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}*/
/* */
/*         {# Les erreurs générales du formulaire. #}*/
/*         {{ form_errors(form) }}*/
/* */
/*         <div class="form-group">*/
/*             {# Génération du label. #}*/
/*             {{ form_label(form.dateDebut, "Date de début", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/* */
/*             {# Affichage des erreurs pour ce champ précis. #}*/
/*             {{ form_errors(form.dateDebut) }}*/
/* */
/*             <div class="col-sm-4">*/
/*                 {# Génération de l'input. #}*/
/*                 {{ form_widget(form.dateDebut, {'attr': {'type': 'text'}}) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             {{ form_label(form.dateFin, "Date de fin", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*             {{ form_errors(form.dateFin) }}*/
/*             <div class="col-sm-4">*/
/*                 {{ form_widget(form.dateFin, {'attr': {'class': ''}}) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         <div class="form-group">*/
/*             {{ form_label(form.description, "Description", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}*/
/*             {{ form_errors(form.description) }}*/
/*             <div class="col-sm-4">*/
/*                 {{ form_widget(form.description, {'attr': {'class': 'form-control'}}) }}*/
/*             </div>*/
/*         </div>*/
/* */
/*         {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}*/
/*         {{ form_widget(form.save, {'attr': {'class': 'btn btn-primary'}}) }}*/
/*         <a class="btn btn-danger" type="button" href="{{ path("intranet_voir-mes-demandes") }}">Annuler</a>*/
/*         */
/* */
/*         {# Génération automatique des champs pas encore écrits.*/
/*            Dans cet exemple, ce serait le champ CSRF (géré automatiquement par Symfony !)*/
/*            et tous les champs cachés (type « hidden »). #}*/
/*         {{ form_rest(form) }}*/
/* */
/*         {# Fermeture de la balise <form> du formulaire HTML #}*/
/*         {{ form_end(form) }}*/
/*     </div>*/
/* */
/* */
/* {% endblock %}*/
