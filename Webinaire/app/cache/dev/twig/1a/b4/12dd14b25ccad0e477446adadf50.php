<?php

/* WbnWebinaireBundle:Visiteur:faq.html.twig */
class __TwigTemplate_1ab412dd14b25ccad0e477446adadf50 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body1' => array($this, 'block_body1'),
            'body2' => array($this, 'block_body2'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        // line 4
        echo "    FAQ - ";
        $this->displayParentBlock("title", $context, $blocks);
        echo " 
";
    }

    // line 7
    public function block_body1($context, array $blocks = array())
    {
        // line 8
        echo "
<img src=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/h1.png"), "html", null, true);
        echo "\" width=\"960\" height=\"48\"></center>
        </div>
<div id=\"subPages\">
<div id=\"botCont\">
            <div class=\"botBox\">
                <h2>FAQ</h2>
    
<p><span style=\"font-size:15px; font-weight:bold; color:#000; cursor:pointer;\">
Q: What does the Automated Webinar Generator do?<br>
</span></p><div id=\"a1\" style=\"display: none; \"><span style=\"font-size:14px; color:#000;\">
A: Our software automates the entire process of creating a powerful automated webinar system that you can host on our servers, or you can install on your own servers. For a more detailed look at all the features please see the extensive set of features show under the video on this page: http://www.evergreenbusinesssystem.com
</span></div>
<p></p>
<p><a href=\"javascript:void(0);\" onclick=\"openClose('a2');\"><span style=\"font-size:15px; font-weight:bold; color:#000; cursor:pointer;\">
Q: Does this software generate traffic? </span></a><br>
<font face=\"Trebuchet MS\" class=\"fsx05\"></font></p><div id=\"a2\" style=\"display: none; \"><font face=\"Trebuchet MS\" class=\"fsx05\"><span style=\"font-size:14px; color:#000;\">
A: No, this software is not about driving traffic, but rather about creating an incredible webinar experience for your attendees that appears to be a live event, thereby eliminating the need for the host to be at the webinar at all. You record your perfect webinar once, then it is delivered as if it is a live event over and over again. 
</span></font></div><font face=\"Trebuchet MS\" class=\"fsx05\">
<p></p>
<p><a href=\"javascript:void(0);\" onclick=\"openClose('a3');\"><span style=\"font-size:15px; font-weight:bold; color:#000; cursor:pointer;\">
Q: Is there a limit to how many webinars I can run? </span></a><br>
</p><div id=\"a3\" style=\"display: none; \"><span style=\"font-size:14px; color:#000;\">
A: No, you may run as many webinars as you like. </span></div>
<p></p>  
  
<p><a href=\"javascript:void(0);\" onclick=\"openClose('a4');\"><span style=\"font-size:15px; font-weight:bold; color:#000; cursor:pointer;\">
Q:  Are there any hosting charges after purchase of the product?  Will hosting costs remain free for any number of webinars, forever? </span></a><br>
</p><div id=\"a4\" style=\"display: none; \"><span style=\"font-size:14px; color:#000;\">
A: You may choose to host your webinar on our servers or on yours. If you choose to run your webinar on one of our hosting domains, then there is no additional charge and you may run as many webinars as you would like.  If you choose to host your webinar with us, you may choose from one of the domains we have setup for hosting our customers webinars. Here is the current list you can choose from:  eWebinars.com, StreamingWebinarService.net, WebinarMeetingRoom.com, DigitalWebinars.com</span></div>
<p></p>
<p><a href=\"javascript:void(0);\" onclick=\"openClose('a5');\"><span style=\"font-size:15px; font-weight:bold; color:#000; cursor:pointer;\">
Q: Do you support my specific web cart for checkout? </span></a><br>
</p><div id=\"a5\" style=\"display: none; \"><span style=\"font-size:14px; color:#000;\">
A: We support all shopping carts in the sense that when you display the ‘buy’ button you can link that button to any external cart that you have an account with. </span></div>
<p></p>      
      
<p><a href=\"javascript:void(0);\" onclick=\"openClose('a6');\"><span style=\"font-size:15px; font-weight:bold; color:#000; cursor:pointer;\">
Q: Does it integrate with Paypal? </span></a><br>
</p><div id=\"a6\" style=\"display: none; \"><span style=\"font-size:14px; color:#000;\">
A: You may link the buy button to any cart you want, including paypal. You may also use any Autoresponder with the service.</span></div>
<p></p>


<p><a href=\"javascript:void(0);\" onclick=\"openClose('a20');\"><span style=\"font-size:15px; font-weight:bold; color:#000; cursor:pointer;\">
Q: If I can setup a members area, can customers easily manage their accounts... more specifically easily cancel their subscription?</span></a><br>
</p><div id=\"a20\" style=\"display: none; \"><span style=\"font-size:14px; color:#000;\">
A: You can set up a membership area using 3rd party Wordpress plugins like WishList or Digital Access Plugins.  Regarding the customers managing their accounts, that depends on how you set up your WishList or DAP settings.</span></div>
<p></p>

<p><a href=\"javascript:void(0);\" onclick=\"openClose('a21');\"><span style=\"font-size:15px; font-weight:bold; color:#000; cursor:pointer;\">
Q: On my own websites can I host webinars for my clients?</span></a><br>
</p><div id=\"a21\" style=\"display: none; \"><span style=\"font-size:14px; color:#000;\">
A: No I'm sorry, we dont offer resell rights, meaning that the webinars are only and exclusively to be used for your webinars. </span></div>
<p></p>

<p><a href=\"javascript:void(0);\" onclick=\"openClose('a22');\"><span style=\"font-size:15px; font-weight:bold; color:#000; cursor:pointer;\">
Q: Can I install the program on client owned websites?</span></a><br>
</p><div id=\"a22\" style=\"display: none; \"><span style=\"font-size:14px; color:#000;\">
A: No, ou cannot host or generate webinars for other people, regardless of whether it's on your site or theirs.</span></div>
<p></p>

<p><a href=\"javascript:void(0);\" onclick=\"openClose('a23');\"><span style=\"font-size:15px; font-weight:bold; color:#000; cursor:pointer;\">
Q: If a customer has a question about a service or product, how do they ask questions since I would not be in attendance?</span></a><br>
</p><div id=\"a23\" style=\"display: none; \"><span style=\"font-size:14px; color:#000;\">
A: You have two options:<br><br>
1) If you want to be online at the time of your webinar, you can activate the Live Chat and indeed chat with your customers in real time while the webinar presentation is taking place.
<br><br>
2) If you dont want to be online, simply activate the email-forward feature, and all questions typed in by your customers will be redirected to your email address, so you can answer them back at your earliest convenience.</span></div>
<p></p>

