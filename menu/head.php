<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/js/bootstrap.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.5.3/css/bootstrap.css" rel="stylesheet" />
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&family=Varela+Round&display=swap" rel="stylesheet">

<style>
    @charset "utf-8";
    /* CSS Document */

    body {
        margin: 0px;
        padding: 0px;
        font-size: 16px;
        font-family: 'Open Sans', sans-serif;
        color: #101010;
    }

    ul,
    li,
    ol,
    dl,
    dt,
    dd,
    form,
    p,
    img,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        margin: 0px;
        padding: 0px;
        list-style: none;
        outline: none;
        border: none;
    }

    h1,
    h2,
    h3,
    h4,
    h5,
    h6 {
        font-family: 'Varela Round', sans-serif;
    }

    .clear {
        clear: both;
    }

    a:focus {
        outline: none;
    }

    /* --- Header --- */
    #header {
        background-image: url(../images/top-right-shape.png);
        background-repeat: no-repeat;
        background-position: right top;
        padding-top: 30px;
        min-height: 820px;
        background-size: 580px 820px;
    }

    #header .topLogo {
        float: left;
        max-width: 200px;
    }

    #header .topLogo a {
        display: block;
    }

    #header .topLogo a img {
        width: 100%;
    }

    #header .navTop {
        float: right;
        padding-top: 56px;
    }

    .navTop .navbar {
        padding: 0;
    }

    .navTop a.navbar-brand {
        display: none;
    }

    .navTop .navbar-expand-lg .navbar-nav li {
        padding-left: 10px;
    }

    .navTop .navbar-expand-lg .navbar-nav li a.nav-link {
        background-color: #fff;
        border-radius: 100px;
        font-size: 14px;
        text-transform: uppercase;
        padding: 7px 15px;
        color: #101010;
        font-weight: 600;
        transition: all linear 0.3s;
    }

    .navTop .navbar-expand-lg .navbar-nav li a.nav-link:hover,
    .navTop .navbar-expand-lg .navbar-nav li.active a {
        background: #000;
        color: #fff;
        box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.25);
    }

    /* --- Sticky Menu --- */
    .stuck {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        background: #be1623;
        z-index: 10;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.25);
        padding: 30px 0;
    }

    #header .stuck .topLogo {
        max-width: 120px;
        position: absolute;
        left: 15px;
    }

    #header .stuck .topLogo a {
        padding: 10px;
        border-radius: 10px;
        background: #fff;
        box-shadow: 0px 0px 8px rgba(0, 0, 0, 0.25);
    }

    #header .stuck .navTop {
        padding-top: 0;
    }

    #header .stuck .menuBarTop .container {
        position: relative;
    }

    .stuck .navTop .navbar-expand-lg .navbar-nav li a.nav-link {
        background: transparent;
        box-shadow: none;
        color: #fff;
        padding-left: 0px;
        padding-right: 0px;
        position: relative;
    }

    .stuck .navTop .navbar-expand-lg .navbar-nav li a.nav-link:before {
        width: 0;
        height: 2px;
        background: #fee902;
        content: '';
        position: absolute;
        left: 0;
        bottom: 0;
        transition: all linear 0.3s;
    }

    .stuck .navTop .navbar-expand-lg .navbar-nav li a.nav-link:hover:before,
    .stuck .navTop .navbar-expand-lg .navbar-nav li.active a:before {
        width: 100%;
    }

    .stuck .navTop .navbar-expand-lg .navbar-nav li a.nav-link:hover,
    .stuck .navTop .navbar-expand-lg .navbar-nav li.active a {
        color: #fee902;
        background: transparent;
    }

    .stuck .navTop .navbar-expand-lg .navbar-nav li {
        padding-left: 25px;
    }

    @media (max-width: 1199px) {
        #header .topLogo {
            float: none;
            max-width: 140px;
            margin-left: auto;
            margin-right: auto;
        }

        #header .navTop {
            padding-top: 25px;
            float: none;
        }

        .navTop .navbar-expand-lg .navbar-nav li {
            padding-left: 8px;
            padding-right: 8px;
        }

        .navTop #navbarNav {
            justify-content: center;
        }

        .stuck .navTop .navbar-expand-lg .navbar-nav li {
            padding-right: 0;
        }

        #header .stuck .navTop {
            float: right;
        }
    }

    @media (max-width: 991px) {
        #header {
            background: url(../images/mountain-bg.jpg) repeat-x;
        }

        #header .stuck .topLogo {
            position: static;
            float: left;
            margin-right: 30px;
        }

        #header .topLogo a {
            background: #fff;
            padding: 10px;
            border-radius: 5px;
        }

        .stuck {
            padding-top: 15px;
            padding-bottom: 15px;
        }

        #header .stuck .navTop {
            padding-top: 24px;
            float: none;
        }

        .navTop a.navbar-brand {
            display: block;
            color: #fff;
            font-weight: 600;
            font-size: 14px;
            text-transform: uppercase;
        }

        #header .navTop {
            float: none;
        }

        .navTop .navbar {
            background: #be1623;
            border-radius: 10px;
            padding: 10px 15px;
        }

        .navTop .navbar-toggler {
            background: #fff;
        }

        .navTop .navbar-toggler i {
            margin-top: 5px;
        }

        .navTop .navbar-toggler:focus {
            outline: none;
        }

        .navTop .navbar-expand-lg .navbar-nav li {
            padding-left: 0;
            padding-bottom: 5px;
            padding-right: 0;
        }

        .navTop .navbar-expand-lg .navbar-nav li a.nav-link {
            border-radius: 3px;
            background: transparent;
            color: #fff;
        }

        .navTop .navbar-expand-lg .navbar-nav li.active a.nav-link {
            background: #101010;
        }

        .navTop #navbarNav {
            padding-top: 10px;
        }

        .stuck .navTop .navbar {
            padding: 0;
        }

        .stuck .navTop .navbar-expand-lg .navbar-nav li {
            padding-left: 0;
        }

        .stuck .navTop .navbar-expand-lg .navbar-nav li a.nav-link:hover,
        .stuck .navTop .navbar-expand-lg .navbar-nav li.active a {
            background: transparent;
            color: #fff;
        }
    }

    @media (max-width: 575px) {
        #header .stuck .topLogo {
            max-width: 80px;
            position: relative;
            z-index: 3;
            left: 0;
        }

        #header .stuck .navTop {
            padding-top: 12px;
            position: relative;
            z-index: 1;
        }

        #header .stuck .topLogo a {
            padding: 6px;
            border-radius: 3px;
        }
    }

    /* --- Home Banner --- */
    .homeBanner {
        padding-top: 50px;
        position: relative;
        padding-bottom: 100px;
    }

    .bannerLeft {
        position: relative;
        z-index: 2;
    }

    .bannerLeft h1 {
        font-size: 64px;
        font-weight: bold;
        padding-bottom: 15px;
    }

    .bannerLeft p {
        color: #666;
        line-height: 32px;
    }

    .bannerLeft .btns {
        padding-top: 30px;
    }

    .bannerLeft .btns a {
        background: #fee902;
        color: #101010;
        padding: 8px 18px;
        font-weight: 600;
        margin-right: 15px;
        position: relative;
        font-size: 15px;
        display: inline-block;
        border-radius: 100px;
        overflow: hidden;
    }

    .bannerLeft .btns a:not(:first-child) {
        background: #be1623;
        color: #fff;
        margin-right: 0;
    }

    .bannerLeft .btns a:before {
        position: absolute;
        left: 0;
        bottom: 0;
        width: 0;
        height: 2px;
        transition: all ease 0.5s;
        content: '';
    }

    .bannerLeft .btns a:hover {
        text-decoration: none;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.25);
        background: #fff;
        color: #101010;
    }

    .bannerLeft .btns a:hover:before {
        width: 100%;
        background: #101010;
    }

    .dish {
        position: absolute;
        width: 100%;
        max-width: 400px;
        bottom: -200px;
        left: 0;
        z-index: 1;
        opacity: 0.2;
    }

    .dish img {
        width: 100%;
    }

    .bannerRight {
        position: relative;
    }

    .tomato {
        position: absolute;
        width: 100%;
        max-width: 100px;
        top: -50px;
        right: 0;
        z-index: 2;
    }

    .tomato img {
        width: 100%;
    }

    .leaf {
        position: absolute;
        width: 100%;
        max-width: 140px;
        bottom: -65px;
        left: 50%;
        transform: translateX(-50%);
        z-index: 2;
    }

    .leaf img {
        width: 100%;
    }

    .spices {
        position: absolute;
        width: 100%;
        max-width: 140px;
        top: 0;
        left: 15px;
        z-index: 2;
    }

    .spices img {
        width: 100%;
    }

    .homeBanner .bx-wrapper {
        padding: 10px;
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.25);
        margin-bottom: 0;
    }

    @media (max-width: 1199px) {
        .bannerLeft h1 {
            font-size: 48px;
            line-height: 64px;
            padding-bottom: 5px;
        }

        .bannerLeft {
            padding-bottom: 50px;
        }
    }

    @media (max-width: 575px) {
        .bannerLeft h1 {
            font-size: 32px;
            line-height: 44px;
        }

        .tomato {
            max-width: 60px;
            top: -40px;
            right: 10px;
        }

        .spices {
            max-width: 90px;
        }

        .leaf {
            max-width: 80px;
            bottom: -35px;
        }
    }

    /* --- Offers Home --- */
    .offersHome {
        padding-bottom: 40px;
    }

    .offersHome .mb30 {
        margin-bottom: 30px;
    }

    .offersHome .block {
        background-color: #fff;
        border: 5px solid #101010;
        position: relative;
        z-index: 2;
        text-align: center;
        padding: 25px 25px 15px 25px;
        height: 100%;
    }

    .offersHome .block h2 {
        font-size: 24px;
        font-weight: bold;
        color: #be1623;
        line-height: 32px;
        padding-bottom: 10px;
    }

    .offersHome .block p {
        line-height: 28px;
        padding-bottom: 10px;
    }

    .offersHome .block h3 {
        font-size: 20px;
        font-weight: bold;
        color: #be1623;
        line-height: 26px;
        padding-bottom: 5px;
        padding-top: 5px;
    }

    .offersHome .btnA a {
        background: #101010;
        display: inline-block;
        padding: 8px 15px;
        border-radius: 100px;
        color: #fff;
        font-weight: 600;
        font-size: 14px;
        text-transform: uppercase;
    }

    .offersHome .btnA a:hover {
        text-decoration: none;
        background: #be1623;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.35);
    }

    /* --- Home Four Menu --- */
    .home4menu {
        position: relative;
        z-index: 2;
        padding-bottom: 40px;
    }

    .home4menu ul li {
        padding-bottom: 30px;
    }

    .home4menu ul li a {
        display: block;
        background: #fff;
        padding: 20px 25px;
        border-radius: 100px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.25);
        text-align: center;
        color: #101010;
        font-weight: 600;
        transition: all linear 0.3s;
    }

    .home4menu ul li a i {
        color: #be1623;
        font-size: 24px;
        margin-right: 5px;
    }

    .home4menu ul li a:hover {
        text-decoration: none;
        transform: translateY(-10px);
    }

    /* --- Easy Order Steps --- */
    .easyOrderSteps {
        text-align: center;
    }

    .easyOrderSteps h2 {
        text-align: center;
        font-size: 32px;
        font-weight: bold;
        padding-bottom: 20px;
        position: relative;
        margin-bottom: 30px;
    }

    .easyOrderSteps h2:before {
        position: absolute;
        width: 102px;
        height: 6px;
        background-size: 102px 6px;
        background-image: url(../images/divider.png);
        content: '';
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
    }

    .easyOrderSteps .pic {
        width: 100%;
        max-width: 150px;
        margin: 0px auto 0px auto;
    }

    .easyOrderSteps .pic img {
        width: 100%;
    }

    .easyOrderSteps h3 {
        font-weight: bold;
        font-size: 20px;
        padding-bottom: 25px;
    }

    .easyOrderSteps .line {
        background: #fee902;
        width: 100%;
        height: 20px;
        border-radius: 100px;
        max-width: 300px;
        margin: 0px auto 30px auto;
        position: relative;
    }

    .easyOrderSteps .step {
        width: 52px;
        height: 52px;
        background: #be1623;
        position: absolute;
        left: 50%;
        font-weight: bold;
        font-size: 24px;
        border-radius: 50%;
        color: #fff;
        transform: translateX(-50%);
        top: -16px;
        padding-top: 8px;
    }

    .easyOrderSteps .moreBtn {
        padding-top: 50px;
        padding-bottom: 70px;
    }

    .easyOrderSteps .moreBtn a {
        background: #101010;
        color: #fff;
        font-size: 15px;
        font-weight: 600;
        text-transform: uppercase;
        display: inline-block;
        padding: 8px 25px;
        border-radius: 50px;
        transition: all linear 0.3s;
    }

    .easyOrderSteps .moreBtn a:hover {
        text-decoration: none;
        background: #be1623;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.25);
    }

    /* --- Popular Dishes --- */
    .popularDishes {
        background: #ecf0f1;
        padding-top: 60px;
        padding-bottom: 30px;
    }

    .popularDishes h2 {
        text-align: center;
        font-size: 32px;
        font-weight: bold;
        padding-bottom: 20px;
        position: relative;
        margin-bottom: 30px;
    }

    .popularDishes h2:before {
        position: absolute;
        width: 102px;
        height: 6px;
        background-size: 102px 6px;
        background-image: url(../images/divider.png);
        content: '';
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
    }

    .popularDishes .nav-pills .nav-link {
        background: transparent;
        position: relative;
        color: #101010;
        padding: 20px 20px 20px 80px;
        display: block;
        border-radius: 100px;
        margin-bottom: 20px;
        font-weight: 600;
    }

    .popularDishes .nav-pills .nav-link span {
        position: absolute;
        top: 12px;
        left: 20px;
        width: 40px;
        display: block;
        border: 1px solid #be1623;
        border-radius: 50%;
        padding: 5px;
    }

    .popularDishes .nav-pills .nav-link span img {
        width: 100%;
    }

    .popularDishes .nav-pills .nav-link.active,
    .popularDishes .nav-pills .show>.nav-link,
    .popularDishes .nav-pills .nav-link:hover {
        background: #fff;
        color: #be1623;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.25);
    }

    .popularDishes .tab-content li {
        padding-bottom: 30px;
    }

    .popularDishes .block {
        border-radius: 10px;
        overflow: hidden;
        background: #fff;
        padding-bottom: 15px;
        width: 100%;
        max-width: 400px;
        margin-left: auto;
        margin-right: auto;
    }

    .popularDishes .block .pic {
        padding-bottom: 15px;
    }

    .popularDishes .block img {
        width: 100%;
    }

    .popularDishes .block h3 {
        font-size: 20px;
        font-weight: bold;
        padding: 0px 20px 7px 20px;
    }

    .popularDishes .block p {
        color: #be1623;
        font-weight: 600;
        padding: 0px 20px;
    }

    /* --- About Us Page --- */
    .aboutHome {
        padding-top: 60px;
        padding-bottom: 60px;
    }

    .aboutHome .pic img {
        width: 100%;
    }

    .aboutHome .mid {
        margin-left: -100px;
        background: #fff;
        position: relative;
        padding: 30px 30px 40px 30px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.25);
    }

    .aboutHome .mid h1 {
        font-weight: bold;
        font-size: 32px;
        text-transform: uppercase;
        padding-bottom: 15px;
    }

    .aboutHome .mid h2 {
        font-size: 16px;
        text-transform: uppercase;
        padding-bottom: 10px;
        color: #666;
    }

    .aboutHome .mid p {
        font-size: 15px;
        line-height: 28px;
    }

    .aboutHome .more {
        position: absolute;
        left: 30px;
        bottom: -18px;
    }

    .aboutHome .more a {
        background: #101010;
        display: block;
        padding: 8px 25px;
        color: #fff;
        border-radius: 100px;
        text-transform: uppercase;
        font-size: 14px;
        font-weight: 600;
        transition: all linear 0.3s;
    }

    .aboutHome .more a:hover {
        background: #be1623;
        text-decoration: none;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.25);
    }

    @media (max-width: 991px) {
        .aboutHome .pic {
            padding-bottom: 30px;
        }

        .aboutHome .mid {
            margin-left: 0;
        }
    }

    /* --- Three Boxes Home --- */
    .threeBoxesHome {
        padding-bottom: 30px;
    }

    .threeBoxesHome li {
        margin-bottom: 30px;
    }

    .threeBoxesHome a {
        display: block;
        position: relative;
    }

    .threeBoxesHome img {
        width: 100%;
    }

    .threeBoxesHome h4 {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #be1623;
        text-align: center;
        border-radius: 100px;
        font-size: 15px;
        text-transform: uppercase;
        color: #fff;
        padding: 10px 25px;
        font-weight: 600;
        min-width: 200px;
        z-index: 1;
        transition: all linear 0.5s;
    }

    .threeBoxesHome .overlay {
        background: rgba(0, 0, 0, 0.35);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transition: all linear 0.5s;
    }

    .threeBoxesHome a:hover h4 {
        background: #101010;
    }

    .threeBoxesHome a:hover .overlay {
        background: linear-gradient(135deg,
                rgba(254, 233, 2, 1) 0%,
                rgba(190, 22, 35, 1) 100%);
    }

    /* --- Map --- */
    .mapHome {
        margin-bottom: 2px;
    }

    .mapHome iframe {
        display: block;
    }

    /* --- Footer --- */
    .footerTop {
        background: #292933;
        padding-top: 60px;
        padding-bottom: 30px;
    }

    .footerTop .cMargin {
        padding-bottom: 30px;
    }

    .infoFooter {
        display: flex;
        /* align-items: center; */
    }

    .infoFooter h2 {
        color: #fff;
        font-size: 32px;
        font-weight: bold;
        padding-bottom: 15px;
        position: relative;
        margin-bottom: 20px;
    }

    .infoFooter h2:before {
        position: absolute;
        width: 102px;
        height: 6px;
        background-size: 102px 6px;
        background-image: url(../images/divider.png);
        content: '';
        bottom: 0;
    }

    .infoFooter p {
        color: #fff;
        line-height: 28px;
        padding-bottom: 25px;
    }

    .infoFooter h3 {
        font-size: 20px;
        color: #fff;
        text-transform: uppercase;
        font-weight: bold;
        padding-bottom: 15px;
    }

    .infoFooter ul li {
        color: #fff;
        position: relative;
        padding: 0px 0px 10px 35px;
        font-size: 14px;
        line-height: 24px;
    }

    .infoFooter ul li i {
        color: #fee902;
        position: absolute;
        top: 5px;
        left: 10px;
    }

    .footerTop .block {
        padding: 10px;
        background: #fff;
        height: 100%;
        text-align: center;
    }

    .footerTop .block.tripA {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .footerLast {
        background: #383844;
        padding: 10px 15px;
        text-align: center;
        color: #fff;
        font-size: 14px;
    }

    .footerLast a {
        color: #fee902;
    }

    .footerLast a:hover {
        text-decoration: underline;
        color: #fff;
    }

    /* --- Header in Inner Page --- */
    #header.inner {
        padding-top: 0;
        background: none;
        min-height: 1px;
    }

    #header.inner .sticky-wrapper {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        z-index: 99;
    }

    #header.inner h2 {
        text-align: center;
        font-size: 44px;
        text-transform: uppercase;
        position: relative;
        font-weight: bold;
        margin-bottom: 50px;
        padding-bottom: 10px;
        padding-top: 140px;
    }

    #header.inner h2:before {
        position: absolute;
        width: 102px;
        height: 6px;
        background-size: 102px 6px;
        background-image: url(../images/divider.png);
        content: '';
        bottom: 0;
        left: 50%;
        transform: translateX(-50%);
    }

    /* --- Right Side --- */
    .rightSide li {
        margin-bottom: 30px;
    }

    .rightSide a {
        display: block;
        position: relative;
        border-radius: 10px;
        overflow: hidden;
    }

    .rightSide img {
        width: 100%;
    }

    .rightSide h4 {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background: #be1623;
        text-align: center;
        border-radius: 100px;
        font-size: 15px;
        text-transform: uppercase;
        color: #fff;
        padding: 10px 25px;
        font-weight: 600;
        min-width: 200px;
        z-index: 1;
        transition: all linear 0.5s;
    }

    .rightSide .overlay {
        background: rgba(0, 0, 0, 0.35);
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        transition: all linear 0.5s;
    }

    .rightSide a:hover h4 {
        background: #101010;
    }

    .rightSide a:hover .overlay {
        background: linear-gradient(135deg,
                rgba(254, 233, 2, 1) 0%,
                rgba(190, 22, 35, 1) 100%);
    }

    /* --- Left Side --- */
    .leftSide {
        padding-bottom: 30px;
    }

    .leftSide p {
        line-height: 30px;
        padding-bottom: 12px;
    }

    /* --- Contact Info on Contact Page --- */
    .contactBox .contactInfo li {
        padding-bottom: 30px;
    }

    .contactBox .contactInfo .icon {
        width: 100px;
        height: 100px;
        background: #be1623;
        margin: 0px auto 15px auto;
        border-radius: 50%;
        text-align: center;
        color: #fff;
        padding-top: 27px;
    }

    .contactBox .contactInfo .icon i {
        font-size: 44px;
    }

    .contactBox .contactInfo h4 {
        font-size: 15px;
        text-align: center;
        line-height: 28px;
    }

    .contactForm {
        padding-bottom: 60px;
    }

    .InsField {
        position: relative;
        padding-left: 40px;
        margin-bottom: 30px;
    }

    .InsField .icon {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 40px;
        height: 40px;
        border-top: 1px solid #444;
        border-bottom: 1px solid #444;
        border-left: 1px solid #444;
        text-align: center;
        padding-top: 7px;
    }

    .InsField input.form-control {
        border: 1px solid #444;
        border-radius: 0px;
        font-size: 14px;
        height: 40px;
        color: #333;
    }

    .InsField input.form-control:focus {
        box-shadow: none;
    }

    .TextField textarea {
        border: 1px solid #444;
        font-size: 14px;
        color: #333;
        height: 120px;
        resize: none;
        border-radius: 0px;
    }

    .TextField {
        margin-bottom: 30px;
    }

    .TextField textarea.form-control:focus {
        box-shadow: none;
        border: 1px solid #444;
    }

    .captchaArea {
        margin-bottom: 30px;
    }

    .captchaArea input.form-control {
        border: 1px solid #444;
        border-radius: 0px;
        font-size: 14px;
        height: 40px;
        color: #333;
        margin-bottom: 5px;
    }

    .captchaArea span {
        display: block;
        font-size: 12px;
    }

    .captchaArea input.form-control:focus {
        box-shadow: none;
        border: 1px solid #444;
    }

    .subButtons input {
        border: none;
        border: 2px solid #be1623;
        border-radius: 0px;
        background: transparent;
        color: #be1623;
        font-weight: bold;
        text-transform: uppercase;
        padding-left: 25px;
        padding-right: 25px;
    }

    .subButtons input:hover,
    .subButtons input:focus {
        color: #fff;
        background: #be1623;
    }

    .subButtons input[type='reset'] {
        border-color: #fee902;
        color: #fee902;
    }

    .subButtons input[type='reset']:hover,
    .subButtons input[type='reset']:focus {
        color: #fff;
        background: #fee902;
    }

    .subButtons input:focus {
        outline: none;
        box-shadow: none;
    }

    .errorMessage {
        background: #c0392b;
        color: #fff;
        padding: 10px 15px;
        font-weight: bold;
        text-align: center;
        margin-bottom: 30px;
    }

    .SuccessMessage {
        background: #be1623;
        color: #fff;
        padding: 10px 15px;
        font-weight: bold;
        text-align: center;
        margin-bottom: 30px;
    }

    /* --- Contact Page --- */
    #msgcontent {
        background: #d4211c;
        display: block;
        max-width: 100%;
        width: 100%;
        min-width: 150px;
        text-align: center;
        color: #fff;
        font-size: 16px;
        text-transform: uppercase;
        padding: 10px;
    }

    #msg {
        display: none;
        padding-left: 0px;
        position: fixed;
        z-index: 200;
        left: 0px !important;
        bottom: 0px !important;
        width: 100%;
        top: unset !important;
    }

    /* --- Booking Form --- */
    .bookingForm {
        padding-bottom: 40px;
    }

    .bookingForm h2 {
        font-size: 20px;
        padding-bottom: 20px;
    }

    .bookingForm input[type='text'],
    .bookingForm input[type='email'],
    .bookingForm input[type='tel'],
    .bookingForm input[type='date'],
    .bookingForm select,
    .bookingForm input[type='number'] {
        border-radius: 0;
        font-size: 14px;
    }

    .bookingForm input:focus {
        box-shadow: none;
    }

    .bookingForm input[type='submit'],
    .bookingForm input[type='reset'] {
        border: none;
        background: #666;
        color: #fff;
        font-weight: 600;
        border-radius: 0;
    }

    .bookingForm input[type='reset'] {
        background: #999;
    }

    .bookingForm input[type='submit']:hover {
        background: #be1623;
    }

    .bookingForm textarea {
        height: 140px;
        resize: none;
        border-radius: 0;
        font-size: 14px;
    }

    .bookingForm textarea:focus {
        box-shadow: none;
    }

    .bookingForm .sent {
        color: #39a206;
        font-size: 14px;
        padding-bottom: 20px;
    }

    /* --- Gallery --- */
    ul#grid.grid {
        width: 100%;
        margin: 0;
        max-width: none;

        padding-bottom: 40px;
    }

    ul#grid.grid li {
        padding: 10px;
        width: 33.3333%;
    }

    @media (max-width: 991px) {
        ul#grid.grid li {
            width: 50%;
        }
    }

    @media (max-width: 575px) {
        ul#grid.grid li {
            width: 100%;
        }
    }

    /* --- Menu Block --- */
    .menuNotice {
        text-align: center;
        padding-left: 15px;
        padding-right: 15px;
        padding-bottom: 30px;
        width: 100%;
        max-width: 900px;
        margin-left: auto;
        margin-right: auto;
    }

    .menuBlock {
        padding-bottom: 40px;
    }

    .menuBlock h2 {
        font-size: 24px;
        font-weight: bold;
        padding-bottom: 15px;
        position: relative;
        margin-bottom: 20px;
    }

    .menuBlock h2:before {
        position: absolute;
        width: 85px;
        height: 5px;
        background-size: 85px 5px;
        background-image: url(../images/divider.png);
        content: '';
        bottom: 0;
        left: 0;
    }

    .menuBlock ul li h4 {
        font-size: 16px;
        font-weight: bold;
        padding-bottom: 5px;
    }

    .menuBlock ul li .menuDesc {
        font-size: 14px;
        line-height: 24px;
    }

    .menuBlock ul li .menuItem {
        position: relative;
        padding-right: 70px;
        padding-bottom: 10px;
        margin-bottom: 10px;
        border-bottom: 1px dashed #ddd;
    }

    .menuBlock ul li .price {
        font-weight: bold;
        font-family: 'Varela Round', sans-serif;
        color: #be1623;
        position: absolute;
        top: 0px;
        right: 0;
    }

    .menuBlock p {
        color: #666;
        font-size: 14px;
        padding-bottom: 15px;
    }

    .menuNotice p {
        font-size: 14px;
        color: #be1623;
        padding-bottom: 15px;
    }

    .menuNotice li {
        font-size: 14px;
        margin-right: 15px;
        display: inline-block;
    }

    li span.chilly-1 {
        width: 16px;
        height: 16px;
        display: inline-block;
        background-image: url(https://i.imgur.com/5IRfmra.png);
        background-size: 16px 16px;
        margin-right: 5px;
    }

    li span.chilly-2 {
        width: 26px;
        height: 16px;
        display: inline-block;
        background-image: url(https://i.imgur.com/SFXXODX.png);
        background-size: 26px 16px;
        margin-right: 5px;
    }

    li span.chilly-2 {
        width: 26px;
        height: 16px;
        display: inline-block;
        background-image: url(https://i.imgur.com/SFXXODX.png);
        background-size: 26px 16px;
        margin-right: 5px;
    }

    li span.chilly-3 {
        width: 36px;
        height: 16px;
        display: inline-block;
        background-image: url(https://i.imgur.com/NvGD5aJ.png);
        background-size: 36px 16px;
        margin-right: 5px;
    }

    li span.veg {
        width: 16px;
        height: 16px;
        display: inline-block;
        background-image: url(https://i.imgur.com/v8cpiE3.png);
        background-size: 16px 16px;
        margin-right: 5px;
    }

    li span.nuts {
        width: 16px;
        height: 16px;
        display: inline-block;
        background-image: url(https://i.imgur.com/PI5oXn3.png);
        background-size: 16px 16px;
        margin-right: 5px;
    }

    /* --- Back to Top --- */
    #back-top {
        position: fixed;
        bottom: 20px;
        right: 20px;
        z-index: 99;
    }

    #back-top a {
        background: #fee902;
        color: #101010;
        display: block;
        padding: 8px 15px;
        border-radius: 5px;
    }

    #back-top a:hover {
        box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.35);
    }

    /* --- Settings
Title Font: font-family: 'Varela Round', sans-serif;
Text Font: font-family: 'Open Sans', sans-serif;
Black Color: #101010;
Red Color: #be1623;
Yellow Color: #fee902;
--- */
</style>