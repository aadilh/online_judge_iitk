<?php

/* search_results.html */
class __TwigTemplate_2bb5116ef960f4845be7f8b388ae1807 extends Twig_Template
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
<h2 class=\"searchresults-title\">";
        // line 3
        if ((isset($context["SEARCH_TITLE"]) ? $context["SEARCH_TITLE"] : null)) {
            echo (isset($context["SEARCH_TITLE"]) ? $context["SEARCH_TITLE"] : null);
        } else {
            echo (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null);
        }
        if ((isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null)) {
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <a href=\"";
            echo (isset($context["U_SEARCH_WORDS"]) ? $context["U_SEARCH_WORDS"] : null);
            echo "\">";
            echo (isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null);
            echo "</a>";
        }
        echo "</h2>
";
        // line 4
        if ((isset($context["SEARCHED_QUERY"]) ? $context["SEARCHED_QUERY"] : null)) {
            echo " <p>";
            echo $this->env->getExtension('phpbb')->lang("SEARCHED_QUERY");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <strong>";
            echo (isset($context["SEARCHED_QUERY"]) ? $context["SEARCHED_QUERY"] : null);
            echo "</strong></p>";
        }
        // line 5
        if ((isset($context["IGNORED_WORDS"]) ? $context["IGNORED_WORDS"] : null)) {
            echo " <p>";
            echo $this->env->getExtension('phpbb')->lang("IGNORED_TERMS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <strong>";
            echo (isset($context["IGNORED_WORDS"]) ? $context["IGNORED_WORDS"] : null);
            echo "</strong></p>";
        }
        // line 6
        if ((isset($context["PHRASE_SEARCH_DISABLED"]) ? $context["PHRASE_SEARCH_DISABLED"] : null)) {
            echo " <p><strong>";
            echo $this->env->getExtension('phpbb')->lang("PHRASE_SEARCH_DISABLED");
            echo "</strong></p>";
        }
        // line 7
        echo "
";
        // line 8
        if ((isset($context["SEARCH_TOPIC"]) ? $context["SEARCH_TOPIC"] : null)) {
            // line 9
            echo "\t<p><a class=\"arrow-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" href=\"";
            echo (isset($context["U_SEARCH_TOPIC"]) ? $context["U_SEARCH_TOPIC"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_TOPIC");
            echo "</a></p>
";
        } else {
            // line 11
            echo "\t<p><a class=\"arrow-";
            echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
            echo "\" href=\"";
            echo (isset($context["U_SEARCH"]) ? $context["U_SEARCH"] : null);
            echo "\" title=\"";
            echo $this->env->getExtension('phpbb')->lang("SEARCH_ADV");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("RETURN_TO_SEARCH_ADV");
            echo "</a></p>
";
        }
        // line 13
        echo "
";
        // line 14
        if (((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination")) || (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null)) || (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null))) {
            // line 15
            echo "\t<form method=\"post\" action=\"";
            echo (isset($context["S_SEARCH_ACTION"]) ? $context["S_SEARCH_ACTION"] : null);
            echo "\">

\t<div class=\"topic-actions\">

\t";
            // line 19
            if ((isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null)) {
                // line 20
                echo "\t\t<div class=\"search-box\">
\t\t\t";
                // line 21
                if ((isset($context["SEARCH_IN_RESULTS"]) ? $context["SEARCH_IN_RESULTS"] : null)) {
                    // line 22
                    echo "\t\t\t\t<label for=\"add_keywords\">";
                    echo $this->env->getExtension('phpbb')->lang("SEARCH_IN_RESULTS");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <input type=\"search\" name=\"add_keywords\" id=\"add_keywords\" value=\"\" class=\"inputbox narrow\" /></label>
\t\t\t\t<input class=\"button2\" type=\"submit\" name=\"submit\" value=\"";
                    // line 23
                    echo $this->env->getExtension('phpbb')->lang("SEARCH");
                    echo "\" />
\t\t\t";
                }
                // line 25
                echo "\t\t</div>
\t";
            }
            // line 27
            echo "
\t\t<div class=\"rightside pagination\">
\t\t\t";
            // line 29
            echo (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null);
            echo "
\t\t\t";
            // line 30
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination"))) {
                // line 31
                echo "\t\t\t\t&bull;
\t\t\t\t";
                // line 32
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->env->loadTemplate("pagination.html")->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 33
                echo "\t\t\t";
            } else {
                // line 34
                echo "\t\t\t\t";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "
\t\t\t";
            }
            // line 36
            echo "\t\t</div>
\t</div>

\t</form>
";
        }
        // line 41
        echo "
";
        // line 42
        if ((isset($context["S_SHOW_TOPICS"]) ? $context["S_SHOW_TOPICS"] : null)) {
            // line 43
            echo "
\t";
            // line 44
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults"))) {
                // line 45
                echo "\t<div class=\"forumbg\">

\t\t<div class=\"inner\">
\t\t<ul class=\"topiclist\">
\t\t\t<li class=\"header\">
\t\t\t\t<dl class=\"icon\">
\t\t\t\t\t<dt><div class=\"list-inner\">";
                // line 51
                echo $this->env->getExtension('phpbb')->lang("TOPICS");
                echo "</div></dt>
\t\t\t\t\t<dd class=\"posts\">";
                // line 52
                echo $this->env->getExtension('phpbb')->lang("REPLIES");
                echo "</dd>
\t\t\t\t\t<dd class=\"views\">";
                // line 53
                echo $this->env->getExtension('phpbb')->lang("VIEWS");
                echo "</dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>";
                // line 54
                echo $this->env->getExtension('phpbb')->lang("LAST_POST");
                echo "</span></dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t</ul>
\t\t<ul class=\"topiclist topics\">

\t\t";
                // line 60
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults"));
                foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                    // line 61
                    echo "\t\t\t<li class=\"row";
                    if (($this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "S_ROW_COUNT") % 2 == 0)) {
                        echo " bg1";
                    } else {
                        echo " bg2";
                    }
                    echo "\">
\t\t\t\t<dl class=\"icon ";
                    // line 62
                    echo $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "TOPIC_IMG_STYLE");
                    echo "\">
\t\t\t\t\t<dt ";
                    // line 63
                    if ($this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "TOPIC_ICON_IMG")) {
                        echo "style=\"background-image: url(";
                        echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                        echo $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "TOPIC_ICON_IMG");
                        echo "); background-repeat: no-repeat;\"";
                    }
                    echo " title=\"";
                    echo $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "TOPIC_FOLDER_IMG_ALT");
                    echo "\">
