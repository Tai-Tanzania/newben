<?php

return [

    /**
     *--------------------------------------------------------------------------
     * AMP Mode
     *--------------------------------------------------------------------------
     *
     * Return AMP-compatible html code.
     *
     */
    'amp' => false,

    /**
     *--------------------------------------------------------------------------
     * Embed Options
     *--------------------------------------------------------------------------
     *
     * Global Options which could be applied to embed code.
     *
     */
    'options' => [
        // Sets global embed width where applicable. If set to null - will be
        // automatically calculated if global height is set.
        'width' => null,

        // Sets global embed height where applicable. If set to null - will be
        // automatically calculated if global width is set.
        'height' => null,

        // Sets global embed html attributes.
        'html' => [
            'iframe' => [
                'sandbox' => 'allow-scripts allow-same-origin allow-presentation',
                'layout' => 'responsive',
            ],
            'video' => [
                'controls' => 'controls',
                'layout' => 'responsive',
            ]
        ]
    ],

    /**
     *--------------------------------------------------------------------------
     * OEmbed Media Providers
     *--------------------------------------------------------------------------
     *
     * List of OEmbed media providers used to construct embed elements.
     *
     */
    'oembedProviders' => [
        'http://www.23hq.com/23/oembed' => [
            '|^https?://www\\.23hq\\.com/.*/photo/.*$|i',
        ],
        'https://api.abraia.me/oembed' => [
            '|^https?://store\\.abraia\\.me/.*$|i',
        ],
        'http://play.adpaths.com/oembed/*' => [
            '|^https?://play\\.adpaths\\.com/experience/.*$|i',
        ],
        'https://alpha-api.app.net/oembed' => [
            '|^https?://alpha\\.app\\.net/.*/post/.*$|i',
            '|^https?://photos\\.app\\.net/.*/.*$|i',
        ],
        'https://api.altrulabs.com/api/v1/social/oembed' => [
            '|^https?://app\\.altrulabs\\.com/.*/.*\\?answer_id\\=.*$|i',
            '|^https?://app\\.altrulabs\\.com/player/.*$|i',
        ],
        'https://live.amcharts.com/oembed' => [
            '|^https?://live\\.amcharts\\.com/.*$|i',
        ],
        'https://animatron.com/oembed/json' => [
            '|^https?://www\\.animatron\\.com/project/.*$|i',
            '|^https?://animatron\\.com/project/.*$|i',
        ],
        'http://animoto.com/oembeds/create' => [
            '|^https?://animoto\\.com/play/.*$|i',
        ],
        'https://display.apester.com/oembed' => [
            '|^https?://renderer\\.apester\\.com/v2/.*\\?preview\\=true&iframe_preview\\=true$|i',
        ],
        'https://storymaps.arcgis.com/oembed' => [
            '|^https?://storymaps\\.arcgis\\.com/stories/.*$|i',
        ],
        'https://app.archivos.digital/oembed/' => [
            '|^https?://app\\.archivos\\.digital/app/view/.*$|i',
        ],
        'https://audioboom.com/publishing/oembed/v4.json' => [
            '|^https?://audioboom\\.com/channels/.*$|i',
            '|^https?://audioboom\\.com/channel/.*$|i',
            '|^https?://audioboom\\.com/posts/.*$|i',
        ],
        'https://audioclip.naver.com/oembed' => [
            '|^https?://audioclip\\.naver\\.com/channels/.*/clips/.*$|i',
            '|^https?://audioclip\\.naver\\.com/audiobooks/.*$|i',
        ],
        'https://audiomack.com/oembed' => [
            '|^https?://audiomack\\.com/.*/song/.*$|i',
            '|^https?://audiomack\\.com/.*/album/.*$|i',
            '|^https?://audiomack\\.com/.*/playlist/.*$|i',
        ],
        'http://audiosnaps.com/service/oembed' => [
            '|^https?://audiosnaps\\.com/k/.*$|i',
        ],
        'https://stage-embed.avocode.com/api/oembed' => [
            '|^https?://app\\.avocode\\.com/view/.*$|i',
        ],
        'http://axiom.ninja/oembed/' => [
            '|^https?://axiom\\.ninja/.*$|i',
        ],
        'https://backtracks.fm/oembed' => [
            '|^https?://backtracks\\.fm/.*/.*/e/.*$|i',
            '|^https?://backtracks\\.fm/.*/s/.*/.*$|i',
            '|^https?://backtracks\\.fm/.*/.*/.*/.*/e/.*/.*$|i',
            '|^https?://backtracks\\.fm/.*$|i',
        ],
        'https://www.beautiful.ai/api/oembed' => [
            '|^https?://www\\.beautiful\\.ai/.*$|i',
        ],
        'https://blackfire.io/oembed' => [
            '|^https?://blackfire\\.io/profiles/.*/graph$|i',
            '|^https?://blackfire\\.io/profiles/compare/.*/graph$|i',
        ],
        'https://blogcast.host/oembed' => [
            '|^https?://blogcast\\.host/embed/.*$|i',
            '|^https?://blogcast\\.host/embedly/.*$|i',
        ],
        'http://boxofficebuz.com/oembed' => [
            '|^https?://boxofficebuz\\.com.*$|i',
        ],
        'https://view.briovr.com/api/v1/worlds/oembed/' => [
            '|^https?://view\\.briovr\\.com/api/v1/worlds/oembed/.*$|i',
        ],
        'https://buttondown.email/embed' => [
            '|^https?://buttondown\\.email/.*$|i',
        ],
        'https://cmc.byzart.eu/oembed/' => [
            '|^https?://cmc\\.byzart\\.eu/files/.*$|i',
        ],
        'http://cacoo.com/oembed.json' => [
            '|^https?://cacoo\\.com/diagrams/.*$|i',
        ],
        'http://carbonhealth.com/oembed' => [
            '|^https?://carbonhealth\\.com/practice/.*$|i',
        ],
        'http://img.catbo.at/oembed.json' => [
            '|^https?://img\\.catbo\\.at/.*$|i',
        ],
        'http://view.ceros.com/oembed' => [
            '|^https?://view\\.ceros\\.com/.*$|i',
        ],
        'http://embed.chartblocks.com/1.0/oembed' => [
            '|^https?://public\\.chartblocks\\.com/c/.*$|i',
        ],
        'http://chirb.it/oembed.json' => [
            '|^https?://chirb\\.it/.*$|i',
        ],
        'https://www.circuitlab.com/circuit/oembed/' => [
            '|^https?://www\\.circuitlab\\.com/circuit/.*$|i',
        ],
        'https://www.clipland.com/api/oembed' => [
            '|^https?://www\\.clipland\\.com/v/.*$|i',
        ],
        'http://api.clyp.it/oembed/' => [
            '|^https?://clyp\\.it/.*$|i',
            '|^https?://clyp\\.it/playlist/.*$|i',
        ],
        'https://app.ilovecoco.video/api/oembed.json' => [
            '|^https?://app\\.ilovecoco\\.video/.*/embed$|i',
        ],
        'https://codehs.com/api/sharedprogram/*/oembed/' => [
            '|^https?://codehs\\.com/editor/share_abacus/.*$|i',
        ],
        'http://codepen.io/api/oembed' => [
            '|^https?://codepen\\.io/.*$|i',
        ],
        'https://codepoints.net/api/v1/oembed' => [
            '|^https?://codepoints\\.net/.*$|i',
            '|^https?://www\\.codepoints\\.net/.*$|i',
        ],
        'https://codesandbox.io/oembed' => [
            '|^https?://codesandbox\\.io/s/.*$|i',
            '|^https?://codesandbox\\.io/embed/.*$|i',
        ],
        'http://www.collegehumor.com/oembed.json' => [
            '|^https?://www\\.collegehumor\\.com/video/.*$|i',
        ],
        'https://commaful.com/api/oembed/' => [
            '|^https?://commaful\\.com/play/.*$|i',
        ],
        'http://coub.com/api/oembed.json' => [
            '|^https?://coub\\.com/view/.*$|i',
            '|^https?://coub\\.com/embed/.*$|i',
        ],
        'http://crowdranking.com/api/oembed.json' => [
            '|^https?://crowdranking\\.com/.*/.*$|i',
        ],
        'https://staging.cyranosystems.com/oembed' => [
            '|^https?://staging\\.cyranosystems\\.com/msg/.*$|i',
            '|^https?://app\\.cyranosystems\\.com/msg/.*$|i',
        ],
        'http://api.dailymile.com/oembed?format=json' => [
            '|^https?://www\\.dailymile\\.com/people/.*/entries/.*$|i',
        ],
        'https://www.dailymotion.com/services/oembed' => [
            '|^https?://www\\.dailymotion\\.com/video/.*$|i',
        ],
        'https://api.datawrapper.de/v3/oembed/' => [
            '|^https?://datawrapper\\.dwcdn\\.net/.*$|i',
        ],
        'https://embed.deseret.com/' => [
            '|^https?://.*\\.deseret\\.com/.*$|i',
        ],
        'http://backend.deviantart.com/oembed' => [
            '|^https?://.*\\.deviantart\\.com/art/.*$|i',
            '|^https?://.*\\.deviantart\\.com/.*\\#/d.*$|i',
            '|^https?://fav\\.me/.*$|i',
            '|^https?://sta\\.sh/.*$|i',
            '|^https?://.*\\.deviantart\\.com/.*/art/.*$|i',
            '|^https?://sta\\.sh/.*",$|i',
            '|^https?://.*\\.deviantart\\.com/.*\\#/d.*"$|i',
        ],
        'https://*.didacte.com/cards/oembed\'' => [
            '|^https?://.*\\.didacte\\.com/a/course/.*$|i',
        ],
        'https://www.ultimedia.com/api/search/oembed' => [
            '|^https?://www\\.ultimedia\\.com/central/video/edit/id/.*/topic_id/.*/$|i',
            '|^https?://www\\.ultimedia\\.com/default/index/videogeneric/id/.*/showtitle/1/viewnc/1$|i',
            '|^https?://www\\.ultimedia\\.com/default/index/videogeneric/id/.*$|i',
        ],
        'http://www.dipity.com/oembed/timeline/' => [
            '|^https?://www\\.dipity\\.com/.*/.*/$|i',
        ],
        'https://www.docdroid.net/api/oembed' => [
            '|^https?://.*\\.docdroid\\.net/.*$|i',
            '|^https?://docdro\\.id/.*$|i',
            '|^https?://.*\\.docdroid\\.com/.*$|i',
        ],
        'http://dotsub.com/services/oembed' => [
            '|^https?://dotsub\\.com/view/.*$|i',
        ],
        'https://api.d.tube/oembed' => [
            '|^https?://d\\.tube/v/.*$|i',
        ],
        'http://edocr.com/api/oembed' => [
            '|^https?://edocr\\.com/docs/.*$|i',
        ],
        'https://www.edumedia-sciences.com/oembed.json' => [
            '|^https?://www\\.edumedia\\-sciences\\.com/.*$|i',
        ],
        'https://www.edumedia-sciences.com/oembed.xml' => [
            '|^https?://www\\.edumedia\\-sciences\\.com/.*$|i',
        ],
        'http://egliseinfo.catholique.fr/api/oembed' => [
            '|^https?://egliseinfo\\.catholique\\.fr/.*$|i',
        ],
        'http://embedarticles.com/oembed/' => [
            '|^https?://embedarticles\\.com/.*$|i',
        ],
        'https://embedery.com/api/oembed' => [
            '|^https?://embedery\\.com/widget/.*$|i',
        ],
        'http://api.embed.ly/1/oembed' => [
            '|^https?://api\\.embed\\.ly/.*$|i',
        ],
        'https://ethfiddle.com/services/oembed/' => [
            '|^https?://ethfiddle\\.com/.*$|i',
        ],
        'https://eyrie.io/v1/oembed' => [
            '|^https?://eyrie\\.io/board/.*$|i',
            '|^https?://eyrie\\.io/sparkfun/.*$|i',
        ],
        'https://www.facebook.com/plugins/post/oembed.json' => [
            '|^https?://www\\.facebook\\.com/.*/posts/.*$|i',
            '|^https?://www\\.facebook\\.com/photos/.*$|i',
            '|^https?://www\\.facebook\\.com/.*/photos/.*$|i',
            '|^https?://www\\.facebook\\.com/photo\\.php.*$|i',
            '|^https?://www\\.facebook\\.com/photo\\.php$|i',
            '|^https?://www\\.facebook\\.com/.*/activity/.*$|i',
            '|^https?://www\\.facebook\\.com/permalink\\.php$|i',
            '|^https?://www\\.facebook\\.com/media/set\\?set\\=.*$|i',
            '|^https?://www\\.facebook\\.com/questions/.*$|i',
            '|^https?://www\\.facebook\\.com/notes/.*/.*/.*$|i',
        ],
        'https://www.facebook.com/plugins/video/oembed.json' => [
            '|^https?://www\\.facebook\\.com/.*/videos/.*$|i',
            '|^https?://www\\.facebook\\.com/video\\.php$|i',
        ],
        'https://app.getfader.com/api/oembed' => [
            '|^https?://app\\.getfader\\.com/projects/.*/publish$|i',
        ],
        'https://faithlifetv.com/api/oembed' => [
            '|^https?://faithlifetv\\.com/items/.*$|i',
            '|^https?://faithlifetv\\.com/items/resource/.*/.*$|i',
            '|^https?://faithlifetv\\.com/media/.*$|i',
            '|^https?://faithlifetv\\.com/media/assets/.*$|i',
            '|^https?://faithlifetv\\.com/media/resource/.*/.*$|i',
        ],
        'https://www.fireworktv.com/oembed' => [
            '|^https?://.*\\.fireworktv\\.com/.*$|i',
            '|^https?://.*\\.fireworktv\\.com/embed/.*/v/.*$|i',
        ],
        'https://www.fite.tv/oembed' => [
            '|^https?://www\\.fite\\.tv/watch/.*$|i',
        ],
        'https://flat.io/services/oembed' => [
            '|^https?://flat\\.io/score/.*$|i',
            '|^https?://.*\\.flat\\.io/score/.*$|i',
        ],
        'https://www.flickr.com/services/oembed/' => [
            '|^https?://.*\\.flickr\\.com/photos/.*$|i',
            '|^https?://flic\\.kr/p/.*$|i',
        ],
        'https://app.flourish.studio/api/v1/oembed' => [
            '|^https?://public\\.flourish\\.studio/visualisation/.*$|i',
            '|^https?://public\\.flourish\\.studio/story/.*$|i',
        ],
        'https://oembed.fontself.com/' => [
            '|^https?://catapult\\.fontself\\.com/.*$|i',
        ],
        'https://fiso.foxsports.com.au/oembed' => [
            '|^https?://fiso\\.foxsports\\.com\\.au/isomorphic\\-widget/.*$|i',
        ],
        'https://framebuzz.com/oembed/' => [
            '|^https?://framebuzz\\.com/v/.*$|i',
        ],
        'http://www.funnyordie.com/oembed.json' => [
            '|^https?://www\\.funnyordie\\.com/videos/.*$|i',
        ],
        'http://api.geograph.org.uk/api/oembed' => [
            '|^https?://.*\\.geograph\\.org\\.uk/.*$|i',
            '|^https?://.*\\.geograph\\.co\\.uk/.*$|i',
            '|^https?://.*\\.geograph\\.ie/.*$|i',
            '|^https?://.*\\.wikimedia\\.org/.*_geograph\\.org\\.uk_.*$|i',
        ],
        'http://www.geograph.org.gg/api/oembed' => [
            '|^https?://.*\\.geograph\\.org\\.gg/.*$|i',
            '|^https?://.*\\.geograph\\.org\\.je/.*$|i',
            '|^https?://channel\\-islands\\.geograph\\.org/.*$|i',
            '|^https?://channel\\-islands\\.geographs\\.org/.*$|i',
            '|^https?://.*\\.channel\\.geographs\\.org/.*$|i',
        ],
        'http://geo.hlipp.de/restapi.php/api/oembed' => [
            '|^https?://geo\\-en\\.hlipp\\.de/.*$|i',
            '|^https?://geo\\.hlipp\\.de/.*$|i',
            '|^https?://germany\\.geograph\\.org/.*$|i',
        ],
        'http://embed.gettyimages.com/oembed' => [
            '|^https?://gty\\.im/.*$|i',
        ],
        'https://api.gfycat.com/v1/oembed' => [
            '|^https?://gfycat\\.com/.*$|i',
            '|^https?://www\\.gfycat\\.com/.*$|i',
        ],
        'https://www.gifnote.com/services/oembed' => [
            '|^https?://www\\.gifnote\\.com/play/.*$|i',
        ],
        'https://giphy.com/services/oembed' => [
            '|^https?://giphy\\.com/gifs/.*$|i',
            '|^https?://gph\\.is/.*$|i',
            '|^https?://media\\.giphy\\.com/media/.*/giphy\\.gif$|i',
        ],
        'https://gloria.tv/oembed/' => [
            '|^https?://gloria\\.tv/.*$|i',
        ],
        'https://api.luminery.com/oembed' => [
            '|^https?://gtchannel\\.com/watch/.*$|i',
        ],
        'https://api.gyazo.com/api/oembed' => [
            '|^https?://gyazo\\.com/.*$|i',
        ],
        'https://hearthis.at/oembed/?format=json' => [
            '|^https?://hearthis\\.at/.*/.*/$|i',
            '|^https?://hearthis\\.at/.*/set/.*/$|i',
        ],
        'https://player.hihaho.com/services/oembed/*' => [
            '|^https?://player\\.hihaho\\.com/.*$|i',
        ],
        'https://homey.app/api/oembed/flow' => [
            '|^https?://homey\\.app/f/.*$|i',
            '|^https?://homey\\.app/.*/flow/.*$|i',
        ],
        'http://huffduffer.com/oembed' => [
            '|^https?://huffduffer\\.com/.*/.*$|i',
        ],
        'http://www.hulu.com/api/oembed.json' => [
            '|^https?://www\\.hulu\\.com/watch/.*$|i',
        ],
        'http://www.ifixit.com/Embed' => [
            '|^https?://www\\.ifixit\\.com/Guide/View/.*$|i',
        ],
        'http://www.ifttt.com/oembed/' => [
            '|^https?://ifttt\\.com/recipes/.*$|i',
        ],
        'https://www.iheart.com/oembed' => [
            '|^https?://www\\.iheart\\.com/podcast/.*/.*$|i',
        ],
        'https://player.indacolive.com/services/oembed' => [
            '|^https?://player\\.indacolive\\.com/player/jwp/clients/.*$|i',
        ],
        'https://infogram.com/oembed' => [
            '|^https?://infogram\\.com/.*$|i',
        ],
        'https://infoveave.net/services/oembed/' => [
            '|^https?://.*\\.infoveave\\.net/E/.*$|i',
            '|^https?://.*\\.infoveave\\.net/P/.*$|i',
        ],
        'https://www.injurymap.com/services/oembed' => [
            '|^https?://www\\.injurymap\\.com/exercises/.*$|i',
        ],
        'https://www.inoreader.com/oembed/api/' => [
            '|^https?://www\\.inoreader\\.com/oembed/$|i',
        ],
        'http://api.inphood.com/oembed' => [
            '|^https?://.*\\.inphood\\.com/.*$|i',
        ],
        'https://api.instagram.com/oembed' => [
            '|^https?://instagram\\.com/.*/p/.*,$|i',
            '|^https?://www\\.instagram\\.com/.*/p/.*,$|i',
            '|^https?://instagram\\.com/p/.*$|i',
            '|^https?://instagr\\.am/p/.*$|i',
            '|^https?://www\\.instagram\\.com/p/.*$|i',
            '|^https?://www\\.instagr\\.am/p/.*$|i',
            '|^https?://instagram\\.com/tv/.*$|i',
            '|^https?://instagr\\.am/tv/.*$|i',
            '|^https?://www\\.instagram\\.com/tv/.*$|i',
            '|^https?://www\\.instagr\\.am/tv/.*$|i',
        ],
        'https://www.isnare.com/oembed/' => [
            '|^https?://www\\.isnare\\.com/.*$|i',
        ],
        'https://issuu.com/oembed' => [
            '|^https?://issuu\\.com/.*/docs/.*$|i',
        ],
        'https://music.ivlis.kr/oembed' => [
            '|^https?://music\\.ivlis\\.kr/.*$|i',
        ],
        'https://api.jovian.ai/oembed.json' => [
            '|^https?://jovian\\.ml/.*$|i',
            '|^https?://jovian\\.ml/viewer.*$|i',
            '|^https?://.*\\.jovian\\.ml/.*$|i',
        ],
        'https://tv.kakao.com/oembed' => [
            '|^https?://tv\\.kakao\\.com/channel/.*/cliplink/.*$|i',
            '|^https?://tv\\.kakao\\.com/channel/v/.*$|i',
            '|^https?://tv\\.kakao\\.com/channel/.*/livelink/.*$|i',
            '|^https?://tv\\.kakao\\.com/channel/l/.*$|i',
        ],
        'http://www.kickstarter.com/services/oembed' => [
            '|^https?://www\\.kickstarter\\.com/projects/.*$|i',
        ],
        'https://www.kidoju.com/api/oembed' => [
            '|^https?://www\\.kidoju\\.com/en/x/.*/.*$|i',
            '|^https?://www\\.kidoju\\.com/fr/x/.*/.*$|i',
        ],
        'https://halaman.email/service/oembed' => [
            '|^https?://halaman\\.email/form/.*$|i',
            '|^https?://aplikasi\\.kirim\\.email/form/.*$|i',
        ],
        'https://embed.kit.co/oembed' => [
            '|^https?://kit\\.co/.*/.*$|i',
        ],
        'http://www.kitchenbowl.com/oembed' => [
            '|^https?://www\\.kitchenbowl\\.com/recipe/.*$|i',
        ],
        'https://jdr.knacki.info/oembed' => [
            '|^https?://jdr\\.knacki\\.info/meuh/.*$|i',
        ],
        'https://api.spoonacular.com/knowledge/oembed' => [
            '|^https?://knowledgepad\\.co/\\#/knowledge/.*$|i',
        ],
        'http://learningapps.org/oembed.php' => [
            '|^https?://learningapps\\.org/.*$|i',
        ],
        'https://pod.univ-lille.fr/oembed' => [
            '|^https?://pod\\.univ\\-lille\\.fr/video/.*$|i',
        ],
        'https://livestream.com/oembed' => [
            '|^https?://livestream\\.com/accounts/.*/events/.*$|i',
            '|^https?://livestream\\.com/accounts/.*/events/.*/videos/.*$|i',
            '|^https?://livestream\\.com/.*/events/.*$|i',
            '|^https?://livestream\\.com/.*/events/.*/videos/.*$|i',
            '|^https?://livestream\\.com/.*/.*$|i',
            '|^https?://livestream\\.com/.*/.*/videos/.*$|i',
        ],
        'https://app.ludus.one/oembed' => [
            '|^https?://app\\.ludus\\.one/.*$|i',
        ],
        'http://mathembed.com/oembed' => [
            '|^https?://mathembed\\.com/latex\\?inputText\\=.*$|i',
        ],
        'https://my.matterport.com/api/v1/models/oembed/' => [
            '|^https?://matterport\\.com/.*$|i',
        ],
        'https://me.me/oembed' => [
            '|^https?://me\\.me/i/.*$|i',
        ],
        'https://*.medialab.(co|app)/api/oembed/' => [
            '|^https?://.*\\.medialab\\.app/share/watch/.*$|i',
            '|^https?://.*\\.medialab\\.co/share/watch/.*$|i',
            '|^https?://.*\\.medialab\\.app/share/social/.*$|i',
            '|^https?://.*\\.medialab\\.co/share/social/.*$|i',
            '|^https?://.*\\.medialab\\.app/share/embed/.*$|i',
            '|^https?://.*\\.medialab\\.co/share/embed/.*$|i',
        ],
        'https://medienarchiv.zhdk.ch/oembed.json' => [
            '|^https?://medienarchiv\\.zhdk\\.ch/entries/.*$|i',
        ],
        'https://api.meetup.com/oembed' => [
            '|^https?://meetup\\.com/.*$|i',
            '|^https?://www\\.meetup\\.com/.*$|i',
            '|^https?://meetu\\.ps/.*$|i',
        ],
        'https://mermaid.ink/services/oembed' => [
            '|^https?://mermaid\\.ink/img/.*$|i',
            '|^https?://mermaid\\.ink/svg/.*$|i',
        ],
        'https://api.microlink.io' => [
            '|^https?://api\\.microlink\\.io.*$|i',
        ],
        'https://web.microsoftstream.com/oembed' => [
            '|^https?://.*\\.microsoftstream\\.com/video/.*$|i',
            '|^https?://.*\\.microsoftstream\\.com/channel/.*$|i',
        ],
        'https://www.mixcloud.com/oembed/' => [
            '|^https?://www\\.mixcloud\\.com/.*/.*/$|i',
        ],
        'http://api.mobypicture.com/oEmbed' => [
            '|^https?://www\\.mobypicture\\.com/user/.*/view/.*$|i',
            '|^https?://moby\\.to/.*$|i',
        ],
        'https://portal.modelo.io/oembed' => [
            '|^https?://beta\\.modelo\\.io/embedded/.*$|i',
        ],
        'https://m-roll.morphcast.com/service/oembed' => [
            '|^https?://m\\-roll\\.morphcast\\.com/mroll/.*$|i',
        ],
        'https://musicboxmaniacs.com/embed/' => [
            '|^https?://musicboxmaniacs\\.com/explore/melody/.*$|i',
        ],
        'https://mybeweeg.com/services/oembed' => [
            '|^https?://mybeweeg\\.com/w/.*$|i',
        ],
        'https://namchey.com/api/oembed' => [
            '|^https?://namchey\\.com/embeds/.*$|i',
        ],
        'https://www.nanoo.tv/services/oembed' => [
            '|^https?://.*\\.nanoo\\.tv/link/.*$|i',
            '|^https?://nanoo\\.tv/link/.*$|i',
            '|^https?://.*\\.nanoo\\.pro/link/.*$|i',
            '|^https?://nanoo\\.pro/link/.*$|i',
            '|^https?://media\\.zhdk\\.ch/signatur/.*$|i',
            '|^https?://new\\.media\\.zhdk\\.ch/signatur/.*$|i',
        ],
        'https://api.nb.no/catalog/v1/oembed' => [
            '|^https?://www\\.nb\\.no/items/.*$|i',
        ],
        'https://naturalatlas.com/oembed.json' => [
            '|^https?://naturalatlas\\.com/.*$|i',
            '|^https?://naturalatlas\\.com/.*/.*$|i',
            '|^https?://naturalatlas\\.com/.*/.*/.*$|i',
            '|^https?://naturalatlas\\.com/.*/.*/.*/.*$|i',
        ],
        'http://www.nfb.ca/remote/services/oembed/' => [
            '|^https?://.*\\.nfb\\.ca/film/.*$|i',
        ],
        'https://www.odds.com.au/api/oembed/' => [
            '|^https?://www\\.odds\\.com\\.au/.*$|i',
            '|^https?://odds\\.com\\.au/.*$|i',
        ],
        'https://song.link/oembed' => [
            '|^https?://song\\.link/.*$|i',
            '|^https?://album\\.link/.*$|i',
            '|^https?://artist\\.link/.*$|i',
            '|^https?://playlist\\.link/.*$|i',
            '|^https?://pods\\.link/.*$|i',
            '|^https?://mylink\\.page/.*$|i',
            '|^https?://odesli\\.co/.*$|i',
        ],
        'http://official.fm/services/oembed.json' => [
            '|^https?://official\\.fm/tracks/.*$|i',
            '|^https?://official\\.fm/playlists/.*$|i',
        ],
        'https://omniscope.me/_global_/oembed/json' => [
            '|^https?://omniscope\\.me/.*$|i',
        ],
        'http://on.aol.com/api' => [
            '|^https?://on\\.aol\\.com/video/.*$|i',
        ],
        'https://www.ora.tv/oembed/*?format=json' => [
            '|^https?://www\\.ora\\.tv/.*$|i',
        ],
        'http://orbitvu.co/service/oembed' => [
            '|^https?://orbitvu\\.co/001/.*/ov3601/view$|i',
            '|^https?://orbitvu\\.co/001/.*/ov3601/.*/view$|i',
            '|^https?://orbitvu\\.co/001/.*/ov3602/.*/view$|i',
            '|^https?://orbitvu\\.co/001/.*/2/orbittour/.*/view$|i',
            '|^https?://orbitvu\\.co/001/.*/1/2/orbittour/.*/view$|i',
        ],
        'https://www.oumy.com/oembed' => [
            '|^https?://www\\.oumy\\.com/v/.*$|i',
        ],
        'https://outplayed.tv/oembed' => [
            '|^https?://outplayed\\.tv/media/.*$|i',
        ],
        'https://overflow.io/services/oembed' => [
            '|^https?://overflow\\.io/s/.*$|i',
            '|^https?://overflow\\.io/embed/.*$|i',
        ],
        'https://core.oz.com/oembed' => [
            '|^https?://www\\.oz\\.com/.*/video/.*$|i',
        ],
        'https://padlet.com/oembed/' => [
            '|^https?://padlet\\.com/.*$|i',
        ],
        'https://www.pastery.net/oembed' => [
            '|^https?://pastery\\.net/.*$|i',
            '|^https?://www\\.pastery\\.net/.*$|i',
        ],
        'https://beta.pingvp.com.kpnis.nl/p/oembed.php' => [
            '|^https?://www\\.pingvp\\.com/.*$|i',
        ],
        'https://tools.pinpoll.com/oembed' => [
            '|^https?://tools\\.pinpoll\\.com/.*$|i',
        ],
        'https://store.pixdor.com/oembed' => [
            '|^https?://store\\.pixdor\\.com/place\\-marker\\-widget/.*/show$|i',
            '|^https?://store\\.pixdor\\.com/map/.*/show$|i',
        ],
        'https://api.podbean.com/v1/oembed' => [
            '|^https?://.*\\.podbean\\.com/e/.*$|i',
        ],
        'https://api.polarishare.com/rest/api/oembed' => [
            '|^https?://www\\.polarishare\\.com/.*/.*$|i',
        ],
        'http://polldaddy.com/oembed/' => [
            '|^https?://.*\\.polldaddy\\.com/s/.*$|i',
            '|^https?://.*\\.polldaddy\\.com/poll/.*$|i',
            '|^https?://.*\\.polldaddy\\.com/ratings/.*$|i',
        ],
        'https://api.sellwithport.com/v1.0/buyer/oembed' => [
            '|^https?://app\\.sellwithport\\.com/\\#/buyer/.*$|i',
        ],
        'https://api.portfolium.com/oembed' => [
            '|^https?://portfolium\\.com/entry/.*$|i',
        ],
        'http://posixion.com/services/oembed/' => [
            '|^https?://posixion\\.com/question/.*$|i',
            '|^https?://posixion\\.com/.*/question/.*$|i',
        ],
        'https://oembed.qualifio.com/' => [
            '|^https?://qualifio\\.com/.*$|i',
        ],
        'http://www.quiz.biz/api/oembed' => [
            '|^https?://www\\.quiz\\.biz/quizz\\-.*\\.html$|i',
        ],
        'http://www.quizz.biz/api/oembed' => [
            '|^https?://www\\.quizz\\.biz/quizz\\-.*\\.html$|i',
        ],
        'https://oembed.radiopublic.com/oembed' => [
            '|^https?://play\\.radiopublic\\.com/.*$|i',
            '|^https?://radiopublic\\.com/.*$|i',
            '|^https?://www\\.radiopublic\\.com/.*$|i',
            '|^https?://.*\\.radiopublic\\.com/.*\'$|i',
        ],
        'https://rapidengage.com/api/oembed' => [
            '|^https?://rapidengage\\.com/s/.*$|i',
        ],
        'https://www.reddit.com/oembed' => [
            '|^https?://reddit\\.com/r/.*/comments/.*/.*$|i',
            '|^https?://www\\.reddit\\.com/r/.*/comments/.*/.*$|i',
        ],
        'http://publisher.releasewire.com/oembed/' => [
            '|^https?://rwire\\.com/.*$|i',
        ],
        'https://repl.it/data/oembed' => [
            '|^https?://repl\\.it/@.*/.*$|i',
        ],
        'http://repubhub.icopyright.net/oembed.act' => [
            '|^https?://repubhub\\.icopyright\\.net/freePost\\.act\\?.*$|i',
        ],
        'https://www.reverbnation.com/oembed' => [
            '|^https?://www\\.reverbnation\\.com/.*$|i',
            '|^https?://www\\.reverbnation\\.com/.*/songs/.*$|i',
        ],
        'https://www.riffreporter.de/service/oembed' => [
            '|^https?://www\\.riffreporter\\.de/.*$|i',
        ],
        'http://roomshare.jp/en/oembed.json' => [
            '|^https?://roomshare\\.jp/post/.*$|i',
            '|^https?://roomshare\\.jp/en/post/.*$|i',
        ],
        'https://roosterteeth.com/oembed' => [
            '|^https?://roosterteeth\\.com/.*$|i',
        ],
        'https://rumble.com/api/Media/oembed.json' => [
            '|^https?://rumble\\.com/.*$|i',
        ],
        'https://embed.runkit.com/oembed' => [
            '|^https?://embed\\.runkit\\.com/.*,$|i',
        ],
        'http://videos.sapo.pt/oembed' => [
            '|^https?://videos\\.sapo\\.pt/.*$|i',
        ],
        'https://api.screen9.com/oembed' => [
            '|^https?://console\\.screen9\\.com/.*$|i',
            '|^https?://.*\\.screen9\\.tv/.*$|i',
        ],
        'https://api.screencast.com/external/oembed' => [
            '|^https?://www\\.screencast\\.com/.*$|i',
        ],
        'http://www.screenr.com/api/oembed.json' => [
            '|^https?://www\\.screenr\\.com/.*/$|i',
        ],
        'https://scribblemaps.com/api/services/oembed.json' => [
            '|^https?://www\\.scribblemaps\\.com/maps/view/.*$|i',
            '|^https?://scribblemaps\\.com/maps/view/.*$|i',
        ],
        'http://www.scribd.com/services/oembed/' => [
            '|^https?://www\\.scribd\\.com/doc/.*$|i',
            '|^https?://www\\.scribd\\.com/document/.*$|i',
        ],
        'https://embed.sendtonews.com/services/oembed' => [
            '|^https?://embed\\.sendtonews\\.com/oembed/.*$|i',
        ],
        'https://www.shortnote.jp/oembed/' => [
            '|^https?://www\\.shortnote\\.jp/view/notes/.*$|i',
        ],
        'http://shoudio.com/api/oembed' => [
            '|^https?://shoudio\\.com/.*$|i',
            '|^https?://shoud\\.io/.*$|i',
        ],
        'https://showtheway.io/oembed' => [
            '|^https?://showtheway\\.io/to/.*$|i',
        ],
        'https://simplecast.com/oembed' => [
            '|^https?://simplecast\\.com/s/.*$|i',
        ],
        'https://onsizzle.com/oembed' => [
            '|^https?://onsizzle\\.com/i/.*$|i',
        ],
        'http://sketchfab.com/oembed' => [
            '|^https?://sketchfab\\.com/models/.*$|i',
            '|^https?://sketchfab\\.com/.*/folders/.*$|i',
        ],
        'http://www.slideshare.net/api/oembed/2' => [
            '|^https?://www\\.slideshare\\.net/.*/.*$|i',
            '|^https?://fr\\.slideshare\\.net/.*/.*$|i',
            '|^https?://de\\.slideshare\\.net/.*/.*$|i',
            '|^https?://es\\.slideshare\\.net/.*/.*$|i',
            '|^https?://pt\\.slideshare\\.net/.*/.*$|i',
        ],
        'https://smashnotes.com/services/oembed' => [
            '|^https?://smashnotes\\.com/p/.*$|i',
            '|^https?://smashnotes\\.com/p/.*/e/.* \\- smashnotes\\.com/p/.*/e/.*/s/.*$|i',
        ],
        'https://api.smugmug.com/services/oembed/' => [
            '|^https?://.*\\.smugmug\\.com/.*$|i',
        ],
        'https://www.socialexplorer.com/services/oembed/' => [
            '|^https?://www\\.socialexplorer\\.com/.*/explore$|i',
            '|^https?://www\\.socialexplorer\\.com/.*/view$|i',
            '|^https?://www\\.socialexplorer\\.com/.*/edit$|i',
            '|^https?://www\\.socialexplorer\\.com/.*/embed$|i',
        ],
        'https://soundcloud.com/oembed' => [
            '|^https?://soundcloud\\.com/.*$|i',
        ],
        'https://play.soundsgood.co/oembed' => [
            '|^https?://play\\.soundsgood\\.co/playlist/.*$|i',
            '|^https?://soundsgood\\.co/playlist/.*$|i',
        ],
        'https://speakerdeck.com/oembed.json' => [
            '|^https?://speakerdeck\\.com/.*/.*$|i',
        ],
        'https://api.bespotful.com/oembed' => [
            '|^https?://play\\.bespotful\\.com/.*$|i',
        ],
        'https://embed.spotify.com/oembed/' => [
            '|^https?://.*\\.spotify\\.com/.*$|i',
            '|^https?://spotify\\:.*$|i',
        ],
        'https://api.spreaker.com/oembed' => [
            '|^https?://.*\\.spreaker\\.com/.*$|i',
        ],
        'https://purl.stanford.edu/embed.json' => [
            '|^https?://purl\\.stanford\\.edu/.*$|i',
        ],
        'https://api.streamable.com/oembed.json' => [
            '|^https?://streamable\\.com/.*$|i',
        ],
        'https://content.streamonecloud.net/oembed' => [
            '|^https?://content\\.streamonecloud\\.net/embed/.*$|i',
        ],
        'https://www.sutori.com/api/oembed' => [
            '|^https?://www\\.sutori\\.com/story/.*$|i',
        ],
        'https://sway.com/api/v1.0/oembed' => [
            '|^https?://sway\\.com/.*$|i',
            '|^https?://www\\.sway\\.com/.*$|i',
        ],
        'https://www.ted.com/services/v1/oembed.json' => [
            '|^https?://ted\\.com/talks/.*$|i',
            '|^https?://www\\.ted\\.com/talks/.*$|i',
        ],
        'https://www.nytimes.com/svc/oembed/json/' => [
            '|^https?://www\\.nytimes\\.com/svc/oembed$|i',
            '|^https?://nytimes\\.com/.*$|i',
            '|^https?://.*\\.nytimes\\.com/.*$|i',
        ],
        'https://theysaidso.com/extensions/oembed/' => [
            '|^https?://theysaidso\\.com/image/.*$|i',
        ],
        'https://www.tickcounter.com/oembed' => [
            '|^https?://www\\.tickcounter\\.com/countdown/.*$|i',
            '|^https?://www\\.tickcounter\\.com/countup/.*$|i',
            '|^https?://www\\.tickcounter\\.com/ticker/.*$|i',
            '|^https?://www\\.tickcounter\\.com/worldclock/.*$|i',
        ],
        'https://www.tiktok.com/oembed' => [
            '|^https?://www\\.tiktok\\.com/.*/video/.*$|i',
            '|^https?://.*\\.tiktok\\.com/.*$|i',
        ],
        'https://widget.toornament.com/oembed' => [
            '|^https?://www\\.toornament\\.com/tournaments/.*/information$|i',
            '|^https?://www\\.toornament\\.com/tournaments/.*/registration/$|i',
            '|^https?://www\\.toornament\\.com/tournaments/.*/matches/schedule$|i',
            '|^https?://www\\.toornament\\.com/tournaments/.*/stages/.*/$|i',
        ],
        'http://www.topy.se/oembed/' => [
            '|^https?://www\\.topy\\.se/image/.*$|i',
        ],
        'https://www.tuxx.be/services/oembed' => [
            '|^https?://www\\.tuxx\\.be/.*$|i',
        ],
        'https://play.tvcf.co.kr/rest/oembed' => [
            '|^https?://play\\.tvcf\\.co\\.kr/.*$|i',
            '|^https?://.*\\.tvcf\\.co\\.kr/.*$|i',
        ],
        'https://api.twitch.tv/v5/oembed' => [
            '|^https?://clips\\.twitch\\.tv/.*$|i',
            '|^https?://www\\.twitch\\.tv/.*$|i',
            '|^https?://twitch\\.tv/.*$|i',
        ],
        'https://publish.twitter.com/oembed' => [
            '|^https?://twitter\\.com/.*/status/.*$|i',
            '|^https?://.*\\.twitter\\.com/.*/status/.*$|i',
        ],
        'https://play.typecast.ai/oembed' => [
            '|^https?://play\\.typecast\\.ai/s/.*$|i',
            '|^https?://play\\.typecast\\.ai/e/.*$|i',
            '|^https?://play\\.typecast\\.ai/.*$|i',
        ],
        'https://typlog.com/oembed' => [
            '|^https?://typlog\\.com.*$|i',
        ],
        'https://player.ubideo.com/api/oembed.json' => [
            '|^https?://player\\.ubideo\\.com/.*$|i',
        ],
        'https://map.cam.ac.uk/oembed/' => [
            '|^https?://map\\.cam\\.ac\\.uk/.*$|i',
        ],
        'https://mediatheque.univ-paris1.fr/oembed' => [
            '|^https?://mediatheque\\.univ\\-paris1\\.fr/video/.*$|i',
        ],
        'https://mais.uol.com.br/apiuol/v3/oembed/view' => [
            '|^https?://.*\\.uol\\.com\\.br/view/.*$|i',
            '|^https?://.*\\.uol\\.com\\.br/video/.*$|i',
        ],
        'http://www.ustream.tv/oembed' => [
            '|^https?://.*\\.ustream\\.tv/.*$|i',
            '|^https?://.*\\.ustream\\.com/.*$|i',
        ],
        'https://app.ustudio.com/api/v2/oembed' => [
            '|^https?://.*\\.ustudio\\.com/embed/.*$|i',
            '|^https?://.*\\.ustudio\\.com/embed/.*/.*$|i',
        ],
        'https://www.utposts.com/api/oembed' => [
            '|^https?://www\\.utposts\\.com/products/.*$|i',
            '|^https?://utposts\\.com/products/.*$|i',
        ],
        'http://uttles.com/api/reply/oembed' => [
            '|^https?://uttles\\.com/uttle/.*$|i',
        ],
        'https://api.veer.tv/oembed' => [
            '|^https?://veer\\.tv/videos/.*$|i',
        ],
        'https://api.veervr.tv/oembed' => [
            '|^https?://veervr\\.tv/videos/.*$|i',
        ],
        'http://verse.com/services/oembed/' => [
            '|^https?://verse\\.com/.*$|i',
        ],
        'https://www.vevo.com/oembed' => [
            '|^https?://www\\.vevo\\.com/.*$|i',
        ],
        'http://www.videojug.com/oembed.json' => [
            '|^https?://www\\.videojug\\.com/film/.*$|i',
            '|^https?://www\\.videojug\\.com/interview/.*$|i',
        ],
        'https://api.vidl.it/oembed' => [
            '|^https?://vidl\\.it/.*$|i',
        ],
        'https://app-v2.vidmizer.com/api/oembed' => [
            '|^https?://players\\-cdn\\-v2\\.vidmizer\\.com/.*$|i',
        ],
        'https://api.vidyard.com/dashboard/v1.1/oembed' => [
            '|^https?://.*\\.vidyard\\.com/.*$|i',
            '|^https?://.*\\.hubs\\.vidyard\\.com/.*$|i',
        ],
        'https://vimeo.com/api/oembed.json' => [
            '|^https?://vimeo\\.com/.*$|i',
            '|^https?://vimeo\\.com/album/.*/video/.*$|i',
            '|^https?://vimeo\\.com/channels/.*/.*$|i',
            '|^https?://vimeo\\.com/groups/.*/videos/.*$|i',
            '|^https?://vimeo\\.com/ondemand/.*/.*$|i',
            '|^https?://player\\.vimeo\\.com/video/.*$|i',
        ],
        'https://www.viously.com/oembed' => [
            '|^https?://www\\.viously\\.com/.*/.*$|i',
        ],
        'http://viziosphere.com/services/oembed/' => [
            '|^https?://viziosphere\\.com/3dphoto.*$|i',
        ],
        'https://vizydrop.com/oembed' => [
            '|^https?://vizydrop\\.com/shared/.*$|i',
        ],
        'https://vlipsy.com/oembed' => [
            '|^https?://vlipsy\\.com/.*$|i',
        ],
        'https://www.vlive.tv/oembed' => [
            '|^https?://www\\.vlive\\.tv/video/.*$|i',
        ],
        'https://vlurb.co/oembed.json' => [
            '|^https?://vlurb\\.co/video/.*$|i',
        ],
        'https://data.voxsnap.com/oembed' => [
            '|^https?://article\\.voxsnap\\.com/.*/.*$|i',
        ],
        'https://embed.wave.video/oembed' => [
            '|^https?://watch\\.wave\\.video/.*$|i',
            '|^https?://embed\\.wave\\.video/.*$|i',
        ],
        'http://play.wecandeo.com/oembed' => [
            '|^https?://www\\.wecandeo\\.com/.*$|i',
        ],
        'http://*.wiredrive.com/present-oembed/' => [
            '|^https?://.*\\.wiredrive\\.com/.*$|i',
        ],
        'https://fast.wistia.com/oembed.json' => [
            '|^https?://fast\\.wistia\\.com/embed/iframe/.*$|i',
            '|^https?://fast\\.wistia\\.com/embed/playlists/.*$|i',
            '|^https?://.*\\.wistia\\.com/medias/.*$|i',
        ],
        'http://app.wizer.me/api/oembed.json' => [
            '|^https?://.*\\.wizer\\.me/learn/.*$|i',
            '|^https?://.*\\.wizer\\.me/preview/.*$|i',
        ],
        'https://wokwi.com/api/oembed' => [
            '|^https?://wokwi\\.com/share/.*$|i',
        ],
        'http://www.wootled.com/oembed' => [
            '|^https?://www\\.wootled\\.com/.*$|i',
        ],
        'http://public-api.wordpress.com/oembed/' => [
            '|^https?://wordpress\\.com/.*$|i',
        ],
        'https://web.xpression.jp/api/oembed' => [
            '|^https?://web\\.xpression\\.jp/video/.*$|i',
        ],
        'http://yesik.it/s/oembed' => [
            '|^https?://yesik\\.it/.*$|i',
            '|^https?://www\\.yesik\\.it/.*$|i',
        ],
        'http://www.yfrog.com/api/oembed' => [
            '|^https?://.*\\.yfrog\\.com/.*$|i',
            '|^https?://yfrog\\.us/.*$|i',
        ],
        'https://www.youtube.com/oembed' => [
            '|^https?://.*\\.youtube\\.com/watch.*$|i',
            '|^https?://.*\\.youtube\\.com/v/.*$|i',
            '|^https?://youtu\\.be/.*$|i',
            '|^https?://.*\\.youtube\\.com/playlist\\?.*$|i',
        ],
        'https://app.zeplin.io/embed' => [
            '|^https?://app\\.zeplin\\.io/project/.*/screen/.*$|i',
            '|^https?://app\\.zeplin\\.io/project/.*/screen/.*/version/.*$|i',
            '|^https?://app\\.zeplin\\.io/project/.*/styleguide/components\\?coid\\=.*$|i',
            '|^https?://app\\.zeplin\\.io/styleguide/.*/components\\?coid\\=.*$|i',
        ],
        'https://app.zingsoft.com/oembed' => [
            '|^https?://app\\.zingsoft\\.com/embed/.*$|i',
            '|^https?://app\\.zingsoft\\.com/view/.*$|i',
        ],
        'https://api.znipe.tv/v3/oembed/' => [
            '|^https?://.*\\.znipe\\.tv/.*$|i',
        ],
        'https://srv2.zoomable.ca/oembed' => [
            '|^https?://srv2\\.zoomable\\.ca/viewer\\.php.*$|i',
        ],
        'http://jsbin.com/oembed' => [
            '|^https?://output\\.jsbin\\.com/.*$|i',
        ],
        'https://api.crowdsignal.com/oembed' => [
            '|^https?://polldaddy\\.com/poll/.*$|i',
            '|^https?://poll\\.fm/.*$|i',
        ],
        'https://api.imgur.com/oembed' => [
            '|^https?://imgur\\.com/.*$|i',
            '|^https?://i\\.imgur\\.com/.*$|i',
        ],
    ],

    /**
     *--------------------------------------------------------------------------
     * Regex Media Providers
     *--------------------------------------------------------------------------
     *
     * List of media providers used to construct embed elements.
     *
     */
    'regexProviders' => [
        'liveleak' => [
            'ssl' => true,
            'urls' => [
                '~^https?://(?:www\.)?liveleak\.com/ll_embed\?f=([0-9a-z]+)~imu',
                '~^https?://(?:www\.)?liveleak\.com/view\?t=([0-9a-z_]+)~imu'
            ],
            'data' => [
                'type' => 'video',
                'provider_name' => 'LiveLeak',
                'provider_url' => 'https://www.liveleak.com',
                'width' => 640,
                'height' => 360,
                'html' => [
                    'iframe' => [
                        'src' => '{protocol}://liveleak.com/e/{1}',
                    ],
                ],
            ],
        ],

        'ign' => [
            'ssl' => true,
            'urls' => [
                '~^https?://(?:www\.)?ign\.com/videos/([0-9a-zA-Z-_/]+)~imu'
            ],
            'data' => [
                'type' => 'video',
                'provider_name' => 'IGN',
                'provider_url' => 'https://ign.com',
                'width' => 560,
                'height' => 315,
                'html' => [
                    'iframe' => [
                        'src' => '{protocol}://widgets.ign.com/video/embed/content.html?url={1}',
                    ],
                ],
            ],
        ],

        'vine' => [
            'ssl' => true,
            'urls' => [
                '~^https?://(?:www\.)?vine\.co/v/([0-9a-zA-Z]+)~imu',
            ],
            'data' => [
                'type' => 'video',
                'provider_name' => 'Vine',
                'provider_url' => 'https://vine.co',
                'width' => 600,
                'height' => 600,
                'html' => [
                    'iframe' => [
                        'src' => '{protocol}://vine.co/v/{1}/embed/postcard',
                    ],
                ],
            ],
        ],

        'html5video' => [
            'ssl' => false,
            'urls' => [
                '~^https?://(.*).(mp4|ogg|webm)$~imu',
            ],
            'data' => [
                'type' => 'video',
                'provider_name' => 'HTML5 Video',
                'provider_url' => '{protocol}://{1}.{2}',
                'width' => 600,
                'height' => 339,
                'html' => [
                    'video' => [
                        'source' => [
                            [
                                'src' => '{protocol}://{1}.webm',
                                'type' => 'video/webm',
                            ],
                            [
                                'src' => '{protocol}://{1}.ogg',
                                'type' => 'video/ogg',
                            ],
                            [
                                'src' => '{protocol}://{1}.mp4',
                                'type' => 'video/mp4',
                            ],
                        ],
                    ],
                ],
            ],
        ],
    ],
];
