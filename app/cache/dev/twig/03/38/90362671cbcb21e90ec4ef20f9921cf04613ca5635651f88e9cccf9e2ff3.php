<?php

/* ImdAppBundle:Admin:adminbookings.html.twig */
class __TwigTemplate_033890362671cbcb21e90ec4ef20f9921cf04613ca5635651f88e9cccf9e2ff3 extends Twig_Template
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
        echo "Bookings index";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t<div class=\"container\">
\t\t<h1>Beheer alle boekingen</h1>
\t\t<small>
\t\t\t<p class=\"text-muted\">
\t\t\t\tHier vind u een overzicht van alle boekingen die in het systeem opgenomen zijn.
\t\t\t</p>
\t\t</small>
\t\t<hr>
\t\t<ul class=\"media-list\">
\t\t\t";
        // line 15
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bookings"]) ? $context["bookings"] : $this->getContext($context, "bookings")));
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 16
            echo "\t\t\t\t\t<li class=\"media userlist\">
\t\t\t\t\t\t<div class=\"media-left\">
\t\t\t\t\t\t\t<a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imd_user_profile_show_id", array("id" => $this->getAttribute($this->getAttribute($context["booking"], "guide", array()), "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<img class=\"img-circle user-image-small\" src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["booking"], "guide", array()), "picture", array()), "html", null, true);
            echo "\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t<p class=\"name\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<span class=\"first_name\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["booking"], "guide", array()), "firstName", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"last_name\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["booking"], "guide", array()), "lastName", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<span class=\"place\"><strong>";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["booking"], "place", array()), "html", null, true);
            echo "</strong></span><br>
\t\t\t\t\t\t\t\t<span class=\"time\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["booking"], "meetTime", array()), "format", array(0 => "l j F Y, G:i"), "method"), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imd_app_guide_booking_rate", array("id" => $this->getAttribute($context["booking"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default actions\">Beoordeel de rondleiding</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t<hr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['booking'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "\t\t</ul>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ImdAppBundle:Admin:adminbookings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 38,  98 => 33,  93 => 31,  89 => 30,  83 => 27,  79 => 26,  69 => 19,  65 => 18,  61 => 16,  57 => 15,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
