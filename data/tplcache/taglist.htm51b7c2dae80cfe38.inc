<?php
$z[0]=Array("field","",293,312);
$z[0][4]=array();
$z[0][4]['name']="title";
$z[1]=Array("global","",313,339);
$z[1][4]=array();
$z[1][4]['name']="cfg_webname";
$z[2]=Array("field","",380,409);
$z[2][4]=array();
$z[2][4]['name']="keywords";
$z[3]=Array("field","",449,507);
$z[3][4]=array();
$z[3][4]['name']="description";
$z[3][4]['function']="html2text(@me)";
$z[4]=Array("include","",1063,1098);
$z[4][4]=array();
$z[4][4]['filename']="head.htm";
$z[5]=Array("field","",1215,1232);
$z[5][4]=array();
$z[5][4]['name']="tag";
$z[6]=Array("list","\r\n  <section class=\"section\">\r\n    <h2><a href=\"[field:arcurl/]\" title=\"[field:fulltitle/]\" target=\"_blank\">[field:fulltitle/]</a></h2>\r\n    <div class=\"left-thumbnail\"> <a href=\"[field:arcurl/]\" title=\"[field:fulltitle/]\" target=\"_blank\"><img src=\"[field:litpic/]\" alt=\"[field:fulltitle/]\"/></a> </div>\r\n    <div class=\"intro\">[field:description/]... </div>\r\n    <div class=\"intro-meta\"> <span>日期：[field:pubdate function='strftime(\"%Y-%m-%d %H:%M:%S\",@me)'/]</span> <span>人气：[field:click/] </span> <span class=\"readmore\"><a href=\"[field:arcurl/]\" title=\"[field:fulltitle/]\" target=\"_blank\">阅读全文</a></span> </div>\r\n    <div class=\"clear\"></div>\r\n  </section>\r\n  ",1324,2042);
$z[6][4]=array();
$z[6][4]['pagesize']="8";
$z[7]=Array("pagelist","",2088,2154);
$z[7][4]=array();
$z[7][4]['listitem']="index,end,pre,next,pageno";
$z[7][4]['listsize']="2";
$z[8]=Array("include","",2186,2222);
$z[8][4]=array();
$z[8][4]['filename']="right.htm";
$z[9]=Array("include","",2226,2263);
$z[9][4]=array();
$z[9][4]['filename']="footer.htm";

?>