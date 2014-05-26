<?php

/* viewtopic_body.html */
class __TwigTemplate_2197702af0b7c09dcf89b14b9d9093f8 extends Twig_Template
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
        if (((isset($context["U_MCP"]) ? $context["U_MCP"] : null) || (isset($context["U_ACP"]) ? $context["U_ACP"] : null))) {
            echo "<p class=\"responsive-center\">[&nbsp;";
            if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("ACP");
                echo "\" data-responsive-text=\"";
                echo $this->env->getExtension('phpbb')->lang("ACP_SHORT");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("ACP");
                echo "</a>";
                if ((isset($context["U_MCP"]) ? $context["U_MCP"] : null)) {
                    echo "&nbsp;|&nbsp;";
                }
            }
            if ((isset($context["U_MCP"]) ? $context["U_MCP"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_MCP"]) ? $context["U_MCP"] : null);
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("MCP");
                echo "\" data-responsive-text=\"";
                echo $this->env->getExtension('phpbb')->lang("MCP_SHORT");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("MCP");
                echo "</a>";
            }
            echo "&nbsp;]</p>";
        }
        // line 3
        echo "<h2 class=\"topic-title\">";
        echo "<a href=\"";
        echo (isset($context["U_VIEW_TOPIC"]) ? $context["U_VIEW_TOPIC"] : null);
        echo "\">";
        echo (isset($context["TOPIC_TITLE"]) ? $context["TOPIC_TITLE"] : null);
        echo "</a>";
        echo "</h2>
<!-- NOTE: remove the style=\"display: none\" when you want to have the forum description on the topic body -->
";
        // line 5
        if ((isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null)) {
            echo "<div style=\"display: none !important;\">";
            echo (isset($context["FORUM_DESC"]) ? $context["FORUM_DESC"] : null);
            echo "<br /></div>";
        }
        // line 6
        echo "
";
        // line 7
        if ((isset($context["MODERATORS"]) ? $context["MODERATORS"] : null)) {
            // line 8
            echo "<p>
\t<strong>";
            // line 9
            if ((isset($context["S_SINGLE_MODERATOR"]) ? $context["S_SINGLE_MODERATOR"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("MODERATOR");
            } else {
                echo $this->env->getExtension('phpbb')->lang("MODERATORS");
            }
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</strong> ";
            echo (isset($context["MODERATORS"]) ? $context["MODERATORS"] : null);
            echo "
</p>
";
        }
        // line 12
        echo "
";
        // line 13
        if ((isset($context["S_FORUM_RULES"]) ? $context["S_FORUM_RULES"] : null)) {
            // line 14
            echo "\t<div class=\"rules";
            if ((isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null)) {
                echo " rules-link";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t";
            // line 17
            if ((isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null)) {
                // line 18
                echo "\t\t\t<a href=\"";
                echo (isset($context["U_FORUM_RULES"]) ? $context["U_FORUM_RULES"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
                echo "</a>
\t\t";
            } else {
                // line 20
                echo "\t\t\t<strong>";
                echo $this->env->getExtension('phpbb')->lang("FORUM_RULES");
                echo "</strong><br />
\t\t\t";
                // line 21
                echo (isset($context["FORUM_RULES"]) ? $context["FORUM_RULES"] : null);
                echo "
\t\t";
            }
            // line 23
            echo "
\t\t</div>
\t</div>
";
        }
        // line 27
        echo "
<div class=\"topic-actions\">

\t<div class=\"buttons\">
\t";
        // line 31
        if (((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) && (isset($context["S_DISPLAY_REPLY_INFO"]) ? $context["S_DISPLAY_REPLY_INFO"] : null))) {
            // line 32
            echo "\t\t<div class=\"";
            if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                echo "locked-icon";
            } else {
                echo "reply-icon";
            }
            echo "\"><a href=\"";
            echo (isset($context["U_POST_REPLY_TOPIC"]) ? $context["U_POST_REPLY_TOPIC"] : null);
            echo "\" title=\"";
            if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("TOPIC_LOCKED");
            } else {
                echo $this->env->getExtension('phpbb')->lang("POST_REPLY");
            }
            echo "\"><span></span>";
            if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("BUTTON_TOPIC_LOCKED");
            } else {
                echo $this->env->getExtension('phpbb')->lang("BUTTON_POST_REPLY");
            }
            echo "</a></div>
\t";
        }
        // line 34
        echo "\t</div>

\t";
        // line 36
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("viewtopic_topic_tools.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 37
        echo "
\t";
        // line 38
        if ((isset($context["S_DISPLAY_SEARCHBOX"]) ? $context["S_DISPLAY_SEARCHBOX"] : null)) {
            // line 39
            echo "\t\t<div class=\"search-box\">
\t\t\t<form method=\"get\" id=\"topic-search\" action=\"";
            // line 40
            echo (isset($context["S_SEARCHBOX_ACTION"]) ? $context["S_SEARCHBOX_ACTION"] : null);
            echo "\">
\t\t\t<fieldset>
\t\t\t\t<input class=\"inputbox search tiny\"  type=\"search\" name=\"keywords\" id=\"search_keywords\" size=\"20\" placeholder=\"";
            // line 42
            echo $this->env->getExtension('phpbb')->lang("SEARCH_TOPIC");
            echo "\" />
\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
            // line 43
            echo $this->env->getExtension('phpbb')->lang("SEARCH");
            echo "\" />
\t\t\t\t";
            // line 44
            echo (isset($context["S_SEARCH_LOCAL_HIDDEN_FIELDS"]) ? $context["S_SEARCH_LOCAL_HIDDEN_FIELDS"] : null);
            echo "
\t\t\t</fieldset>
\t\t\t</form>
\t\t</div>
\t";
        }
        // line 49
        echo "
\t";
        // line 50
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination")) || (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null))) {
            // line 51
            echo "\t\t<div class=\"pagination\">
\t\t\t";
            // line 52
            if (((isset($context["U_VIEW_UNREAD_POST"]) ? $context["U_VIEW_UNREAD_POST"] : null) && (!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)))) {
                echo "<a href=\"";
                echo (isset($context["U_VIEW_UNREAD_POST"]) ? $context["U_VIEW_UNREAD_POST"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("VIEW_UNREAD_POST");
                echo "</a> &bull; ";
            }
            echo (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null);
            echo " &bull;
\t\t\t";
            // line 53
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination"))) {
                // line 54
                echo "\t\t\t\t";
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
                // line 55
                echo "\t\t\t";
            } else {
                // line 56
                echo "\t\t\t\t";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "
\t\t\t";
            }
            // line 58
            echo "\t\t</div>
\t";
        }
        // line 60
        echo "\t<div class=\"clear\"></div>
</div>

";
        // line 63
        if ((isset($context["S_HAS_POLL"]) ? $context["S_HAS_POLL"] : null)) {
            // line 64
            echo "\t<form method=\"post\" action=\"";
            echo (isset($context["S_POLL_ACTION"]) ? $context["S_POLL_ACTION"] : null);
            echo "\" data-ajax=\"vote_poll\" class=\"topic_poll\">

\t<div class=\"panel\">
\t\t<div class=\"inner\">

\t\t<div class=\"content\">
\t\t\t<h2 class=\"poll-title\">";
            // line 70
            echo (isset($context["POLL_QUESTION"]) ? $context["POLL_QUESTION"] : null);
            echo "</h2>
\t\t\t<p class=\"author\">";
            // line 71
            echo $this->env->getExtension('phpbb')->lang("POLL_LENGTH");
            if (((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null) && (isset($context["L_POLL_LENGTH"]) ? $context["L_POLL_LENGTH"] : null))) {
                echo "<br />";
            }
            if ((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null)) {
                echo "<span class=\"poll_max_votes\">";
                echo $this->env->getExtension('phpbb')->lang("MAX_VOTES");
                echo "</span>";
            }
            echo "</p>

\t\t\t<fieldset class=\"polls\">
\t\t\t";
            // line 74
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "poll_option"));
            foreach ($context['_seq'] as $context["_key"] => $context["poll_option"]) {
                // line 75
                echo "\t\t\t\t";
                // line 76
                echo "\t\t\t\t<dl class=\"";
                if ($this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_VOTED")) {
                    echo "voted";
                }
                if ($this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_MOST_VOTES")) {
                    echo " most-votes";
                }
                echo "\"";
                if ($this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_VOTED")) {
                    echo " title=\"";
                    echo $this->env->getExtension('phpbb')->lang("POLL_VOTED_OPTION");
                    echo "\"";
                }
                echo " data-poll-option-id=\"";
                echo $this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_ID");
                echo "\">
\t\t\t\t\t<dt>";
                // line 77
                if ((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null)) {
                    echo "<label for=\"vote_";
                    echo $this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_ID");
                    echo "\">";
                    echo $this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_CAPTION");
                    echo "</label>";
                } else {
                    echo $this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_CAPTION");
                }
                echo "</dt>
\t\t\t\t\t";
                // line 78
                if ((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null)) {
                    echo "<dd style=\"width: auto;\" class=\"poll_option_select\">";
                    if ((isset($context["S_IS_MULTI_CHOICE"]) ? $context["S_IS_MULTI_CHOICE"] : null)) {
                        echo "<input type=\"checkbox\" name=\"vote_id[]\" id=\"vote_";
                        echo $this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_ID");
                        echo "\" value=\"";
                        echo $this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_ID");
                        echo "\"";
                        if ($this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_VOTED")) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    } else {
                        echo "<input type=\"radio\" name=\"vote_id[]\" id=\"vote_";
                        echo $this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_ID");
                        echo "\" value=\"";
                        echo $this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_ID");
                        echo "\"";
                        if ($this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_VOTED")) {
                            echo " checked=\"checked\"";
                        }
                        echo " />";
                    }
                    echo "</dd>";
                }
                // line 79
                echo "\t\t\t\t\t<dd class=\"resultbar";
                if ((!(isset($context["S_DISPLAY_RESULTS"]) ? $context["S_DISPLAY_RESULTS"] : null))) {
                    echo " hidden";
                }
                echo "\"><div class=\"";
                if (($this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_PCT") < 20)) {
                    echo "pollbar1";
                } elseif (($this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_PCT") < 40)) {
                    echo "pollbar2";
                } elseif (($this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_PCT") < 60)) {
                    echo "pollbar3";
                } elseif (($this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_PCT") < 80)) {
                    echo "pollbar4";
                } else {
                    echo "pollbar5";
                }
                echo "\" style=\"width:";
                echo $this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_PERCENT_REL");
                echo ";\">";
                echo $this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_RESULT");
                echo "</div></dd>
\t\t\t\t\t<dd class=\"poll_option_percent";
                // line 80
                if ((!(isset($context["S_DISPLAY_RESULTS"]) ? $context["S_DISPLAY_RESULTS"] : null))) {
                    echo " hidden";
                }
                echo "\">";
                if (($this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_RESULT") == 0)) {
                    echo $this->env->getExtension('phpbb')->lang("NO_VOTES");
                } else {
                    echo $this->getAttribute((isset($context["poll_option"]) ? $context["poll_option"] : null), "POLL_OPTION_PERCENT");
                }
                echo "</dd>
\t\t\t\t</dl>
\t\t\t\t";
                // line 82
                // line 83
                echo "\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['poll_option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 84
            echo "
\t\t\t\t<dl class=\"poll_total_votes";
            // line 85
            if ((!(isset($context["S_DISPLAY_RESULTS"]) ? $context["S_DISPLAY_RESULTS"] : null))) {
                echo " hidden";
            }
            echo "\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\">";
            // line 87
            echo $this->env->getExtension('phpbb')->lang("TOTAL_VOTES");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <span class=\"poll_total_vote_cnt\">";
            echo (isset($context["TOTAL_VOTES"]) ? $context["TOTAL_VOTES"] : null);
            echo "</span></dd>
\t\t\t\t</dl>

\t\t\t";
            // line 90
            if ((isset($context["S_CAN_VOTE"]) ? $context["S_CAN_VOTE"] : null)) {
                // line 91
                echo "\t\t\t\t<dl style=\"border-top: none;\" class=\"poll_vote\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\"><input type=\"submit\" name=\"update\" value=\"";
                // line 93
                echo $this->env->getExtension('phpbb')->lang("SUBMIT_VOTE");
                echo "\" class=\"button1\" /></dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 96
            echo "
\t\t\t";
            // line 97
            if ((!(isset($context["S_DISPLAY_RESULTS"]) ? $context["S_DISPLAY_RESULTS"] : null))) {
                // line 98
                echo "\t\t\t\t<dl style=\"border-top: none;\" class=\"poll_view_results\">
\t\t\t\t\t<dt>&nbsp;</dt>
\t\t\t\t\t<dd class=\"resultbar\"><a href=\"";
                // line 100
                echo (isset($context["U_VIEW_RESULTS"]) ? $context["U_VIEW_RESULTS"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("VIEW_RESULTS");
                echo "</a></dd>
\t\t\t\t</dl>
\t\t\t";
            }
            // line 103
            echo "\t\t\t</fieldset>
\t\t\t<div class=\"vote-submitted hidden\">";
            // line 104
            echo $this->env->getExtension('phpbb')->lang("VOTE_SUBMITTED");
            echo "</div>
\t\t</div>

\t\t</div>
\t\t";
            // line 108
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t\t";
            // line 109
            echo (isset($context["S_HIDDEN_FIELDS"]) ? $context["S_HIDDEN_FIELDS"] : null);
            echo "
\t</div>

\t</form>
\t<hr />
";
        }
        // line 115
        echo "
";
        // line 116
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "postrow"));
        foreach ($context['_seq'] as $context["_key"] => $context["postrow"]) {
            // line 117
            echo "\t";
            // line 118
            echo "\t";
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_FIRST_UNREAD")) {
                echo "<a id=\"unread\"></a>";
            }
            // line 119
            echo "\t<div id=\"p";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID");
            echo "\" class=\"post ";
            if (($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_ROW_COUNT") % 2 == 1)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_UNREAD_POST")) {
                echo " unreadpost";
            }
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POST_REPORTED")) {
                echo " reported";
            }
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POST_DELETED")) {
                echo " deleted";
            }
            if (($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_ONLINE") && (!$this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POST_HIDDEN")))) {
                echo " online";
            }
            echo "\">
\t\t<div class=\"inner\">

\t\t<dl class=\"postprofile\" id=\"profile";
            // line 122
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID");
            echo "\"";
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POST_HIDDEN")) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t\t\t<dt class=\"";
            // line 123
            if (($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RANK_TITLE") || $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RANK_IMG"))) {
                echo "has-profile-rank";
            } else {
                echo "no-profile-rank";
            }
            echo "\">
\t\t\t\t";
            // line 124
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_AVATAR")) {
                // line 125
                echo "\t\t\t\t\t";
                if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_POST_AUTHOR")) {
                    echo "<a href=\"";
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_POST_AUTHOR");
                    echo "\" class=\"avatar\">";
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_AVATAR");
                    echo "</a>";
                } else {
                    echo "<span class=\"avatar\">";
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_AVATAR");
                    echo "</span>";
                }
                // line 126
                echo "\t\t\t\t";
            }
            // line 127
            echo "\t\t\t\t";
            if ((!$this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_POST_AUTHOR"))) {
                echo "<strong>";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_AUTHOR_FULL");
                echo "</strong>";
            } else {
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_AUTHOR_FULL");
            }
            // line 128
            echo "\t\t\t</dt>

\t\t\t";
            // line 130
            if (($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RANK_TITLE") || $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RANK_IMG"))) {
                echo "<dd class=\"profile-rank\">";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RANK_TITLE");
                if (($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RANK_TITLE") && $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RANK_IMG"))) {
                    echo "<br />";
                }
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "RANK_IMG");
                echo "</dd>";
            }
            // line 131
            echo "
