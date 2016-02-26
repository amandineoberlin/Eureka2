<?php

/* CoreCoreBundle:Core:layout.html.twig */
class __TwigTemplate_6cd63de9bf0ab358df55f60025112ac8d4f15e5ea6198ad5b54f7d7f8db0d8c6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'nav' => array($this, 'block_nav'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_461cbf32fd52039d3aace94ae009de8871e9269f367d835514680093b18026dd = $this->env->getExtension("native_profiler");
        $__internal_461cbf32fd52039d3aace94ae009de8871e9269f367d835514680093b18026dd->enter($__internal_461cbf32fd52039d3aace94ae009de8871e9269f367d835514680093b18026dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CoreCoreBundle:Core:layout.html.twig"));

        // line 1
        echo "<!DOCTYPE HTML>
<html>
    <html class=\"no-js\">
        <head>
            <meta charset=\"utf-8\">
            <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">

            <title>Eureka</title>

            <link rel=\"shortcut icon\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/logoEurShortcut.png"), "html", null, true);
        echo "\">

            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bootstrap/css/bootstrap.css"), "html", null, true);
        echo "\" media=\"all\"/>
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/css/main.css"), "html", null, true);
        echo "\" media=\"all\" />
            <link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/bootstrap/css/dataTables.bootstrap.css"), "html", null, true);
        echo "\" media=\"all\"/>
            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js\"></script>
            <script src=\"//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js\"></script>

        </head>

        <body id=\"haut\" class=\"well container\">
        <body id=\"haut\">
            <div class=\"row well\">
                <ul style=\"text-align:center;\" class=\"nav nav-pills\">
                    <!--LOGO -->
                    <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getUrl("accueil_homepage");
        echo "\" title=\"Accueil\"> <img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/logo.png"), "html", null, true);
        echo "\"alt=\"Logo Eureka\"/></a></li>

                    <li><a href=\"";
        // line 27
        echo $this->env->getExtension('routing')->getUrl("accueil_homepage");
        echo "\" title=\"Accueil\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/cap.jpg"), "html", null, true);
        echo "\" alt=\"Accueil\"/></a></li>
                    <li><a href=\"";
        // line 28
        echo $this->env->getExtension('routing')->getUrl("presentation_homepage");
        echo "\" title=\"Présentation\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/cap2.jpg"), "html", null, true);
        echo "\" alt=\"Présentation\"/></a></li>
                    <li><a href=\"";
        // line 29
        echo $this->env->getExtension('routing')->getUrl("intranet_accueil");
        echo "\" title=\"Intranet\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/cap3.jpg"), "html", null, true);
        echo "\" alt=\"Intranet\"/></a></li>\t\t\t\t\t
                    <li><a href=\"";
        // line 30
        echo $this->env->getExtension('routing')->getUrl("contact_homepage");
        echo "\" title=\"Contact\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/images/cap4.jpg"), "html", null, true);
        echo "\" alt=\"Contact\"/></a></li>
                </ul>\t\t
            </div>


            ";
        // line 35
        $this->displayBlock('nav', $context, $blocks);
        // line 37
        echo "

            <footer>     \t\t
            </footer>

        </body>

        <script type=\"text/javascript\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("assets/scripts/behaviour.js"), "html", null, true);
        echo "\"></script>
    </html>";
        
        $__internal_461cbf32fd52039d3aace94ae009de8871e9269f367d835514680093b18026dd->leave($__internal_461cbf32fd52039d3aace94ae009de8871e9269f367d835514680093b18026dd_prof);

    }

    // line 35
    public function block_nav($context, array $blocks = array())
    {
        $__internal_d2d7819b48415a9f5639373069f310b6b09ee2ba63cc3bc729a088e4283c46bb = $this->env->getExtension("native_profiler");
        $__internal_d2d7819b48415a9f5639373069f310b6b09ee2ba63cc3bc729a088e4283c46bb->enter($__internal_d2d7819b48415a9f5639373069f310b6b09ee2ba63cc3bc729a088e4283c46bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 36
        echo "            ";
        
        $__internal_d2d7819b48415a9f5639373069f310b6b09ee2ba63cc3bc729a088e4283c46bb->leave($__internal_d2d7819b48415a9f5639373069f310b6b09ee2ba63cc3bc729a088e4283c46bb_prof);

    }

    public function getTemplateName()
    {
        return "CoreCoreBundle:Core:layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 36,  116 => 35,  107 => 44,  98 => 37,  96 => 35,  86 => 30,  80 => 29,  74 => 28,  68 => 27,  61 => 25,  47 => 14,  43 => 13,  39 => 12,  34 => 10,  23 => 1,);
    }
}
/* <!DOCTYPE HTML>*/
/* <html>*/
/*     <html class="no-js">*/
/*         <head>*/
/*             <meta charset="utf-8">*/
/*             <meta http-equiv="X-UA-Compatible" content="IE=edge">*/
/* */
/*             <title>Eureka</title>*/
/* */
/*             <link rel="shortcut icon" href="{{ asset("assets/images/logoEurShortcut.png") }}">*/
/* */
/*             <link rel="stylesheet" type="text/css" href="{{ asset("assets/bootstrap/css/bootstrap.css") }}" media="all"/>*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/main.css") }}" media="all" />*/
/*             <link rel="stylesheet" type="text/css" href="{{ asset("assets/bootstrap/css/dataTables.bootstrap.css") }}" media="all"/>*/
/*             <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>*/
/*             <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.11.1/jquery-ui.min.js"></script>*/
/* */
/*         </head>*/
/* */
/*         <body id="haut" class="well container">*/
/*         <body id="haut">*/
/*             <div class="row well">*/
/*                 <ul style="text-align:center;" class="nav nav-pills">*/
/*                     <!--LOGO -->*/
/*                     <li><a href="{{ url('accueil_homepage') }}" title="Accueil"> <img src="{{ asset("assets/images/logo.png") }}"alt="Logo Eureka"/></a></li>*/
/* */
/*                     <li><a href="{{ url('accueil_homepage') }}" title="Accueil"><img src="{{ asset("assets/images/cap.jpg") }}" alt="Accueil"/></a></li>*/
/*                     <li><a href="{{ url('presentation_homepage') }}" title="Présentation"><img src="{{ asset("assets/images/cap2.jpg") }}" alt="Présentation"/></a></li>*/
/*                     <li><a href="{{ url('intranet_accueil') }}" title="Intranet"><img src="{{ asset("assets/images/cap3.jpg") }}" alt="Intranet"/></a></li>					*/
/*                     <li><a href="{{ url('contact_homepage') }}" title="Contact"><img src="{{ asset("assets/images/cap4.jpg") }}" alt="Contact"/></a></li>*/
/*                 </ul>		*/
/*             </div>*/
/* */
/* */
/*             {% block nav %}*/
/*             {% endblock %}*/
/* */
/* */
/*             <footer>     		*/
/*             </footer>*/
/* */
/*         </body>*/
/* */
/*         <script type="text/javascript" src="{{ asset("assets/scripts/behaviour.js") }}"></script>*/
/*     </html>*/