<p><a href=\"javascript:void(0);\" onclick=\"openClose('a24');\"><span style=\"font-size:15px; font-weight:bold; color:#000; cursor:pointer;\">
Q:  Is this designed just for use only in wordpress or can it be incorporated into other website designs. I use ShopFactory for my website?</span></a><br>
</p><div id=\"a24\" style=\"display: none; \"><span style=\"font-size:14px; color:#000;\">
A: It's in fact NOT a wordpress plugin. It's a stand alone software and yes, you can incorporate your own design if you dont want to use the built-in templates.</span></div>
<p></p>

<p><a href=\"javascript:void(0);\" onclick=\"openClose('a25');\"><span style=\"font-size:15px; font-weight:bold; color:#000; cursor:pointer;\">
Q: If possible to use in my site, do you have any instructions or idea who I would use to help me incorporate it into my site?</span></a><br>
</p><div id=\"a25\" style=\"display: none; \"><span style=\"font-size:14px; color:#000;\">
A: Correct, you can integrate it with your own site. In the members area you will find tutorial videos walking you through the entire process.</span></div>
<p></p>

<p><a href=\"javascript:void(0);\" onclick=\"openClose('a28');\"><span style=\"font-size:15px; font-weight:bold; color:#000; cursor:pointer;\">
Q: Also, is there any reason why it would not work just to deliver content? I have been considering offering Webinars as a part of my Aerial Photography Training program. The primary purpose would be to deliver the content of the webinar, not to actually sell the program.</span></a><br>
</p><div id=\"a28\" style=\"display: none; \"><span style=\"font-size:14px; color:#000;\">
A. It works perfectly to deliver content. Just do not put the buy button at the end! </span></div>
<p></p>
            </font></div><font face=\"Trebuchet MS\" class=\"fsx05\"></font>
       </div>
