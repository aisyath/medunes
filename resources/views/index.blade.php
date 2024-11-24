@extends('layouts.auth')

@section('styles')
<link href="assets/auth/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/auth/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
<link href="assets/auth/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
<link href="assets/auth/vendor/quill/quill.snow.css" rel="stylesheet">
<link href="assets/auth/vendor/quill/quill.bubble.css" rel="stylesheet">
<link href="assets/auth/vendor/remixicon/remixicon.css" rel="stylesheet">
<link href="assets/auth/vendor/simple-datatables/style.css" rel="stylesheet">

@endsection

@section('content')
<main id="main" class="main">

    {{-- <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title --> --}}

    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-8">
          <div class="row">

            <!-- Sales Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card sales-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Sales <span>| Today</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-cart"></i>
                    </div>
                    <div class="ps-3">
                      <h6>145</h6>
                      <span class="text-success small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Sales Card -->

            <!-- Revenue Card -->
            <div class="col-xxl-4 col-md-6">
              <div class="card info-card revenue-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Revenue <span>| This Month</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-currency-dollar"></i>
                    </div>
                    <div class="ps-3">
                      <h6>$3,264</h6>
                      <span class="text-success small pt-1 fw-bold">8%</span> <span class="text-muted small pt-2 ps-1">increase</span>

                    </div>
                  </div>
                </div>

              </div>
            </div><!-- End Revenue Card -->

            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">

              <div class="card info-card customers-card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Customers <span>| This Year</span></h5>

                  <div class="d-flex align-items-center">
                    <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                      <i class="bi bi-people"></i>
                    </div>
                    <div class="ps-3">
                      <h6>1244</h6>
                      <span class="text-danger small pt-1 fw-bold">12%</span> <span class="text-muted small pt-2 ps-1">decrease</span>

                    </div>
                  </div>

                </div>
              </div>

            </div><!-- End Customers Card -->

            <!-- Reports -->
            <div class="col-12">
              <div class="card">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Reports <span>/Today</span></h5>

                  {{-- <!-- Line Chart -->
                  <div id="reportsChart" style="min-height: 365px;"><div id="apexcharts2kkq4x14" class="apexcharts-canvas apexcharts2kkq4x14 apexcharts-theme-" style="width: 703px; height: 350px;"><svg id="SvgjsSvg1543" width="703" height="350" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev" class="apexcharts-svg apexcharts-zoomable" xmlns:data="ApexChartsNS" transform="translate(0, 0)"><foreignObject x="0" y="0" width="703" height="350"><div class="apexcharts-legend apexcharts-align-center apx-legend-position-bottom" xmlns="http://www.w3.org/1999/xhtml" style="inset: auto 0px 1px; position: absolute; max-height: 175px;"><div class="apexcharts-legend-series" rel="1" seriesname="Sales" data:collapsed="false" style="margin: 4px 5px;"><span class="apexcharts-legend-marker" rel="1" data:collapsed="false" style="height: 16px; width: 16px; left: 0px; top: 0px;"><svg id="SvgjsSvg1546" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"><defs id="SvgjsDefs1547"><clipPath id="gridRectMask2kkq4x14"><rect id="SvgjsRect1565" width="659.7604160308838" height="270.99999923706054" x="-3" y="-3" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath><clipPath id="forecastMask2kkq4x14"></clipPath><clipPath id="nonForecastMask2kkq4x14"></clipPath><clipPath id="gridRectMarkerMask2kkq4x14"><rect id="SvgjsRect1566" width="701.7604160308838" height="312.99999923706054" x="-24" y="-24" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fff"></rect></clipPath></defs><path id="SvgjsPath1548" d="M 0, 0 
           m -7, 0 
           a 7,7 0 1,0 14,0 
           a 7,7 0 1,0 -14,0" fill="#4154f1" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" cx="0" cy="0" shape="circle" class="apexcharts-legend-marker apexcharts-marker apexcharts-marker-circle" style="transform: translate(50%, 50%);"></path></svg></span><span class="apexcharts-legend-text" rel="1" i="0" data:default-text="Sales" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Sales</span></div><div class="apexcharts-legend-series" rel="2" seriesname="Revenue" data:collapsed="false" style="margin: 4px 5px;"><span class="apexcharts-legend-marker" rel="2" data:collapsed="false" style="height: 16px; width: 16px; left: 0px; top: 0px;"><svg id="SvgjsSvg1549" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"><defs id="SvgjsDefs1550"></defs><path id="SvgjsPath1551" d="M 0, 0 
           m -7, 0 
           a 7,7 0 1,0 14,0 
           a 7,7 0 1,0 -14,0" fill="#2eca6a" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" cx="0" cy="0" shape="circle" class="apexcharts-legend-marker apexcharts-marker apexcharts-marker-circle" style="transform: translate(50%, 50%);"></path></svg></span><span class="apexcharts-legend-text" rel="2" i="1" data:default-text="Revenue" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Revenue</span></div><div class="apexcharts-legend-series" rel="3" seriesname="Customers" data:collapsed="false" style="margin: 4px 5px;"><span class="apexcharts-legend-marker" rel="3" data:collapsed="false" style="height: 16px; width: 16px; left: 0px; top: 0px;"><svg id="SvgjsSvg1552" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" version="1.1" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.dev"><defs id="SvgjsDefs1553"></defs><path id="SvgjsPath1554" d="M 0, 0 
           m -7, 0 
           a 7,7 0 1,0 14,0 
           a 7,7 0 1,0 -14,0" fill="#ff771d" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="1" stroke-dasharray="0" cx="0" cy="0" shape="circle" class="apexcharts-legend-marker apexcharts-marker apexcharts-marker-circle" style="transform: translate(50%, 50%);"></path></svg></span><span class="apexcharts-legend-text" rel="3" i="2" data:default-text="Customers" data:collapsed="false" style="color: rgb(55, 61, 63); font-size: 12px; font-weight: 400; font-family: Helvetica, Arial, sans-serif;">Customers</span></div></div><style type="text/css">
      .apexcharts-legend {
        display: flex;
        overflow: auto;
        padding: 0 10px;
      }
      .apexcharts-legend.apx-legend-position-bottom, .apexcharts-legend.apx-legend-position-top {
        flex-wrap: wrap
      }
      .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
        flex-direction: column;
        bottom: 0;
      }
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-left, .apexcharts-legend.apx-legend-position-top.apexcharts-align-left, .apexcharts-legend.apx-legend-position-right, .apexcharts-legend.apx-legend-position-left {
        justify-content: flex-start;
      }
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-center, .apexcharts-legend.apx-legend-position-top.apexcharts-align-center {
        justify-content: center;
      }
      .apexcharts-legend.apx-legend-position-bottom.apexcharts-align-right, .apexcharts-legend.apx-legend-position-top.apexcharts-align-right {
        justify-content: flex-end;
      }
      .apexcharts-legend-series {
        cursor: pointer;
        line-height: normal;
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
        display: flex;
        align-items: center;
        justify-content: center;
        cursor: pointer;
        margin-right: 1px;
      }

      .apexcharts-legend-series.apexcharts-no-click {
        cursor: auto;
      }
      .apexcharts-legend .apexcharts-hidden-zero-series, .apexcharts-legend .apexcharts-hidden-null-series {
        display: none !important;
      }
      .apexcharts-inactive-legend {
        opacity: 0.45;
      }</style></foreignObject><rect id="SvgjsRect1560" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe"></rect><g id="SvgjsG1567" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g><g id="SvgjsG1568" class="apexcharts-datalabels-group" transform="translate(0, 0) scale(1)"></g><g id="SvgjsG1685" class="apexcharts-yaxis" rel="0" transform="translate(9.239583969116211, 0)"><g id="SvgjsG1686" class="apexcharts-yaxis-texts-g"><text id="SvgjsText1688" font-family="Helvetica, Arial, sans-serif" x="20" y="33.666666666666664" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1689">90</tspan><title>90</title></text><text id="SvgjsText1691" font-family="Helvetica, Arial, sans-serif" x="20" y="63.111111026340055" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1692">80</tspan><title>80</title></text><text id="SvgjsText1694" font-family="Helvetica, Arial, sans-serif" x="20" y="92.55555538601345" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1695">70</tspan><title>70</title></text><text id="SvgjsText1697" font-family="Helvetica, Arial, sans-serif" x="20" y="121.99999974568685" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1698">60</tspan><title>60</title></text><text id="SvgjsText1700" font-family="Helvetica, Arial, sans-serif" x="20" y="151.44444410536025" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1701">50</tspan><title>50</title></text><text id="SvgjsText1703" font-family="Helvetica, Arial, sans-serif" x="20" y="180.88888846503363" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1704">40</tspan><title>40</title></text><text id="SvgjsText1706" font-family="Helvetica, Arial, sans-serif" x="20" y="210.333332824707" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1707">30</tspan><title>30</title></text><text id="SvgjsText1709" font-family="Helvetica, Arial, sans-serif" x="20" y="239.7777771843804" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1710">20</tspan><title>20</title></text><text id="SvgjsText1712" font-family="Helvetica, Arial, sans-serif" x="20" y="269.2222215440538" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1713">10</tspan><title>10</title></text><text id="SvgjsText1715" font-family="Helvetica, Arial, sans-serif" x="20" y="298.6666659037272" text-anchor="end" dominant-baseline="auto" font-size="11px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-yaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1716">0</tspan><title>0</title></text></g></g><g id="SvgjsG1545" class="apexcharts-inner apexcharts-graphical" transform="translate(39.23958396911621, 30)"><defs id="SvgjsDefs1544"><linearGradient id="SvgjsLinearGradient1586" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1587" stop-opacity="0.3" stop-color="rgba(65,84,241,0.3)" offset="0"></stop><stop id="SvgjsStop1588" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="0.9"></stop><stop id="SvgjsStop1589" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient1608" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1609" stop-opacity="0.3" stop-color="rgba(46,202,106,0.3)" offset="0"></stop><stop id="SvgjsStop1610" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="0.9"></stop><stop id="SvgjsStop1611" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="1"></stop></linearGradient><linearGradient id="SvgjsLinearGradient1630" x1="0" y1="0" x2="0" y2="1"><stop id="SvgjsStop1631" stop-opacity="0.3" stop-color="rgba(255,119,29,0.3)" offset="0"></stop><stop id="SvgjsStop1632" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="0.9"></stop><stop id="SvgjsStop1633" stop-opacity="0.4" stop-color="rgba(255,255,255,0.4)" offset="1"></stop></linearGradient></defs><line id="SvgjsLine1561" x1="0" y1="0" x2="0" y2="211.15556640625" stroke="#b6b6b6" stroke-dasharray="3" stroke-linecap="butt" class="apexcharts-xcrosshairs" x="0" y="0" width="1" height="211.15556640625" fill="#b1b9c4" filter="none" fill-opacity="0.9" stroke-width="1"></line><line id="SvgjsLine1640" x1="0" y1="264.99999923706054" x2="0" y2="270.99999923706054" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1641" x1="100.57852554321289" y1="264.99999923706054" x2="100.57852554321289" y2="270.99999923706054" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1642" x1="201.15705108642578" y1="264.99999923706054" x2="201.15705108642578" y2="270.99999923706054" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1643" x1="301.7355766296387" y1="264.99999923706054" x2="301.7355766296387" y2="270.99999923706054" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1644" x1="402.31410217285156" y1="264.99999923706054" x2="402.31410217285156" y2="270.99999923706054" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1645" x1="502.89262771606445" y1="264.99999923706054" x2="502.89262771606445" y2="270.99999923706054" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><line id="SvgjsLine1646" x1="603.4711532592773" y1="264.99999923706054" x2="603.4711532592773" y2="270.99999923706054" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-xaxis-tick"></line><g id="SvgjsG1636" class="apexcharts-grid"><g id="SvgjsG1637" class="apexcharts-gridlines-horizontal"><line id="SvgjsLine1648" x1="0" y1="29.444444359673394" x2="653.7604160308838" y2="29.444444359673394" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1649" x1="0" y1="58.88888871934679" x2="653.7604160308838" y2="58.88888871934679" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1650" x1="0" y1="88.33333307902018" x2="653.7604160308838" y2="88.33333307902018" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1651" x1="0" y1="117.77777743869358" x2="653.7604160308838" y2="117.77777743869358" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1652" x1="0" y1="147.22222179836697" x2="653.7604160308838" y2="147.22222179836697" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1653" x1="0" y1="176.66666615804036" x2="653.7604160308838" y2="176.66666615804036" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1654" x1="0" y1="206.11111051771374" x2="653.7604160308838" y2="206.11111051771374" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1655" x1="0" y1="235.55555487738712" x2="653.7604160308838" y2="235.55555487738712" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line></g><g id="SvgjsG1638" class="apexcharts-gridlines-vertical"></g><line id="SvgjsLine1658" x1="0" y1="264.99999923706054" x2="653.7604160308838" y2="264.99999923706054" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line><line id="SvgjsLine1657" x1="0" y1="1" x2="0" y2="264.99999923706054" stroke="transparent" stroke-dasharray="0" stroke-linecap="butt"></line></g><g id="SvgjsG1639" class="apexcharts-grid-borders"><line id="SvgjsLine1647" x1="0" y1="0" x2="653.7604160308838" y2="0" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1656" x1="0" y1="264.99999923706054" x2="653.7604160308838" y2="264.99999923706054" stroke="#e0e0e0" stroke-dasharray="0" stroke-linecap="butt" class="apexcharts-gridline"></line><line id="SvgjsLine1684" x1="0" y1="264.99999923706054" x2="653.7604160308838" y2="264.99999923706054" stroke="#e0e0e0" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt"></line></g><g id="SvgjsG1569" class="apexcharts-area-series apexcharts-plot-series"><g id="SvgjsG1570" class="apexcharts-series" zIndex="0" seriesName="Sales" data:longestSeries="true" rel="1" data:realIndex="0"><path id="SvgjsPath1590" d="M 0 173.72222172207302C 52.803725910186756 173.72222172207302 98.06406240463255 147.22222179836695 150.8677883148193 147.22222179836695C 186.0702722549438 147.22222179836695 216.2438299179077 182.55555502997504 251.4463138580322 182.55555502997504C 286.6487977981567 182.55555502997504 316.82235546112054 114.83333300272622 352.02483940124506 114.83333300272622C 387.2273233413696 114.83333300272622 417.4008810043334 141.33333292643226 452.60336494445795 141.33333292643226C 487.8058488845825 141.33333292643226 517.9794065475463 23.5555554877387 553.1818904876709 23.5555554877387C 588.3843744277954 23.5555554877387 618.5579320907592 100.11111082288951 653.7604160308837 100.11111082288951C 653.7604160308837 100.11111082288951 653.7604160308837 100.11111082288951 653.7604160308837 264.99999923706054 L 0 264.99999923706054z" fill="url(#SvgjsLinearGradient1586)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask2kkq4x14)" pathTo="M 0 173.72222172207302C 52.803725910186756 173.72222172207302 98.06406240463255 147.22222179836695 150.8677883148193 147.22222179836695C 186.0702722549438 147.22222179836695 216.2438299179077 182.55555502997504 251.4463138580322 182.55555502997504C 286.6487977981567 182.55555502997504 316.82235546112054 114.83333300272622 352.02483940124506 114.83333300272622C 387.2273233413696 114.83333300272622 417.4008810043334 141.33333292643226 452.60336494445795 141.33333292643226C 487.8058488845825 141.33333292643226 517.9794065475463 23.5555554877387 553.1818904876709 23.5555554877387C 588.3843744277954 23.5555554877387 618.5579320907592 100.11111082288951 653.7604160308837 100.11111082288951C 653.7604160308837 100.11111082288951 653.7604160308837 100.11111082288951 653.7604160308837 264.99999923706054 L 0 264.99999923706054z" pathFrom="M 0 264.99999923706054 L 0 264.99999923706054 L 150.8677883148193 264.99999923706054 L 251.4463138580322 264.99999923706054 L 352.02483940124506 264.99999923706054 L 452.60336494445795 264.99999923706054 L 553.1818904876709 264.99999923706054 L 653.7604160308837 264.99999923706054z"></path><path id="SvgjsPath1591" d="M 0 173.72222172207302C 52.803725910186756 173.72222172207302 98.06406240463255 147.22222179836695 150.8677883148193 147.22222179836695C 186.0702722549438 147.22222179836695 216.2438299179077 182.55555502997504 251.4463138580322 182.55555502997504C 286.6487977981567 182.55555502997504 316.82235546112054 114.83333300272622 352.02483940124506 114.83333300272622C 387.2273233413696 114.83333300272622 417.4008810043334 141.33333292643226 452.60336494445795 141.33333292643226C 487.8058488845825 141.33333292643226 517.9794065475463 23.5555554877387 553.1818904876709 23.5555554877387C 588.3843744277954 23.5555554877387 618.5579320907592 100.11111082288951 653.7604160308837 100.11111082288951" fill="none" fill-opacity="1" stroke="#4154f1" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="0" clip-path="url(#gridRectMask2kkq4x14)" pathTo="M 0 173.72222172207302C 52.803725910186756 173.72222172207302 98.06406240463255 147.22222179836695 150.8677883148193 147.22222179836695C 186.0702722549438 147.22222179836695 216.2438299179077 182.55555502997504 251.4463138580322 182.55555502997504C 286.6487977981567 182.55555502997504 316.82235546112054 114.83333300272622 352.02483940124506 114.83333300272622C 387.2273233413696 114.83333300272622 417.4008810043334 141.33333292643226 452.60336494445795 141.33333292643226C 487.8058488845825 141.33333292643226 517.9794065475463 23.5555554877387 553.1818904876709 23.5555554877387C 588.3843744277954 23.5555554877387 618.5579320907592 100.11111082288951 653.7604160308837 100.11111082288951" pathFrom="M 0 264.99999923706054 L 0 264.99999923706054 L 150.8677883148193 264.99999923706054 L 251.4463138580322 264.99999923706054 L 352.02483940124506 264.99999923706054 L 452.60336494445795 264.99999923706054 L 553.1818904876709 264.99999923706054 L 653.7604160308837 264.99999923706054" fill-rule="evenodd"></path><g id="SvgjsG1571" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="0"><g id="SvgjsG1573" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask2kkq4x14)"><path id="SvgjsPath1574" d="M 0, 173.72222172207302 
           m -4, 0 
           a 4,4 0 1,0 8,0 
           a 4,4 0 1,0 -8,0" fill="#4154f1" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" cx="0" cy="173.72222172207302" shape="circle" class="apexcharts-marker no-pointer-events wlasobido" rel="0" j="0" index="0" default-marker-size="4"></path><path id="SvgjsPath1575" d="M 150.8677883148193, 147.22222179836695 
           m -4, 0 
           a 4,4 0 1,0 8,0 
           a 4,4 0 1,0 -8,0" fill="#4154f1" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" cx="150.8677883148193" cy="147.22222179836695" shape="circle" class="apexcharts-marker no-pointer-events wmxcof87t" rel="1" j="1" index="0" default-marker-size="4"></path></g><g id="SvgjsG1576" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask2kkq4x14)"><path id="SvgjsPath1577" d="M 251.4463138580322, 182.55555502997504 
           m -4, 0 
           a 4,4 0 1,0 8,0 
           a 4,4 0 1,0 -8,0" fill="#4154f1" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" cx="251.4463138580322" cy="182.55555502997504" shape="circle" class="apexcharts-marker no-pointer-events wlzw25fnl" rel="2" j="2" index="0" default-marker-size="4"></path></g><g id="SvgjsG1578" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask2kkq4x14)"><path id="SvgjsPath1579" d="M 352.02483940124506, 114.83333300272622 
           m -4, 0 
           a 4,4 0 1,0 8,0 
           a 4,4 0 1,0 -8,0" fill="#4154f1" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" cx="352.02483940124506" cy="114.83333300272622" shape="circle" class="apexcharts-marker no-pointer-events wacfg9sqq" rel="3" j="3" index="0" default-marker-size="4"></path></g><g id="SvgjsG1580" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask2kkq4x14)"><path id="SvgjsPath1581" d="M 452.60336494445795, 141.33333292643226 
           m -4, 0 
           a 4,4 0 1,0 8,0 
           a 4,4 0 1,0 -8,0" fill="#4154f1" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" cx="452.60336494445795" cy="141.33333292643226" shape="circle" class="apexcharts-marker no-pointer-events wminr2su" rel="4" j="4" index="0" default-marker-size="4"></path></g><g id="SvgjsG1582" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask2kkq4x14)"><path id="SvgjsPath1583" d="M 553.1818904876709, 23.5555554877387 
           m -4, 0 
           a 4,4 0 1,0 8,0 
           a 4,4 0 1,0 -8,0" fill="#4154f1" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" cx="553.1818904876709" cy="23.5555554877387" shape="circle" class="apexcharts-marker no-pointer-events woi7zyp6s" rel="5" j="5" index="0" default-marker-size="4"></path></g><g id="SvgjsG1584" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask2kkq4x14)"><path id="SvgjsPath1585" d="M 653.7604160308837, 100.11111082288951 
           m -4, 0 
           a 4,4 0 1,0 8,0 
           a 4,4 0 1,0 -8,0" fill="#4154f1" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" cx="653.7604160308837" cy="100.11111082288951" shape="circle" class="apexcharts-marker no-pointer-events wl4ak3oc5i" rel="6" j="6" index="0" default-marker-size="4"></path></g></g></g><g id="SvgjsG1592" class="apexcharts-series" zIndex="1" seriesName="Revenue" data:longestSeries="true" rel="2" data:realIndex="1"><path id="SvgjsPath1612" d="M 0 232.6111104414198C 52.803725910186756 232.6111104414198 98.06406240463255 170.77777728610567 150.8677883148193 170.77777728610567C 186.0702722549438 170.77777728610567 216.2438299179077 132.49999961853027 251.4463138580322 132.49999961853027C 286.6487977981567 132.49999961853027 316.82235546112054 170.77777728610567 352.02483940124506 170.77777728610567C 387.2273233413696 170.77777728610567 417.4008810043334 164.888888414171 452.60336494445795 164.888888414171C 487.8058488845825 164.888888414171 517.9794065475463 111.88888856675888 553.1818904876709 111.88888856675888C 588.3843744277954 111.88888856675888 618.5579320907592 144.2777773623996 653.7604160308837 144.2777773623996C 653.7604160308837 144.2777773623996 653.7604160308837 144.2777773623996 653.7604160308837 264.99999923706054 L 0 264.99999923706054z" fill="url(#SvgjsLinearGradient1608)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMask2kkq4x14)" pathTo="M 0 232.6111104414198C 52.803725910186756 232.6111104414198 98.06406240463255 170.77777728610567 150.8677883148193 170.77777728610567C 186.0702722549438 170.77777728610567 216.2438299179077 132.49999961853027 251.4463138580322 132.49999961853027C 286.6487977981567 132.49999961853027 316.82235546112054 170.77777728610567 352.02483940124506 170.77777728610567C 387.2273233413696 170.77777728610567 417.4008810043334 164.888888414171 452.60336494445795 164.888888414171C 487.8058488845825 164.888888414171 517.9794065475463 111.88888856675888 553.1818904876709 111.88888856675888C 588.3843744277954 111.88888856675888 618.5579320907592 144.2777773623996 653.7604160308837 144.2777773623996C 653.7604160308837 144.2777773623996 653.7604160308837 144.2777773623996 653.7604160308837 264.99999923706054 L 0 264.99999923706054z" pathFrom="M 0 264.99999923706054 L 0 264.99999923706054 L 150.8677883148193 264.99999923706054 L 251.4463138580322 264.99999923706054 L 352.02483940124506 264.99999923706054 L 452.60336494445795 264.99999923706054 L 553.1818904876709 264.99999923706054 L 653.7604160308837 264.99999923706054z"></path><path id="SvgjsPath1613" d="M 0 232.6111104414198C 52.803725910186756 232.6111104414198 98.06406240463255 170.77777728610567 150.8677883148193 170.77777728610567C 186.0702722549438 170.77777728610567 216.2438299179077 132.49999961853027 251.4463138580322 132.49999961853027C 286.6487977981567 132.49999961853027 316.82235546112054 170.77777728610567 352.02483940124506 170.77777728610567C 387.2273233413696 170.77777728610567 417.4008810043334 164.888888414171 452.60336494445795 164.888888414171C 487.8058488845825 164.888888414171 517.9794065475463 111.88888856675888 553.1818904876709 111.88888856675888C 588.3843744277954 111.88888856675888 618.5579320907592 144.2777773623996 653.7604160308837 144.2777773623996" fill="none" fill-opacity="1" stroke="#2eca6a" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="1" clip-path="url(#gridRectMask2kkq4x14)" pathTo="M 0 232.6111104414198C 52.803725910186756 232.6111104414198 98.06406240463255 170.77777728610567 150.8677883148193 170.77777728610567C 186.0702722549438 170.77777728610567 216.2438299179077 132.49999961853027 251.4463138580322 132.49999961853027C 286.6487977981567 132.49999961853027 316.82235546112054 170.77777728610567 352.02483940124506 170.77777728610567C 387.2273233413696 170.77777728610567 417.4008810043334 164.888888414171 452.60336494445795 164.888888414171C 487.8058488845825 164.888888414171 517.9794065475463 111.88888856675888 553.1818904876709 111.88888856675888C 588.3843744277954 111.88888856675888 618.5579320907592 144.2777773623996 653.7604160308837 144.2777773623996" pathFrom="M 0 264.99999923706054 L 0 264.99999923706054 L 150.8677883148193 264.99999923706054 L 251.4463138580322 264.99999923706054 L 352.02483940124506 264.99999923706054 L 452.60336494445795 264.99999923706054 L 553.1818904876709 264.99999923706054 L 653.7604160308837 264.99999923706054" fill-rule="evenodd"></path><g id="SvgjsG1593" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="1"><g id="SvgjsG1595" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask2kkq4x14)"><path id="SvgjsPath1596" d="M 0, 232.6111104414198 
           m -4, 0 
           a 4,4 0 1,0 8,0 
           a 4,4 0 1,0 -8,0" fill="#2eca6a" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" cx="0" cy="232.6111104414198" shape="circle" class="apexcharts-marker no-pointer-events w89d3a3jeh" rel="0" j="0" index="1" default-marker-size="4"></path><path id="SvgjsPath1597" d="M 150.8677883148193, 170.77777728610567 
           m -4, 0 
           a 4,4 0 1,0 8,0 
           a 4,4 0 1,0 -8,0" fill="#2eca6a" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" cx="150.8677883148193" cy="170.77777728610567" shape="circle" class="apexcharts-marker no-pointer-events w1lbax1r5" rel="1" j="1" index="1" default-marker-size="4"></path></g><g id="SvgjsG1598" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask2kkq4x14)"><path id="SvgjsPath1599" d="M 251.4463138580322, 132.49999961853027 
           m -4, 0 
           a 4,4 0 1,0 8,0 
           a 4,4 0 1,0 -8,0" fill="#2eca6a" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" cx="251.4463138580322" cy="132.49999961853027" shape="circle" class="apexcharts-marker no-pointer-events wn7gr6el8" rel="2" j="2" index="1" default-marker-size="4"></path></g><g id="SvgjsG1600" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask2kkq4x14)"><path id="SvgjsPath1601" d="M 352.02483940124506, 170.77777728610567 
           m -4, 0 
           a 4,4 0 1,0 8,0 
           a 4,4 0 1,0 -8,0" fill="#2eca6a" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" cx="352.02483940124506" cy="170.77777728610567" shape="circle" class="apexcharts-marker no-pointer-events wly5py4hk" rel="3" j="3" index="1" default-marker-size="4"></path></g><g id="SvgjsG1602" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask2kkq4x14)"><path id="SvgjsPath1603" d="M 452.60336494445795, 164.888888414171 
           m -4, 0 
           a 4,4 0 1,0 8,0 
           a 4,4 0 1,0 -8,0" fill="#2eca6a" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" cx="452.60336494445795" cy="164.888888414171" shape="circle" class="apexcharts-marker no-pointer-events woleqppgf" rel="4" j="4" index="1" default-marker-size="4"></path></g><g id="SvgjsG1604" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask2kkq4x14)"><path id="SvgjsPath1605" d="M 553.1818904876709, 111.88888856675888 
           m -4, 0 
           a 4,4 0 1,0 8,0 
           a 4,4 0 1,0 -8,0" fill="#2eca6a" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" cx="553.1818904876709" cy="111.88888856675888" shape="circle" class="apexcharts-marker no-pointer-events wy27j6um3" rel="5" j="5" index="1" default-marker-size="4"></path></g><g id="SvgjsG1606" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask2kkq4x14)"><path id="SvgjsPath1607" d="M 653.7604160308837, 144.2777773623996 
           m -4, 0 
           a 4,4 0 1,0 8,0 
           a 4,4 0 1,0 -8,0" fill="#2eca6a" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" cx="653.7604160308837" cy="144.2777773623996" shape="circle" class="apexcharts-marker no-pointer-events wni2n9qhp" rel="6" j="6" index="1" default-marker-size="4"></path></g></g></g><g id="SvgjsG1614" class="apexcharts-series" zIndex="2" seriesName="Customers" data:longestSeries="true" rel="3" data:realIndex="2"><path id="SvgjsPath1634" d="M 0 220.83333269755045C 52.803725910186756 220.83333269755045 98.06406240463255 232.6111104414198 150.8677883148193 232.6111104414198C 186.0702722549438 232.6111104414198 216.2438299179077 170.77777728610567 251.4463138580322 170.77777728610567C 286.6487977981567 170.77777728610567 316.82235546112054 211.99999938964842 352.02483940124506 211.99999938964842C 387.2273233413696 211.99999938964842 417.4008810043334 238.49999931335446 452.60336494445795 238.49999931335446C 487.8058488845825 238.49999931335446 517.9794065475463 194.3333327738444 553.1818904876709 194.3333327738444C 588.3843744277954 194.3333327738444 618.5579320907592 232.6111104414198 653.7604160308837 232.6111104414198C 653.7604160308837 232.6111104414198 653.7604160308837 232.6111104414198 653.7604160308837 264.99999923706054 L 0 264.99999923706054z" fill="url(#SvgjsLinearGradient1630)" fill-opacity="1" stroke-opacity="1" stroke-linecap="butt" stroke-width="0" stroke-dasharray="0" class="apexcharts-area" index="2" clip-path="url(#gridRectMask2kkq4x14)" pathTo="M 0 220.83333269755045C 52.803725910186756 220.83333269755045 98.06406240463255 232.6111104414198 150.8677883148193 232.6111104414198C 186.0702722549438 232.6111104414198 216.2438299179077 170.77777728610567 251.4463138580322 170.77777728610567C 286.6487977981567 170.77777728610567 316.82235546112054 211.99999938964842 352.02483940124506 211.99999938964842C 387.2273233413696 211.99999938964842 417.4008810043334 238.49999931335446 452.60336494445795 238.49999931335446C 487.8058488845825 238.49999931335446 517.9794065475463 194.3333327738444 553.1818904876709 194.3333327738444C 588.3843744277954 194.3333327738444 618.5579320907592 232.6111104414198 653.7604160308837 232.6111104414198C 653.7604160308837 232.6111104414198 653.7604160308837 232.6111104414198 653.7604160308837 264.99999923706054 L 0 264.99999923706054z" pathFrom="M 0 264.99999923706054 L 0 264.99999923706054 L 150.8677883148193 264.99999923706054 L 251.4463138580322 264.99999923706054 L 352.02483940124506 264.99999923706054 L 452.60336494445795 264.99999923706054 L 553.1818904876709 264.99999923706054 L 653.7604160308837 264.99999923706054z"></path><path id="SvgjsPath1635" d="M 0 220.83333269755045C 52.803725910186756 220.83333269755045 98.06406240463255 232.6111104414198 150.8677883148193 232.6111104414198C 186.0702722549438 232.6111104414198 216.2438299179077 170.77777728610567 251.4463138580322 170.77777728610567C 286.6487977981567 170.77777728610567 316.82235546112054 211.99999938964842 352.02483940124506 211.99999938964842C 387.2273233413696 211.99999938964842 417.4008810043334 238.49999931335446 452.60336494445795 238.49999931335446C 487.8058488845825 238.49999931335446 517.9794065475463 194.3333327738444 553.1818904876709 194.3333327738444C 588.3843744277954 194.3333327738444 618.5579320907592 232.6111104414198 653.7604160308837 232.6111104414198" fill="none" fill-opacity="1" stroke="#ff771d" stroke-opacity="1" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" class="apexcharts-area" index="2" clip-path="url(#gridRectMask2kkq4x14)" pathTo="M 0 220.83333269755045C 52.803725910186756 220.83333269755045 98.06406240463255 232.6111104414198 150.8677883148193 232.6111104414198C 186.0702722549438 232.6111104414198 216.2438299179077 170.77777728610567 251.4463138580322 170.77777728610567C 286.6487977981567 170.77777728610567 316.82235546112054 211.99999938964842 352.02483940124506 211.99999938964842C 387.2273233413696 211.99999938964842 417.4008810043334 238.49999931335446 452.60336494445795 238.49999931335446C 487.8058488845825 238.49999931335446 517.9794065475463 194.3333327738444 553.1818904876709 194.3333327738444C 588.3843744277954 194.3333327738444 618.5579320907592 232.6111104414198 653.7604160308837 232.6111104414198" pathFrom="M 0 264.99999923706054 L 0 264.99999923706054 L 150.8677883148193 264.99999923706054 L 251.4463138580322 264.99999923706054 L 352.02483940124506 264.99999923706054 L 452.60336494445795 264.99999923706054 L 553.1818904876709 264.99999923706054 L 653.7604160308837 264.99999923706054" fill-rule="evenodd"></path><g id="SvgjsG1615" class="apexcharts-series-markers-wrap apexcharts-hidden-element-shown" data:realIndex="2"><g id="SvgjsG1617" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask2kkq4x14)"><path id="SvgjsPath1618" d="M 0, 220.83333269755045 
           m -4, 0 
           a 4,4 0 1,0 8,0 
           a 4,4 0 1,0 -8,0" fill="#ff771d" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" cx="0" cy="220.83333269755045" shape="circle" class="apexcharts-marker no-pointer-events wketdbhcjk" rel="0" j="0" index="2" default-marker-size="4"></path><path id="SvgjsPath1619" d="M 150.8677883148193, 232.6111104414198 
           m -4, 0 
           a 4,4 0 1,0 8,0 
           a 4,4 0 1,0 -8,0" fill="#ff771d" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" cx="150.8677883148193" cy="232.6111104414198" shape="circle" class="apexcharts-marker no-pointer-events wdwvvtjsol" rel="1" j="1" index="2" default-marker-size="4"></path></g><g id="SvgjsG1620" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask2kkq4x14)"><path id="SvgjsPath1621" d="M 251.4463138580322, 170.77777728610567 
           m -4, 0 
           a 4,4 0 1,0 8,0 
           a 4,4 0 1,0 -8,0" fill="#ff771d" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" cx="251.4463138580322" cy="170.77777728610567" shape="circle" class="apexcharts-marker no-pointer-events wrx365ll4" rel="2" j="2" index="2" default-marker-size="4"></path></g><g id="SvgjsG1622" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask2kkq4x14)"><path id="SvgjsPath1623" d="M 352.02483940124506, 211.99999938964842 
           m -4, 0 
           a 4,4 0 1,0 8,0 
           a 4,4 0 1,0 -8,0" fill="#ff771d" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" cx="352.02483940124506" cy="211.99999938964842" shape="circle" class="apexcharts-marker no-pointer-events wopquypgx" rel="3" j="3" index="2" default-marker-size="4"></path></g><g id="SvgjsG1624" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask2kkq4x14)"><path id="SvgjsPath1625" d="M 452.60336494445795, 238.49999931335446 
           m -4, 0 
           a 4,4 0 1,0 8,0 
           a 4,4 0 1,0 -8,0" fill="#ff771d" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" cx="452.60336494445795" cy="238.49999931335446" shape="circle" class="apexcharts-marker no-pointer-events wjxuac2kg" rel="4" j="4" index="2" default-marker-size="4"></path></g><g id="SvgjsG1626" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask2kkq4x14)"><path id="SvgjsPath1627" d="M 553.1818904876709, 194.3333327738444 
           m -4, 0 
           a 4,4 0 1,0 8,0 
           a 4,4 0 1,0 -8,0" fill="#ff771d" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" cx="553.1818904876709" cy="194.3333327738444" shape="circle" class="apexcharts-marker no-pointer-events wjsdmtpjr" rel="5" j="5" index="2" default-marker-size="4"></path></g><g id="SvgjsG1628" class="apexcharts-series-markers" clip-path="url(#gridRectMarkerMask2kkq4x14)"><path id="SvgjsPath1629" d="M 653.7604160308837, 232.6111104414198 
           m -4, 0 
           a 4,4 0 1,0 8,0 
           a 4,4 0 1,0 -8,0" fill="#ff771d" fill-opacity="1" stroke="#ffffff" stroke-opacity="0.9" stroke-linecap="butt" stroke-width="2" stroke-dasharray="0" cx="653.7604160308837" cy="232.6111104414198" shape="circle" class="apexcharts-marker no-pointer-events w5mw0lm8" rel="6" j="6" index="2" default-marker-size="4"></path></g></g></g><g id="SvgjsG1572" class="apexcharts-datalabels" data:realIndex="0"></g><g id="SvgjsG1594" class="apexcharts-datalabels" data:realIndex="1"></g><g id="SvgjsG1616" class="apexcharts-datalabels" data:realIndex="2"></g></g><line id="SvgjsLine1659" x1="0" y1="0" x2="653.7604160308838" y2="0" stroke="#b6b6b6" stroke-dasharray="0" stroke-width="1" stroke-linecap="butt" class="apexcharts-ycrosshairs"></line><line id="SvgjsLine1660" x1="0" y1="0" x2="653.7604160308838" y2="0" stroke-dasharray="0" stroke-width="0" stroke-linecap="butt" class="apexcharts-ycrosshairs-hidden"></line><g id="SvgjsG1661" class="apexcharts-xaxis" transform="translate(0, 0)"><g id="SvgjsG1662" class="apexcharts-xaxis-texts-g" transform="translate(0, -4)"><text id="SvgjsText1664" font-family="Helvetica, Arial, sans-serif" x="0" y="292.99999923706054" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1665">00:00</tspan><title>00:00</title></text><text id="SvgjsText1667" font-family="Helvetica, Arial, sans-serif" x="100.57852554321289" y="292.99999923706054" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1668">01:00</tspan><title>01:00</title></text><text id="SvgjsText1670" font-family="Helvetica, Arial, sans-serif" x="201.15705108642578" y="292.99999923706054" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1671">02:00</tspan><title>02:00</title></text><text id="SvgjsText1673" font-family="Helvetica, Arial, sans-serif" x="301.7355766296387" y="292.99999923706054" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1674">03:00</tspan><title>03:00</title></text><text id="SvgjsText1676" font-family="Helvetica, Arial, sans-serif" x="402.31410217285156" y="292.99999923706054" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1677">04:00</tspan><title>04:00</title></text><text id="SvgjsText1679" font-family="Helvetica, Arial, sans-serif" x="502.89262771606445" y="292.99999923706054" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1680">05:00</tspan><title>05:00</title></text><text id="SvgjsText1682" font-family="Helvetica, Arial, sans-serif" x="603.4711532592773" y="292.99999923706054" text-anchor="middle" dominant-baseline="auto" font-size="12px" font-weight="400" fill="#373d3f" class="apexcharts-text apexcharts-xaxis-label " style="font-family: Helvetica, Arial, sans-serif;"><tspan id="SvgjsTspan1683">06:00</tspan><title>06:00</title></text></g></g><g id="SvgjsG1717" class="apexcharts-yaxis-annotations"></g><g id="SvgjsG1718" class="apexcharts-xaxis-annotations"></g><g id="SvgjsG1719" class="apexcharts-point-annotations"></g><rect id="SvgjsRect1720" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-zoom-rect"></rect><rect id="SvgjsRect1721" width="0" height="0" x="0" y="0" rx="0" ry="0" opacity="1" stroke-width="0" stroke="none" stroke-dasharray="0" fill="#fefefe" class="apexcharts-selection-rect"></rect></g></svg><div class="apexcharts-tooltip apexcharts-theme-light"><div class="apexcharts-tooltip-title" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div><div class="apexcharts-tooltip-series-group" style="order: 1;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(65, 84, 241);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 2;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(46, 202, 106);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div><div class="apexcharts-tooltip-series-group" style="order: 3;"><span class="apexcharts-tooltip-marker" style="background-color: rgb(255, 119, 29);"></span><div class="apexcharts-tooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"><div class="apexcharts-tooltip-y-group"><span class="apexcharts-tooltip-text-y-label"></span><span class="apexcharts-tooltip-text-y-value"></span></div><div class="apexcharts-tooltip-goals-group"><span class="apexcharts-tooltip-text-goals-label"></span><span class="apexcharts-tooltip-text-goals-value"></span></div><div class="apexcharts-tooltip-z-group"><span class="apexcharts-tooltip-text-z-label"></span><span class="apexcharts-tooltip-text-z-value"></span></div></div></div></div><div class="apexcharts-xaxistooltip apexcharts-xaxistooltip-bottom apexcharts-theme-light"><div class="apexcharts-xaxistooltip-text" style="font-family: Helvetica, Arial, sans-serif; font-size: 12px;"></div></div><div class="apexcharts-yaxistooltip apexcharts-yaxistooltip-0 apexcharts-yaxistooltip-left apexcharts-theme-light"><div class="apexcharts-yaxistooltip-text"></div></div></div></div>

                  <script>
                    document.addEventListener("DOMContentLoaded", () => {
                      new ApexCharts(document.querySelector("#reportsChart"), {
                        series: [{
                          name: 'Sales',
                          data: [31, 40, 28, 51, 42, 82, 56],
                        }, {
                          name: 'Revenue',
                          data: [11, 32, 45, 32, 34, 52, 41]
                        }, {
                          name: 'Customers',
                          data: [15, 11, 32, 18, 9, 24, 11]
                        }],
                        chart: {
                          height: 350,
                          type: 'area',
                          toolbar: {
                            show: false
                          },
                        },
                        markers: {
                          size: 4
                        },
                        colors: ['#4154f1', '#2eca6a', '#ff771d'],
                        fill: {
                          type: "gradient",
                          gradient: {
                            shadeIntensity: 1,
                            opacityFrom: 0.3,
                            opacityTo: 0.4,
                            stops: [0, 90, 100]
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        stroke: {
                          curve: 'smooth',
                          width: 2
                        },
                        xaxis: {
                          type: 'datetime',
                          categories: ["2018-09-19T00:00:00.000Z", "2018-09-19T01:30:00.000Z", "2018-09-19T02:30:00.000Z", "2018-09-19T03:30:00.000Z", "2018-09-19T04:30:00.000Z", "2018-09-19T05:30:00.000Z", "2018-09-19T06:30:00.000Z"]
                        },
                        tooltip: {
                          x: {
                            format: 'dd/MM/yy HH:mm'
                          },
                        }
                      }).render();
                    });
                  </script>
                  <!-- End Line Chart -->

                </div>

              </div>
            </div><!-- End Reports -->

            {{-- <!-- Recent Sales -->
            <div class="col-12">
              <div class="card recent-sales overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body">
                  <h5 class="card-title">Recent Sales <span>| Today</span></h5>

                  <div class="datatable-wrapper datatable-loading no-footer sortable searchable fixed-columns"><div class="datatable-top">
    <div class="datatable-dropdown">
            <label>
                <select class="datatable-selector" name="per-page"><option value="5">5</option><option value="10" selected="">10</option><option value="15">15</option><option value="-1">All</option></select> entries per page
            </label>
        </div>
    <div class="datatable-search">
            <input class="datatable-input" placeholder="Search..." type="search" name="search" title="Search within table">
        </div>
</div>
<div class="datatable-container"><table class="table table-borderless datatable datatable-table"><thead><tr><th scope="col" data-sortable="true" style="width: 10.668563300142248%;"><button class="datatable-sorter">#</button></th><th scope="col" data-sortable="true" style="width: 23.470839260312946%;"><button class="datatable-sorter">Customer</button></th><th scope="col" data-sortable="true" style="width: 39.40256045519203%;"><button class="datatable-sorter">Product</button></th><th scope="col" data-sortable="true" style="width: 11.66429587482219%;"><button class="datatable-sorter">Price</button></th><th scope="col" data-sortable="true" class="red" style="width: 14.793741109530584%;"><button class="datatable-sorter">Status</button></th></tr></thead><tbody><tr data-index="0"><td scope="row"><a href="#">#2457</a></td><td>Brandon Jacob</td><td><a href="#" class="text-primary">At praesentium minu</a></td><td>$64</td><td class="green"><span class="badge bg-success">Approved</span></td></tr><tr data-index="1"><td scope="row"><a href="#">#2147</a></td><td>Bridie Kessler</td><td><a href="#" class="text-primary">Blanditiis dolor omnis similique</a></td><td>$47</td><td class="green"><span class="badge bg-warning">Pending</span></td></tr><tr data-index="2"><td scope="row"><a href="#">#2049</a></td><td>Ashleigh Langosh</td><td><a href="#" class="text-primary">At recusandae consectetur</a></td><td>$147</td><td class="green"><span class="badge bg-success">Approved</span></td></tr><tr data-index="3"><td scope="row"><a href="#">#2644</a></td><td>Angus Grady</td><td><a href="#" class="text-primar">Ut voluptatem id earum et</a></td><td>$67</td><td class="green"><span class="badge bg-danger">Rejected</span></td></tr><tr data-index="4"><td scope="row"><a href="#">#2644</a></td><td>Raheem Lehner</td><td><a href="#" class="text-primary">Sunt similique distinctio</a></td><td>$165</td><td class="green"><span class="badge bg-success">Approved</span></td></tr></tbody></table></div>
<div class="datatable-bottom">
    <div class="datatable-info">Showing 1 to 5 of 5 entries</div>
    <nav class="datatable-pagination"><ul class="datatable-pagination-list"></ul></nav>
</div></div>

                </div>

              </div>
            </div><!-- End Recent Sales -->

            <!-- Top Selling -->
            <div class="col-12">
              <div class="card top-selling overflow-auto">

                <div class="filter">
                  <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
                  <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                    <li class="dropdown-header text-start">
                      <h6>Filter</h6>
                    </li>

                    <li><a class="dropdown-item" href="#">Today</a></li>
                    <li><a class="dropdown-item" href="#">This Month</a></li>
                    <li><a class="dropdown-item" href="#">This Year</a></li>
                  </ul>
                </div>

                <div class="card-body pb-0">
                  <h5 class="card-title">Top Selling <span>| Today</span></h5>

                  <table class="table table-borderless">
                    <thead>
                      <tr>
                        <th scope="col">Preview</th>
                        <th scope="col">Product</th>
                        <th scope="col">Price</th>
                        <th scope="col">Sold</th>
                        <th scope="col">Revenue</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-1.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Ut inventore ipsa voluptas nulla</a></td>
                        <td>$64</td>
                        <td class="fw-bold">124</td>
                        <td>$5,828</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-2.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Exercitationem similique doloremque</a></td>
                        <td>$46</td>
                        <td class="fw-bold">98</td>
                        <td>$4,508</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-3.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Doloribus nisi exercitationem</a></td>
                        <td>$59</td>
                        <td class="fw-bold">74</td>
                        <td>$4,366</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-4.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Officiis quaerat sint rerum error</a></td>
                        <td>$32</td>
                        <td class="fw-bold">63</td>
                        <td>$2,016</td>
                      </tr>
                      <tr>
                        <th scope="row"><a href="#"><img src="assets/img/product-5.jpg" alt=""></a></th>
                        <td><a href="#" class="text-primary fw-bold">Sit unde debitis delectus repellendus</a></td>
                        <td>$79</td>
                        <td class="fw-bold">41</td>
                        <td>$3,239</td>
                      </tr>
                    </tbody>
                  </table>

                </div>

              </div> --}}
            </div><!-- End Top Selling -->

          </div>
        </div><!-- End Left side columns -->

        <!-- Right side columns -->
        <div class="col-lg-4">

          {{-- <!-- Recent Activity -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body">
              <h5 class="card-title">Recent Activity <span>| Today</span></h5>

              <div class="activity">

                <div class="activity-item d-flex">
                  <div class="activite-label">32 min</div>
                  <i class="bi bi-circle-fill activity-badge text-success align-self-start"></i>
                  <div class="activity-content">
                    Quia quae rerum <a href="#" class="fw-bold text-dark">explicabo officiis</a> beatae
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">56 min</div>
                  <i class="bi bi-circle-fill activity-badge text-danger align-self-start"></i>
                  <div class="activity-content">
                    Voluptatem blanditiis blanditiis eveniet
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">2 hrs</div>
                  <i class="bi bi-circle-fill activity-badge text-primary align-self-start"></i>
                  <div class="activity-content">
                    Voluptates corrupti molestias voluptatem
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">1 day</div>
                  <i class="bi bi-circle-fill activity-badge text-info align-self-start"></i>
                  <div class="activity-content">
                    Tempore autem saepe <a href="#" class="fw-bold text-dark">occaecati voluptatem</a> tempore
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">2 days</div>
                  <i class="bi bi-circle-fill activity-badge text-warning align-self-start"></i>
                  <div class="activity-content">
                    Est sit eum reiciendis exercitationem
                  </div>
                </div><!-- End activity item-->

                <div class="activity-item d-flex">
                  <div class="activite-label">4 weeks</div>
                  <i class="bi bi-circle-fill activity-badge text-muted align-self-start"></i>
                  <div class="activity-content">
                    Dicta dolorem harum nulla eius. Ut quidem quidem sit quas
                  </div>
                </div><!-- End activity item-->

              </div>

            </div>
          </div><!-- End Recent Activity -->

          <!-- Budget Report -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Budget Report <span>| This Month</span></h5>

              <div id="budgetChart" style="min-height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" class="echart" _echarts_instance_="ec_1729703597145"><div style="position: relative; width: 703px; height: 400px; padding: 0px; margin: 0px; border-width: 0px;"><canvas data-zr-dom-id="zr_0" width="1054" height="600" style="position: absolute; left: 0px; top: 0px; width: 703px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  var budgetChart = echarts.init(document.querySelector("#budgetChart")).setOption({
                    legend: {
                      data: ['Allocated Budget', 'Actual Spending']
                    },
                    radar: {
                      // shape: 'circle',
                      indicator: [{
                          name: 'Sales',
                          max: 6500
                        },
                        {
                          name: 'Administration',
                          max: 16000
                        },
                        {
                          name: 'Information Technology',
                          max: 30000
                        },
                        {
                          name: 'Customer Support',
                          max: 38000
                        },
                        {
                          name: 'Development',
                          max: 52000
                        },
                        {
                          name: 'Marketing',
                          max: 25000
                        }
                      ]
                    },
                    series: [{
                      name: 'Budget vs spending',
                      type: 'radar',
                      data: [{
                          value: [4200, 3000, 20000, 35000, 50000, 18000],
                          name: 'Allocated Budget'
                        },
                        {
                          value: [5000, 14000, 28000, 26000, 42000, 21000],
                          name: 'Actual Spending'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Budget Report -->

          <!-- Website Traffic -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">Website Traffic <span>| Today</span></h5>

              <div id="trafficChart" style="min-height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); position: relative;" class="echart" _echarts_instance_="ec_1729703597146"><div style="position: relative; width: 703px; height: 400px; padding: 0px; margin: 0px; border-width: 0px;"><canvas data-zr-dom-id="zr_0" width="1054" height="600" style="position: absolute; left: 0px; top: 0px; width: 703px; height: 400px; user-select: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 0px; margin: 0px; border-width: 0px;"></canvas></div><div class=""></div></div>

              <script>
                document.addEventListener("DOMContentLoaded", () => {
                  echarts.init(document.querySelector("#trafficChart")).setOption({
                    tooltip: {
                      trigger: 'item'
                    },
                    legend: {
                      top: '5%',
                      left: 'center'
                    },
                    series: [{
                      name: 'Access From',
                      type: 'pie',
                      radius: ['40%', '70%'],
                      avoidLabelOverlap: false,
                      label: {
                        show: false,
                        position: 'center'
                      },
                      emphasis: {
                        label: {
                          show: true,
                          fontSize: '18',
                          fontWeight: 'bold'
                        }
                      },
                      labelLine: {
                        show: false
                      },
                      data: [{
                          value: 1048,
                          name: 'Search Engine'
                        },
                        {
                          value: 735,
                          name: 'Direct'
                        },
                        {
                          value: 580,
                          name: 'Email'
                        },
                        {
                          value: 484,
                          name: 'Union Ads'
                        },
                        {
                          value: 300,
                          name: 'Video Ads'
                        }
                      ]
                    }]
                  });
                });
              </script>

            </div>
          </div><!-- End Website Traffic -->

          <!-- News & Updates Traffic -->
          <div class="card">
            <div class="filter">
              <a class="icon" href="#" data-bs-toggle="dropdown"><i class="bi bi-three-dots"></i></a>
              <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow">
                <li class="dropdown-header text-start">
                  <h6>Filter</h6>
                </li>

                <li><a class="dropdown-item" href="#">Today</a></li>
                <li><a class="dropdown-item" href="#">This Month</a></li>
                <li><a class="dropdown-item" href="#">This Year</a></li>
              </ul>
            </div>

            <div class="card-body pb-0">
              <h5 class="card-title">News &amp; Updates <span>| Today</span></h5>

              <div class="news">
                <div class="post-item clearfix">
                  <img src="assets/img/news-1.jpg" alt="">
                  <h4><a href="#">Nihil blanditiis at in nihil autem</a></h4>
                  <p>Sit recusandae non aspernatur laboriosam. Quia enim eligendi sed ut harum...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-2.jpg" alt="">
                  <h4><a href="#">Quidem autem et impedit</a></h4>
                  <p>Illo nemo neque maiores vitae officiis cum eum turos elan dries werona nande...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-3.jpg" alt="">
                  <h4><a href="#">Id quia et et ut maxime similique occaecati ut</a></h4>
                  <p>Fugiat voluptas vero eaque accusantium eos. Consequuntur sed ipsam et totam...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-4.jpg" alt="">
                  <h4><a href="#">Laborum corporis quo dara net para</a></h4>
                  <p>Qui enim quia optio. Eligendi aut asperiores enim repellendusvel rerum cuder...</p>
                </div>

                <div class="post-item clearfix">
                  <img src="assets/img/news-5.jpg" alt="">
                  <h4><a href="#">Et dolores corrupti quae illo quod dolor</a></h4>
                  <p>Odit ut eveniet modi reiciendis. Atque cupiditate libero beatae dignissimos eius...</p>
                </div>

              </div><!-- End sidebar recent posts-->

            </div>
          </div><!-- End News & Updates -->

        </div><!-- End Right side columns -->

      </div>
    </section> --}} --}}

  </main>
@endsection

@section('scripts')
<script src="assets/auth/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/auth/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/auth/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/auth/vendor/echarts/echarts.min.js"></script>
  <script src="assets/auth/vendor/quill/quill.js"></script>
  <script src="assets/auth/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/auth/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/auth/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/auth/js/main.js"></script>

@endsection