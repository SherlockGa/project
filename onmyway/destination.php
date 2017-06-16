<?php require 'recommand.php'; ?><!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>目的地 - On my way</title>
	<link rel="stylesheet" type="text/css" href="css/deststyle.css"/>
	<link rel="stylesheet" type="text/css" href="css/header.css"/>
	<link href="css/foot.css" rel="stylesheet" type="text/css"/>
	<script src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/destScript.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
</head>

<div>
<div class="header">
    <div class="header-wrap">
        <div class="logo">
            <a href="#"><img class="onmyway-logo" src="image/logo-head.png" ></a>
        </div>
        <ul class="nav">
            <li><a href="home.php">首页</a></li>
            <li><a href="#">目的地</a></li>
            <li><a href="gonglue.php">旅游攻略</a></li>
            <li><a href="my.php">社区</a></li>

        </ul> 
        <div class="search">
            <form method="post" action="search.php">
                <input type="text" name="query" placeholder="搜目的地/攻略" autocomplele="off">
                <button class="icon-search" type="submit" style="top:6px;right:-15px;"></button>
            </form>
        </div>
        <div class="login-out">
        <div class="sort">
          <?php if(isset($_COOKIE["USER"])){
            $n = $_COOKIE["USER"];
            $con = mysql_connect("localhost","root","");
            mysql_select_db("onmyway",$con);
            mysql_query("set names utf8");
            $result = mysql_query("select * from user where user_name = '{$n}'");
            $row = mysql_fetch_array($result);
        ?>
            <a href="my.php" style="padding: 0 13px;">
               <img src="<?php echo $row['image'] ?>" style="height: 36px;width: 36px;border-radius: 50%;">
               <?php echo $n;?>
            </a>
            <ul class="dropdown-menu" style="padding: 0">
                <li>
                    <a href="my.php">个人中心</a>
                </li>
                <li>
                    <a href="write.php">写游记</a>
                </li>
                <li>
                    <a href="logout.php">退出</a>
                </li>
            </ul><?PHP } else{?>
            </div>
            <a id="login" href="login.html" style="padding: 0 10px">登录</a>
            <a id="logout" href="regist.html">注册</a>
            <?php } ?> 
        </div>
    </div>
   </div>
  </div>
<div class="shadow"></div>
</div>
<script type="text/javascript">
         $(".sort").hover(function() {
            $(".dropdown-menu").css("display","block");
            $(".sort").css("border","1px solid mediumpurple");
         }).mouseleave(function() {
            $(".dropdown-menu").css("display","none");    
         })