</div> </div>
        


<br>

";
    }

    // line 105
    public function block_body2($context, array $blocks = array())
    {
        echo "  
<p>
\t<img src=\"";
        // line 107
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("images/designed-to-work-with2.jpg"), "html", null, true);
        echo "\" width=\"960\" height=\"211\">
</p>

";
    }

    public function getTemplateName()
    {
        return "WbnWebinaireBundle:Visiteur:faq.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  144 => 105,  38 => 7,  233 => 58,  227 => 51,  221 => 49,  215 => 39,  207 => 37,  201 => 34,  197 => 33,  190 => 31,  185 => 29,  166 => 21,  139 => 8,  51 => 11,  18 => 1,  88 => 41,  60 => 52,  21 => 3,  111 => 9,  108 => 8,  95 => 36,  75 => 28,  67 => 25,  299 => 100,  293 => 96,  290 => 95,  287 => 94,  285 => 93,  280 => 90,  274 => 86,  271 => 85,  268 => 84,  266 => 83,  261 => 80,  247 => 79,  243 => 77,  228 => 75,  220 => 73,  218 => 72,  213 => 70,  209 => 69,  202 => 66,  196 => 63,  183 => 61,  181 => 60,  175 => 24,  158 => 57,  107 => 41,  101 => 34,  80 => 64,  63 => 16,  36 => 6,  156 => 18,  148 => 55,  142 => 50,  140 => 50,  127 => 45,  123 => 44,  115 => 42,  110 => 79,  85 => 28,  65 => 18,  59 => 23,  45 => 11,  103 => 5,  91 => 58,  74 => 61,  70 => 59,  66 => 12,  25 => 5,  89 => 32,  82 => 39,  92 => 70,  86 => 67,  77 => 23,  57 => 22,  19 => 1,  42 => 17,  29 => 5,  26 => 3,  223 => 96,  214 => 90,  210 => 88,  203 => 84,  199 => 83,  194 => 80,  192 => 32,  189 => 78,  187 => 77,  184 => 76,  178 => 25,  170 => 22,  157 => 61,  152 => 59,  145 => 53,  130 => 48,  125 => 5,  119 => 45,  116 => 44,  112 => 8,  102 => 33,  98 => 73,  76 => 25,  73 => 23,  69 => 19,  56 => 12,  32 => 4,  24 => 2,  22 => 6,  23 => 1,  17 => 1,  68 => 58,  61 => 24,  44 => 9,  20 => 2,  161 => 19,  153 => 17,  150 => 107,  147 => 10,  143 => 9,  137 => 45,  129 => 42,  121 => 35,  118 => 34,  113 => 39,  104 => 76,  99 => 33,  94 => 21,  81 => 18,  78 => 24,  72 => 16,  64 => 15,  53 => 49,  50 => 15,  48 => 8,  41 => 8,  39 => 7,  35 => 12,  33 => 6,  30 => 5,  27 => 6,  182 => 70,  176 => 71,  169 => 62,  163 => 58,  160 => 57,  155 => 56,  151 => 54,  149 => 52,  141 => 54,  136 => 47,  134 => 7,  131 => 6,  128 => 47,  120 => 37,  117 => 36,  114 => 35,  109 => 7,  106 => 37,  100 => 30,  96 => 5,  93 => 34,  90 => 28,  87 => 57,  83 => 56,  79 => 55,  71 => 27,  62 => 21,  58 => 51,  55 => 14,  52 => 10,  49 => 12,  46 => 11,  43 => 8,  40 => 8,  37 => 9,  34 => 5,  31 => 4,  28 => 3,);
    }
}
