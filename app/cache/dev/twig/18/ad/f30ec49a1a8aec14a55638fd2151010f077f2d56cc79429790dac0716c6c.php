<?php

/* ImdAppBundle:Messages:conversation.html.twig */
class __TwigTemplate_18adf30ec49a1a8aec14a55638fd2151010f077f2d56cc79429790dac0716c6c extends Twig_Template
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
        echo "Conversation";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t<div class=\"container padding\">
\t\t<a href=\"";
        // line 7
        echo $this->env->getExtension('routing')->getPath("imd_app_messages_messagelist");
        echo "\" class=\"btn btn-default\">Terug naar alle berichten</a>
\t\t";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            echo "\t\t\t";
            if ((($this->getAttribute($this->getAttribute($context["message"], "sender", array()), "id", array()) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())) &&  !array_key_exists("partner", $context))) {
                // line 10
                echo "\t\t\t\t";
                $context["partner"] = $this->getAttribute($this->getAttribute($context["message"], "sender", array()), "id", array());
                // line 11
                echo "\t\t\t\t\t<h1>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "sender", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "sender", array()), "lastName", array()), "html", null, true);
                echo "</h1>
\t\t\t";
            } elseif ((($this->getAttribute($this->getAttribute(            // line 12
$context["message"], "receiver", array()), "id", array()) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())) &&  !array_key_exists("partner", $context))) {
                // line 13
                echo "\t\t\t\t";
                $context["partner"] = $this->getAttribute($this->getAttribute($context["message"], "receiver", array()), "id", array());
                // line 14
                echo "\t\t\t\t\t<h1>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "receiver", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "receiver", array()), "lastName", array()), "html", null, true);
                echo "</h1>
\t\t\t";
            }
            // line 16
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "\t\t<form id=\"messageForm\" method=\"post\" action=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imd_app_message_add_message", array("id" => $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "get", array(0 => "id"), "method"))), "html", null, true);
        echo "\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<input type=\"hidden\" name=\"receiver\" id=\"receiver\" value=\"";
        // line 19
        echo twig_escape_filter($this->env, (isset($context["partnerId"]) ? $context["partnerId"] : $this->getContext($context, "partnerId")), "html", null, true);
        echo "\">
\t\t\t\t<textarea class=\"form-control\" rows=\"3\" name=\"message\" id=\"message\" placeholder=\"Vul hier uw bericht in ...\"></textarea>
\t\t\t\t";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 22
            echo "\t\t\t\t\t";
            if ((($this->getAttribute($this->getAttribute($context["message"], "sender", array()), "id", array()) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())) &&  !array_key_exists("partner", $context))) {
                // line 23
                echo "\t\t\t\t\t\t";
                $context["partner"] = $this->getAttribute($this->getAttribute($context["message"], "sender", array()), "enabled", array());
                // line 24
                echo "\t\t\t\t\t\t\t";
                if (((isset($context["partner"]) ? $context["partner"] : $this->getContext($context, "partner")) == 1)) {
                    // line 25
                    echo "\t\t\t\t\t\t\t\t<button class=\"btn btn-default message_btn\" type=\"submit\">Verzenden</button>
\t\t\t\t\t\t\t";
                } else {
                    // line 27
                    echo "\t\t\t\t\t\t\t\t<button class=\"btn btn-default message_btn\" disabled=\"disabled\" type=\"submit\">Verzenden</button>
\t\t\t\t\t\t\t\t<span>Deze gebruiker is niet langer actief</span>
\t\t\t\t\t\t\t";
                }
                // line 30
                echo "\t\t\t\t\t";
            } elseif ((($this->getAttribute($this->getAttribute($context["message"], "receiver", array()), "id", array()) != $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array())) &&  !array_key_exists("partner", $context))) {
                // line 31
                echo "\t\t\t\t\t\t";
                $context["partner"] = $this->getAttribute($this->getAttribute($context["message"], "receiver", array()), "enabled", array());
                // line 32
                echo "\t\t\t\t\t\t\t";
                if (((isset($context["partner"]) ? $context["partner"] : $this->getContext($context, "partner")) == 1)) {
                    // line 33
                    echo "\t\t\t\t\t\t\t\t<button class=\"btn btn-default message_btn\" type=\"submit\">Verzenden</button>
\t\t\t\t\t\t\t";
                } else {
                    // line 35
                    echo "\t\t\t\t\t\t\t\t<button class=\"btn btn-default message_btn\" disabled=\"disabled\" type=\"submit\">Verzenden</button>
\t\t\t\t\t\t\t\t<span>Deze gebruiker is niet langer actief</span>
\t\t\t\t\t\t\t";
                }
                // line 38
                echo "\t\t\t\t\t";
            }
            // line 39
            echo "\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "\t\t\t</div>
\t\t</form>
\t\t<ul id=\"chatMessage\" class=\"media-list message_clear\">
\t\t\t";
        // line 43
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["messages"]) ? $context["messages"] : $this->getContext($context, "messages")));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 44
            echo "\t\t\t\t";
            if (($this->getAttribute($this->getAttribute($context["message"], "sender", array()), "id", array()) == $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "id", array()))) {
                // line 45
                echo "\t\t\t\t\t<li class=\"message_text me bg-col-2\">
\t\t\t\t\t\t<span>";
                // line 46
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "sender", array()), "firstName", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t<p>";
                // line 47
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "message", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t</li>
\t\t\t\t";
            } else {
                // line 50
                echo "\t\t\t\t\t<li class=\"message_text them bg-col-5\">
\t\t\t\t\t\t<span >";
                // line 51
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["message"], "sender", array()), "firstName", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t<p >";
                // line 52
                echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "message", array()), "html", null, true);
                echo "</p>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 55
            echo "\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "\t\t</ul>
\t</div>
\t<script src=\"https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js\"></script>
\t<script src=\"";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("js/script.js"), "html", null, true);
        echo "\"></script>
";
    }

    public function getTemplateName()
    {
        return "ImdAppBundle:Messages:conversation.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  198 => 59,  193 => 56,  187 => 55,  181 => 52,  177 => 51,  174 => 50,  168 => 47,  164 => 46,  161 => 45,  158 => 44,  154 => 43,  149 => 40,  143 => 39,  140 => 38,  135 => 35,  131 => 33,  128 => 32,  125 => 31,  122 => 30,  117 => 27,  113 => 25,  110 => 24,  107 => 23,  104 => 22,  100 => 21,  95 => 19,  89 => 17,  83 => 16,  75 => 14,  72 => 13,  70 => 12,  63 => 11,  60 => 10,  57 => 9,  53 => 8,  49 => 7,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
