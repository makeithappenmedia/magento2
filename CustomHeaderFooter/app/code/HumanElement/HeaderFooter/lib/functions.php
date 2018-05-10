<?php
date_default_timezone_set('America/New_York');
error_reporting(E_ERROR);
ini_set('display_errors','Off');
function showheaderMagento($title="", $MetaKW, $MetDesc)
{
//    if (strlen($title) > 0)
//    {
//        $title .= " - L3 Narda-MITEQ";
//        echo "<title>$title</title>";
//    }
//    else
//    {
//        echo "<title>L3 Narda-MITEQ</title>";
//    }
    echo "<link rel=\"dns-prefetch\" href=\"//www.google-analytics.com\" />".
        "<meta name=\"google-translate-customization\" content=\"fde7d531147435a7-c78084ceddce5f05-g18fe7f387b489e26-d\" />";
    if (!isset($MetDesc))
    {
        $MetDesc = "";
    }
    if (!isset($MetaKW))
    {
        $MetaKW = "";
    }
    echo "<meta name=\"keywords\" content=\"$MetaKW\" />".
        "<meta name=\"description\" content=\"$MetDesc\" />".
        "<meta name=\"msapplication-TileColor\" content=\"#ffffff\" />".
        "<meta name=\"msapplication-TileImage\" content=\"https://nardamiteq.com/images/apple-touch-icon.png\" />".
        "<link rel=\"shortcut icon\" href=\"https://nardamiteq.com/favicon.ico\" type=\"image/ico\" />".
        "<!-- Global site tag (gtag.js) - Google Analytics -->".
        "<script async src=\"https://www.googletagmanager.com/gtag/js?id=UA-93859330-1\"></script>".
        "<script>".
        "window.dataLayer = window.dataLayer || [];".
        "function gtag(){dataLayer.push(arguments);}".
        "gtag('js', new Date());".
        "gtag('config', 'UA-93859330-1');".
        "</script><div class=\"nmmain\">".
        "<div class=\"top_nav_page_block top_nav_page_text\"><a class=\"top_nav_page_text\" href=\"https://nardamiteq.com/\">Home</a>|<a class=\"top_nav_page_text\" href=\"https://nardamiteq.com/contact.php\">Contact Us</a>|<a class=\"top_nav_page_text\" href=\"http://www.l3t.com/suppliers\" target=\"_blank\">Suppliers</a>|<a class=\"top_nav_page_text\" href=\"http://www.l3t.com/content/employee-information\" target=\"_blank\">Employee Information</a>|<a class=\"top_nav_page_text\" href=\"https://nardamiteq.com/secure/login.php\">My Account</a></div><div class=\"nml3nardamiteqheader\"><div class=\"nml3logo\"><a href=\"http://www.l3t.com\" title=\"L3 Technologies\" target=\"_blank\"><img src=\"https://nardamiteq.com/images/redesign/l-3_meatball.png\" alt=\"L3 Technologies\" width=\"69\" height=\"69\" class=\"imgnb\" /></a></div><div class=\"nmdivision\"><a href=\"https://nardamiteq.com/\"><img src=\"https://nardamiteq.com/images/redesign/NARDA-MITEQ.png\" alt=\"Narda-MITEQ\" width=\"504\" height=\"50\" class=\"imgnb\" /></a></div></div><div id=\"miteqsearchbar\"><form method=\"post\" action=\"https://nardamiteq.com/search.php\"><div id=\"miteqsearchblock\"><label for=\"words\">Search&nbsp;</label><input type=\"text\" class=\"search\" name=\"words\" id=\"words\" maxlength=\"255\" size=\"20\" value=\"enter search terms...\" onfocus=\"if (this.value == 'enter search terms...') {this.value = '';}\" onblur=\"if (this.value == '') {this.value = 'enter search terms...';}\" /><input id=\"search\" class=\"search\" name=\"search\" type=\"submit\" value=\"Go\"></div></form></div><div class=\"clr\"></div><div id=\"TranslateOuter\"><div id=\"Translate\">Translate:</div><div id=\"google_translate_element\"></div></div><script type=\"text/javascript\">".
        "function googleTranslateElementInit() {".
        "new google.translate.TranslateElement({".
        "pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE".
        "}, 'google_translate_element');".
        "}".
        "var googleTranslateScript = document.createElement('script');".
        "googleTranslateScript.type = 'text/javascript';".
        "googleTranslateScript.async = true;".
        "googleTranslateScript.src = '//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit';".
        "( document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0] ).appendChild(googleTranslateScript);".
        "</script><div class=\"clr\"></div><div class=\"clr\"></div><nav class=\"nav-primary\"><div class=\"wrap\"><ul class=\"menu nm-nav-menu menu-primary\"><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=106&amp;Z=About+Narda+MITEQ\">About Us</a></li><li class=\"menu-item menu-item-has-children\"><a href=\"https://nardamiteq.com/page.php?ID=62&amp;Z=Products\">Products</a><ul class=\"sub-menu\"><li class=\"menu-item menu-item-has-children\"><a href=\"https://nardamiteq.com/page.php?ID=505&amp;Z=Components\">Components</a><ul class=\"sub-menu\"><li class=\"menu-item menu-item-has-children\"><a href=\"https://nardamiteq.com/page.php?ID=369&amp;Z=Passive+Components\">Passive Components</a><ul class=\"sub-menu\"><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=368&amp;Z=Adapters\">Adapters</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=372&amp;Z=Attenuators+Fixed\">Attenuators Fixed</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=392&amp;Z=Attenuators+Step\">Attenuators Step</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=400&amp;Z=Attenuators+Variable\">Attenuators Variable</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=404&amp;Z=Couplers\">Couplers</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=23&amp;Z=DC+Blocks\">DC Blocks</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=424&amp;Z=Detectors\">Detectors</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=33&amp;Z=Directional+Couplers\">Directional Couplers</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=15&amp;Z=Hybrid+Couplers\">Hybrid Couplers</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=428&amp;Z=Isolators+and+Circulators\">Isolators and Circulators</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=24&amp;Z=Mixers\">Mixers</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=35&amp;Z=Modulators\">Modulators</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=36&amp;Z=Multipliers\">Multipliers</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=22&amp;Z=Phase+Shifters\">Phase Shifters</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=40&amp;Z=Power+Dividers+and+Hybrids\">Power Dividers and Hybrids</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=431&amp;Z=Terminations+(50+Ohm+Loads)\">Terminations</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=473&amp;Z=Waveguide+Directional+Couplers\">Waveguide Directional Couplers</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=443&amp;Z=Waveguide+Horn+Antennas\">Waveguide Horn Antennas</a></li><li class=\"menu-item\">".
        "<a href=\"https://nardamiteq.com/page.php?ID=438&amp;Z=Waveguide+to+Coaxial+Adapters\">Waveguide to Coaxial Adapters</a></li></ul></li><li class=\"menu-item menu-item-has-children\"><a href=\"https://nardamiteq.com/page.php?ID=86&amp;Z=Active+Components\">Active Components</a><ul class=\"sub-menu\"><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=49&amp;Z=Amplifiers\">Amplifiers</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=28&amp;Z=Bias+Tees\">Bias Tees</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=32&amp;Z=Converter+Modules\">Converter Modules</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=474&amp;Z=Electromechanical+Switches\">Electromechanical Switches</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=26&amp;Z=Fiber+Optic+Links\">Fiber Optic Links</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=34&amp;Z=Frequency+Discriminators\">Frequency Discriminators</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=38&amp;Z=Frequency+Oscillators\">Frequency Oscillators</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=27&amp;Z=Frequency+Synthesizers\">Frequency Synthesizers</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=510&amp;Z=Legacy+PIN+Diode+Switches\">Legacy PIN Diode Switches</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=24&amp;Z=Mixers\">Mixers</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=35&amp;Z=Modulators\">Modulators</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=36&amp;Z=Multipliers\">Multipliers</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=41&amp;Z=PIN+Diode+Attenuators\">PIN Diode Attenuators</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=21&amp;Z=PIN+Diode+Switches\">PIN Diode Switches</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=489&amp;Z=Solid+State+PIN+Diode+Switches\">Solid State Pin Diode Products</a></li></ul></li></ul></li><li class=\"menu-item menu-item-has-children\"><a href=\"https://nardamiteq.com/page.php?ID=79&amp;Z=SATCOM+Products\">SATCOM Products</a><ul class=\"sub-menu\"><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=73&amp;Z=Fiber+Optic+Products\">Fiber Optic Products</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=70&amp;Z=Frequency+Converter+Systems\">Frequency Converter Systems</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=72&amp;Z=Frequency+Translator+Systems\">Frequency Translator Systems</a></li>".
        "<li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=71&amp;Z=SATCOM+Amplifiers\">SATCOM Amplifiers</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=352&amp;Z=SATCOM+Frequency+Synthesizers\">SATCOM Frequency Synthesizers</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=82&amp;Z=Redundant+Switchover+Units\">Redundant Switchover Units</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=83&amp;Z=Equalizer+Products\">Equalizer Products</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=78&amp;Z=Uplink+Power+Control+Units\">Uplink Power Control Units</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=69&amp;Z=INMARSAT+Products\">INMARSAT Products</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=87&amp;Z=Video+Products\">Video Products</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=88&amp;Z=SATCOM+Custom+Products\">SATCOM Custom Products</a></li></ul><li class=\"menu-item menu-item-has-children\"><a href=\"https://nardamiteq.com/page.php?ID=63&amp;Z=Spaceborne+Products\">Spaceborne Products</a><ul class=\"sub-menu\"><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=49&amp;Z=Amplifiers\">Amplifiers</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=30&amp;Z=Coaxial+Terminations\">Coaxial Terminations</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=32&amp;Z=Converter+Modules\">Converter Modules</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=33&amp;Z=Directional+Couplers\">Directional Couplers</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=38&amp;Z=Frequency+Oscillators\">Frequency Oscillators</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=27&amp;Z=Frequency+Synthesizers\">Frequency Synthesizers</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=15&amp;Z=Hybrid+Couplers\">Hybrid Couplers</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=24&amp;Z=Mixers\">Mixers</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=35&amp;Z=Modulators\">Modulators</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=36&amp;Z=Multipliers\">Multipliers</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=22&amp;Z=Phase+Shifters\">Phase Shifters</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=41&amp;Z=PIN+Diode+Attenuators\">PIN Diode Attenuators</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=40&amp;Z=Power+Dividers+and+Combiners\">Power Dividers and Combiners</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=55&amp;Z=RF%2FMicrowave+Assemblies\">RF/FMicrowave Assemblies</a></li></ul>".
        "<li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=504&amp;Z=Integrated+Microwave+Assemblies\">Integrated Microwave Assemblies</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=64&amp;Z=Custom+Solutions\">Custom Solutions</a></li></ul></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/news-events.php\">News &amp; Events</a></li><li class=\"menu-item menu-item-has-children\"><a href=\"https://nardamiteq.com/page.php?ID=107&amp;Z=Customer+Support\">Customer Support</a><ul class=\"sub-menu\"><li class=\"menu-item\"><a href=\"https://nardamiteq.com/conversions.php\">Conversion Tool</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/secure/rma.php\">RMA (Return Material Authorization)</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/secure/firmware-support.php\">Firmware</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/secure/manuals.php\">Operation and Maintenance Manuals</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/survey.php\">Customer Satisfaction Survey</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=327&amp;Z=Supplier+Qualification+Forms\">Supplier Qualification Forms</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=507&amp;Z=Email+Newsletter\">Get updates from Narda-MITEQ</a></li></ul></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/page.php?ID=114&amp;Z=Careers\">Careers</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/secure/replist.php\">Sales Reps</a></li><li class=\"menu-item\"><a href=\"https://nardamiteq.com/contact.php\">Contact Us</a></li></ul></div></nav>";
}
function showleftbar()
{
    echo "<div class=\"left_bar\">".
        "<div class=\"clr\"></div>".
        "<div class=\"product_events\">".
        "<span class=\"slugtitle\">Related Narda-MITEQ Companies:</span>".
        "<div class=\"clr\"></div>".
        "<div class=\"product_box\">".
        "<div class=\"moduletable\">".
        "<div class=\"custom\">".
        "<ul class=\"ncomp\">".
        "<li><a title=\"Narda-STS is the world's leading manufacturer of EMF (Electro-Magnetic Fields) safety equipment".
        "Products include Broadband and Narrowband Field Survey Equipment, Personal Monitors and Area Monitors.".
        " The company also offers various training courses for RF workers and Health and Safety management personnel.\" href=\"http://www.narda-sts.us/\" target=\"_blank\">L3 Narda Safety Test Solutions</a></li>".
        "<li><a title=\"L3 Narda-ATM designs, manufactures, supplies and stocks a complete line of Microwave RF Components.\" href=\"http://www.atmmicrowave.com/\" target=\"_blank\">L3 Narda-ATM</a></li>".
        "<li><a title=\"Narda Satellite Networks is a manufacturer of high-quality satellite communications ".
        "equipment for the MilSatcom environment.\" href=\"https://nardamiteq.com/page.php?ID=366&amp;Z=Narda+Satellite+Networks\">L3 Narda Satellite Networks</a></li>".
        "<li><a title=\"Narda Microwave West\" href=\"http://www.nardamicrowavewest.com/\" target=\"_blank\">L3 Narda Microwave-West</a></li>".
        "<li><a href=\"https://nardamiteq.com/contactform.php?a=componentsnm\">Email Narda-MITEQ </a></li>".
        "<li><a href=\"https://nardamiteq.com/contactform.php?a=webmasternm\">Email Webmaster</a></li>".
        "</ul>".
        "</div>".
        "</div>".
        "</div>".
        "</div>".
        "<div class=\"product_events\">".
        "<span class=\"slugtitle emailupdates\">Get updates from Narda-MITEQ:</span>".
        "<div class=\"clr\"></div>".
        "<div class=\"product_box\">".
        "<div class=\"moduletable\">".
        "<div class=\"custom\">".
        "<p class=\"pad15 tdcenter\"><a class=\"emailbtn\" href=\"https://nardamiteq.com/page.php?ID=507&amp;Z=Email+Newsletter\">".
        "Get email updates</a></p>".
        "<p><a href=\"https://nardamiteq.com/contact.php\"> <br /> <img class=\"leftbarimgs imgnb\" src=\"https://nardamiteq.com/images/worldwide-reps.png\" ".
        "width=\"125\" height=\"125\" alt=\"Worldwide Representatives image\" /></a><br />".
        "<a href=\"https://nardamiteq.com/page.php?ID=339&amp;Z=New+Product+Literature+Datasheets\"><img class=\"leftbarimgs\" ".
        "src=\"https://nardamiteq.com/images/literature-download.png\" width=\"100\" height=\"100\" ".
        "alt=\"Narda-MITEQ Literature Download - Click here to download\" /></a><br />".
        "<a href=\"https://nardamiteq.com/survey.php\"><img id=\"cust_survey\" class=\"leftbarimgs imgnb\" ".
        "src=\"https://nardamiteq.com/images/customer-survey.png\" width=\"150\" height=\"150\" alt=\"Customer Survey\" />".
        "</a></p>".
        "</div>".    // /div custom
        "</div>".    // /div moduletable
        "</div>".    // /div product_box
        "</div>".
        "<div class=\"product_events\">".
        "<span class=\"slugtitle\">Mailing Address</span>".
        "<div class=\"clr\"></div>".
        "<div class=\"product_box\">".
        "<div class=\"moduletable\">".
        "<div class=\"custom\"  >".
        "<p>L3 Narda-MITEQ<br /> 435 Moreland Road<br /> Hauppauge, NY 11788<br /> USA</p>".
        "<p>PHONE: 631-231-1700<br /> FAX: 631-231-1711</p>".
        "<p>Send Special <strong>Component</strong> Product Requests, or any other questions or comments to: <br /><a href=\"https://nardamiteq.com/contactform.php?a=componentsnm&amp;s=SPR\">componentsnm@l3t.com</a><br /><br />".
        "Send Special <strong>SATCOM</strong> Product Requests, or any other questions or comments to: <br /><a href=\"https://nardamiteq.com/contactform.php?a=satcomsalesnm&amp;s=SPR\">satcomsalesnm@l3t.com</a></p>".
        "</div>".
        "</div>".
        "</div>".
        "</div>".
        "</div>";    // /div left_bar
}    // end of showleftbar function
function showfullwidthcolopen()
{
    echo "<div class=\"full_width_col\">".
        "<div class=\"clr\"></div>";
}    // end of showfullwidthcolopen function
function showfullwidthcolclose()
{
    echo "</div>";
}    // end of showfullwidthcolclose function
function showrightbaropen2col()
{
    echo "<div class=\"right_bar_2_col\">".
        "<div class=\"clr\"></div>";
}    // end of showrightbaropen2col function
function showrightbaropen()
{
    echo "<div class=\"right_bar\">".
        "<div class=\"clr\"></div>";
}    // end of showrightbaropen
function showrightbarclose()
{
    echo "<div class=\"clr\"></div>".
        "<div class=\"clr\"></div>".
        "</div>".
        "<div class=\"clr\"></div>".
        "</div>".
        "<div class=\"clr\"></div>".
        "</div>".
        "<div class=\"clr\">";
}    // end of showrightbarclose function
function showfooterMagento()
{
    echo "<div class=\"nmfooter\">".
        "<div class=\"socialiconsnm\">".
        "<a href=\"https://www.facebook.com/L3Technologies\" title=\"Follow L3 Technologies on Facebook\" ".
        "onclick=\"window.open(this.href); return false;\" onkeypress=\"window.open(this.href); return false;\">".
        "<img src=\"https://nardamiteq.com/images/fb.png\" width=\"19\" height=\"19\" alt=\"Facebook\" /></a>".
        "<a href=\"https://www.linkedin.com/company/L3-narda-miteq/\" title=\"Follow L3 Narda-MITEQ on LinkedIn\" ".
        "onclick=\"window.open(this.href); return false;\" onkeypress=\"window.open(this.href); return false;\">".
        "<img src=\"https://nardamiteq.com/images/linkedin.png\" width=\"19\" height=\"19\" alt=\"LinkedIn\" /></a>".
        "</div>".
        "<p class=\"copyright\">&copy; Copyright " . date('Y') . " L3 Narda-MITEQ. All rights reserved.</p>".
        "<p class=\"copyright\">L3 uses this website as a channel of distribution of material company information.<br />".
        "Catalog specifications subject to change without notice.<br />".
        "Financial and other material regarding L3 is routinely posted on this website for immediate access.<br />".
        "This web site consists of L3 Narda-MITEQ general capabilities information that does not contain controlled technical data as defined within the<br />".
        "International Traffic in Arms (ITAR) Part 120.10 or Export Administration Regulations (EAR) Part 734.7-11.</p>".
        "</div>";
}    // end of showfooterMagento function