<?php

/* ImdAppBundle:Users:list.html.twig */
class __TwigTemplate_9bc69c890932bdaa041db9e9e91814db64684ba670a91576208638871c70ebbc extends Twig_Template
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
        echo "User list";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "\t<div class=\"container padding\">
\t\t<h1>Users</h1>
\t\t<p>Overview of all registered users. Use the \"IMD\" button on the right hand side to indicate whether or not a user is part of the course.</p>
\t\t<form class=\"searchUser\" method=\"post\" action=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("imd_app_admin_finduser");
        echo "\">   
\t\t    <input type=\"text\" name=\"name\" class=\"form-control\">
\t\t    <button type=\"submit\" class=\"btn btn-default searchUser_btn\">Search user</button>  
\t\t</form>
\t\t<hr/>
\t\t<ul class=\"media-list\">
\t\t\t";
        // line 15
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
            // line 16
            echo "\t\t\t\t<li class=\"media userlist\">
\t\t\t\t\t<div class=\"media-left\">
\t\t\t\t\t\t<a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imd_user_profile_show_id", array("id" => $this->getAttribute($context["user"], "id", array()))), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t<img class=\"img-circle user-image-small\" src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "picture", array()), "html", null, true);
            echo "\" />
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"media-body\">
\t\t\t\t\t\t<div class=\"info\">
\t\t\t\t\t\t\t<p class=\"name\">
\t\t\t\t\t\t\t\t<h3>
\t\t\t\t\t\t\t\t<span class=\"first_name\">";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "firstName", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t<span class=\"last_name\">";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "lastName", array()), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t";
            // line 28
            if (($this->getAttribute($context["user"], "enabled", array()) == 0)) {
                // line 29
                echo "\t\t\t\t\t\t\t\t\t<span>Deze gebruiker is niet langer actief</span>
\t\t\t\t\t\t\t\t";
            }
            // line 31
            echo "\t\t\t\t\t\t\t\t</h3>
\t\t\t\t\t\t\t\t";
            // line 32
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["user"], "roles", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                // line 33
                echo "\t\t\t\t\t\t\t\t\t<span class=\"label label-primary\">";
                echo twig_escape_filter($this->env, $context["role"], "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "\t\t\t\t\t\t\t</p>

\t\t\t\t\t\t\t";
            // line 37
            if ((null != $this->getAttribute($context["user"], "imdYear", array()))) {
                // line 38
                echo "\t\t\t\t\t\t\t\t<p class=\"imd-year\">
\t\t\t\t\t\t\t\t\t";
                // line 39
                echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "imdYear", array()), "html", null, true);
                if ((1 == $this->getAttribute($context["user"], "imdYear", array()))) {
                    echo "ste ";
                } else {
                    echo "de ";
                }
                echo " jaar IMD
\t\t\t\t\t\t\t\t</p>
\t\t\t\t\t\t\t";
            }
            // line 42
            echo "\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<div class=\"forceLeft\">";
            // line 43
            $this->env->loadTemplate("rating.html.twig")->display($context);
            echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<form class=\"actions\" method=\"post\" action=\"";
            // line 45
            echo $this->env->getExtension('routing')->getPath("imd_app_admin_deleteuser");
            echo "\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"deleteId\" value=\"";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"status\" value=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "enabled", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t";
            // line 48
            if (($this->getAttribute($context["user"], "enabled", array()) == 0)) {
                // line 49
                echo "\t\t\t\t\t\t\t\t<button class=\"btn btn-default users-btn-vcenter margin-alil-l\" type=\"submit\">Gebruiker activeren</button>
\t\t\t\t\t\t\t";
            } else {
                // line 51
                echo "\t\t\t\t\t\t\t\t<button class=\"btn btn-dange users-btn-vcenter margin-alil-l\" type=\"submit\">Gebruiker deactiveren</button>
\t\t\t\t\t\t\t";
            }
            // line 53
            echo "\t\t\t\t\t\t</form>