\t\t\t\t\t\t";
                    // line 64
                    if (($this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "S_UNREAD_TOPIC") && (!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)))) {
                        echo "<a href=\"";
                        echo $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "U_NEWEST_POST");
                        echo "\" class=\"icon-link\"></a>";
                    }
                    // line 65
                    echo "\t\t\t\t\t\t<div class=\"list-inner\">

\t\t\t\t\t\t\t";
                    // line 67
                    // line 68
                    echo "\t\t\t\t\t\t\t";
                    if (($this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "S_UNREAD_TOPIC") && (!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)))) {
                        echo "<a href=\"";
                        echo $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "U_NEWEST_POST");
                        echo "\">";
                        echo (isset($context["NEWEST_POST_IMG"]) ? $context["NEWEST_POST_IMG"] : null);
                        echo "</a> ";
                    }
                    // line 69
                    echo "\t\t\t\t\t\t\t<a href=\"";
                    echo $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "U_VIEW_TOPIC");
                    echo "\" class=\"topictitle\">";
                    echo $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "TOPIC_TITLE");
                    echo "</a> ";
                    echo $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "ATTACH_ICON_IMG");
                    echo "
\t\t\t\t\t\t\t";
                    // line 70
                    if (($this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "S_TOPIC_UNAPPROVED") || $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "S_POSTS_UNAPPROVED"))) {
                        echo "<a href=\"";
                        echo $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "U_MCP_QUEUE");
                        echo "\">";
                        echo $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "UNAPPROVED_IMG");
                        echo "</a> ";
                    }
                    // line 71
                    echo "\t\t\t\t\t\t\t";
                    if ($this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "S_TOPIC_DELETED")) {
                        echo "<a href=\"";
                        echo $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "U_MCP_QUEUE");
                        echo "\">";
                        echo (isset($context["DELETED_IMG"]) ? $context["DELETED_IMG"] : null);
                        echo "</a> ";
                    }
                    // line 72
                    echo "\t\t\t\t\t\t\t";
                    if ($this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "S_TOPIC_REPORTED")) {
                        echo "<a href=\"";
                        echo $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "U_MCP_REPORT");
                        echo "\">";
                        echo (isset($context["REPORTED_IMG"]) ? $context["REPORTED_IMG"] : null);
                        echo "</a>";
                    }
                    echo "<br />
