<?php
//error_reporting(0);
//$api = "5443700122:AAFYxyGEN3dCd66QVjaVGEmrZBBsmcFioBs";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.telegram.org/bot5459630183: /getupdates');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');

$response = curl_exec($ch);

curl_close($ch);

$json = json_decode($response);

$messages = array_reverse($json->result);

//die(json_encode($messages));

$len = count($messages);

if ($len > 10) {
    $len = 10;
}

echo $message->channel_post->text;

?>

<!-- this theme is a extream modified version of https://github.com/SlamDevs/slam-mirrorbot/commit/1e572f4fa3625ecceb953ce6d3e7cf7334a4d542#diff-c3d91f56f4c5d8b5af3d856d15a76bd5f00aa38d712691b91501734940761bdd
# (c) YashDK [yash-dk@github] @bipuldey19 () -->

<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mirror Chan</title>
    <link rel="icon" href="https://telegra.ph/file/a8e7668a0f9f5f6cab6e6.jpg" type="image/jpg">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/gh/Tas33n/tg-mirrorbot-web@main/style.css" rel="stylesheet" />
    <style>

    </style>
</head>

<body>

    <!--*****************************************************************************************************************
                          Redesigned and coded by @lamb3rt
                          tg : https://t.me/lamb3rt
                          git: https://www.github.com/tas33n
***********************************************************************************************************************-->

    <header>
        <div class="brand">
            <img class="logo" src="https://telegra.ph/file/a8e7668a0f9f5f6cab6e6.jpg" alt="logo" />
            <a href="https://t.me/unshort_bdbot">
                <h2 class="name">Mirror Chan<span style="    font-size: 12px;
    margin-left: 10px;
    position: absolute;color: #07ffa1;">plugins</span></h2>
            </a>
        </div>
        <div class="social">
            <a href="https://www.github.com/tas33n"><i class="fab fa-github"></i></a>
            <a href="https://t.me/lamb3rt"><i class="fab fa-telegram"></i></a>
        </div>
    </header>

    <div class="title">
        <div class="dynamic-title cd-headline clip is-full-width">
            <span>UnShort &nbsp;</span>
            <span class="cd-words-wrapper">

                <b class="is-visible"> &nbsp;<span class="gold-title">Bdix cloud.</span></b>
                <b> &nbsp;<span class="gold-title">More in future.</span></b>
                <!--<b>&nbsp;<span class="gold-title">YT Media</span></b>-->
                <!--<b>&nbsp;<span class="gold-title">YT Playlist</span></b>-->

            </span>

            <p style="font-size: 14px;
    text-transform: capitalize;font-weight: 400;">Forward your mirror message to <a href="https://t.me/unshort_bdbot" style="color: #00ffa1;
    text-decoration: revert;"> this Bot </a> and return here to get direct link. </p>
        </div>

    </div>

    <!--section>
    <form id="main">
      <div class="col-sm-12">
        <select name="method" class="opt col-2" id="type">
          <option value="mirror">Mirror</option>
          <option value="clone">Gdrive, Gdtot</option>
          <option value="watch">YT, Netrc</option>
        </select>
        <input class="input col-8" id="url" type="url" name="url" placeholder="Enter your direct file link or torrent link" required />
      </div>
      <button type="submit" class="btn btn-primary" id="sub">Start mirror</button>
    </form>
    <span>* max mirror size is 60 GB.</span>
  </section -->

    <section>
        <div class="container">
            <div class="row">
                <table class="table table-bordered" id="lol">

                    <tbody>
                        <?php

                        for ($i = 0; $i < $len; $i++) :
                            $message = $messages[$i]
                        ?>
                            <tr>

                                <div class="fdate col-sm-12 col-lg-2"><?php
                                                                        $date = $message->message->date;
                                                                        echo date('m/d/Y H:i:s', $date);
                                                                        ?></div>
                                <div class="fname col-sm-12 col-lg-6"><?php echo $message->message->text ?></div>

                                <div class="dbtn col-6 col-sm-6 col-lg-2"> <a id="button-1" class="button" href="https://redirect.wecarebd.cloud<?php $url = $message->message->reply_markup->inline_keyboard[0][0]->url;
                                                                                                                                                $pos = strpos($url, "://");
                                                                                                                                                $pos = false === $pos ? 0 : $pos + 3;
                                                                                                                                                echo substr($url, strpos($url, '/', $pos));


                                                                                                                                                ?>">GDrive! <i id="arrow-hover" class="fas fa-cloud-download"></i></a> </div>

                                <div class="dbtn col-6 col-sm-6 col-lg-2"> <a id="button-1" class="button" href="https://files.cleanvpn.cloud/<?php $fname = $message->message->text;
                                                                                                                                                $fname1 = substr($fname, 10);
                                                                                                                                                echo strstr($fname1, 'Size', true);

                                                                                                                                                ?>">Index!<i id="arrow-hover" class="fas fa-bolt"></i></a> </div>
                            </tr>
                        <?php endfor; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>

    <div id="dum"></div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://cdn.jsdelivr.net/gh/Tas33n/tg-mirrorbot-web@main/mirror.js"></script>

</body>

</html>