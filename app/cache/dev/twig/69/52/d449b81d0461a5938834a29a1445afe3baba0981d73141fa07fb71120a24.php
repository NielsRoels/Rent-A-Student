<?php

/* ImdAppBundle:Booking:bookings.html.twig */
class __TwigTemplate_6952d449b81d0461a5938834a29a1445afe3baba0981d73141fa07fb71120a24 extends Twig_Template
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

    // line 2
    public function block_title($context, array $blocks = array())
    {
        echo "Bookings";
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "\t<div class=\"container padding\">
\t\t<h1>Boekingen</h1>
\t\t<p>Kijk hier al je boekingen na. </p>
\t\t<hr>
\t\t<ul class=\"media-list\">
\t\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["bookings"]) ? $context["bookings"] : $this->getContext($context, "bookings")));
        foreach ($context['_seq'] as $context["_key"] => $context["booking"]) {
            // line 11
            echo "\t\t\t\t";
            if ((false != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "hasRole", array(0 => "ROLE_GUEST"), "method"))) {
                // line 12
                echo "\t\t\t\t\t<li class=\"media userlist\">
\t\t\t\t\t\t<div class=\"media-left\">
\t\t\t\t\t\t\t<a href=\"";
                // line 14
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imd_user_profile_show_id", array("id" => $this->getAttribute($this->getAttribute($context["booking"], "guide", array()), "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<img class=\"img-circle user-image-small\" src=\"";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["booking"], "guide", array()), "picture", array()), "html", null, true);
                echo "\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t<p class=\"name\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<span class=\"first_name\">";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["booking"], "guide", array()), "firstName", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"last_name\">";
                // line 23
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["booking"], "guide", array()), "lastName", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<span>Guide</span><br>
\t\t\t\t\t\t\t\t<span class=\"place\"><strong>";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["booking"], "place", array()), "html", null, true);
                echo "</strong></span><br>
\t\t\t\t\t\t\t\t<span class=\"time\">";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["booking"], "meetTime", array()), "format", array(0 => "l j F Y, G:i"), "method"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imd_app_guide_booking_rate", array("id" => $this->getAttribute($context["booking"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default actions\">Beoordeel de rondleiding</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t";
            } else {
                // line 34
                echo "\t\t\t\t\t<li class=\"media userlist\">
\t\t\t\t\t\t<div class=\"media-left\">
\t\t\t\t\t\t\t<a href=\"";
                // line 36
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imd_user_profile_show_id", array("id" => $this->getAttribute($this->getAttribute($context["booking"], "guest", array()), "id", array()))), "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<img class=\"img-circle user-image-small\" src=\"";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["booking"], "guest", array()), "picture", array()), "html", null, true);
                echo "\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t<p class=\"name\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t\t<span class=\"first_name\">";
                // line 44
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["booking"], "guest", array()), "firstName", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t<span class=\"last_name\">";
                // line 45
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["booking"], "guest", array()), "lastName", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t\t<span>Guest</span><br>
\t\t\t\t\t\t\t\t<span class=\"place\"><strong>";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute($context["booking"], "place", array()), "html", null, true);
                echo "</strong></span><br>
\t\t\t\t\t\t\t\t<span class=\"time\">";
                // line 50
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["booking"], "meetTime", array()), "format", array(0 => "l j F Y, G:i"), "method"), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<a href=\"";
                // line 52
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imd_app_guide_booking_rate", array("id" => $this->getAttribute($context["booking"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default actions\">Beoordeel de rondleiding</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 56
            echo "\t\t\t\t<hr>
\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['booking'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "\t\t</ul>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ImdAppBundle:Booking:bookings.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  157 => 58,  150 => 56,  143 => 52,  138 => 50,  134 => 49,  127 => 45,  123 => 44,  113 => 37,  109 => 36,  105 => 34,  98 => 30,  93 => 28,  89 => 27,  82 => 23,  78 => 22,  68 => 15,  64 => 14,  60 => 12,  57 => 11,  53 => 10,  46 => 5,  43 => 4,  37 => 2,  11 => 1,);
    }
}