\t\t\t\t\t\t\t";
                    // line 73
                    if (twig_length_filter($this->env, $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "pagination"))) {
                        // line 74
                        echo "\t\t\t\t\t\t\t<div class=\"pagination\">
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                        // line 76
                        $context['_parent'] = (array) $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "pagination"));
                        foreach ($context['_seq'] as $context["_key"] => $context["pagination"]) {
                            // line 77
                            echo "\t\t\t\t\t\t\t\t\t";
                            if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "S_IS_PREV")) {
                                // line 78
                                echo "\t\t\t\t\t\t\t\t\t";
                            } elseif ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "S_IS_CURRENT")) {
                                echo "<li class=\"active\"><span>";
                                echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "PAGE_NUMBER");
                                echo "</span></li>
\t\t\t\t\t\t\t\t\t";
                            } elseif ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "S_IS_ELLIPSIS")) {
                                // line 79
                                echo "<li class=\"ellipsis\"><span>";
                                echo $this->env->getExtension('phpbb')->lang("ELLIPSIS");
                                echo "</span></li>
\t\t\t\t\t\t\t\t\t";
                            } elseif ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "S_IS_NEXT")) {
                                // line 81
                                echo "\t\t\t\t\t\t\t\t\t";
                            } else {
                                echo "<li><a href=\"";
                                echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "PAGE_URL");
                                echo "\">";
                                echo $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : null), "PAGE_NUMBER");
                                echo "</a></li>
\t\t\t\t\t\t\t\t\t";
                            }
                            // line 83
                            echo "\t\t\t\t\t\t\t\t";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['pagination'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        // line 84
                        echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t";
                    }
                    // line 87
                    echo "\t\t\t\t\t\t\t";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "TOPIC_AUTHOR_FULL");
                    echo " &raquo; ";
                    echo $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "FIRST_POST_TIME");
                    echo " &raquo; ";
                    echo $this->env->getExtension('phpbb')->lang("IN");
                    echo " <a href=\"";
                    echo $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "U_VIEW_FORUM");
                    echo "\">";
                    echo $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "FORUM_TITLE");
                    echo "</a>
\t\t\t\t\t\t\t";
                    // line 88
                    // line 89
                    echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t</dt>
\t\t\t\t\t<dd class=\"posts\">";
                    // line 92
                    echo $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "TOPIC_REPLIES");
                    echo "</dd>
\t\t\t\t\t<dd class=\"views\">";
                    // line 93
                    echo $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "TOPIC_VIEWS");
                    echo "</dd>
\t\t\t\t\t<dd class=\"lastpost\"><span>
\t\t\t\t\t\t";
                    // line 95
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "LAST_POST_AUTHOR_FULL");
                    echo "
\t\t\t\t\t\t";
                    // line 96
                    if ((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                        echo "<a href=\"";
                        echo $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "U_LAST_POST");
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("GOTO_LAST_POST");
                        echo "\">";
                        echo (isset($context["LAST_POST_IMG"]) ? $context["LAST_POST_IMG"] : null);
                        echo "</a> ";
                    }
                    echo "<br />";
                    echo $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "LAST_POST_TIME");
                    echo "<br /> </span>
\t\t\t\t\t</dd>
\t\t\t\t</dl>
\t\t\t</li>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 101
                echo "\t\t</ul>

\t\t</div>
\t</div>
\t";
            } else {
                // line 106
                echo "\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">
\t\t\t<strong>";
                // line 108
                echo $this->env->getExtension('phpbb')->lang("NO_SEARCH_RESULTS");
                echo "</strong>
\t\t\t</div>
\t\t</div>
\t";
            }
            // line 112
            echo "
";
        } else {
            // line 114
            echo "
\t";
            // line 115
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults"));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["searchresults"]) {
                // line 116
                echo "\t\t";
                // line 117
                echo "\t\t<div class=\"search post ";
                if (($this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "S_ROW_COUNT") % 2 == 1)) {
                    echo "bg1";
                } else {
                    echo "bg2";
                }
                if ($this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "S_POST_REPORTED")) {
                    echo " reported";
                }
                echo "\">
