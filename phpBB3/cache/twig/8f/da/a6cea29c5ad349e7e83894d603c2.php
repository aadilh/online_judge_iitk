<?php

/* overall_footer.html */
class __TwigTemplate_8fdaa6cea29c5ad349e7e83894d603c2 extends Twig_Template
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
        echo "\t\t";
        // line 2
        echo "\t</div>

";
        // line 4
        // line 5
        echo "
<div id=\"page-footer\">
\t";
        // line 7
        $location = "navbar_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->env->loadTemplate("navbar_footer.html")->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 8
        echo "
\t<div class=\"copyright\">
\t\t";
        // line 10
        // line 11
        echo "\t\t";
        echo (isset($context["CREDIT_LINE"]) ? $context["CREDIT_LINE"] : null);
        echo "
\t\t";
        // line 12
        if ((isset($context["TRANSLATION_INFO"]) ? $context["TRANSLATION_INFO"] : null)) {
            echo "<br />";
            echo (isset($context["TRANSLATION_INFO"]) ? $context["TRANSLATION_INFO"] : null);
        }
        // line 13
        echo "\t\t";
        // line 14
        echo "\t\t";
        if ((isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null)) {
            echo "<br />";
            echo (isset($context["DEBUG_OUTPUT"]) ? $context["DEBUG_OUTPUT"] : null);
        }
        // line 15
        echo "\t\t";
        if ((isset($context["U_ACP"]) ? $context["U_ACP"] : null)) {
            echo "<br /><strong><a href=\"";
            echo (isset($context["U_ACP"]) ? $context["U_ACP"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("ACP");
            echo "</a></strong>";
        }
        // line 16
        echo "\t</div>

\t<div id=\"darkenwrapper\" data-ajax-error-title=\"";
        // line 18
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TITLE");
        echo "\" data-ajax-error-text=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT");
        echo "\" data-ajax-error-text-abort=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_ABORT");
        echo "\" data-ajax-error-text-timeout=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_TIMEOUT");
        echo "\" data-ajax-error-text-parsererror=\"";
        echo $this->env->getExtension('phpbb')->lang("AJAX_ERROR_TEXT_PARSERERROR");
        echo "\">
\t\t<div id=\"darken\">&nbsp;</div>
\t</div>
\t<div id=\"loading_indicator\"></div>

\t<div id=\"phpbb_alert\" class=\"phpbb_alert\" data-l-err=\"";
        // line 23
        echo $this->env->getExtension('phpbb')->lang("ERROR");
        echo "\" data-l-timeout-processing-req=\"";
        echo $this->env->getExtension('phpbb')->lang("TIMEOUT_PROCESSING_REQ");
        echo "\">
\t\t<a href=\"#\" class=\"alert_close\"></a>
\t\t<h3 class=\"alert_title\"></h3><p class=\"alert_text\"></p>
\t</div>
\t<div id=\"phpbb_confirm\" class=\"phpbb_alert\">
\t\t<a href=\"#\" class=\"alert_close\"></a>
\t\t<div class=\"alert_text\"></div>
\t</div>
</div>

</div>

<div>
\t<a id=\"bottom\" accesskey=\"z\"></a>
\t";
        // line 37
        if ((!(isset($context["S_IS_BOT"]) ? $context["S_IS_BOT"] : null))) {
            echo (isset($context["RUN_CRON_TASK"]) ? $context["RUN_CRON_TASK"] : null);
        }
        // line 38
        echo "</div>

<script type=\"text/javascript\" src=\"";
        // line 40
        echo (isset($context["T_JQUERY_LINK"]) ? $context["T_JQUERY_LINK"] : null);
        echo "\"></script>
";
        // line 41
        if ((isset($context["S_ALLOW_CDN"]) ? $context["S_ALLOW_CDN"] : null)) {
            echo "<script type=\"text/javascript\">window.jQuery || document.write(unescape('%3Cscript src=\"";
            echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
            echo "/javascript/jquery.js?assets_version=";
            echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
            echo "\" type=\"text/javascript\"%3E%3C/script%3E'));</script>";
        }
        // line 42
        echo "<script type=\"text/javascript\" src=\"";
        echo (isset($context["T_ASSETS_PATH"]) ? $context["T_ASSETS_PATH"] : null);
        echo "/javascript/core.js?assets_version=";
        echo (isset($context["T_ASSETS_VERSION"]) ? $context["T_ASSETS_VERSION"] : null);
        echo "\"></script>