</script>
	<div class="container">
		<div class="place-focus">
			<div class="show-banner">
				<div title="cover">
					<a href="75.jpg" ></a>
				</div>
				<div class="show-info" >
					<div title="show-name">
						<a href="/article" target="_blank">
							<h2>诗歌与远方</h2>
							<span></span></a>
					</div>
					<p id="location" >人生，是一场风景，不止有诗歌与远方。遇见不同的人。</p>
				</div>
				<div title="show-shadow">
				</div>
				<a class="show-arrdown" href="#" ></a></div>
			<div class="place-search" style="width:360px;">
				<h2>Come on!</h2>
				<div id="search-bar" style="height: 36px;">
					<form name="mdd-search-form" action="search.php" method="post">
						<input class="search-input" type="text" name="query" autocomplete="off" placeholder="I want to go:" style="width: 268px;">
						<button class="search-button" type="submit" style="height: 33px;line-height: 1;">

						</button>
					</form> 
				</div>
				<div id="place-search-hot">
					<a href="">首尔</a>
					<a href="">北京</a>
					<a href="">香港</a>
					<a href="">台湾</a></div>
			</div>
			</div>
		<div class="clear"></div>
		<div class="rowwer">
			<div id="row-season">
				<div class="wrapper">
					<div class="r-title">
						<h2>当季推荐</h2>
					</div>
					<div class="r-navbar" id="month">
						<a href="javascript:;" class="active" >1月</a>
						<span class="divide">|</span>
						<a href="javascript:;">2月</a>
						<span class="divide">|</span>
						<a href="javascript:;" >3月</a>
						<span class="divide">|</span>
						<a href="javascript:;">4月</a>
						<span class="divide">|</span>
						<a href="javascript:;">5月</a>
						<span class="divide">|</span>
						<a href="javascript:;" >6月</a>
						<span class="divide">|</span>
						<a href="javascript:;" >7月</a>
						<span class="divide">|</span>
						<a href="javascript:;" >8月</a>
						<span class="divide">|</span>
						<a href="javascript:;">9月</a>
						<span class="divide">|</span>
						<a href="javascript:;" >10月</a>
						<span class="divide">|</span>
						<a href="javascript:;" >11月</a>
						<span class="divide">|</span>
						<a href="javascript:;">12月</a>
					    <div class="box">
						<div class="m-list" style="visibility: visible;">
							<div class="pp"><img src="image/t4.jpg" ></div>
							<div class="pp"><img src="image/t4.jpg" ></div>
							<div class="pp"><img src="image/t4.jpg" ></div>
						</div>
						<div class="clear"></div>
						<div class="m-list">
							<div class="pp"><img src="image/t3.jpg"></div>
							<div class="pp"><img src="image/t3.jpg"></div>
							<div class="pp"><img src="image/t3.jpg"></div>
						</div>
						<div class="m-list">
							<div class="pp"><img src="image/61.jpg"></div>
							<div class="pp"><img src="image/61.jpg"></div>
							<div class="pp"><img src="image/61.jpg"></div>
						</div>
						<div class="m-list">
							<div class="pp"><img src="image/t4.jpg"></div>
							<div class="pp"><img src="image/t4.jpg"></div>
							<div class="pp"><img src="image/t4.jpg"></div>
						</div>
						<div class="m-list">
							<div class="pp"><img src="image/t5.jpg"></div>
							<div class="pp"><img src="image/t5.jpg"></div>
							<div class="pp"><img src="image/t5.jpg"></div>
						</div>
						<div class="m-list">
							<div class="pp"><img src="image/2150.jpg"></div>
							<div class="pp"><img src="image/2150.jpg"></div>
							<div class="pp"><img src="image/2150.jpg"></div>
						</div>
						<div class="m-list">
							<div class="pp"><img src="image/t7.jpg"></div>
							<div class="pp"><img src="image/t7.jpg"></div>
							<div class="pp"><img src="image/t7.jpg"></div>
						</div>
						<div class="m-list">
							<div class="pp"><img src="image/t8.jpg"></div>
							<div class="pp"><img src="image/t8.jpg"></div>
							<div class="pp"><img src="image/t8.jpg"></div>
						</div>
						<div class="m-list">
							<div class="pp"><img src="image/t9.jpg"></div>
							<div class="pp"><img src="image/t9.jpg"></div>
							<div class="pp"><img src="image/t9.jpg"></div>
						</div>
						<div class="m-list">
							<div class="pp"><img src="t10.jpg"></div>
							<div class="pp"><img src="t10.jpg"></div>
							<div class="pp"><img src="t10.jpg"></div>
						</div>
						<div class="m-list">
							<div class="pp"><img src="t11.jpg"></div>
							<div class="pp"><img src="t11.jpg"></div>
							<div class="pp"><img src="t11.jpg"></div>
						</div>
						<div class="m-list">
							<div class="pp"><img src="t12.jpg"></div>
							<div class="pp"><img src="t12.jpg"></div>
							<div class="pp"><img src="t12.jpg"></div>
						</div>
						</div>
					</div>
					
				</div>
			</div>
			<div class="row-line"></div>
		</div>
		<div class="rowwer">
			<div id="row-theme">
				<div class="wrapper">
					<div class="r-title">
						<h2>主题精选</h2>
					</div>
					<div class="r-navbar" id="ttheme">
						<a href="javascript:;">全年适宜</a>
						<span class="divide">|</span>
						<a href="javascript:;">季节</a>
						<span class="divide">|</span>
						<a href="javascript:;">节假日</a>


						<div><img src="image/60.jpg" style="display: block;"><img src="image/60.jpg" style="display: block;"><img src="image/60.jpg" style="display: block;"></div>
						<div><img src="image/55.jpg"><img src="image/55.jpg"><img src="image/55.jpg"></div>
						<div><img src="image/61.jpg"><img src="image/61.jpg"><img src="image/61.jpg"></div>
					</div>
					
				</div>
			</div>
			<div class="row-line"></div>
		</div>
		<div class="rowwer">
			<div id="row-hot">
			<div class="wrapper">
				<div class="r-title">
					<h2>热门目的地</h2>
				</div>
				<div class="r-navbar" id = "s">
					<a href="javascript:;" class="selected" >国内</a>
					<span class="divide">|</span>
					<a href="javascript:;">港澳台</a>
					<span class="divide">|</span>
					<a href="javascript:;">日韩</a>
					<span class="divide">|</span>
					<a href="javascript:;">欧美</a>
					<span class="divide">|</span>
					<a href="javascript:;">东南亚</a>
					<span class="divide">|</span>
					<a href="javascript:;">澳非</a>

				<div>
					<div class="hot-list" style="visibility: visible;">
						<div class="col">
							<dl>
								<dt>
									<a href="" target="_blank">云南</a>
								</dt>
								<dd>
									<a href="" target="_blank">丽江</a>
									<a href="" target="_blank">昆明</a>
									<a href="" target="_blank">香格里拉</a>
								</dd></dl>
							<dl>
								<dt>
									<a href="" target="_blank">四川</a>
								</dt>
								<dd>
									<a href="" target="_blank">成都</a>
									<a href="" target="_blank">九寨沟</a>
									<a href="" target="_blank">都江堰</a>
								</dd></dl>
							<dl>
								<dt>
									<a href="" target="_blank">浙江</a>
								</dt>
								<dd>
									<a href="" target="_blank">杭州</a>
									<a href="" target="_blank">乌镇</a>
									<a href="" target="_blank">千岛湖</a>
								</dd></dl>
							<dl>
								<dt>
									<a href="" target="_blank">福建</a>
								</dt>
								<dd>
									<a href="" target="_blank">厦门</a>
									<a href="" target="_blank">武夷山</a>
								</dd></dl></div>
						<div class="col">
							<dl>
								<dt>
									<a href="" target="_blank">江西</a>
								</dt>
								<dd>
									<a href="" target="_blank">景德镇</a>
									<a href="" target="_blank">庐山</a>
									<a href="" target="_blank">南昌</a>
								</dd></dl>
							<dl>
								<dt>
									<a href="" target="_blank">江苏</a>
								</dt>
								<dd>
									<a href="" target="_blank">南京</a>
									<a href="" target="_blank">周庄</a>
									<a href="" target="_blank">苏州</a>
								</dd></dl>
							<dl>
								<dt>
									<a href="" target="_blank">西北</a>
								</dt>
								<dd>
									<a href="" target="_blank">西安</a>
									<a href="" target="_blank">青海湖</a>
									<a href="" target="_blank">新疆</a>
								</dd></dl></div>
					</div>
					<div class="hot-list" >
						<div class="col">
							<dl>
								<dt>
									<a href="" target="_blank">台湾</a>
								</dt>
								<dd>
									<a href="" target="_blank">台北</a>
									<a href="" target="_blank">高雄</a>
									<a href="" target="_blank">阿里山</a>
								</dd></dl>
						</div>
						<div class="col">
							<dl>
								<dt>
									<a href="" target="_blank">香港</a>
									<a href="" target="_blank">澳门</a>
								</dt>
							</dl>
						</div>
					</div>
					<div class="hot-list">
						<div class="col">
							<dl>
								<dt>
									<a href="" target="_blank">日本</a>
								</dt>
								<dd>
									<a href="" target="_blank">东京</a>
									<a href="" target="_blank">大阪</a>
									<a href="" target="_blank">京都</a>
									<a href="" target="_blank">北海道</a>
								</dd></dl>
						</div>
						<div class="col">
							<dl>
								<dt>
									<a href="" target="_blank">韩国</a>
								</dt>
								<dd>
									<a href="" target="_blank">济州岛</a>
									<a href="" target="_blank">首尔</a>
								</dd></dl>
						</div>
					</div>
					<div class="hot-list">
						<div class="col">
							<dl>
								<dt>
									<a href="" target="_blank">美国</a>
								</dt>
								<dd>
									<a href="" target="_blank">洛杉矶</a>
									<a href="" target="_blank">旧金山</a>
									<a href="" target="_blank">纽约</a>
									<a href="" target="_blank">华盛顿</a>
								</dd>
							</dl>
							<dl>
								<dt>
									<a href="" target="_blank">英国</a>
								</dt>
								<dd>
									<a href="" target="_blank">伦敦</a>
									<a href="" target="_blank">爱丁堡</a>
									<a href="" target="_blank">剑桥</a>
									<a href="" target="_blank">牛津</a>
								</dd>
							</dl>
							<dl>
								<dt>
									<a href="" target="_blank">意大利</a>
								</dt>
								<dd>
									<a href="" target="_blank">罗马</a>
									<a href="" target="_blank">威尼斯</a>
									<a href="" target="_blank">佛罗伦萨</a>
									<a href="" target="_blank">米兰</a>
								</dd></dl>
						</div>
						<div class="col">
							<dl>
								<dt>
									<a href="" target="_blank">德国</a>
								</dt>
								<dd>
									<a href="" target="_blank">柏林</a>
								</dd>
							</dl>
							<dl>
								<dt>
									<a href="" target="_blank">希腊</a>
								</dt>
								<dd>
									<a href="" target="_blank">雅典</a>
								</dd>
							</dl>
						</div>
					</div>
					<div class="hot-list">
						<div class="col">
							<dl>
								<dt>
									<a href="" target="_blank">泰国</a>
								</dt>
								<dd>
									<a href="" target="_blank">清迈</a>
									<a href="" target="_blank">曼谷</a>
								</dd>
							</dl>
							<dl>
								<dt>
									<a href="" target="_blank">马来西亚</a>
								</dt>
								<dd>
									<a href="" target="_blank">吉隆坡</a>
								</dd>
							</dl>
						</div>
						<div class="col">
							<dl>
								<dt>
									<a href="" target="_blank">越南</a>
								</dt>
								<dd>
									<a href="" target="_blank">美奈</a>
								</dd>
							</dl>
						</div>
					</div>
					<div class="hot-list">
						<div class="col">
							<dl>
								<dt>
									<a href="" target="_blank">澳大利亚</a>
								</dt>
								<dd>
									<a href="" target="_blank">悉尼</a>
									<a href="" target="_blank">墨尔本</a>
									<a href="" target="_blank">大堡礁</a>
								</dd>
							</dl>
							<dl>
								<dt>
									<a href="" target="_blank">新西兰</a>
								</dt>
								<dd>
									<a href="" target="_blank">奥克兰</a>
									<a href="" target="_blank">皇后镇</a>
									<a href="" target="_blank">基督城</a>
								</dd>
							</dl>
						</div>
						<div class="col">
							<dl>
								<dt>
									<a href="" target="_blank">埃及</a>
								</dt>
								<dd>
									<a href="" target="_blank">开罗</a>
									<a href="" target="_blank">红海</a>
									<a href="" target="_blank">亚历山大</a>
								</dd>
							</dl>
							<dl>
								<dt>
									非洲其他
								</dt>
								<dd>
									<a href="" target="_blank">毛里求斯</a>
									<a href="" target="_blank">肯尼亚</a>
									<a href="" target="_blank">马达加斯加</a>
								</dd>
							</dl>
						</div>
					</div>
				</div>
				</div>
			</div>
			</div>
		</div>
		<!--<a href="javascript:;" id="detd">全球目的地</a>-->
		<div id="sub-menu" style="visibility: visible;display: none;">
			<div class="wrapper">
				<div class="row-list">
					<h2 class="">全球目的地<span></span></h2>
		<dl class="item" style="height: 500px;">
           		<dt class="sub-title">亚洲</dt>
            	<dd class="clearfix">
                <ul class="col">
                    <li class="letter">A</li>
                    <li><a href="/travel-scenic-spot/mafengwo/11698.html" target="_blank">阿富汗 <span
                                    class="en">Afghanistan</span></a></li>
                    <li><a href="/travel-scenic-spot/mafengwo/11213.html" target="_blank">阿联酋 <span
                                    class="en">United Arab Emirates</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/16674.html" target="_blank">阿曼 <span
                                    class="en">Sultanate of Oman</span></a></li>
                    <li><a href="/travel-scenic-spot/mafengwo/31369.html" target="_blank">阿塞拜疆 <span
                                    class="en">Azerbaijan</span></a></li>
                    <li class="letter">B</li>
                    <li><a href="/travel-scenic-spot/mafengwo/11697.html" target="_blank">巴基斯坦 <span
                                    class="en">Pakistan</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/32105.html" target="_blank">巴勒斯坦 <span
                                    class="en">Palestine</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/15519.html" target="_blank">巴林 <span
                                    class="en">Bahrain</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/10711.html" target="_blank">不丹 <span
                                    class="en">Bhutan</span></a>
                    </li>
                    <li class="letter">C</li>
                    <li><a href="/travel-scenic-spot/mafengwo/11780.html" target="_blank">朝鲜 <span
                                    class="en">North Korea</span></a>
                    </li>
                    <li class="letter">D</li>
                    <li><a href="/travel-scenic-spot/mafengwo/29700.html" target="_blank">东帝汶 <span
                                    class="en">East Timor</span></a>
                    </li>
                    <li class="letter">F</li>
                    <li><a href="/travel-scenic-spot/mafengwo/10067.html" target="_blank">菲律宾 <span
                                    class="en">Philippines</span></a><i class="icon-label"></i></li>
                    <li class="letter">G</li>
                    <li><a href="/travel-scenic-spot/mafengwo/10234.html" target="_blank">格鲁吉亚 <span
                                    class="en">Georgia</span></a></li>
                    <li class="letter">H</li>
                    <li><a href="/travel-scenic-spot/mafengwo/17393.html" target="_blank">哈萨克斯坦 <span
                                    class="en">The Republic of Kazakhstan</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/10184.html" target="_blank">韩国 <span
                                    class="en">Korea</span></a><i class="icon-label"></i></li>
                    <li class="letter">J</li>
                    <li><a href="/travel-scenic-spot/mafengwo/57194.html" target="_blank">吉尔吉斯斯坦 <span
                                    class="en">Kyrgyzstan</span></a></li>
                    <li><a href="/travel-scenic-spot/mafengwo/10070.html" target="_blank">柬埔寨 <span
                                    class="en">Cambodia</span></a><i class="icon-label"></i></li>
                </ul>
                <ul class="col">
                    <li class="letter">K</li>
                    <li><a href="/travel-scenic-spot/mafengwo/12035.html" target="_blank">卡塔尔 <span
                                    class="en">The State of Qatar</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/21762.html" target="_blank">科威特 <span
                                    class="en">The State of Kuwait</span></a>
                    </li>
                    <li class="letter">L</li>
                    <li><a href="/travel-scenic-spot/mafengwo/10820.html" target="_blank">老挝 <span
                                    class="en">Laos</span></a><i class="icon-label"></i></li>
                    <li><a href="/travel-scenic-spot/mafengwo/12028.html" target="_blank">黎巴嫩 <span
                                    class="en">Lebanon</span></a></li>
                    <li class="letter">M</li>
                    <li><a href="/travel-scenic-spot/mafengwo/10101.html" target="_blank">马尔代夫 <span
                                    class="en">Maldives</span></a><i class="icon-label"></i></li>
                    <li><a href="/travel-scenic-spot/mafengwo/10097.html" target="_blank">马来西亚 <span
                                    class="en">Malaysia</span></a><i class="icon-label"></i></li>
                    <li><a href="/travel-scenic-spot/mafengwo/14293.html" target="_blank">蒙古 <span
                                    class="en">Mongolia</span></a></li>
                    <li><a href="/travel-scenic-spot/mafengwo/14783.html" target="_blank">孟加拉国 <span
                                    class="en">Bangladesh</span></a></li>
                    <li><a href="/travel-scenic-spot/mafengwo/10179.html" target="_blank">缅甸 <span
                                    class="en">Myanmar</span></a><i class="icon-label"></i></li>
                    <li class="letter">N</li>
                    <li><a href="/travel-scenic-spot/mafengwo/10069.html" target="_blank">尼泊尔 <span
                                    class="en">Nepal</span></a><i class="icon-label"></i></li>
                    <li class="letter">R</li>
                    <li><a href="/travel-scenic-spot/mafengwo/10183.html" target="_blank">日本 <span
                                    class="en">Japan</span></a><i class="icon-label"></i></li>
                    <li class="letter">S</li>
                    <li><a href="/travel-scenic-spot/mafengwo/11765.html" target="_blank">沙特阿拉伯 <span
                                    class="en">Saudi Arabia</span></a></li>
                    <li><a href="/travel-scenic-spot/mafengwo/11058.html" target="_blank">斯里兰卡 <span
                                    class="en">Sri Lanka</span></a>
                    </li>
                    <li class="letter">T</li>
                    <li><a href="/travel-scenic-spot/mafengwo/24254.html" target="_blank">塔吉克斯坦 <span
                                    class="en">Tajikistan</span></a></li>
                    <li><a href="/travel-scenic-spot/mafengwo/10083.html" target="_blank">泰国 <span
                                    class="en">Thailand</span></a><i class="icon-label"></i></li>
                </ul>
                <ul class="col">
                    <li><a href="/travel-scenic-spot/mafengwo/35250.html" target="_blank">土库曼斯坦 <span
                                    class="en">Turkmenistan</span></a></li>
                    <li class="letter">W</li>
                    <li><a href="/travel-scenic-spot/mafengwo/10753.html" target="_blank">文莱 <span
                                    class="en">Brunei Darussalam</span></a></li>
                    <li><a href="/travel-scenic-spot/mafengwo/48878.html" target="_blank">乌兹别克斯坦 <span
                                    class="en">The Republic of Uzbekistan</span></a>
                    </li>
                    <li class="letter">X</li>
                    <li><a href="/travel-scenic-spot/mafengwo/10754.html" target="_blank">新加坡 <span
                                    class="en">Singapore</span></a><i class="icon-label"></i></li>
                    <li><a href="/travel-scenic-spot/mafengwo/11217.html" target="_blank">叙利亚 <span
                                    class="en">The Syrian Arab Republic</span></a>
                    </li>
                    <li class="letter">Y</li>
                    <li><a href="/travel-scenic-spot/mafengwo/32160.html" target="_blank">亚美尼亚 <span
                                    class="en">The Republic of Armenia</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/21498.html" target="_blank">也门 <span
                                    class="en">The Republic of Yemen</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/28466.html" target="_blank">伊拉克 <span
                                    class="en">Iraq</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/11699.html" target="_blank">伊朗 <span
                                    class="en">Iran</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/10605.html" target="_blank">以色列 <span
                                    class="en">Israel</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/10182.html" target="_blank">印度 <span
                                    class="en">India</span></a><i class="icon-label"></i></li>
                    <li><a href="/travel-scenic-spot/mafengwo/10181.html" target="_blank">印度尼西亚 <span
                                    class="en">Indonesia</span></a><i class="icon-label"></i></li>
                    <li><a href="/travel-scenic-spot/mafengwo/11221.html" target="_blank">约旦 <span
                                    class="en">Jordan</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/10180.html" target="_blank">越南 <span
                                    class="en">Vietnam</span></a><i class="icon-label"></i></li>
                    <li class="letter">Z</li>
                    <li><a href="/travel-scenic-spot/mafengwo/21536.html" target="_blank">中国 <span
                                    class="en">China</span></a> <img class="domestic"
                                style="width: 34px;margin-left: 20px;cursor: pointer"
                                src="http://css.mafengwo.net/images/mdd/place/flag.jpg">
                    </li>
                </ul>
            	</dd>
        </dl>
        <dl class="item" style="height: 270px;">
            <dt class="sub-title">北美洲</dt>
            <dd class="clearfix">
                <ul class="col">
                    <li class="letter">A</li>
                    <li><a href="/travel-scenic-spot/mafengwo/57151.html" target="_blank">安提瓜和巴布达 <span
                                    class="en">Antigua and Barbuda</span></a>
                    </li>
                    <li class="letter">B</li>
                    <li><a href="/travel-scenic-spot/mafengwo/57152.html" target="_blank">巴巴多斯 <span
                                    class="en">Barbados</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/11943.html" target="_blank">巴哈马 <span
                                    class="en">Bahamas</span></a></li>
                    <li><a href="/travel-scenic-spot/mafengwo/25229.html" target="_blank">巴拿马 <span
                                    class="en">Panama</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/32796.html" target="_blank">伯利兹 <span
                                    class="en">Belize</span></a>
                    </li>
                    <li class="letter">D</li>
                    <li><a href="/travel-scenic-spot/mafengwo/25756.html" target="_blank">多米尼加 <span
                                    class="en">Dominican Republic</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/57153.html" target="_blank">多米尼克 <span
                                    class="en">Dominica</span></a>
                    </li>
                    <li class="letter">G</li>
                    <li><a href="/travel-scenic-spot/mafengwo/24412.html" target="_blank">哥斯达黎加 <span
                                    class="en">Costa Rica</span></a></li>
                </ul>
                <ul class="col">
                    <li><a href="/travel-scenic-spot/mafengwo/57154.html" target="_blank">格林纳达 <span
                                    class="en">Grenada</span></a></li>
                    <li><a href="/travel-scenic-spot/mafengwo/11684.html" target="_blank">古巴 <span
                                    class="en">Cuba</span></a><i class="icon-label"></i></li>
                    <li class="letter">H</li>
                    <li><a href="/travel-scenic-spot/mafengwo/12029.html" target="_blank">海地 <span
                                    class="en">Haiti</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/30877.html" target="_blank">洪都拉斯 <span
                                    class="en">Republic of Honduras</span></a>
                    </li>
                    <li class="letter">J</li>
                    <li><a href="/travel-scenic-spot/mafengwo/10177.html" target="_blank">加拿大 <span
                                    class="en">Canada</span></a><i class="icon-label"></i></li>
                    <li class="letter">M</li>
                    <li><a href="/travel-scenic-spot/mafengwo/10062.html" target="_blank">美国 <span
                                    class="en">United States of America</span></a>
                        
                        <a class="texas" style="margin-left: 0" href="/travel-scenic-spot/mafengwo/31459.html" target="_blank">德克萨斯</a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/11656.html" target="_blank">墨西哥 <span
                                    class="en">The United Mexican States</span></a><i class="icon-label"></i></li>
                    <li class="letter">N</li>
                    <li><a href="/travel-scenic-spot/mafengwo/57155.html" target="_blank">尼加拉瓜 <span
                                    class="en">Nicaragua</span></a>
                    </li>
                </ul>
                <ul class="col">
                    <li class="letter">S</li>
                    <li><a href="/travel-scenic-spot/mafengwo/57156.html" target="_blank">萨尔瓦多 <span
                                    class="en">El Salvador</span></a></li>
                    <li><a href="/travel-scenic-spot/mafengwo/57157.html" target="_blank">圣基茨和尼维斯 <span
                                    class="en">Saint Kitts and Nevis</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/57158.html" target="_blank">圣卢西亚 <span
                                    class="en">Saint Lucia</span></a></li>
                    <li><a href="/travel-scenic-spot/mafengwo/57159.html" target="_blank">圣文森特和格林纳丁斯 <span
                                    class="en">Saint Vincent and the Grenadines</span></a>
                    </li>
                    <li class="letter">T</li>
                    <li><a href="/travel-scenic-spot/mafengwo/57160.html" target="_blank">特立尼达和多巴哥 <span
                                    class="en">Trinidad and Tobago</span></a>
                    </li>
                    <li class="letter">W</li>
                    <li><a href="/travel-scenic-spot/mafengwo/17493.html" target="_blank">危地马拉 <span
                                    class="en">Guatemala</span></a>
                    </li>
                    <li class="letter">Y</li>
                    <li><a href="/travel-scenic-spot/mafengwo/12030.html" target="_blank">牙买加 <span
                                    class="en">Jamaica</span></a></li>
                </ul>
            </dd>
        </dl>
        <dl class="item" style="height: 150px;">
            <dt class="sub-title">南美洲</dt>
            <dd class="clearfix">
                <ul class="col">
                    <li class="letter">A</li>
                    <li><a href="/travel-scenic-spot/mafengwo/10159.html" target="_blank">阿根廷 <span
                                    class="en">Argentina</span></a><i class="icon-label"></i></li>
                    <li class="letter">B</li>
                    <li><a href="/travel-scenic-spot/mafengwo/38471.html" target="_blank">巴拉圭 <span
                                    class="en">Paraguay</span></a></li>
                    <li><a href="/travel-scenic-spot/mafengwo/10160.html" target="_blank">巴西 <span
                                    class="en">Brazil</span></a><i class="icon-label"></i></li>
                    <li><a href="/travel-scenic-spot/mafengwo/11005.html" target="_blank">秘鲁 <span
                                    class="en">The Republic of Peru</span></a>
                    </li>
                </ul>
                <ul class="col">
                    <li><a href="/travel-scenic-spot/mafengwo/13484.html" target="_blank">玻利维亚 <span
                                    class="en">Bolivia</span></a><i class="icon-label"></i></li>
                    <li class="letter">E</li>
                    <li><a href="/travel-scenic-spot/mafengwo/18225.html" target="_blank">厄瓜多尔 <span
                                    class="en">Ecuador</span></a></li>
                    <li class="letter">G</li>
                    <li><a href="/travel-scenic-spot/mafengwo/10955.html" target="_blank">哥伦比亚 <span
                                    class="en">Colombia</span></a><i class="icon-label"></i></li>
                    <li><a href="/travel-scenic-spot/mafengwo/57187.html" target="_blank">圭亚那 <span
                                    class="en">Guyana</span></a>
                    </li>
                </ul>
                <ul class="col">
                    <li class="letter">S</li>
                    <li><a href="/travel-scenic-spot/mafengwo/36914.html" target="_blank">苏里南 <span
                                    class="en">The Republic of Suriname</span></a>
                    </li>
                    <li class="letter">W</li>
                    <li><a href="/travel-scenic-spot/mafengwo/15757.html" target="_blank">委内瑞拉 <span
                                    class="en">Bolivarian Republic of Venezuela</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/12104.html" target="_blank">乌拉圭 <span
                                    class="en">The Oriental Republic of Uruguay</span></a>
                    </li>
                    <li class="letter">Z</li>
                    <li><a href="/travel-scenic-spot/mafengwo/10992.html" target="_blank">智利 <span
                                    class="en">Republic of Chile</span></a><i class="icon-label"></i></li>
                </ul>
            </dd>
        </dl>
        <dl class="item" style="height: 500px;">
            <dt class="sub-title">欧洲</dt>
            <dd class="clearfix">
                <ul class="col">
                    <li class="letter">A</li>
                    <li><a href="/travel-scenic-spot/mafengwo/24844.html" target="_blank">阿尔巴尼亚 <span
                                    class="en">The Republic of Albania</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/11131.html" target="_blank">爱尔兰 <span
                                    class="en">Ireland</span></a><i class="icon-label"></i></li>
                    <li><a href="/travel-scenic-spot/mafengwo/11631.html" target="_blank">爱沙尼亚 <span
                                    class="en">The Republic of Estonia</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/19744.html" target="_blank">安道尔 <span
                                    class="en">Andorra</span></a></li>
                    <li><a href="/travel-scenic-spot/mafengwo/10175.html" target="_blank">奥地利 <span
                                    class="en">Austria</span></a><i class="icon-label"></i></li>
                    <li class="letter">B</li>
                    <li><a href="/travel-scenic-spot/mafengwo/28072.html" target="_blank">白俄罗斯 <span
                                    class="en">Belarus</span></a></li>
                    <li><a href="/travel-scenic-spot/mafengwo/38605.html" target="_blank">保加利亚 <span
                                    class="en">The Republic of Bulgaria</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/11105.html" target="_blank">比利时 <span
                                    class="en">Belgium</span></a><i class="icon-label"></i></li>
                    <li><a href="/travel-scenic-spot/mafengwo/10549.html" target="_blank">冰岛 <span
                                    class="en">Iceland</span></a><i class="icon-label"></i></li>
                    <li><a href="/travel-scenic-spot/mafengwo/11570.html" target="_blank">波黑 <span
                                    class="en">Bosnia and Herzegovina</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/11147.html" target="_blank">波兰 <span
                                    class="en">Poland</span></a><i class="icon-label"></i></li>
                    <li class="letter">D</li>
                    <li><a href="/travel-scenic-spot/mafengwo/11157.html" target="_blank">丹麦 <span
                                    class="en">Denmark</span></a><i class="icon-label"></i></li>
                    <li><a href="/travel-scenic-spot/mafengwo/10176.html" target="_blank">德国 <span
                                    class="en">Germany</span></a><i class="icon-label"></i></li>
                    <li class="letter">E</li>
                    <li><a href="/travel-scenic-spot/mafengwo/10300.html" target="_blank">俄罗斯 <span
                                    class="en">Russia</span></a><i class="icon-label"></i></li>
                    <li class="letter">F</li>
                    <li><a href="/travel-scenic-spot/mafengwo/10171.html" target="_blank">法国 <span
                                    class="en">France</span></a><i class="icon-label"></i></li>
                    <li><a href="/travel-scenic-spot/mafengwo/11614.html" target="_blank">梵蒂冈 <span
                                    class="en">Vatican City State</span></a>
                    </li>
                </ul>
                <ul class="col">
                    <li><a href="/travel-scenic-spot/mafengwo/10448.html" target="_blank">芬兰 <span
                                    class="en">Finland</span></a><i class="icon-label"></i></li>
                    <li class="letter">H</li>
                    <li><a href="/travel-scenic-spot/mafengwo/11099.html" target="_blank">荷兰 <span
                                    class="en">Holland</span></a><i class="icon-label"></i></li>
                    <li><a href="/travel-scenic-spot/mafengwo/57192.html" target="_blank">黑山 <span
                                    class="en">Montenegro</span></a>
                    </li>
                    <li class="letter">J</li>
                    <li><a href="/travel-scenic-spot/mafengwo/10174.html" target="_blank">捷克 <span
                                    class="en">Czech</span></a><i class="icon-label"></i></li>
                    <li class="letter">K</li>
                    <li><a href="/travel-scenic-spot/mafengwo/57193.html" target="_blank">科索沃 <span
                                    class="en">The Republic of Kosovo</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/11853.html" target="_blank">克罗地亚 <span
                                    class="en">Croatia</span></a></li>
                    <li class="letter">L</li>
                    <li><a href="/travel-scenic-spot/mafengwo/18897.html" target="_blank">拉脱维亚 <span
                                    class="en">Latvia</span></a></li>
                    <li><a href="/travel-scenic-spot/mafengwo/18942.html" target="_blank">立陶宛 <span
                                    class="en">Lithuania</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/11097.html" target="_blank">列支敦士登 <span
                                    class="en">Liechtenstein</span></a></li>
                    <li><a href="/travel-scenic-spot/mafengwo/11098.html" target="_blank">卢森堡 <span
                                    class="en">The Grand Duchy of Luxembourg</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/30071.html" target="_blank">罗马尼亚 <span
                                    class="en">Romania</span></a></li>
                    <li class="letter">M</li>
                    <li><a href="/travel-scenic-spot/mafengwo/16501.html" target="_blank">马耳他 <span
                                    class="en">Malta</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/38921.html" target="_blank">马其顿 <span
                                    class="en">Macedonia</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/24945.html" target="_blank">摩尔多瓦 <span
                                    class="en">The Republicof Moldova</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/11140.html" target="_blank">摩纳哥 <span
                                    class="en">The Principality of Monaco</span></a>
                    </li>
                    <li class="letter">N</li>
                    <li><a href="/travel-scenic-spot/mafengwo/11160.html" target="_blank">挪威 <span
                                    class="en">Norway</span></a><i class="icon-label"></i></li>
                </ul>
                <ul class="col">
                    <li><a href="/travel-scenic-spot/mafengwo/10172.html" target="_blank">葡萄牙 <span
                                    class="en">Portugal</span></a><i class="icon-label"></i></li>
                    <li class="letter">R</li>
                    <li><a href="/travel-scenic-spot/mafengwo/10214.html" target="_blank">瑞典 <span
                                    class="en">The Kingdom of Sweden</span></a><i class="icon-label"></i></li>
                    <li><a href="/travel-scenic-spot/mafengwo/10169.html" target="_blank">瑞士 <span
                                    class="en">Switzerland</span></a><i class="icon-label"></i></li>
                    <li class="letter">S</li>
                    <li><a href="/travel-scenic-spot/mafengwo/26909.html" target="_blank">塞尔维亚 <span
                                    class="en">The Republic of Serbia</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/16648.html" target="_blank">塞浦路斯 <span
                                    class="en">Cyprus</span></a></li>
                    <li><a href="/travel-scenic-spot/mafengwo/15077.html" target="_blank">圣马力诺 <span
                                    class="en">The Republic of San Marino</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/11153.html" target="_blank">斯洛伐克 <span
                                    class="en">Slovakia</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/11852.html" target="_blank">斯洛文尼亚 <span
                                    class="en">The Republic of Slovenia</span></a>
                    </li>
                    <li class="letter">T</li>
                    <li><a href="/travel-scenic-spot/mafengwo/10053.html" target="_blank">土耳其 <span
                                    class="en">Turkey</span></a><i class="icon-label"></i></li>
                    <li class="letter">W</li>
                    <li><a href="/travel-scenic-spot/mafengwo/15693.html" target="_blank">乌克兰 <span
                                    class="en">Ukraine</span></a></li>
                    <li class="letter">X</li>
                    <li><a href="/travel-scenic-spot/mafengwo/10173.html" target="_blank">西班牙 <span
                                    class="en">Spain</span></a><i class="icon-label"></i></li>
                    <li><a href="/travel-scenic-spot/mafengwo/10168.html" target="_blank">希腊 <span
                                    class="en">Greece</span></a><i class="icon-label"></i></li>
                    <li><a href="/travel-scenic-spot/mafengwo/11094.html" target="_blank">匈牙利 <span
                                    class="en">Hungary</span></a><i class="icon-label"></i></li>
                    <li class="letter">Y</li>
                    <li><a href="/travel-scenic-spot/mafengwo/10051.html" target="_blank">意大利 <span
                                    class="en">Italy</span></a><i class="icon-label"></i></li>
                    <li><a href="/travel-scenic-spot/mafengwo/10122.html" target="_blank">英国 <span
                                    class="en">United Kingdom</span></a><i class="icon-label"></i></li>
                </ul>
            </dd>
        </dl>
        <dl class="item" style="height: 660px;">
            <dt class="sub-title">非洲</dt>
            <dd class="clearfix">
                <ul class="col">
                    <li class="letter">A</li>
                    <li><a href="/travel-scenic-spot/mafengwo/12032.html" target="_blank">阿尔及利亚 <span
                                    class="en">People's Democratic Republic of Algeria</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/10178.html" target="_blank">埃及 <span
                                    class="en">Egypt</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/12858.html" target="_blank">埃塞俄比亚 <span
                                    class="en">Ethiopia</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/22047.html" target="_blank">安哥拉 <span
                                    class="en">The Republic of Angola</span></a>
                    </li>
                    <li class="letter">B</li>
                    <li><a href="/travel-scenic-spot/mafengwo/57170.html" target="_blank">贝宁 <span
                                    class="en">Benin</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/15534.html" target="_blank">博茨瓦纳 <span
                                    class="en">Botswana</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/56531.html" target="_blank">布基纳法索 <span
                                    class="en">Burkina Faso</span></a></li>
                    <li><a href="/travel-scenic-spot/mafengwo/57171.html" target="_blank">布隆迪 <span
                                    class="en">Burundi</span></a></li>
                    <li class="letter">C</li>
                    <li><a href="/travel-scenic-spot/mafengwo/57172.html" target="_blank">赤道几内亚 <span
                                    class="en">Equatorial Guinea</span></a>
                    </li>
                    <li class="letter">D</li>
                    <li><a href="/travel-scenic-spot/mafengwo/17958.html" target="_blank">多哥 <span
                                    class="en">Togo</span></a>
                    </li>
                    <li class="letter">E</li>
                    <li><a href="/travel-scenic-spot/mafengwo/19760.html" target="_blank">厄立特里亚 <span
                                    class="en">The State of Eritrea</span></a>
                    </li>
                    <li class="letter">F</li>
                    <li><a href="/travel-scenic-spot/mafengwo/57173.html" target="_blank">佛得角 <span
                                    class="en">Cape Verde</span></a>
                    </li>
                    <li class="letter">G</li>
                    <li><a href="/travel-scenic-spot/mafengwo/57174.html" target="_blank">冈比亚 <span
                                    class="en">Gambia</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/12031.html" target="_blank">刚果 <span
                                    class="en">The Republic of Congo</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/57175.html" target="_blank">刚果民主共和国 <span
                                    class="en">Democratic Republic of the Congo</span></a>
                    </li>
                    <li class="letter">J</li>
                    <li><a href="/travel-scenic-spot/mafengwo/57176.html" target="_blank">吉布提 <span
                                    class="en">Djibouti</span></a></li>
                    <li><a href="/travel-scenic-spot/mafengwo/32815.html" target="_blank">几内亚 <span
                                    class="en">The Republic of Guinea</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/57177.html" target="_blank">几内亚比绍 <span
                                    class="en">Guinea-Bissau</span></a></li>
                    <li><a href="/travel-scenic-spot/mafengwo/11706.html" target="_blank">加纳 <span
                                    class="en">Ghana</span></a>
                    </li>
                </ul>
                <ul class="col">
                    <li><a href="/travel-scenic-spot/mafengwo/57178.html" target="_blank">加蓬 <span
                                    class="en">Gabon</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/11752.html" target="_blank">津巴布韦 <span
                                    class="en">Zimbabwe</span></a>
                    </li>
                    <li class="letter">K</li>
                    <li><a href="/travel-scenic-spot/mafengwo/27636.html" target="_blank">喀麦隆 <span
                                    class="en">Cameroon</span></a></li>
                    <li><a href="/travel-scenic-spot/mafengwo/57179.html" target="_blank">科摩罗 <span
                                    class="en">Comoros</span></a></li>
                    <li><a href="/travel-scenic-spot/mafengwo/13122.html" target="_blank">科特迪瓦 <span
                                    class="en">Ivory Coast</span></a></li>
                    <li><a href="/travel-scenic-spot/mafengwo/10029.html" target="_blank">肯尼亚 <span
                                    class="en">Kenya</span></a><i class="icon-label"></i></li>
                    <li class="letter">L</li>
                    <li><a href="/travel-scenic-spot/mafengwo/57180.html" target="_blank">莱索托 <span
                                    class="en">Lesotho</span></a></li>
                    <li><a href="/travel-scenic-spot/mafengwo/57181.html" target="_blank">利比里亚 <span
                                    class="en">Liberia</span></a></li>
                    <li><a href="/travel-scenic-spot/mafengwo/16746.html" target="_blank">利比亚 <span
                                    class="en">State of Libya</span></a></li>
                    <li><a href="/travel-scenic-spot/mafengwo/22478.html" target="_blank">留尼旺 <span
                                    class="en">Réunion</span></a></li>
                    <li><a href="/travel-scenic-spot/mafengwo/57182.html" target="_blank">卢旺达 <span
                                    class="en">Rwanda</span></a>
                    </li>
                    <li class="letter">M</li>
                    <li><a href="/travel-scenic-spot/mafengwo/17439.html" target="_blank">马达加斯加 <span
                                    class="en">Madagascar</span></a><i class="icon-label"></i></li>
                    <li><a href="/travel-scenic-spot/mafengwo/29615.html" target="_blank">马拉维 <span
                                    class="en">The Republic of Malawi</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/12036.html" target="_blank">马里 <span
                                    class="en">The Republic of Mali</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/11761.html" target="_blank">毛里求斯 <span
                                    class="en">Mauritius</span></a><i class="icon-label"></i></li>
                    <li><a href="/travel-scenic-spot/mafengwo/18450.html" target="_blank">毛里塔尼亚 <span
                                    class="en">The Islamic Republic of Mauritania</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/12033.html" target="_blank">摩洛哥 <span
                                    class="en">Morocco</span></a><i class="icon-label"></i></li>
                    <li><a href="/travel-scenic-spot/mafengwo/11753.html" target="_blank">莫桑比克 <span
                                    class="en">Mozambique</span></a></li>
                    <li class="letter">N</li>
                    <li><a href="/travel-scenic-spot/mafengwo/10762.html" target="_blank">纳米比亚 <span
                                    class="en">Namibia</span></a></li>
                </ul>
                <ul class="col">
                    <li><a href="/travel-scenic-spot/mafengwo/10455.html" target="_blank">南非 <span
                                    class="en">South Africa</span></a></li>
                    <li><a href="/travel-scenic-spot/mafengwo/19955.html" target="_blank">南苏丹 <span
                                    class="en">Republic of South Sudan</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/12027.html" target="_blank">尼日尔 <span
                                    class="en">Niger</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/21111.html" target="_blank">尼日利亚 <span
                                    class="en">Federal Republic of Nigeria</span></a>
                    </li>
                    <li class="letter">S</li>
                    <li><a href="/travel-scenic-spot/mafengwo/57183.html" target="_blank">塞拉利昂 <span
                                    class="en">Sierra leone</span></a></li>
                    <li><a href="/travel-scenic-spot/mafengwo/12026.html" target="_blank">塞内加尔 <span
                                    class="en">Senegal</span></a></li>
                    <li><a href="/travel-scenic-spot/mafengwo/16827.html" target="_blank">塞舌尔 <span
                                    class="en">Seychelles</span></a><i class="icon-label"></i></li>
                    <li><a href="/travel-scenic-spot/mafengwo/32925.html" target="_blank">圣多美和普林西比 <span
                                    class="en">Sao Tome and Principe</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/57184.html" target="_blank">斯威士兰 <span
                                    class="en">Swaziland</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/15123.html" target="_blank">苏丹 <span
                                    class="en">Sudan</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/57185.html" target="_blank">索马里 <span
                                    class="en">Somalia</span></a></li>
                    <li class="letter">T</li>
                    <li><a href="/travel-scenic-spot/mafengwo/10818.html" target="_blank">坦桑尼亚 <span
                                    class="en">The United Republic of Tanzania</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/11604.html" target="_blank">突尼斯 <span
                                    class="en">Tunisia</span></a></li>
                    <li class="letter">W</li>
                    <li><a href="/travel-scenic-spot/mafengwo/12034.html" target="_blank">乌干达 <span
                                    class="en">Uganda</span></a>
                    </li>
                    <li class="letter">X</li>
                    <li><a href="/travel-scenic-spot/mafengwo/57186.html" target="_blank">西撒哈拉 <span
                                    class="en">Western Sahara</span></a></li>
                    <li class="letter">Z</li>
                    <li><a href="/travel-scenic-spot/mafengwo/11751.html" target="_blank">赞比亚 <span
                                    class="en">Zambia</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/28359.html" target="_blank">乍得 <span
                                    class="en">Chad</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/10689.html" target="_blank">中非 <span
                                    class="en">The Central African Republic</span></a>
                    </li>
                </ul>
            </dd>
        </dl>
        <dl class="item" style="margin:0;">
            <dt class="sub-title">大洋洲</dt>
            <dd class="clearfix">
                <ul class="col">
                    <li class="letter">A</li>
                    <li><a href="/travel-scenic-spot/mafengwo/10202.html" target="_blank">澳大利亚 <span
                                    class="en">Australia</span></a><i class="icon-label"></i></li>
                    <li class="letter">B</li>
                    <li><a href="/travel-scenic-spot/mafengwo/12647.html" target="_blank">巴布亚新几内亚 <span
                                    class="en">Papua New Guinea</span></a>
                    </li>
                    <li class="letter">D</li>
                    <li><a href="/travel-scenic-spot/mafengwo/10344.html" target="_blank">大溪地 <span
                                    class="en">Tahiti</span></a><i class="icon-label"></i></li>
                    <li class="letter">F</li>
                    <li><a href="/travel-scenic-spot/mafengwo/11044.html" target="_blank">斐济 <span
                                    class="en">Fiji</span></a><i class="icon-label"></i></li>
                    <li class="letter">G</li>
                    <li><a href="/travel-scenic-spot/mafengwo/19016.html" target="_blank">关岛 <span
                                    class="en">Guam</span></a>
                    </li>
                    <li class="letter">J</li>
                    <li><a href="/travel-scenic-spot/mafengwo/57161.html" target="_blank">基里巴斯 <span
                                    class="en">Kiribati</span></a>
                    </li>
                </ul>
                <ul class="col">
                    <li class="letter">K</li>
                    <li><a href="/travel-scenic-spot/mafengwo/57167.html" target="_blank">库克群岛 <span
                                    class="en">Cook Islands</span></a></li>
                    <li class="letter">M</li>
                    <li><a href="/travel-scenic-spot/mafengwo/57162.html" target="_blank">马绍尔群岛 <span
                                    class="en">Marshall Islands</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/57163.html" target="_blank">密克罗尼西亚联邦 <span
                                    class="en">Micronesia</span></a></li>
                    <!--li class="letter">N</li>
                    <li><a href="/travel-scenic-spot/mafengwo/57166.html" target="_blank">瑙鲁 <span class="en">Nauru</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/57168.html" target="_blank">纽埃 <span class="en">Niue</span></a>
                    </li-->
                    <li class="letter">P</li>
                    <li><a href="/travel-scenic-spot/mafengwo/15911.html" target="_blank">帕劳 <span
                                    class="en">Palau</span></a><i class="icon-label"></i></li>
                </ul>
                <ul class="col">
                    <li class="letter">S</li>
                    <li><a href="/travel-scenic-spot/mafengwo/54998.html" target="_blank">萨摩亚 <span
                                    class="en">Samoa</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/24406.html" target="_blank">所罗门群岛 <span
                                    class="en">Solomon Islands</span></a></li>
                    <li class="letter">T</li>
                    <li><a href="/travel-scenic-spot/mafengwo/17753.html" target="_blank">汤加 <span
                                    class="en">The Kingdom of Tonga</span></a>
                    </li>
                    <li><a href="/travel-scenic-spot/mafengwo/57164.html" target="_blank">图瓦卢 <span
                                    class="en">Tuvalu</span></a>
                    </li>
                    <li class="letter">W</li>
                    <li><a href="/travel-scenic-spot/mafengwo/52088.html" target="_blank">瓦努阿图 <span
                                    class="en">Republic of Vanuatu</span></a>
                    </li>
                    <li class="letter">X</li>
                    <li><a href="/travel-scenic-spot/mafengwo/10544.html" target="_blank">新西兰 <span
                                    class="en">New Zealand</span></a><i class="icon-label"></i></li>
                </ul>
            </dd>
        </dl>
	       </div>
		</div>	
	</div>
</div>
		<div class="footer" style="height: 233px;">
    <div class="ft-content">
        <div class="ft-info clearfix">
            <dl class="ft-info-col ft-info-img">
                <a href=""><img class="onmyway-logo" src="image/logo.png"></a>
            </dl>
            <dl class="ft-info-col ft-info-about">
                <dt>关于我们</dt>
                <dd><a href="" rel="nofollow">关于on my way</a></dd>
                <dd><a href="" rel="nofollow">联系我们</a></dd>
            </dl>
            <dl class="ft-info-col ft-info-service">
                <dt>旅行服务</dt>
                <dd>
                    <ul class="clearfix">
                        <li><a target="_blank" href="">旅游攻略</a></li>
                        <li><a target="_blank" href="">旅游问答</a></li>
                        <li><a target="_blank" href="">旅游指南</a></li>
                        <li><a target="_blank" href="">旅游资讯</a></li>
                        <li><a target="_blank" href="">APP下载</a></li>
                    </ul>
                </dd>
            </dl>
        </div>
     
    </div>  
     <div class="ft-copyright" style="margin-top: 115px;">
            <p>© 2017 on my way.cn 上海市普陀区中山北路 华东师范大学 </p>
        </div>
</div>
</body>
</html>