\t\t\t<div class=\"inner\">

\t";
                // line 120
                if ($this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "S_IGNORE_POST")) {
                    // line 121
                    echo "\t\t<div class=\"postbody\">
\t\t\t";
                    // line 122
                    echo $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "L_IGNORE_POST");
                    echo "
\t\t</div>
\t";
                } else {
                    // line 125
                    echo "\t\t<dl class=\"postprofile\">
\t\t\t";
                    // line 126
                    // line 127
                    echo "\t\t\t<dt class=\"author\">";
                    echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
                    echo " ";
                    echo $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "POST_AUTHOR_FULL");
                    echo "</dt>
\t\t\t<dd class=\"search-result-date\">";
                    // line 128
                    echo $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "POST_DATE");
                    echo "</dd>
\t\t\t<dd>";
                    // line 129
                    echo $this->env->getExtension('phpbb')->lang("FORUM");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <a href=\"";
                    echo $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "U_VIEW_FORUM");
                    echo "\">";
                    echo $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "FORUM_TITLE");
                    echo "</a></dd>
\t\t\t<dd>";
                    // line 130
                    echo $this->env->getExtension('phpbb')->lang("TOPIC");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <a href=\"";
                    echo $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "U_VIEW_TOPIC");
                    echo "\">";
                    echo $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "TOPIC_TITLE");
                    echo "</a></dd>
\t\t\t<dd>";
                    // line 131
                    echo $this->env->getExtension('phpbb')->lang("REPLIES");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <strong>";
                    echo $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "TOPIC_REPLIES");
                    echo "</strong></dd>
\t\t\t<dd>";
                    // line 132
                    echo $this->env->getExtension('phpbb')->lang("VIEWS");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo " <strong>";
                    echo $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "TOPIC_VIEWS");
                    echo "</strong></dd>
\t\t\t";
                    // line 133
                    // line 134
                    echo "\t\t</dl>

\t\t<div class=\"postbody\">
\t\t\t<h3><a href=\"";
                    // line 137
                    echo $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "U_VIEW_POST");
                    echo "\">";
                    echo $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "POST_SUBJECT");
                    echo "</a></h3>
\t\t\t<div class=\"content\">";
                    // line 138
                    echo $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "MESSAGE");
                    echo "</div>
\t\t</div>
\t";
                }
                // line 141
                echo "
\t";
                // line 142
                if ((!$this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "S_IGNORE_POST"))) {
                    // line 143
                    echo "\t\t<ul class=\"searchresults\">
\t\t\t<li ><a href=\"";
                    // line 144
                    echo $this->getAttribute((isset($context["searchresults"]) ? $context["searchresults"] : null), "U_VIEW_POST");
                    echo "\" class=\"arrow-";
                    echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
                    echo "\">";
                    echo $this->env->getExtension('phpbb')->lang("JUMP_TO_POST");
                    echo "</a></li>
\t\t</ul>
\t";
                }
                // line 147
                echo "
\t\t\t</div>
\t\t</div>
\t\t";
                // line 150
                // line 151
                echo "\t";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 152
                echo "\t\t<div class=\"panel\">
\t\t\t<div class=\"inner\">
\t\t\t<strong>";
                // line 154
                echo $this->env->getExtension('phpbb')->lang("NO_SEARCH_RESULTS");
                echo "</strong>
