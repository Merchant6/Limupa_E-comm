
@extends('admin.home.master')
@section('content')
<div class="main-content" style="min-height: 893px;">
   <section class="section">
      @if(session()->has('success'))
         <div class="success m-3">
            <p class="alert alert-danger"> {{ session()->get('success') }}</p>
         </div>
         @endif
      <div class="row ">
         <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
               <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                     <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                           <div class="card-content">
                              <h5 class="font-15">Products</h5>
                              <h2 class="mb-3 font-18">258</h2>
                              <p class="mb-0"><span class="col-green">10%</span> Increase</p>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                           <div class="banner-img">
                              <img src="assets/img/banner/1.png" alt="">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
               <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                     <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                           <div class="card-content">
                              <h5 class="font-15">Users</h5>
                              <h2 class="mb-3 font-18">1,287</h2>
                              <p class="mb-0"><span class="col-orange">09%</span> Decrease</p>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                           <div class="banner-img">
                              <img src="assets/img/banner/2.png" alt="">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
               <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                     <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                           <div class="card-content">
                              <h5 class="font-15">Orders</h5>
                              <h2 class="mb-3 font-18">128</h2>
                              <p class="mb-0"><span class="col-green">18%</span>
                                 Increase
                              </p>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                           <div class="banner-img">
                              <img src="assets/img/banner/3.png" alt="">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="card">
               <div class="card-statistic-4">
                  <div class="align-items-center justify-content-between">
                     <div class="row ">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pr-0 pt-3">
                           <div class="card-content">
                              <h5 class="font-15">Revenue</h5>
                              <h2 class="mb-3 font-18">$48,697</h2>
                              <p class="mb-0"><span class="col-green">42%</span> Increase</p>
                           </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6 pl-0">
                           <div class="banner-img">
                              <img src="assets/img/banner/4.png" alt="">
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-12 col-sm-12 col-lg-12">
            <div class="card ">
               <div class="card-header">
                  <h4>Revenue chart</h4>
                  <div class="card-header-action">
                     <div class="dropdown">
                        <a href="#" data-toggle="dropdown" class="btn btn-warning dropdown-toggle">Options</a>
                        <div class="dropdown-menu">
                           <a href="#" class="dropdown-item has-icon"><i class="fas fa-eye"></i> View</a>
                           <a href="#" class="dropdown-item has-icon"><i class="far fa-edit"></i> Edit</a>
                           <div class="dropdown-divider"></div>
                           <a href="#" class="dropdown-item has-icon text-danger"><i class="far fa-trash-alt"></i>
                           Delete</a>
                        </div>
                     </div>
                     <a href="#" class="btn btn-primary">View All</a>
                  </div>
               </div>
               <div class="card-body">
                  <div class="row">
                     <div class="col-lg-9">
                        <div id="chart1" style="min-height: 244px;">
                           <div id="apexchartsqfn2hama" class="apexcharts-canvas apexchartsqfn2hama" style="width: 695px; height: 230px;">
                              <svg id="SvgjsSvg1463" width="695" height="230" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                 <foreignObject x="0" y="0" width="695" height="230">
                                    <div class="apexcharts-legend right position-top" xmlns="http://www.w3.org/1999/xhtml" style="right: 0px; position: absolute; left: 15px; top: -20px;">
                                       <div class="apexcharts-legend-series" rel="1" data:collapsed="false" style="margin: 0px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="background: rgb(120, 107, 237); color: rgb(120, 107, 237); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="1" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-family: Helvetica, Arial, sans-serif;">High - 2019</span></div>
                                       <div class="apexcharts-legend-series" rel="2" data:collapsed="false" style="margin: 0px 5px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="background: rgb(153, 155, 156); color: rgb(153, 155, 156); height: 12px; width: 12px; left: 0px; top: 0px; border-width: 0px; border-color: rgb(255, 255, 255); border-radius: 12px;"></span><span class="apexcharts-legend-text" rel="2" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-family: Helvetica, Arial, sans-serif;">Low - 2019</span></div>
                                    </div>
                                    <style type="text/css">
                                       .apexcharts-legend {
                                       display: flex;
                                       overflow: auto;
                                       padding: 0 10px;
                                       }
                                       .apexcharts-legend.position-bottom, .apexcharts-legend.position-top {
                                       flex-wrap: wrap
                                       }
                                       .apexcharts-legend.position-right, .apexcharts-legend.position-left {
                                       flex-direction: column;
                                       bottom: 0;
                                       }
                                       .apexcharts-legend.position-bottom.left, .apexcharts-legend.position-top.left, .apexcharts-legend.position-right, .apexcharts-legend.position-left {
                                       justify-content: flex-start;
                                       }
                                       .apexcharts-legend.position-bottom.center, .apexcharts-legend.position-top.center {
                                       justify-content: center;  
                                       }
                                       .apexcharts-legend.position-bottom.right, .apexcharts-legend.position-top.right {
                                       justify-content: flex-end;
                                       }
                                       .apexcharts-legend-series {
                                       cursor: pointer;
                                       }
                                       .apexcharts-legend.position-bottom .apexcharts-legend-series, .apexcharts-legend.position-top .apexcharts-legend-series{
                                       display: flex;
                                       align-items: center;
                                       }
                                       .apexcharts-legend-text {
                                       position: relative;
                                       font-size: 14px;
                                       }
                                       .apexcharts-legend-text *, .apexcharts-legend-marker * {
                                       pointer-events: none;
                                       }
                                       .apexcharts-legend-marker {
                                       position: relative;
                                       display: inline-block;
                                       cursor: pointer;
                                       margin-right: 3px;
                                       }
                                       .apexcharts-legend.right .apexcharts-legend-series, .apexcharts-legend.left .apexcharts-legend-series{
                                       display: inline-block;
                                       }
                                       .apexcharts-legend-series.no-click {
                                       cursor: auto;
                                       }
                                       .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
                                       display: none !important;
                                       }
                                       .inactive-legend {
                                       opacity: 0.45;
                                       }
                                    </style>
                                 </foreignObject>
                                 <g id="SvgjsG1465" class="apexcharts-inner apexcharts-graphical" transform="translate(66.20855903625488, 30)">
                                    <defs id="SvgjsDefs1464">
                                       <clipPath id="gridRectMaskqfn2hama">
                                          <rect id="SvgjsRect1470" width="623.7914409637451" height="162.93636461830138" x="-2.5" y="-2.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                       </clipPath>
                                       <clipPath id="gridRectMarkerMaskqfn2hama">
                                          <rect id="SvgjsRect1471" width="638.7914409637451" height="177.93636461830138" x="-10" y="-10" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                       </clipPath>
                                    </defs>
                                    <rect id="SvgjsRect1469" width="1" height="157.93636461830138" x="0" y="0" rx="0" ry="0" fill="#b1b9c4" opacity="1" stroke-width="0" stroke-dasharray="0" class="apexcharts-xcrosshairs" filter="none" fill-opacity="0.9"></rect>
                                    <g id="SvgjsG1538" class="apexcharts-xaxis" transform="translate(0, 0)">
                                       <g id="SvgjsG1539" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                          <text id="SvgjsText1540" font-family="Helvetica, Arial, sans-serif" x="0" y="186.93636461830138" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                             <tspan id="SvgjsTspan1541" style="font-family: Helvetica, Arial, sans-serif;">Jan</tspan>
                                             <title>Jan</title>
                                          </text>
                                          <text id="SvgjsText1542" font-family="Helvetica, Arial, sans-serif" x="123.758288192749" y="186.93636461830138" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                             <tspan id="SvgjsTspan1543" style="font-family: Helvetica, Arial, sans-serif;">Feb</tspan>
                                             <title>Feb</title>
                                          </text>
                                          <text id="SvgjsText1544" font-family="Helvetica, Arial, sans-serif" x="247.51657638549804" y="186.93636461830138" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                             <tspan id="SvgjsTspan1545" style="font-family: Helvetica, Arial, sans-serif;">Mar</tspan>
                                             <title>Mar</title>
                                          </text>
                                          <text id="SvgjsText1546" font-family="Helvetica, Arial, sans-serif" x="371.2748645782471" y="186.93636461830138" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                             <tspan id="SvgjsTspan1547" style="font-family: Helvetica, Arial, sans-serif;">Apr</tspan>
                                             <title>Apr</title>
                                          </text>
                                          <text id="SvgjsText1548" font-family="Helvetica, Arial, sans-serif" x="495.03315277099614" y="186.93636461830138" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                             <tspan id="SvgjsTspan1549" style="font-family: Helvetica, Arial, sans-serif;">May</tspan>
                                             <title>May</title>
                                          </text>
                                          <text id="SvgjsText1550" font-family="Helvetica, Arial, sans-serif" x="618.7914409637451" y="186.93636461830138" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                             <tspan id="SvgjsTspan1551" style="font-family: Helvetica, Arial, sans-serif;">Jun</tspan>
                                             <title>Jun</title>
                                          </text>
                                       </g>
                                       <line id="SvgjsLine1552" x1="0" y1="158.93636461830138" x2="618.7914409637451" y2="158.93636461830138" stroke="#78909c" stroke-dasharray="0" stroke-width="1"></line>
                                    </g>
                                    <g id="SvgjsG1564" class="apexcharts-grid">
                                       <line id="SvgjsLine1565" x1="123.75828819274902" y1="158.93636461830138" x2="123.75828819274902" y2="164.93636461830138" stroke="#78909c" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                       <line id="SvgjsLine1566" x1="247.51657638549804" y1="158.93636461830138" x2="247.51657638549804" y2="164.93636461830138" stroke="#78909c" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                       <line id="SvgjsLine1567" x1="371.27486457824705" y1="158.93636461830138" x2="371.27486457824705" y2="164.93636461830138" stroke="#78909c" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                       <line id="SvgjsLine1568" x1="495.0331527709961" y1="158.93636461830138" x2="495.0331527709961" y2="164.93636461830138" stroke="#78909c" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                       <line id="SvgjsLine1569" x1="0" y1="0" x2="618.7914409637451" y2="0" stroke="#e7e7e7" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1570" x1="0" y1="26.322727436383563" x2="618.7914409637451" y2="26.322727436383563" stroke="#e7e7e7" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1571" x1="0" y1="52.645454872767125" x2="618.7914409637451" y2="52.645454872767125" stroke="#e7e7e7" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1572" x1="0" y1="78.96818230915069" x2="618.7914409637451" y2="78.96818230915069" stroke="#e7e7e7" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1573" x1="0" y1="105.29090974553425" x2="618.7914409637451" y2="105.29090974553425" stroke="#e7e7e7" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1574" x1="0" y1="131.61363718191782" x2="618.7914409637451" y2="131.61363718191782" stroke="#e7e7e7" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1575" x1="0" y1="157.93636461830138" x2="618.7914409637451" y2="157.93636461830138" stroke="#e7e7e7" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <rect id="SvgjsRect1576" width="618.7914409637451" height="26.322727436383563" x="0" y="0" rx="0" ry="0" fill="#f3f3f3" opacity="0" stroke-width="0" stroke="none" stroke-dasharray="0" class="apexcharts-gridRow"></rect>
                                       <rect id="SvgjsRect1577" width="618.7914409637451" height="26.322727436383563" x="0" y="26.322727436383563" rx="0" ry="0" fill="transparent" opacity="0" stroke-width="0" stroke="none" stroke-dasharray="0" class="apexcharts-gridRow"></rect>
                                       <rect id="SvgjsRect1578" width="618.7914409637451" height="26.322727436383563" x="0" y="52.645454872767125" rx="0" ry="0" fill="#f3f3f3" opacity="0" stroke-width="0" stroke="none" stroke-dasharray="0" class="apexcharts-gridRow"></rect>
                                       <rect id="SvgjsRect1579" width="618.7914409637451" height="26.322727436383563" x="0" y="78.96818230915069" rx="0" ry="0" fill="transparent" opacity="0" stroke-width="0" stroke="none" stroke-dasharray="0" class="apexcharts-gridRow"></rect>
                                       <rect id="SvgjsRect1580" width="618.7914409637451" height="26.322727436383563" x="0" y="105.29090974553425" rx="0" ry="0" fill="#f3f3f3" opacity="0" stroke-width="0" stroke="none" stroke-dasharray="0" class="apexcharts-gridRow"></rect>
                                       <rect id="SvgjsRect1581" width="618.7914409637451" height="26.322727436383563" x="0" y="131.61363718191782" rx="0" ry="0" fill="transparent" opacity="0" stroke-width="0" stroke="none" stroke-dasharray="0" class="apexcharts-gridRow"></rect>
                                       <line id="SvgjsLine1583" x1="0" y1="157.93636461830138" x2="618.7914409637451" y2="157.93636461830138" stroke="transparent" stroke-dasharray="0"></line>
                                       <line id="SvgjsLine1582" x1="0" y1="1" x2="0" y2="157.93636461830138" stroke="transparent" stroke-dasharray="0"></line>
                                    </g>
                                    <g id="SvgjsG1473" class="apexcharts-line-series apexcharts-plot-series">
                                       <g id="SvgjsG1506" class="apexcharts-series Low---2019" data:longestSeries="true" rel="2" data:realIndex="1">
                                          <path id="apexcharts-line-1" d="M 0 148.9114294972556C 43.31540086746215 148.9114294972556 80.44288732528688 130.861559255164 123.75828819274902 130.861559255164C 167.07368906021117 130.861559255164 204.20117551803588 45.12467560522896 247.51657638549804 45.12467560522896C 290.8319772529602 45.12467560522896 327.9594637107849 99.27428633150373 371.27486457824705 99.27428633150373C 414.5902654457092 99.27428633150373 451.7177519035339 67.68701340784345 495.0331527709961 67.68701340784345C 538.3485536384583 67.68701340784345 575.476040096283 121.83662413411821 618.7914409637451 121.83662413411821" fill="none" fill-opacity="1" stroke="rgba(153,155,156,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-line" index="1" clip-path="url(#gridRectMaskqfn2hama)" pathTo="M 0 148.9114294972556C 43.31540086746215 148.9114294972556 80.44288732528688 130.861559255164 123.75828819274902 130.861559255164C 167.07368906021117 130.861559255164 204.20117551803588 45.12467560522896 247.51657638549804 45.12467560522896C 290.8319772529602 45.12467560522896 327.9594637107849 99.27428633150373 371.27486457824705 99.27428633150373C 414.5902654457092 99.27428633150373 451.7177519035339 67.68701340784345 495.0331527709961 67.68701340784345C 538.3485536384583 67.68701340784345 575.476040096283 121.83662413411821 618.7914409637451 121.83662413411821" pathFrom="M -1 180.49870242091586L -1 180.49870242091586L 123.75828819274902 180.49870242091586L 247.51657638549804 180.49870242091586L 371.27486457824705 180.49870242091586L 495.0331527709961 180.49870242091586L 618.7914409637451 180.49870242091586"></path>
                                          <g id="SvgjsG1507" class="apexcharts-series-markers-wrap">
                                             <g id="SvgjsG1509" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskqfn2hama)">
                                                <circle id="SvgjsCircle1510" r="6" cx="0" cy="148.9114294972556" class="apexcharts-marker no-pointer-events w607ud8wp" stroke="#ffffff" fill="#999b9c" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="0" j="0" index="1" default-marker-size="6"></circle>
                                                <circle id="SvgjsCircle1511" r="6" cx="123.75828819274902" cy="130.861559255164" class="apexcharts-marker no-pointer-events w407hu9teh" stroke="#ffffff" fill="#999b9c" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="1" j="1" index="1" default-marker-size="6"></circle>
                                             </g>
                                             <g id="SvgjsG1517" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskqfn2hama)">
                                                <circle id="SvgjsCircle1518" r="6" cx="247.51657638549804" cy="45.12467560522896" class="apexcharts-marker no-pointer-events w2lcnnzlw" stroke="#ffffff" fill="#999b9c" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="2" j="2" index="1" default-marker-size="6"></circle>
                                             </g>
                                             <g id="SvgjsG1522" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskqfn2hama)">
                                                <circle id="SvgjsCircle1523" r="6" cx="371.27486457824705" cy="99.27428633150373" class="apexcharts-marker no-pointer-events w6fdc2epr" stroke="#ffffff" fill="#999b9c" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="3" j="3" index="1" default-marker-size="6"></circle>
                                             </g>
                                             <g id="SvgjsG1527" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskqfn2hama)">
                                                <circle id="SvgjsCircle1528" r="6" cx="495.0331527709961" cy="67.68701340784345" class="apexcharts-marker no-pointer-events wpemgoqqn" stroke="#ffffff" fill="#999b9c" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="4" j="4" index="1" default-marker-size="6"></circle>
                                             </g>
                                             <g id="SvgjsG1532" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskqfn2hama)">
                                                <circle id="SvgjsCircle1533" r="6" cx="618.7914409637451" cy="121.83662413411821" class="apexcharts-marker no-pointer-events wi7q2q4ed" stroke="#ffffff" fill="#999b9c" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="5" j="5" index="1" default-marker-size="6"></circle>
                                             </g>
                                          </g>
                                          <g id="SvgjsG1508" class="apexcharts-datalabels">
                                             <g id="SvgjsG1512" class="apexcharts-data-labels" clip-path="url(#gridRectMarkerMaskqfn2hama)">
                                                <text id="SvgjsText1514" font-family="Helvetica, Arial, sans-serif" x="0" y="137.9114294972556" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#999b9c" class="apexcharts-datalabel" cx="0" cy="137.9114294972556" style="font-family: Helvetica, Arial, sans-serif;">7</text>
                                                <text id="SvgjsText1516" font-family="Helvetica, Arial, sans-serif" x="123.75828819274902" y="119.861559255164" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#999b9c" class="apexcharts-datalabel" cx="123.75828819274902" cy="119.861559255164" style="font-family: Helvetica, Arial, sans-serif;">11</text>
                                             </g>
                                             <g id="SvgjsG1519" class="apexcharts-data-labels" clip-path="url(#gridRectMarkerMaskqfn2hama)">
                                                <text id="SvgjsText1521" font-family="Helvetica, Arial, sans-serif" x="247.51657638549804" y="34.12467560522896" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#999b9c" class="apexcharts-datalabel" cx="247.51657638549804" cy="34.12467560522896" style="font-family: Helvetica, Arial, sans-serif;">30</text>
                                             </g>
                                             <g id="SvgjsG1524" class="apexcharts-data-labels" clip-path="url(#gridRectMarkerMaskqfn2hama)">
                                                <text id="SvgjsText1526" font-family="Helvetica, Arial, sans-serif" x="371.27486457824705" y="88.27428633150373" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#999b9c" class="apexcharts-datalabel" cx="371.27486457824705" cy="88.27428633150373" style="font-family: Helvetica, Arial, sans-serif;">18</text>
                                             </g>
                                             <g id="SvgjsG1529" class="apexcharts-data-labels" clip-path="url(#gridRectMarkerMaskqfn2hama)">
                                                <text id="SvgjsText1531" font-family="Helvetica, Arial, sans-serif" x="495.0331527709961" y="56.68701340784345" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#999b9c" class="apexcharts-datalabel" cx="495.0331527709961" cy="56.68701340784345" style="font-family: Helvetica, Arial, sans-serif;">25</text>
                                             </g>
                                             <g id="SvgjsG1534" class="apexcharts-data-labels" clip-path="url(#gridRectMarkerMaskqfn2hama)">
                                                <text id="SvgjsText1536" font-family="Helvetica, Arial, sans-serif" x="618.7914409637451" y="110.83662413411821" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#999b9c" class="apexcharts-datalabel" cx="618.7914409637451" cy="110.83662413411821" style="font-family: Helvetica, Arial, sans-serif;">13</text>
                                             </g>
                                          </g>
                                       </g>
                                       <g id="SvgjsG1474" class="apexcharts-series High---2019" data:longestSeries="true" rel="1" data:realIndex="0">
                                          <path id="apexcharts-line-0" d="M 0 157.93636461830138C 43.31540086746215 157.93636461830138 80.44288732528688 112.81168901307241 123.75828819274902 112.81168901307241C 167.07368906021117 112.81168901307241 204.20117551803588 117.3241565735953 247.51657638549804 117.3241565735953C 290.8319772529602 117.3241565735953 327.9594637107849 18.0498702420916 371.27486457824705 18.0498702420916C 414.5902654457092 18.0498702420916 451.7177519035339 36.09974048418317 495.0331527709961 36.09974048418317C 538.3485536384583 36.09974048418317 575.476040096283 36.09974048418317 618.7914409637451 36.09974048418317" fill="none" fill-opacity="1" stroke="rgba(120,107,237,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMaskqfn2hama)" pathTo="M 0 157.93636461830138C 43.31540086746215 157.93636461830138 80.44288732528688 112.81168901307241 123.75828819274902 112.81168901307241C 167.07368906021117 112.81168901307241 204.20117551803588 117.3241565735953 247.51657638549804 117.3241565735953C 290.8319772529602 117.3241565735953 327.9594637107849 18.0498702420916 371.27486457824705 18.0498702420916C 414.5902654457092 18.0498702420916 451.7177519035339 36.09974048418317 495.0331527709961 36.09974048418317C 538.3485536384583 36.09974048418317 575.476040096283 36.09974048418317 618.7914409637451 36.09974048418317" pathFrom="M -1 180.49870242091586L -1 180.49870242091586L 123.75828819274902 180.49870242091586L 247.51657638549804 180.49870242091586L 371.27486457824705 180.49870242091586L 495.0331527709961 180.49870242091586L 618.7914409637451 180.49870242091586"></path>
                                          <g id="SvgjsG1475" class="apexcharts-series-markers-wrap">
                                             <g id="SvgjsG1477" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskqfn2hama)">
                                                <circle id="SvgjsCircle1478" r="6" cx="0" cy="157.93636461830138" class="apexcharts-marker no-pointer-events wusaj4puvg" stroke="#ffffff" fill="#786bed" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="0" j="0" index="0" default-marker-size="6"></circle>
                                                <circle id="SvgjsCircle1479" r="6" cx="123.75828819274902" cy="112.81168901307241" class="apexcharts-marker no-pointer-events wmkbm3a5i" stroke="#ffffff" fill="#786bed" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="1" j="1" index="0" default-marker-size="6"></circle>
                                             </g>
                                             <g id="SvgjsG1485" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskqfn2hama)">
                                                <circle id="SvgjsCircle1486" r="6" cx="247.51657638549804" cy="117.3241565735953" class="apexcharts-marker no-pointer-events werdtkok2j" stroke="#ffffff" fill="#786bed" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="2" j="2" index="0" default-marker-size="6"></circle>
                                             </g>
                                             <g id="SvgjsG1490" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskqfn2hama)">
                                                <circle id="SvgjsCircle1491" r="6" cx="371.27486457824705" cy="18.0498702420916" class="apexcharts-marker no-pointer-events wbtfvj8if" stroke="#ffffff" fill="#786bed" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="3" j="3" index="0" default-marker-size="6"></circle>
                                             </g>
                                             <g id="SvgjsG1495" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskqfn2hama)">
                                                <circle id="SvgjsCircle1496" r="6" cx="495.0331527709961" cy="36.09974048418317" class="apexcharts-marker no-pointer-events w11d8c4uy" stroke="#ffffff" fill="#786bed" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="4" j="4" index="0" default-marker-size="6"></circle>
                                             </g>
                                             <g id="SvgjsG1500" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMaskqfn2hama)">
                                                <circle id="SvgjsCircle1501" r="6" cx="618.7914409637451" cy="36.09974048418317" class="apexcharts-marker no-pointer-events wrau6c035" stroke="#ffffff" fill="#786bed" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" rel="5" j="5" index="0" default-marker-size="6"></circle>
                                             </g>
                                          </g>
                                          <g id="SvgjsG1476" class="apexcharts-datalabels">
                                             <g id="SvgjsG1480" class="apexcharts-data-labels" clip-path="url(#gridRectMarkerMaskqfn2hama)">
                                                <text id="SvgjsText1482" font-family="Helvetica, Arial, sans-serif" x="0" y="146.93636461830138" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#786bed" class="apexcharts-datalabel" cx="0" cy="146.93636461830138" style="font-family: Helvetica, Arial, sans-serif;">5</text>
                                                <text id="SvgjsText1484" font-family="Helvetica, Arial, sans-serif" x="123.75828819274902" y="101.81168901307241" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#786bed" class="apexcharts-datalabel" cx="123.75828819274902" cy="101.81168901307241" style="font-family: Helvetica, Arial, sans-serif;">15</text>
                                             </g>
                                             <g id="SvgjsG1487" class="apexcharts-data-labels" clip-path="url(#gridRectMarkerMaskqfn2hama)">
                                                <text id="SvgjsText1489" font-family="Helvetica, Arial, sans-serif" x="247.51657638549804" y="106.3241565735953" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#786bed" class="apexcharts-datalabel" cx="247.51657638549804" cy="106.3241565735953" style="font-family: Helvetica, Arial, sans-serif;">14</text>
                                             </g>
                                             <g id="SvgjsG1492" class="apexcharts-data-labels" clip-path="url(#gridRectMarkerMaskqfn2hama)">
                                                <text id="SvgjsText1494" font-family="Helvetica, Arial, sans-serif" x="371.27486457824705" y="7.0498702420916" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#786bed" class="apexcharts-datalabel" cx="371.27486457824705" cy="7.0498702420916" style="font-family: Helvetica, Arial, sans-serif;">36</text>
                                             </g>
                                             <g id="SvgjsG1497" class="apexcharts-data-labels" clip-path="url(#gridRectMarkerMaskqfn2hama)">
                                                <text id="SvgjsText1499" font-family="Helvetica, Arial, sans-serif" x="495.0331527709961" y="25.099740484183172" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#786bed" class="apexcharts-datalabel" cx="495.0331527709961" cy="25.099740484183172" style="font-family: Helvetica, Arial, sans-serif;">32</text>
                                             </g>
                                             <g id="SvgjsG1502" class="apexcharts-data-labels" clip-path="url(#gridRectMarkerMaskqfn2hama)">
                                                <text id="SvgjsText1504" font-family="Helvetica, Arial, sans-serif" x="618.7914409637451" y="25.099740484183172" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#786bed" class="apexcharts-datalabel" cx="618.7914409637451" cy="25.099740484183172" style="font-family: Helvetica, Arial, sans-serif;">32</text>
                                             </g>
                                          </g>
                                       </g>
                                    </g>
                                    <line id="SvgjsLine1584" x1="0" y1="0" x2="618.7914409637451" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine1585" x1="0" y1="0" x2="618.7914409637451" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG1586" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG1587" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG1588" class="apexcharts-point-annotations"></g>
                                 </g>
                                 <g id="SvgjsG1553" class="apexcharts-yaxis" rel="0" transform="translate(23.481300354003906, 0)">
                                    <g id="SvgjsG1554" class="apexcharts-yaxis-texts-g">
                                       <text id="SvgjsText1555" font-family="Helvetica, Arial, sans-serif" x="20" y="31.6" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">40</text>
                                       <text id="SvgjsText1556" font-family="Helvetica, Arial, sans-serif" x="20" y="58.02272743638357" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">34</text>
                                       <text id="SvgjsText1557" font-family="Helvetica, Arial, sans-serif" x="20" y="84.44545487276713" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">28</text>
                                       <text id="SvgjsText1558" font-family="Helvetica, Arial, sans-serif" x="20" y="110.8681823091507" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">22</text>
                                       <text id="SvgjsText1559" font-family="Helvetica, Arial, sans-serif" x="20" y="137.29090974553426" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">17</text>
                                       <text id="SvgjsText1560" font-family="Helvetica, Arial, sans-serif" x="20" y="163.71363718191782" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">11</text>
                                       <text id="SvgjsText1561" font-family="Helvetica, Arial, sans-serif" x="20" y="190.13636461830137" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">5</text>
                                    </g>
                                    <g id="SvgjsG1562" class="apexcharts-yaxis-title">
                                       <text id="SvgjsText1563" font-family="Helvetica, Arial, sans-serif" x="10.673287391662598" y="108.96818230915069" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#373d3f" class="apexcharts-yaxis-title-text apexcharts-yaxis-title" style="font-family: Helvetica, Arial, sans-serif;" transform="rotate(-90 -7.247169494628906 105.33182144165039)">Income</text>
                                    </g>
                                 </g>
                              </svg>
                              <div class="apexcharts-tooltip light">
                                 <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                 <div class="apexcharts-tooltip-series-group">
                                    <span class="apexcharts-tooltip-marker" style="background-color: rgb(120, 107, 237);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                       <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                       <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                 </div>
                                 <div class="apexcharts-tooltip-series-group">
                                    <span class="apexcharts-tooltip-marker" style="background-color: rgb(153, 155, 156);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                       <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                       <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                 </div>
                              </div>
                              <div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom">
                                 <div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                              </div>
                           </div>
                        </div>
                        <div class="row mb-0">
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                              <div class="list-inline text-center">
                                 <div class="list-inline-item p-r-30">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up-circle col-green">
                                       <circle cx="12" cy="12" r="10"></circle>
                                       <polyline points="16 12 12 8 8 12"></polyline>
                                       <line x1="12" y1="16" x2="12" y2="8"></line>
                                    </svg>
                                    <h5 class="m-b-0">$675</h5>
                                    <p class="text-muted font-14 m-b-0">Weekly Earnings</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                              <div class="list-inline text-center">
                                 <div class="list-inline-item p-r-30">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-down-circle col-orange">
                                       <circle cx="12" cy="12" r="10"></circle>
                                       <polyline points="8 12 12 16 16 12"></polyline>
                                       <line x1="12" y1="8" x2="12" y2="16"></line>
                                    </svg>
                                    <h5 class="m-b-0">$1,587</h5>
                                    <p class="text-muted font-14 m-b-0">Monthly Earnings</p>
                                 </div>
                              </div>
                           </div>
                           <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                              <div class="list-inline text-center">
                                 <div class="list-inline-item p-r-30">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up-circle col-green">
                                       <circle cx="12" cy="12" r="10"></circle>
                                       <polyline points="16 12 12 8 8 12"></polyline>
                                       <line x1="12" y1="16" x2="12" y2="8"></line>
                                    </svg>
                                    <h5 class="mb-0 m-b-0">$45,965</h5>
                                    <p class="text-muted font-14 m-b-0">Yearly Earnings</p>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="resize-triggers">
                           <div class="expand-trigger">
                              <div style="width: 724px; height: 321px;"></div>
                           </div>
                           <div class="contract-trigger"></div>
                        </div>
                     </div>
                     <div class="col-lg-3">
                        <div class="row mt-5">
                           <div class="col-7 col-xl-7 mb-3">Total customers</div>
                           <div class="col-5 col-xl-5 mb-3">
                              <span class="text-big">8,257</span>
                              <sup class="col-green">+09%</sup>
                           </div>
                           <div class="col-7 col-xl-7 mb-3">Total Income</div>
                           <div class="col-5 col-xl-5 mb-3">
                              <span class="text-big">$9,857</span>
                              <sup class="text-danger">-18%</sup>
                           </div>
                           <div class="col-7 col-xl-7 mb-3">Project completed</div>
                           <div class="col-5 col-xl-5 mb-3">
                              <span class="text-big">28</span>
                              <sup class="col-green">+16%</sup>
                           </div>
                           <div class="col-7 col-xl-7 mb-3">Total expense</div>
                           <div class="col-5 col-xl-5 mb-3">
                              <span class="text-big">$6,287</span>
                              <sup class="col-green">+09%</sup>
                           </div>
                           <div class="col-7 col-xl-7 mb-3">New Customers</div>
                           <div class="col-5 col-xl-5 mb-3">
                              <span class="text-big">684</span>
                              <sup class="col-green">+22%</sup>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

   </section>

</div>
@endsection