\t\t\t\t\t\t<form class=\"actions\" method=\"post\" action=\"";
            // line 54
            echo $this->env->getExtension('routing')->getPath("imd_app_admin_make_admin");
            echo "\">
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"userId\" value=\"";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\"/>
\t\t\t\t\t\t\t";
            // line 56
            if ((false != $this->getAttribute($context["user"], "hasRole", array(0 => "ROLE_ADMIN"), "method"))) {
                // line 57
                echo "\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["user"], "enabled", array()) == 1)) {
                    // line 58
                    echo "\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success users-btn-vcenter margin-alil-l\" type=\"submit\">Admin</button>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 60
                    echo "\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success users-btn-vcenter margin-alil-l\" disabled=\"disabled\" type=\"submit\">Admin</button>
\t\t\t\t\t\t\t\t";
                }
                // line 62
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 63
                echo "\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["user"], "enabled", array()) == 1)) {
                    // line 64
                    echo "\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default users-btn-vcenter margin-alil-l\" type=\"submit\">Admin</button>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 66
                    echo "\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default users-btn-vcenter margin-alil-l\" disabled=\"disabled\" type=\"submit\">Admin</button>
\t\t\t\t\t\t\t\t";
                }
                // line 68
                echo "\t\t\t\t\t\t\t";
            }
            // line 69
            echo "\t\t\t\t\t\t</form>
\t\t\t\t\t\t<form class=\"actions\" method=\"post\" action=\"";
            // line 70
            echo $this->env->getExtension('routing')->getPath("imd_app_admin_make_imd");
            echo "\">
\t\t\t\t\t\t\t
\t\t\t\t\t\t\t<input type=\"hidden\" name=\"userId\" value=\"";
            // line 72
            echo twig_escape_filter($this->env, $this->getAttribute($context["user"], "id", array()), "html", null, true);
            echo "\" />

\t\t\t\t\t\t\t";
            // line 74
            if ((false != $this->getAttribute($context["user"], "hasRole", array(0 => "ROLE_IMD"), "method"))) {
                // line 75
                echo "\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["user"], "enabled", array()) == 1)) {
                    // line 76
                    echo "\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success users-btn-vcenter\" type=\"submit\">IMD</button>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 78
                    echo "\t\t\t\t\t\t\t\t\t<button class=\"btn btn-success users-btn-vcenter\" disabled=\"disabled\" type=\"submit\">IMD</button>
\t\t\t\t\t\t\t\t";
                }
                // line 80
                echo "\t\t\t\t\t\t\t";
            } else {
                // line 81
                echo "\t\t\t\t\t\t\t\t";
                if (($this->getAttribute($context["user"], "enabled", array()) == 1)) {
                    // line 82
                    echo "\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default users-btn-vcenter\" type=\"submit\">IMD</button>
\t\t\t\t\t\t\t\t";
                } else {
                    // line 84
                    echo "\t\t\t\t\t\t\t\t\t<button class=\"btn btn-default users-btn-vcenter margin-alil-l\" disabled=\"disabled\" type=\"submit\">IMD</button>
\t\t\t\t\t\t\t\t";
                }
                // line 86
                echo "\t\t\t\t\t\t\t";
            }
            echo "\t
\t\t\t\t\t\t</form>
\t\t\t\t\t</div>
\t\t\t\t</li>
\t\t\t\t<hr/>
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
        // line 92
        echo "\t\t</ul>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "ImdAppBundle:Users:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  277 => 92,  256 => 86,  252 => 84,  248 => 82,  245 => 81,  242 => 80,  238 => 78,  234 => 76,  231 => 75,  229 => 74,  224 => 72,  219 => 70,  216 => 69,  213 => 68,  209 => 66,  205 => 64,  202 => 63,  199 => 62,  195 => 60,  191 => 58,  188 => 57,  186 => 56,  182 => 55,  178 => 54,  175 => 53,  171 => 51,  167 => 49,  165 => 48,  161 => 47,  157 => 46,  153 => 45,  148 => 43,  145 => 42,  134 => 39,  131 => 38,  129 => 37,  125 => 35,  116 => 33,  112 => 32,  109 => 31,  105 => 29,  103 => 28,  99 => 27,  95 => 26,  85 => 19,  81 => 18,  77 => 16,  60 => 15,  51 => 9,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
