<?php

/* rating.html.twig */
class __TwigTemplate_13939d23bbf2575f4e48a80e81ec6b2bf6650b88eab25553e55fda8252b8f1bf extends Twig_Template
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
        echo "<p class=\"rating center-block text-center\">
\t";
        // line 2
        if ((false != $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rating", array()))) {
            // line 3
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 4
                echo "\t\t\t<script>console.log(\"1\");</script>
\t\t\t";
                // line 5
                if (($context["i"] <= $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rating", array()))) {
                    // line 6
                    echo "\t\t\t\t\t<span class=\"glyphicon glyphicon-star\" aria-hidden=\"true\"></span>
\t\t\t\t";
                } else {
                    // line 8
                    echo "\t\t\t\t\t<span class=\"glyphicon glyphicon-star-empty\" aria-hidden=\"true\"></span>
\t\t\t";
                }
                // line 10
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "\t\t<span class=\"pad-l-5 txt-col-black\">";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["user"]) ? $context["user"] : $this->getContext($context, "user")), "rating", array()), "html", null, true);
            echo "</span>
\t";
        } else {
            // line 13
            echo "\t<span class=\"txt-col-black text-center center-block\">Rookie Guide</span>
\t";
        }
        // line 15
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "rating.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  58 => 15,  54 => 13,  48 => 11,  42 => 10,  38 => 8,  34 => 6,  32 => 5,  29 => 4,  24 => 3,  22 => 2,  19 => 1,);
    }
}
