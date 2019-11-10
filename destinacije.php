<?php
    
    error_reporting( error_reporting() & ~E_NOTICE);
    include("server/server.php");
    if(!empty($_SESSION['success'])){
        echo $_SESSION['success'];
        unset($_SESSION['success']);
    }
    if(!empty($_SESSION['loggedout'])){
        echo $_SESSION['loggedout'];
        unset($_SESSION['loggedout']);
    }
     
 ?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Destinacije</title>
    <link rel="stylesheet" href="dest.css">
</head>

<body>


<div class="container">
        <div id="snow_fall"></div>
        <div class="menu">
            <ul style="margin-top: 70px; text-transform:uppercase;">
                <li class="logo"><img src="Logo.png"></li>
                <li class="active"><a href="pocetna.php">Početna</a> </li>
                <li><a href="indexF.php">Filmovi</a></li>
                <li><a href="hrana.php">Hrana</a> </li>
                <li><a href="destinacije.php">Destinacije</a> </li>
                <li><a href="dekoracija.php">Dekoracija</a> </li>
                <li><a href="pokloni.php">Pokloni</a> </li>
                <?php if(isset($_SESSION['username'])){ ?>
                    <li><a href="http://localhost/fonisInterniHakaton/pocetna.php?logout=1" class="signup-btn"><span>Izloguj Se (<?php echo $currentUserUsername; ?>)</span></a></li>
                <?php }else{?>
                    <li><a href="server/login.php" class="signup-btn"><span>Uloguj Se</span></a></li>
                    <li><a href="server/register.php" class="signup-btn"><span>Registruj Se</span></a></li>
                <?php } ?>
                <div class="song"></div>
                <audio class="audio" controls preload="metadata">
                    <source src = "nzm.mp3" type="audio/ogg">
                </audio>
            </ul>
        </div>

    <div class="meni">
        <div class="box">
            <div class="imgBox">
                <img src="Krakovanje.jpg" alt="Krakovanje">
            </div>
            <div class="tekst">
                <div class="content">
                    <h2>krakov</h2>
                    <a href="https://www.rapsodytravel.rs/putovanja/nova-godina/krakov?view=tours&cat_ids[0]=9&month=0" target="_blank">
                        <button class="btn" style="background-color: #F2DBB3;">Organizovano putovanje</button>
                    </a>
                    <a href="https://www.booking.com/searchresults.en-us.html?label=gen173nr-1DCAEoggI46AdIM1gEaMEBiAEBmAExuAEXyAEM2AED6AEB-AECiAIBqAIDuAL0ip7uBcACAQ&sid=840eec3cce25f77f18dcf7150b9bd17a&sb=1&src=index&src_elem=sb&error_url=https%3A%2F%2Fwww.booking.com%2Findex.html%3Flabel%3Dgen173nr-1DCAEoggI46AdIM1gEaMEBiAEBmAExuAEXyAEM2AED6AEB-AECiAIBqAIDuAL0ip7uBcACAQ%3Bsid%3D840eec3cce25f77f18dcf7150b9bd17a%3Bsb_price_type%3Dtotal%26%3B&ss=Krak%C3%B3w%2C+Lesser+Poland%2C+Poland&is_ski_area=&checkin_year=&checkin_month=&checkout_year=&checkout_month=&group_adults=2&group_children=0&no_rooms=1&b_h4u_keep_filters=&from_sf=1&ss_raw=krakov&ac_position=0&ac_langcode=en&ac_click_type=b&dest_id=-510625&dest_type=city&iata=KRK&place_id_lat=50.063&place_id_lon=19.937&search_pageview_id=c717193a6b2e0098&search_selected=true&search_pageview_id=c717193a6b2e0098&ac_suggestion_list_length=5&ac_suggestion_theme_list_length=0" target="_blank">
                        <button class="btn1" style="background-color: #F2DBB3;">Sopstvena organizacija</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                    <img src="Krakov-Prag.jpg" alt="Krakov-Prag">
            </div>
            <div class="tekst">
                <div class="content">
                    <h2>krakov-prag</h2>
                    <a href="https://www.rapsodytravel.rs/putovanja/nova-godina/krakov-prag/16-hotel-novotel-4-hotel-prag-3-ili-4" target="_blank">
                            <button class="btn" style="background-color: #F2DBB3;">Organizovano putovanje</button>
                        </a>
                        <a href="https://www.booking.com/searchresults.html?label=gen173nr-1DCAEoggI46AdIM1gEaMEBiAEBmAExuAEXyAEM2AED6AEB-AECiAIBqAIDuAL0ip7uBcACAQ&sid=840eec3cce25f77f18dcf7150b9bd17a&sb=1&src=searchresults&src_elem=sb&error_url=https%3A%2F%2Fwww.booking.com%2Fsearchresults.html%3Flabel%3Dgen173nr-1DCAEoggI46AdIM1gEaMEBiAEBmAExuAEXyAEM2AED6AEB-AECiAIBqAIDuAL0ip7uBcACAQ%3Bsid%3D840eec3cce25f77f18dcf7150b9bd17a%3Btmpl%3Dsearchresults%3Bac_click_type%3Db%3Bac_position%3D0%3Bclass_interval%3D1%3Bdest_id%3D-510625%3Bdest_type%3Dcity%3Bdtdisc%3D0%3Bfrom_sf%3D1%3Bgroup_adults%3D2%3Bgroup_children%3D0%3Biata%3DKRK%3Binac%3D0%3Bindex_postcard%3D0%3Blabel_click%3Dundef%3Bno_rooms%3D1%3Boffset%3D0%3Bpostcard%3D0%3Braw_dest_type%3Dcity%3Broom1%3DA%252CA%3Bsb_price_type%3Dtotal%3Bsearch_selected%3D1%3Bshw_aparth%3D1%3Bslp_r_match%3D0%3Bsrc%3Dindex%3Bsrc_elem%3Dsb%3Bsrpvid%3Dcd731941cb4f0054%3Bss%3DKrak%25C3%25B3w%252C%2520Lesser%2520Poland%252C%2520Poland%3Bss_all%3D0%3Bss_raw%3Dkrakov%3Bssb%3Dempty%3Bsshis%3D0%3Btop_ufis%3D1%26%3B&ss=Prague%2C+Czech+Republic&is_ski_area=&ssne=Krakow&ssne_untouched=Krakow&city=-510625&checkin_year=&checkin_month=&checkout_year=&checkout_month=&group_adults=2&group_children=0&no_rooms=1&from_sf=1&search_pageview_id=cd731941cb4f0054&ac_suggestion_list_length=5&ac_suggestion_theme_list_length=0&ac_position=0&ac_langcode=en&ac_click_type=b&dest_id=-553173&dest_type=city&iata=PRG&place_id_lat=50.08773&place_id_lon=14.421133&search_pageview_id=cd731941cb4f0054&search_selected=true&ss_raw=prag" target="_blank">
                            <button class="btn1" style="background-color: #F2DBB3;">Sopstvena organizacija</button>
                        </a>
                </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                    <img src="Istanbul.jpg" alt="Istanbul">
            </div>
            <div class="tekst">
                    <div class="content">
                        <h2>istanbul</h2>
                        <a href="https://www.rapsodytravel.rs/putovanja/nova-godina/istanbul" target="_blank">
                                <button class="btn" style="background-color: #F2DBB3;">Organizovano putovanje</button>
                            </a>
                            <a href="https://www.booking.com/searchresults.html?label=gen173nr-1DCAEoggI46AdIM1gEaMEBiAEBmAExuAEXyAEM2AED6AEB-AECiAIBqAIDuAL0ip7uBcACAQ&sid=840eec3cce25f77f18dcf7150b9bd17a&sb=1&src=searchresults&src_elem=sb&error_url=https%3A%2F%2Fwww.booking.com%2Fsearchresults.html%3Flabel%3Dgen173nr-1DCAEoggI46AdIM1gEaMEBiAEBmAExuAEXyAEM2AED6AEB-AECiAIBqAIDuAL0ip7uBcACAQ%3Bsid%3D840eec3cce25f77f18dcf7150b9bd17a%3Btmpl%3Dsearchresults%3Bac_click_type%3Db%3Bac_position%3D0%3Bcity%3D-510625%3Bclass_interval%3D1%3Bdest_id%3D-553173%3Bdest_type%3Dcity%3Bdtdisc%3D0%3Bfrom_sf%3D1%3Bgroup_adults%3D2%3Bgroup_children%3D0%3Biata%3DPRG%3Binac%3D0%3Bindex_postcard%3D0%3Blabel_click%3Dundef%3Bno_rooms%3D1%3Boffset%3D0%3Bpostcard%3D0%3Braw_dest_type%3Dcity%3Broom1%3DA%252CA%3Bsb_price_type%3Dtotal%3Bsearch_selected%3D1%3Bshw_aparth%3D1%3Bslp_r_match%3D0%3Bsrc%3Dsearchresults%3Bsrc_elem%3Dsb%3Bsrpvid%3D3ffd199d835e004c%3Bss%3DPrague%252C%2520Czech%2520Republic%3Bss_all%3D0%3Bss_raw%3Dprag%3Bssb%3Dempty%3Bsshis%3D0%3Bssne%3DKrakow%3Bssne_untouched%3DKrakow%3Btop_ufis%3D1%26%3B&ss=Istanbul%2C+Marmara+Region%2C+Turkey&is_ski_area=&ssne=Prague&ssne_untouched=Prague&city=-553173&checkin_year=&checkin_month=&checkout_year=&checkout_month=&group_adults=2&group_children=0&no_rooms=1&from_sf=1&ss_raw=istanb&ac_position=0&ac_langcode=en&ac_click_type=b&dest_id=-755070&dest_type=city&iata=IST&place_id_lat=41.008171&place_id_lon=28.974446&search_pageview_id=3ffd199d835e004c&search_selected=true&search_pageview_id=3ffd199d835e004c&ac_suggestion_list_length=5&ac_suggestion_theme_list_length=0" target="_blank">
                                <button class="btn1" style="background-color: #F2DBB3;">Sopstvena organizacija</button>
                            </a>
                    </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                    <img src="Milano.jpg" alt="Milano">
            </div>
            <div class="tekst">
                    <div class="content">
                        <h2>milano</h2>
                        <a href="http://rapsodytravel.rs/index.php?option=com_bookpro&view=tour&id=22&Itemid=349" target="_blank">
                                <button class="btn" style="background-color: #F2DBB3;">Organizovano putovanje</button>
                            </a>
                            <a href="https://www.booking.com/searchresults.html?label=gen173nr-1DCAEoggI46AdIM1gEaMEBiAEBmAExuAEXyAEM2AED6AEB-AECiAIBqAIDuAL0ip7uBcACAQ&sid=840eec3cce25f77f18dcf7150b9bd17a&sb=1&src=searchresults&src_elem=sb&error_url=https%3A%2F%2Fwww.booking.com%2Fsearchresults.html%3Flabel%3Dgen173nr-1DCAEoggI46AdIM1gEaMEBiAEBmAExuAEXyAEM2AED6AEB-AECiAIBqAIDuAL0ip7uBcACAQ%3Bsid%3D840eec3cce25f77f18dcf7150b9bd17a%3Btmpl%3Dsearchresults%3Bac_click_type%3Db%3Bac_position%3D0%3Bcity%3D-553173%3Bclass_interval%3D1%3Bdest_id%3D-755070%3Bdest_type%3Dcity%3Bdtdisc%3D0%3Bfrom_sf%3D1%3Bgroup_adults%3D2%3Bgroup_children%3D0%3Biata%3DIST%3Binac%3D0%3Bindex_postcard%3D0%3Blabel_click%3Dundef%3Bno_rooms%3D1%3Boffset%3D0%3Bpostcard%3D0%3Braw_dest_type%3Dcity%3Broom1%3DA%252CA%3Bsb_price_type%3Dtotal%3Bsearch_selected%3D1%3Bshw_aparth%3D1%3Bslp_r_match%3D0%3Bsrc%3Dsearchresults%3Bsrc_elem%3Dsb%3Bsrpvid%3D130819acacd10044%3Bss%3DIstanbul%252C%2520Marmara%2520Region%252C%2520Turkey%3Bss_all%3D0%3Bss_raw%3Distanb%3Bssb%3Dempty%3Bsshis%3D0%3Bssne%3DPrague%3Bssne_untouched%3DPrague%3Btop_ufis%3D1%26%3B&ss=Milan%2C+Lombardy%2C+Italy&is_ski_area=&ssne=Istanbul&ssne_untouched=Istanbul&city=-755070&checkin_year=&checkin_month=&checkout_year=&checkout_month=&group_adults=2&group_children=0&no_rooms=1&from_sf=1&ss_raw=milan&ac_position=0&ac_langcode=en&ac_click_type=b&dest_id=-121726&dest_type=city&iata=MIL&place_id_lat=45.464298&place_id_lon=9.18878&search_pageview_id=130819acacd10044&search_selected=true&search_pageview_id=130819acacd10044&ac_suggestion_list_length=5&ac_suggestion_theme_list_length=0" target="_blank">
                                <button class="btn1" style="background-color: #F2DBB3;">Sopstvena organizacija</button>
                            </a>
                    </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                    <img src="Solun.jpg" alt="Solun">
            </div>
            <div class="tekst">
                    <div class="content">
                        <h2>solun</h2>
                        <a href="https://www.rapsodytravel.rs/putovanja/nova-godina/solun-nova-godina" target="_blank">
                                <button class="btn" style="background-color: #F2DBB3;">Organizovano putovanje</button>
                            </a>
                            <a href="https://www.booking.com/searchresults.html?label=gen173nr-1DCAEoggI46AdIM1gEaMEBiAEBmAExuAEXyAEM2AED6AEB-AECiAIBqAIDuAL0ip7uBcACAQ&sid=840eec3cce25f77f18dcf7150b9bd17a&sb=1&src=searchresults&src_elem=sb&error_url=https%3A%2F%2Fwww.booking.com%2Fsearchresults.html%3Flabel%3Dgen173nr-1DCAEoggI46AdIM1gEaMEBiAEBmAExuAEXyAEM2AED6AEB-AECiAIBqAIDuAL0ip7uBcACAQ%3Bsid%3D840eec3cce25f77f18dcf7150b9bd17a%3Btmpl%3Dsearchresults%3Bac_click_type%3Db%3Bac_position%3D0%3Bcity%3D-755070%3Bclass_interval%3D1%3Bdest_id%3D-121726%3Bdest_type%3Dcity%3Bdtdisc%3D0%3Bfrom_sf%3D1%3Bgroup_adults%3D2%3Bgroup_children%3D0%3Biata%3DMIL%3Binac%3D0%3Bindex_postcard%3D0%3Blabel_click%3Dundef%3Bno_rooms%3D1%3Boffset%3D0%3Bpostcard%3D0%3Braw_dest_type%3Dcity%3Broom1%3DA%252CA%3Bsb_price_type%3Dtotal%3Bsearch_selected%3D1%3Bshw_aparth%3D1%3Bslp_r_match%3D0%3Bsrc%3Dsearchresults%3Bsrc_elem%3Dsb%3Bsrpvid%3Dd84f19c55ea70027%3Bss%3DMilan%252C%2520Lombardy%252C%2520Italy%3Bss_all%3D0%3Bss_raw%3Dmilan%3Bssb%3Dempty%3Bsshis%3D0%3Bssne%3DIstanbul%3Bssne_untouched%3DIstanbul%3Btop_ufis%3D1%26%3B&ss=Thessalon%C3%ADki%2C+Macedonia%2C+Greece&is_ski_area=&ssne=Milan&ssne_untouched=Milan&city=-121726&checkin_year=&checkin_month=&checkout_year=&checkout_month=&group_adults=2&group_children=0&no_rooms=1&from_sf=1&ss_raw=thes&ac_position=0&ac_langcode=en&ac_click_type=b&dest_id=-829252&dest_type=city&iata=SKG&place_id_lat=40.633388&place_id_lon=22.941876&search_pageview_id=d84f19c55ea70027&search_selected=true&search_pageview_id=d84f19c55ea70027&ac_suggestion_list_length=5&ac_suggestion_theme_list_length=0" target="_blank">
                                <button class="btn1" style="background-color: #F2DBB3;">Sopstvena organizacija</button>
                            </a>
                    </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                    <img src="Berlin.jpg" alt="Berlin">
            </div>
            <div class="tekst">
                    <div class="content">
                        <h2>berlin</h2>
                        <a href="https://www.rapsodytravel.rs/putovanja/nova-godina/berlin" target="_blank">
                                <button class="btn" style="background-color: #F2DBB3;">Organizovano putovanje</button>
                            </a>
                            <a href="https://www.booking.com/searchresults.html?label=gen173nr-1DCAEoggI46AdIM1gEaMEBiAEBmAExuAEXyAEM2AED6AEB-AECiAIBqAIDuAL0ip7uBcACAQ&sid=840eec3cce25f77f18dcf7150b9bd17a&sb=1&src=searchresults&src_elem=sb&error_url=https%3A%2F%2Fwww.booking.com%2Fsearchresults.html%3Flabel%3Dgen173nr-1DCAEoggI46AdIM1gEaMEBiAEBmAExuAEXyAEM2AED6AEB-AECiAIBqAIDuAL0ip7uBcACAQ%3Bsid%3D840eec3cce25f77f18dcf7150b9bd17a%3Btmpl%3Dsearchresults%3Bac_click_type%3Db%3Bac_position%3D0%3Bcity%3D-121726%3Bclass_interval%3D1%3Bdest_id%3D-829252%3Bdest_type%3Dcity%3Bdtdisc%3D0%3Bfrom_sf%3D1%3Bgroup_adults%3D2%3Bgroup_children%3D0%3Biata%3DSKG%3Binac%3D0%3Bindex_postcard%3D0%3Blabel_click%3Dundef%3Bno_rooms%3D1%3Boffset%3D0%3Bpostcard%3D0%3Braw_dest_type%3Dcity%3Broom1%3DA%252CA%3Bsb_price_type%3Dtotal%3Bsearch_selected%3D1%3Bshw_aparth%3D1%3Bslp_r_match%3D0%3Bsrc%3Dsearchresults%3Bsrc_elem%3Dsb%3Bsrpvid%3D514419d10e0600e8%3Bss%3DThessalon%25C3%25ADki%252C%2520Macedonia%252C%2520Greece%3Bss_all%3D0%3Bss_raw%3Dthes%3Bssb%3Dempty%3Bsshis%3D0%3Bssne%3DMilan%3Bssne_untouched%3DMilan%3Btop_ufis%3D1%26%3B&ss=Berlin%2C+Berlin+Federal+State%2C+Germany&is_ski_area=&ssne=Thessaloniki&ssne_untouched=Thessaloniki&city=-829252&checkin_year=&checkin_month=&checkout_year=&checkout_month=&group_adults=2&group_children=0&no_rooms=1&from_sf=1&ss_raw=berli&ac_position=0&ac_langcode=en&ac_click_type=b&dest_id=-1746443&dest_type=city&iata=BER&place_id_lat=52.516214&place_id_lon=13.376817&search_pageview_id=514419d10e0600e8&search_selected=true&search_pageview_id=514419d10e0600e8&ac_suggestion_list_length=5&ac_suggestion_theme_list_length=0" target="_blank">
                                <button class="btn1" style="background-color: #F2DBB3;">Sopstvena organizacija</button>
                            </a>
                    </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                    <img src="Bukurest.jpg" alt="Bukurest">
            </div>
            <div class="tekst">
                    <div class="content">
                        <h2>bukurest</h2>
                        <a href="https://www.rapsodytravel.rs/putovanja/nova-godina/bukurest2018" target="_blank">
                                <button class="btn" style="background-color: #F2DBB3;">Organizovano putovanje</button>
                            </a>
                            <a href="https://www.booking.com/searchresults.html?label=gen173nr-1DCAEoggI46AdIM1gEaMEBiAEBmAExuAEXyAEM2AED6AEB-AECiAIBqAIDuAL0ip7uBcACAQ&sid=840eec3cce25f77f18dcf7150b9bd17a&sb=1&src=searchresults&src_elem=sb&error_url=https%3A%2F%2Fwww.booking.com%2Fsearchresults.html%3Flabel%3Dgen173nr-1DCAEoggI46AdIM1gEaMEBiAEBmAExuAEXyAEM2AED6AEB-AECiAIBqAIDuAL0ip7uBcACAQ%3Bsid%3D840eec3cce25f77f18dcf7150b9bd17a%3Btmpl%3Dsearchresults%3Bac_click_type%3Db%3Bac_position%3D0%3Bcity%3D-829252%3Bclass_interval%3D1%3Bdest_id%3D-1746443%3Bdest_type%3Dcity%3Bdtdisc%3D0%3Bfrom_sf%3D1%3Bgroup_adults%3D2%3Bgroup_children%3D0%3Biata%3DBER%3Binac%3D0%3Bindex_postcard%3D0%3Blabel_click%3Dundef%3Bno_rooms%3D1%3Boffset%3D0%3Bpostcard%3D0%3Braw_dest_type%3Dcity%3Broom1%3DA%252CA%3Bsb_price_type%3Dtotal%3Bsearch_selected%3D1%3Bshw_aparth%3D1%3Bslp_r_match%3D0%3Bsrc%3Dsearchresults%3Bsrc_elem%3Dsb%3Bsrpvid%3D4a8719df958a0056%3Bss%3DBerlin%252C%2520Berlin%2520Federal%2520State%252C%2520Germany%3Bss_all%3D0%3Bss_raw%3Dberli%3Bssb%3Dempty%3Bsshis%3D0%3Bssne%3DThessaloniki%3Bssne_untouched%3DThessaloniki%3Btop_ufis%3D1%26%3B&ss=Bucharest%2C+Bucharest+-+Ilfov+Region%2C+Romania&is_ski_area=&ssne=Berlin&ssne_untouched=Berlin&city=-1746443&checkin_year=&checkin_month=&checkout_year=&checkout_month=&group_adults=2&group_children=0&no_rooms=1&from_sf=1&ss_raw=bukur&ac_position=0&ac_langcode=en&ac_click_type=b&dest_id=-1153951&dest_type=city&iata=BUH&place_id_lat=44.4333&place_id_lon=26.1&search_pageview_id=4a8719df958a0056&search_selected=true&search_pageview_id=4a8719df958a0056&ac_suggestion_list_length=5&ac_suggestion_theme_list_length=0" target="_blank">
                                <button class="btn1" style="background-color: #F2DBB3;">Sopstvena organizacija</button>
                            </a>
                    </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                    <img src="Rim.jpg" alt="Rim">
            </div>
            <div class="tekst">
                    <div class="content">
                        <h2>rim</h2>
                        <a href="https://www.rapsodytravel.rs/putovanja/nova-godina/rim/23-hotel-holiday-inn-rome-aurelia-4" target="_blank">
                                <button class="btn" style="background-color: #F2DBB3;">Organizovano putovanje</button>
                            </a>
                            <a href="https://www.booking.com/searchresults.html?label=gen173nr-1DCAEoggI46AdIM1gEaMEBiAEBmAExuAEXyAEM2AED6AEB-AECiAIBqAIDuAL0ip7uBcACAQ&sid=840eec3cce25f77f18dcf7150b9bd17a&sb=1&src=searchresults&src_elem=sb&error_url=https%3A%2F%2Fwww.booking.com%2Fsearchresults.html%3Flabel%3Dgen173nr-1DCAEoggI46AdIM1gEaMEBiAEBmAExuAEXyAEM2AED6AEB-AECiAIBqAIDuAL0ip7uBcACAQ%3Bsid%3D840eec3cce25f77f18dcf7150b9bd17a%3Btmpl%3Dsearchresults%3Bac_click_type%3Db%3Bac_position%3D0%3Bcity%3D-1746443%3Bclass_interval%3D1%3Bdest_id%3D-1153951%3Bdest_type%3Dcity%3Bdtdisc%3D0%3Bfrom_sf%3D1%3Bgroup_adults%3D2%3Bgroup_children%3D0%3Biata%3DBUH%3Binac%3D0%3Bindex_postcard%3D0%3Blabel_click%3Dundef%3Bno_rooms%3D1%3Boffset%3D0%3Bpostcard%3D0%3Braw_dest_type%3Dcity%3Broom1%3DA%252CA%3Bsb_price_type%3Dtotal%3Bsearch_selected%3D1%3Bshw_aparth%3D1%3Bslp_r_match%3D0%3Bsrc%3Dsearchresults%3Bsrc_elem%3Dsb%3Bsrpvid%3De44419eef706006e%3Bss%3DBucharest%252C%2520Bucharest%2520-%2520Ilfov%2520Region%252C%2520Romania%3Bss_all%3D0%3Bss_raw%3Dbukur%3Bssb%3Dempty%3Bsshis%3D0%3Bssne%3DBerlin%3Bssne_untouched%3DBerlin%3Btop_ufis%3D1%26%3B&ss=Rome%2C+Lazio%2C+Italy&is_ski_area=&ssne=Bucharest&ssne_untouched=Bucharest&city=-1153951&checkin_year=&checkin_month=&checkout_year=&checkout_month=&group_adults=2&group_children=0&no_rooms=1&from_sf=1&ss_raw=rome&ac_position=0&ac_langcode=en&ac_click_type=b&dest_id=-126693&dest_type=city&iata=ROM&place_id_lat=41.89587&place_id_lon=12.482617&search_pageview_id=e44419eef706006e&search_selected=true&search_pageview_id=e44419eef706006e&ac_suggestion_list_length=5&ac_suggestion_theme_list_length=0" target="_blank">
                                <button class="btn1" style="background-color: #F2DBB3;">Sopstvena organizacija</button>
                            </a>
                    </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                    <img src="Vroclav.jpg" alt="Vroclav">
            </div>
            <div class="tekst">
                    <div class="content">
                        <h2>vroclav</h2>
                        <a href="https://www.rapsodytravel.rs/putovanja/nova-godina/vroclav" target="_blank">
                                <button class="btn" style="background-color: #F2DBB3;">Organizovano putovanje</button>
                            </a>
                            <a href="https://www.booking.com/searchresults.html?label=gen173nr-1DCAEoggI46AdIM1gEaMEBiAEBmAExuAEXyAEM2AED6AEB-AECiAIBqAIDuAL0ip7uBcACAQ&sid=840eec3cce25f77f18dcf7150b9bd17a&sb=1&src=searchresults&src_elem=sb&error_url=https%3A%2F%2Fwww.booking.com%2Fsearchresults.html%3Flabel%3Dgen173nr-1DCAEoggI46AdIM1gEaMEBiAEBmAExuAEXyAEM2AED6AEB-AECiAIBqAIDuAL0ip7uBcACAQ%3Bsid%3D840eec3cce25f77f18dcf7150b9bd17a%3Btmpl%3Dsearchresults%3Bac_click_type%3Db%3Bac_position%3D0%3Bcity%3D-1153951%3Bclass_interval%3D1%3Bdest_id%3D-126693%3Bdest_type%3Dcity%3Bdtdisc%3D0%3Bfrom_sf%3D1%3Bgroup_adults%3D2%3Bgroup_children%3D0%3Biata%3DROM%3Binac%3D0%3Bindex_postcard%3D0%3Blabel_click%3Dundef%3Bno_rooms%3D1%3Boffset%3D0%3Bpostcard%3D0%3Braw_dest_type%3Dcity%3Broom1%3DA%252CA%3Bsb_price_type%3Dtotal%3Bsearch_selected%3D1%3Bshw_aparth%3D1%3Bslp_r_match%3D0%3Bsrc%3Dsearchresults%3Bsrc_elem%3Dsb%3Bsrpvid%3D605319f9db9a006e%3Bss%3DRome%252C%2520Lazio%252C%2520Italy%3Bss_all%3D0%3Bss_raw%3Drome%3Bssb%3Dempty%3Bsshis%3D0%3Bssne%3DBucharest%3Bssne_untouched%3DBucharest%3Btop_ufis%3D1%26%3B&ss=Wroc%C5%82aw%2C+Lower+Silesia%2C+Poland&is_ski_area=&ssne=Rome&ssne_untouched=Rome&city=-126693&checkin_year=&checkin_month=&checkout_year=&checkout_month=&group_adults=2&group_children=0&no_rooms=1&from_sf=1&ss_raw=vro&ac_position=0&ac_langcode=en&ac_click_type=b&dest_id=-537080&dest_type=city&iata=WRO&place_id_lat=51.110401&place_id_lon=17.030939&search_pageview_id=605319f9db9a006e&search_selected=true&search_pageview_id=605319f9db9a006e&ac_suggestion_list_length=5&ac_suggestion_theme_list_length=0" target="_blank">
                                <button class="btn1" style="background-color: #F2DBB3;">Sopstvena organizacija</button>
                            </a>
                    </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                    <img src="Varsava.jpg" alt="Varsava">
            </div>
            <div class="tekst">
                    <div class="content">
                        <h2>Varsava</h2>
                        <a href="https://www.rapsodytravel.rs/putovanja/nova-godina/varsava" target="_blank">
                                <button class="btn" style="background-color: #F2DBB3;">Organizovano putovanje</button>
                            </a>
                            <a href="https://www.booking.com/searchresults.html?label=gen173nr-1DCAEoggI46AdIM1gEaMEBiAEBmAExuAEXyAEM2AED6AEB-AECiAIBqAIDuAL0ip7uBcACAQ&sid=840eec3cce25f77f18dcf7150b9bd17a&sb=1&src=searchresults&src_elem=sb&error_url=https%3A%2F%2Fwww.booking.com%2Fsearchresults.html%3Flabel%3Dgen173nr-1DCAEoggI46AdIM1gEaMEBiAEBmAExuAEXyAEM2AED6AEB-AECiAIBqAIDuAL0ip7uBcACAQ%3Bsid%3D840eec3cce25f77f18dcf7150b9bd17a%3Btmpl%3Dsearchresults%3Bac_click_type%3Db%3Bac_position%3D0%3Bcity%3D-126693%3Bclass_interval%3D1%3Bdest_id%3D-537080%3Bdest_type%3Dcity%3Bdtdisc%3D0%3Bfrom_sf%3D1%3Bgroup_adults%3D2%3Bgroup_children%3D0%3Biata%3DWRO%3Binac%3D0%3Bindex_postcard%3D0%3Blabel_click%3Dundef%3Bno_rooms%3D1%3Boffset%3D0%3Bpostcard%3D0%3Braw_dest_type%3Dcity%3Broom1%3DA%252CA%3Bsb_price_type%3Dtotal%3Bsearch_selected%3D1%3Bshw_aparth%3D1%3Bslp_r_match%3D0%3Bsrc%3Dsearchresults%3Bsrc_elem%3Dsb%3Bsrpvid%3D302d1a07bb6c0046%3Bss%3DWroc%25C5%2582aw%252C%2520Lower%2520Silesia%252C%2520Poland%3Bss_all%3D0%3Bss_raw%3Dvro%3Bssb%3Dempty%3Bsshis%3D0%3Bssne%3DRome%3Bssne_untouched%3DRome%3Btop_ufis%3D1%26%3B&ss=Warsaw%2C+Masovia%2C+Poland&is_ski_area=&ssne=Wroc%C5%82aw&ssne_untouched=Wroc%C5%82aw&city=-537080&checkin_year=&checkin_month=&checkout_year=&checkout_month=&group_adults=2&group_children=0&no_rooms=1&from_sf=1&ss_raw=varsa&ac_position=0&ac_langcode=en&ac_click_type=b&dest_id=-534433&dest_type=city&iata=WMI&place_id_lat=52.229553&place_id_lon=21.008821&search_pageview_id=302d1a07bb6c0046&search_selected=true&search_pageview_id=302d1a07bb6c0046&ac_suggestion_list_length=5&ac_suggestion_theme_list_length=0" target="_blank">
                                <button class="btn1" style="background-color: #F2DBB3;">Sopstvena organizacija</button>
                            </a>
                    </div>
            </div>
        </div>
        <div class="box">
            <div class="imgBox">
                    <img src="Minhen.jpg" alt="Minhen">
            </div>
            <div class="tekst">
                    <div class="content">
                        <h2>minhen</h2>
                        <a href="https://www.rapsodytravel.rs/putovanja/nova-godina/minhen-salzburg" target="_blank">
                                <button class="btn" style="background-color: #F2DBB3;">Organizovano putovanje</button>
                            </a>
                            <a href="https://www.booking.com/searchresults.html?label=gen173nr-1DCAEoggI46AdIM1gEaMEBiAEBmAExuAEXyAEM2AED6AEB-AECiAIBqAIDuAL0ip7uBcACAQ&sid=840eec3cce25f77f18dcf7150b9bd17a&sb=1&src=searchresults&src_elem=sb&error_url=https%3A%2F%2Fwww.booking.com%2Fsearchresults.html%3Flabel%3Dgen173nr-1DCAEoggI46AdIM1gEaMEBiAEBmAExuAEXyAEM2AED6AEB-AECiAIBqAIDuAL0ip7uBcACAQ%3Bsid%3D840eec3cce25f77f18dcf7150b9bd17a%3Btmpl%3Dsearchresults%3Bac_click_type%3Db%3Bac_position%3D0%3Bcity%3D-537080%3Bclass_interval%3D1%3Bdest_id%3D-534433%3Bdest_type%3Dcity%3Bdtdisc%3D0%3Bfrom_sf%3D1%3Bgroup_adults%3D2%3Bgroup_children%3D0%3Biata%3DWMI%3Binac%3D0%3Bindex_postcard%3D0%3Blabel_click%3Dundef%3Bno_rooms%3D1%3Boffset%3D0%3Bpostcard%3D0%3Braw_dest_type%3Dcity%3Broom1%3DA%252CA%3Bsb_price_type%3Dtotal%3Bsearch_selected%3D1%3Bshw_aparth%3D1%3Bslp_r_match%3D0%3Bsrc%3Dsearchresults%3Bsrc_elem%3Dsb%3Bsrpvid%3D02591a195a9d006b%3Bss%3DWarsaw%252C%2520Masovia%252C%2520Poland%3Bss_all%3D0%3Bss_raw%3Dvarsa%3Bssb%3Dempty%3Bsshis%3D0%3Bssne%3DWroc%25C5%2582aw%3Bssne_untouched%3DWroc%25C5%2582aw%3Btop_ufis%3D1%26%3B&ss=Munich%2C+Bavaria%2C+Germany&is_ski_area=&ssne=Warsaw&ssne_untouched=Warsaw&city=-534433&checkin_year=&checkin_month=&checkout_year=&checkout_month=&group_adults=2&group_children=0&no_rooms=1&from_sf=1&ss_raw=mun&ac_position=0&ac_langcode=en&ac_click_type=b&dest_id=-1829149&dest_type=city&iata=MUC&place_id_lat=48.137299&place_id_lon=11.5756&search_pageview_id=02591a195a9d006b&search_selected=true&search_pageview_id=02591a195a9d006b&ac_suggestion_list_length=5&ac_suggestion_theme_list_length=0" target="_blank">
                                <button class="btn1" style="background-color: #F2DBB3;">Sopstvena organizacija</button>
                            </a>
                    </div>
            </div>
        </div>

    </div>

</body>

</html>