\t\t\t</div>
\t\t</div>
\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['searchresults'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 159
        echo "
";
        // line 160
        if ((((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination")) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults"))) || (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null)) || (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null))) {
            // line 161
            echo "\t<form method=\"post\" action=\"";
            echo (isset($context["S_SEARCH_ACTION"]) ? $context["S_SEARCH_ACTION"] : null);
            echo "\">

\t<fieldset class=\"display-options\">
\t\t";
            // line 164
            if ((isset($context["U_PREVIOUS_PAGE"]) ? $context["U_PREVIOUS_PAGE"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_PREVIOUS_PAGE"]) ? $context["U_PREVIOUS_PAGE"] : null);
                echo "\" class=\"left-box arrow-";
                echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("PREVIOUS");
                echo "</a>";
            }
            // line 165
            echo "\t\t";
            if ((isset($context["U_NEXT_PAGE"]) ? $context["U_NEXT_PAGE"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_NEXT_PAGE"]) ? $context["U_NEXT_PAGE"] : null);
                echo "\" class=\"right-box arrow-";
                echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("NEXT");
                echo "</a>";
            }
            // line 166
            echo "\t\t";
            if (((isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null) || (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null))) {
                // line 167
                echo "\t\t\t<label>";
                if ((isset($context["S_SHOW_TOPICS"]) ? $context["S_SHOW_TOPICS"] : null)) {
                    echo $this->env->getExtension('phpbb')->lang("DISPLAY_POSTS");
                } else {
                    echo $this->env->getExtension('phpbb')->lang("SORT_BY");
                    echo "</label><label>";
                }
                echo " ";
                echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
                if ((isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null)) {
                    echo "</label> <label>";
                    echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
                    echo "</label>
\t\t\t<label>";
                    // line 168
                    echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
                }
                echo "</label>
\t\t\t<input type=\"submit\" name=\"sort\" value=\"";
                // line 169
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\" class=\"button2\" />
\t\t";
            }
            // line 171
            echo "\t</fieldset>

\t</form>

\t<hr />
";
        }
        // line 177
        echo "
";
        // line 178
        if (((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination")) || twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "searchresults"))) || (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null))) {
            // line 179
            echo "\t<ul class=\"linklist\">
\t\t<li class=\"rightside pagination\">
\t\t\t";
            // line 181
            echo (isset($context["SEARCH_MATCHES"]) ? $context["SEARCH_MATCHES"] : null);
            echo "
\t\t\t";
            // line 182
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination"))) {
                // line 183
                echo "\t\t\t\t&bull;
\t\t\t\t";
                // line 184
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->env->loadTemplate("pagination.html")->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 185
                echo "\t\t\t";
            } else {
                // line 186
                echo "\t\t\t\t";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "
\t\t\t";
            }
            // line 188
            echo "\t\t</li>
\t</ul>
";
        }
        // line 191
        echo "
";
        // line 192
        $location = "jumpbox.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("jumpbox.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 193
        echo "
";
        // line 194
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("overall_footer.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "search_results.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  703 => 194,  700 => 193,  688 => 192,  685 => 191,  680 => 188,  674 => 186,  671 => 185,  659 => 184,  656 => 183,  654 => 182,  650 => 181,  646 => 179,  644 => 178,  641 => 177,  633 => 171,  628 => 169,  623 => 168,  608 => 167,  605 => 166,  594 => 165,  584 => 164,  577 => 161,  575 => 160,  572 => 159,  561 => 154,  557 => 152,  552 => 151,  551 => 150,  546 => 147,  536 => 144,  533 => 143,  531 => 142,  528 => 141,  522 => 138,  516 => 137,  511 => 134,  510 => 133,  503 => 132,  496 => 131,  487 => 130,  478 => 129,  474 => 128,  467 => 127,  466 => 126,  463 => 125,  457 => 122,  454 => 121,  452 => 120,  438 => 117,  436 => 116,  431 => 115,  428 => 114,  424 => 112,  417 => 108,  413 => 106,  406 => 101,  385 => 96,  379 => 95,  374 => 93,  370 => 92,  365 => 89,  364 => 88,  349 => 87,  344 => 84,  338 => 83,  328 => 81,  322 => 79,  314 => 78,  311 => 77,  307 => 76,  303 => 74,  301 => 73,  290 => 72,  281 => 71,  273 => 70,  264 => 69,  255 => 68,  254 => 67,  250 => 65,  244 => 64,  233 => 63,  229 => 62,  220 => 61,  216 => 60,  207 => 54,  203 => 53,  199 => 52,  195 => 51,  187 => 45,  185 => 44,  182 => 43,  180 => 42,  177 => 41,  170 => 36,  164 => 34,  161 => 33,  149 => 32,  146 => 31,  144 => 30,  140 => 29,  136 => 27,  132 => 25,  127 => 23,  121 => 22,  119 => 21,  116 => 20,  114 => 19,  106 => 15,  104 => 14,  101 => 13,  89 => 11,  79 => 9,  77 => 8,  74 => 7,  68 => 6,  59 => 5,  50 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
