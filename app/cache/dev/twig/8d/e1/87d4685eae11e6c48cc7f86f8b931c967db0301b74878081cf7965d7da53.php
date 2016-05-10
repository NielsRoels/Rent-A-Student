<?php

/* ImdAppBundle:Notification:notification.html.twig */
class __TwigTemplate_8de187d4685eae11e6c48cc7f86f8b931c967db0301b74878081cf7965d7da53 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((twig_length_filter($this->env, (isset($context["readTime"]) ? $context["readTime"] : $this->getContext($context, "readTime"))) == 0)) {
            // line 2
            echo "<span>";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["readTime"]) ? $context["readTime"] : $this->getContext($context, "readTime"))), "html", null, true);
            echo "</span>
";
        } else {
            // line 4
            echo "<span class=\"newNotification\">";
            echo twig_escape_filter($this->env, twig_length_filter($this->env, (isset($context["readTime"]) ? $context["readTime"] : $this->getContext($context, "readTime"))), "html", null, true);
            echo "</span>
";
        }
        // line 6
        echo "
";
    }

    public function getTemplateName()
    {
        return "ImdAppBundle:Notification:notification.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  33 => 6,  27 => 4,  21 => 2,  19 => 1,);
    }
}