\t\t";
            // line 132
            if (($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_POSTS") != "")) {
                echo "<dd class=\"profile-posts\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("POSTS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_POSTS");
                echo "</dd>";
            }
            // line 133
            echo "\t\t";
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_JOINED")) {
                echo "<dd class=\"profile-joined\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("JOINED");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POSTER_JOINED");
                echo "</dd>";
            }
            // line 134
            echo "
\t\t";
            // line 135
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_PROFILE_FIELD1")) {
                // line 136
                echo "\t\t\t<!-- Use a construct like this to include admin defined profile fields. Replace FIELD1 with the name of your field. -->
\t\t\t<dd><strong>";
                // line 137
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "PROFILE_FIELD1_NAME");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong> ";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "PROFILE_FIELD1_VALUE");
                echo "</dd>
\t\t";
            }
            // line 139
            echo "
\t\t";
            // line 140
            // line 141
            echo "\t\t";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "custom_fields"));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                // line 142
                echo "\t\t\t";
                if ((!$this->getAttribute((isset($context["custom_fields"]) ? $context["custom_fields"] : null), "S_PROFILE_CONTACT"))) {
                    // line 143
                    echo "\t\t\t\t<dd class=\"profile-custom-field profile-";
                    echo $this->getAttribute((isset($context["custom_fields"]) ? $context["custom_fields"] : null), "PROFILE_FIELD_IDENT");
                    echo "\"><strong>";
                    echo $this->getAttribute((isset($context["custom_fields"]) ? $context["custom_fields"] : null), "PROFILE_FIELD_NAME");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong> ";
                    echo $this->getAttribute((isset($context["custom_fields"]) ? $context["custom_fields"] : null), "PROFILE_FIELD_VALUE");
                    echo "</dd>
\t\t\t";
                }
                // line 145
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 146
            echo "\t\t";
            // line 147
            echo "
