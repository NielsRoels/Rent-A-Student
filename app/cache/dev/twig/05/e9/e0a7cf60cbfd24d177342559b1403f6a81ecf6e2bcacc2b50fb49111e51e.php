<?php

/* ImdAppBundle:Guide:confirm.html.twig */
class __TwigTemplate_05e9e0a7cf60cbfd24d177342559b1403f6a81ecf6e2bcacc2b50fb49111e51e extends Twig_Template
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
        echo "Confirm your booking";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t<div class=\"container\">
\t\t<h1>Bevstig uw booking</h1>
\t
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4 guide-card\">
\t\t\t\t<h2>Je koos als gids:</h2>
\t\t\t\t<a href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imd_user_profile_show_id", array("id" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\">
\t\t\t\t\t<img src=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "picture", array()), "html", null, true);
        echo "\" alt=\"\" class=\"img-responsive img-thumbnail img-circle center-block\">
\t\t\t\t</a>\t\t\t
\t\t\t\t<h2>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstname", array()), "html", null, true);
        echo " <small>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "lastname", array()), "html", null, true);
        echo "</small></h2>
\t\t\t\t<h4>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "getImdYear", array(0 => "full-text"), "method"), "html", null, true);
        echo " ";
        $this->env->loadTemplate("rating.html.twig")->display($context);
        echo "</h4>
\t\t\t\t<p>development</p>
\t\t\t</div>

\t\t\t<div class=\"col-md-6 col-md-offset-2\">
\t\t\t\t<h2>Je koos als event:</h2>
\t\t        <h1>";
        // line 22
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "title", array()), "html", null, true);
        echo "</h1>
\t\t        <h3>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "address", array()), "html", null, true);
        echo "</h3>
\t\t        <p>";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "bio", array()), "html", null, true);
        echo "</p>
\t\t        <p><b>Starts at:</b></p><p>";
        // line 25
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "startDate", array()), "format", array(0 => "l j F Y, G:i"), "method"), "html", null, true);
        echo "</p>
\t\t        <p><b>Ends at:</b></p><p>";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "endDate", array()), "format", array(0 => "l j F Y, G:i"), "method"), "html", null, true);
        echo "</p>
\t\t    </div>
\t\t</div>
\t\t

\t\t<form action=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imd_app_guide_booking_handle_confirm", array("eventID" => $this->getAttribute((isset($context["event"]) ? $context["event"] : $this->getContext($context, "event")), "id", array()), "guideID" => $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
\t\t\t<input type=\"submit\" class=\"btn btn-large btn-default\" value=\"Bevestig uw booking\"/>
\t\t</form>
\t
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ImdAppBundle:Guide:confirm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  104 => 31,  96 => 26,  92 => 25,  88 => 24,  84 => 23,  80 => 22,  69 => 16,  63 => 15,  58 => 13,  54 => 12,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
