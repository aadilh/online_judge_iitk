<?php

/* ucp_header.html */
class __TwigTemplate_0a14a0418d06dceb5ca0069d09a15b98 extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("overall_header.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "
<h2 class=\"ucp-title\">";
        // line 3
        echo $this->env->getExtension('phpbb')->lang("UCP");
        echo "</h2>

<div id=\"tabs\">
\t<ul>
\t\t";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "t_block1"));
        foreach ($context['_seq'] as $context["_key"] => $context["t_block1"]) {
            // line 8
            echo "\t\t<li ";
            if ($this->getAttribute((isset($context["t_block1"]) ? $context["t_block1"] : null), "S_SELECTED")) {
                echo "class=\"activetab\"";
            }
            echo "><a href=\"";
            echo $this->getAttribute((isset($context["t_block1"]) ? $context["t_block1"] : null), "U_TITLE");
            echo "\"><span>";
            echo $this->getAttribute((isset($context["t_block1"]) ? $context["t_block1"] : null), "L_TITLE");
            echo "</span></a></li>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t_block1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 10
        echo "\t</ul>
</div>

";
        // line 13
        if ((isset($context["S_COMPOSE_PM"]) ? $context["S_COMPOSE_PM"] : null)) {
            // line 14
            echo "<form id=\"postform\" method=\"post\" action=\"";
            echo (isset($context["S_POST_ACTION"]) ? $context["S_POST_ACTION"] : null);
            echo "\"";
            echo (isset($context["S_FORM_ENCTYPE"]) ? $context["S_FORM_ENCTYPE"] : null);
            echo ">
";
        }
        // line 16
        echo "
<div class=\"panel bg3\">
\t<div class=\"inner\">

\t<div style=\"width: 100%;\">

\t<div id=\"cp-menu\">
\t\t<div id=\"navigation\">

\t\t";
        // line 25
        if ((isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null)) {
            // line 26
            echo "\t\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "t_block2"));
            foreach ($context['_seq'] as $context["_key"] => $context["t_block2"]) {
                // line 27
                echo "\t\t\t\t";
                if (((isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null) && (!$this->getAttribute((isset($context["t_block2"]) ? $context["t_block2"] : null), "S_LAST_ROW")))) {
                    // line 28
                    echo "\t\t\t\t<ul>
\t\t\t\t\t";
                    // line 29
                    if ($this->getAttribute((isset($context["t_block2"]) ? $context["t_block2"] : null), "S_SELECTED")) {
                        // line 30
                        echo "\t\t\t\t\t\t<li id=\"active-subsection\"><a href=\"";
                        echo $this->getAttribute((isset($context["t_block2"]) ? $context["t_block2"] : null), "U_TITLE");
                        echo "\"><span>";
                        echo $this->getAttribute((isset($context["t_block2"]) ? $context["t_block2"] : null), "L_TITLE");
                        echo "</span></a></li>
\t\t\t\t\t";
                    } else {
                        // line 32
                        echo "\t\t\t\t\t\t<li><a href=\"";
                        echo $this->getAttribute((isset($context["t_block2"]) ? $context["t_block2"] : null), "U_TITLE");
                        echo "\"><span>";
                        echo $this->getAttribute((isset($context["t_block2"]) ? $context["t_block2"] : null), "L_TITLE");
                        echo "</span></a></li>
\t\t\t\t\t";
                    }
                    // line 34
                    echo "\t\t\t\t</ul>
\t\t\t\t";
                }
                // line 36
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t_block2'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "
\t\t\t<hr />
\t\t\t";
            // line 39
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "folder"));
            foreach ($context['_seq'] as $context["_key"] => $context["folder"]) {
                // line 40
                echo "\t\t\t\t";
                if ($this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "S_FIRST_ROW")) {
                    echo "<ul>";
                }
                // line 41
                echo "\t\t\t\t";
                if ($this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "S_CUR_FOLDER")) {
                    // line 42
                    echo "\t\t\t\t\t<li id=\"active-subsection\"><a href=\"";
                    echo $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "U_FOLDER");
                    echo "\">";
                    if (($this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "UNREAD_MESSAGES") > 0)) {
                        echo "<strong>";
                        echo $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "FOLDER_NAME");
                        echo " (";
                        echo $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "UNREAD_MESSAGES");
                        echo ")</strong>";
                    } else {
                        echo $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "FOLDER_NAME");
                    }
                    echo "</a></li>