\t\t";
            // line 148
            // line 149
            echo "\t\t";
            if (((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) && twig_length_filter($this->env, $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "contact")))) {
                // line 150
                echo "\t\t\t<dd class=\"profile-contact\">
\t\t\t\t<strong>";
                // line 151
                echo $this->env->getExtension('phpbb')->lang("CONTACT_USER");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</strong>
\t\t\t\t<div class=\"dropdown-container dropdown-left\">
\t\t\t\t\t<a href=\"#\" class=\"dropdown-trigger\"><span class=\"imageset icon_contact\"></span></a>
\t\t\t\t\t<div class=\"dropdown hidden\">
\t\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t\t<div class=\"dropdown-contents contact-icons\">
\t\t\t\t\t\t\t";
                // line 157
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "contact"));
                foreach ($context['_seq'] as $context["_key"] => $context["contact"]) {
                    // line 158
                    echo "\t\t\t\t\t\t\t\t";
                    $context["REMAINDER"] = ($this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "S_ROW_COUNT") % 4);
                    // line 159
                    echo "\t\t\t\t\t\t\t\t";
                    $value = (((isset($context["REMAINDER"]) ? $context["REMAINDER"] : null) == 3) || ($this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "S_LAST_ROW") && ($this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "S_NUM_ROWS") < 4)));
                    $context['definition']->set('S_LAST_CELL', $value);
                    // line 160
                    echo "\t\t\t\t\t\t\t\t";
                    if (((isset($context["REMAINDER"]) ? $context["REMAINDER"] : null) == 0)) {
                        // line 161
                        echo "\t\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 163
                    echo "\t\t\t\t\t\t\t\t\t<a href=\"";
                    if ($this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "U_CONTACT")) {
                        echo $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "U_CONTACT");
                    } else {
                        echo $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "U_PROFILE_AUTHOR");
                    }
                    echo "\" title=\"";
                    echo $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "NAME");
                    echo "\"";
                    if ($this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "S_LAST_CELL")) {
                        echo " class=\"last-cell\"";
                    }
                    if (($this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "ID") == "jabber")) {
                        echo " onclick=\"popup(this.href, 550, 320); return false;\"";
                    }
                    echo ">
