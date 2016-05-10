<?php

/* ImdAppBundle:Admin:admin.html.twig */
class __TwigTemplate_b933239b046a5ac3ff13b2d7b77188b4caf4fc342e2f0debafed81ef63f53c0a extends Twig_Template
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
        echo "Add admin";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t<div class=\"container padding\">
\t\t<h1>Admin</h1>
\t\t<p>Search for a registered user by first name of last name and give them admin-rights by clicking on the \"Admin\" button on the right hand side.</p>\t
\t\t<form class=\"searchUser\" method=\"post\" action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("imd_app_manage");
        echo "\">   
\t\t    <input type=\"text\" name=\"name\" class=\"form-control\">
\t\t    <button type=\"submit\" class=\"btn btn-default searchUser_btn\">Search user</button>  
\t\t</form>
\t\t<hr>
\t\t<ul class=\"media-list\">
\t\t\t";
        // line 15
        if (array_key_exists("users", $context)) {
            // line 16
            echo "\t\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["users"]) ? $context["users"] : $this->getContext($context, "users")));
            foreach ($context['_seq'] as $context["_key"] => $context["user"]) {
                // line 17
                echo "\t\t\t\t\t<li class=\"media userlist\">
\t\t\t\t\t\t<div class=\"media-left\">
\t\t\t\t\t\t\t<a href=\"\">
\t\t\t\t\t\t\t\t<img class=\"img-circle user-image-small\" src=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "picture", array()), "html", null, true);
                echo "\" />
\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t\t<p class=\"name\">
\t\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t\t<span class=\"first_name\">";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t<span class=\"last_name\">";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<form class=\"actions\" method=\"post\" action=\"";
                // line 32
                echo $this->env->getExtension('routing')->getPath("imd_app_admin_make_admin");
                echo "\">
\t\t\t\t\t\t\t\t<input type=\"hidden\" name=\"userId\" value=\"";
                // line 33
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
                echo "\"/>
\t\t\t\t\t\t\t\t";
                // line 34
                if ((false != $this->getAttribute($context["user"], "hasRole", array(0 => "ROLE_ADMIN"), "method"))) {
                    // line 35
                    echo "\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success\" type=\"submit\">Admin</button>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 37
                    echo "\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default\" type=\"submit\">Admin</button>
\t\t\t\t\t\t\t\t";
                }
                // line 39
                echo "\t\t\t\t\t\t\t</form>
\t\t\t\t\t\t</div>
\t\t\t\t\t</li>
\t\t\t\t\t<hr>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "\t\t\t";
        } else {
            // line 45
            echo "\t\t\t\t<li>
\t\t\t\t\t<p>No matching user found!</p>
\t\t\t\t</li>
\t\t\t";
        }
        // line 49
        echo "\t\t</ul>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ImdAppBundle:Admin:admin.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 49,  124 => 45,  121 => 44,  111 => 39,  107 => 37,  103 => 35,  101 => 34,  97 => 33,  93 => 32,  86 => 28,  82 => 27,  72 => 20,  67 => 17,  62 => 16,  60 => 15,  51 => 9,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
