<?php include("do.php") ?>
<!DOCTYPE html>
<html>

<head>
	<meta charset='UTF-8'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel="apple-touch-icon" sizes="180x180" href="/favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon/favicon-16x16.png">
	<link rel="stylesheet" href="/tabler.min.css">
	<!-- 去注册百度地图的开发者账号！地址：https://lbsyun.baidu.com/index.php?title=jspopularGL 每天5k用量，然后替换这的值 -->
	<script src="http://api.map.baidu.com/api?v=2.0&ak=你的值"></script>
	<link rel="stylesheet" href="https://gcore.jsdelivr.net/npm/@tabler/core@1.0.0-beta17/dist/css/tabler-flags.min.css">
	<style>
	    body{
	        cursor: -webkit-image-set(url(data:image/png;base64,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) 2x,url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACAAAAAgCAYAAAEEfUpiAAAAAXNSR0IArs4c6QAAArtJREFUWAntV01rGlEUHWuibcU2TVPTRonJpiL2a1FbaEtpAvobanGnIK4qKQjuhP4GseDWjYuii9CNiyJCN134segiJGlAcKELQWJDFZmeM+0TDRM/ppVuvHCceXfuPXPvfe/dN0qSmmxvb8vn9cvnFWPGFouF/pcHJjIEA/1AoXoTjUZpdfGbyFssFuVAIDDKP0Q34R1DlppuN/D+t+M87Qyy0Wh8VjO6RKVer5cymcyrXq/XUjPahPIxQOMlNQOdmvLf6wxI9SloNVdUKYXb7ZYPDg4+gMgwbYwiQRKcCCedTicdHh4emc3mB9D9EPpxVyWCVqvVgNET4CHwHHADJmCirMDiHnB1ouXCQLUCunq9/gZPrqg+nUK5zN7Rbre7sOVsiLUxhetvEwMJuCmPj4/ZNdYAZR9OyzAgIEmhUJB3d3fts5CMEJAklUrJ8Xicm3zi5hrpAHCUut2uVCqVpEgk8nV9ff1FOBz+AiKmdqEoEfh8PtnpdL6G1X2Ae+AlwFQmikKQTqeTsBQFZOiMbmIKZF8yGo13cbUBM1WfzkL4Js3OgmRx1ViB4XnmLvxvM8FAVrCpe/1+/zSfz7O/XAO4GGduD/CZWXiQbYq2srOzw/O+Xy6X30O/CvALZq6BMAC7CIAdhXC5XHKlUpFrtdrHra2t27AxAnOZJtUARCA2m03OZrMyDt5SMBh0Igi2/+H1g6E2mSobtshQKCQ5HI5H+Jb9dnZ2dpRIJNjteOr/VSBiXlmBO5iCE/RgJZVYLCZ5vd5KMpncR5u9brVa1/7I6g2IyWQy5HK5d36//xMcToGxPVshHfMzmAKPxyM3m82fOAj2YM/efhNgpmaAhyZbNqO8BVA3cqhgrEm4yjc6nc73arW6j/tnHANzW3TgVkRMAdcCM+H/DOr4iUD0gYUsKrCowFwr8AukF+p8blYsTwAAAABJRU5ErkJggg==) 1x) 4 4,auto !important;
	    }
	    .a {
	        text-align: center;
	    }
	    .b {
	        white-space: nowrap; 
	    }
	    #map {
  width: 100%;
  height: 100%;
}
	</style>

	<title><?php echo $t["my_ip_info"]; ?></title>
</head>

<body>
    
	<div class="container">

		<body>
			<div class="page">
				<!-- Navbar -->
				<header class="navbar navbar-expand-md d-print-none">
					<div class="container-xl">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar-menu" aria-controls="navbar-menu" aria-expanded="false" aria-label="Toggle navigation">
          </button>
          <h1 class="navbar-brand navbar-brand-autodark d-none-navbar-horizontal pe-0 pe-md-3">
            <a href=".">
              <img src="logo.svg" width="110" height="32" alt="Tabler" class="navbar-brand-image">
            </a>
          </h1>
          
        </div>
        <!-- Page header -->
				</header>
				<div class="page-wrapper">
					<!-- Page body -->
					<div class="page-body">
						<div class="container">
							<div class="row row-deck row-cards justify-content-center">
								<div class="col-md-6">
									<div class="card">
										<div class="card-header card-header row align-items-center">
											<h3 class="card-title col">
												<?php echo $t["my_ip_info"]; ?>
											</h3>
											<div class="col-auto">
  <div class="btn-list">
    <?php
      // 添加语言切换功能
      if ($locale == "en") {
        echo '<a href="?lang=zh" class="btn"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-language" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M4 5h7"></path>
   <path d="M9 3v2c0 4.418 -2.239 8 -5 8"></path>
   <path d="M5 9c0 2.144 2.952 3.908 6.7 4"></path>
   <path d="M12 20l4 -9l4 9"></path>
   <path d="M19.1 18h-6.2"></path>
</svg>中文</a>';
      } else {
        echo '<a href="?lang=en" class="btn"><svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-language" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
   <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
   <path d="M4 5h7"></path>
   <path d="M9 3v2c0 4.418 -2.239 8 -5 8"></path>
   <path d="M5 9c0 2.144 2.952 3.908 6.7 4"></path>
   <path d="M12 20l4 -9l4 9"></path>
   <path d="M19.1 18h-6.2"></path>
</svg>English</a>';
      }
    ?>
  </div>
