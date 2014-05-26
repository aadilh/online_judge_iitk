<?php

/* jumpbox.html */
class __TwigTemplate_beb4ae1095838b6b3dd894559852f215 extends Twig_Template
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
        echo "
";
        // line 2
        if ((isset($context["S_VIEWTOPIC"]) ? $context["S_VIEWTOPIC"] : null)) {
            // line 3
            echo "\t<p class=\"jumpbox-return\"><a href=\"";
            echo (isset($context["U_VIEW_FORUM"]) ? $context["U_VIEW_FORUM"] : null);
            echo "\" class=\"left-box arrow-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_FORUM");
            echo "</a></p>
";
        } elseif ((isset($context["S_VIEWFORUM"]) ? $context["S_VIEWFORUM"] : null)) {
            // line 5
            echo "\t<p class=\"jumpbox-return\"><a href=\"";
            echo (isset($context["U_INDEX"]) ? $context["U_INDEX"] : null);
            echo "\" class=\"left-box arrow-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_INDEX");
            echo "</a></p>
";
        } elseif ((isset($context["SEARCH_TOPIC"]) ? $context["SEARCH_TOPIC"] : null)) {
            // line 7
            echo "\t<p class=\"jumpbox-return\"><a class=\"left-box arrow-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" href=\"";
            echo (isset($context["U_SEARCH_TOPIC"]) ? $context["U_SEARCH_TOPIC"] : null);
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_TOPIC");
            echo "</a></p>
";
        } elseif ((isset($context["S_SEARCH_ACTION"]) ? $context["S_SEARCH_ACTION"] : null)) {
            // line 9
            echo "\t<p class=\"jumpbox-return\"><a class=\"left-box arrow-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" href=\"";
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "\" accesskey=\"r\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_SEARCH_ADV");
            echo "</a></p>
";
        }
        // line 11
        echo "
";
        // line 12
        if ((isset($context["S_DISPLAY_JUMPBOX"]) ? $context["S_DISPLAY_JUMPBOX"] : null)) {
            // line 13
            echo "\t<form method=\"get\" id=\"jumpbox\" action=\"";
            echo (isset($context["S_JUMPBOX_ACTION"]) ? $context["S_JUMPBOX_ACTION"] : null);
            echo "\" onsubmit=\"if(this.f.value == -1){return false;}\">

\t";
            // line 15
            if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "CUSTOM_FIELDSET_CLASS")) {
                // line 16
                echo "\t\t<fieldset class=\"";
                echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "CUSTOM_FIELDSET_CLASS");
                echo "\">
\t";
            } else {
                // line 18
                echo "\t\t<fieldset class=\"jumpbox\">
\t";
            }
            // line 20
            echo "\t\t\t";
            echo (isset($context["HIDDEN_FIELDS_FOR_JUMPBOX"]) ? $context["HIDDEN_FIELDS_FOR_JUMPBOX"] : null);
            echo "
