<?php

/* ImdAppBundle:Guide:list.html.twig */
class __TwigTemplate_f76ef507a5adec4129c4b0abd9a35490ab005a4a94ef9c53debcfd61dc0380fd extends Twig_Template
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
        echo "Kies uw IMD-hero!";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t
\t<div class=\"container padding\">
\t\t<h1 class=\"text-center\">Kies uw IMD-Hero!</h1>
\t\t<ul class=\"list-unstyled guides\">
\t\t\t";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
            // line 11
            echo "\t\t\t\t<li class=\"col-md-4 text-center\">
\t\t\t\t\t<a href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imd_user_profile_show_id", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t<img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "picture", array()), "html", null, true);
            echo "\" alt=\"\" class=\"img-responsive img-thumbnail img-circle center-block user-image-medium hoverImages\">
\t\t\t\t\t</a>
\t\t\t\t\t<h2>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastname", array()), "html", null, true);
            echo "</h2>
\t\t\t\t\t<h4>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "getImdYear", array(0 => "full-text"), "method"), "html", null, true);
            echo "</h4>
\t\t\t\t\t<span class=\"center-block\">";
            // line 17
            $this->env->loadTemplate("rating.html.twig")->display($context);
            echo "</span>
\t\t\t\t\t<p>development</p>
\t\t\t\t\t<a href=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imd_app_guide_booking_confirm", array("eventID" => (isset($context["eventID"]) ? $context["eventID"] : $this->getContext($context, "eventID")), "guideID" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\" class=\"btn btn-default btn-action\">Kies ";
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstname", array()), "html", null, true);
            echo "</a>
\t\t\t\t</li>
\t\t\t";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "\t\t</ul>
\t";
        // line 23
        echo $this->env->getExtension('dump')->dump($this->env, $context);
        echo "
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ImdAppBundle:Guide:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  118 => 23,  115 => 22,  96 => 19,  91 => 17,  87 => 16,  81 => 15,  76 => 13,  72 => 12,  69 => 11,  52 => 10,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
