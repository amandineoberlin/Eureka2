<?php

/* IntranetPlatformBundle:Main:add.html.twig */
class __TwigTemplate_06f69d8910adb7031c0ecc795e6e081ab5bda97a7b2db893d9661bbe86a9ebcd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IntranetPlatformBundle::layout.html.twig", "IntranetPlatformBundle:Main:add.html.twig", 1);
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
        $__internal_4600211648b4ec4a446066c2b52a065a816fd5853702016592d4c6396f8da725 = $this->env->getExtension("native_profiler");
        $__internal_4600211648b4ec4a446066c2b52a065a816fd5853702016592d4c6396f8da725->enter($__internal_4600211648b4ec4a446066c2b52a065a816fd5853702016592d4c6396f8da725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IntranetPlatformBundle:Main:add.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4600211648b4ec4a446066c2b52a065a816fd5853702016592d4c6396f8da725->leave($__internal_4600211648b4ec4a446066c2b52a065a816fd5853702016592d4c6396f8da725_prof);

    }

    // line 2
    public function block_body($context, array $blocks = array())
    {
        $__internal_9c0bfaf6f299c6b73f5613827c6352c403978a4fe79ca2176b00662ee3884353 = $this->env->getExtension("native_profiler");
        $__internal_9c0bfaf6f299c6b73f5613827c6352c403978a4fe79ca2176b00662ee3884353->enter($__internal_9c0bfaf6f299c6b73f5613827c6352c403978a4fe79ca2176b00662ee3884353_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "
    <h3>Formulaire de demande</h3>

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
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "dateDebut", array()), 'widget', array("attr" => array("class" => " ")));
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

        ";
        // line 47
        echo "        ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "

        ";
        // line 50
        echo "        ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
    </div>

";
        
        $__internal_9c0bfaf6f299c6b73f5613827c6352c403978a4fe79ca2176b00662ee3884353->leave($__internal_9c0bfaf6f299c6b73f5613827c6352c403978a4fe79ca2176b00662ee3884353_prof);

    }

    public function getTemplateName()
    {
        return "IntranetPlatformBundle:Main:add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 50,  119 => 47,  113 => 42,  106 => 37,  101 => 35,  97 => 34,  89 => 29,  84 => 27,  80 => 26,  71 => 21,  64 => 17,  58 => 14,  51 => 10,  46 => 7,  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "IntranetPlatformBundle::layout.html.twig" %}*/
/* {% block body %}*/
/* */
/*     <h3>Formulaire de demande</h3>*/
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
/*                 {{ form_widget(form.dateDebut, {'attr': {'class': ' '}}) }}*/
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
/* {% endblock %}*/