\t\t\t\t";
                } else {
                    // line 44
                    echo "\t\t\t\t\t<li><a href=\"";
                    echo $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "U_FOLDER");
                    echo "\"><span>";
                    if (($this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "UNREAD_MESSAGES") > 0)) {
                        echo "<strong>";
                        echo $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "FOLDER_NAME");
                        echo " (";
                        echo $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "UNREAD_MESSAGES");
                        echo ")</strong>";
                    } else {
                        echo $this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "FOLDER_NAME");
                    }
                    echo "</span></a></li>
\t\t\t\t";
                }
                // line 46
                echo "\t\t\t\t";
                if ($this->getAttribute((isset($context["folder"]) ? $context["folder"] : null), "S_LAST_ROW")) {
                    echo "</ul>";
                }
                // line 47
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['folder'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 48
            echo "\t\t\t<hr />
\t\t";
        }
        // line 50
        echo "
\t\t\t<ul>
\t\t";
        // line 52
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "t_block2"));
        foreach ($context['_seq'] as $context["_key"] => $context["t_block2"]) {
            // line 53
            echo "\t\t\t";
            if ((((isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null) && $this->getAttribute((isset($context["t_block2"]) ? $context["t_block2"] : null), "S_LAST_ROW")) || (!(isset($context["S_PRIVMSGS"]) ? $context["S_PRIVMSGS"] : null)))) {
                // line 54
                echo "\t\t\t\t";
                if ($this->getAttribute((isset($context["t_block2"]) ? $context["t_block2"] : null), "S_SELECTED")) {
                    // line 55
                    echo "\t\t\t\t\t<li id=\"active-subsection\"><a href=\"";
                    echo $this->getAttribute((isset($context["t_block2"]) ? $context["t_block2"] : null), "U_TITLE");
                    echo "\"><span>";
                    echo $this->getAttribute((isset($context["t_block2"]) ? $context["t_block2"] : null), "L_TITLE");
                    echo "</span></a></li>
\t\t\t\t";
                } else {
                    // line 57
                    echo "\t\t\t\t\t<li><a href=\"";
                    echo $this->getAttribute((isset($context["t_block2"]) ? $context["t_block2"] : null), "U_TITLE");
                    echo "\"><span>";
                    echo $this->getAttribute((isset($context["t_block2"]) ? $context["t_block2"] : null), "L_TITLE");
                    echo "</span></a></li>
\t\t\t\t";
                }
                // line 59
                echo "\t\t\t";
            }
            // line 60
            echo "\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['t_block2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "\t\t\t</ul>
\t\t</div>

\t\t";
        // line 64
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "friends_online")) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "friends_offline")))) {
            // line 65
            echo "\t\t<div class=\"cp-mini\">
\t\t\t<div class=\"inner\">

\t\t\t<dl class=\"mini\">
\t\t\t\t<dt>";
            // line 69
            echo $this->env->getExtension('phpbb')->lang("FRIENDS");
            echo "</dt>

\t\t\t\t";
            // line 71
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "friends_online"));
            foreach ($context['_seq'] as $context["_key"] => $context["friends_online"]) {
                // line 72
                echo "\t\t\t\t\t<dd class=\"friend-online\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FRIENDS_ONLINE");
                echo "\">";
                echo $this->getAttribute((isset($context["friends_online"]) ? $context["friends_online"] : null), "USERNAME_FULL");
                echo " ";
                if ((isset($context["S_SHOW_PM_BOX"]) ? $context["S_SHOW_PM_BOX"] : null)) {
                    echo " <input type=\"submit\" name=\"add_to[";
                    echo $this->getAttribute((isset($context["friends_online"]) ? $context["friends_online"] : null), "USER_ID");
                    echo "]\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("ADD");
                    echo "\" class=\"button2\" />";
                }
                if (($this->getAttribute((isset($context["friends_online"]) ? $context["friends_online"] : null), "S_LAST_ROW") && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "friends_offline")))) {
                    echo "<hr />";
                }
                echo "</dd>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friends_online'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            echo "
