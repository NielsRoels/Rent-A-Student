<?php

/* FOSUserBundle:Profile:show_content.html.twig */
class __TwigTemplate_108bc259935a11446049f90377b67c487234925163c12cfe37e550f3d79b3e4a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 2
        echo "
<div class=\"container padding\" role=\"main\">

\t<h2>Uw profiel</h2>
\t<div class=\"fos_user_user_show\">
\t\t<p>Gebruikersnaam: ";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
\t\t<p>Email: ";
        // line 8
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
\t\t<p>Voornaam: ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "firstName", array()), "html", null, true);
        echo "</p>
\t</div>
</div>";
    }

    // line 1
    public function block_title($context, array $blocks = array())
    {
        echo "Login";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 1,  37 => 9,  33 => 8,  29 => 7,  22 => 2,  20 => 1,);
    }
}
