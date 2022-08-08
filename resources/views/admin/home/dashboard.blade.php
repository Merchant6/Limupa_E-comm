
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
                              <h5 class="font-15">New Booking</h5>
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
                              <h5 class="font-15"> Customers</h5>
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
                              <h5 class="font-15">New Project</h5>
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
      <div class="row">
         <div class="col-12 col-sm-12 col-lg-4">
            <div class="card">
               <div class="card-header">
                  <h4>Chart</h4>
               </div>
               <div class="card-body" style="position: relative;">
                  <div id="chart4" class="chartsh" style="min-height: 264px;">
                     <div id="apexcharts1wduyn1i" class="apexcharts-canvas apexcharts1wduyn1i" style="width: 258px; height: 250px;">
                        <svg id="SvgjsSvg1593" width="258" height="250" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                           <g id="SvgjsG1595" class="apexcharts-inner apexcharts-graphical" transform="translate(47.481300354003906, 30)">
                              <defs id="SvgjsDefs1594">
                                 <clipPath id="gridRectMask1wduyn1i">
                                    <rect id="SvgjsRect1599" width="204.5186996459961" height="181.93636461830138" x="-2" y="-2" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                 </clipPath>
                                 <clipPath id="gridRectMarkerMask1wduyn1i">
                                    <rect id="SvgjsRect1600" width="214.5186996459961" height="191.93636461830138" x="-7" y="-7" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                 </clipPath>
                                 <linearGradient id="SvgjsLinearGradient1607" x1="0" y1="0" x2="0" y2="1">
                                    <stop id="SvgjsStop1608" stop-opacity="0.65" stop-color="rgba(153,155,156,0.65)" offset="0"></stop>
                                    <stop id="SvgjsStop1609" stop-opacity="0.5" stop-color="rgba(204,205,206,0.5)" offset="1"></stop>
                                    <stop id="SvgjsStop1610" stop-opacity="0.5" stop-color="rgba(204,205,206,0.5)" offset="1"></stop>
                                 </linearGradient>
                                 <linearGradient id="SvgjsLinearGradient1616" x1="0" y1="0" x2="0" y2="1">
                                    <stop id="SvgjsStop1617" stop-opacity="0.65" stop-color="rgba(76,194,176,0.65)" offset="0"></stop>
                                    <stop id="SvgjsStop1618" stop-opacity="0.5" stop-color="rgba(166,225,216,0.5)" offset="1"></stop>
                                    <stop id="SvgjsStop1619" stop-opacity="0.5" stop-color="rgba(166,225,216,0.5)" offset="1"></stop>
                                 </linearGradient>
                              </defs>
                              <rect id="SvgjsRect1598" width="1" height="177.93636461830138" x="0" y="0" rx="0" ry="0" fill="#b1b9c4" opacity="1" stroke-width="0" stroke-dasharray="0" class="apexcharts-xcrosshairs" filter="none" fill-opacity="0.9"></rect>
                              <g id="SvgjsG1621" class="apexcharts-xaxis" transform="translate(0, 0)">
                                 <g id="SvgjsG1622" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                    <text id="SvgjsText1623" font-family="Helvetica, Arial, sans-serif" x="0" y="206.93636461830138" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan1624" style="font-family: Helvetica, Arial, sans-serif;">Jan</tspan>
                                       <title>Jan</title>
                                    </text>
                                    <text id="SvgjsText1625" font-family="Helvetica, Arial, sans-serif" x="33.41978327433269" y="206.93636461830138" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan1626" style="font-family: Helvetica, Arial, sans-serif;">Feb</tspan>
                                       <title>Feb</title>
                                    </text>
                                    <text id="SvgjsText1627" font-family="Helvetica, Arial, sans-serif" x="66.83956654866536" y="206.93636461830138" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan1628" style="font-family: Helvetica, Arial, sans-serif;">Mar</tspan>
                                       <title>Mar</title>
                                    </text>
                                    <text id="SvgjsText1629" font-family="Helvetica, Arial, sans-serif" x="100.25934982299803" y="206.93636461830138" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan1630" style="font-family: Helvetica, Arial, sans-serif;">Apr</tspan>
                                       <title>Apr</title>
                                    </text>
                                    <text id="SvgjsText1631" font-family="Helvetica, Arial, sans-serif" x="133.6791330973307" y="206.93636461830138" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan1632" style="font-family: Helvetica, Arial, sans-serif;">May</tspan>
                                       <title>May</title>
                                    </text>
                                    <text id="SvgjsText1633" font-family="Helvetica, Arial, sans-serif" x="167.09891637166336" y="206.93636461830138" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan1634" style="font-family: Helvetica, Arial, sans-serif;">Jun</tspan>
                                       <title>Jun</title>
                                    </text>
                                    <text id="SvgjsText1635" font-family="Helvetica, Arial, sans-serif" x="200.51869964599604" y="206.93636461830138" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan1636" style="font-family: Helvetica, Arial, sans-serif;">July</tspan>
                                       <title>July</title>
                                    </text>
                                 </g>
                                 <line id="SvgjsLine1637" x1="0" y1="178.93636461830138" x2="200.5186996459961" y2="178.93636461830138" stroke="#78909c" stroke-dasharray="0" stroke-width="1"></line>
                              </g>
                              <g id="SvgjsG1650" class="apexcharts-grid">
                                 <line id="SvgjsLine1651" x1="33.41978327433268" y1="178.93636461830138" x2="33.41978327433268" y2="184.93636461830138" stroke="#78909c" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                 <line id="SvgjsLine1652" x1="66.83956654866536" y1="178.93636461830138" x2="66.83956654866536" y2="184.93636461830138" stroke="#78909c" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                 <line id="SvgjsLine1653" x1="100.25934982299805" y1="178.93636461830138" x2="100.25934982299805" y2="184.93636461830138" stroke="#78909c" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                 <line id="SvgjsLine1654" x1="133.67913309733072" y1="178.93636461830138" x2="133.67913309733072" y2="184.93636461830138" stroke="#78909c" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                 <line id="SvgjsLine1655" x1="167.0989163716634" y1="178.93636461830138" x2="167.0989163716634" y2="184.93636461830138" stroke="#78909c" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                 <line id="SvgjsLine1656" x1="0" y1="0" x2="200.5186996459961" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                 <line id="SvgjsLine1657" x1="0" y1="19.770707179811264" x2="200.5186996459961" y2="19.770707179811264" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                 <line id="SvgjsLine1658" x1="0" y1="39.54141435962253" x2="200.5186996459961" y2="39.54141435962253" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                 <line id="SvgjsLine1659" x1="0" y1="59.31212153943379" x2="200.5186996459961" y2="59.31212153943379" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                 <line id="SvgjsLine1660" x1="0" y1="79.08282871924506" x2="200.5186996459961" y2="79.08282871924506" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                 <line id="SvgjsLine1661" x1="0" y1="98.85353589905633" x2="200.5186996459961" y2="98.85353589905633" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                 <line id="SvgjsLine1662" x1="0" y1="118.6242430788676" x2="200.5186996459961" y2="118.6242430788676" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                 <line id="SvgjsLine1663" x1="0" y1="138.39495025867885" x2="200.5186996459961" y2="138.39495025867885" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                 <line id="SvgjsLine1664" x1="0" y1="158.16565743849011" x2="200.5186996459961" y2="158.16565743849011" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                 <line id="SvgjsLine1665" x1="0" y1="177.93636461830138" x2="200.5186996459961" y2="177.93636461830138" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                 <line id="SvgjsLine1667" x1="0" y1="177.93636461830138" x2="200.5186996459961" y2="177.93636461830138" stroke="transparent" stroke-dasharray="0"></line>
                                 <line id="SvgjsLine1666" x1="0" y1="1" x2="0" y2="177.93636461830138" stroke="transparent" stroke-dasharray="0"></line>
                              </g>
                              <g id="SvgjsG1602" class="apexcharts-area-series apexcharts-plot-series">
                                 <g id="SvgjsG1612" class="apexcharts-series series2" data:longestSeries="true" rel="2" data:realIndex="1">
                                    <path id="apexcharts-area-1" d="M 0 156.188586720509C 11.696924146016439 156.188586720509 21.722859128316248 114.67010164290534 33.41978327433269 114.67010164290534C 45.11670742034913 114.67010164290534 55.14264240264893 45.4726265135659 66.83956654866537 45.4726265135659C 78.53649069468182 45.4726265135659 88.5624256769816 114.67010164290534 100.25934982299805 114.67010164290534C 111.95627396901449 114.67010164290534 121.9822089513143 90.94525302713181 133.67913309733075 90.94525302713181C 145.3760572433472 90.94525302713181 155.40199222564698 75.1286872832828 167.09891637166342 75.1286872832828C 178.79584051767986 75.1286872832828 188.82177549997965 96.87646518107519 200.5186996459961 96.87646518107519" fill="none" fill-opacity="1" stroke="#4cc2b0" stroke-opacity="1" stroke-linecap="butt" stroke-width="4" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMask1wduyn1i)" pathTo="M 0 156.188586720509C 11.696924146016439 156.188586720509 21.722859128316248 114.67010164290534 33.41978327433269 114.67010164290534C 45.11670742034913 114.67010164290534 55.14264240264893 45.4726265135659 66.83956654866537 45.4726265135659C 78.53649069468182 45.4726265135659 88.5624256769816 114.67010164290534 100.25934982299805 114.67010164290534C 111.95627396901449 114.67010164290534 121.9822089513143 90.94525302713181 133.67913309733075 90.94525302713181C 145.3760572433472 90.94525302713181 155.40199222564698 75.1286872832828 167.09891637166342 75.1286872832828C 178.79584051767986 75.1286872832828 188.82177549997965 96.87646518107519 200.5186996459961 96.87646518107519" pathFrom="M -1 177.93636461830138L -1 177.93636461830138L 33.41978327433269 177.93636461830138L 66.83956654866537 177.93636461830138L 100.25934982299805 177.93636461830138L 133.67913309733075 177.93636461830138L 167.09891637166342 177.93636461830138L 200.5186996459961 177.93636461830138"></path>
                                    <path id="apexcharts-area-1" d="M 0 177.93636461830138L 0 156.188586720509C 11.696924146016439 156.188586720509 21.722859128316248 114.67010164290534 33.41978327433269 114.67010164290534C 45.11670742034913 114.67010164290534 55.14264240264893 45.4726265135659 66.83956654866537 45.4726265135659C 78.53649069468182 45.4726265135659 88.5624256769816 114.67010164290534 100.25934982299805 114.67010164290534C 111.95627396901449 114.67010164290534 121.9822089513143 90.94525302713181 133.67913309733075 90.94525302713181C 145.3760572433472 90.94525302713181 155.40199222564698 75.1286872832828 167.09891637166342 75.1286872832828C 178.79584051767986 75.1286872832828 188.82177549997965 96.87646518107519 200.5186996459961 96.87646518107519C 200.5186996459961 96.87646518107519 200.5186996459961 96.87646518107519 200.5186996459961 177.93636461830138M 200.5186996459961 96.87646518107519z" fill="url(#SvgjsLinearGradient1616)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMask1wduyn1i)" pathTo="M 0 177.93636461830138L 0 156.188586720509C 11.696924146016439 156.188586720509 21.722859128316248 114.67010164290534 33.41978327433269 114.67010164290534C 45.11670742034913 114.67010164290534 55.14264240264893 45.4726265135659 66.83956654866537 45.4726265135659C 78.53649069468182 45.4726265135659 88.5624256769816 114.67010164290534 100.25934982299805 114.67010164290534C 111.95627396901449 114.67010164290534 121.9822089513143 90.94525302713181 133.67913309733075 90.94525302713181C 145.3760572433472 90.94525302713181 155.40199222564698 75.1286872832828 167.09891637166342 75.1286872832828C 178.79584051767986 75.1286872832828 188.82177549997965 96.87646518107519 200.5186996459961 96.87646518107519C 200.5186996459961 96.87646518107519 200.5186996459961 96.87646518107519 200.5186996459961 177.93636461830138M 200.5186996459961 96.87646518107519z" pathFrom="M -1 177.93636461830138L -1 177.93636461830138L 33.41978327433269 177.93636461830138L 66.83956654866537 177.93636461830138L 100.25934982299805 177.93636461830138L 133.67913309733075 177.93636461830138L 167.09891637166342 177.93636461830138L 200.5186996459961 177.93636461830138"></path>
                                    <g id="SvgjsG1613" class="apexcharts-series-markers-wrap">
                                       <g class="apexcharts-series-markers">
                                          <circle id="SvgjsCircle1673" r="0" cx="0" cy="0" class="apexcharts-marker wfsk3ykqwf no-pointer-events" stroke="#ffffff" fill="#4cc2b0" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                       </g>
                                    </g>
                                    <g id="SvgjsG1614" class="apexcharts-datalabels"></g>
                                 </g>
                                 <g id="SvgjsG1603" class="apexcharts-series series1" data:longestSeries="true" rel="1" data:realIndex="0">
                                    <path id="apexcharts-area-0" d="M 0 116.64717236088646C 11.696924146016439 116.64717236088646 21.722859128316248 98.85353589905631 33.41978327433269 98.85353589905631C 45.11670742034913 98.85353589905631 55.14264240264893 122.57838451482984 66.83956654866537 122.57838451482984C 78.53649069468182 122.57838451482984 88.5624256769816 77.10575800126392 100.25934982299805 77.10575800126392C 111.95627396901449 77.10575800126392 121.9822089513143 134.4408088227166 133.67913309733075 134.4408088227166C 145.3760572433472 134.4408088227166 155.40199222564698 51.40383866750928 167.09891637166342 51.40383866750928C 178.79584051767986 51.40383866750928 188.82177549997965 19.77070717981124 200.5186996459961 19.77070717981124" fill="none" fill-opacity="1" stroke="#999b9c" stroke-opacity="1" stroke-linecap="butt" stroke-width="4" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask1wduyn1i)" pathTo="M 0 116.64717236088646C 11.696924146016439 116.64717236088646 21.722859128316248 98.85353589905631 33.41978327433269 98.85353589905631C 45.11670742034913 98.85353589905631 55.14264240264893 122.57838451482984 66.83956654866537 122.57838451482984C 78.53649069468182 122.57838451482984 88.5624256769816 77.10575800126392 100.25934982299805 77.10575800126392C 111.95627396901449 77.10575800126392 121.9822089513143 134.4408088227166 133.67913309733075 134.4408088227166C 145.3760572433472 134.4408088227166 155.40199222564698 51.40383866750928 167.09891637166342 51.40383866750928C 178.79584051767986 51.40383866750928 188.82177549997965 19.77070717981124 200.5186996459961 19.77070717981124" pathFrom="M -1 177.93636461830138L -1 177.93636461830138L 33.41978327433269 177.93636461830138L 66.83956654866537 177.93636461830138L 100.25934982299805 177.93636461830138L 133.67913309733075 177.93636461830138L 167.09891637166342 177.93636461830138L 200.5186996459961 177.93636461830138"></path>
                                    <path id="apexcharts-area-0" d="M 0 177.93636461830138L 0 116.64717236088646C 11.696924146016439 116.64717236088646 21.722859128316248 98.85353589905631 33.41978327433269 98.85353589905631C 45.11670742034913 98.85353589905631 55.14264240264893 122.57838451482984 66.83956654866537 122.57838451482984C 78.53649069468182 122.57838451482984 88.5624256769816 77.10575800126392 100.25934982299805 77.10575800126392C 111.95627396901449 77.10575800126392 121.9822089513143 134.4408088227166 133.67913309733075 134.4408088227166C 145.3760572433472 134.4408088227166 155.40199222564698 51.40383866750928 167.09891637166342 51.40383866750928C 178.79584051767986 51.40383866750928 188.82177549997965 19.77070717981124 200.5186996459961 19.77070717981124C 200.5186996459961 19.77070717981124 200.5186996459961 19.77070717981124 200.5186996459961 177.93636461830138M 200.5186996459961 19.77070717981124z" fill="url(#SvgjsLinearGradient1607)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask1wduyn1i)" pathTo="M 0 177.93636461830138L 0 116.64717236088646C 11.696924146016439 116.64717236088646 21.722859128316248 98.85353589905631 33.41978327433269 98.85353589905631C 45.11670742034913 98.85353589905631 55.14264240264893 122.57838451482984 66.83956654866537 122.57838451482984C 78.53649069468182 122.57838451482984 88.5624256769816 77.10575800126392 100.25934982299805 77.10575800126392C 111.95627396901449 77.10575800126392 121.9822089513143 134.4408088227166 133.67913309733075 134.4408088227166C 145.3760572433472 134.4408088227166 155.40199222564698 51.40383866750928 167.09891637166342 51.40383866750928C 178.79584051767986 51.40383866750928 188.82177549997965 19.77070717981124 200.5186996459961 19.77070717981124C 200.5186996459961 19.77070717981124 200.5186996459961 19.77070717981124 200.5186996459961 177.93636461830138M 200.5186996459961 19.77070717981124z" pathFrom="M -1 177.93636461830138L -1 177.93636461830138L 33.41978327433269 177.93636461830138L 66.83956654866537 177.93636461830138L 100.25934982299805 177.93636461830138L 133.67913309733075 177.93636461830138L 167.09891637166342 177.93636461830138L 200.5186996459961 177.93636461830138"></path>
                                    <g id="SvgjsG1604" class="apexcharts-series-markers-wrap">
                                       <g class="apexcharts-series-markers">
                                          <circle id="SvgjsCircle1674" r="0" cx="0" cy="0" class="apexcharts-marker w26nasyug no-pointer-events" stroke="#ffffff" fill="#999b9c" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                       </g>
                                    </g>
                                    <g id="SvgjsG1605" class="apexcharts-datalabels"></g>
                                 </g>
                              </g>
                              <line id="SvgjsLine1668" x1="0" y1="0" x2="200.5186996459961" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                              <line id="SvgjsLine1669" x1="0" y1="0" x2="200.5186996459961" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                              <g id="SvgjsG1670" class="apexcharts-yaxis-annotations"></g>
                              <g id="SvgjsG1671" class="apexcharts-xaxis-annotations"></g>
                              <g id="SvgjsG1672" class="apexcharts-point-annotations"></g>
                           </g>
                           <g id="SvgjsG1638" class="apexcharts-yaxis" rel="0" transform="translate(2.4813003540039062, 0)">
                              <g id="SvgjsG1639" class="apexcharts-yaxis-texts-g">
                                 <text id="SvgjsText1640" font-family="Helvetica, Arial, sans-serif" x="20" y="31.9" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">90</text>
                                 <text id="SvgjsText1641" font-family="Helvetica, Arial, sans-serif" x="20" y="51.77070717981126" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">80</text>
                                 <text id="SvgjsText1642" font-family="Helvetica, Arial, sans-serif" x="20" y="71.64141435962253" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">70</text>
                                 <text id="SvgjsText1643" font-family="Helvetica, Arial, sans-serif" x="20" y="91.51212153943379" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">60</text>
                                 <text id="SvgjsText1644" font-family="Helvetica, Arial, sans-serif" x="20" y="111.38282871924505" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">50</text>
                                 <text id="SvgjsText1645" font-family="Helvetica, Arial, sans-serif" x="20" y="131.25353589905632" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">40</text>
                                 <text id="SvgjsText1646" font-family="Helvetica, Arial, sans-serif" x="20" y="151.12424307886758" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">30</text>
                                 <text id="SvgjsText1647" font-family="Helvetica, Arial, sans-serif" x="20" y="170.99495025867884" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">20</text>
                                 <text id="SvgjsText1648" font-family="Helvetica, Arial, sans-serif" x="20" y="190.8656574384901" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">10</text>
                                 <text id="SvgjsText1649" font-family="Helvetica, Arial, sans-serif" x="20" y="210.73636461830137" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">0</text>
                              </g>
                           </g>
                        </svg>
                        <div class="apexcharts-legend"></div>
                        <div class="apexcharts-tooltip light">
                           <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                           <div class="apexcharts-tooltip-series-group">
                              <span class="apexcharts-tooltip-marker" style="background-color: rgb(153, 155, 156);"></span>
                              <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                 <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                 <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                              </div>
                           </div>
                           <div class="apexcharts-tooltip-series-group">
                              <span class="apexcharts-tooltip-marker" style="background-color: rgb(76, 194, 176);"></span>
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
                  <div class="resize-triggers">
                     <div class="expand-trigger">
                        <div style="width: 309px; height: 305px;"></div>
                     </div>
                     <div class="contract-trigger"></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-12 col-lg-4">
            <div class="card">
               <div class="card-header">
                  <h4>Chart</h4>
               </div>
               <div class="card-body">
                  <div class="summary">
                     <div class="summary-chart active" data-tab-group="summary-tab" id="summary-chart" style="position: relative;">
                        <div id="chart3" class="chartsh" style="min-height: 264px;">
                           <div id="apexcharts03p9ar5p" class="apexcharts-canvas apexcharts03p9ar5p" style="width: 258px; height: 250px;">
                              <svg id="SvgjsSvg1680" width="258" height="250" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                                 <g id="SvgjsG1682" class="apexcharts-inner apexcharts-graphical" transform="translate(52.78256416320801, 30)">
                                    <defs id="SvgjsDefs1681">
                                       <clipPath id="gridRectMask03p9ar5p">
                                          <rect id="SvgjsRect1686" width="202.217435836792" height="184.93636461830138" x="-3.5" y="-3.5" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                       </clipPath>
                                       <clipPath id="gridRectMarkerMask03p9ar5p">
                                          <rect id="SvgjsRect1687" width="209.217435836792" height="191.93636461830138" x="-7" y="-7" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                       </clipPath>
                                    </defs>
                                    <rect id="SvgjsRect1685" width="1" height="177.93636461830138" x="0" y="0" rx="0" ry="0" fill="#b1b9c4" opacity="1" stroke-width="0" stroke-dasharray="0" class="apexcharts-xcrosshairs" filter="none" fill-opacity="0.9"></rect>
                                    <g id="SvgjsG1702" class="apexcharts-xaxis" transform="translate(0, 0)">
                                       <g id="SvgjsG1703" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                          <text id="SvgjsText1704" font-family="Helvetica, Arial, sans-serif" x="0" y="206.93636461830138" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                             <tspan id="SvgjsTspan1705" style="font-family: Helvetica, Arial, sans-serif;">Jan</tspan>
                                             <title>Jan</title>
                                          </text>
                                          <text id="SvgjsText1706" font-family="Helvetica, Arial, sans-serif" x="27.888205119541716" y="206.93636461830138" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                             <tspan id="SvgjsTspan1707" style="font-family: Helvetica, Arial, sans-serif;">Feb</tspan>
                                             <title>Feb</title>
                                          </text>
                                          <text id="SvgjsText1708" font-family="Helvetica, Arial, sans-serif" x="55.77641023908343" y="206.93636461830138" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                             <tspan id="SvgjsTspan1709" style="font-family: Helvetica, Arial, sans-serif;">Mar</tspan>
                                             <title>Mar</title>
                                          </text>
                                          <text id="SvgjsText1710" font-family="Helvetica, Arial, sans-serif" x="83.66461535862514" y="206.93636461830138" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                             <tspan id="SvgjsTspan1711" style="font-family: Helvetica, Arial, sans-serif;">Apr</tspan>
                                             <title>Apr</title>
                                          </text>
                                          <text id="SvgjsText1712" font-family="Helvetica, Arial, sans-serif" x="111.55282047816685" y="206.93636461830138" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                             <tspan id="SvgjsTspan1713" style="font-family: Helvetica, Arial, sans-serif;">May</tspan>
                                             <title>May</title>
                                          </text>
                                          <text id="SvgjsText1714" font-family="Helvetica, Arial, sans-serif" x="139.44102559770855" y="206.93636461830138" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                             <tspan id="SvgjsTspan1715" style="font-family: Helvetica, Arial, sans-serif;">Jun</tspan>
                                             <title>Jun</title>
                                          </text>
                                          <text id="SvgjsText1716" font-family="Helvetica, Arial, sans-serif" x="167.32923071725025" y="206.93636461830138" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                             <tspan id="SvgjsTspan1717" style="font-family: Helvetica, Arial, sans-serif;">July</tspan>
                                             <title>July</title>
                                          </text>
                                          <text id="SvgjsText1718" font-family="Helvetica, Arial, sans-serif" x="195.21743583679196" y="206.93636461830138" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                             <tspan id="SvgjsTspan1719" style="font-family: Helvetica, Arial, sans-serif;">Aug</tspan>
                                             <title>Aug</title>
                                          </text>
                                       </g>
                                       <line id="SvgjsLine1720" x1="0" y1="178.93636461830138" x2="195.217435836792" y2="178.93636461830138" stroke="#78909c" stroke-dasharray="0" stroke-width="1"></line>
                                    </g>
                                    <g id="SvgjsG1735" class="apexcharts-grid">
                                       <line id="SvgjsLine1736" x1="27.888205119541713" y1="178.93636461830138" x2="27.888205119541713" y2="184.93636461830138" stroke="#78909c" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                       <line id="SvgjsLine1737" x1="55.776410239083425" y1="178.93636461830138" x2="55.776410239083425" y2="184.93636461830138" stroke="#78909c" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                       <line id="SvgjsLine1738" x1="83.66461535862514" y1="178.93636461830138" x2="83.66461535862514" y2="184.93636461830138" stroke="#78909c" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                       <line id="SvgjsLine1739" x1="111.55282047816685" y1="178.93636461830138" x2="111.55282047816685" y2="184.93636461830138" stroke="#78909c" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                       <line id="SvgjsLine1740" x1="139.44102559770857" y1="178.93636461830138" x2="139.44102559770857" y2="184.93636461830138" stroke="#78909c" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                       <line id="SvgjsLine1741" x1="167.32923071725028" y1="178.93636461830138" x2="167.32923071725028" y2="184.93636461830138" stroke="#78909c" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                       <line id="SvgjsLine1742" x1="0" y1="0" x2="195.217435836792" y2="0" stroke="#f1f1f1" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1743" x1="0" y1="16.176033147118307" x2="195.217435836792" y2="16.176033147118307" stroke="#f1f1f1" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1744" x1="0" y1="32.352066294236614" x2="195.217435836792" y2="32.352066294236614" stroke="#f1f1f1" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1745" x1="0" y1="48.528099441354925" x2="195.217435836792" y2="48.528099441354925" stroke="#f1f1f1" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1746" x1="0" y1="64.70413258847323" x2="195.217435836792" y2="64.70413258847323" stroke="#f1f1f1" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1747" x1="0" y1="80.88016573559153" x2="195.217435836792" y2="80.88016573559153" stroke="#f1f1f1" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1748" x1="0" y1="97.05619888270984" x2="195.217435836792" y2="97.05619888270984" stroke="#f1f1f1" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1749" x1="0" y1="113.23223202982814" x2="195.217435836792" y2="113.23223202982814" stroke="#f1f1f1" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1750" x1="0" y1="129.40826517694646" x2="195.217435836792" y2="129.40826517694646" stroke="#f1f1f1" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1751" x1="0" y1="145.58429832406478" x2="195.217435836792" y2="145.58429832406478" stroke="#f1f1f1" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1752" x1="0" y1="161.7603314711831" x2="195.217435836792" y2="161.7603314711831" stroke="#f1f1f1" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1753" x1="0" y1="177.9363646183014" x2="195.217435836792" y2="177.9363646183014" stroke="#f1f1f1" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                       <line id="SvgjsLine1755" x1="0" y1="177.93636461830138" x2="195.217435836792" y2="177.93636461830138" stroke="transparent" stroke-dasharray="0"></line>
                                       <line id="SvgjsLine1754" x1="0" y1="1" x2="0" y2="177.93636461830138" stroke="transparent" stroke-dasharray="0"></line>
                                    </g>
                                    <g id="SvgjsG1689" class="apexcharts-line-series apexcharts-plot-series">
                                       <g id="SvgjsG1698" class="apexcharts-series Option-3" data:longestSeries="true" rel="3" data:realIndex="2">
                                          <path id="apexcharts-line-2" d="M 0 37.204876238372094L 27.888205119541713 85.73297567972702L 55.776410239083425 58.2337193296259L 83.66461535862513 17.79363646183012L 111.55282047816685 56.61611601491407L 139.44102559770855 116.46743865925181L 167.32923071725025 77.64495910616787L 195.217435836792 101.90900882684534" fill="none" fill-opacity="1" stroke="rgba(254,176,25,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="5" class="apexcharts-line" index="2" clip-path="url(#gridRectMask03p9ar5p)" pathTo="M 0 37.204876238372094L 27.888205119541713 85.73297567972702L 55.776410239083425 58.2337193296259L 83.66461535862513 17.79363646183012L 111.55282047816685 56.61611601491407L 139.44102559770855 116.46743865925181L 167.32923071725025 77.64495910616787L 195.217435836792 101.90900882684534" pathFrom="M -1 177.93636461830138L -1 177.93636461830138L 27.888205119541713 177.93636461830138L 55.776410239083425 177.93636461830138L 83.66461535862513 177.93636461830138L 111.55282047816685 177.93636461830138L 139.44102559770855 177.93636461830138L 167.32923071725025 177.93636461830138L 195.217435836792 177.93636461830138"></path>
                                          <g id="SvgjsG1699" class="apexcharts-series-markers-wrap">
                                             <g class="apexcharts-series-markers">
                                                <circle id="SvgjsCircle1761" r="0" cx="0" cy="0" class="apexcharts-marker w72jzxuej no-pointer-events" stroke="#ffffff" fill="#feb019" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                             </g>
                                          </g>
                                          <g id="SvgjsG1700" class="apexcharts-datalabels"></g>
                                       </g>
                                       <g id="SvgjsG1694" class="apexcharts-series Option-2" data:longestSeries="true" rel="2" data:realIndex="1">
                                          <path id="apexcharts-line-1" d="M 0 121.32024860338731L 27.888205119541713 111.61462871511632L 55.776410239083425 77.64495910616787L 83.66461535862513 109.99702540040448L 111.55282047816685 156.90752152704758L 139.44102559770855 148.81950495348843L 167.32923071725025 131.0258684916583L 195.217435836792 118.08504197396364" fill="none" fill-opacity="1" stroke="rgba(0,227,150,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="7" stroke-dasharray="8" class="apexcharts-line" index="1" clip-path="url(#gridRectMask03p9ar5p)" pathTo="M 0 121.32024860338731L 27.888205119541713 111.61462871511632L 55.776410239083425 77.64495910616787L 83.66461535862513 109.99702540040448L 111.55282047816685 156.90752152704758L 139.44102559770855 148.81950495348843L 167.32923071725025 131.0258684916583L 195.217435836792 118.08504197396364" pathFrom="M -1 177.93636461830138L -1 177.93636461830138L 27.888205119541713 177.93636461830138L 55.776410239083425 177.93636461830138L 83.66461535862513 177.93636461830138L 111.55282047816685 177.93636461830138L 139.44102559770855 177.93636461830138L 167.32923071725025 177.93636461830138L 195.217435836792 177.93636461830138"></path>
                                          <g id="SvgjsG1695" class="apexcharts-series-markers-wrap">
                                             <g class="apexcharts-series-markers">
                                                <circle id="SvgjsCircle1762" r="0" cx="0" cy="0" class="apexcharts-marker wr3o7vkfl no-pointer-events" stroke="#ffffff" fill="#00e396" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                             </g>
                                          </g>
                                          <g id="SvgjsG1696" class="apexcharts-datalabels"></g>
                                       </g>
                                       <g id="SvgjsG1690" class="apexcharts-series Option-1" data:longestSeries="true" rel="1" data:realIndex="0">
                                          <path id="apexcharts-line-0" d="M 0 105.144215456269L 27.888205119541713 93.82099225328618L 55.776410239083425 116.46743865925181L 83.66461535862513 139.11388506521746L 111.55282047816685 124.55545523281097L 139.44102559770855 135.87867843579377L 167.32923071725025 143.96669500935292L 195.217435836792 145.58429832406478" fill="none" fill-opacity="1" stroke="rgba(0,143,251,0.85)" stroke-opacity="1" stroke-linecap="butt" stroke-width="5" stroke-dasharray="0" class="apexcharts-line" index="0" clip-path="url(#gridRectMask03p9ar5p)" pathTo="M 0 105.144215456269L 27.888205119541713 93.82099225328618L 55.776410239083425 116.46743865925181L 83.66461535862513 139.11388506521746L 111.55282047816685 124.55545523281097L 139.44102559770855 135.87867843579377L 167.32923071725025 143.96669500935292L 195.217435836792 145.58429832406478" pathFrom="M -1 177.93636461830138L -1 177.93636461830138L 27.888205119541713 177.93636461830138L 55.776410239083425 177.93636461830138L 83.66461535862513 177.93636461830138L 111.55282047816685 177.93636461830138L 139.44102559770855 177.93636461830138L 167.32923071725025 177.93636461830138L 195.217435836792 177.93636461830138"></path>
                                          <g id="SvgjsG1691" class="apexcharts-series-markers-wrap">
                                             <g class="apexcharts-series-markers">
                                                <circle id="SvgjsCircle1763" r="0" cx="0" cy="0" class="apexcharts-marker wv969bwro no-pointer-events" stroke="#ffffff" fill="#008ffb" fill-opacity="1" stroke-width="2" stroke-opacity="0.9" default-marker-size="0"></circle>
                                             </g>
                                          </g>
                                          <g id="SvgjsG1692" class="apexcharts-datalabels"></g>
                                       </g>
                                    </g>
                                    <line id="SvgjsLine1756" x1="0" y1="0" x2="195.217435836792" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                                    <line id="SvgjsLine1757" x1="0" y1="0" x2="195.217435836792" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                                    <g id="SvgjsG1758" class="apexcharts-yaxis-annotations"></g>
                                    <g id="SvgjsG1759" class="apexcharts-xaxis-annotations"></g>
                                    <g id="SvgjsG1760" class="apexcharts-point-annotations"></g>
                                 </g>
                                 <g id="SvgjsG1721" class="apexcharts-yaxis" rel="0" transform="translate(7.782564163208008, 0)">
                                    <g id="SvgjsG1722" class="apexcharts-yaxis-texts-g">
                                       <text id="SvgjsText1723" font-family="Helvetica, Arial, sans-serif" x="20" y="32.1" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">110</text>
                                       <text id="SvgjsText1724" font-family="Helvetica, Arial, sans-serif" x="20" y="48.376033147118314" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">100</text>
                                       <text id="SvgjsText1725" font-family="Helvetica, Arial, sans-serif" x="20" y="64.65206629423662" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">90</text>
                                       <text id="SvgjsText1726" font-family="Helvetica, Arial, sans-serif" x="20" y="80.92809944135493" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">80</text>
                                       <text id="SvgjsText1727" font-family="Helvetica, Arial, sans-serif" x="20" y="97.20413258847324" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">70</text>
                                       <text id="SvgjsText1728" font-family="Helvetica, Arial, sans-serif" x="20" y="113.48016573559156" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">60</text>
                                       <text id="SvgjsText1729" font-family="Helvetica, Arial, sans-serif" x="20" y="129.75619888270987" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">50</text>
                                       <text id="SvgjsText1730" font-family="Helvetica, Arial, sans-serif" x="20" y="146.03223202982818" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">40</text>
                                       <text id="SvgjsText1731" font-family="Helvetica, Arial, sans-serif" x="20" y="162.3082651769465" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">30</text>
                                       <text id="SvgjsText1732" font-family="Helvetica, Arial, sans-serif" x="20" y="178.5842983240648" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">20</text>
                                       <text id="SvgjsText1733" font-family="Helvetica, Arial, sans-serif" x="20" y="194.86033147118312" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">10</text>
                                       <text id="SvgjsText1734" font-family="Helvetica, Arial, sans-serif" x="20" y="211.13636461830143" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">0</text>
                                    </g>
                                 </g>
                              </svg>
                              <div class="apexcharts-legend"></div>
                              <div class="apexcharts-tooltip light">
                                 <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                                 <div class="apexcharts-tooltip-series-group">
                                    <span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 143, 251);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                       <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                       <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                 </div>
                                 <div class="apexcharts-tooltip-series-group">
                                    <span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 227, 150);"></span>
                                    <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                       <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                       <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                                    </div>
                                 </div>
                                 <div class="apexcharts-tooltip-series-group">
                                    <span class="apexcharts-tooltip-marker" style="background-color: rgb(254, 176, 25);"></span>
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
                        <div class="resize-triggers">
                           <div class="expand-trigger">
                              <div style="width: 259px; height: 265px;"></div>
                           </div>
                           <div class="contract-trigger"></div>
                        </div>
                     </div>
                     <div data-tab-group="summary-tab" id="summary-text">
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-12 col-sm-12 col-lg-4">
            <div class="card">
               <div class="card-header">
                  <h4>Chart</h4>
               </div>
               <div class="card-body" style="position: relative;">
                  <div id="chart2" class="chartsh" style="min-height: 264px;">
                     <div id="apexchartsr14ixhe6" class="apexcharts-canvas apexchartsr14ixhe6 zoomable" style="width: 258px; height: 250px;">
                        <svg id="SvgjsSvg1766" width="258" height="250" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs" class="apexcharts-svg" xmlns:data="ApexChartsNS" transform="translate(0, 0)" style="background: transparent;">
                           <g id="SvgjsG1768" class="apexcharts-inner apexcharts-graphical" transform="translate(53.59896469116211, 30)">
                              <defs id="SvgjsDefs1767">
                                 <linearGradient id="SvgjsLinearGradient1771" x1="0" y1="0" x2="0" y2="1">
                                    <stop id="SvgjsStop1772" stop-opacity="0.4" stop-color="rgba(216,227,240,0.4)" offset="0"></stop>
                                    <stop id="SvgjsStop1773" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                    <stop id="SvgjsStop1774" stop-opacity="0.5" stop-color="rgba(190,209,230,0.5)" offset="1"></stop>
                                 </linearGradient>
                                 <clipPath id="gridRectMaskr14ixhe6">
                                    <rect id="SvgjsRect1783" width="194.4010353088379" height="177.93636461830138" x="0" y="0" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                 </clipPath>
                                 <clipPath id="gridRectMarkerMaskr14ixhe6">
                                    <rect id="SvgjsRect1784" width="202.4010353088379" height="185.93636461830138" x="-4" y="-4" rx="0" ry="0" fill="#ffffff" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0"></rect>
                                 </clipPath>
                              </defs>
                              <rect id="SvgjsRect1775" width="22.085798094258507" height="177.93636461830138" x="0" y="0" rx="0" ry="0" fill="url(#SvgjsLinearGradient1771)" opacity="1" stroke-width="0" stroke-dasharray="0" class="apexcharts-xcrosshairs" filter="none" fill-opacity="0.9"></rect>
                              <g id="SvgjsG1883" class="apexcharts-xaxis" transform="translate(0, 0)">
                                 <g id="SvgjsG1884" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)">
                                    <text id="SvgjsText1885" font-family="Helvetica, Arial, sans-serif" x="13.803623808911567" y="206.93636461830138" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan1886" style="font-family: Helvetica, Arial, sans-serif;">Jan '18</tspan>
                                       <title>Jan '18</title>
                                    </text>
                                    <text id="SvgjsText1887" font-family="Helvetica, Arial, sans-serif" x="80.06101809168709" y="206.93636461830138" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan1888" style="font-family: Helvetica, Arial, sans-serif;">03 Jan</tspan>
                                       <title>03 Jan</title>
                                    </text>
                                    <text id="SvgjsText1889" font-family="Helvetica, Arial, sans-serif" x="146.3184123744626" y="206.93636461830138" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#9aa0ac" class="apexcharts-xaxis-label apexcharts-xaxis-label" style="font-family: Helvetica, Arial, sans-serif;">
                                       <tspan id="SvgjsTspan1890" style="font-family: Helvetica, Arial, sans-serif;">05 Jan</tspan>
                                       <title>05 Jan</title>
                                    </text>
                                 </g>
                                 <line id="SvgjsLine1891" x1="-15" y1="178.93636461830138" x2="194.4010353088379" y2="178.93636461830138" stroke="#78909c" stroke-dasharray="0" stroke-width="1"></line>
                              </g>
                              <g id="SvgjsG1905" class="apexcharts-grid">
                                 <line id="SvgjsLine1906" x1="13.803623808911567" y1="178.93636461830138" x2="13.803623808911567" y2="184.93636461830138" stroke="#78909c" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                 <line id="SvgjsLine1907" x1="80.06101809168709" y1="178.93636461830138" x2="80.06101809168709" y2="184.93636461830138" stroke="#78909c" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                 <line id="SvgjsLine1908" x1="146.3184123744626" y1="178.93636461830138" x2="146.3184123744626" y2="184.93636461830138" stroke="#78909c" stroke-dasharray="0" class="apexcharts-xaxis-tick"></line>
                                 <line id="SvgjsLine1909" x1="0" y1="0" x2="194.4010353088379" y2="0" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                 <line id="SvgjsLine1910" x1="0" y1="17.79363646183014" x2="194.4010353088379" y2="17.79363646183014" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                 <line id="SvgjsLine1911" x1="0" y1="35.58727292366028" x2="194.4010353088379" y2="35.58727292366028" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                 <line id="SvgjsLine1912" x1="0" y1="53.38090938549042" x2="194.4010353088379" y2="53.38090938549042" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                 <line id="SvgjsLine1913" x1="0" y1="71.17454584732056" x2="194.4010353088379" y2="71.17454584732056" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                 <line id="SvgjsLine1914" x1="0" y1="88.9681823091507" x2="194.4010353088379" y2="88.9681823091507" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                 <line id="SvgjsLine1915" x1="0" y1="106.76181877098085" x2="194.4010353088379" y2="106.76181877098085" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                 <line id="SvgjsLine1916" x1="0" y1="124.555455232811" x2="194.4010353088379" y2="124.555455232811" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                 <line id="SvgjsLine1917" x1="0" y1="142.34909169464115" x2="194.4010353088379" y2="142.34909169464115" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                 <line id="SvgjsLine1918" x1="0" y1="160.1427281564713" x2="194.4010353088379" y2="160.1427281564713" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                 <line id="SvgjsLine1919" x1="0" y1="177.93636461830144" x2="194.4010353088379" y2="177.93636461830144" stroke="#e0e0e0" stroke-dasharray="0" class="apexcharts-gridline"></line>
                                 <line id="SvgjsLine1921" x1="0" y1="177.93636461830138" x2="194.4010353088379" y2="177.93636461830138" stroke="transparent" stroke-dasharray="0"></line>
                                 <line id="SvgjsLine1920" x1="0" y1="1" x2="0" y2="177.93636461830138" stroke="transparent" stroke-dasharray="0"></line>
                              </g>
                              <g id="SvgjsG1786" class="apexcharts-bar-series apexcharts-plot-series" clip-path="url(#gridRectMaskr14ixhe6)">
                                 <g id="SvgjsG1787" class="apexcharts-series PRODUCT-A" rel="1" data:realIndex="0">
                                    <path id="apexcharts-bar-area-0" d="M 2.7607247617823134 176.93636461830138L 2.7607247617823134 98.64436418624878L 24.84652285604082 98.64436418624878L 24.84652285604082 176.93636461830138L 2.7607247617823134 176.93636461830138" fill="rgba(0,143,251,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskr14ixhe6)" pathTo="M 2.7607247617823134 176.93636461830138L 2.7607247617823134 98.64436418624878L 24.84652285604082 98.64436418624878L 24.84652285604082 176.93636461830138L 2.7607247617823134 176.93636461830138" pathFrom="M 2.7607247617823134 176.93636461830138L 2.7607247617823134 176.93636461830138L 24.84652285604082 176.93636461830138L 24.84652285604082 176.93636461830138L 24.84652285604082 176.93636461830138L 2.7607247617823134 176.93636461830138" cy="98.64436418624878" cx="24.84652285604082" j="0" val="44" barWidth="22.085798094258507"></path>
                                    <path id="apexcharts-bar-area-0" d="M 35.889421903170074 176.93636461830138L 35.889421903170074 79.07136407823562L 57.97521999742858 79.07136407823562L 57.97521999742858 176.93636461830138L 35.889421903170074 176.93636461830138" fill="rgba(0,143,251,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskr14ixhe6)" pathTo="M 35.889421903170074 176.93636461830138L 35.889421903170074 79.07136407823562L 57.97521999742858 79.07136407823562L 57.97521999742858 176.93636461830138L 35.889421903170074 176.93636461830138" pathFrom="M 35.889421903170074 176.93636461830138L 35.889421903170074 176.93636461830138L 57.97521999742858 176.93636461830138L 57.97521999742858 176.93636461830138L 57.97521999742858 176.93636461830138L 35.889421903170074 176.93636461830138" cy="79.07136407823562" cx="57.97521999742858" j="1" val="55" barWidth="22.085798094258507"></path>
                                    <path id="apexcharts-bar-area-0" d="M 69.01811904455784 176.93636461830138L 69.01811904455784 103.98245512479782L 91.10391713881634 103.98245512479782L 91.10391713881634 176.93636461830138L 69.01811904455784 176.93636461830138" fill="rgba(0,143,251,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskr14ixhe6)" pathTo="M 69.01811904455784 176.93636461830138L 69.01811904455784 103.98245512479782L 91.10391713881634 103.98245512479782L 91.10391713881634 176.93636461830138L 69.01811904455784 176.93636461830138" pathFrom="M 69.01811904455784 176.93636461830138L 69.01811904455784 176.93636461830138L 91.10391713881634 176.93636461830138L 91.10391713881634 176.93636461830138L 91.10391713881634 176.93636461830138L 69.01811904455784 176.93636461830138" cy="103.98245512479782" cx="91.10391713881634" j="2" val="41" barWidth="22.085798094258507"></path>
                                    <path id="apexcharts-bar-area-0" d="M 102.1468161859456 176.93636461830138L 102.1468161859456 57.719000324039456L 124.2326142802041 57.719000324039456L 124.2326142802041 176.93636461830138L 102.1468161859456 176.93636461830138" fill="rgba(0,143,251,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskr14ixhe6)" pathTo="M 102.1468161859456 176.93636461830138L 102.1468161859456 57.719000324039456L 124.2326142802041 57.719000324039456L 124.2326142802041 176.93636461830138L 102.1468161859456 176.93636461830138" pathFrom="M 102.1468161859456 176.93636461830138L 102.1468161859456 176.93636461830138L 124.2326142802041 176.93636461830138L 124.2326142802041 176.93636461830138L 124.2326142802041 176.93636461830138L 102.1468161859456 176.93636461830138" cy="57.719000324039456" cx="124.2326142802041" j="3" val="67" barWidth="22.085798094258507"></path>
                                    <path id="apexcharts-bar-area-0" d="M 135.27551332733336 176.93636461830138L 135.27551332733336 137.7903644022751L 157.36131142159186 137.7903644022751L 157.36131142159186 176.93636461830138L 135.27551332733336 176.93636461830138" fill="rgba(0,143,251,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskr14ixhe6)" pathTo="M 135.27551332733336 176.93636461830138L 135.27551332733336 137.7903644022751L 157.36131142159186 137.7903644022751L 157.36131142159186 176.93636461830138L 135.27551332733336 176.93636461830138" pathFrom="M 135.27551332733336 176.93636461830138L 135.27551332733336 176.93636461830138L 157.36131142159186 176.93636461830138L 157.36131142159186 176.93636461830138L 157.36131142159186 176.93636461830138L 135.27551332733336 176.93636461830138" cy="137.7903644022751" cx="157.36131142159186" j="4" val="22" barWidth="22.085798094258507"></path>
                                    <path id="apexcharts-bar-area-0" d="M 168.40421046872112 176.93636461830138L 168.40421046872112 100.4237278324318L 190.49000856297963 100.4237278324318L 190.49000856297963 176.93636461830138L 168.40421046872112 176.93636461830138" fill="rgba(0,143,251,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="0" clip-path="url(#gridRectMaskr14ixhe6)" pathTo="M 168.40421046872112 176.93636461830138L 168.40421046872112 100.4237278324318L 190.49000856297963 100.4237278324318L 190.49000856297963 176.93636461830138L 168.40421046872112 176.93636461830138" pathFrom="M 168.40421046872112 176.93636461830138L 168.40421046872112 176.93636461830138L 190.49000856297963 176.93636461830138L 190.49000856297963 176.93636461830138L 190.49000856297963 176.93636461830138L 168.40421046872112 176.93636461830138" cy="100.4237278324318" cx="190.49000856297963" j="5" val="43" barWidth="22.085798094258507"></path>
                                    <g id="SvgjsG1788" class="apexcharts-datalabels">
                                       <g id="SvgjsG1791" class="apexcharts-data-labels">
                                          <text id="SvgjsText1793" font-family="Helvetica, Arial, sans-serif" x="13.803623808911567" y="144.60854591701508" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#ffffff" class="apexcharts-datalabel" cx="13.803623808911567" cy="144.60854591701508" style="font-family: Helvetica, Arial, sans-serif;">44</text>
                                       </g>
                                       <g id="SvgjsG1796" class="apexcharts-data-labels">
                                          <text id="SvgjsText1798" font-family="Helvetica, Arial, sans-serif" x="46.93232095029933" y="134.8220458630085" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#ffffff" class="apexcharts-datalabel" cx="46.93232095029933" cy="134.8220458630085" style="font-family: Helvetica, Arial, sans-serif;">55</text>
                                       </g>
                                       <g id="SvgjsG1801" class="apexcharts-data-labels">
                                          <text id="SvgjsText1803" font-family="Helvetica, Arial, sans-serif" x="80.06101809168709" y="147.2775913862896" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#ffffff" class="apexcharts-datalabel" cx="80.06101809168709" cy="147.2775913862896" style="font-family: Helvetica, Arial, sans-serif;">41</text>
                                       </g>
                                       <g id="SvgjsG1806" class="apexcharts-data-labels">
                                          <text id="SvgjsText1808" font-family="Helvetica, Arial, sans-serif" x="113.18971523307485" y="124.14586398591041" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#ffffff" class="apexcharts-datalabel" cx="113.18971523307485" cy="124.14586398591041" style="font-family: Helvetica, Arial, sans-serif;">67</text>
                                       </g>
                                       <g id="SvgjsG1811" class="apexcharts-data-labels">
                                          <text id="SvgjsText1813" font-family="Helvetica, Arial, sans-serif" x="146.3184123744626" y="164.18154602502824" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#ffffff" class="apexcharts-datalabel" cx="146.3184123744626" cy="164.18154602502824" style="font-family: Helvetica, Arial, sans-serif;">22</text>
                                       </g>
                                       <g id="SvgjsG1816" class="apexcharts-data-labels">
                                          <text id="SvgjsText1818" font-family="Helvetica, Arial, sans-serif" x="179.44710951585037" y="145.49822774010659" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#ffffff" class="apexcharts-datalabel" cx="179.44710951585037" cy="145.49822774010659" style="font-family: Helvetica, Arial, sans-serif;">43</text>
                                       </g>
                                    </g>
                                 </g>
                                 <g id="SvgjsG1819" class="apexcharts-series PRODUCT-B" rel="2" data:realIndex="1">
                                    <path id="apexcharts-bar-area-1" d="M 2.7607247617823134 98.64436418624878L 2.7607247617823134 75.5126367858696L 24.84652285604082 75.5126367858696L 24.84652285604082 98.64436418624878L 2.7607247617823134 98.64436418624878" fill="rgba(0,227,150,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskr14ixhe6)" pathTo="M 2.7607247617823134 98.64436418624878L 2.7607247617823134 75.5126367858696L 24.84652285604082 75.5126367858696L 24.84652285604082 98.64436418624878L 2.7607247617823134 98.64436418624878" pathFrom="M 2.7607247617823134 98.64436418624878L 2.7607247617823134 98.64436418624878L 24.84652285604082 98.64436418624878L 24.84652285604082 98.64436418624878L 24.84652285604082 98.64436418624878L 2.7607247617823134 98.64436418624878" cy="75.5126367858696" cx="24.84652285604082" j="0" val="13" barWidth="22.085798094258507"></path>
                                    <path id="apexcharts-bar-area-1" d="M 35.889421903170074 79.07136407823562L 35.889421903170074 38.1460002160263L 57.97521999742858 38.1460002160263L 57.97521999742858 79.07136407823562L 35.889421903170074 79.07136407823562" fill="rgba(0,227,150,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskr14ixhe6)" pathTo="M 35.889421903170074 79.07136407823562L 35.889421903170074 38.1460002160263L 57.97521999742858 38.1460002160263L 57.97521999742858 79.07136407823562L 35.889421903170074 79.07136407823562" pathFrom="M 35.889421903170074 79.07136407823562L 35.889421903170074 79.07136407823562L 57.97521999742858 79.07136407823562L 57.97521999742858 79.07136407823562L 57.97521999742858 79.07136407823562L 35.889421903170074 79.07136407823562" cy="38.1460002160263" cx="57.97521999742858" j="1" val="23" barWidth="22.085798094258507"></path>
                                    <path id="apexcharts-bar-area-1" d="M 69.01811904455784 103.98245512479782L 69.01811904455784 68.39518220113754L 91.10391713881634 68.39518220113754L 91.10391713881634 103.98245512479782L 69.01811904455784 103.98245512479782" fill="rgba(0,227,150,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskr14ixhe6)" pathTo="M 69.01811904455784 103.98245512479782L 69.01811904455784 68.39518220113754L 91.10391713881634 68.39518220113754L 91.10391713881634 103.98245512479782L 69.01811904455784 103.98245512479782" pathFrom="M 69.01811904455784 103.98245512479782L 69.01811904455784 103.98245512479782L 91.10391713881634 103.98245512479782L 91.10391713881634 103.98245512479782L 91.10391713881634 103.98245512479782L 69.01811904455784 103.98245512479782" cy="68.39518220113754" cx="91.10391713881634" j="2" val="20" barWidth="22.085798094258507"></path>
                                    <path id="apexcharts-bar-area-1" d="M 102.1468161859456 57.719000324039456L 102.1468161859456 43.484091154575346L 124.2326142802041 43.484091154575346L 124.2326142802041 57.719000324039456L 102.1468161859456 57.719000324039456" fill="rgba(0,227,150,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskr14ixhe6)" pathTo="M 102.1468161859456 57.719000324039456L 102.1468161859456 43.484091154575346L 124.2326142802041 43.484091154575346L 124.2326142802041 57.719000324039456L 102.1468161859456 57.719000324039456" pathFrom="M 102.1468161859456 57.719000324039456L 102.1468161859456 57.719000324039456L 124.2326142802041 57.719000324039456L 124.2326142802041 57.719000324039456L 124.2326142802041 57.719000324039456L 102.1468161859456 57.719000324039456" cy="43.484091154575346" cx="124.2326142802041" j="3" val="8" barWidth="22.085798094258507"></path>
                                    <path id="apexcharts-bar-area-1" d="M 135.27551332733336 137.7903644022751L 135.27551332733336 114.65863700189591L 157.36131142159186 114.65863700189591L 157.36131142159186 137.7903644022751L 135.27551332733336 137.7903644022751" fill="rgba(0,227,150,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskr14ixhe6)" pathTo="M 135.27551332733336 137.7903644022751L 135.27551332733336 114.65863700189591L 157.36131142159186 114.65863700189591L 157.36131142159186 137.7903644022751L 135.27551332733336 137.7903644022751" pathFrom="M 135.27551332733336 137.7903644022751L 135.27551332733336 137.7903644022751L 157.36131142159186 137.7903644022751L 157.36131142159186 137.7903644022751L 157.36131142159186 137.7903644022751L 135.27551332733336 137.7903644022751" cy="114.65863700189591" cx="157.36131142159186" j="4" val="13" barWidth="22.085798094258507"></path>
                                    <path id="apexcharts-bar-area-1" d="M 168.40421046872112 100.4237278324318L 168.40421046872112 52.38090938549042L 190.49000856297963 52.38090938549042L 190.49000856297963 100.4237278324318L 168.40421046872112 100.4237278324318" fill="rgba(0,227,150,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="1" clip-path="url(#gridRectMaskr14ixhe6)" pathTo="M 168.40421046872112 100.4237278324318L 168.40421046872112 52.38090938549042L 190.49000856297963 52.38090938549042L 190.49000856297963 100.4237278324318L 168.40421046872112 100.4237278324318" pathFrom="M 168.40421046872112 100.4237278324318L 168.40421046872112 100.4237278324318L 190.49000856297963 100.4237278324318L 190.49000856297963 100.4237278324318L 190.49000856297963 100.4237278324318L 168.40421046872112 100.4237278324318" cy="52.38090938549042" cx="190.49000856297963" j="5" val="27" barWidth="22.085798094258507"></path>
                                    <g id="SvgjsG1820" class="apexcharts-datalabels">
                                       <g id="SvgjsG1823" class="apexcharts-data-labels">
                                          <text id="SvgjsText1825" font-family="Helvetica, Arial, sans-serif" x="13.803623808911567" y="93.89668200079919" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#ffffff" class="apexcharts-datalabel" cx="13.803623808911567" cy="93.89668200079919" style="font-family: Helvetica, Arial, sans-serif;">13</text>
                                       </g>
                                       <g id="SvgjsG1828" class="apexcharts-data-labels">
                                          <text id="SvgjsText1830" font-family="Helvetica, Arial, sans-serif" x="46.93232095029933" y="65.42686366187095" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#ffffff" class="apexcharts-datalabel" cx="46.93232095029933" cy="65.42686366187095" style="font-family: Helvetica, Arial, sans-serif;">23</text>
                                       </g>
                                       <g id="SvgjsG1833" class="apexcharts-data-labels">
                                          <text id="SvgjsText1835" font-family="Helvetica, Arial, sans-serif" x="80.06101809168709" y="93.00700017770767" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#ffffff" class="apexcharts-datalabel" cx="80.06101809168709" cy="93.00700017770767" style="font-family: Helvetica, Arial, sans-serif;">20</text>
                                       </g>
                                       <g id="SvgjsG1838" class="apexcharts-data-labels">
                                          <text id="SvgjsText1840" font-family="Helvetica, Arial, sans-serif" x="113.18971523307485" y="57.41972725404739" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#ffffff" class="apexcharts-datalabel" cx="113.18971523307485" cy="57.41972725404739" style="font-family: Helvetica, Arial, sans-serif;">8</text>
                                       </g>
                                       <g id="SvgjsG1843" class="apexcharts-data-labels">
                                          <text id="SvgjsText1845" font-family="Helvetica, Arial, sans-serif" x="146.3184123744626" y="133.04268221682548" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#ffffff" class="apexcharts-datalabel" cx="146.3184123744626" cy="133.04268221682548" style="font-family: Helvetica, Arial, sans-serif;">13</text>
                                       </g>
                                       <g id="SvgjsG1848" class="apexcharts-data-labels">
                                          <text id="SvgjsText1850" font-family="Helvetica, Arial, sans-serif" x="179.44710951585037" y="83.2205001237011" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#ffffff" class="apexcharts-datalabel" cx="179.44710951585037" cy="83.2205001237011" style="font-family: Helvetica, Arial, sans-serif;">27</text>
                                       </g>
                                    </g>
                                 </g>
                                 <g id="SvgjsG1851" class="apexcharts-series PRODUCT-C" rel="3" data:realIndex="2">
                                    <path id="apexcharts-bar-area-2" d="M 2.7607247617823134 75.5126367858696L 2.7607247617823134 55.939636677856456L 24.84652285604082 55.939636677856456L 24.84652285604082 75.5126367858696L 2.7607247617823134 75.5126367858696" fill="rgba(254,176,25,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskr14ixhe6)" pathTo="M 2.7607247617823134 75.5126367858696L 2.7607247617823134 55.939636677856456L 24.84652285604082 55.939636677856456L 24.84652285604082 75.5126367858696L 2.7607247617823134 75.5126367858696" pathFrom="M 2.7607247617823134 75.5126367858696L 2.7607247617823134 75.5126367858696L 24.84652285604082 75.5126367858696L 24.84652285604082 75.5126367858696L 24.84652285604082 75.5126367858696L 2.7607247617823134 75.5126367858696" cy="55.939636677856456" cx="24.84652285604082" j="0" val="11" barWidth="22.085798094258507"></path>
                                    <path id="apexcharts-bar-area-2" d="M 35.889421903170074 38.1460002160263L 35.889421903170074 7.896818230915066L 57.97521999742858 7.896818230915066L 57.97521999742858 38.1460002160263L 35.889421903170074 38.1460002160263" fill="rgba(254,176,25,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskr14ixhe6)" pathTo="M 35.889421903170074 38.1460002160263L 35.889421903170074 7.896818230915066L 57.97521999742858 7.896818230915066L 57.97521999742858 38.1460002160263L 35.889421903170074 38.1460002160263" pathFrom="M 35.889421903170074 38.1460002160263L 35.889421903170074 38.1460002160263L 57.97521999742858 38.1460002160263L 57.97521999742858 38.1460002160263L 57.97521999742858 38.1460002160263L 35.889421903170074 38.1460002160263" cy="7.896818230915066" cx="57.97521999742858" j="1" val="17" barWidth="22.085798094258507"></path>
                                    <path id="apexcharts-bar-area-2" d="M 69.01811904455784 68.39518220113754L 69.01811904455784 41.70472750839234L 91.10391713881634 41.70472750839234L 91.10391713881634 68.39518220113754L 69.01811904455784 68.39518220113754" fill="rgba(254,176,25,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskr14ixhe6)" pathTo="M 69.01811904455784 68.39518220113754L 69.01811904455784 41.70472750839234L 91.10391713881634 41.70472750839234L 91.10391713881634 68.39518220113754L 69.01811904455784 68.39518220113754" pathFrom="M 69.01811904455784 68.39518220113754L 69.01811904455784 68.39518220113754L 91.10391713881634 68.39518220113754L 91.10391713881634 68.39518220113754L 91.10391713881634 68.39518220113754L 69.01811904455784 68.39518220113754" cy="41.70472750839234" cx="91.10391713881634" j="2" val="15" barWidth="22.085798094258507"></path>
                                    <path id="apexcharts-bar-area-2" d="M 102.1468161859456 43.484091154575346L 102.1468161859456 16.79363646183014L 124.2326142802041 16.79363646183014L 124.2326142802041 43.484091154575346L 102.1468161859456 43.484091154575346" fill="rgba(254,176,25,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskr14ixhe6)" pathTo="M 102.1468161859456 43.484091154575346L 102.1468161859456 16.79363646183014L 124.2326142802041 16.79363646183014L 124.2326142802041 43.484091154575346L 102.1468161859456 43.484091154575346" pathFrom="M 102.1468161859456 43.484091154575346L 102.1468161859456 43.484091154575346L 124.2326142802041 43.484091154575346L 124.2326142802041 43.484091154575346L 124.2326142802041 43.484091154575346L 102.1468161859456 43.484091154575346" cy="16.79363646183014" cx="124.2326142802041" j="3" val="15" barWidth="22.085798094258507"></path>
                                    <path id="apexcharts-bar-area-2" d="M 135.27551332733336 114.65863700189591L 135.27551332733336 77.29200043205262L 157.36131142159186 77.29200043205262L 157.36131142159186 114.65863700189591L 135.27551332733336 114.65863700189591" fill="rgba(254,176,25,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskr14ixhe6)" pathTo="M 135.27551332733336 114.65863700189591L 135.27551332733336 77.29200043205262L 157.36131142159186 77.29200043205262L 157.36131142159186 114.65863700189591L 135.27551332733336 114.65863700189591" pathFrom="M 135.27551332733336 114.65863700189591L 135.27551332733336 114.65863700189591L 157.36131142159186 114.65863700189591L 157.36131142159186 114.65863700189591L 157.36131142159186 114.65863700189591L 135.27551332733336 114.65863700189591" cy="77.29200043205262" cx="157.36131142159186" j="4" val="21" barWidth="22.085798094258507"></path>
                                    <path id="apexcharts-bar-area-2" d="M 168.40421046872112 52.38090938549042L 168.40421046872112 27.469818338928228L 190.49000856297963 27.469818338928228L 190.49000856297963 52.38090938549042L 168.40421046872112 52.38090938549042" fill="rgba(254,176,25,1)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-bar-area" index="2" clip-path="url(#gridRectMaskr14ixhe6)" pathTo="M 168.40421046872112 52.38090938549042L 168.40421046872112 27.469818338928228L 190.49000856297963 27.469818338928228L 190.49000856297963 52.38090938549042L 168.40421046872112 52.38090938549042" pathFrom="M 168.40421046872112 52.38090938549042L 168.40421046872112 52.38090938549042L 190.49000856297963 52.38090938549042L 190.49000856297963 52.38090938549042L 190.49000856297963 52.38090938549042L 168.40421046872112 52.38090938549042" cy="27.469818338928228" cx="190.49000856297963" j="5" val="14" barWidth="22.085798094258507"></path>
                                    <g id="SvgjsG1852" class="apexcharts-datalabels">
                                       <g id="SvgjsG1855" class="apexcharts-data-labels">
                                          <text id="SvgjsText1857" font-family="Helvetica, Arial, sans-serif" x="13.803623808911567" y="72.54431824660303" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#ffffff" class="apexcharts-datalabel" cx="13.803623808911567" cy="72.54431824660303" style="font-family: Helvetica, Arial, sans-serif;">11</text>
                                       </g>
                                       <g id="SvgjsG1860" class="apexcharts-data-labels">
                                          <text id="SvgjsText1862" font-family="Helvetica, Arial, sans-serif" x="46.93232095029933" y="29.839590738210674" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#ffffff" class="apexcharts-datalabel" cx="46.93232095029933" cy="29.839590738210674" style="font-family: Helvetica, Arial, sans-serif;">17</text>
                                       </g>
                                       <g id="SvgjsG1865" class="apexcharts-data-labels">
                                          <text id="SvgjsText1867" font-family="Helvetica, Arial, sans-serif" x="80.06101809168709" y="61.86813636950493" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#ffffff" class="apexcharts-datalabel" cx="80.06101809168709" cy="61.86813636950493" style="font-family: Helvetica, Arial, sans-serif;">15</text>
                                       </g>
                                       <g id="SvgjsG1870" class="apexcharts-data-labels">
                                          <text id="SvgjsText1872" font-family="Helvetica, Arial, sans-serif" x="113.18971523307485" y="36.95704532294273" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#ffffff" class="apexcharts-datalabel" cx="113.18971523307485" cy="36.95704532294273" style="font-family: Helvetica, Arial, sans-serif;">15</text>
                                       </g>
                                       <g id="SvgjsG1875" class="apexcharts-data-labels">
                                          <text id="SvgjsText1877" font-family="Helvetica, Arial, sans-serif" x="146.3184123744626" y="102.79350023171425" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#ffffff" class="apexcharts-datalabel" cx="146.3184123744626" cy="102.79350023171425" style="font-family: Helvetica, Arial, sans-serif;">21</text>
                                       </g>
                                       <g id="SvgjsG1880" class="apexcharts-data-labels">
                                          <text id="SvgjsText1882" font-family="Helvetica, Arial, sans-serif" x="179.44710951585037" y="46.743545376949314" text-anchor="middle" dominate-baseline="central" font-size="12px" fill="#ffffff" class="apexcharts-datalabel" cx="179.44710951585037" cy="46.743545376949314" style="font-family: Helvetica, Arial, sans-serif;">14</text>
                                       </g>
                                    </g>
                                 </g>
                              </g>
                              <line id="SvgjsLine1922" x1="0" y1="0" x2="194.4010353088379" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" class="apexcharts-ycrosshairs"></line>
                              <line id="SvgjsLine1923" x1="0" y1="0" x2="194.4010353088379" y2="0" stroke-dasharray="0" stroke-width="0" class="apexcharts-ycrosshairs-hidden"></line>
                              <g id="SvgjsG1924" class="apexcharts-yaxis-annotations"></g>
                              <g id="SvgjsG1925" class="apexcharts-xaxis-annotations"></g>
                              <g id="SvgjsG1926" class="apexcharts-point-annotations"></g>
                              <rect id="SvgjsRect1927" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" class="apexcharts-zoom-rect"></rect>
                              <rect id="SvgjsRect1928" width="0" height="0" x="0" y="0" rx="0" ry="0" fill="#fefefe" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" class="apexcharts-selection-rect"></rect>
                           </g>
                           <g id="SvgjsG1892" class="apexcharts-yaxis" rel="0" transform="translate(8.59896469116211, 0)">
                              <g id="SvgjsG1893" class="apexcharts-yaxis-texts-g">
                                 <text id="SvgjsText1894" font-family="Helvetica, Arial, sans-serif" x="20" y="32" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">100</text>
                                 <text id="SvgjsText1895" font-family="Helvetica, Arial, sans-serif" x="20" y="49.89363646183014" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">90</text>
                                 <text id="SvgjsText1896" font-family="Helvetica, Arial, sans-serif" x="20" y="67.78727292366028" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">80</text>
                                 <text id="SvgjsText1897" font-family="Helvetica, Arial, sans-serif" x="20" y="85.68090938549042" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">70</text>
                                 <text id="SvgjsText1898" font-family="Helvetica, Arial, sans-serif" x="20" y="103.57454584732056" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">60</text>
                                 <text id="SvgjsText1899" font-family="Helvetica, Arial, sans-serif" x="20" y="121.4681823091507" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">50</text>
                                 <text id="SvgjsText1900" font-family="Helvetica, Arial, sans-serif" x="20" y="139.36181877098085" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">40</text>
                                 <text id="SvgjsText1901" font-family="Helvetica, Arial, sans-serif" x="20" y="157.255455232811" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">30</text>
                                 <text id="SvgjsText1902" font-family="Helvetica, Arial, sans-serif" x="20" y="175.14909169464113" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">20</text>
                                 <text id="SvgjsText1903" font-family="Helvetica, Arial, sans-serif" x="20" y="193.04272815647127" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">10</text>
                                 <text id="SvgjsText1904" font-family="Helvetica, Arial, sans-serif" x="20" y="210.9363646183014" text-anchor="end" dominate-baseline="central" font-size="11px" fill="#9aa0ac" class="apexcharts-yaxis-label apexcharts-yaxis-label" style="font-family: Helvetica, Arial, sans-serif;">0</text>
                              </g>
                           </g>
                        </svg>
                        <div class="apexcharts-legend"></div>
                        <div class="apexcharts-tooltip light">
                           <div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div>
                           <div class="apexcharts-tooltip-series-group">
                              <span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 143, 251);"></span>
                              <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                 <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                 <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                              </div>
                           </div>
                           <div class="apexcharts-tooltip-series-group">
                              <span class="apexcharts-tooltip-marker" style="background-color: rgb(0, 227, 150);"></span>
                              <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                 <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                 <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                              </div>
                           </div>
                           <div class="apexcharts-tooltip-series-group">
                              <span class="apexcharts-tooltip-marker" style="background-color: rgb(254, 176, 25);"></span>
                              <div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;">
                                 <div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-label"></span><span class="apexcharts-tooltip-text-value"></span></div>
                                 <div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="resize-triggers">
                     <div class="expand-trigger">
                        <div style="width: 309px; height: 305px;"></div>
                     </div>
                     <div class="contract-trigger"></div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-12">
            <div class="card">
               <div class="card-header">
                  <h4>Assign Task Table</h4>
                  <div class="card-header-form">
                     <form>
                        <div class="input-group">
                           <input type="text" class="form-control" placeholder="Search">
                           <div class="input-group-btn">
                              <button class="btn btn-primary"><i class="fas fa-search"></i></button>
                           </div>
                        </div>
                     </form>
                  </div>
               </div>
               <div class="card-body p-0">
                  <div class="table-responsive">
                     <table class="table table-striped">
                        <tbody>
                           <tr>
                              <th class="text-center">
                                 <div class="custom-checkbox custom-checkbox-table custom-control">
                                    <input type="checkbox" data-checkboxes="mygroup" data-checkbox-role="dad" class="custom-control-input" id="checkbox-all">
                                    <label for="checkbox-all" class="custom-control-label">&nbsp;</label>
                                 </div>
                              </th>
                              <th>Task Name</th>
                              <th>Members</th>
                              <th>Task Status</th>
                              <th>Assigh Date</th>
                              <th>Due Date</th>
                              <th>Priority</th>
                              <th>Action</th>
                           </tr>
                           <tr>
                              <td class="p-0 text-center">
                                 <div class="custom-checkbox custom-control">
                                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-1">
                                    <label for="checkbox-1" class="custom-control-label">&nbsp;</label>
                                 </div>
                              </td>
                              <td>Create a mobile app</td>
                              <td class="text-truncate">
                                 <ul class="list-unstyled order-list m-b-0 m-b-0">
                                    <li class="team-member team-member-sm"><img class="rounded-circle" src="assets/img/users/user-8.png" alt="user" data-toggle="tooltip" title="" data-original-title="Wildan Ahdian"></li>
                                    <li class="team-member team-member-sm"><img class="rounded-circle" src="assets/img/users/user-9.png" alt="user" data-toggle="tooltip" title="" data-original-title="John Deo"></li>
                                    <li class="team-member team-member-sm"><img class="rounded-circle" src="assets/img/users/user-10.png" alt="user" data-toggle="tooltip" title="" data-original-title="Sarah Smith"></li>
                                    <li class="avatar avatar-sm"><span class="badge badge-primary">+4</span></li>
                                 </ul>
                              </td>
                              <td class="align-middle">
                                 <div class="progress-text">50%</div>
                                 <div class="progress" data-height="6" style="height: 6px;">
                                    <div class="progress-bar bg-success" data-width="50%" style="width: 50%;"></div>
                                 </div>
                              </td>
                              <td>2018-01-20</td>
                              <td>2019-05-28</td>
                              <td>
                                 <div class="badge badge-success">Low</div>
                              </td>
                              <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                           </tr>
                           <tr>
                              <td class="p-0 text-center">
                                 <div class="custom-checkbox custom-control">
                                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-2">
                                    <label for="checkbox-2" class="custom-control-label">&nbsp;</label>
                                 </div>
                              </td>
                              <td>Redesign homepage</td>
                              <td class="text-truncate">
                                 <ul class="list-unstyled order-list m-b-0 m-b-0">
                                    <li class="team-member team-member-sm"><img class="rounded-circle" src="assets/img/users/user-1.png" alt="user" data-toggle="tooltip" title="" data-original-title="Wildan Ahdian"></li>
                                    <li class="team-member team-member-sm"><img class="rounded-circle" src="assets/img/users/user-2.png" alt="user" data-toggle="tooltip" title="" data-original-title="John Deo"></li>
                                    <li class="avatar avatar-sm"><span class="badge badge-primary">+2</span></li>
                                 </ul>
                              </td>
                              <td class="align-middle">
                                 <div class="progress-text">40%</div>
                                 <div class="progress" data-height="6" style="height: 6px;">
                                    <div class="progress-bar bg-danger" data-width="40%" style="width: 40%;"></div>
                                 </div>
                              </td>
                              <td>2017-07-14</td>
                              <td>2018-07-21</td>
                              <td>
                                 <div class="badge badge-danger">High</div>
                              </td>
                              <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                           </tr>
                           <tr>
                              <td class="p-0 text-center">
                                 <div class="custom-checkbox custom-control">
                                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-3">
                                    <label for="checkbox-3" class="custom-control-label">&nbsp;</label>
                                 </div>
                              </td>
                              <td>Backup database</td>
                              <td class="text-truncate">
                                 <ul class="list-unstyled order-list m-b-0 m-b-0">
                                    <li class="team-member team-member-sm"><img class="rounded-circle" src="assets/img/users/user-3.png" alt="user" data-toggle="tooltip" title="" data-original-title="Wildan Ahdian"></li>
                                    <li class="team-member team-member-sm"><img class="rounded-circle" src="assets/img/users/user-4.png" alt="user" data-toggle="tooltip" title="" data-original-title="John Deo"></li>
                                    <li class="team-member team-member-sm"><img class="rounded-circle" src="assets/img/users/user-5.png" alt="user" data-toggle="tooltip" title="" data-original-title="Sarah Smith"></li>
                                    <li class="avatar avatar-sm"><span class="badge badge-primary">+3</span></li>
                                 </ul>
                              </td>
                              <td class="align-middle">
                                 <div class="progress-text">55%</div>
                                 <div class="progress" data-height="6" style="height: 6px;">
                                    <div class="progress-bar bg-purple" data-width="55%" style="width: 55%;"></div>
                                 </div>
                              </td>
                              <td>2019-07-25</td>
                              <td>2019-08-17</td>
                              <td>
                                 <div class="badge badge-info">Average</div>
                              </td>
                              <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                           </tr>
                           <tr>
                              <td class="p-0 text-center">
                                 <div class="custom-checkbox custom-control">
                                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-4">
                                    <label for="checkbox-4" class="custom-control-label">&nbsp;</label>
                                 </div>
                              </td>
                              <td>Android App</td>
                              <td class="text-truncate">
                                 <ul class="list-unstyled order-list m-b-0 m-b-0">
                                    <li class="team-member team-member-sm"><img class="rounded-circle" src="assets/img/users/user-7.png" alt="user" data-toggle="tooltip" title="" data-original-title="John Deo"></li>
                                    <li class="team-member team-member-sm"><img class="rounded-circle" src="assets/img/users/user-8.png" alt="user" data-toggle="tooltip" title="" data-original-title="Sarah Smith"></li>
                                    <li class="avatar avatar-sm"><span class="badge badge-primary">+4</span></li>
                                 </ul>
                              </td>
                              <td class="align-middle">
                                 <div class="progress-text">70%</div>
                                 <div class="progress" data-height="6" style="height: 6px;">
                                    <div class="progress-bar" data-width="70%" style="width: 70%;"></div>
                                 </div>
                              </td>
                              <td>2018-04-15</td>
                              <td>2019-07-19</td>
                              <td>
                                 <div class="badge badge-success">Low</div>
                              </td>
                              <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                           </tr>
                           <tr>
                              <td class="p-0 text-center">
                                 <div class="custom-checkbox custom-control">
                                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-5">
                                    <label for="checkbox-5" class="custom-control-label">&nbsp;</label>
                                 </div>
                              </td>
                              <td>Logo Design</td>
                              <td class="text-truncate">
                                 <ul class="list-unstyled order-list m-b-0 m-b-0">
                                    <li class="team-member team-member-sm"><img class="rounded-circle" src="assets/img/users/user-9.png" alt="user" data-toggle="tooltip" title="" data-original-title="Wildan Ahdian"></li>
                                    <li class="team-member team-member-sm"><img class="rounded-circle" src="assets/img/users/user-10.png" alt="user" data-toggle="tooltip" title="" data-original-title="John Deo"></li>
                                    <li class="team-member team-member-sm"><img class="rounded-circle" src="assets/img/users/user-2.png" alt="user" data-toggle="tooltip" title="" data-original-title="Sarah Smith"></li>
                                    <li class="avatar avatar-sm"><span class="badge badge-primary">+2</span></li>
                                 </ul>
                              </td>
                              <td class="align-middle">
                                 <div class="progress-text">45%</div>
                                 <div class="progress" data-height="6" style="height: 6px;">
                                    <div class="progress-bar bg-cyan" data-width="45%" style="width: 45%;"></div>
                                 </div>
                              </td>
                              <td>2017-02-24</td>
                              <td>2018-09-06</td>
                              <td>
                                 <div class="badge badge-danger">High</div>
                              </td>
                              <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                           </tr>
                           <tr>
                              <td class="p-0 text-center">
                                 <div class="custom-checkbox custom-control">
                                    <input type="checkbox" data-checkboxes="mygroup" class="custom-control-input" id="checkbox-6">
                                    <label for="checkbox-6" class="custom-control-label">&nbsp;</label>
                                 </div>
                              </td>
                              <td>Ecommerce website</td>
                              <td class="text-truncate">
                                 <ul class="list-unstyled order-list m-b-0 m-b-0">
                                    <li class="team-member team-member-sm"><img class="rounded-circle" src="assets/img/users/user-8.png" alt="user" data-toggle="tooltip" title="" data-original-title="Wildan Ahdian"></li>
                                    <li class="team-member team-member-sm"><img class="rounded-circle" src="assets/img/users/user-9.png" alt="user" data-toggle="tooltip" title="" data-original-title="John Deo"></li>
                                    <li class="team-member team-member-sm"><img class="rounded-circle" src="assets/img/users/user-10.png" alt="user" data-toggle="tooltip" title="" data-original-title="Sarah Smith"></li>
                                    <li class="avatar avatar-sm"><span class="badge badge-primary">+4</span></li>
                                 </ul>
                              </td>
                              <td class="align-middle">
                                 <div class="progress-text">30%</div>
                                 <div class="progress" data-height="6" style="height: 6px;">
                                    <div class="progress-bar bg-orange" data-width="30%" style="width: 30%;"></div>
                                 </div>
                              </td>
                              <td>2018-01-20</td>
                              <td>2019-05-28</td>
                              <td>
                                 <div class="badge badge-info">Average</div>
                              </td>
                              <td><a href="#" class="btn btn-outline-primary">Detail</a></td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <div class="row">
         <div class="col-md-6 col-lg-12 col-xl-6">
            <!-- Support tickets -->
            <div class="card">
               <div class="card-header">
                  <h4>Support Ticket</h4>
                  <form class="card-header-form">
                     <input type="text" name="search" class="form-control" placeholder="Search">
                  </form>
               </div>
               <div class="card-body">
                  <div class="support-ticket media pb-1 mb-3">
                     <img src="assets/img/users/user-1.png" class="user-img mr-2" alt="">
                     <div class="media-body ml-3">
                        <div class="badge badge-pill badge-success mb-1 float-right">Feature</div>
                        <span class="font-weight-bold">#89754</span>
                        <a href="javascript:void(0)">Please add advance table</a>
                        <p class="my-1">Hi, can you please add new table for advan...</p>
                        <small class="text-muted">Created by <span class="font-weight-bold font-13">John
                        Deo</span>
                        &nbsp;&nbsp; - 1 day ago</small>
                     </div>
                  </div>
                  <div class="support-ticket media pb-1 mb-3">
                     <img src="assets/img/users/user-2.png" class="user-img mr-2" alt="">
                     <div class="media-body ml-3">
                        <div class="badge badge-pill badge-warning mb-1 float-right">Bug</div>
                        <span class="font-weight-bold">#57854</span>
                        <a href="javascript:void(0)">Select item not working</a>
                        <p class="my-1">please check select item in advance form not work...</p>
                        <small class="text-muted">Created by <span class="font-weight-bold font-13">Sarah
                        Smith</span>
                        &nbsp;&nbsp; - 2 day ago</small>
                     </div>
                  </div>
                  <div class="support-ticket media pb-1 mb-3">
                     <img src="assets/img/users/user-3.png" class="user-img mr-2" alt="">
                     <div class="media-body ml-3">
                        <div class="badge badge-pill badge-primary mb-1 float-right">Query</div>
                        <span class="font-weight-bold">#85784</span>
                        <a href="javascript:void(0)">Are you provide template in Angular?</a>
                        <p class="my-1">can you provide template in latest angular 8.</p>
                        <small class="text-muted">Created by <span class="font-weight-bold font-13">Ashton Cox</span>
                        &nbsp;&nbsp; -2 day ago</small>
                     </div>
                  </div>
                  <div class="support-ticket media pb-1 mb-3">
                     <img src="assets/img/users/user-6.png" class="user-img mr-2" alt="">
                     <div class="media-body ml-3">
                        <div class="badge badge-pill badge-info mb-1 float-right">Enhancement</div>
                        <span class="font-weight-bold">#25874</span>
                        <a href="javascript:void(0)">About template page load speed</a>
                        <p class="my-1">Hi, John, can you work on increase page speed of template...</p>
                        <small class="text-muted">Created by <span class="font-weight-bold font-13">Hasan
                        Basri</span>
                        &nbsp;&nbsp; -3 day ago</small>
                     </div>
                  </div>
               </div>
               <a href="javascript:void(0)" class="card-footer card-link text-center small ">View
               All</a>
            </div>
            <!-- Support tickets -->
         </div>
         <div class="col-md-6 col-lg-12 col-xl-6">
            <div class="card">
               <div class="card-header">
                  <h4>Projects Payments</h4>
               </div>
               <div class="card-body">
                  <div class="table-responsive">
                     <table class="table table-hover mb-0">
                        <thead>
                           <tr>
                              <th>#</th>
                              <th>Client Name</th>
                              <th>Date</th>
                              <th>Payment Method</th>
                              <th>Amount</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <td>1</td>
                              <td>John Doe </td>
                              <td>11-08-2018</td>
                              <td>NEFT</td>
                              <td>$258</td>
                           </tr>
                           <tr>
                              <td>2</td>
                              <td>Cara Stevens
                              </td>
                              <td>15-07-2018</td>
                              <td>PayPal</td>
                              <td>$125</td>
                           </tr>
                           <tr>
                              <td>3</td>
                              <td>
                                 Airi Satou
                              </td>
                              <td>25-08-2018</td>
                              <td>RTGS</td>
                              <td>$287</td>
                           </tr>
                           <tr>
                              <td>4</td>
                              <td>
                                 Angelica Ramos
                              </td>
                              <td>01-05-2018</td>
                              <td>CASH</td>
                              <td>$170</td>
                           </tr>
                           <tr>
                              <td>5</td>
                              <td>
                                 Ashton Cox
                              </td>
                              <td>18-04-2018</td>
                              <td>NEFT</td>
                              <td>$970</td>
                           </tr>
                           <tr>
                              <td>6</td>
                              <td>
                                 John Deo
                              </td>
                              <td>22-11-2018</td>
                              <td>PayPal</td>
                              <td>$854</td>
                           </tr>
                           <tr>
                              <td>7</td>
                              <td>
                                 Hasan Basri
                              </td>
                              <td>07-09-2018</td>
                              <td>Cash</td>
                              <td>$128</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>

</div>
@endsection