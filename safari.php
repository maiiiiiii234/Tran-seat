<?php
require_once 'serverconf.php';
$sql = "SELECT * FROM safari";
$items = $link->query($sql);
?>

<html>

<head>
    <title> Safari Tourism</title>
    <meta href="/image/icon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.css">
    </link>
    <link rel="stylesheet" type="text/css" href="services.css" title="style">
    <link rel="icon" href="image/icon.jpg" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

    <link rel="preconnect" href="<https://app.snipcart.com>" />
    <link rel="preconnect" href="<https://cdn.snipcart.com>" />
    <link rel="stylesheet" href="https://cdn.snipcart.com/themes/v3.3.0/default/snipcart.css" />


</head>

<body>
    <script>
        window.SnipcartSettings = {
            publicApiKey: "ZmYwY2ZiOTctMTAwMi00ZGM4LWJiMWItYzllYWQzNDMyZjg5NjM4MDczMDEwMjkzODY5Mjgw",
            loadStrategy: "on-user-interaction",
            modalStyle: "side",
        };

        (function () { var c, d; (d = (c = window.SnipcartSettings).version) != null || (c.version = "3.0"); var s, S; (S = (s = window.SnipcartSettings).timeoutDuration) != null || (s.timeoutDuration = 2750); var l, p; (p = (l = window.SnipcartSettings).domain) != null || (l.domain = "cdn.snipcart.com"); var w, u; (u = (w = window.SnipcartSettings).protocol) != null || (w.protocol = "https"); var m, g; (g = (m = window.SnipcartSettings).loadCSS) != null || (m.loadCSS = !0); var y = window.SnipcartSettings.version.includes("v3.0.0-ci") || window.SnipcartSettings.version != "3.0" && window.SnipcartSettings.version.localeCompare("3.4.0", void 0, { numeric: !0, sensitivity: "base" }) === -1, f = ["focus", "mouseover", "touchmove", "scroll", "keydown"]; window.LoadSnipcart = o; document.readyState === "loading" ? document.addEventListener("DOMContentLoaded", r) : r(); function r() { window.SnipcartSettings.loadStrategy ? window.SnipcartSettings.loadStrategy === "on-user-interaction" && (f.forEach(function (t) { return document.addEventListener(t, o) }), setTimeout(o, window.SnipcartSettings.timeoutDuration)) : o() } var a = !1; function o() { if (a) return; a = !0; let t = document.getElementsByTagName("head")[0], n = document.querySelector("#snipcart"), i = document.querySelector('src[src^="'.concat(window.SnipcartSettings.protocol, "://").concat(window.SnipcartSettings.domain, '"][src$="snipcart.js"]')), e = document.querySelector('link[href^="'.concat(window.SnipcartSettings.protocol, "://").concat(window.SnipcartSettings.domain, '"][href$="snipcart.css"]')); n || (n = document.createElement("div"), n.id = "snipcart", n.setAttribute("hidden", "true"), document.body.appendChild(n)), h(n), i || (i = document.createElement("script"), i.src = "".concat(window.SnipcartSettings.protocol, "://").concat(window.SnipcartSettings.domain, "/themes/v").concat(window.SnipcartSettings.version, "/default/snipcart.js"), i.async = !0, t.appendChild(i)), !e && window.SnipcartSettings.loadCSS && (e = document.createElement("link"), e.rel = "stylesheet", e.type = "text/css", e.href = "".concat(window.SnipcartSettings.protocol, "://").concat(window.SnipcartSettings.domain, "/themes/v").concat(window.SnipcartSettings.version, "/default/snipcart.css"), t.prepend(e)), f.forEach(function (v) { return document.removeEventListener(v, o) }) } function h(t) { !y || (t.dataset.apiKey = window.SnipcartSettings.publicApiKey, window.SnipcartSettings.addProductBehavior && (t.dataset.configAddProductBehavior = window.SnipcartSettings.addProductBehavior), window.SnipcartSettings.modalStyle && (t.dataset.configModalStyle = window.SnipcartSettings.modalStyle), window.SnipcartSettings.currency && (t.dataset.currency = window.SnipcartSettings.currency), window.SnipcartSettings.templatesUrl && (t.dataset.templatesUrl = window.SnipcartSettings.templatesUrl)) } })();
    </script>
    <?php
        include_once("nav.html");
    ?>
    <main>
        <?php
        while ($row = mysqli_fetch_assoc($items)) {
        ?>
        <div class="row">

            <div class="card">
                <div class="card1"><img src="<?php echo $row["imgp"]; ?>" width="200px" height="240px"></div>
                <!--image-->
                <!--col1-->
                <div class="place">
                    <h1><?php echo $row["itemname"]; ?> </h1>
                    <h3><?php echo $row["city"]; ?></h3>
                </div>
                <!--place-->
                <!--col2 row1-->
                <div class="details">
                    <!--details-->
                    <!--col2 row2-->
                    <ul>
                        <li><i class="<?php echo $row["checkicon"]; ?>"></i> <?php echo $row["item1"]; ?></li>
                        <li><i class="<?php echo $row["checkicon2"]; ?>"></i> <?php echo $row["item2"]; ?></li>
                        <li><i class="<?php echo $row["checkicon3"]; ?>"></i> <?php echo $row["item3"]; ?></li>
                        <li><i class="<?php echo $row["checkicon4"]; ?>"></i> <?php echo $row["item4"]; ?></li>
                        <li><i class="<?php echo $row["checkicon5"]; ?>"></i> <?php echo $row["item5"]; ?></li>
                        <li><i class="<?php echo $row["checkicon6"]; ?>"></i> <?php echo $row["item6"]; ?></li>
                        <li><i class="<?php echo $row["checkicon7"]; ?>"></i> <?php echo $row["item7"]; ?></li>
                        <li><i class="<?php echo $row["checkicon8"]; ?>"></i> <?php echo $row["item8"]; ?></li>
                    </ul>
                </div>
                <span class="prc">$<?php echo $row["price"]; ?></span>
                <button class="btn" id="btn"><a class="snipcart-add-item" data-item-id="<?php echo $row["itemname"]; ?>"
                        data-item-price="<?php echo $row["price"]; ?>"
                        data-item-description="<?php echo $row["incartdesc"]; ?>"
                        data-item-image="<?php echo $row["imgp"]; ?>" data-item-name="<?php echo $row["itemname"]; ?>"
                        href="#">Visit it</a></button>

                <!--button-->
                <!--col3-->
            </div>
        </div>

        <?php
        }
        ?>
    </main>
    <?php
        include_once("footer.html");
   ?>
</body>

</html>