\t\t\t\t";
            // line 75
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "friends_offline"));
            foreach ($context['_seq'] as $context["_key"] => $context["friends_offline"]) {
                // line 76
                echo "\t\t\t\t\t<dd class=\"friend-offline\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("FRIENDS_OFFLINE");
                echo "\">";
                echo $this->getAttribute((isset($context["friends_offline"]) ? $context["friends_offline"] : null), "USERNAME_FULL");
                echo " ";
                if ((isset($context["S_SHOW_PM_BOX"]) ? $context["S_SHOW_PM_BOX"] : null)) {
                    echo "<input type=\"submit\" name=\"add_to[";
                    echo $this->getAttribute((isset($context["friends_offline"]) ? $context["friends_offline"] : null), "USER_ID");
                    echo "]\" value=\"";
                    echo $this->env->getExtension('phpbb')->lang("ADD");
                    echo "\" class=\"button2\" />";
                }
                echo "</dd>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['friends_offline'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 78
            echo "\t\t\t</dl>

\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 83
        echo "
\t\t";
        // line 84
        if ((isset($context["S_SHOW_COLOUR_LEGEND"]) ? $context["S_SHOW_COLOUR_LEGEND"] : null)) {
            // line 85
            echo "\t\t<div class=\"cp-mini\">
\t\t\t<div class=\"inner\">

\t\t\t<dl class=\"mini\">
\t\t\t\t<dt>";
            // line 89
            echo $this->env->getExtension('phpbb')->lang("MESSAGE_COLOURS");
            echo "</dt>
\t\t\t\t";
            // line 90
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pm_colour_info"));
            foreach ($context['_seq'] as $context["_key"] => $context["pm_colour_info"]) {
                // line 91
                echo "\t\t\t\t\t<dd class=\"pm-legend";
                if ($this->getAttribute((isset($context["pm_colour_info"]) ? $context["pm_colour_info"] : null), "CLASS")) {
                    echo " ";
                    echo $this->getAttribute((isset($context["pm_colour_info"]) ? $context["pm_colour_info"] : null), "CLASS");
                }
                echo "\">";
                if ($this->getAttribute((isset($context["pm_colour_info"]) ? $context["pm_colour_info"] : null), "IMG")) {
                    echo $this->getAttribute((isset($context["pm_colour_info"]) ? $context["pm_colour_info"] : null), "IMG");
                    echo " ";
                }
                echo $this->getAttribute((isset($context["pm_colour_info"]) ? $context["pm_colour_info"] : null), "LANG");
                echo "</dd>
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pm_colour_info'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            echo "\t\t\t</dl>

\t\t\t</div>
\t\t</div>
\t\t";
        }
        // line 98
        echo "
\t</div>

\t<div id=\"cp-main\" class=\"ucp-main panel-container\">
";
    }

    public function getTemplateName()
    {
        return "ucp_header.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  350 => 98,  343 => 93,  325 => 91,  321 => 90,  317 => 89,  311 => 85,  309 => 84,  306 => 83,  299 => 78,  280 => 76,  276 => 75,  273 => 74,  251 => 72,  242 => 69,  236 => 65,  234 => 64,  229 => 61,  223 => 60,  212 => 57,  204 => 55,  201 => 54,  198 => 53,  194 => 52,  190 => 50,  186 => 48,  180 => 47,  175 => 46,  159 => 44,  143 => 42,  140 => 41,  135 => 40,  131 => 39,  127 => 37,  121 => 36,  117 => 34,  109 => 32,  101 => 30,  99 => 29,  96 => 28,  93 => 27,  86 => 25,  75 => 16,  67 => 14,  65 => 13,  45 => 8,  41 => 7,  320 => 68,  313 => 63,  301 => 62,  285 => 61,  270 => 60,  247 => 71,  240 => 58,  233 => 57,  227 => 54,  224 => 53,  220 => 59,  203 => 46,  195 => 45,  177 => 41,  172 => 40,  161 => 37,  156 => 36,  153 => 35,  148 => 32,  142 => 31,  132 => 29,  126 => 27,  118 => 26,  115 => 25,  111 => 24,  107 => 22,  105 => 21,  91 => 20,  88 => 26,  82 => 18,  73 => 17,  69 => 16,  60 => 10,  56 => 14,  49 => 11,  47 => 10,  42 => 8,  34 => 3,  31 => 2,  19 => 1,);
    }
}
