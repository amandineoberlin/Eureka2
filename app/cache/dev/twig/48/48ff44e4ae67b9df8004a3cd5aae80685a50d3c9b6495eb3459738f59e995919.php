<?php

/* IntranetPlatformBundle::layout.html.twig */
class __TwigTemplate_6e345f5c2be7e281d7010c6f58065b15e77dbe423c224cf278326b172fa8af3f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreCoreBundle:Core:layout.html.twig", "IntranetPlatformBundle::layout.html.twig", 1);
        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CoreCoreBundle:Core:layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8dcfc942db4ef1c6d4ad548f4c497550baf12becaf59a7fc12cb302144db3709 = $this->env->getExtension("native_profiler");
        $__internal_8dcfc942db4ef1c6d4ad548f4c497550baf12becaf59a7fc12cb302144db3709->enter($__internal_8dcfc942db4ef1c6d4ad548f4c497550baf12becaf59a7fc12cb302144db3709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "IntranetPlatformBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8dcfc942db4ef1c6d4ad548f4c497550baf12becaf59a7fc12cb302144db3709->leave($__internal_8dcfc942db4ef1c6d4ad548f4c497550baf12becaf59a7fc12cb302144db3709_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_387f96153f016e4867a5f1e006c725406eaefd2f8247b2414804d0f8a147d073 = $this->env->getExtension("native_profiler");
        $__internal_387f96153f016e4867a5f1e006c725406eaefd2f8247b2414804d0f8a147d073->enter($__internal_387f96153f016e4867a5f1e006c725406eaefd2f8247b2414804d0f8a147d073_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "    ";
        // line 5
        echo "
    ";
        // line 6
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 7
            echo "        <div class=\"row\">
            <h3 class=\"col-md-offset-1 col-md-10 well\" style=\"text-align:center;\">
                Menu Client </h3>
            ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 10
            echo " 
            <div class=\"row\">
                <h3 class=\"col-md-offset-1 col-md-10 well\" style=\"text-align:center;\">
                    Menu Client </h3>
                ";
        }
        // line 15
        echo "

            ";
        // line 17
        if ($this->env->getExtension('security')->isGranted("ROLE_USER")) {
            // line 18
            echo "                <nav class=\"navbar btn-group-justified  navbar-inverse \">
                    <a class=\"navbar-brand\" href=\"\">Accueil</a>
                    <a class=\"navbar-brand\" href=\"";
            // line 20
            echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
            echo "\">Mon Compte</a>
                    <a class=\"navbar-brand\" href=\"\">Faire une demande</a>
                    <a class=\"navbar-brand\" href=\"\">Mes demandes</a>
                    <a class=\"navbar-brand\" href=\"\">Mes Factures</a>
                    <a class=\"navbar-brand\" href=\"";
            // line 24
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">D&eacute;connexion</a>
                </nav>
            </div>
        ";
        } elseif ($this->env->getExtension('security')->isGranted("ROLE_ADMIN")) {
            // line 28
            echo "            <nav class=\"navbar btn-group-justified  navbar-inverse \">
                <a class=\"navbar-brand\" href=\"\">Accueil</a>
                <a class=\"navbar-brand\" href=\"\">Mon Compte</a>
                <a class=\"navbar-brand\" href=\"\">Donn&eacute;es clients</a>
                <a class=\"navbar-brand\" href=\"\">Demandes</a>
                <a class=\"navbar-brand\" href=\"\">Factures</a>
                <a class=\"navbar-brand\" href=\"\">Administration</a>
                <a class=\"navbar-brand\" href=\"";
            // line 35
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">D&eacute;connexion</a>  
            </nav>
        </div>
    ";
        }
        // line 39
        echo "

    ";
        // line 41
        $this->displayBlock('body', $context, $blocks);
        // line 43
        echo "
";
        
        $__internal_387f96153f016e4867a5f1e006c725406eaefd2f8247b2414804d0f8a147d073->leave($__internal_387f96153f016e4867a5f1e006c725406eaefd2f8247b2414804d0f8a147d073_prof);

    }

    // line 41
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc3b19a2ac7bbf53bc32724c2c5274a9ea7375638cf4d20af1e1b7e4fb9b57ae = $this->env->getExtension("native_profiler");
        $__internal_bc3b19a2ac7bbf53bc32724c2c5274a9ea7375638cf4d20af1e1b7e4fb9b57ae->enter($__internal_bc3b19a2ac7bbf53bc32724c2c5274a9ea7375638cf4d20af1e1b7e4fb9b57ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 42
        echo "    ";
        
        $__internal_bc3b19a2ac7bbf53bc32724c2c5274a9ea7375638cf4d20af1e1b7e4fb9b57ae->leave($__internal_bc3b19a2ac7bbf53bc32724c2c5274a9ea7375638cf4d20af1e1b7e4fb9b57ae_prof);

    }

    public function getTemplateName()
    {
        return "IntranetPlatformBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 42,  115 => 41,  107 => 43,  105 => 41,  101 => 39,  94 => 35,  85 => 28,  78 => 24,  71 => 20,  67 => 18,  65 => 17,  61 => 15,  54 => 10,  48 => 7,  46 => 6,  43 => 5,  41 => 3,  35 => 2,  11 => 1,);
    }
}
/* {% extends "CoreCoreBundle:Core:layout.html.twig" %}*/
/* {% block nav %}*/
/*     {# onglets de navigation affichés par condition de roles tels que définis dans app/security.yml */
/*     #}*/
/* */
/*     {% if is_granted('ROLE_USER') %}*/
/*         <div class="row">*/
/*             <h3 class="col-md-offset-1 col-md-10 well" style="text-align:center;">*/
/*                 Menu Client </h3>*/
/*             {% elseif is_granted('ROLE_ADMIN') %} */
/*             <div class="row">*/
/*                 <h3 class="col-md-offset-1 col-md-10 well" style="text-align:center;">*/
/*                     Menu Client </h3>*/
/*                 {% endif %}*/
/* */
/* */
/*             {% if is_granted('ROLE_USER') %}*/
/*                 <nav class="navbar btn-group-justified  navbar-inverse ">*/
/*                     <a class="navbar-brand" href="">Accueil</a>*/
/*                     <a class="navbar-brand" href="{{ path("fos_user_profile_show") }}">Mon Compte</a>*/
/*                     <a class="navbar-brand" href="">Faire une demande</a>*/
/*                     <a class="navbar-brand" href="">Mes demandes</a>*/
/*                     <a class="navbar-brand" href="">Mes Factures</a>*/
/*                     <a class="navbar-brand" href="{{ path("fos_user_security_logout") }}">D&eacute;connexion</a>*/
/*                 </nav>*/
/*             </div>*/
/*         {% elseif is_granted('ROLE_ADMIN') %}*/
/*             <nav class="navbar btn-group-justified  navbar-inverse ">*/
/*                 <a class="navbar-brand" href="">Accueil</a>*/
/*                 <a class="navbar-brand" href="">Mon Compte</a>*/
/*                 <a class="navbar-brand" href="">Donn&eacute;es clients</a>*/
/*                 <a class="navbar-brand" href="">Demandes</a>*/
/*                 <a class="navbar-brand" href="">Factures</a>*/
/*                 <a class="navbar-brand" href="">Administration</a>*/
/*                 <a class="navbar-brand" href="{{ path("fos_user_security_logout") }}">D&eacute;connexion</a>  */
/*             </nav>*/
/*         </div>*/
/*     {% endif %}*/
/* */
/* */
/*     {% block body %}*/
/*     {% endblock %}*/
/* */
/* {% endblock %}*/
/* */
/* */
/* */
/* */
/* */
/* */