</div>

										</div>
										<div class="card-table table-responsive">
											<table class="table table-vcenter">
												<tbody>
													<tr>
														<td class="a"><?php echo $t["ip_info"]; ?></td>
														<td>
															<?php echo $ip_info; ?>
														</td>
													</tr>
													<tr>
														<td class="a"><?php echo $t["ip_city"]; ?></td>
														<td>
															<?php echo $ip_city; ?>
														</td>
													</tr>
													<tr>
														<td class="a b"><?php echo $t["ip_country"]; ?></td>
														<td>
															<?php echo $ip_country; ?> <span class="flag flag-country-<?php echo strtolower($ip_country); ?>"></span>
														</td>
													</tr>
													<tr>
														<td class="a"><?php echo $t["ip_asn"]; ?></td>
														<td>
															<?php echo $ip_asn; ?>
														</td>
													</tr>
													<tr>
														<td class="a"><?php echo $t["ip_http"]; ?></td>
														<td>
															<?php echo $ip_http; ?>
														</td>
													</tr>
													<tr>
														<td class="a"><?php echo $t["ip_longitude"]; ?></td>
														<td>
															<?php echo $ip_lon; ?>
														</td>
													</tr>
													<tr>
														<td class="a"><?php echo $t["ip_latitude"]; ?></td>
														<td>
															<?php echo $ip_lat; ?>
														</td>
													</tr>
													<tr>
														<td class="a"><?php echo $t["ip_zipcode"]; ?></td>
														<td>
															<?php echo $ip_zip; ?>
														</td>
													</tr>
													<tr>
														<td class="a b"><?php echo $t["ip_threatindex"]; ?></td>
														<td>
															<?php echo $ip_threat; ?>
														</td>
													</tr>
													<tr>
														<td class="a"><?php echo $t["ip_timezone"]; ?></td>
														<td>
															<?php echo $ip_time; ?>
														</td>
													</tr>
													<tr>
														<td class="a"><?php echo $t["ip_ua"]; ?></td>
														<td>
															<?php echo $ip_ua; ?>
														</td>
													</tr>
												</tbody>
											</table>
										</div>
									</div>
								</div>
								<!--添加地图-->
								<div class="col-md-6">
									<div class="card">
									    <div class="card-body">
									        <div  class="ratio ratio-1x1">
									        <div id="map"></div></div></div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!--添加地图-->
									<div class="row row-deck row-cards justify-content-center">
								
							</div>
							<!--添加页脚-->
					<footer class="footer footer-transparent d-print-none">
						<div class="container-xl">
							<div class="row text-center align-items-center flex-row-reverse">
								<div class="col-lg-auto ms-lg-auto">
									<ul class="list-inline list-inline-dots mb-0">
										<!--<li class="list-inline-item">-->
										<!--	<a href="https://github.com/ytree001/ipinfo" target="_blank"-->
										<!--		class="link-secondary" rel="noopener">-->
												<!-- Download SVG icon from http://tabler-icons.io/i/heart -->
										<!--		<svg xmlns="http://www.w3.org/2000/svg"-->
										<!--			class="icon text-pink icon-filled icon-inline" width="24"-->
										<!--			height="24" viewBox="0 0 24 24" stroke-width="2"-->
										<!--			stroke="currentColor" fill="none" stroke-linecap="round"-->
										<!--			stroke-linejoin="round">-->
										<!--			<path stroke="none" d="M0 0h24v24H0z" fill="none"></path>-->
										<!--			<path-->
										<!--				d="M19.5 12.572l-7.5 7.428l-7.5 -7.428a5 5 0 1 1 7.5 -6.566a5 5 0 1 1 7.5 6.572">-->
										<!--			</path>-->
										<!--		</svg>-->
										<!--		Sponsor-->
										<!--	</a>-->
										<!--</li>-->
									</ul>
								</div>
								<!--<div class="col-12 col-lg-auto mt-3 mt-lg-0">-->
								<div class="col-12 justify-content-center">
									<ul class="list-inline list-inline-dots mb-0">
										<li class="list-inline-item">
											© 2023
											<a href="." class="link-secondary">Ping.is</a>
										</li>
										<!--<li class="list-inline-item">-->
										<!--	<a href="https://github.com/ytree001/ipinfo" class="link-secondary"-->
										<!--		rel="noopener">-->
										<!--		github-->
										<!--	</a>-->
										<!--</li>-->
									</ul>
								</div>
							</div>
						</div>
					</footer>
				</div>

				
			</div>
			
			
				<script>
				var map = new BMap.Map("map"); // 创建地图实例
				var point = new BMap.Point(<?php echo $ip_lon; ?>, <?php echo $ip_lat; ?>); // 定义地图中心点坐标
				map.centerAndZoom(point, 15); // 设置地图中心点和缩放级别
				var marker = new BMap.Marker(point); // 创建标注
				map.addOverlay(marker); // 将标注添加到地图中
	</script>
		</body>

</html>