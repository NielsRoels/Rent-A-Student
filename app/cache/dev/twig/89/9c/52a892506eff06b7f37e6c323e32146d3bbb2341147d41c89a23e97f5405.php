<?php

/* ImdAppBundle:Admin:index.html.twig */
class __TwigTemplate_899c52a892506eff06b7f37e6c323e32146d3bbb2341147d41c89a23e97f5405 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("base.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        echo "Heroes | Controlepaneel";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t<div class=\"container\">
\t\t<h1>Controlepaneel</h1>
\t\t<small>
\t\t\t<p class=\"txt-col-lightgray\">
\t\t\t\tHieronder een oplijsting van alle functionaliteit waartoe je beschikt als administrator.
\t\t\t</p>
\t\t</small>
\t\t<hr>
\t\t<section class=\"col-xs-12 col-sm-4 text-center\">
\t\t\t<a href=\"";
        // line 15
        echo $this->env->getExtension('routing')->getPath("imd_app_admin_make_imd");
        echo "\" class=\"url-dashboard\">
\t            <span class=\"glyphicon txt-col-2 glyphicon-knight gi-dashboard\"></span>
\t            <h4>Beheer Gebruikers</h4>
\t            <small class=\"txt-col-lightgray\">
            \t\t<p>Beheer alle geregistreerde gebruikers.</p>
            \t</small>
\t        </a>
\t\t</section>
\t\t<section class=\"col-xs-12 col-sm-4 text-center\">
\t\t\t<a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("imd_app_adminlistbookings");
        echo "\" class=\"url-dashboard\">
            \t<span class=\"glyphicon txt-col-2 glyphicon-eye-open gi-dashboard\"></span>
            \t<h4>Beheer Boekingen</h4>
            \t<small class=\"txt-col-lightgray\">
            \t\t<p>Bekijk alle geplande boekingen.</p>
            \t</small>
            </a>
\t\t</section>
\t\t<section class=\"col-xs-12 col-sm-4 text-center\">
\t\t\t<a href=\"";
        // line 33
        echo $this->env->getExtension('routing')->getPath("imd_app_admin_create_event");
        echo "\" class=\"url-dashboard\">
            \t<span class=\"glyphicon txt-col-2 glyphicon-flash gi-dashboard\"></span>
            \t<h4>Nieuw Evenement </h4>
            \t<small class=\"txt-col-lightgray\">
            \t\t<p>Creeër een nieuw evenement waarop gidsen aanwezig zijn.</p>
            \t</small>
        \t</a>
\t\t</section>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ImdAppBundle:Admin:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  81 => 33,  69 => 24,  57 => 15,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