\t\t\t<label for=\"f\" accesskey=\"j\">";
            // line 21
            if (((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null) && (isset($context["S_MERGE_SELECT"]) ? $context["S_MERGE_SELECT"] : null))) {
                echo $this->env->getExtension('phpbb')->lang("SELECT_TOPICS_FROM");
            } elseif ((isset($context["S_IN_MCP"]) ? $context["S_IN_MCP"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("MODERATE_FORUM");
            } else {
                echo $this->env->getExtension('phpbb')->lang("JUMP_TO");
            }
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t\t<select name=\"f\" id=\"f\" onchange=\"if(this.options[this.selectedIndex].value != -1){ document.forms['jumpbox'].submit() }\">
\t\t\t";
            // line 23
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "jumpbox_forums"));
            foreach ($context['_seq'] as $context["_key"] => $context["jumpbox_forums"]) {
                // line 24
                echo "\t\t\t\t";
                if (($this->getAttribute((isset($context["jumpbox_forums"]) ? $context["jumpbox_forums"] : null), "S_FORUM_COUNT") == 1)) {
                    echo "<option value=\"-1\">------------------</option>";
                }
                // line 25
                echo "\t\t\t\t<option value=\"";
                echo $this->getAttribute((isset($context["jumpbox_forums"]) ? $context["jumpbox_forums"] : null), "FORUM_ID");
                echo "\"";
                echo $this->getAttribute((isset($context["jumpbox_forums"]) ? $context["jumpbox_forums"] : null), "SELECTED");
                echo ">";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["jumpbox_forums"]) ? $context["jumpbox_forums"] : null), "level"));
                foreach ($context['_seq'] as $context["_key"] => $context["level"]) {
                    echo "&nbsp; &nbsp;";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['level'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                echo $this->getAttribute((isset($context["jumpbox_forums"]) ? $context["jumpbox_forums"] : null), "FORUM_NAME");
                echo "</option>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['jumpbox_forums'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 27
            echo "\t\t\t</select>
\t\t\t<input type=\"submit\" value=\"";
            // line 28
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" class=\"button2\" />
\t\t</fieldset>
\t</form>

";
        } else {
            // line 33
            echo "\t<br /><br />
";
        }
    }

    public function getTemplateName()
    {
        return "jumpbox.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 33,  139 => 28,  136 => 27,  110 => 24,  94 => 21,  89 => 20,  85 => 18,  79 => 16,  69 => 12,  66 => 11,  54 => 9,  44 => 7,  34 => 5,  24 => 3,  22 => 2,  967 => 257,  964 => 256,  950 => 253,  946 => 252,  943 => 251,  941 => 250,  938 => 249,  932 => 246,  920 => 245,  917 => 244,  915 => 243,  912 => 242,  900 => 241,  897 => 240,  892 => 237,  886 => 235,  883 => 234,  870 => 233,  868 => 232,  863 => 231,  855 => 230,  851 => 228,  827 => 225,  824 => 224,  822 => 223,  819 => 222,  817 => 221,  814 => 220,  808 => 216,  803 => 214,  799 => 213,  793 => 212,  785 => 211,  782 => 210,  771 => 209,  761 => 208,  755 => 206,  753 => 205,  750 => 204,  739 => 199,  735 => 197,  732 => 196,  726 => 194,  720 => 190,  718 => 189,  700 => 184,  692 => 183,  686 => 182,  680 => 181,  676 => 179,  675 => 178,  672 => 177,  668 => 175,  658 => 174,  646 => 173,  632 => 172,  629 => 171,  627 => 170,  624 => 169,  614 => 168,  605 => 167,  600 => 166,  597 => 165,  592 => 162,  586 => 161,  576 => 159,  570 => 157,  562 => 156,  559 => 155,  555 => 154,  551 => 152,  549 => 151,  538 => 150,  529 => 149,  521 => 148,  506 => 147,  505 => 146,  502 => 145,  496 => 144,  485 => 143,  481 => 142,  461 => 141,  458 => 140,  449 => 134,  445 => 133,  441 => 132,  427 => 131,  416 => 126,  414 => 125,  411 => 124,  405 => 120,  403 => 119,  400 => 118,  395 => 117,  392 => 116,  388 => 114,  375 => 104,  370 => 102,  362 => 98,  356 => 97,  350 => 95,  344 => 92,  339 => 91,  322 => 87,  313 => 81,  310 => 80,  308 => 79,  301 => 75,  296 => 72,  294 => 71,  291 => 70,  285 => 66,  279 => 64,  276 => 63,  263 => 62,  261 => 61,  256 => 60,  248 => 59,  244 => 57,  236 => 52,  232 => 51,  228 => 50,  223 => 48,  220 => 47,  218 => 46,  215 => 45,  191 => 42,  188 => 41,  186 => 40,  178 => 38,  176 => 37,  173 => 36,  159 => 34,  151 => 31,  148 => 30,  146 => 29,  144 => 28,  141 => 27,  135 => 23,  130 => 21,  125 => 20,  117 => 18,  115 => 25,  106 => 23,  104 => 13,  101 => 12,  97 => 10,  83 => 9,  77 => 15,  73 => 6,  71 => 13,  61 => 3,  31 => 2,  19 => 1,);
    }
}
