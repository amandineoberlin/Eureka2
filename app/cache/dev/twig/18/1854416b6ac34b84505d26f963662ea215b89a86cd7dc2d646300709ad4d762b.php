<?php

/* CorePresentationBundle:Presentation:index.html.twig */
class __TwigTemplate_034bfec8e4c1ce2986d420345cb5c60de6ec0e00f06efc5a84627472e3d02cba extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("CoreCoreBundle:Core:layout.html.twig", "CorePresentationBundle:Presentation:index.html.twig", 1);
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
        $__internal_8c2688ba6e4d4cd59c5c9ec20f9f459b67e013b8ade612b5353c1da81a0ef01b = $this->env->getExtension("native_profiler");
        $__internal_8c2688ba6e4d4cd59c5c9ec20f9f459b67e013b8ade612b5353c1da81a0ef01b->enter($__internal_8c2688ba6e4d4cd59c5c9ec20f9f459b67e013b8ade612b5353c1da81a0ef01b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CorePresentationBundle:Presentation:index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c2688ba6e4d4cd59c5c9ec20f9f459b67e013b8ade612b5353c1da81a0ef01b->leave($__internal_8c2688ba6e4d4cd59c5c9ec20f9f459b67e013b8ade612b5353c1da81a0ef01b_prof);

    }

    // line 2
    public function block_nav($context, array $blocks = array())
    {
        $__internal_32363e923b2c936489a81967c409071d9db61efdf0a4c456829ac002b8f53e6b = $this->env->getExtension("native_profiler");
        $__internal_32363e923b2c936489a81967c409071d9db61efdf0a4c456829ac002b8f53e6b->enter($__internal_32363e923b2c936489a81967c409071d9db61efdf0a4c456829ac002b8f53e6b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "nav"));

        // line 3
        echo "    <p>PRESENTATION: Vous pouvez trouver des informations sur notre site 
        <a href=\"http://ssci-kalliste.fr/\">SSCI Kalliste</a></p>
    ";
        
        $__internal_32363e923b2c936489a81967c409071d9db61efdf0a4c456829ac002b8f53e6b->leave($__internal_32363e923b2c936489a81967c409071d9db61efdf0a4c456829ac002b8f53e6b_prof);

    }

    public function getTemplateName()
    {
        return "CorePresentationBundle:Presentation:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 3,  34 => 2,  11 => 1,);
    }
}
/* {% extends "CoreCoreBundle:Core:layout.html.twig" %}*/
/* {% block nav %}*/
/*     <p>PRESENTATION: Vous pouvez trouver des informations sur notre site */
/*         <a href="http://ssci-kalliste.fr/">SSCI Kalliste</a></p>*/
/*     {% endblock %}*/
/* */
/* */