\t\t\t\t\t\t\t\t\t\t<span class=\"contact-icon ";
                    // line 164
                    echo $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "ID");
                    echo "-icon\"></span>
\t\t\t\t\t\t\t\t\t</a>
\t\t\t\t\t\t\t\t";
                    // line 166
                    if ((((isset($context["REMAINDER"]) ? $context["REMAINDER"] : null) == 3) || $this->getAttribute((isset($context["contact"]) ? $context["contact"] : null), "S_LAST_ROW"))) {
                        // line 167
                        echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t";
                    }
                    // line 169
                    echo "\t\t\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['contact'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 170
                echo "\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</dd>
\t\t";
            }
            // line 175
            echo "\t\t";
            // line 176
            echo "
\t\t</dl>

\t\t<div class=\"postbody\">
\t\t\t";
            // line 180
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POST_HIDDEN")) {
                // line 181
                echo "\t\t\t\t";
                if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POST_DELETED")) {
                    // line 182
                    echo "\t\t\t\t\t<div class=\"ignore\" id=\"post_hidden";
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID");
                    echo "\">
\t\t\t\t\t\t";
                    // line 183
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "L_POST_DELETED_MESSAGE");
                    echo "<br />
\t\t\t\t\t\t";
                    // line 184
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "L_POST_DISPLAY");
                    echo "
\t\t\t\t\t</div>
\t\t\t\t";
                } elseif ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_IGNORE_POST")) {
                    // line 187
                    echo "\t\t\t\t\t<div class=\"ignore\" id=\"post_hidden";
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID");
                    echo "\">
\t\t\t\t\t\t";
                    // line 188
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "L_IGNORE_POST");
                    echo "<br />
\t\t\t\t\t\t";
                    // line 189
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "L_POST_DISPLAY");
                    echo "
