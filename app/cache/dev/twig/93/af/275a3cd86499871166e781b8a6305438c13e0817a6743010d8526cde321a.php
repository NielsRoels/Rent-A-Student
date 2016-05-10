<?php

/* ImdAppBundle:Messages:messagelist.html.twig */
class __TwigTemplate_93af275a3cd86499871166e781b8a6305438c13e0817a6743010d8526cde321a extends Twig_Template
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
        echo "Messages";
    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        // line 6
        echo "    <div class=\"container padding\">
        <section class=\"col-xs-12 col-sm-8\">
            <h1>Berichtencentrum</h1>
            <p>
                Chat hier met je gids of medestudenten. Klik op één van de onderstaande gesprekken om verder te praten, of zoek een gebruiker op voor- of achternaam om er een gesprek mee te beginnen.
            </p>
        </section>
        <section class=\"col-xs-12 col-sm-4\">
            <form class=\"searchPartner\" method=\"post\" action=\"";
        // line 14
        echo $this->env->getExtension('routing')->getPath("imd_app_messages_searchpartner");
        echo "\">
                <input type=\"text\" name=\"name\" class=\"form-control margin-alot-t\">
                <button type=\"submit\" class=\"btn btn-default searchUser_btn\">Zoek partner</button>
            </form>
        </section>
        <section class=\"col-xs-12\">
            <hr>
            <ul class=\"media-list row\">
                ";
        // line 22
        if (array_key_exists("partners", $context)) {
            // line 23
            echo "                    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["partners"]) ? $context["partners"] : $this->getContext($context, "partners")));
            foreach ($context['_seq'] as $context["_key"] => $context["partner"]) {
                // line 24
                echo "                        <li class=\"media userlist\">
                            <div class=\"media-left\">
                                <a href=\"\">
                                    <img src=\"";
                // line 27
                echo twig_escape_filter($this->env, $this->getAttribute($context["partner"], "picture", array()), "html", null, true);
                echo "\" class=\"img-circle user-image-small\">
                                </a>
                            </div>
                            <div class=\"media-body\">
                                <div class=\"info\">
                                    <p class=\"name\">
                                    <h3>
                                        <span class=\"first_name\">";
                // line 34
                echo twig_escape_filter($this->env, $this->getAttribute($context["partner"], "firstName", array()), "html", null, true);
                echo "</span>
                                        <span class=\"last_name\">";
                // line 35
                echo twig_escape_filter($this->env, $this->getAttribute($context["partner"], "lastName", array()), "html", null, true);
                echo "</span>
                                    </h3>
                                    </p>
                                </div>
                                <a href=\"";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imd_app_messages_conversation", array("partnerId" => $this->getAttribute($context["partner"], "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-default actions\">Stuur een bericht</a>
                            </div>
                        </li>
                        <hr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['partner'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 44
            echo "                ";
        }
        // line 45
        echo "            </ul>
        </section>
        <section class=\"col-xs-12 col-sm-6\">
        <ul class=\"media-list\">
            <h2>Nieuwe berichten</h2>
            <small>
                <p class=\"txt-col-lightgray\">
                    Hier zie je alle nieuwe berichten.
                </p>
            </small>
            ";
        // line 55
        if ((twig_length_filter($this->env, (isset($context["news"]) ? $context["news"] : $this->getContext($context, "news"))) > 0)) {
            // line 56
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["news"]) ? $context["news"] : $this->getContext($context, "news")));
            foreach ($context['_seq'] as $context["_key"] => $context["new"]) {
                // line 57
                echo "                    <li class=\"userlist message_li col-xs-12 col-sm-6\">
                        <img src=\"";
                // line 58
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["new"], "sender", array()), "picture", array()), "html", null, true);
                echo "\" class=\"img-responsive img-thumbnail img-circle user-image-small center-block border-col-gold\">
                        <div>
                            <h1 class=\"message_name text-center txt-col-5\">";
                // line 60
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["new"], "sender", array()), "firstName", array()), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["new"], "sender", array()), "lastName", array()), "html", null, true);
                echo "</h1>
                        </div>
                        <div class=\"action-container center-block\">
                            <a href=\"";
                // line 63
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imd_app_messages_conversation", array("partnerId" => $this->getAttribute($this->getAttribute($context["new"], "sender", array()), "id", array()))), "html", null, true);
                echo "\" class=\"btn btn-spectre center-block\">Lees</a>
                        </div>
                    </li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['new'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 67
            echo "            ";
        } else {
            // line 68
            echo "                Geen nieuwe berichten
            ";
        }
        // line 70
        echo "        </ul>
        </section>
        <section class=\"col-xs-12 col-sm-6\">
        <ul class=\"media-list\">

            ";
        // line 75
        if ((twig_length_filter($this->env, (isset($context["conversations"]) ? $context["conversations"] : $this->getContext($context, "conversations"))) > 0)) {
            // line 76
            echo "                <h2>Alle berichten</h2>
                <small>
                    <p class=\"txt-col-lightgray\">
                        Hier zie je een overzicht van alle gesprekken.
                    </p>
                </small>
                ";
            // line 82
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["conversations"]) ? $context["conversations"] : $this->getContext($context, "conversations")));
            foreach ($context['_seq'] as $context["_key"] => $context["conversation"]) {
                // line 83
                echo "
                    ";
                // line 85
                echo "                    ";
                if (($this->getAttribute((isset($context["loggedInUser"]) ? $context["loggedInUser"] : $this->getContext($context, "loggedInUser")), "id", array()) == $this->getAttribute($this->getAttribute($this->getAttribute($context["conversation"], 0, array()), "receiver", array()), "id", array()))) {
                    // line 86
                    echo "                        <li class=\"userlist message_li col-xs-12 col-sm-6\">
                            <img src=\"";
                    // line 87
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["conversation"], 0, array()), "sender", array()), "picture", array()), "html", null, true);
                    echo "\" class=\"img-responsive img-thumbnail img-circle user-image-small center-block\">
                            <div class=\"center-block text-center\">
                                <h1 class=\"message_name\">";
                    // line 89
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["conversation"], 0, array()), "sender", array()), "firstName", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["conversation"], 0, array()), "sender", array()), "lastName", array()), "html", null, true);
                    echo "</h1>
                            </div>
                            <div class=\"action-container center-block\">
                                <a href=\"";
                    // line 92
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imd_app_messages_conversation", array("partnerId" => $this->getAttribute($this->getAttribute($this->getAttribute($context["conversation"], 0, array()), "sender", array()), "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-spectre center-block\">Lees alle berichten</a>
                            </div>
                        </li>
                    ";
                } else {
                    // line 96
                    echo "                        <li class=\"userlist message_li col-xs-12 col-sm-6\">
                            <img src=\"";
                    // line 97
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["conversation"], 0, array()), "receiver", array()), "picture", array()), "html", null, true);
                    echo "\" class=\"img-responsive img-thumbnail img-circle user-image-small center-block\">
                            <div class=\"center-block text-center\">
                                <h1 class=\"message_name\">";
                    // line 99
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["conversation"], 0, array()), "receiver", array()), "firstName", array()), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["conversation"], 0, array()), "receiver", array()), "lastName", array()), "html", null, true);
                    echo "</h1>
                            </div>
                            <div class=\"action-container center-block\">
                                <a href=\"";
                    // line 102
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("imd_app_messages_conversation", array("partnerId" => $this->getAttribute($this->getAttribute($this->getAttribute($context["conversation"], 0, array()), "receiver", array()), "id", array()))), "html", null, true);
                    echo "\" class=\"btn btn-spectre center-block\">Lees alle berichten</a>
                            </div>
                        </li>

                    ";
                }
                // line 107
                echo "

                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['conversation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 110
            echo "            ";
        } else {
            // line 111
            echo "                Geen berichten
            ";
        }
        // line 113
        echo "        </ul>
        </section>
    </div>
";
    }

    public function getTemplateName()
    {
        return "ImdAppBundle:Messages:messagelist.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  255 => 113,  251 => 111,  248 => 110,  240 => 107,  232 => 102,  224 => 99,  219 => 97,  216 => 96,  209 => 92,  201 => 89,  196 => 87,  193 => 86,  190 => 85,  187 => 83,  183 => 82,  175 => 76,  173 => 75,  166 => 70,  162 => 68,  159 => 67,  149 => 63,  141 => 60,  136 => 58,  133 => 57,  128 => 56,  126 => 55,  114 => 45,  111 => 44,  100 => 39,  93 => 35,  89 => 34,  79 => 27,  74 => 24,  69 => 23,  67 => 22,  56 => 14,  46 => 6,  43 => 5,  37 => 3,  11 => 1,);
    }
}
