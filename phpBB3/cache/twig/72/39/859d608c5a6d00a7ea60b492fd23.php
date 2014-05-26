<?php

/* viewtopic_topic_tools.html */
class __TwigTemplate_7239859d608c5a6d00a7ea60b492fd23 extends Twig_Template
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
        if (((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) && (((((((isset($context["U_WATCH_TOPIC"]) ? $context["U_WATCH_TOPIC"] : null) || (isset($context["U_BOOKMARK_TOPIC"]) ? $context["U_BOOKMARK_TOPIC"] : null)) || (isset($context["U_BUMP_TOPIC"]) ? $context["U_BUMP_TOPIC"] : null)) || (isset($context["S_HAS_ATTACHMENTS"]) ? $context["S_HAS_ATTACHMENTS"] : null)) || (isset($context["U_EMAIL_TOPIC"]) ? $context["U_EMAIL_TOPIC"] : null)) || (isset($context["U_PRINT_TOPIC"]) ? $context["U_PRINT_TOPIC"] : null)) || (isset($context["S_DISPLAY_TOPIC_TOOLS"]) ? $context["S_DISPLAY_TOPIC_TOOLS"] : null)))) {
            // line 2
            echo "\t<div class=\"dropdown-container dropdown-button-control topic-tools\">
\t\t<span title=\"";
            // line 3
            echo $this->env->getExtension('phpbb')->lang("TOPIC_TOOLS");
            echo "\" class=\"dropdown-trigger dropdown-select dropdown-select-icon tools-icon\"><span></span></span>
\t\t<div class=\"dropdown hidden\">
\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t<ul class=\"dropdown-contents\">
\t\t\t\t";
            // line 7
            // line 8
            echo "\t\t\t\t";
            if ((isset($context["U_WATCH_TOPIC"]) ? $context["U_WATCH_TOPIC"] : null)) {
                // line 9
                echo "\t\t\t\t\t<li class=\"small-icon icon-";
                if ((isset($context["S_WATCHING_TOPIC"]) ? $context["S_WATCHING_TOPIC"] : null)) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\">
\t\t\t\t\t\t<a href=\"";
                // line 10
                echo (isset($context["U_WATCH_TOPIC"]) ? $context["U_WATCH_TOPIC"] : null);
                echo "\" class=\"watch-topic-link\" title=\"";
                echo (isset($context["S_WATCH_TOPIC_TITLE"]) ? $context["S_WATCH_TOPIC_TITLE"] : null);
                echo "\" data-ajax=\"toggle_link\" data-toggle-class=\"small-icon icon-";
                if ((!(isset($context["S_WATCHING_TOPIC"]) ? $context["S_WATCHING_TOPIC"] : null))) {
                    echo "unsubscribe";
                } else {
                    echo "subscribe";
                }
                echo "\" data-toggle-text=\"";
                echo (isset($context["S_WATCH_TOPIC_TOGGLE"]) ? $context["S_WATCH_TOPIC_TOGGLE"] : null);
                echo "\" data-toggle-url=\"";
                echo (isset($context["U_WATCH_TOPIC_TOGGLE"]) ? $context["U_WATCH_TOPIC_TOGGLE"] : null);
                echo "\" data-update-all=\".watch-topic-link\">
\t\t\t\t\t\t\t";
                // line 11
                echo (isset($context["S_WATCH_TOPIC_TITLE"]) ? $context["S_WATCH_TOPIC_TITLE"] : null);
                echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 15
            echo "\t\t\t\t";
            if ((isset($context["U_BOOKMARK_TOPIC"]) ? $context["U_BOOKMARK_TOPIC"] : null)) {
                // line 16
                echo "\t\t\t\t\t<li class=\"small-icon icon-bookmark\">
\t\t\t\t\t\t<a href=\"";
                // line 17
                echo (isset($context["U_BOOKMARK_TOPIC"]) ? $context["U_BOOKMARK_TOPIC"] : null);
                echo "\" class=\"bookmark-link\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BOOKMARK_TOPIC");
                echo "\" data-ajax=\"alt_text\" data-alt-text=\"";
                echo (isset($context["S_BOOKMARK_TOGGLE"]) ? $context["S_BOOKMARK_TOGGLE"] : null);
                echo "\" data-update-all=\".bookmark-link\">
\t\t\t\t\t\t\t";
                // line 18
                echo (isset($context["S_BOOKMARK_TOPIC"]) ? $context["S_BOOKMARK_TOPIC"] : null);
                echo "
\t\t\t\t\t\t</a>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 22
            echo "\t\t\t\t";
            if ((isset($context["U_BUMP_TOPIC"]) ? $context["U_BUMP_TOPIC"] : null)) {
                echo "<li class=\"small-icon icon-bump\"><a href=\"";
                echo (isset($context["U_BUMP_TOPIC"]) ? $context["U_BUMP_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("BUMP_TOPIC");
                echo "\" data-ajax=\"true\">";
                echo $this->env->getExtension('phpbb')->lang("BUMP_TOPIC");
                echo "</a></li>";
            }
            // line 23
            echo "\t\t\t\t";
            if ((isset($context["U_EMAIL_TOPIC"]) ? $context["U_EMAIL_TOPIC"] : null)) {
                echo "<li class=\"small-icon icon-sendemail\"><a href=\"";
                echo (isset($context["U_EMAIL_TOPIC"]) ? $context["U_EMAIL_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("EMAIL_TOPIC");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("EMAIL_TOPIC");
                echo "</a></li>";
            }
            // line 24
            echo "\t\t\t\t";
            if ((isset($context["U_PRINT_TOPIC"]) ? $context["U_PRINT_TOPIC"] : null)) {
                echo "<li class=\"small-icon icon-print\"><a href=\"";
                echo (isset($context["U_PRINT_TOPIC"]) ? $context["U_PRINT_TOPIC"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("PRINT_TOPIC");
                echo "\" accesskey=\"p\">";
                echo $this->env->getExtension('phpbb')->lang("PRINT_TOPIC");
                echo "</a></li>";
            }
            // line 25
            echo "\t\t\t\t";
            if ((isset($context["S_HAS_ATTACHMENTS"]) ? $context["S_HAS_ATTACHMENTS"] : null)) {
                // line 26
                echo "\t\t\t\t\t<li class=\"small-icon icon-download\">
\t\t\t\t\t\t<a class=\"dropdown-toggle-submenu\" href=\"";
                // line 27
                echo (isset($context["U_DOWNLOAD_ALL_ATTACHMENTS"]) ? $context["U_DOWNLOAD_ALL_ATTACHMENTS"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("DOWNLOAD_ALL_ATTACHMENTS");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("DOWNLOAD_ALL_ATTACHMENTS");
                echo "</a>
\t\t\t\t\t\t<ul class=\"dropdown-submenu hidden\">
\t\t\t\t\t\t\t<li>
\t\t\t\t\t\t\t";
                // line 30
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "dl_method"));
                foreach ($context['_seq'] as $context["_key"] => $context["dl_method"]) {
                    // line 31
                    echo "\t\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute((isset($context["dl_method"]) ? $context["dl_method"] : null), "LINK");
                    echo "\">";
                    echo $this->getAttribute((isset($context["dl_method"]) ? $context["dl_method"] : null), "TYPE");
                    echo "</a>";
                    if ((!$this->getAttribute((isset($context["dl_method"]) ? $context["dl_method"] : null), "S_LAST_ROW"))) {
                        echo " &bull; ";
                    }
                    echo " 
\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dl_method'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 33
                echo "\t\t\t\t\t\t\t</li>
\t\t\t\t\t\t</ul>
\t\t\t\t\t</li>
\t\t\t\t";
            }
            // line 37
            echo "\t\t\t\t";
            // line 38
            echo "\t\t\t</ul>
\t\t</div>
\t</div>
";
        }
    }

    public function getTemplateName()
    {
        return "viewtopic_topic_tools.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  164 => 38,  162 => 37,  156 => 33,  141 => 31,  137 => 30,  124 => 26,  121 => 25,  110 => 24,  99 => 23,  88 => 22,  81 => 18,  73 => 17,  70 => 16,  67 => 15,  60 => 11,  44 => 10,  35 => 9,  32 => 8,  24 => 3,  21 => 2,  1403 => 362,  1400 => 361,  1394 => 358,  1382 => 357,  1379 => 356,  1377 => 355,  1374 => 354,  1367 => 350,  1363 => 349,  1360 => 348,  1349 => 346,  1345 => 345,  1339 => 343,  1333 => 341,  1331 => 340,  1328 => 339,  1316 => 338,  1315 => 337,  1310 => 334,  1306 => 332,  1300 => 330,  1297 => 329,  1284 => 328,  1282 => 327,  1278 => 326,  1275 => 325,  1273 => 324,  1270 => 323,  1258 => 322,  1254 => 320,  1230 => 318,  1228 => 317,  1224 => 315,  1223 => 314,  1220 => 313,  1213 => 308,  1208 => 306,  1200 => 305,  1192 => 304,  1189 => 303,  1178 => 302,  1168 => 301,  1161 => 298,  1159 => 297,  1145 => 295,  1143 => 294,  1138 => 292,  1127 => 286,  1121 => 282,  1112 => 281,  1110 => 280,  1104 => 279,  1101 => 278,  1097 => 276,  1088 => 275,  1084 => 274,  1081 => 273,  1077 => 271,  1068 => 270,  1064 => 269,  1061 => 268,  1058 => 267,  1051 => 266,  1050 => 265,  1047 => 264,  1043 => 262,  1034 => 260,  1030 => 259,  1027 => 258,  1022 => 255,  1011 => 253,  1007 => 252,  1001 => 250,  998 => 249,  996 => 248,  992 => 247,  988 => 245,  986 => 244,  981 => 242,  978 => 241,  970 => 238,  967 => 237,  965 => 236,  962 => 235,  955 => 231,  951 => 230,  947 => 229,  943 => 228,  939 => 227,  933 => 225,  926 => 221,  922 => 220,  918 => 219,  914 => 218,  910 => 217,  904 => 215,  902 => 214,  883 => 212,  880 => 211,  877 => 210,  873 => 208,  871 => 207,  860 => 206,  849 => 205,  838 => 204,  827 => 203,  816 => 202,  805 => 201,  804 => 200,  801 => 199,  798 => 198,  796 => 197,  774 => 195,  764 => 193,  761 => 192,  755 => 189,  751 => 188,  746 => 187,  740 => 184,  736 => 183,  731 => 182,  728 => 181,  726 => 180,  720 => 176,  718 => 175,  711 => 170,  705 => 169,  701 => 167,  699 => 166,  694 => 164,  676 => 163,  672 => 161,  669 => 160,  665 => 159,  662 => 158,  658 => 157,  648 => 151,  645 => 150,  642 => 149,  641 => 148,  638 => 147,  636 => 146,  630 => 145,  619 => 143,  616 => 142,  611 => 141,  610 => 140,  607 => 139,  599 => 137,  596 => 136,  594 => 135,  591 => 134,  581 => 133,  572 => 132,  569 => 131,  559 => 130,  555 => 128,  546 => 127,  543 => 126,  530 => 125,  528 => 124,  520 => 123,  512 => 122,  487 => 119,  482 => 118,  480 => 117,  476 => 116,  473 => 115,  464 => 109,  460 => 108,  453 => 104,  450 => 103,  442 => 100,  438 => 98,  436 => 97,  433 => 96,  427 => 93,  423 => 91,  421 => 90,  412 => 87,  405 => 85,  402 => 84,  396 => 83,  395 => 82,  382 => 80,  359 => 79,  333 => 78,  321 => 77,  303 => 76,  301 => 75,  297 => 74,  283 => 71,  279 => 70,  269 => 64,  267 => 63,  262 => 60,  258 => 58,  252 => 56,  249 => 55,  236 => 54,  234 => 53,  223 => 52,  220 => 51,  218 => 50,  215 => 49,  207 => 44,  203 => 43,  199 => 42,  194 => 40,  191 => 39,  189 => 38,  186 => 37,  174 => 36,  170 => 34,  146 => 32,  144 => 31,  138 => 27,  132 => 23,  127 => 27,  122 => 20,  114 => 18,  112 => 17,  103 => 14,  101 => 13,  98 => 12,  85 => 9,  82 => 8,  80 => 7,  77 => 6,  71 => 5,  61 => 3,  31 => 7,  19 => 1,);
    }
}