\t\t\t\t\t</div>
\t\t\t\t";
                }
                // line 192
                echo "\t\t\t";
            }
            // line 193
            echo "\t\t\t<div id=\"post_content";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID");
            echo "\"";
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POST_HIDDEN")) {
                echo " style=\"display: none;\"";
            }
            echo ">

\t\t\t<h3 ";
            // line 195
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_FIRST_ROW")) {
                echo "class=\"first\"";
            }
            echo ">";
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ICON_IMG")) {
                echo "<img src=\"";
                echo (isset($context["T_ICONS_PATH"]) ? $context["T_ICONS_PATH"] : null);
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ICON_IMG");
                echo "\" width=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ICON_IMG_WIDTH");
                echo "\" height=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ICON_IMG_HEIGHT");
                echo "\" alt=\"\" /> ";
            }
            echo "<a href=\"#p";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID");
            echo "\">";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_SUBJECT");
            echo "</a></h3>

\t\t";
            // line 197
            if ((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                // line 198
                echo "\t\t\t";
                if (((((($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_EDIT") || $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_DELETE")) || $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_REPORT")) || $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_WARN")) || $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_INFO")) || $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_QUOTE"))) {
                    // line 199
                    echo "\t\t\t\t<ul class=\"profile-icons\">
\t\t\t\t\t";
                    // line 200
                    // line 201
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_EDIT")) {
                        echo "<li class=\"edit-icon\"><a href=\"";
                        echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_EDIT");
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("EDIT_POST");
                        echo "\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("EDIT_POST");
                        echo "</span></a></li>";
                    }
                    // line 202
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_DELETE")) {
                        echo "<li class=\"delete-icon\"><a href=\"";
                        echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_DELETE");
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("DELETE_POST");
                        echo "\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("DELETE_POST");
                        echo "</span></a></li>";
                    }
                    // line 203
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_REPORT")) {
                        echo "<li class=\"report-icon\"><a href=\"";
                        echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_REPORT");
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("REPORT_POST");
                        echo "\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("REPORT_POST");
                        echo "</span></a></li>";
                    }
                    // line 204
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_WARN")) {
                        echo "<li class=\"warn-icon\"><a href=\"";
                        echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_WARN");
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("WARN_USER");
                        echo "\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("WARN_USER");
                        echo "</span></a></li>";
                    }
                    // line 205
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_INFO")) {
                        echo "<li class=\"info-icon\"><a href=\"";
                        echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_INFO");
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("INFORMATION");
                        echo "\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("INFORMATION");
                        echo "</span></a></li>";
                    }
                    // line 206
                    echo "\t\t\t\t\t";
                    if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_QUOTE")) {
                        echo "<li class=\"quote-icon\"><a href=\"";
                        echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_QUOTE");
                        echo "\" title=\"";
                        echo $this->env->getExtension('phpbb')->lang("REPLY_WITH_QUOTE");
                        echo "\"><span>";
                        echo $this->env->getExtension('phpbb')->lang("REPLY_WITH_QUOTE");
                        echo "</span></a></li>";
                    }
                    // line 207
                    echo "\t\t\t\t\t";
                    // line 208
                    echo "\t\t\t\t</ul>
\t\t\t";
                }
                // line 210
                echo "\t\t";
            }
            // line 211
            echo "
\t\t\t<p class=\"author\">";
            // line 212
            if ((isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) {
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "MINI_POST_IMG");
            } else {
                echo "<a href=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_MINI_POST");
                echo "\">";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "MINI_POST_IMG");
                echo "</a>";
            }
            echo "<span class=\"responsive-hide\">";
            echo $this->env->getExtension('phpbb')->lang("POST_BY_AUTHOR");
            echo " <strong>";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_AUTHOR_FULL");
            echo "</strong> &raquo; </span>";
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_DATE");
            echo " </p>

\t\t\t";
            // line 214
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POST_UNAPPROVED")) {
                // line 215
                echo "\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_APPROVE_ACTION");
                echo "\">
\t\t\t\t<p class=\"post-notice unapproved\">
\t\t\t\t\t<strong>";
                // line 217
                echo $this->env->getExtension('phpbb')->lang("POST_UNAPPROVED");
                echo "</strong>
\t\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
                // line 218
                echo $this->env->getExtension('phpbb')->lang("DISAPPROVE");
                echo "\" name=\"action[disapprove]\" />
\t\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                // line 219
                echo $this->env->getExtension('phpbb')->lang("APPROVE");
                echo "\" name=\"action[approve]\" />
\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 220
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID");
                echo "\" />
\t\t\t\t\t";
                // line 221
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t\t</p>
\t\t\t</form>
\t\t\t";
            } elseif ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POST_DELETED")) {
                // line 225
                echo "\t\t\t<form method=\"post\" class=\"mcp_approve\" action=\"";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_APPROVE_ACTION");
                echo "\">
\t\t\t\t<p class=\"post-notice deleted\">
\t\t\t\t\t<strong>";
                // line 227
                echo $this->env->getExtension('phpbb')->lang("POST_DELETED");
                echo "</strong>
\t\t\t\t\t<input class=\"button2\" type=\"submit\" value=\"";
                // line 228
                echo $this->env->getExtension('phpbb')->lang("DELETE");
                echo "\" name=\"action[disapprove]\" />
\t\t\t\t\t<input class=\"button1\" type=\"submit\" value=\"";
                // line 229
                echo $this->env->getExtension('phpbb')->lang("RESTORE");
                echo "\" name=\"action[restore]\" />
\t\t\t\t\t<input type=\"hidden\" name=\"post_id_list[]\" value=\"";
                // line 230
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID");
                echo "\" />