";
        // line 43
        $asset_file = "forum_fn.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('1');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 44
        $asset_file = "ajax.js";
        $asset = new \phpbb\template\asset($asset_file, $this->getEnvironment()->get_path_helper());
        if (substr($asset_file, 0, 2) !== './' && $asset->is_relative()) {
            $asset_path = $asset->get_path();            $local_file = $this->getEnvironment()->get_phpbb_root_path() . $asset_path;
            if (!file_exists($local_file)) {
                $local_file = $this->getEnvironment()->findTemplate($asset_path);
                $asset->set_path($local_file, true);
            $asset->add_assets_version('1');
            $asset_file = $asset->get_url();
            }
        }
        $context['definition']->append('SCRIPTS', '<script type="text/javascript" src="' . $asset_file. '"></script>

');
        // line 45
        echo "
";
        // line 46
        // line 47
        echo "
";
        // line 48
        if ((isset($context["S_PLUPLOAD"]) ? $context["S_PLUPLOAD"] : null)) {
            $location = "plupload.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->env->loadTemplate("plupload.html")->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
        // line 49
        echo $this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "SCRIPTS");
        echo "

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "overall_footer.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  174 => 47,  155 => 44,  140 => 43,  133 => 42,  121 => 40,  113 => 37,  78 => 18,  74 => 16,  59 => 14,  47 => 11,  42 => 8,  26 => 5,  21 => 2,  360 => 97,  356 => 95,  350 => 93,  340 => 87,  335 => 85,  330 => 82,  312 => 79,  306 => 78,  303 => 77,  289 => 74,  282 => 73,  274 => 71,  266 => 69,  257 => 66,  250 => 65,  241 => 63,  235 => 60,  213 => 54,  206 => 51,  192 => 47,  167 => 45,  161 => 44,  159 => 43,  156 => 42,  145 => 39,  141 => 38,  107 => 34,  94 => 23,  85 => 28,  82 => 27,  80 => 26,  51 => 17,  44 => 12,  40 => 10,  27 => 3,  137 => 39,  125 => 41,  117 => 38,  114 => 31,  110 => 30,  101 => 27,  98 => 32,  89 => 25,  77 => 23,  68 => 21,  63 => 18,  57 => 13,  54 => 16,  52 => 12,  46 => 10,  38 => 9,  36 => 8,  30 => 7,  232 => 49,  231 => 58,  222 => 56,  219 => 46,  208 => 52,  200 => 49,  187 => 41,  184 => 40,  173 => 46,  170 => 45,  160 => 33,  148 => 30,  138 => 27,  135 => 26,  132 => 36,  128 => 36,  116 => 22,  105 => 28,  102 => 19,  100 => 18,  84 => 14,  71 => 20,  67 => 19,  65 => 15,  50 => 9,  41 => 11,  28 => 6,  25 => 4,  366 => 98,  353 => 93,  349 => 91,  347 => 92,  342 => 87,  337 => 84,  325 => 83,  319 => 79,  301 => 73,  293 => 76,  288 => 70,  285 => 69,  283 => 68,  277 => 65,  273 => 64,  269 => 63,  253 => 62,  242 => 53,  233 => 51,  227 => 48,  223 => 46,  211 => 53,  203 => 50,  201 => 38,  190 => 35,  188 => 42,  181 => 39,  177 => 48,  172 => 30,  168 => 29,  162 => 34,  152 => 20,  119 => 17,  75 => 22,  64 => 12,  62 => 11,  37 => 9,  33 => 8,  22 => 2,  376 => 84,  373 => 83,  372 => 82,  369 => 81,  364 => 78,  363 => 97,  352 => 76,  351 => 75,  346 => 91,  343 => 72,  341 => 86,  338 => 86,  333 => 67,  331 => 66,  305 => 74,  304 => 64,  299 => 62,  296 => 61,  294 => 60,  291 => 75,  286 => 56,  284 => 55,  275 => 54,  264 => 68,  263 => 52,  260 => 51,  248 => 50,  245 => 49,  243 => 54,  240 => 47,  239 => 62,  236 => 45,  229 => 41,  224 => 47,  218 => 38,  215 => 43,  207 => 35,  205 => 34,  198 => 48,  191 => 49,  176 => 30,  171 => 46,  169 => 28,  166 => 27,  154 => 26,  151 => 31,  150 => 24,  147 => 40,  143 => 21,  134 => 37,  126 => 18,  118 => 16,  115 => 15,  108 => 21,  104 => 33,  97 => 15,  95 => 15,  92 => 9,  90 => 30,  87 => 29,  86 => 14,  83 => 5,  48 => 4,  34 => 3,  31 => 7,  19 => 1,);
    }
}
