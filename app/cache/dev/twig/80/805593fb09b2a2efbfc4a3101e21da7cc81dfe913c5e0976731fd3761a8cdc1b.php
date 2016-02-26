<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_c088a849de966dc019c8bb201c14ce11ddd49120dbc50c37c9c1d09ccb483e1d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("IntranetPlatformBundle::layout.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "IntranetPlatformBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5a6aa291c8ef196416b13c4dcdadaa67647c48c2bdc557c33c3edec054f851db = $this->env->getExtension("native_profiler");
        $__internal_5a6aa291c8ef196416b13c4dcdadaa67647c48c2bdc557c33c3edec054f851db->enter($__internal_5a6aa291c8ef196416b13c4dcdadaa67647c48c2bdc557c33c3edec054f851db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a6aa291c8ef196416b13c4dcdadaa67647c48c2bdc557c33c3edec054f851db->leave($__internal_5a6aa291c8ef196416b13c4dcdadaa67647c48c2bdc557c33c3edec054f851db_prof);

    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        $__internal_12330d124b26c8f79ea78ddeed3558bc98e74bba80d54a39482ff03d3118ed50 = $this->env->getExtension("native_profiler");
        $__internal_12330d124b26c8f79ea78ddeed3558bc98e74bba80d54a39482ff03d3118ed50->enter($__internal_12330d124b26c8f79ea78ddeed3558bc98e74bba80d54a39482ff03d3118ed50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "
    ";
        // line 9
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["messages"]) {
            // line 10
            echo "        ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 11
                echo "            <div class=\"alert alert-";
                echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                echo "\">
                ";
                // line 12
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($context["message"], array(), "FOSUserBundle"), "html", null, true);
                echo "
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 15
            echo "    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "    ";
        // line 17
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 19
        echo "
";
        
        $__internal_12330d124b26c8f79ea78ddeed3558bc98e74bba80d54a39482ff03d3118ed50->leave($__internal_12330d124b26c8f79ea78ddeed3558bc98e74bba80d54a39482ff03d3118ed50_prof);

    }

    // line 17
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e093a35140718b450db2869abe8bccee21ba6199a820ba7aed604985f5a35a7a = $this->env->getExtension("native_profiler");
        $__internal_e093a35140718b450db2869abe8bccee21ba6199a820ba7aed604985f5a35a7a->enter($__internal_e093a35140718b450db2869abe8bccee21ba6199a820ba7aed604985f5a35a7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 18
        echo "    ";
        
        $__internal_e093a35140718b450db2869abe8bccee21ba6199a820ba7aed604985f5a35a7a->leave($__internal_e093a35140718b450db2869abe8bccee21ba6199a820ba7aed604985f5a35a7a_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 18,  87 => 17,  79 => 19,  76 => 17,  74 => 16,  68 => 15,  59 => 12,  54 => 11,  49 => 10,  44 => 9,  41 => 7,  35 => 6,  11 => 1,);
    }
}
/* {% extends "IntranetPlatformBundle::layout.html.twig" %}*/
/* */
/* {# On étend notre layout #}*/
/* */
/* {# Dans notre layout, il faut définir le block body #}*/
/* {% block body %}*/
/* */
/*     {# On affiche les messages flash que définissent les contrôleurs du bundle #}*/
/*     {% for key, messages in app.session.flashbag.all() %}*/
/*         {% for message in messages %}*/
/*             <div class="alert alert-{{ key }}">*/
/*                 {{ message|trans({}, 'FOSUserBundle') }}*/
/*             </div>*/
/*         {% endfor %}*/
/*     {% endfor %}*/
/*     {# On définit ce block, dans lequel vont venir s'insérer les autres vues du bundle #}*/
/*     {% block fos_user_content %}*/
/*     {% endblock fos_user_content %}*/
/* */
/* {% endblock %}*/