\t\t\t\t\t";
                // line 231
                echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
                echo "
\t\t\t\t</p>
\t\t\t</form>
\t\t\t";
            }
            // line 235
            echo "
\t\t\t";
            // line 236
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_POST_REPORTED")) {
                // line 237
                echo "\t\t\t<p class=\"post-notice reported\">
\t\t\t\t<a href=\"";
                // line 238
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "U_MCP_REPORT");
                echo "\"><strong>";
                echo $this->env->getExtension('phpbb')->lang("POST_REPORTED");
                echo "</strong></a>
\t\t\t</p>
\t\t\t";
            }
            // line 241
            echo "
\t\t\t<div class=\"content\">";
            // line 242
            echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "MESSAGE");
            echo "</div>

\t\t\t";
            // line 244
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_HAS_ATTACHMENTS")) {
                // line 245
                echo "\t\t\t\t<dl class=\"attachbox\">
\t\t\t\t\t<dt>
\t\t\t\t\t\t";
                // line 247
                echo $this->env->getExtension('phpbb')->lang("ATTACHMENTS");
                echo "
\t\t\t\t\t\t";
                // line 248
                if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_MULTIPLE_ATTACHMENTS")) {
                    // line 249
                    echo "\t\t\t\t\t\t\t<div class=\"dl_links\">
\t\t\t\t\t\t\t\t<strong>";
                    // line 250
                    echo $this->env->getExtension('phpbb')->lang("DOWNLOAD_ALL");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong>
\t\t\t\t\t\t\t\t<ul>
\t\t\t\t\t\t\t\t";
                    // line 252
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "dl_method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["dl_method"]) {
                        // line 253
                        echo "\t\t\t\t\t\t\t\t\t<li>[ <a href=\"";
                        echo $this->getAttribute((isset($context["dl_method"]) ? $context["dl_method"] : null), "LINK");
                        echo "\">";
                        echo $this->getAttribute((isset($context["dl_method"]) ? $context["dl_method"] : null), "TYPE");
                        echo "</a> ]</li>
\t\t\t\t\t\t\t\t";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['dl_method'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 255
                    echo "\t\t\t\t\t\t\t\t</ul>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
                }
                // line 258
                echo "\t\t\t\t\t</dt>
\t\t\t\t\t";
                // line 259
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "attachment"));
                foreach ($context['_seq'] as $context["_key"] => $context["attachment"]) {
                    // line 260
                    echo "\t\t\t\t\t\t<dd>";
                    echo $this->getAttribute((isset($context["attachment"]) ? $context["attachment"] : null), "DISPLAY_ATTACHMENT");
                    echo "</dd>
\t\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attachment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 262
                echo "\t\t\t\t</dl>
\t\t\t";
            }
            // line 264
            echo "
\t\t\t";
            // line 265
            // line 266
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "S_DISPLAY_NOTICE")) {
                echo "<div class=\"rules\">";
                echo $this->env->getExtension('phpbb')->lang("DOWNLOAD_NOTICE");
                echo "</div>";
            }
            // line 267
            echo "\t\t\t";
            if (($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "DELETED_MESSAGE") || $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "DELETE_REASON"))) {
                // line 268
                echo "\t\t\t\t<div class=\"notice post_deleted_msg\">
\t\t\t\t\t";
                // line 269
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "DELETED_MESSAGE");
                echo "
\t\t\t\t\t";
                // line 270
                if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "DELETE_REASON")) {
                    echo "<br /><strong>";
                    echo $this->env->getExtension('phpbb')->lang("REASON");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong> <em>";
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "DELETE_REASON");
                    echo "</em>";
                }
                // line 271
                echo "\t\t\t\t</div>
\t\t\t";
            } elseif (($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "EDITED_MESSAGE") || $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "EDIT_REASON"))) {
                // line 273
                echo "\t\t\t\t<div class=\"notice\">
\t\t\t\t\t";
                // line 274
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "EDITED_MESSAGE");
                echo "
\t\t\t\t\t";
                // line 275
                if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "EDIT_REASON")) {
                    echo "<br /><strong>";
                    echo $this->env->getExtension('phpbb')->lang("REASON");
                    echo $this->env->getExtension('phpbb')->lang("COLON");
                    echo "</strong> <em>";
                    echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "EDIT_REASON");
                    echo "</em>";
                }
                // line 276
                echo "\t\t\t\t</div>
\t\t\t";
            }
            // line 278
            echo "
\t\t\t";
            // line 279
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "BUMPED_MESSAGE")) {
                echo "<div class=\"notice\"><br /><br />";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "BUMPED_MESSAGE");
                echo "</div>";
            }
            // line 280
            echo "\t\t\t";
            // line 281
            echo "\t\t\t";
            if ($this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "SIGNATURE")) {
                echo "<div id=\"sig";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "POST_ID");
                echo "\" class=\"signature\">";
                echo $this->getAttribute((isset($context["postrow"]) ? $context["postrow"] : null), "SIGNATURE");
                echo "</div>";
            }
            // line 282
            echo "\t\t\t</div>

\t\t</div>

\t\t<div class=\"back2top\"><a href=\"#wrap\" class=\"top\" title=\"";
            // line 286
            echo $this->env->getExtension('phpbb')->lang("BACK_TO_TOP");
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("BACK_TO_TOP");
            echo "</a></div>

\t\t</div>
\t</div>

\t<hr class=\"divider\" />
\t";
            // line 292
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['postrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 294
        if ((isset($context["S_QUICK_REPLY"]) ? $context["S_QUICK_REPLY"] : null)) {
            // line 295
            echo "\t";
            $location = "quickreply_editor.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->env->loadTemplate("quickreply_editor.html")->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 297
        if (((((isset($context["S_NUM_POSTS"]) ? $context["S_NUM_POSTS"] : null) > 1) || (isset($context["U_PREVIOUS_PAGE"]) ? $context["U_PREVIOUS_PAGE"] : null)) || (isset($context["U_NEXT_PAGE"]) ? $context["U_NEXT_PAGE"] : null))) {
            // line 298
            echo "\t<form id=\"viewtopic\" method=\"post\" action=\"";
            echo (isset($context["S_TOPIC_ACTION"]) ? $context["S_TOPIC_ACTION"] : null);
            echo "\">

\t<fieldset class=\"display-options\" style=\"margin-top: 0; \">
\t\t";
            // line 301
            if ((isset($context["U_PREVIOUS_PAGE"]) ? $context["U_PREVIOUS_PAGE"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_PREVIOUS_PAGE"]) ? $context["U_PREVIOUS_PAGE"] : null);
                echo "\" class=\"left-box arrow-";
                echo (isset($context["S_CONTENT_FLOW_BEGIN"]) ? $context["S_CONTENT_FLOW_BEGIN"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("PREVIOUS");
                echo "</a>";
            }
            // line 302
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
            // line 303
            echo "\t\t";
            if ((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
                // line 304
                echo "\t\t<label>";
                echo $this->env->getExtension('phpbb')->lang("DISPLAY_POSTS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " ";
                echo (isset($context["S_SELECT_SORT_DAYS"]) ? $context["S_SELECT_SORT_DAYS"] : null);
                echo "</label>
\t\t<label>";
                // line 305
                echo $this->env->getExtension('phpbb')->lang("SORT_BY");
                echo " ";
                echo (isset($context["S_SELECT_SORT_KEY"]) ? $context["S_SELECT_SORT_KEY"] : null);
                echo "</label> <label>";
                echo (isset($context["S_SELECT_SORT_DIR"]) ? $context["S_SELECT_SORT_DIR"] : null);
                echo "</label>
\t\t<input type=\"submit\" name=\"sort\" value=\"";
                // line 306
                echo $this->env->getExtension('phpbb')->lang("GO");
                echo "\" class=\"button2\" />
\t\t";
            }
            // line 308
            echo "\t</fieldset>

\t</form>
\t<hr />
";
        }
        // line 313
        echo "
";
        // line 314
        // line 315
        echo "<div class=\"topic-actions\">
\t<div class=\"buttons\">
\t";
        // line 317
        if (((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null)) && (isset($context["S_DISPLAY_REPLY_INFO"]) ? $context["S_DISPLAY_REPLY_INFO"] : null))) {
            // line 318
            echo "\t\t<div class=\"";
            if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                echo "locked-icon";
            } else {
                echo "reply-icon";
            }
            echo "\"><a href=\"";
            echo (isset($context["U_POST_REPLY_TOPIC"]) ? $context["U_POST_REPLY_TOPIC"] : null);
            echo "\" title=\"";
            if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("TOPIC_LOCKED");
            } else {
                echo $this->env->getExtension('phpbb')->lang("POST_REPLY");
            }
            echo "\"><span></span>";
            if ((isset($context["S_IS_LOCKED"]) ? $context["S_IS_LOCKED"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("BUTTON_TOPIC_LOCKED");
            } else {
                echo $this->env->getExtension('phpbb')->lang("BUTTON_POST_REPLY");
            }
            echo "</a></div>
\t";
        }
        // line 320
        echo "\t</div>

\t";
        // line 322
        $location = "viewtopic_topic_tools.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("viewtopic_topic_tools.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 323
        echo "
\t";
        // line 324
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination")) || (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null))) {
            // line 325
            echo "\t\t<div class=\"pagination\">
\t\t\t";
            // line 326
            echo (isset($context["TOTAL_POSTS"]) ? $context["TOTAL_POSTS"] : null);
            echo " &bull;
\t\t\t";
            // line 327
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination"))) {
                // line 328
                echo "\t\t\t\t";
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
                // line 329
                echo "\t\t\t";
            } else {
                // line 330
                echo "\t\t\t\t";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "
\t\t\t";
            }
            // line 332
            echo "\t\t</div>
\t";
        }
        // line 334
        echo "\t<div class=\"clear\"></div>
</div>

";
        // line 337
        // line 338
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
        // line 339
        echo "
";
        // line 340
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "quickmod"))) {
            // line 341
            echo "\t<form method=\"post\" action=\"";
            echo (isset($context["S_MOD_ACTION"]) ? $context["S_MOD_ACTION"] : null);
            echo "\" id=\"quickmodform\">
\t<fieldset class=\"quickmod\">
\t\t<label for=\"quick-mod-select\">";
            // line 343
            echo $this->env->getExtension('phpbb')->lang("QUICK_MOD");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label>
\t\t<select name=\"action\" id=\"quick-mod-select\">
\t\t\t";
            // line 345
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "quickmod"));
            foreach ($context['_seq'] as $context["_key"] => $context["quickmod"]) {
                // line 346
                echo "\t\t\t<option value=\"";
                echo $this->getAttribute((isset($context["quickmod"]) ? $context["quickmod"] : null), "VALUE");
                echo "\">";
                echo $this->getAttribute((isset($context["quickmod"]) ? $context["quickmod"] : null), "TITLE");
                echo "</option>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['quickmod'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 348
            echo "\t\t</select>
\t\t<input type=\"submit\" value=\"";
            // line 349
            echo $this->env->getExtension('phpbb')->lang("GO");
            echo "\" class=\"button2\" />
\t\t";
            // line 350
            echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
            echo "
\t</fieldset>
\t</form>
";
        }
        // line 354
        echo "
";
        // line 355
        if ((isset($context["S_DISPLAY_ONLINE_LIST"]) ? $context["S_DISPLAY_ONLINE_LIST"] : null)) {
            // line 356
            echo "\t<div class=\"stat-block online-list\">
\t\t<h3>";
            // line 357
            if ((isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null)) {
                echo "<a href=\"";
                echo (isset($context["U_VIEWONLINE"]) ? $context["U_VIEWONLINE"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
                echo "</a>";
            } else {
                echo $this->env->getExtension('phpbb')->lang("WHO_IS_ONLINE");
            }
            echo "</h3>
\t\t<p>";
            // line 358
            echo (isset($context["LOGGED_IN_USER_LIST"]) ? $context["LOGGED_IN_USER_LIST"] : null);
            echo "</p>
\t</div>
";
        }
        // line 361
        echo "
";
        // line 362
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
        return "viewtopic_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1403 => 362,  1400 => 361,  1394 => 358,  1382 => 357,  1379 => 356,  1377 => 355,  1374 => 354,  1367 => 350,  1363 => 349,  1360 => 348,  1349 => 346,  1345 => 345,  1339 => 343,  1333 => 341,  1331 => 340,  1328 => 339,  1316 => 338,  1315 => 337,  1310 => 334,  1306 => 332,  1300 => 330,  1297 => 329,  1284 => 328,  1282 => 327,  1278 => 326,  1275 => 325,  1273 => 324,  1270 => 323,  1258 => 322,  1254 => 320,  1230 => 318,  1228 => 317,  1224 => 315,  1223 => 314,  1220 => 313,  1213 => 308,  1208 => 306,  1200 => 305,  1192 => 304,  1189 => 303,  1178 => 302,  1168 => 301,  1161 => 298,  1159 => 297,  1145 => 295,  1143 => 294,  1138 => 292,  1127 => 286,  1121 => 282,  1112 => 281,  1110 => 280,  1104 => 279,  1101 => 278,  1097 => 276,  1088 => 275,  1084 => 274,  1081 => 273,  1077 => 271,  1068 => 270,  1064 => 269,  1061 => 268,  1058 => 267,  1051 => 266,  1050 => 265,  1047 => 264,  1043 => 262,  1034 => 260,  1030 => 259,  1027 => 258,  1022 => 255,  1011 => 253,  1007 => 252,  1001 => 250,  998 => 249,  996 => 248,  992 => 247,  988 => 245,  986 => 244,  981 => 242,  978 => 241,  970 => 238,  967 => 237,  965 => 236,  962 => 235,  955 => 231,  951 => 230,  947 => 229,  943 => 228,  939 => 227,  933 => 225,  926 => 221,  922 => 220,  918 => 219,  914 => 218,  910 => 217,  904 => 215,  902 => 214,  883 => 212,  880 => 211,  877 => 210,  873 => 208,  871 => 207,  860 => 206,  849 => 205,  838 => 204,  827 => 203,  816 => 202,  805 => 201,  804 => 200,  801 => 199,  798 => 198,  796 => 197,  774 => 195,  764 => 193,  761 => 192,  755 => 189,  751 => 188,  746 => 187,  740 => 184,  736 => 183,  731 => 182,  728 => 181,  726 => 180,  720 => 176,  718 => 175,  711 => 170,  705 => 169,  701 => 167,  699 => 166,  694 => 164,  676 => 163,  672 => 161,  669 => 160,  665 => 159,  662 => 158,  658 => 157,  648 => 151,  645 => 150,  642 => 149,  641 => 148,  638 => 147,  636 => 146,  630 => 145,  619 => 143,  616 => 142,  611 => 141,  610 => 140,  607 => 139,  599 => 137,  596 => 136,  594 => 135,  591 => 134,  581 => 133,  572 => 132,  569 => 131,  559 => 130,  555 => 128,  546 => 127,  543 => 126,  530 => 125,  528 => 124,  520 => 123,  512 => 122,  487 => 119,  482 => 118,  480 => 117,  476 => 116,  473 => 115,  464 => 109,  460 => 108,  453 => 104,  450 => 103,  442 => 100,  438 => 98,  436 => 97,  433 => 96,  427 => 93,  423 => 91,  421 => 90,  412 => 87,  405 => 85,  402 => 84,  396 => 83,  395 => 82,  382 => 80,  359 => 79,  333 => 78,  321 => 77,  303 => 76,  301 => 75,  297 => 74,  283 => 71,  279 => 70,  269 => 64,  267 => 63,  262 => 60,  258 => 58,  252 => 56,  249 => 55,  236 => 54,  234 => 53,  223 => 52,  220 => 51,  218 => 50,  215 => 49,  207 => 44,  203 => 43,  199 => 42,  194 => 40,  191 => 39,  189 => 38,  186 => 37,  174 => 36,  170 => 34,  146 => 32,  144 => 31,  138 => 27,  132 => 23,  127 => 21,  122 => 20,  114 => 18,  112 => 17,  103 => 14,  101 => 13,  98 => 12,  85 => 9,  82 => 8,  80 => 7,  77 => 6,  71 => 5,  61 => 3,  31 => 2,  19 => 1,);
    }
}
